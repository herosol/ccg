<!doctype html>
<html>

<head>
    <title><?=$page_title?> — <?=$site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common services>


        <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/3q.jpg');">
            <div class="contain">
                <div class="content">
                    <h1><?=$content['banner_heading']?></h1>
                </div>
            </div>
        </section>
        <!-- sBanner -->
        <section class="business">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image"><img src="<?= !empty($content['image1']) ? getImageSrc(UPLOAD_PATH."images/", $content['image1']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="heading"><?=$content['sec2_heading']?></h1>
                                <?=$content['sec2_desc']?>
                            <div class="bTn"><a href="<?=base_url($content['sec2_btn_link'])?>" class="webBtn"><?=$content['sec2_btn_text']?> <i class="fi-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->
        <section class="property_types">
            <div class="flex">
                    <div class="col">
                        <div class="image">
                            <img src="<?= !empty($content['image2']) ? getImageSrc(UPLOAD_PATH."images/", $content['image2']) : 'http://placehold.it/3000x1000' ?>">
                        </div>
                        <div class="cntnt">
                            <div class="cmnHeading">
                                <h2 class="heading"><?=$content['sec3_left_heading']?></h2>
                                    <ul>                         
                                        <?=$content['sec3_left_lis']?>
                                    </ul>
                                <div class="bTn"><a href="<?=base_url($content['sec3_left_btn_link'])?>" class="webBtn blankBtn"><?=$content['sec3_left_btn_text']?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image">
                            <img src="<?= !empty($content['image3']) ? getImageSrc(UPLOAD_PATH."images/", $content['image3']) : 'http://placehold.it/3000x1000' ?>">
                        </div>
                        <div class="cntnt">
                            <div class="cmnHeading">
                                <h2 class="heading"><?=$content['sec3_middle_heading']?></h2>
                                    <ul>                         
                                        <?=$content['sec3_middle_lis']?>
                                    </ul>
                                <div class="bTn"><a href="<?=base_url($content['sec3_middle_btn_link'])?>" class="webBtn blankBtn"><?=$content['sec3_middle_btn_text']?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image">
                            <img src="<?= !empty($content['image4']) ? getImageSrc(UPLOAD_PATH."images/", $content['image4']) : 'http://placehold.it/3000x1000' ?>">
                        </div>
                        <div class="cntnt">
                            <div class="cmnHeading">
                                <h2 class="heading"><?=$content['sec3_right_heading']?></h2>
                                    <ul>                         
                                        <?=$content['sec3_right_lis']?>
                                    </ul>
                                <div class="bTn"><a href="<?=base_url($content['sec3_right_btn_link'])?>" class="webBtn blankBtn"><?=$content['sec3_right_btn_text']?></a></div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- property types -->
        <section class="landing-types">
            <div class="contain">
                <div class="cntnt">			
                        <div class="flex">
                            <div class="col">
                                <div class="inner">
                                    <h4><?=$content['sec4_left_heading']?></h4>
                                    <ul>                         
                                        <?=$content['sec4_left_lis']?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col">
                                <div class="inner">
                                    <h4><?=$content['sec4_middle_heading']?></h4>
                                    <ul>                         
                                        <?=$content['sec4_middle_lis']?>
                                    </ul>
                                </div>

                            </div>

                            <div class="col">
                                <div class="inner">
                                    <h4><?=$content['sec4_right_heading']?></h4>
                                    <ul>                         
                                        <?=$content['sec4_right_lis']?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!-- property landing -->
           <!---slider banner---> 
        <section class="brands">
            <div class="contain text-center">
                <div class="heading"><h1>This Weeks Featured Lenders</h1></div>
                <div class="flexRow flex">
                    <div class="col">
                        <div class="icon"><img src="<?= base_url() ?>assets/images/optuno.svg" alt=""></div>
                    </div>
                    <div class="col">
                        <div class="icon"><img src="<?= base_url() ?>assets/images/summit.png" alt=""></div>
                    </div>
                    <div class="col">
                        <div class="icon"><img src="<?= base_url() ?>assets/images/childrens_ministry.png" alt=""></div>
                    </div>
                    <div class="col">
                        <div class="icon"><img src="<?= base_url() ?>assets/images/nanohub.svg" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brands -->

    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>