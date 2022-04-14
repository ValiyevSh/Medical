<?php

use common\models\Animatetext;
use common\models\Blog;
use common\models\Animate;
use common\models\Blogid;
use common\models\Clinical;
use common\models\Clinictext;
use common\models\Contacttext;
use common\models\Icon;
use common\models\Progres;
use common\models\Calc;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use common\models\Calimg;
use common\models\Happypatient;
use common\models\Map;
use common\models\Patient;
use common\models\Patientgal;
use common\models\Patientgalid;
use common\models\Patienttext;
use yii\helpers\Url;


echo $this->render('slider');
echo \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);

?>
<!-- END REVOLUTION SLIDER -->

<ul class="social-icons-simple revicon darkcolor">
    <?php
    $this->title = "" . Yii::t('app', 'head') . "";
    $iconka = Icon::find()->where(['status' => 'active'])->all();
    foreach ($iconka as $icon) :

    ?>
        <li class="d-table"><a href="<?= $icon->silka ?>" class="facebook-text-hvr" href="javascript:void(0)"><i class="<?= $icon->icon ?>"></i></a> </li>
    <?php
    endforeach;
    ?>
</ul>
<!-- END REVOLUTION SLIDER -->
</section>

<!--feature-box starts -->
<section id="join-us" class="features feature-content p-0 pb-60">

    <div class="container">
        <div class="row mx-0">
            <!--Column item-->
            <?php
            $animation = Animate::find()->where(['status' => 'active'])->all();
            foreach ($animation as $anim) :
            ?>
                <div class="col flip p-0 mr-4">
                    <div class="front">
                        <div style="background-color: <?= $anim->background ?>;" class="feature-col one">
                            <div class="box center-block">
                                <div class="feature-icon"><i class=" <?= $anim->icon ?>"></i></div>
                                <h4 class="mb-4 main-font"> <?= $anim->title ?></h4>
                                <p class="text-white mb-4 text-center"> <?= $anim->content ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="feature-col-1 one-1">
                            <div class="box center-block">
                                <div class="feature-icon"><i class=" <?= $anim->icon ?>"></i></div>
                                <h4 class="mb-4 theme-dark main-font"> <?= $anim->title ?></h4>
                                <p class="theme-dark mb-4 text-center"> <?= $anim->content ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
            <!--Column item-->

        </div>
    </div>

</section>
<!--feature-box ends -->

<!-- About us-->

<section id="whymegaone" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="main-title style-two d-flex justify-content-md-around align-items-center flex-column flex-md-row text-center text-md-left wow fadeIn" data-wow-delay="300ms">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <h5>
                            <?= $text->title ?>
                        </h5>
                        <h2 class="pb-0"> <?= $text->bigtitle ?></h2>

                    </div>
                    <div class="col-md-7 ml-md-4 pl-md-2">
                        <p class="mb-4"><?= $text->content ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--end About us-->

<!-- Bars-->
<section class="pt-0">
    <h2 class="d-none">aas</h2>
    <div class="container ">
        <div class="row ">
            <div class="col-12 my-auto">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="skills alt-font">
                            <?php
                            $model = Progres::find()->where([
                                'id' => [4, 5, 6],
                            ])->andWhere(['status' => 'active'])->all();
                            foreach ($model as $mod) :
                            ?>
                                <!-- #region -->
                                <div class="prog-item">
                                    <p><?= $mod->title ?></p>
                                    <div class="skills-progress"><span class="bar-<?= $mod->color ?>" data-value="<?= $mod->progres ?>%"></span></div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="skills alt-font">
                            <?php
                            $model = Progres::find()->where([
                                'id' => [7, 8],
                            ])->all();
                            foreach ($model as $mod) :
                            ?>
                                <!-- #region -->
                                <div class="prog-item">
                                    <p><?= $mod->title ?></p>
                                    <div class="skills-progress"><span class="bar-<?= $mod->color ?>" data-value="<?= $mod->progres ?>%"></span></div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- end Bars-->

