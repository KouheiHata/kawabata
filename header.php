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

<!--
<div class="sticky-top bg-white"  id="navbar">
<div class="container d-none d-md-block logo">
	<div class="row d-flex align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
            <a href="<?php echo home_url() ?>">
            <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店" width="300px">
            </a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 logo">
            <p class="font-weight-bold text-right h5 mt-2"><i class="fas fa-phone-square"></i>&nbsp;0778-22-6577</p>
            <p class="font-weight-bold text-right h5 mt-2"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせはこちら</a></p>
        </div>
    </div>
	</div>
</div>

      <nav>
      <a href="<?php echo home_url(); ?>" class="navbar-brand d-inline-block d-md-none align-items-center"><img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店"></a>
      <a href="tel:0778-22-6577" class="tel-i d-md-none em200"><i class="fas fa-phone-square"></i></a>
       <div id="ham" class="ham d-lg-none">
           <span class="ham_line ham_line1"></span>
           <span class="ham_line ham_line2"></span>
           <span class="ham_line ham_line3"></span>
       </div>
       <div id="menu_wrapper" class="menu_wrapper">
        <?php
          $args = array(
            'theme_location' => 'global_nav',
            'container' => 'div',
            'container_class' => 'global_nav',
            'container_id' => 'global_nav',
            'menu_class' => 'global_menu',
            'menu_id' => 'global_menu',
            'before' => '', // 各メニューテキストの前に表示される要素
            'after' => '', // 各メニューテキストの後ろに表示される要素
            'link_before' => '', // <a>タグの前に付ける要素
            'link_after' => '', // <a>タグの後ろに付ける要素
          );
          wp_nav_menu($args); ?>
          </div>
        
    </nav>
-->
<div class="sticky-top bg-white" id="navbar">    
<header id="f-header" class="f-header">
    <div class="container logo">
        <div class="row align-item-center">
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 logo-sm">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="株式会社　川端工務店">
                </a>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 logo d-none d-md-block text-right">
                <p class="d-none d-sm-inline-block font-weight-bold text-md-right h5 mt-3 pr-2"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせはこちら</a></p>
                <p class="d-inline-block font-weight-bold text-md-right h5 mt-3">
                <a href="tel:0778-22-6577"><i class="fas fa-phone-alt"></i>&nbsp;0778-22-6577</a></p>
            </div>
        </div>
    </div>
</header>  
<nav>
    <div class="tell-menu d-lg-none">
        <p class="menubtn"><a href="tel:0778-22-6577"><img src="<?php echo get_template_directory_uri(); ?>/images/tel2.png" alt="menu"></a></p>
    </div>
    <div class="sns-menu d-lg-none">
    <p class="menubtn"><img src="<?php echo get_template_directory_uri(); ?>/images/sns2.png" alt="menu"></p>
    </div>
    <div class="sns-menu-contents">
        <ul>
            <li>
                <div class="pt-5 pr-3 sidebar-width mx-auto sns-sm">
                   <h4 class="text-left inst"><a href="https://www.instagram.com/kawabatakoumuten226577/"><i class="fab fa-instagram fa-fw"></i>instagram</a></h4>
                    <?php echo do_shortcode('[instagram-feed width=115]'); ?>
               </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width mx-auto sns-sm">
                    <h4 class="text-left inst pb-3"><a href="https://www.facebook.com/kawabata.koumuten/"><i class="fab fa-facebook fa-fw"></i>facebook</a></h4>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkawabata.koumuten%2F&tabs=timeline&width=285&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="285" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width mx-auto sns-sm">
                    <h4 class="text-left inst"><a href="https://www.youtube.com/channel/UCE4kChI3_d2FFjFHA3Hj8Iw"><i class="fab fa-youtube fa-fw"></i>YouTube</a></h4><br />
                    <iframe width="285" height="157" src="https://www.youtube.com/embed/videoseries?list=PLzNCnTkLCFG2jdO8TXtuxAbTeohvRD5BS" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>]
                </div>
            </li>
            <li>
                <div class="pt-5 sidebar-width mx-auto sns-sm">
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
                <div class="pt-5 sidebar-width mx-auto sns-sm">
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
       <div id="ham" class="ham d-lg-none">
           <span class="ham_line ham_line1"></span>
           <span class="ham_line ham_line2"></span>
           <span class="ham_line ham_line3"></span>
       </div>
       <div id="menu_wrapper" class="menu_wrapper justify-content-center">
        <?php
          $args = array(
            'theme_location' => 'global_nav',
            'container' => 'div',
            'container_class' => 'global_nav',
            'container_id' => 'global_nav',
            'menu_class' => 'global_menu',
            'menu_id' => 'global_menu',
            'before' => '', // 各メニューテキストの前に表示される要素
            'after' => '', // 各メニューテキストの後ろに表示される要素
            'link_before' => '', // <a>タグの前に付ける要素
            'link_after' => '', // <a>タグの後ろに付ける要素
          );
          wp_nav_menu($args); ?>
          </div>
        
    </nav>
    </div>
