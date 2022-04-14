<?php

namespace backend\controllers;

use common\models\Contact;
use common\models\LoginForm;
use common\models\Patientgalid;
use Yii;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [

                        'actions' => ['login', 'error'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
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
        ];
    }


    public function actionIndex()
    {
        $query = Patientgalid::find()->where(['status' => 'active']);
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'PageSize' => 20,
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $clon = Contact::find()->where(['status' => 'active']);
        $page = new Pagination([
            'totalCount' => $clon->count(),
            'PageSize' => 5,
        ]);
        $model = $clon->offset($page->offset)
            ->limit($page->limit)
            ->all();



        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
            'model' => $model,
            'page' => $page,
        ]);
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
