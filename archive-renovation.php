<?php

/*
Template Name: リフォーム アーカイブ
*/
?>


<?php get_header(); ?>

<div class="container news-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="top-title">リフォーム実績<span class="h6"> -renovation-</span></h4>
        </div>

        <?php
  $args = array(
    'post_type' => 'renovation', // 投稿タイプのスラッグを指定
  );
  $the_query = new WP_Query($args); 
        if($the_query->have_posts()):
?>

<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-4">
            <div class="row d-flex align-items-center mews-box">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="news-box-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="news-text">
                        <p class="font-weight-bold text-muted"><?php the_time('Y/m/d(D)'); ?></p>
                        <a class="url" href="<?php the_permalink(); ?>"><h5 class="font-weight-bold py-2 news-title"><?php echo get_the_title(); ?></h5></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <hr style="border:none;background-color: #5b667a;height:1px;">
        </div>
        <?php endwhile; ?>

<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>