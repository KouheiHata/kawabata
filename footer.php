<footer class="bgWood">
<div class="container footer-box">
	<div class="row text-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-none d-lg-inline-block my-5 py-3 navbar_footer">
            <ul class="navbar-nav">
      <li class="nav-item item01">
        <a class="nav-link footer-dropdown-hover" href="#">建築検討中の方へ</a>
          <ul class="footer-dropdown-list item01-list">
              <li class="dropdown-link"><a href="#">家づくりの流れ</a></li>
              <li class="dropdown-link"><a href="#">Z空調の家</a></li>
              <li class="dropdown-link"><a href="#">長期優良住宅</a></li>
              <li class="dropdown-link"><a href="#">お得な補助金制度</a></li>
              <li class="dropdown-link"><a href="#">お問い合わせ</a></li>
          </ul>
      </li>
      <li class="nav-item item02">
        <a class="nav-link" href="#">お知らせ</a>
      </li>
      <li class="nav-item item03">
        <a class="nav-link" href="#">不動産情報</a>
      </li>
        <li class="nav-item item04">
        <a class="nav-link footer-dropdown-hover" href="#">実績</a>
            <ul class="footer-dropdown-list item04-list">
                <li class="dropdown-link"><a href="#">施工実績</a></li>
                <li class="dropdown-link"><a href="#">リフォーム実績</a></li>
          </ul>
      </li>
      <li class="nav-item item05">
        <a class="nav-link footer-dropdown-hover" href="#">会社案内</a>
          <ul class="footer-dropdown-list item05-list">
              <li class="dropdown-link"><a href="#">ご挨拶</a></li>
              <li class="dropdown-link"><a href="#">企業情報</a></li>
              <li class="dropdown-link"><a href="#">スタッフ紹介</a></li>
              <li class="dropdown-link"><a href="#">採用情報</a></li>
              <li class="dropdown-link"><a href="#">職人紹介</a></li>
              <li class="dropdown-link"><a href="#">アクセス</a></li>
              <li class="dropdown-link"><a href="#">なるほど住まい館</a></li>
          </ul>
      </li>
    </ul>
  </div>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="400px" alt="株式会社　川端工務店"><br />
		<div class="h5 pt-4 pb-3">
		〒915-0857 <br class="d-xl-none d-lg-none d-md-none d-sm-inline medium">福井県越前市四郎丸町31-2-9<br>
		<a href="tel:0778-22-6577"><i class="fas fa-phone-alt"></i>&nbsp;0778-22-6577</a>
		</div>
	</div>
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pb-4">
		<a class="btn btn-ghost" role="button" href="<?php echo home_url('/access/') ?>"><i class="fas fa-map-marker-alt "></i>&nbsp;アクセス</a>
		<a class="btn btn-ghost" role="button" href="<?php echo home_url('/contact/') ?>"><i class="far fa-envelope"></i>&nbsp;お問い合わせ</a><br />
	</div>

	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center md-5">
		<div class="mb-5 medium">Copyright&nbsp;&#169;&nbsp;株式会社川端工務店.&nbsp;All&nbsp;Rights&nbsp;Reserved.<br />
	</div>

	</div>
</div>
</footer>
    
<!-- Bootstrap4 jQuery Popper CDN -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- sticky navbar -->
<script src="<?php echo get_template_directory_uri(); ?>/js/sticky.js"></script>

<!-- match height -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js"></script>

<!-- JQuery-rwdImageMaps -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js" integrity="sha512-eZB7hQa0bRlrKMQ2njpP0d/Klu6o30Gsr8e5FUCjUT3fSlnVkm/1J14n58BuwgaMuObrGb7SvUfQuF8qFsPU4g==" crossorigin="anonymous"></script>

<script>
$(function($){
	$('.news-img').matchHeight();
});
</script>

