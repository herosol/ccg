<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="Creative Commercial Group">
<meta name="description" content="We Protect The World's Most Sensitive Data">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=base_url()?>">
<meta property="og:title" content="Creative Commercial Group">
<meta property="og:description" content="We Protect The World's Most Sensitive Data">
<meta property="og:image" content="https://www.herosolutions.com.pk/nimra/CCG/images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="https://www.herosolutions.com.pk/nimra/CCG/index.php">
<meta property="twitter:title" content="Creative Commercial Group">
<meta property="twitter:description" content="We Protect The World's Most Sensitive Data">
<meta property="twitter:image" content="https://www.herosolutions.com.pk/nimra/CCG/images/thumbnail.jpg">


<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/font-icon.min.css">
<!-- Rateyo Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/jquery.rateyo.css">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
<!-- Datepicker Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/datepicker.min.css">


<!-- JS Files -->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
<!-- Owl Carousel Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
 <script type="text/javascript">

  /*_____ banner slider _____*/
    $(window).on('load', function () {
        $('#owl-SmBanner').owlCarousel({
            nav: false,
            navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            loop: true,
            margin: 0,
            autoplay: true,
            smartSpeed: 3000,
            // autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                991: {
                    items: 1
                }
            }
        });
        /*_____ loan slider _____*/
    
        $('.loanSlider').owlCarousel({
            autoplay: true,
            dots: false,
            nav: true,
            navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            loop: true,
            autoHeight: true,
            animateOut: 'fadeOut',
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    autoplay: false,
                    dots: true
                },
                480:{
                    items: 1
                },
                991:{
                    items: 1
                },
                1200:{
                    items: 1
                }
            }
        });
    });
   

 </script> 
<!-- Datepicker Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/datepicker.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('.datepicker').datepicker({
            // multidate: true,
            format: 'mm-dd-yyyy',
            todayHighlight: true,
            multidateSeparator: ',  ',
            templates: {
                leftArrow: '<i class="fi-arrow-left"></i>',
                rightArrow: '<i class="fi-arrow-right"></i>'
            }
        });
    });
    // ===========================new slider===========
$(document).ready(function () {
$("#myCarousel").carousel({
  interval: false,
});

$("[id^=carousel-selector-]").click(function () {
  var id_selector = $(this).attr("id");
  try {
    var id = /-(\d+)$/.exec(id_selector)[1];
    console.log(id_selector, id);
    jQuery("#myCarousel").carousel(parseInt(id));
    $(this).parents(".hide-bullets").find("li.active").removeClass("active");
    $(this).parents("li").addClass("active");
  } catch (e) {
    console.log("Regex failed!", e);
  }
});

$('.owl-services').owlCarousel({
            autoplay: true,
            nav: false,
            navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
            // navText: [ 'prev', 'next' ],
            dots: true,
            loop:true,
            margin:15,
            center:true,
            autoWidth: false,
            autoHeight: false,
            smartSpeed: 1000,
            animateOut: 'fadeOut',
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    autoplay: false,
                    autoHeight: true,
                    dots: true,
                    nav:false
                },
                600:{
                    items: 1
                },
                1000:{
                    items: 2
                },
                1300:{
                    items: 3
                }
            }
        });

});
</script>
<!-- Rate yo Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.rateyo.js"></script>
<script type="text/javascript">
    $(function () {
        $(".rateYo").rateYo({
        rating: 3.6,
        readOnly: true,
        normalFill: "#aaa",
        ratedFill: "#ffc200",
        starWidth: "14px",
        spacing: "2px"
        });
    });
</script>


<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= base_url().SITE_IMAGES.'/images/'.$site_settings->site_icon ?>">