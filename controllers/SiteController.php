<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserJoinForm;
use app\models\User;
use app\models\EarningsRecord;
use app\models\CacheRecord;

class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
     * @inheritdoc
     */
    public function actions() {
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
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionJoin() {
        if (Yii::$app->request->isPost)
            return $this->actionJoinPost();

        $userJoinForm = new UserJoinForm();
        /* $userRecord = new UserRecord();
          $userRecord ->setTestUser();
          $userJoinForm->setUserRecord($userRecord)

          ; */
        return $this->render('user\join', compact('userJoinForm')
        );
    }

    public function actionJoinPost() {
        $userJoinForm = new UserJoinForm();
        if ($userJoinForm->load(Yii::$app->request->post()))
            if ($userJoinForm->validate()) {
                $userRecord = new User();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                //return $this->redirect('/user/thanks');
                /*добавляем счет биткойнтовый*/
                $earningsRecords = new EarningsRecord();
                $earningsRecords->addEarning($userRecord);
                $earningsRecords->save();
                /*добавляем кошелек*/
                $cacheRecord= new CacheRecord();
                $cacheRecord->addCache($userJoinForm,$userRecord->id );
                $cacheRecord->save();
                return $this->render('user\thanks', compact('userJoinForm'));
            }

        return $this->render('user\join', compact('userJoinForm')
        );
    }

    public function actionUserearning()
    {
        $session = Yii::$app->session;

        $userEarning =  User::find()->where(['id'=>$session['__id']])->all();
        return $this->render('user\user_earning',
          ['userEarning'=>$userEarning]

        );
    }

}
