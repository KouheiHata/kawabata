<?php

/*
Template Name: 川端工務店固定ページ
*/
?>

<?php get_header(); ?>

<div class="container single-top">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
            <div class="row">
                <?php if(have_posts()): the_post(); ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="top-title single-title medium"><?php echo get_the_title(); ?><span class="h6 text-muted"> -<?php the_time('Y.m.d'); ?>-</span></h4>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single-content"><?php the_content(); ?></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
			<div style="padding: 10px; margin-bottom: 10px; border: 1px dashed #333333; border-radius: 5px; line-height: 1.5;">
			【新型コロナウイルスに関する対応について】<br />
			■１時間あたり２組様限定でご案内いたします。
			■スタッフの検温やアルコール消毒を徹底し、マスク着用で接客をさせていただきます。<br />
			■ご来場いただいたお客様には、アルコール消毒及び、手袋・マスクの着用をお願い致します。<br />
			<br />
			ご来場いただきます皆様の安全を配慮し、室内の定期的な換気などを行いながら見学会を開催させていただきますので、ご理解・ご協力の程よろしくお願いいたします。<br />
			<br />
			※当日の予約は電話でお願いします。
			</div>
		</div>
    </div>
</div>
 
<?php get_footer(); ?>