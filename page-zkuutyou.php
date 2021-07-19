<?php

/*
Template Name: Z空調の家ページテンプレート
*/

?>


<?php get_header(); ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/zkuchou_2.jpg" alt="家中心地よい、しかも経済的｜空調革命　Z空調" width="100%">

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
                        <img class="z-img1" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg1.png" alt="温度差" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="d-inline-block text-lightgreen z-card-title">家中で温度差がない<br class="d-block d-sm-none">健康的な生活</h3>
                            <p class="card-text d-inline-block z-card-text">Z空調は家の中の温度が常に適温で安定。<br>夏場は就寝中に気になる冷風も直接感じない涼やかさで朝までぐっすり眠ることができ、熱中症リスクを軽減します。また冬場は、温度差によるヒートショックのリスクを軽減することができます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card z-card" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="pb10 z-img1" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg2.png" alt="夏の空気" width="100%">
                        <img class="pb25 z-img2" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg3.png" alt="冬の空気" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="d-inline-block text-lightgreen z-card-title">循環して一年中快適</h3>
                            <p class="card-text d-inline-block z-card-text mb-md-5">夏は風が天井伝いに流れるようにします。頭上からの風が部屋全体を涼しくします</p>
                            <p class="card-text d-inline-block z-card-text mt-md-3">冬は垂直に風を流します。これにより、空気の流れをつくり足元からくる冷えを防ぎます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card z-card" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="z-img1" src="<?php echo get_template_directory_uri(); ?>/images/z-cardimg4.png" alt="導入費用" width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="d-inline-block text-lightgreen z-card-title">導入費用も月々の電気代も<br class="d-block d-sm-none d-md-block">驚きの低コスト</h3>
                            <p class="card-text d-inline-block z-card-text">イニシャルコストは 一般的な全館空調の <br class="d-none d-md-block d-lg-none">“約半額”。<br>月々の光熱費も、総務省家計調査データとZ 空調搭載住宅実測値の比較したところ、Z 空調搭載住宅の方が低コストであることが実証されました。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="text-center btn-box">
                    <div>
                        <a href="<?php echo home_url('/contact'); ?>"><button class="text-center url z-btn z-bg">Z空調についての<br>お問い合わせ</button></a>
                    </div>
                </div>
                <div class="text-center">
                    <div>
                        <a href="https://www.z-kucho.jp/" class="url z-btn z-bg2" target="_blank" rel="noopener">詳しくはこちら</a>
                        <p class="text-center pt30">※別サイトにジャンプします</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>