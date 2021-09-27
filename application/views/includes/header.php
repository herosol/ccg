<header class="ease">
    <div class="contain-fluid">
        <div class="logo ease">
            <a href="index.php">
                <img src="<?=base_url()?>assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="toggle dim-zindex"><span></span></div>
        <nav class="ease">
        <div class="toggle dar-zindex"><span></span></div>
            <ul id="nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="<?php if ($page == "services") {
                                echo 'active';
                            } ?> drop">
                    <a href="#">Education</a>
                    <ul class="sub">
                        <li><a href="lender-types.php">Lender Types</a></li>
                        <li><a href="mortage-types.php">Mortage Types</a></li>
                        <li><a href="key_concepts.php">Key Concepts</a></li>
                        <li><a href="qualification.php">Qualification</a></li>
                        <li><a href="lona_P.php">Loan Process</a></li>
                        <li><a href="terms-and-conditions.php">Terms to Know</a></li>
                        <li><a href="faq.php">FAQ's</a></li>
                    </ul>
                </li>
                <li class="<?php if ($page == "about") {
                                echo 'active';
                            } ?>">
                    <a href="about.php">About us</a>
                </li>

                <li class="<?php if ($page == "loan") {
                                echo 'active';
                            } ?>">
                    <a href="loan.php">Loan Programs</a>
                </li>

                <li class="<?php if ($page == "calculator") {
                                echo 'active';
                            } ?>">
                    <a href="calculator.php">Rate Calculator</a>
                </li>

                <li class="<?php if ($page == "closed-loan") {
                                echo 'active';
                            } ?>">
                    <a href="closed-loan.php">Closed Loans</a>
                </li>

                <li class="<?php if ($page == "form-page") {
                                echo 'active';
                            } ?>">
                    <a href="form-page.php">Forms</a>
                </li>
                

                
            </ul>
            <ul id="cta">
                
                <li class="<?php if ($page == "contact") {
                                echo 'active';
                            } ?>">
                    <a href="contact.php" class="webBtn blankBtn">Contact us now</a>
                </li>
                
                <li class="soccial">
                    <ul class="flex">
                        <li><a href="#"><i class="fi-facebook"></i></a></li>
                        <li><a href="#"><i class="fi-twitter"></i></a></li>
                        <li><a href="#"><i class="fi-instagram"></i></a></li>
                        <li><a href="#"><i class="fi-linkedin"></i></a></li>
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
            <li><a href="about.php">About us</a></li>
            <li><a href="about.php">About us</a></li>
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