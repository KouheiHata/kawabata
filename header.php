<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

<!-- Bootstrap4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/96a293b6a6.js" crossorigin="anonymous"></script>    
<!-- CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?20200807" rel="stylesheet">
<!-- Responsive CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css?20200807" rel="stylesheet">
<!-- Noto Sans Web font -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<!-- Yamm3 -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/yamm.css" rel="stylesheet">
<!-- print CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/print.css" rel="stylesheet" media="print">
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- google search console -->
<meta name="google-site-verification" content="kzwKpww0YrhS42jeKtEOEwBkSzd08Y4LcfAcg9H1vlM" />
</head>
<body <?php body_class (); ?>>
<?php wp_head(); ?>

<div class="navbar sticky-top bg-white" id="navbar">
    <div class="nav-top">
        <div class="navbar-logo">
            <a href="<?php echo home_url(); ?>">
                <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社_川端工務店">
            </a>
        </div>
        <div class="navbar-tel d-none d-lg-block">
            <p class="font-weight-bold"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせはこちら</a><a class="ml-15" href="tel:0778-22-6577"><i class="fas fa-phone-alt"></i>&nbsp;0778-22-6577</a></p>
        </div>
        <div class="sns-trigger d-lg-none">
            <img class="snsmenubtn" src="<?php echo get_template_directory_uri(); ?>/images/sns.png" alt="メニューボタン">
            <img class="snsmenubtn2 hide" src="<?php echo get_template_directory_uri(); ?>/images/menu_open.png" alt="メニューボタン">
        </div>
        <div class="tell-menu d-lg-none">
            <p class="menubtn"><a href="tel:0778-22-6577"><img src="<?php echo get_template_directory_uri(); ?>/images/tel.png" alt="menu"></a></p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 sns-menu-contents">
        <ul>
            <li>
                <div class="pt-5 sidebar-width sns-sm">
                   <h4 class="text-left inst"><a href="https://www.instagram.com/kawabatakoumuten226577/"><i class="fab fa-instagram fa-fw"></i>instagram</a></h4>
                    <?php echo do_shortcode('[instagram-feed width=115]'); ?>
               </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width sns-sm">
                    <h4 class="text-left inst pb-3"><a href="https://www.facebook.com/kawabata.koumuten/"><i class="fab fa-facebook fa-fw"></i>facebook</a></h4>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkawabata.koumuten%2F&tabs=timeline&width=285&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="285" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width sns-sm">
                    <h4 class="text-left inst"><a href="https://www.youtube.com/channel/UCE4kChI3_d2FFjFHA3Hj8Iw"><i class="fab fa-youtube fa-fw"></i>YouTube</a></h4><br />
                    <iframe width="285" height="157" src="https://www.youtube.com/embed/videoseries?list=PLzNCnTkLCFG2jdO8TXtuxAbTeohvRD5BS" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>]
                </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width sns-sm">
                    <h4 class="text-left inst pb-3">
                        <i class="fab fa-pinterest"></i>
                        <a href="https://www.pinterest.jp/kawabatakoumuten226577/">Pinterest</a>
                    </h4>
                    <div>
                    <a data-pin-do="embedUser" data-pin-lang="ja" data-pin-board-width="25vw" data-pin-scale-height="240" data-pin-scale-width="7vw" href="https://www.pinterest.jp/kawabatakoumuten226577/"></a>
                    </div>
                </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width sns-sm">
                    <h4 class="text-left inst pb-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon_line.png" width="30px">
                        LINE@
                    </h4>
                    <div class="line-it-button" data-lang="ja" data-type="friend" data-lineid="@kawabata0778226577" data-count="true" data-home="true" style="display: none;"></div>
                    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script><br /><br />
                    <div class="line-it-button" data-lang="ja" data-type="like" data-url="https://www.kawabata-koumuten.com/" data-share="true" style="display: none;"></div>
                    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                </div>
            </li>
        </ul> 
        </div> 
            </div>
        </div>
        
        <div class="ham-trigger d-lg-none" id="ham">
            <img class="ham-img1" src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="メニューボタン">
            <img class="ham-img2  hide" src="<?php echo get_template_directory_uri(); ?>/images/menu_open.png" alt="メニューボタン">
        </div>
    </div>
    <div class="nav-bottom">
    <ul class="navbar-nav">
      <li class="nav-item item01">
        <a class="nav-link dropdown-hover" href="#">建築検討中の方へ</a>
          <ul class="dropdown-list item01-list">
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
        <a class="nav-link dropdown-hover" href="#">実績</a>
            <ul class="dropdown-list item04-list">
                <li class="dropdown-link"><a href="#">施工実績</a></li>
                <li class="dropdown-link"><a href="#">リフォーム実績</a></li>
          </ul>
      </li>
      <li class="nav-item item05">
        <a class="nav-link dropdown-hover" href="#">会社案内</a>
          <ul class="dropdown-list item05-list">
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
</div>
