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
                            <h1 class="heading"><?=$content['imb_heading']?></h1>
                            <?=$content['imb_detail']?>
							<div class="bTn"><a href="<?=base_url($content['imb_button_link'])?>" class="webBtn"><?=$content['imb_button_text']?> <i class="fi-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- business -->

    <section class="lender_type_1 lenderPro">
        <div class="image"><img src="<?= base_url() ?>assets/images/bggirl.jpg" alt=""></div>
        <div class="contain">
           
            <div class="flexRow flex grid-pera">                
                <h1 class="heading"><?=$content['sa_heading']?></h1>           
                <?=$content['sa_detail']?>
			</div>
        </div>
    </section>
    <!-- lender type 5-->
    <section class="banner_loan">
               <div class="contain">
                <div class="bg_loan">
                        <div class="imagee_loan"><img src="<?= !empty($content['image2']) ? getImageSrc(UPLOAD_PATH."images/", $content['image2']) : 'http://placehold.it/3000x1000' ?>" alt=""></div>
                        <div class="text">            
							<h1 class="heading"><?=$content['sai_heading']?></h1>           
							<?=$content['sai_detai']?>
                        </div>
                </div>
               </div>
        </section>
    <!-- banner-->
    <section id="loanProcess">
	<div class="contain">
		<div class="flex">
			<div class="colL">
				<div class="inner">
					<h1 class="heading"><?=$content['olp_heading']?></h1>
					<?=$content['olp_detail']?>
				</div>
				<div class="flex">
					<div class="col">
						<div class="innerCol">
							<div class="imgIco">
								<img src="<?= !empty($content['olp_card_image1']) ? getImageSrc(UPLOAD_PATH."images/", $content['olp_card_image1']) : 'http://placehold.it/3000x1000' ?>">
							</div>
							<div class="innerCntnt">
							   <h3><?=$content['olp_card_heading1']?></h3>
							   <?=$content['olp_card_detail1']?>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="innerCol">
							<div class="imgIco">
								<img src="<?= !empty($content['olp_card_image2']) ? getImageSrc(UPLOAD_PATH."images/", $content['olp_card_image2']) : 'http://placehold.it/3000x1000' ?>">
							</div>
							<div class="innerCntnt">
							   <h3><?=$content['olp_card_heading2']?></h3>
							   <?=$content['olp_card_detail2']?>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="innerCol">
							<div class="imgIco">
								<img src="<?= !empty($content['olp_card_image3']) ? getImageSrc(UPLOAD_PATH."images/", $content['olp_card_image3']) : 'http://placehold.it/3000x1000' ?>">
							</div>
							<div class="innerCntnt">
							   <h3><?=$content['olp_card_heading3']?></h3>
							   <?=$content['olp_card_detail3']?>
						    </div>
						</div>
					</div>
					<div class="col">
						<div class="innerCol">
							<div class="imgIco">
								<img src="<?= !empty($content['olp_card_image4']) ? getImageSrc(UPLOAD_PATH."images/", $content['olp_card_image4']) : 'http://placehold.it/3000x1000' ?>">
							</div>
							<div class="innerCntnt">
							   <h3><?=$content['olp_card_heading4']?></h3>
							   <?=$content['olp_card_detail4']?>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="colR">
				<div class="inner">
					<div class="image">
						<img src="<?= base_url() ?>assets/images/7.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <!-- choose-->
   

    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>