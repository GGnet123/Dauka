<?php

namespace backend\controllers;

use Yii;
use backend\models\OrderDelivery;
use backend\models\search\OrderDeliverySearch;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OrderDeliveryController implements the CRUD actions for OrderDelivery model.
 */
class OrderDeliveryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OrderDelivery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderDeliverySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderDelivery model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OrderDelivery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderDelivery();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrderDelivery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OrderDelivery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderDelivery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderDelivery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderDelivery::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionImageUpload() {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $imageFile = UploadedFile::getInstancesByName('OrderDelivery');

            $directory = Yii::getAlias('@content') . '/';
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            if ($imageFile) {
                $files = [];
                $imagePath = [];
                foreach ($imageFile as $image) {
                    $uid = uniqid(time(), true);
                    $rand_str = Yii::$app->security->generateRandomString(8);
                    $fileName = $uid . $rand_str . '.' . $image->extension;
                    $filePath = $directory . $fileName;
                    if ($image->saveAs($filePath)) {
                        $path = '/' . $fileName;
                        $imagePath[] = $path;
                        $files['files'][] =  [
                            'name' => $fileName,
                            'size' => $image->size,
                            'url' => $path,
                            'thumbnailUrl' => $path,
                            'deleteUrl' => 'image-delete?name=' . $fileName,
                            'deleteType' => 'POST',
                        ];
                    }
                }
                if (Yii::$app->session->get(Yii::$app->session->id)) {
                    $temp = Yii::$app->session->get(Yii::$app->session->id);
                    $res = array_merge(Json::decode($temp), $imagePath);
                    Yii::$app->session->set(Yii::$app->session->id,  Json::encode($res));
                } else {
                    Yii::$app->session->set(Yii::$app->session->id,  Json::encode($imagePath));
                }
                return Json::encode($files);
            }
        }
        return '';
    }

    public function actionImageDelete()
    {
        $imgPath = Yii::$app->request->post('imagePath');
        $modelId = Yii::$app->request->post('modelId');

        if ($modelId && $modelId != 0) {
            $model = OrderDelivery::findOne(['id' => $modelId]);
            $newImages = [];
            foreach (json_decode($model->photo) as $photo) {
                if ($photo != '/' . $imgPath) {
                     $newImages[] = $photo;
                }
            }
            if (!empty($newImages)) {
                $model->photo = json_encode($newImages);
            } else {
                $model->photo = '';
            }
            $model->save(false);
        }
        $directory = Yii::getAlias('@content');
        if ($imgPath) {
            if (is_file($directory . DIRECTORY_SEPARATOR . $imgPath)) {
                unlink($directory . DIRECTORY_SEPARATOR . $imgPath);
            }
        }

        $files = FileHelper::findFiles($directory);
        $output = [];
        foreach ($files as $file) {
            $fileName = basename($file);
            $path = '/' . Yii::$app->user->id . '/' . $fileName;;
            $output['files'][] = [
                'name' => $fileName,
                'size' => filesize($file),
                'url' => Yii::$app->params['content'] . $path,
                'thumbnailUrl' => Yii::$app->params['content'] . $path,
                'deleteUrl' => 'image-delete?name=' . $fileName,
                'deleteType' => 'POST',
            ];
        }
        return Json::encode($output);
    }

    public function actionImageRemove() {
        $directory = Yii::getAlias('@content');
        $files = FileHelper::findFiles($directory);
        $output = [];
        foreach ($files as $file) {
            $fileName = basename($file);
            $path = '/' . Yii::$app->user->id . '/' . $fileName;;
            $output['files'][] = [
                'name' => $fileName,
                'size' => filesize($file),
                'url' => Yii::$app->params['content'] . $path,
                'thumbnailUrl' => Yii::$app->params['content'] . $path,
                'deleteUrl' => 'image-delete?name=' . $fileName,
                'deleteType' => 'POST',
            ];
        }
        return Json::encode($output);
    }
}
