<?php $page = $this->uri->segment(1);?>
<header class="ease">
    <div class="contain-fluid">
        <div class="logo ease">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url().SITE_IMAGES.'images/'.$site_settings->site_logo ?>" alt="">
            </a>
        </div>
        <div class="toggle dim-zindex"><span></span></div>
        <nav class="ease">
        <div class="toggle dar-zindex"><span></span></div>
            <ul id="nav">
                <li class="<?php if ($page == "" || $page == "home") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li class="<?php if (in_array($page, ['lender-types', 'mortage-types', 'key-concepts', 'qualification', 'loan-process', 'terms-to-know', 'faqs'])) {
                                echo 'active';
                            } ?> drop">
                    <a href="#">Education</a>
                    <ul class="sub">
                        <li><a href="<?= base_url() ?>lender-types">Lender Types</a></li>
                        <li><a href="<?= base_url() ?>mortage-types">Mortage Types</a></li>
                        <li><a href="<?= base_url() ?>key-concepts">Key Concepts</a></li>
                        <li><a href="<?= base_url() ?>qualification">Qualification</a></li>
                        <li><a href="<?= base_url() ?>loan-process">Loan Process</a></li>
                        <li><a href="<?= base_url() ?>terms-to-know">Terms to Know</a></li>
                        <li><a href="<?= base_url() ?>faqs">FAQ's</a></li>
                    </ul>
                </li>
                <li class="<?php if ($page == "about-us") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>about-us">About us</a>
                </li>

                <li class="<?php if ($page == "loan-programs") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>loan-programs">Loan Programs</a>
                </li>

                <li class="<?php if ($page == "rate-calculator") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>rate-calculator">Rate Calculator</a>
                </li>

                <li class="<?php if ($page == "closed-loan") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>closed-loan">Closed Loans</a>
                </li>

                <li class="<?php if ($page == "forms") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>forms">Forms</a>
                </li>
                

                
            </ul>
            <ul id="cta">
                
                <li class="<?php if ($page == "contact") {
                                echo 'active';
                            } ?>">
                    <a href="<?= base_url() ?>contact" class="webBtn blankBtn">Contact us now</a>
                </li>
                
                <li class="soccial">
                    <ul class="flex">
                        <li><a href="<?= makeExternalUrl($site_settings->site_facebook) ?>"><i class="fi-facebook"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_twitter) ?>"><i class="fi-twitter"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_instagram) ?>"><i class="fi-instagram"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_linkedin) ?>"><i class="fi-linkedin"></i></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->

<!-- <div id="Nav" class="overlay">
  <a href="javascript:void(0)" class="closebtn">&times;</a>
  <div class="overlay-content">
        <ul>
            <li><a href="about">About us</a></li>
            <li><a href="about">About us</a></li>
            <li class="drop">
                    <a href="services.php">Services</a>
                    <ul class="sub">
                        <li><a href="interview-prep.php">Interview Prep</a></li>
                        <li><a href="resume-review.php">Resume Review Service</a></li>
                        <li><a href="coaching.php">1 on 1 Coaching Service</a></li>
                    </ul>
                </li>
                <li><a href="about.php">About us</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="about.php">About us</a></li>
            
        </ul>
  </div>
</div> -->
<!-- nav -->
<!-- <div class="upperlay"></div>
<div id="pageloader">
    <div class="lds-facebook"><div></div><div></div><div></div></div>
</div> -->


<script type="text/javascript">
    $(function() {
        // header fix
        offSet = $('body').offset().top;
        offSet = offSet + 5;
        $(window).scroll(function() {
            scrollPos = $(window).scrollTop();
            if (scrollPos >= offSet) {
                $('header').addClass('fix');
            } else {
                $('header').removeClass('fix');
            }
        });
    });
</script>