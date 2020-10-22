<?php

/*
Template Name: お問い合わせページ
*/
?>

<?php get_header(); ?>

<div class="container access-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4 class="top-title">お問い合せ<span class="h6"> -contact-</span></h4>
        </div>
<?php echo do_shortcode('[contact-form-7 id="426" title="お問い合せ（川端工務店）"]'); ?>
		   </div>
</div>

<?php get_footer(); ?>
