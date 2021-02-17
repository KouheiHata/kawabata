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
        <div class="navbar-tel">
            <p class="font-weight-bold"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせはこちら</a><a class="ml-15" href="tel:0778-22-6577"><i class="fas fa-phone-alt"></i>&nbsp;0778-22-6577</a></p>
        </div>
    </div>
    <div class="nav-bottom">
    <ul class="navbar-nav">
      <li class="nav-item item01">
        <a class="nav-link dropdown-hover" href="#">建築検討中の方へ</a>
          <ul class="dropdown-list">
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
            <ul class="dropdown-list">
              <li class="dropdown-link"><a href="#">リフォーム実績</a></li>
              <li class="dropdown-link"><a href="#">施工実績</a></li>
          </ul>
      </li>
      <li class="nav-item item05">
        <a class="nav-link" href="#">会社案内</a>
      </li>
    </ul>
  </div>
</div>
