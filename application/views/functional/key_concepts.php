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
                            <h1 class="heading"><?=$content['kc_heading']?></h1>
                            <?=$content['kc_detail']?>
                            <div class="bTn"><a href="<?=base_url($content['kc_button_link'])?>" class="webBtn"><?=$content['kc_button_text']?> <i class="fi-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->
        <section id="" class="lender_type_3 key_1">
        <div class="flexDv">
            <div class="contain">
                <div class="content">
                    <h1 class="heading"><?=$content['ap_heading']?></h1>
                    <?=$content['ap_detail']?>
                </div>
            </div>
        </div>
    </section>
    <!-- key concepts first-->
        <section class="key_blk">
            <div class="contain">
                <h1 class="heading text-center">Loan Amount / Property Value</h1>
                <?php foreach($cards1 as $index => $card): ?>
                    <div class="flexRow flex">
                        <div class="col col1">
                            <div class="image"><img src="<?= !empty($card->image) ? getImageSrc(UPLOAD_PATH."images/", $card->image) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                        </div>
                        <div class="col col2">
                            <div class="content">
                                <h2 class="heading"><?=$card->heading?></h2>
                                <?=$card->description?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <!-- block -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>