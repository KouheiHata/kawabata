<?php

/*
Template Name: Z空調の家ページテンプレート
*/

?>


<?php get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/images/top-img2.jpg" alt="トップ画像" width="100%">

<div class="container-fluid bg-lightbrown py80">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p class="d-inline-block bg-white z-title">Z空調の家<span class="text-brown">とは?</span></p>
            <p class="text-center text-darkbrown pb40 z-text">一年中、家の温度を快適に。<br>Z空調は、身体にも家計にもやさしい、新時代冷暖システムです。</p>
            <img class="z-crosssection-img" src="<?php echo get_template_directory_uri(); ?>/images/z-crosssection.png" alt="断面図" width="100%">
        </div>
    </div>
</div>
</div>

<div class="container-fluid bg-brown py80">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p class="d-inline-block bg-white z-title text-lightgreen">快適生活<span class="text-brown">のポイント</span></p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card z-card pb40" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="pt30" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg1.png" alt="温度差" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="d-inline-block text-lightgreen z-card-title">家中で温度差がない<br class="d-block d-md-none">健康的な生活</h3>
                            <p class="card-text d-inline-block z-card-text">Z空調は家の中の温度が常に適温で安定。<br>夏場は就寝中に気になる冷風も直接感じない涼やかさで朝までぐっすり眠ることができ、熱中症リスクを軽減します。また冬場は、温度差によるヒートショックのリスクを軽減することができます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card z-card" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="pb10" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg2.png" alt="夏の空気" width="100%">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg3.png" alt="冬の空気" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="d-inline-block text-lightgreen z-card-title">部屋全体に空気が循環して<br class="d-block d-md-none">年中快適</h3>
                            <p class="card-text d-inline-block z-card-text">夏はルーバーを通常位置で使用し、風が天井伝いに流れるようにします。頭上からの風が部屋全体を涼しくします<br><br>冬はルーバーを一番手前まで引出し、垂直に風を流します。これにより、空気の流れをつくり足元からくる冷えを防ぎます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card z-card" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="pt30" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg4.png" alt="導入費用" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="d-inline-block text-lightgreen z-card-title">導入費用も月々の電気代も<br>驚きの低コスト</h3>
                            <p class="card-text d-inline-block z-card-text">イニシャルコストは 一般的な全館空調の <br class="d-none d-md-block d-lg-none">“約半額”。<br>月々の光熱費も、総務省家計調査データとZ 空調搭載住宅実測値の比較したところ、Z 空調搭載住宅の方が低コストであることが実証されました。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <a href="https://www.hinokiya.jp/z/" class="url z-btn">詳しくはこちらから</a>
                    <p class="text-center pt30">※別サイトにジャンプします</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>