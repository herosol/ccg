<!doctype html>
<html>

<head>
    <title><?=$page_title?> — <?=$site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page" class="logo-ori">
    <?php $this->load->view('includes/header'); ?>
    <main common typical contact>


        <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/3q.jpg');">
            <div class="contain">
                <div class="content">
                    <h1><?=$content['heading']?></h1>
                    <h2 class="regular"><?=$content['detail']?></h2>
                </div>
            </div>
        </section>
        <!-- sBanner -->


        <section id="contact">
            <div class="contain">
                <div class="content text-center">
                    <h1 class="heading"><?=$content['heading1']?></h1>
                </div>
                <ul class="infoLst flex text-center">
                        <li>
                            <div class="inner">
                                <div class="icon"><img src="<?= !empty($content['image1']) ? getImageSrc(UPLOAD_PATH."images/", $content['image1']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                                <span><?=$content['sd_1']?></span>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <div class="icon"><img src="<?= !empty($content['image2']) ? getImageSrc(UPLOAD_PATH."images/", $content['image2']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                                <a href="tel:<?=$content['sd_2']?>"><?=$content['sd_2']?></a>
                            </div>
                        </li>
                         <li>
                            <div class="inner">
                                <div class="icon"><img src="<?= !empty($content['image3']) ? getImageSrc(UPLOAD_PATH."images/", $content['image3']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                                <a href="mailto:<?=$content['sd_3']?>"><?=$content['sd_3']?></a>
                            </div>
                        </li>
                </ul>
                <form action="" method="post" id="frmContact" class="frmAjax">
                    <h2 class="heading text-center"><?=$content['heading3']?></h2>
                    <div class="alertMsg" style="display:none"></div>
                    <div class="row formRow">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Name</label>
                                <input class="txtBox" id="name" name="name" type="text" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Phone</label>
                                <input class="txtBox" id="phone" name="phone" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Subject</label>
                                <input class="txtBox" id="subject" name="subject" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                            <div class="txtGrp">
                                <label for="">Email Address</label>
                                <input class="txtBox" id="email" name="email" type="email">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                            <div class="txtGrp">
                                <label for="">Comments</label>
                                <textarea class="txtBox" id="comment" name="msg"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bTn formBtn text-center"><button type="submit" class="webBtn blockBtn">Submit <i class="spinner hidden"></i></button></div>
                </form>
            </div>
        </section>
        <!-- contact -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>