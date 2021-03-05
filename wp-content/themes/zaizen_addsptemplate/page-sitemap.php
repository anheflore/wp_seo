<?php
/*
Template Name: サイトマップ
*/
?>



<?php get_header(); ?>
<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header'); ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>サイトマップ</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu'); ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li>サイトマップ</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2>サイトマップ</h2>


              <h3 class="mainh3">TOP</h3>
              <table>
                <tr>
                  <td><a href="<?php echo home_url() ?>/">当たる話題の電話占いサイトを徹底比較</a></td>
                </tr>
              </table>

              <h3 class="mainh3">検索結果</h3>
              <table>
                <tr>
                  <td><a href="<?php echo home_url() ?>/total-ranking/">総合ランキング</a></td>
                  <td><a href="<?php echo home_url() ?>/nayami-ranking/">悩み別ランキング</a></td>
                  <td><a href="<?php echo home_url() ?>/tellerranking/">占い師ランキング</a></td>
                </tr>
              </table>



              <h3 class="mainh3">電話占いについて</h3>

              <table>
                <tr>
                  <td><a href="<?php echo home_url() ?>/beginer/">電話占い初心者ガイド</a></td>
                  <td><a href="<?php echo home_url() ?>/columns/">電話占いコラム一覧</a></td>
                </tr>
              </table>

              <h3 class="mainh3">電話占いサービス一覧</h3>
              <table>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/82/">シエロ</a></td>
                  <td><a href="<?php echo home_url() ?>/service/220/">クオーレ</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/141/">スピカ</a></td>
                  <td><a href="<?php echo home_url() ?>/service/222/">ピュエリ</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/143/">エキサイト</a></td>
                  <td><a href="<?php echo home_url() ?>/service/224/">ウラナ</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/146/">ヴェルニ</a></td>
                  <td><a href="<?php echo home_url() ?>/service/226/">リエル</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/162/">インスピ</a></td>
                  <td><a href="<?php echo home_url() ?>/service/228/">ピクシィ</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/214/">マヒナ</a></td>
                  <td><a href="<?php echo home_url() ?>/service/230/">ウィル</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/216/">カリス</a></td>
                  <td><a href="<?php echo home_url() ?>/service/232/">フィール</a></td>
                </tr>
                <tr>
                  <td><a href="<?php echo home_url() ?>/service/218/">みん電占い</a></td>
                  <td><a href=""></a></td>
                </tr>
              </table>

              
              <h3 class="mainh3">本サイトについて</h3>
              <table>
                <tr>
                  <td><a href="<?php echo home_url() ?>/method/">調査方法</a></td>
                  <td><a href="<?php echo home_url() ?>/opening/">運営者情報</a></td>
                  <td><a href="<?php echo home_url() ?>/privacy/">プライバシーポリシー</a></td>
                </tr>
              </table>


            </div>
          </div>
          <aside class="main__sb">
            <?php get_template_part('templates/templates','aside'); ?>
          </aside>
        </div>
      </div>
    </main>
    <div id="back-to-top"><a href="#" class="page-top">top</a></div>
    <footer id="footer" class="footer">
      <<?php get_template_part('templates/templates','footer'); ?>
    </footer>
    <!-- end footer -->
    <?php get_footer(); ?>
  </div>



  <style>
    .mainh3{
      border-left: 5px solid #d03894;
      font-size: 26px;
      font-weight: bold;
      padding-left: 10px;
      margin-top: 40px;
      margin-bottom: 20px;
    }

    table tr td{
      padding-right: 40px;
            padding-top: 15px;
    }
    table tr{

    }
  </style>
</body>

</html>