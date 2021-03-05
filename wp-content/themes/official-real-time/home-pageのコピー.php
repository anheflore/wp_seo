<?php 
/**
 * Template Name: Home Page Template
 *
 */
get_header(); ?>

<style>
    @media screen and (min-width:750px) { 
        .sp-only{
            display: none;
        }
    }
    @media screen and (max-width:749px) { 
        .pc-only{
            display: none;
        }
    }
    footer{
        margin-top: 30px;
    }
    .tradingview-widget-container,
    .tradingview-widget-container{

        height: 450px!important; 
    }
    #tradingview_606e1,
    #tradingview_db040{
        height: 450px!important; 
    }

    .text-box-overflow{
      overflow: scroll;
      height: 500px;
    }
</style>


<?php
$home_1 = get_field('home_1');
$home_2 = get_field('home_2');
$home_3 = get_field('home_3');
$home_4 = get_field('home_4');
$home_5 = get_field('home_5');
$home_6 = get_field('home_6');
$home_7 = get_field('home_7');
$home_8 = get_field('home_8');
$home_001 = get_field('home_001');
?>


<section class="numberBar-box">
    <article class="container">
        <div class="numberBar-box__main">
            <div class="items">
                <div class="labels"><i class="fas fa-dollar-sign"></i> First lot</div>
                <div class="info">- <?php echo $home_1; ?> <i class="fas fa-dollar-sign"></i> </div>
            </div>
            <div class="items">
                <div class="labels"><i class="fas fa-user"></i> Account balance</div>
                <div class="info">- <?php echo $home_2; ?> <i class="fas fa-dollar-sign"></i></div>
            </div>
        </div>
    </article>
</section>
<!-- .numberBar // -->

<section class="page-content">
    <article class="container">
        <div class="page-content__main">
            <div class="list-box">
                <figure">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                  <div id="tradingview_db040"></div>
                  <div class="tradingview-widget-copyright">TradingView提供の<a href="https://jp.tradingview.com/symbols/OANDA-USDJPY/" rel="noopener" target="_blank"><span class="blue-text">USDJPYチャート</span></a></div>
                  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                  <script type="text/javascript">
                      new TradingView.widget(
                      {
                          "autosize": true,
                          "symbol": "OANDA:USDJPY",
                          "interval": "D",
                          "timezone": "Etc/UTC",
                          "theme": "light",
                          "style": "1",
                          "locale": "ja",
                          "toolbar_bg": "#f1f3f6",
                          "enable_publishing": false,
                          "allow_symbol_change": true,
                          "container_id": "tradingview_db040"
                      }
                      );
                  </script>
              </div>
              <!-- TradingView Widget END -->
          </div>
          <div class="list-box">
            <figure class="">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                  <div id="tradingview_606e1"></div>
                  <div class="tradingview-widget-copyright">TradingView提供の<a href="https://jp.tradingview.com/symbols/BITBAY-BTCUSD/" rel="noopener" target="_blank"><span class="blue-text">BTCUSDチャート</span></a></div>
                  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                  <script type="text/javascript">
                      new TradingView.widget(
                      {
                          "autosize": true,
                          "symbol": "BITBAY:BTCUSD",
                          "interval": "D",
                          "timezone": "Etc/UTC",
                          "theme": "light",
                          "style": "1",
                          "locale": "ja",
                          "toolbar_bg": "#f1f3f6",
                          "enable_publishing": false,
                          "allow_symbol_change": true,
                          "container_id": "tradingview_606e1"
                      }
                      );
                  </script>
              </div>
              <!-- TradingView Widget END -->
          </figure>
      </div>
  </div>
  <div class="sidebar">
    <div class="sidebar__main">
        <div class="head-box">
            <h3>トレード</h3>
            <span><?php echo $home_8; ?> ＄</span>
        </div>
        <div class="main-box">
            <div class="text-box">
                <div class="items">
                    <div class="labels">残高</div>
                    <div class="info"><?php echo $home_3; ?></div>
                </div>
                <div class="items">
                    <div class="labels">有効証拠金</div>
                    <div class="info"><?php echo $home_4; ?></div>
                </div>
                <div class="items">
                    <div class="labels">余剰証拠金</div>
                    <div class="info"><?php echo $home_5; ?></div>
                </div>
                <div class="items">
                    <div class="labels">証拠金</div>
                    <div class="info"><?php echo $home_7; ?></div>
                </div>
                <div class="items">
                    <div class="labels">証拠金維持率(％)</div>
                    <div class="info"><?php echo $home_6; ?></div>
                </div>
            </div>
        </div>
        <div class="main-box position-side">
            <div class="head">
                <h3>ポジション</h3>
            </div>
            <div class="text-box text-box-overflow">
                <?php if( have_rows('home_9') ): while( have_rows('home_9') ): the_row(); ?>
                    <?php 
                    $home_9_1 = get_sub_field('home_9_1');
                    $home_9_2 = get_sub_field('home_9_2');
                    ?>
                    <div class="items">
                        <div class="labels">
                            <?php echo esc_attr( $home_9_1['home_9_1_1'] ); ?>,<span class="sell"><?php echo esc_attr( $home_9_1['home_9_2_1'] ); ?></span>
                            <span class="number"><?php echo esc_attr( $home_9_1['home_9_2_2'] ); ?></span>
                        </div>
                        <div class="info"><?php echo $home_9_2; ?></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
</article>
</section>
<!-- End /box Page content  -->

<?php get_footer();