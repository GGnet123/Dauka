<?php
namespace frontend\controllers;

use common\models\User;
use frontend\models\Advertisement;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('single-agency-home');
    }

    public function actionGrid() {
        $data = Yii::$app->request->get();
        if ($data) {
            $ads = \frontend\models\Advertisement::find();
            if ($data['region']) {
                $ads = $ads
                    ->where("region like '%" . $data['region'] . "%'");
            }
            if ($data['city']) {
                $ads = $ads->andWhere("city like '%" . $data['city'] . "%'");
            }
            if ($data['price']) {
                $min = trim(explode('-', $data['price'])[0]);
                $max = trim(explode('-', $data['price'])[1]);
                $res = "price > " . intval($min);
                if ($max != 0) {
                    $res .= " AND price < " . intval($max);
                }
                $ads = $ads->andWhere($res);
            }
            if ($data['area']) {
                $min = trim(explode('-', $data['area'])[0]);
                $max = trim(explode('-', $data['area'])[1]);
                $res = "area > " . intval($min);
                if ($max != 0) {
                    $res .= " AND area < " . intval($max);
                }
                $ads = $ads->andWhere($res);
            }
            $ads = $ads->all();
        } else {
            $ads = \frontend\models\Advertisement::find()
                ->all();
        }

        return $this->render('grid-fullwidth', ['ads' => $ads]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $data = Yii::$app->request->post();
        $user = User::findOne(['phone_number' => $data['username']]);

        if ($user && $user->validatePassword($data['password'])) {
            Yii::$app->user->login($user, 3600 * 24 * 30);
            return 1;
        }
        return 0;
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionAddListing() {
        return $this->render('add-listing');
    }

    public function actionCreateAd() {
        $data = Yii::$app->request->post();
        $model = new Advertisement([
            'name' => $data['name'], 'address' => $data['address'],
            'area' => $data['area'], 'year' => $data['year'],
            'region' => $data['region'], 'price' => $data['price'],
            'city' => $data['city'], 'description' => $data['description'],
        ]);
        if ($model->save()) {
            return 1;
        }
        return 0;
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
