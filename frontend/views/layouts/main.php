<?php

use common\models\Icon;
use common\models\Meni1;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?
$route = Yii::$app->controller->route;

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
    <?php $this->beginBody() ?>

    <div class="loader">
        <div class="indicator">
            <svg width="30px" height="24px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
    <!-- loader ends-->


    <!--Header Start-->
    <?php
    $menyu = Meni1::find()->all();
    foreach ($menyu as $men) :
    ?>
        <header class="cursor-light">
            <!--Navigation-->
            <nav class="navbar navbar-top-default nav-radius navbar-expand-lg">
                <div class="container">
                    <a href="<?= Url::home() ?>" title="Logo">
                        <!--Logo Default-->
                        <img src="<?= $men->img ?>" alt="logo" class="logo-dark default">
                    </a>

                    <!--Nav Links-->
                    <div class="collapse navbar-collapse">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link" href="#home"><?= $men->home ?></a>
                            <a class="nav-link scroll" href="#whymegaone"><?= $men->why ?></a>
                            <a class="nav-link scroll" href="#appointment"><?= $men->appoint ?></a>
                            <a class="nav-link scroll" href="#pateintgallery"><?= $men->gallery ?></a>
                            <a class="nav-link scroll" href="#ourblogs"><?= $men->blog ?></a>
                            <a class="nav-link scroll" href="#contactus"><?= $men->contact ?></a>
                        </div>
                        <!-- <div> <span class="open_search"><i class="fas fa-search"></i> </span></div>

                        <div class="search_block">
                            <div class="search_box animated wow fadeInUp">
                                <div class="inner">
                                    <input type="text" name="search" id="search" class="search_input" autocomplete="off" placeholder="Enter Your Keywords.." />

                                    <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i> </button>

                                </div>
                            </div>
                            <div class="search-overlay"></div>

                        </div> -->



                    </div>
                    <?php foreach (yii::$app->params['language'] as $lang => $val) : ?>
                        <a href="<?= url::to(['site/changlang', 'lang' => $lang]) ?>">
                            <?php echo $val ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!--Side Menu Button-->
                <a href="javascript:void(0)" class="parallax-btn sidemenu_btn" id="sidemenu_toggle">
                    <div class="animated-wrap sidemenu_btn_inner">
                        <div class="animated-element">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </a>

            </nav>

            <!--Side Nav-->
            <div class="side-menu">
                <div class="inner-wrapper">
                    <span class="btn-close link" id="btn_sideNavClose"></span>
                    <nav class="side-nav w-100">
                        <?php
                        $menyu = Meni1::find()->all();
                        foreach ($menyu as $men) :
                        ?>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link  scroll" href="#home"><?= $men->home ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  scroll" href="#whymegaone"><?= $men->why ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  scroll" href="#appointment"><?= $men->appoint ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  scroll" href="#pateintgallery"><?= $men->gallery ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  scroll" href="#ourblogs"><?= $men->blog ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  scroll" href="#contactus"><?= $men->contact ?></a>
                                </li>

                            </ul>
                        <?php
                        endforeach;
                        ?>
                    </nav>

                    <div class="side-footer text-white w-100">
                        <ul class="social-icons-simple">
                            <?php
                            $iconka = Icon::find()->where(['status' => 'active'])->all();
                            foreach ($iconka as $icon) :
                            ?>
                                <li class="animated-wrap"><a href="<?= $icon->silka ?>" class="animated-element" href="javascript:void(0)"><i class="<?= $icon->icon ?>"></i> </a> </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>

                        <p class="text-white">&copy;<?= Yii::t('app', 'name') ?></p>
                    </div>
                </div>
            </div>
            <a id="close_side_menu" href="javascript:void(0);"></a>
            <!-- End side menu -->



        </header>
    <?php
    endforeach;
    ?>
    <?= $content ?>
    <!--Footer Start-->
    <section class="text-center footer-sec">
        <h2 class="d-none">hidden</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-social">
                        <ul class="list-unstyled text-white">
                            <?php
                            $iconka = Icon::find()->where(['status' => 'active'])->all();
                            foreach ($iconka as $icon) :
                            ?>
                                <li class="animated-wrap"><a href="<?= $icon->silka ?>" class="animated-element" href="javascript:void(0)"><i class="<?= $icon->icon ?>"></i> </a> </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>

                        <p class="text-black">&copy;<?= Yii::t('app', 'name') ?></p>
                    </div>
                </div>
            </div>
    </section>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
