<?php

use common\models\Blog;
use common\models\Blogid;
use common\models\Blogslider;
use Mpdf\Tag\H1;
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

            <p class="font-weight-normal"><a class="text-white" href="<?= url::home() ?>"><?= Yii::t('app', 'home') ?></a> / <span class="main-color"><?= Yii::t('app', 'news') ?></span></p>

            <h1><?= $slid->title ?></h1>
            <p><?= $slid->content ?></p>

        </div>
    </section>
<?php

endforeach;
?>
<section class="blog-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="blog-topic">
                    <h5 class="mb-4">Category</h5>
                    <ul>
                        <li><a href="<?= url::to(['site/blogleft']) ?>">ALL </a> <span class="dots"></span>
                            <p>2</p>
                        </li>
                        <?php
                        $category = blog::find()->all();
                        foreach ($category as $cat) :

                        ?>
                            <li><a href="<?= url::to(['site/blogleftid', 'id' => $cat->id]) ?>"><?= $cat->name ?> </a> <span class="dots"></span>
                                <p><?= $cat->id ?></p>
                            </li>
                        <?php
                        endforeach;
                        ?>
                    </ul>

                </div>
                <div class="blog-post">
                    <h5 class="mb-4">Popular Post</h5>
                    <?php
                    $blog = Blogid::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
                    foreach ($blog as $bl) :
                    ?>
                        <div class="media">
                            <a href="<?= $bl->img ?>"> <img src="<?= $bl->img ?>" class="mr-3" alt="..."></a>
                            <div class="media-body">
                                <h5 class="mt-1"><?= $bl->title ?></h5>
                                <p> <span class="author">By</span><a href="#"> <?= $bl->byadmin ?></a></p>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>



            </div>
            <div class="col-md-12 col-lg-8">
                <article class="blog-classic">
                    <div class="row">
                        <?php
                        if (empty($blogone)) {
                            echo "<h1 style='margin:13%;' >Ma'lumot mavjud emas !</h1>";
                        } else {


                            foreach ($blogone as $mod) :
                        ?>
                                <div class="col-md-6">
                                    <div class="blog-panel bg-grey">
                                        <p><?= $mod->date ?><span><a href="#"> <?= $mod->bloglist->name ?></a></span></p>
                                        <h5><?= $mod->title ?></h5>
                                        <div class="panel-img"><img style="width: 300px; height:250px" src="<?= $mod->img ?>" alt="img"></div>
                                        <p><?= $mod->content ?></p>
                                        <div class="img-link"><img style="width:40px; height:40px;" src="<?= $mod->adminimg ?>" alt="img"><span class="name-link">by: <span><a href="#"><?= $mod->byadmin ?></a></span> </span> </div>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        }
                        ?>

                    </div>
                </article>

                <nav class="pagination blog-post-navigation" aria-label="Posts navigation">




                </nav>
            </div>
        </div>
    </div>
</section>