<!-- Appointment -->
<?php
$contact = Contacttext::find()->all();
foreach ($contact as $con) :
?>
    <section style='background:url(<?= $con->img ?>) no-repeat; background-size:cover; background-position:60%' id="appointment" class="form-bg">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="appointment-box">

                        <div class="form-title">
                            <h2><?= $con->title ?></h2>
                        </div>
                        <div class="form-para">
                            <p><?= $con->content ?></p>
                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <?php $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'options' => [
                                        'class' => 'contact-form', 'id' => 'contact-form-data',
                                        'style' => 'color:#eee;'
                                    ],
                                ]) ?>
                                <div class="row">
                                    <div class="col-sm-12" id="result"></div>
                                    <div class="col-md-6 mb-3">
                                        <?= $form->field($message, 'name')->textInput(['placeholder' => 'Ism'])->label(' ') ?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <?= $form->field($message, 'email')->textInput(['placeholder' => 'Email'])->label(' ') ?>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="position-relative m-mb-20">

                                            <?= $form->field($message, 'date')->widget(\yii\jui\DatePicker::classname(), [
                                                //'language' => 'ru',
                                                'dateFormat' => 'yyyy-MM-dd',
                                            ])->label('')->textInput(['placeholder' => 'Sana']) ?>
                                            <!-- <input type="text" id="my-date" name="reservationDate" placeholder="Appointment Date:" class=" form-control datepicker"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="position-relative m-mb-20">
                                            <label class="position-absolute m-label">
                                                <span class="calender-line"></span>
                                                <i class="icofont-caret-down mr-4 "></i>
                                            </label>
                                            <?php echo $form->field($message, 'male')->dropDownList(
                                                ['erkak' => 'erkak', 'ayol' => 'ayol'],
                                                ['prompt' => 'Jinsingizni tanlang'],
                                                ['options' => ['class' => 'js-example-basic-single', 'name' => 'userGender']]
                                            )->label(' '); ?>
                                            <!-- <select class=" js-example-basic-single" name="userGender">
                                                <option value="Male">Male</option>
                                                <option value="FeMale">Female</option>
                                            </select> -->
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <?= $form->field($message, 'message')->textarea(['placeholder' => 'Habar'])->label('') ?>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center text-md-right">
                                        <div class="form-group">
                                            <?= Html::submitButton('Yuboring', ['class' => 'mt-3 btn btn-rounded btn-large btn-white-blue fadeInDown-slide animated text-uppercase contact_btn']) ?>
                                        </div>
                                    </div>
                                </div>
                                <?php ActiveForm::end() ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
<?php
endforeach;
?>
<!-- ends Appointment -->

<section>
    <div class="container">
        <div class="row">
            <?php
            $text = Clinictext::find()->all();
            foreach ($text as $tex) :
            ?>
                <div class="col-md-12">
                    <div class="department-sub alt-font text-center">
                        <p><?= $tex->title ?></p>
                    </div>
                    <div class="department-title main-font text-center">
                        <h2><?= $tex->content                                                                                                                                   ?> </h2>
                    </div>

                </div>
            <?php
            endforeach;

            ?>
        </div>

        <div class="row">
            <?php
            $clinical = Clinical::find()->where(['status' => 'active'])->all();
            foreach ($clinical as $clin) :
            ?>
                <div class="col-md-4">
                    <div class="feature-item mb-md-0 mb-5">
                        <span class="icon">
                            <a href="<?= $clin->url ?>">
                                <i style='color:white;' aria-hidden="true" class="<?= $clin->icon ?>"></i></span>
                        </a>
                        <div class="text feature-txt ">
                            <h4 class="feature-heading"><?= $clin->title ?></h4>
                            <p><?= $clin->content ?></p>
                        </div>
                    </div>
                </div>
            <?php

            endforeach;

            ?>


        </div>

    </div>
</section>

<!-- Counters -->
<?php
$calimg = Calimg::find()->all();
foreach ($calimg as $img) :
?>
    <section style='background:url(<?= $img->img ?>) no-repeat;  background-attachment: fixed;' class="bg-counter demo-banner">
        <h2 class="d-none">as</h2>
        <div class="container">
            <div class="row">
                <?php
                $cal = Calc::find()->where(['status' => 'active'])->all();
                foreach ($cal as $cl) :
                ?>
                    <div class="col-md-3">
                        <div class="serial-box">
                            <span class="count"><?= $cl->number ?></span>
                            <div class="count-line "></div>
                            <p><?= $cl->title ?></p>
                        </div>

                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>

    </section>
<?php
endforeach;
?>
<!-- end Counters-->

<!-- portfolio -->
<section id="pateintgallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $gallerp = Patienttext::find()->all();
                foreach ($gallerp as $gal) :
                ?>
                    <div class="port">
                        <div class="portfolio-title">
                            <h2><?= $gal->title ?></h2>
                        </div>
                        <div class="portfolio-subtitle">
                            <p><?= $gal->content ?></p>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <div class="nav nav-pills mb-4 mb-md-4 d-flex justify-content-center filtering">
                    <span data-filter="*" class="pointer nav-link active is-checked">All</span>
                    <?php
                    $cat = Patientgal::find()->where(['status' => 'active'])->all();
                    foreach ($cat as $ca) :
                    ?>
                        <span class="pointer nav-link" data-filter=".<?= $ca->name ?>"><?= $ca->name ?></span>
                    <?php
                    endforeach;
                    ?>
                </div>

                <ul class="da-thumbs gallery">
                    <?php
                    $gallerypage = Patientgalid::find()->where(['status' => 'active'])->all();

                    foreach ($gallerypage as $cont) :

                    ?>
                        <li class="items <?= $cont->title ?>">
                            <img src="<?= $cont->img ?>" alt="img">
                            <div class="overlay">
                                <a href="<?= $cont->img ?>" class="text-center" data-fancybox="images">
                                    <div class="search-icon"><i class="fa fa-search"></i> </div>
                                    <h4>
                                        <?= $cont->pate->name ?? '' ?>
                                    </h4>
                                </a>
                            </div>
                        </li>

                    <?php
                    endforeach;
                    ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Ends portfolio -->

