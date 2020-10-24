<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $phone_number;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['phone_number', 'trim'],
            ['phone_number', 'required'],
            ['phone_number', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This phone number has already been taken.'],
            ['phone_number', 'string', 'min' => 11, 'max' => 20],

            ['password', 'required'],
            ['password', 'string', 'min' => 5],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->phone_number = $this->phone_number;
        $user->password_hash = $this->password;
        return $user->save();

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
