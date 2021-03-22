<?php

/*
Template Name: 川端工務店採用情報ページ
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 adop-top mt100">
            <div class="adop-titlebox">
                <h3>一緒に働いてくれるスタッフ募集</h3><h5>労働条件はご相談に応じます。</h5>
                <p class="d-inline-block">正社員</p>
            </div>
            <div class="mb80"><?php echo do_shortcode('[metaslider id="1252"]'); ?></div>
            <div class="adop-textbox">
                <h4>弊社と共に、現場の指揮・監督・営業・設計の担当者として、ご活躍いただける方を募集します。</h4>
                <p>当社は、建材から木材まで、幅広い建築資材の取り扱いのある会社や、各種協力業者様との連携で、分譲住宅を中心に、福井県内で建築/販売実績のある工務店です。<br>新たな人員の導入に際し、現場の指揮・監督・営業・設計の担当者として、ご活躍いただける方を募集します。</p>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 adop-card">
            <div>
                <h5 class="text-center adop-card-toptext">入社1年目・先輩からのメッセージ</h5>
            </div>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-5 adop-card-imgbox">
                        <img class="adop-card-img" src="<?php echo get_template_directory_uri(); ?>/images/senpai_mes.png" alt="写真">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body balloon-left">
                            <p>建築業界未経験の状態から入社しましたが、毎日が新しい経験で、人間的にも成長できると感じています。<br>日々進化していく技術に触れながら仕事ができることが魅力です。一緒に仕事をする上司や先輩は気さくで話しやすく、打ち解けやすい職場環境です。</p>
                            <p class="sub-text">営業部・工事部&nbsp;渡辺真</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-box">
            <table class="table table-bordered">
            <tbody>
            <tr>
            <th scope="row">仕事内容</th>
            <td>現場の監督業務、営業、設計業務</td>
            </tr>
            <tr>
            <th scope="row">雇用形態</th>
            <td>正社員</td>
            </tr>
            <tr>
            <th scope="row">募集対象</th>
            <td>18歳～（高校卒業以上）、有資格者優遇（一級建築士、二級建築士、宅地建物取引士）</td>
            </tr>
            <tr>
            <th scope="row">給与</th>
            <td>当社規定による</td>
            </tr>
            <tr>
            <th scope="row">諸手当</th>
            <td>交通費、資格手当、役職手当、時間外手当</td>
            </tr>
            <tr>
            <th scope="row">勤務地</th>
            <td>福井県内（主に越前市）</td>
            </tr>
            <tr>
            <th scope="row">勤務時間</th>
            <td>7時30分～17時15分</td>
            </tr>
            <tr>
            <th scope="row">休日休暇</th>
            <td>隔週2日制（日・祝・第2,4土曜日）、夏季休暇、年末年始、有給、慶弔</td>
            </tr>
            <tr>
            <th scope="row">保険</th>
            <td>社会保険、雇用保険、労災保険</td>
            </tr>
            <tr>
            <th scope="row">試用期間</th>
            <td>3ヵ月</td>
            </tr>
            <tr>
            <th scope="row">福利厚生/社内制度</th>
            <td>退職金制度、産前産後・育児・介護休業制度、時間短縮勤務制度、社員レクレーション、グループ社員親睦会 、制服貸与</td>
            </tr>
            <tr>
            <th scope="row">職場情報</th>
            <td>若い社員が多く、一人ひとりのモチベーションが高いです。</td>
            </tr>
            <tr>
            <th scope="row">採用フロー</th>
            <td>1. エントリー（下部エントリーフォームより受付しております）<br>▼<br>2. 書類選考（履歴書・職務経歴書をご提出いただきます）<br>▼<br>3. 個別選考（面接）</td>
            </tr>
            </tbody>
            </table>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 entry-box">
            <div class="adop-titlebox">
                <h3>求人エントリーフォーム</h3>
            </div>
            <div class="pt30">
                <p><span class="text-red">※</span>は必須入力項目</p>
                <p><?php echo do_shortcode('[contact-form-7 id="1228" title="採用情報"]'); ?></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>