<!-- testimonial -->
<section class="bg-testimonial">
    <div class="container">
        <?php

        $happypatient = Happypatient::find()->all();
        foreach ($happypatient as $happy) :
        ?>
            <div class="row">
                <div class="test">
                    <div class="testimonial-title">
                        <h2><?= $happy->title ?></h2>
                    </div>
                    <div class="testimonial-subtitle">
                        <p><?= $happy->content ?></p>
                    </div>
                </div>
            </div>


        <?php
        endforeach;
        ?>
        <div class="row">
            <div id="testimonial_slider" class="owl-carousel">
                <?php
                $patient = Patient::find()->where(['status' => 'active'])->all();
                foreach ($patient as $pat) :
                ?>
                    <!--testimonial item-->
                    <div class="testimonial-item item">
                        <i class="fa fa-quote-left testimonial-icon gradient-text1"></i>
                        <p class="mb-4"><?= $pat->title ?>
                        </p>

                        <!--Image-->
                        <div class="testimonial-image" style="width:50px; height:50px; border-radius: 50%;  padding:0; position:relative">
                            <img style='width:100%; height:100%; object-fit:cover; position : absolute' src="<?= $pat->img ?>" alt="image">
                        </div>
                        <h5 class="font-weight-500 main-font drk-blu"><?= $pat->name ?></h5>
                        <span class="destination main-font"><?= $pat->country ?></span>
                    </div>

                <?php
                endforeach;

                ?>
                <!--testimonial item-->


            </div>

        </div>
    </div>
</section>
<!-- Ends testimonial -->

<!--Blog Start-->
<section id="ourblogs" class="bg-light">
    <div class="container">
        <?php
        $medicin = Blogid::findOne(['id' => SORT_DESC]);

        ?>
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2 wow fadeInRight">
                <!--Blog Content-->
                <div class="blog-text">
                    <h2><?= $medicin->title ?></h2>
                    <p><?= $medicin->content ?></p>
                    <a href="<?= Url::to(['site/news1']) ?>" class="btn btn-rounded btn-large btn-drk-blue fadeInDown-slide animated  text-uppercase"><?= Yii::t('app', 'button') ?></a>
                </div>
            </div>
            <div class="col-md-6">
                <!--Blog Image-->
                <div class="img-hvr">
                    <div class="date">
                        <h5 class="m-0"><?= $medicin->date ?></h5>

                    </div>
                </div>
                <?php

                ?>
                <div id="blog-slider" class=" owl-carousel">
                    <?php
                    $rasm = Blogid::find()->where(['id' => SORT_DESC])->andWhere(['status' => 'active'])->limit(3)->all();
                    foreach ($rasm as $ras) :
                    ?>
                        <div class="item blog-image wow hover-effect fadeInLeft">
                            <img src="<?= $ras->img ?>" alt="image">
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
        <?php
        $medic = Blogid::findOne(['id' => SORT_ASC, 'status' => 'active']);

        ?>
        <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft">
                <!--Blog Content-->
                <div class="blog-text">
                    <h2><?= $medic->title ?></h2>
                    <p><?= $medic->content ?></p>
                    <a href="<?= url::to(['site/news']) ?>" class="btn btn-rounded btn-large btn-drk-blue fadeInDown-slide animated  text-uppercase"><?= Yii::t('app', 'button') ?></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-hvr">
                    <div class="date-2">
                        <h5 class="m-0"><?= $medic->date ?></h5>

                    </div>
                </div>
                <!--Blog Image-->
                <div id="blog-slider-1" class="owl-carousel">
                    <div class="item blog-image2 text-right hover-effect wow fadeInRight">
                        <img src="<?= $medic->img ?>" alt="image">
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!--Blog End-->

<!-- Map -->
<?php

$map = Map::find()->all();
foreach ($map as $m) :
?>
    <section id="contactus" style='background:url(<?= $m->img ?>); ' class="contact p-0 position-relative">
        <div class="bg-overlay bg-color"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div id="google-map" class="bg-light-gray map"></div>
                </div>

                <div class="col-md-6">

                    <div class="address-box tittle mb-0 bg-img4 ml-0 ml-md-5">
                        <!--overlay-->
                        <div class="bg-overlay opacity-8"></div>
                        <div class="address-text alt-font text-md-left text-white position-relative wow fadeInUp">
                            <h2 class="mb-4 main-font map-text text-capitalize"><?= $m->title ?></h2>
                            <!--Address-->
                            <p class="mb-3"><?= $m->content ?></p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
<?php
endforeach;
?>