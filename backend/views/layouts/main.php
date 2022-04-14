<?php


use backend\assets\AppAsset;
use common\models\Adminimg;
use common\models\Contact;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php $this->beginBody() ?>

  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= Url::home() ?>" class="nav-link">Bosh Sahifa</a>
        </li>
        <?php

        if (Yii::$app->user->isGuest) {
          $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
          $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
              'Logout (' . Yii::$app->user->identity->username . ')',
              ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
        }
        ?>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="<?= url::to(['contact/index']) ?>">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">
              <?php
              $models = Contact::find()->where(['status' => 'active'])->count();
              echo $models;
              ?>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <?php
            $model = Contact::find()->where(['status' => 'active'])->all();
            foreach ($model as $mod) :
            ?>
              <a href="<?= url::to(['contact/index']) ?>" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      <?= $mod->name ?>
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm"><?= $mod->message ?></p>
                    <p class="text-sm text-muted"><i></i> <?= $mod->date ?></p>
                  </div>
                </div>
                <!-- Message End -->
              </a>

            <?php
            endforeach;
            ?>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Barcha Habarlar</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

        <?php
        $adminimg = Adminimg::find()->all();
        foreach ($adminimg as $admin) :
        ?>
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <img src="<?= $admin->img ?>" class="user-image img-circle elevation-2" alt="User Image">
              <span class="d-none d-md-inline"><?= $admin->name ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- User image -->
              <li class="user-header bg-primary">
                <img src="<?= $admin->img ?>" class="img-circle elevation-2" alt="User Image">

                <p>
                  <?= $admin->name;
                  ?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <a href="<?= url::to(['adminimg/index']) ?>" class="btn btn-info">Profile</a>
                <a href="#" class="btn btn-default btn-flat float-right">
                  <form action="<?= Url::to(['site/logout']) ?>" method="post">
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<? Yii::$app->request->csrfToken ?>">
                    <button class='btn btn-info' type="submit" class="nav-link">
                      Logout
                    </button>
                  </form>
                </a>
              </li>
            </ul>
          </li>

        <?php
        endforeach;
        ?>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Alexander Pierce</a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Menyu Qismi
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['menu/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Menyu </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['network/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Menyu ikonkalari </p>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <!-- slayder qismi boshlandi -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Slayder
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['slider/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Slayder </p>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                          <!-- slayder qismi tugadi -->
                          <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                       Hizmat ko'rsatish
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['icon/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Ikonkalari </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['iconimg/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rasmi </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                      Sayt haqida
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['about/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Sayt ma'lumoti </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                      galareya
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['gallery/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>galareya tekstlari </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['gallleryimg/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>galareya rasmlar </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['galleryname/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Nom Qo'shish </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                      Haridor Rasmlari
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['customer/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Haridor rasmi </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['customerslider/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Haridor slayder </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                      Habarlar
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?=Url::to(['contacttext/index'])?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Kontakt teksti </p>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

    <div class="content-wrapper">
      <div class="content-header">
        <?= $content ?>
      </div>
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>


  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>



  <?php $this->endBody() ?>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
    ion-icon {
      color: white;
      font-size: 24px;
    }
  </style>
</html>
<?php $this->endPage();