<!-- スマホ用メニューのフェードイン・フェードアウト -->
<script>
$(function() {
  $("#ham").click(function(){
    if (!$("#ham").hasClass("navi-btn-on")) {
      $("#ham").addClass("navi-btn-on");
      $("#global_nav").fadeIn();
    } else {
      $("#ham").removeClass("navi-btn-on")
      $("#global_nav").fadeOut();
    }
  });
});
</script>

<!-- Yamm3 -->
<script>
jQuery(document).on('click', '.yamm .dropdown-menu', function(e) {
   e.stopPropagation()
})
</script>

<script>
$(function($){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 200){
                $(this).addClass('scrollin');
            }
        });
    });
});

</script>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

<script>
    $(window).on('load resize', function(){
  var winW = $(window).width();
  var devW = 991.98;
  if (winW <= devW) {
    $(".nav-bottom").addClass("hide");
  } else {
    $(".nav-bottom").removeClass("hide");
  }
});
</script>  
    
<script>
    $(function(){
        $(".ham-trigger").click(function(){
            $(".nav-bottom").fadeToggle(300); 
            $(".ham-img1").toggleClass("hide");
            $(".ham-img2").toggleClass("hide");
            $(".ham-trigger").toggleClass("p-fixed");
            $(".sns-trigger").toggleClass("hide");
        });
    });
</script>      
    
<script>
    $(function(){
        $(".sns-menu-contents").hide();
        $(".sns-trigger").click(function(){
            $(".sns-menu-contents").fadeToggle(300);
            $(".snsmenubtn").toggleClass("hide");
            $(".snsmenubtn2").toggleClass("hide");
            $(".sns-trigger").toggleClass("p-fixed");
            $(".ham-trigger").toggleClass("hide");
        });
    });
</script>     
    
<script>
    $(function(){
  $('.ham-trigger').on('click', function() {
    $(this).toggleClass('active');
    return false;
  });
});
</script>    
    
<script>
$(function() {
	var headerHeight = $('#navbar').outerHeight(true),
		startPos = 0;
	$(window).on('load scroll', function() {
		var scrollPos = $(this).scrollTop();
		if ( scrollPos > startPos && scrollPos > headerHeight ) {
			$('#navbar').css('top', '-92px');
		} else {
			$('#navbar').css('top', '0');
		}
		startPos = scrollPos;
	});
});	
</script>   
    
<script>
    var startPos = 0,winScrollTop = 0;
    $('.navbar-nav').on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos && winScrollTop > 100) {
        $('.ham-trigger').addClass('trigger-hide');
    } else {
        $('.ham-trigger').removeClass('trigger-hide');
    }
    startPos = winScrollTop;
});
</script> 
    
<script>
    var startPos = 0,winScrollTop = 0;
    $('.sns-menu-contents').on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos && winScrollTop > 100) {
        $('.sns-trigger').addClass('trigger-hide');
    } else {
        $('.sns-trigger').removeClass('trigger-hide');
    }
    startPos = winScrollTop;
});
</script>      

<script>
$(".item01 a").click(function(){
    $(".item01-list").toggleClass("list-active"); 
    $(".item01").toggleClass("item01-active"); 
    $(".item02").toggleClass("mt-283");
});
</script>

<script>
$(".item04 a").click(function(){
    $(".item04-list").toggleClass("list-active"); 
    $(".item04").toggleClass("item04-active bb-gray"); 
    $(".item05").toggleClass("mt-113");
});
</script> 

<script>
$(".item05 a").click(function(){
    $(".item05-list").toggleClass("list-active"); 
    $(".item05").toggleClass("item04-active"); 
});
</script>     
    
<script>
$(function () {
    setTimeout('arrow()'); //アニメーションを実行
});

function arrow() {
    $('#arrow').animate({
        marginTop: '-=20px'
    }, 800).animate({
        marginTop: '+=20px'
    }, 800);
    setTimeout('arrow()', 1600); //アニメーション
}
</script>

<!-- rwdImageMaps -->
<script>
	$('img[usemap]').rwdImageMaps();
</script>

<!-- rwdImageMaps -->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 100){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>