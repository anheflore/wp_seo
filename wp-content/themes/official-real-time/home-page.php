<?php 
/**
 * Template Name: Home Page Template
 *
 */
get_header();
$theme_name = wp_get_theme();
echo("this is test" . $theme_name);

?>

<style>
  @media screen and (min-width:750px) { 
    .sp-only{
      display: none;
    }
    .wi1000{
      width: 1000px;
      margin:0 auto;
    }
  }
  @media screen and (max-width:749px) { 
    .pc-only{
      display: none;
    }
    .wi1000{
      width: 95%;
      margin:0 auto;
    }
  }
</style>


<!-- カスタムフィールドの値から各関数にデータを入れる -->

<?php
$home_001 = get_field('home_001');
$home_002 = get_field('home_002');
$home_003 = get_field('home_003');
$home_004 = get_field('home_004');
$home_005 = get_field('home_005');
$home_006 = get_field('home_006');
?>



<header>
  <div class="left"><img src="<?php echo get_theme_file_uri(''); ?>/images/logo.svg" alt=""></div>
  <div class="right"><a href="<?php echo wp_logout_url(); ?>" title="">ログアウト</a></div>
</header><!-- /header -->


<section class="main-content">
  <div class="wi1000">

    <div class="money-title">
      お財布情報を見る
    </div>

    <div class="chart-content">
      <div class="left">
        <div class="money-box">
          <div class="money-box-head">総資産</div>

          <div class="money-box-txt"><?php echo $home_001; ?> JPY</div>
        </div><!-- money-box -->



        <div class="round1">
          <p>JOC(100%)</p>
          <div class="round2">
            <div class="round2-txt1"><?php echo $home_005; ?></div>
            <div class="round2-txt2">Token</div>
          </div>
        </div>

        <div class="token-txt1">JOC/JPY</div>
        <div class="token-txt2"><?php echo $home_006; ?></div>

      </div><!-- left -->

      <div class="right">

        <div class="money-box">
          <div class="money-box-head right-head">自分のアドレス</div>

          <div class="money-box-txt"><?php echo $home_002; ?></div>
        </div>

        <div class="money-box">
          <div class="money-box-head right-head">秘密鍵(未暗号化)</div>

          <div class="money-box-txt"><?php echo $home_003; ?></div>
        </div>

        <div class="money-box">
          <div class="money-box-head right-head">自分のアドレス</div>

          <div class="money-box-txt"><img src="<?php echo $home_004; ?>" alt=""></div>
        </div>

      </div><!-- right -->
    </div><!-- chart-content -->


<div class="umekomi-content">
  
<iframe src="https://www.coinjinja.com/iframe/widget/list?product_codes=BTC_JPY_BTFL,BTC_JPY_CCJP,BTC_JPY_ZAIF,ETH_JPY_BTFL,ETH_JPY_CCJP,ETH_JPY_ZAIF,XRP_JPY_BTFL,XRP_JPY_CCJP,XRP_JPY_ZAIF,BCH_JPY_BTFL,BCH_JPY_CCJP,BCH_JPY_ZAIF,ETC_JPY_BTFL,ETC_JPY_CCJP,ETC_JPY_ZAIF,XEM_JPY_BTFL,XEM_JPY_CCJP,XEM_JPY_ZAIF&utm_source=wgtuser&utm_medium=widget"  width="100%" frameborder="0"></iframe>


</div><!-- umekomi-content -->


  </div><!-- wi1000 -->
</section>








<?php get_footer();