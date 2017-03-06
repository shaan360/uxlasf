<?php

use yii\bootstrap\Nav;
use common\components\helpers\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
            'style' => 'background: url(' . Yii::$app->urlManagerFrontend->baseUrl . '/img/nav.png);
                    -moz-box-shadow: inset 0px -22px 60px #000000;
    -webkit-box-shadow: inset 0px -22px 60px #000000;
    box-shadow: inset 0px -22px 60px #000000;
    margin-bottom: 20px;padding-top:40px;border-radius:0px;'
        ],
    ]);
    ?>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav', 'style' => 'position:relative;float:right;margin-top:-50px;margin-right:0px;'],
        'items' => [
            ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup']],
            ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login']],
                ]
            ]);
            ?>
    
    
    <?php
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right', 'style' => 'clear:right;background: none;margin-right:0px;'],
        'items' => [
            ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
            ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug' => 'about']],
            ['label' => Yii::t('frontend', 'Articles'), 'url' => ['/article/index']],
            ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
            ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible' => Yii::$app->user->isGuest],
            ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible' => Yii::$app->user->isGuest],
            [
                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                'visible' => !Yii::$app->user->isGuest,
                'items' => [
                    [
                        'label' => Yii::t('frontend', 'Settings'),
                        'url' => ['/user/default/index']
                    ],
                    [
                        'label' => Yii::t('frontend', 'Backend'),
                        'url' => Yii::getAlias('@backendUrl'),
                        'visible' => Yii::$app->user->can('manager')
                    ],
                    [
                        'label' => Yii::t('frontend', 'Logout'),
                        'url' => ['/user/sign-in/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ]
                ]
            ],
            [
                'label' => Yii::t('frontend', 'Language'),
                'items' => array_map(function ($code) {
                            return [
                                'label' => Yii::$app->params['availableLocales'][$code],
                                'url' => ['/site/set-locale', 'locale' => $code],
                                'active' => Yii::$app->language === $code
                            ];
                        }, array_keys(Yii::$app->params['availableLocales']))
                    ]
                ]
            ]);
            ?>
        <?php NavBar::end(); ?>

        <?php echo $content ?>

        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Uexel <?php echo date('Y') ?></p>
                <p class="pull-right">Gulberg Empire</p>
            </div>
        </footer>
        <?php $this->endContent() ?>