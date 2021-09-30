<!doctype html>
<html>

<head>
    <title>Frequently Asked Questions — CCG</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common faq>


        <section id="sBanner" style="background-image: url('<?= base_url() ?>assets/images/3q.jpg');">
            <div class="contain">
                <div class="content">
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
        </section>
        <!-- sBanner -->


        <section id="faq">
            <div class="contain">
                <div class="content text-center">
                    <h2 class="heading">Do You Have Any Questions?</h2>
                </div>
                <div class="faqBox">
                    <div class="faqLst">
                        <?php foreach($faqs as $index => $faq): ?>
                            <div class="faqBlk">
                                <h5><?=$faq->question?></h5>
                                <div class="txt">
                                <?=$faq->answer?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq -->


    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>