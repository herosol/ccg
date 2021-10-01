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
                            <h1 class="heading"><?=$content['mt_heading']?></h1>
                            <?=$content['mt_detail']?>
                            <div class="bTn"><a href="<?=base_url($content['mt_button_link'])?>" class="webBtn"><?=$content['mt_button_text']?> <i class="fi-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->
        <section class="loan_stage">
            <div class="contain-fluid">
                <h1 class="heading text-center">By Loan Stage</h1>
                <div class="flex">
                    <?php foreach($cards1 as $index => $card): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="cntnt">
                                    <h2 class="heading"><?=$card->heading?></h2>
                                    <?=$card->description?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
     <!-- Loan stage -->
     <section class="property_type">
            <div class="contain-fluid">
                <h1 class="heading text-center">By Property Type</h1>
                <div class="flex">
                    <?php foreach($cards2 as $index => $card): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="cntnt">
                                    <h2 class="heading"><?=$card->heading?></h2>
                                    <?=$card->description?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
     <!-- Property Type -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>