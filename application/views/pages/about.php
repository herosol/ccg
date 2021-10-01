<!doctype html>
<html>

<head>
    <title><?=$page_title?> — <?=$site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common typical about>


        <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/3q.jpg');">
            <div class="contain">
                <div class="content">
                    <h1><?=$content['banner_heading1']?></h1>
                    <h2 class="regular"><?=$content['banner_heading2']?></h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- who we are -->
        <section class="ctrSec">
            <div class="contain">
                <div class="cntnt abtBook">
                    <h1 class="heading"><?=$content['sec3_heading']?></h1>
                    <?=$content['sec3_desc']?>
                    <a href="<?=base_url($content['sec3_card3_link'])?>" class="webBtn"><em><?=$content['sec3_btn_text']?></em></a></div>
                </div>
            </div>
        </section>
        <!-- about us -->
        <section id="team">
            <div class="contain text-center">
                <h1 class="heading">Our Team</h1>
                <div class="flexRow flex">
                    <?php foreach($cards1 as $card): ?>
                        <div class="col">
                            <div class="inner">
                                <div class="ico"><img src="<?= !empty($card->image) ? getImageSrc(UPLOAD_PATH."team/", $card->image) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                                <div class="txt">
                                    <h3><?=$card->name?></h3>
                                    <p><?=$card->designation?></p>
                                    <div class="socialBtn">
                                        <a href="<?=$card->fb_link?>" target="blank" class="facebook"><i class="fi-facebook-square"></i></a>
                                        <a href="<?=$card->linkedin_link?>" target="blank" class="linkedin"><i class="fi-linkedin-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- team -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>