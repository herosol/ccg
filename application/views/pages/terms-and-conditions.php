<!doctype html>
<html>

<head>
    <title><?=$page_title?> — <?=$site_settings->site_name?></title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common terms>

    <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/3q.jpg');">
            <div class="contain">
                <div class="content">
                    <h1><?=$content['heading']?></h1>
                </div>
            </div>
        </section>
        <!-- sBanner -->
        <section id="terms">
            <div class="contain">
                <div class="outer ckEditor">
                    <h1 class="heading text-center"><?=$content['header_detail']?></h1>
                    <?=$full_code?>
                </div>
            </div>
        </section>
        <!-- terms -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>