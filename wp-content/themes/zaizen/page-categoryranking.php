<?php
/*
Template Name: カテゴリー別ランキング
*/
?>


<?php get_header(); ?>
<body>


  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header'); ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>【カテゴリー別】電話占いサイトランキング</h2>
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
            <li>【カテゴリー別】電話占いサイトランキング</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
          <div class="main__block">
            <h2>カテゴリ別　<br class="show_sp">電話占いサイトランキング</h2>
            <p>電話占いのサイトが多くてどこを利用すればいいのかわからない、、、本当に当たるの、、？自分にあうのはどこなんだろう、、、？と悩んでいる方のために、ここでは「鑑定方法」「通話料金」「占い師の在籍数」「相談内容の豊富さ」「サービスの特徴」の調査結果から総合的に見たランキング、お悩み別ランキング、占い師ランキングで作成しています！</p>
          </div>
          <div class="main__block">
            <h2>目次</h2>
            <ul>
              <li>1.<a href="#rank_total">総合ランキング</a></li>
              <li>2.<a href="#rank_nayami">お悩み別ランキング</a></li>
              <li>3.<a href="#rank_teller">占い師ランキング</a></li>
            </ul>
          </div>
           <div class="main__block">
            <div class="main__charts">
              <div id="rank_total" class="main__charts__cat">
                <h3 class="main__charts__cat__head"><img src="<?php echo get_template_directory_uri();?>/assets/img/rank_head_total.jpg" alt="総合ランキング"></h3>
				  <p>
					  総合ランキングでは利用者の口コミや評価、信頼性や安全性は問題ないか、当たる確率、お得な特典があるかなどを調べた結果総合的な観点からオススメ順になっています！<br>利用したいけどどこがいいか決め兼ねている方は「オススメの電話占いサイト総合ランキング」を参考にしてみてはいかがでしょうか？
				  </p>
                <ul class="main__charts__cat__row">
                <?php
                $counter = 0;
                  while ( have_rows('list_service', 176) ) : the_row();
                  $counter++;
                  $post_object = get_sub_field('service');
                  if($counter < 5):
                  if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
                ?>
                  <li class="main__charts__cat__col">
                    <div class="main__charts__cat__inner">
                    <?php if(get_field('service_banner')): ?>
                      <a href="<?php the_permalink();?>"><figure><img src="<?php the_field('service_banner') ?>" alt="<?php the_title() ?>"></figure></a>
                    <?php endif;?>
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <ul>
                      <li><span>初回：</span><?php the_field('initial_benefits') ?></li>
                      <li><span>料金：</span><?php the_field('price') ?></li>
                      <li><span>口コミ：</span><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('review_rating')*20).'%'; ?>"></span></div></li>
                    </ul>
                    </div>
                  </li>
                <?php wp_reset_postdata(); endif; endif; endwhile; ?>
                </ul>
                <div class="btn green"><a href="<?php echo get_page_link( 176 ); ?>">総合ランキング</a></div>
              </div>

              <div id="rank_nayami" class="main__charts__cat">
                <h3 class="main__charts__cat__head"><img src="<?php echo get_template_directory_uri();?>/assets/img/rank_head_nayami.jpg" alt="悩み別ランキング"></h3>
				  		<p>
							自分自身の抱えているお悩みに適した占い師をお探しの方は「悩み別ランキング」から選ぶことをオススメします！<br>こちらでは、数あるお悩みの中で一番多種多様に対応してくれる電話占いサイトをランキングで表示しています。この中からきっとあなたに合った占いサイトが見つかる事でしょう。
				  </p>
                <ul class="main__charts__cat__row">
                <?php
                $counter = 0;
                  while ( have_rows('list_service', 188) ) : the_row();
                  $counter++;
                  $post_object = get_sub_field('service');
                  if($counter < 5):
                  if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
                ?>
                  <li class="main__charts__cat__col">
                    <div class="main__charts__cat__inner">
                    <?php if(get_field('service_banner')): ?>
                      <a href="<?php the_permalink();?>"><figure><img src="<?php the_field('service_banner') ?>" alt="<?php the_title() ?>"></figure></a>
                    <?php endif;?>
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <ul>
                      <li><span>初回：</span><?php the_field('initial_benefits') ?></li>
                      <li><span>料金：</span><?php the_field('price') ?></li>
                      <li><span>口コミ：</span><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('review_rating')*20).'%'; ?>"></span></div></li>
                    </ul>
                    </div>
                  </li>
                <?php wp_reset_postdata(); endif; endif; endwhile; ?>
                </ul>
                <div class="btn blue"><a href="<?php echo get_page_link( 188 ); ?>">悩み別ランキング</a></div>
              </div>

              <div id="rank_teller" class="main__charts__cat">
                <h3 class="main__charts__cat__head"><img src="<?php echo get_template_directory_uri();?>/assets/img/rank_head_teller.jpg" alt="占い師ランキング"></h3>
				  	<p>
						当たると評判のおすすめの電話占いサイトをまとめているため、この占い師ランキングでは占い師の在籍数でランキングを作りました！<br>数多くの占い師の方が在籍していると言うことはその分いろいろな方に占ってもらうことができ、自身にあった占い師の方に出会える可能性があります。今まで自分にあった占い師に出会えていないとお悩みの方はぜひ占い師ランキングを参考にしてみてはいかがでしょうか？
				  </p>
                <ul class="main__charts__cat__row">
                <?php
                $counter = 0;
                  while ( have_rows('list_service', 206) ) : the_row();
                  $counter++;
                  $post_object = get_sub_field('service');
                  if($counter < 5):
                  if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
                ?>
                  <li class="main__charts__cat__col">
                   <div class="main__charts__cat__inner">
                    <?php if(get_field('service_banner')): ?>
                      <a href="<?php the_permalink();?>"><figure><img src="<?php the_field('service_banner') ?>" alt="<?php the_title() ?>"></figure></a>
                    <?php endif;?>
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <ul>
                      <li><span>初回：</span><?php the_field('initial_benefits') ?></li>
                      <li><span>料金：</span><?php the_field('price') ?></li>
                      <li><span>口コミ：</span><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('review_rating')*20).'%'; ?>"></span></div></li>
                    </ul>
                   </div>
                  </li>
                <?php wp_reset_postdata(); endif; endif; endwhile; ?>
                </ul>
                <div class="btn"><a href="<?php echo home_url() ?>/tellerranking">占い師ランキング</a></div>
              </div>
            </div><!-- main__charts -->
          </div>

          <div class="main__block main__block__category-ranking">
            <div class="main__charts">
            <?php
            $rankingID = get_id_by_slug('ranking');
            $i = 0;
            while ( have_rows('list_service') ) : the_row();
              $post_object = get_sub_field('service');
              if( $post_object ):
                $post = $post_object;
                setup_postdata( $post );
            ?>
                <div class="main__charts__child">
                  <h3><?php the_title() ?><span><?php echo (get_field('great_value')+get_field('review_rating')+get_field('hit')+get_field('safety'))/4 ?>点<small>/5点</small></span></h3>
                  <p><?php echo get_field('service_intro2') ?></p>
                  <?php if(get_field('service_banner')): ?>
                    <figure><img src="<?php the_field('service_banner') ?>" alt=""></figure>
                  <?php endif;?>
                  <?php if(get_field('service_text')): ?>
                    <div class="service--text">
                    <p><?php echo get_field('service_text') ?></p>
                    </div>
                  <?php endif;?>
                  <?php while ( have_rows('service_reviews') ) : the_row(); ?>
                    <div class="service--review">
                      <div class="service--review--text">
                        <?php the_sub_field('review');?>
                      </div>
                    </div>
                  <?php endwhile;?>
                  
                  <div class="main__gr">
                    <div class="btn green"><a href="<?php the_permalink(); ?>"><?php the_title() ?>の詳細を見る</a></div>
                    <div class="btn blue"><a href="<?php the_field('link_release') ?>" target="_blank" rel="noopener noreferrer"><?php the_title() ?>の公式サイトへ</a></div>
                  </div>
                </div>
            <?php
                wp_reset_postdata();
              endif;
              $i++;
            endwhile;
            ?>
            </div><!-- main__charts -->
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
</body>

</html>
