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
                    <h2 class="regular"><?=$content['banner_detail']?></h2>
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
                            <h1 class="heading"><?=$content['lt_heading']?></h1>
                            <?=$content['lt_detail']?>
                            <div class="bTn"><a href="<?=base_url($content['lt_button_link'])?>" class="webBtn"><?=$content['lt_button_text']?> <i class="fi-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->
    <section class="lender_type_1">
        <div class="image"><img src="<?= base_url() ?>assets/images/home.png" alt=""></div>
        <div class="contain">
            <div class="text-center">
            <h1 class="heading"><?=$content['bi_heading']?></h1>
            </div>
            <div class="flexRow flex grid-pera">
                <?=$content['bi_detail']?>
            </div>
        </div>
    </section>
        <!-- lender type 1-->
    <section id="" class="lender_type_2">
        <div class="contain">
                <div class="headLine">
                    <span><?=$content['lic_heading']?></span>
                </div>
                <div class="flex">
                    <div class="col txtSide">
                        <div class="inner">
                            <<?=$content['lic_detai']?>
                        </div>
                    </div>
                    <div class="col imgSide">
                        <div class="inner">
                            <div class="image">
                                <img src="<?= !empty($content['image2']) ? getImageSrc(UPLOAD_PATH."images/", $content['image2']) : 'http://placehold.it/3000x1000' ?>">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- lender type 2-->
    <section id="" class="lender_type_3">
        <div class="flexDv">
            <div class="contain">
                <div class="content">
                    <h1 class="heading"><?=$content['cl_heading']?></h1>
                    <?=$content['cl_detail']?>  
                </div>
            </div>
        </div>
    </section>
    <!-- lender type 3-->
    <section class="business businessPro businessProHeading">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image"><img src="<?= !empty($content['image3']) ? getImageSrc(UPLOAD_PATH."images/", $content['image3']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="heading"><?=$content['gse_heading']?></h1>
                            <?=$content['gse_detail']?>    
                        </div>
                </div>
            </div>
    </section>
    <!-- lender type 4-->
    <section class="lender_type_1 lenderPro">
        <div class="image"><img src="<?= base_url() ?>assets/images/fam.jpg" alt=""></div>
        <div class="contain-fluid">
           
            <div class="flexRow flex grid-pera">                
                <h1 class="heading"><?=$content['df_heading']?></h1>           
                <?=$content['df_detail']?>
            </div>
        </div>
    </section>
    <!-- lender type 5-->
    <section class="business businessPro">
            <div class="contain">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="image"><img src="<?= !empty($content['image4']) ? getImageSrc(UPLOAD_PATH."images/", $content['image4']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                    </div>
                    <div class="col col2">
                        <div class="content">
                            <h1 class="heading"><?=$content['pl_heading']?></h1>
                            <?=$content['pl_detai']?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  lender type last -->

    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>