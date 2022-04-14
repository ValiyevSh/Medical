<?php

use common\models\Blog;
use common\models\Blogid;
use common\models\Blogslider;
use yii\bootstrap4\LinkPager;
use yii\helpers\Url;
?>
<?php
$this->title = "" . Yii::t('app', 'yangilik') . "";
$slider = Blogslider::find()->where(['status' => 'active'])->all();
foreach ($slider as $slid) :

?>

    <section style="background:url(<?= $slid->img ?>);background-size:cover;" id="ourblogs" class="blog-banner">
        <div class="container text-center text-md-right">

            <p class="font-weight-normal"><a class="text-white" href="<?= url::home() ?>">Home</a> / <span class="main-color">Blog</span></p>

            <h1>
                <?= $slid->title ?>
            </h1>
            <p>
                <?= $slid->content ?>
            </p>

        </div>
    </section>
<?php
endforeach;
?>
<section class="bg-grey">
    <div class="container">
        <div class="row mb-4">
            <?php foreach ($models as $model) : ?>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="blog-panel">
                        <p><?= $model->date ?> <span><a href="#"><?= $model->bloglist->name ?></a></span></p>
                        <h5><?= $model->title ?></h5>
                        <div class="panel-img"><img style='width:300px; height:250px;' src="<?= $model->img ?>" alt="img"></div>
                        <p><?= $model->content ?></p>
                        <div class="img-link"><img style="width:40px;" src="<?= $model->adminimg ?>" alt="img"><span class="name-link">by: <span><a href="#"><?= $model->byadmin ?> </a></span> </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <nav class="pagination blog-post-navigation" aria-label="Posts navigation">
            <?php
            echo LinkPager::widget([
                'pagination' => $pages,
            ])
            ?>
        </nav>

    </div>


</section>