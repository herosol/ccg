// $(function() {
$(document).ready(function () {
  // $(".preClick").hover(function () {
  //   $(this).prev(".notification").toggleClass("notifyShow");
  // });

  // $(document).on("click", ".toggle", function () {
  //   document.getElementById("Nav").style.width = "50%";
  //   $("body").addClass("flow");
  // });
  // $(document).on("click", ".closebtn", function () {
  //   document.getElementById("Nav").style.width = "0%";
  //   $("body").removeClass("flow");
  // });
  // $(document).on("click", ".overlay-content a", function () {
  //   document.getElementById("Nav").style.width = "0%";
  //   $("body").removeClass("flow");
  // });
  /*========== Dropdown ==========*/
  $(document).on("click", ".dropBtn", function (e) {
    e.stopPropagation();
    var $this = $(this).parent().children(".dropCnt");
    $(".dropCnt").not($this).removeClass("active");
    var $parent = $(this).parent(".dropDown");
    $parent.children(".dropCnt").toggleClass("active");
  });
  $(document).on("click", ".dropCnt", function (e) {
    e.stopPropagation();
  });
  $(document).on("click", function () {
    $(".dropCnt").removeClass("active");
  });
  /*_____ Toggle _____*/
  $(document).on("click", ".toggle", function () {
    $(".toggle").toggleClass("active");
    $("body").toggleClass("flow");
    $("nav").toggleClass("active");
    $(".upperlay").toggleClass("active");
    $("nav > ul > li > .sub").slideUp();
  });
  $(document).on("click", "nav > ul > li.drop > a", function (e) {
    e.preventDefault();
    $(".sub").not($(this).parent().children(".sub").slideToggle()).slideUp();
  });
  $(window).on("resize", function () {
    $("nav > ul > li > .sub").removeAttr("style");
  });

  /*_____ Upload Resume _____*/
  $(document).on("click", ".uploadImg", function () {
    imgFile = $(this).attr("data-image-src");
    $(this).parents("form").find(".uploadFile").trigger("click");
  });

  /*_____ Upload File _____*/
  var upldFile;
  $(document).on(
    "click",
    ".uploadImg[data-upload]:not(.uploaded)",
    function () {
      upldFile = $(this).attr("data-upload");
      $(this).data("preText", $(this).attr("data-text"));
      $(this)
        .parents("form")
        .find(`input[type="file"][data-upload="${upldFile}"]`)
        .trigger("click");
    }
  );
  $(document).on("click", ".uploadImg[data-upload].uploaded", function () {
    upldFile = $(this).attr("data-upload");
    $(this).attr("data-text", $(this).data("preText")).removeClass("uploaded");
    $(this)
      .parents("form")
      .find(`input[type="file"][data-upload="${upldFile}"]`)
      .get(0).value = "";
  });
  $(document).on("change", ".uploadFile[data-upload]", function () {
    // alert(imgFile);
    let file = $(this).val();
    let preText = $(`.uploadImg[data-upload="${upldFile}"]`).data("preText");
    if (this.files.length > 0) {
      $(`.uploadImg[data-upload="${upldFile}"]`)
        .addClass("uploaded")
        .attr("data-text", file);
    } else {
      $(`.uploadImg[data-upload="${upldFile}"]`)
        .removeClass("uploaded")
        .attr("data-text", preText);
    }
    // console.log(this.files.length);
    // $(`.uploadImg[data-upload="${upldFile}"]`).html(file);
  });

  /*_____ Drop Down _____*/
  $(document).on("click", ".dropBtn", function (e) {
    e.stopPropagation();
    if ($(this).parents(".dropCnt:first").hasClass("active"))
      $(this)
        .parents(".dropCnt:first")
        .find(".dropCnt:first")
        .addClass("active");
    else {
      $(".dropCnt")
        .not($(this).parent().children(".dropCnt"))
        .removeClass("active");
      $(this)
        .parents(".dropDown:first")
        .find(".dropCnt:first")
        .toggleClass("active");
    }
  });
  $(document).on("click", ".dropCnt", function (e) {
    e.stopPropagation();
  });
  $(document).on("click", function () {
    $(".dropCnt").removeClass("active");
  });

  /*_____ Popup _____*/
  $(document).on("click", ".popup", function (e) {
    if ($(e.target).closest(".popup ._inner, .popup .inside").length === 0) {
      $(".popup").fadeOut("3000");
      $("body").removeClass("flow");
      $("#vidBlk").html("");
    }
  });
  $(document).on("click", ".crosBtn", function () {
    $(".popup").fadeOut();
    $("body").removeClass("flow");
    $("#vidBlk").html("");
  });
  $(document).keydown(function (e) {
    if (e.keyCode == 27) $(".popup .crosBtn").click();
  });
  $(document).on("click", ".popBtn", function () {
    var popUp = $(this).data("popup");
    $("body").addClass("flow");
    $(".popup[data-popup= " + popUp + "]").fadeIn();
  });
  $(document).on("click", ".popBtn[data-store]", function () {
    var vcode = $(this).data("store");
    $("#vidBlk").html(
      '<iframe src="https://www.youtube.com/embed/' +
        vcode +
        '?autoplay=1&loop=1&rel=0&wmode=transparent&modestbranding=1" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>'
    );
  });

  /*_____ FAQ's _____*/
  $(document).on("click", ".faqBlk > h5", function () {
    $(".faqBlk")
      .not($(this).parent().toggleClass("active"))
      .removeClass("active");
    $(".faqBlk > .txt")
      .not($(this).parent().children(".txt").slideToggle())
      .slideUp();
  });
  $(".faqLst > .faqBlk:nth-child(1)").addClass("active");

  $(document).on("click", ".txtGrp.pasDv > i.icon-eye", function () {
    $(this).addClass("icon-eye-slash");
    $(this).removeClass("icon-eye");
    $(this).parent().find(".txtBox").attr("type", "text");
  });
  $(document).on("click", ".txtGrp.pasDv > i.icon-eye-slash", function () {
    $(this).addClass("icon-eye");
    $(this).removeClass("icon-eye-slash");
    $(this).parent().find(".txtBox").attr("type", "password");
  });

  $(document).on("click", ".blk.collap > ._header > .downBtn", function () {
    $(this).parent().next("._content:first").slideToggle();
  });

  $(document).on("focus", ".txtGrp .txtBox:not(select)", function () {
    $(this).parents(".txtGrp:first").find("label:first").addClass("move");
  });

  $(document).on("blur", ".txtGrp .txtBox:not(select)", function () {
    if (this.value == "")
      $(this).parents(".txtGrp:first").find("label:first").removeClass("move");
  });
  $(".runBtn").on("click", function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      console.log(hash);
      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top - 60,
        },
        800
      );
    }
  });
});
var offSet = $("body").offset().top;
var offSet = offSet + 5;
$(window).scroll(function () {
  var scrollPos = $(window).scrollTop();
  if (scrollPos >= offSet) {
    $("header").addClass("fix");
  } else {
    $("header").removeClass("fix");
  }
});
$(window).on("load", function () {
  $("img").parent("a:not(.webBtn)").css("display", "block");
  $(".loader").delay(700).fadeOut();
  $("#pageloader").delay(1200).fadeOut("slow");
});
// counter
var counted = 0;
var offSet = $("body").offset().top;
var offSet = offSet + 150;
$(window).scroll(function () {
  var scrollPos = $(window).scrollTop();
  if (scrollPos >= offSet) {
    $("header").addClass("fix");
  } else {
    $("header").removeClass("fix");
  }

  // =======================counter===========
  var oTop = $("#counter").offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $(".count").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-count");
      $({
        countNum: $this.text(),
      }).animate(
        {
          countNum: countTo,
        },

        {
          duration: 2000,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
            //alert('finished');
          },
        }
      );
    });
    counted = 1;
  }
});
