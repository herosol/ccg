<footer>
    <div class="inside">
        <div class="contain">
            <div class="upside">
                <h3>Subscribe with us<span>To Get Regular updates on events, conferences, workshops, trainings and monthly reports on institutions, please subscribe with us.</span></h3>
                <form action="<?=base_url()?>newsletter" method="post" id="newsletterFrm" class="frmAjax">
                    <label for="email">Stay up to date with the latest news and deals!</label>
                    <div class="alertMsg" style="display:none"></div>
                    <div class="inside">
                        <input type="text" name="email" id="email" class="txtBox" placeholder="Enter your email address">
                        <button type="submit" class="webBtn blueBtn">Subscribe!</button>
                    </div>
                </form>
            </div>
            <div class="flexRow flex">
                <div class="col col1">
                    <div class="image scuLogo"><img src="images/logo1.png" alt=""></div>
                    <p>we are here to solve your problems. Either you are looking to sale or managing your properties. TP Partners in Property will guarantee you a quality service.!</p>
                </div>
                <div class="col col2">
                    <h3>Company</h3>
                    <ul class="lst">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= base_url() ?>about-us">About Us</a></li>
                        <li><a href="<?= base_url() ?>loan-programs">Loan Programs</a></li>
                        <li><a href="<?= base_url() ?>rate-calculator">Rate Calculator</a></li>
                        <li><a href="<?= base_url() ?>closed-loan">Closed Loans</a></li>
                        <li><a href="<?= base_url() ?>forms">Forms</a></li>
                        <li><a href="<?= base_url() ?>contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col col3">
                    <h3>Education</h3>
                    <ul class="lst">
                        <li><a href="<?= base_url() ?>lender-types">Lender Types</a></li>
                        <li><a href="<?= base_url() ?>mortage-types">Mortage Types</a></li>
                        <li><a href="<?= base_url() ?>key-concepts">Key Concepts</a></li>
                        <li><a href="<?= base_url() ?>qualification">Qualification</a></li>
                        <li><a href="<?= base_url() ?>loan-process">Loan Process</a></li>
                        <li><a href="<?= base_url() ?>terms-to-know">Terms to Know</a></li>
                        <li><a href="<?= base_url() ?>faqs">FAQ's</a></li>
                    </ul>
                </div>
                <div class="col col4">
                    <h3>Contact Info</h3>
                    <ul class="lst">
                        <li><a href="mailto:<?= $site_settings->site_email ?>">Mail : <?= $site_settings->site_email ?></a></li>
                        <li><a href="tel: <?= $site_settings->site_phone ?>">Call : <?= $site_settings->site_phone ?></a></li>
                        <li>Address : <?= $site_settings->site_address ?></li>
                    </ul>
                </div>
            </div>
            <div class="btmBlk flex">
                <ul class="social flex">
                        <li><a href="<?= makeExternalUrl($site_settings->site_facebook) ?>" target="_blank" class=""><i class="fi-facebook"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_twitter) ?>" target="_blank" class=""><i class="fi-twitter"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_instagram) ?>" target="_blank" class=""><i class="fi-instagram"></i></a></li>
                        <li><a href="<?= makeExternalUrl($site_settings->site_linkedin) ?>" target="_blank" class=""><i class="fi-linkedin"></i></a></li>
                    </ul>
                
            </div>
            <div class="copyright text-center">
                <p><?= $site_settings->site_copyright ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->


<!-- Main Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/custom-validation.js"></script>