<?php

/*
Template Name: 川端工務店フロントページ
*/
?>

<?php get_header(); ?>

<!-- スマホサイト -->
<img src="<?php echo get_template_directory_uri(); ?>/images/top-img2.jpg" alt="自分らしく素直になれる家" class="top-img2-res" />

<!-- PCサイト -->
<img src="<?php echo get_template_directory_uri(); ?>/images/top-pc.png" usemap="#ImageMap" alt="自分らしく素直になれる家" class="top-img2-pc" />
<map name="ImageMap">
  <area shape="rect" coords="312,660,792,1070" href="<?php echo home_url('/hojyokin/'); ?>" alt="補助金" />
  <area shape="rect" coords="958,663,1441,1070" href="<?php echo home_url('/zkuutyou/'); ?>" alt="Z空調" />
  <area shape="rect" coords="1601,663,2082,1069" href="<?php echo home_url('/longlife/'); ?>" alt="長期優良住宅" />
</map>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12"><!-- （メイン部分） start-->
                <div class="row">
                    <div class="pop-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pop1.svg" class="pop1 fadein" alt="補助金に関する情報はこちら">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pop2.svg" class="pop2 fadein" alt="Z空調に関する情報はこちら">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pop3.svg" class="pop3 fadein" alt="長期優良住宅に関する情報はこちら">
                    </div><!-- pop-area -->
                </div>
                <div class="row"><!-- row（メイン部分内） -->
                    <div class="h5 bold text-center top-midashi-back top-index-padding" style="background-color: #58A4B0;">お知らせ</div>

                    <?php
  $args = array(
    'post_type' => 'news', // 投稿タイプのスラッグを指定
    'posts_per_page' => '6' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
?>

                    <div class="top-index-padding">
                    <div class="top-index-grid">

                    <?php if($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>

                    <div>
                        <div class="rbn">
                            <p class="news-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
                        </div>
                        <div class="news-img">
                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image-i.png" alt="画像なし"></a>
                        <?php endif; ?>

                        <div class="news-width">
                        <a class="url" href="<?php the_permalink(); ?>">
                            <p class="font-weight-bold news-title"><?php echo get_the_title(); ?></p>
                        </a>
                        </div>

                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php else: ?>
                    <!-- 投稿が無い場合の処理 -->
                    <?php endif; ?>

                    </div>	<!-- top-index-grid -->

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-4 mb-5">
                            <a href="<?php echo get_template_directory_uri(); ?>/news" class="url border-btn">もっとみる</a>
                        </div>

                    </div>	<!-- top-index-padding -->
                    <!-- お知らせ end -->

                    <div class="h5 bold text-center top-midashi-back top-index-padding" style="background-color: #00762C; margin-top: 60px;">不動産情報</div>

                    <?php
  $args = array(
    'post_type' => 'real_estate', // 投稿タイプのスラッグを指定
    'posts_per_page' => '6' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

                    <div class="top-index-padding">
                    <div class="top-index-grid">

                   <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                    <div>
                        <div class="rbn">
                            <p class="realestate-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
                        </div>
                        <div class="realestate-img">
                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image-i.png" alt="画像なし"></a>
                        <?php endif; ?>
                        </div>

                        <div class="news-width">
                        <a class="url" href="<?php the_permalink(); ?>">
                            <p class="font-weight-bold news-title"><?php echo get_the_title(); ?></p>
                        </a>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php else: ?>
                    <!-- 投稿が無い場合の処理 -->
                    <?php endif; ?>

                    </div>	<!-- top-index-grid -->

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-4 mb-5">
                            <a href="<?php echo home_url('/realestate/'); ?>" class="url border-btn">もっとみる</a>
                        </div>

                    </div>	<!-- top-index-padding -->
                    <!-- 不動産情報 end -->


                    <div class="h5 bold text-center top-midashi-back top-index-padding" style="background-color: #2B303A; margin-top: 60px;">施工実績</div>

                <?php
  $args = array(
    'post_type' => 'works', // 投稿タイプのスラッグを指定
    'posts_per_page' => '6' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

                <div class="top-index-padding">
                <div class="top-index-grid">

                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                <div>
                    <div class="rbn">
                        <p class="works-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
                    </div>
                    <div class="works-img">
                    <?php if(has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <?php else: ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image-i.png" alt="画像なし"></a>
                    <?php endif; ?>
                    </div>

                    <div class="news-width">
                    <a class="url" href="<?php the_permalink(); ?>">
                        <p class="font-weight-bold news-title"><?php echo get_the_title(); ?></p>
                    </a>
                    </div>
                </div>

                <?php endwhile; ?>

                <?php else: ?>
                <!-- 投稿が無い場合の処理 -->
                <?php endif; ?>

                </div>	<!-- top-index-grid -->

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-4 mb-5">
                        <a href="<?php echo get_template_directory_uri(); ?>/works" class="url border-btn">もっとみる</a>
                    </div>

                </div>	<!-- top-index-padding -->
                <!-- 施工実績 end -->

                <div class="h5 bold text-center top-midashi-back top-index-padding" style="background-color: #D64933; margin-top: 60px;">リフォーム実績</div>

                <?php
  $args = array(
    'post_type' => 'renovation', // 投稿タイプのスラッグを指定
    'posts_per_page' => '6' // 投稿件数の指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

                <div class="top-index-padding" style="padding-bottom: 95px;">
                <div class="top-index-grid">

                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                <div>
                    <div class="rbn">
                        <p class="rnb-time font-weight-bold text-white"><?php the_time('Y.m.d'); ?></p>
                    </div>
                    <div class="rnb-img">
                    <?php if(has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <?php else: ?>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image-i.png" alt="画像なし"></a>
                    <?php endif; ?>
                    </div>

                    <div class="news-width">
                    <a class="url" href="<?php the_permalink(); ?>">
                        <p class="font-weight-bold news-title"><?php echo get_the_title(); ?></p>
                    </a>
                    </div>
                </div>

                <?php endwhile; ?>

                <?php else: ?>
                <!-- 投稿が無い場合の処理 -->
                <?php endif; ?>
                
                </div>	<!-- top-index-grid -->

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt-4 mb-5">
                        <a href="<?php echo get_template_directory_uri(); ?>/renovation" class="url border-btn">もっとみる</a>
                    </div>

                </div>	<!-- top-index-padding -->
                <!-- リフォーム実績 end -->

                </div><!-- row（メイン部分内） end-->
        </div><!-- （メイン部分） end-->

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 sidebar-option"><!-- サイドバー -->

                <img src="<?php echo get_template_directory_uri(); ?>/images/sidebar_step_tmp.png" alt="家づくりの５ステップ">
                <!-- 家づくりのステップ end -->

               <div id="side-sns">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-5 pr-3">
                   <h4 class="text-left inst"><a href="https://www.instagram.com/kawabatakoumuten226577/"><i class="fab fa-instagram fa-fw"></i>instagram</a></h4>
                    <?php echo do_shortcode('[instagram-feed width=115]'); ?>
               </div><!-- instagram end -->
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-5">
                    <h4 class="text-left inst pb-3"><a href="https://www.facebook.com/kawabata.koumuten/"><i class="fab fa-facebook fa-fw"></i>facebook</a></h4>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkawabata.koumuten%2F&tabs=timeline&width=285&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="285" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div><!-- facebook end -->
                <!-- Youtube -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-5">
                    <h4 class="text-left inst"><a href="https://www.youtube.com/channel/UCE4kChI3_d2FFjFHA3Hj8Iw"><i class="fab fa-youtube fa-fw"></i>YouTube</a></h4><br />
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/videoseries?list=PLzNCnTkLCFG2jdO8TXtuxAbTeohvRD5BS" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div><!-- Youtube end -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-5">
                    <h4 class="text-left inst pb-3">
                        <i class="fab fa-pinterest"></i>
                        <a href="https://www.pinterest.jp/kawabatakoumuten226577/">Pinterest</a>
                    </h4>
                    <a data-pin-do="embedUser" data-pin-lang="ja" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.jp/kawabatakoumuten226577/"></a>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-5 pb-3">
                    <h4 class="text-left inst pb-3 pl-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon_line.png" width="30px">
                        LINE@
                    </h4>
                    <div class="line-it-button" data-lang="ja" data-type="friend" data-lineid="@kawabata0778226577" data-count="true" data-home="true" style="display: none;"></div>
                    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script><br /><br />
                    <div class="line-it-button" data-lang="ja" data-type="like" data-url="https://www.kawabata-koumuten.com/" data-share="true" style="display: none;"></div>
                    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
                </div><!-- LINE end -->

            </div><!-- side-sns -->

        </div><!-- サイドバー end-->
    </div><!--  row end -->
</div><!-- container end -->

<?php get_footer(); ?>
