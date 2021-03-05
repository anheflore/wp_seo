<?php get_header() ?>

<body>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="container" class="container">
      <header id="header" class="header">
        <?php get_template_part('templates/templates','header') ?>
        <div class="ttl" id="ttl">
          <div class="row">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
        <?php get_template_part('templates/templates','menu') ?>
      </header>
      <!-- end header -->
      <main>
        <div class="main main--cielo">
          <div class="breadcrum">
            <ul class="breadcrum__row row">
              <li><a href="<?php echo home_url() ?>">TOP</a></li>
              <li><?php the_title(); ?></li>
            </ul>
          </div>
          <div class="main__row row">
            <div class="main__ct">
              <div class="main__block">
                <div class="main__charts">
                  <div class="main__charts__child">
                    <h3><?php the_title() ?><span><?php echo (get_field('great_value')+get_field('review_rating')+get_field('hit')+get_field('safety'))/4 ?>点<small>/5点</small></span></h3>
                    <p><?php echo get_field('service_intro') ?></p>
                    <?php if(get_field('service_banner')): ?>
                      <figure><img src="<?php the_field('service_banner') ?>" alt=""></figure>
                    <?php endif;?>
                    <div class="main__rate">
                      <dl>
                        <dt>お得</dt>
                        <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('great_value')*20).'%'; ?>"></span></div></dd>
                      </dl>
                      <dl>
                        <dt>口コミ評価</dt>
                        <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('review_rating')*20).'%'; ?>"></span></div></dd>
                      </dl>
                      <dl>
                        <dt>当たる確率</dt>
                        <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('hit')*20).'%'; ?>"></span></div></dd>
                      </dl>
                      <dl>
                        <dt>安全性・信頼性</dt>
                        <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('safety')*20).'%'; ?>"></span></div></dd>
                      </dl>
                    </div>
                    <div class="main__block__list">
                      <h3 class="tt">目次</h3>
                      <ul>
                        <li>1.<a href="#sec1">電話占い<?php the_title() ?>の会社情報</a></li>
                        <li>2.<a href="#sec2">電話占い<?php the_title() ?>の3つの特徴</a></li>
                        <li>3.<a href="#sec3">電話占い<?php the_title() ?>の特典</a></li>
                        <li>4.<a href="#sec4">電話占い<?php the_title() ?>のおすすめ占い師ランキング</a></li>
                        <div id="sec1"></div>

                        <li>5.<a href="#sec5">電話占い<?php the_title() ?>の口コミ</a></li>
                        <li>6.<a href="#sec6">電話占い<?php the_title() ?>の退会方法</a></li>
                        <li>7.<a href="#sec7">まとめ</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="main__block">
                <h2>電話占い<?php the_title() ?>の会社情報</h2>
                <p class="short_intro"><?php the_field('short_intro') ?></p>
                <div id="sec2"></div>

                <div class="main__rate">
                  <dl>
                    <dt>運営会社</dt>
                    <dd><?php the_field('operating_company') ?></dd>
                  </dl>
                  <dl>
                    <dt>営業時間</dt>
                    <dd><?php the_field('business_hours') ?></dd>
                  </dl>
                  <dl>
                    <dt>運営歴</dt>
                    <dd><?php the_field('operating_history') ?></dd>
                  </dl>
                  <dl>
                    <dt>占い師数</dt>
                    <dd><?php the_field('num_teller') ?></dd>
                  </dl>
                  <dl>
                    <dt>料金</dt>
                    <dd><?php the_field('price') ?></dd>
                  </dl>
                  <dl>
                    <dt>初回特典</dt>
                    <dd><?php the_field('initial_benefits') ?></dd>
                  </dl>
                </div>
              </div>
              <div class="main__block">
                <h2>電話占い<?php the_title() ?>の3つの特徴</h2>
                <?php if(have_rows('guide_01')):
                  while(have_rows('guide_01')): the_row();
                    ?>
                    <div class="main__block_detail">
                      <h3 class="tt"><?php the_sub_field('sub_title') ?></h3>
                      <div class="main__block_detail_txt"><?php echo nl2br(get_sub_field('desc')) ?></div>
                    </div>
                  <?php endwhile;endif; ?>

                  <div class="btn btn--big green" style="margin-bottom:30px"><a href="<?php the_field('link_release') ?>">公式サイトで詳細を見る</a></div>
                                    <div id="sec3"></div>

                </div>
                <div id="sec4"></div>
                <div class="main__block">
                  <h2>電話占い<?php the_title() ?>の特典</h2>
                  <p><?php the_field('guide_02') ?></p>
                  <div class="btn btn--big green"><a href="<?php the_field('link_release') ?>">公式サイトで詳細を見る</a></div>
                </div>


                <div class="main__block">
                  <h2>電話占い<?php the_title() ?>のおすすめ占い師ランキング</h2>
                  <div class="main__detail">
                    <?php
                    while ( have_rows('list_teller') ) : the_row();
                      $post_object = get_sub_field('teller');
                      if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <div class="main__detail__child">
                          <h3><?php the_field('teller_name',$post->ID); ?></h3>
                          <div class="main__detail__box">
                            <?php
                            $thumb;
                            if(has_post_thumbnail()):
                              $thumb = get_the_post_thumbnail_url();
                            else:
                              $thumb = catch_thumbnail_image();
                            endif;
                            ?>
                            <figure><img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>"></figure>
                            <div class="main__rate main__rate--full">
                              <dl>
                                <dt>性別</dt>
                                <dd><?php the_field('sex',$post->ID); ?></dd>
                              </dl>
                              <dl>
                                <dt>鑑定歴</dt>
                                <dd><?php the_field('history',$post->ID); ?></dd>
                              </dl>
                              <dl>
                                <dt>おすすめな人</dt>
                                <dd>
                                  <?php echo nl2br( get_field('recom',$post->ID)); ?>
                                </dd>
                              </dl>
                              <dl>
                                <dt>得意な占術</dt>
                                <dd>
                                  <?php echo nl2br( get_field('favorite',$post->ID)); ?>
                                </dd>
                              </dl>
                              <dl>
                                <dt>得意な鑑定内容</dt>
                                <dd>
                                  <?php echo nl2br( get_field('expert',$post->ID)); ?>
                                </dd>
                              </dl>
                            </div>
                          </div>

                          <div class="main__block__list">
                            <h3 class="tt tt--no">特徴</h3>
                            <p><?php echo nl2br( get_field('chacacter',$post->ID)); ?></p>
                          </div>
                          <div id="sec6"></div>

                          <div class="main__block__list">
                            <h3 class="tt tt--no">口コミ</h3>
                            <p><?php echo nl2br( get_field('wordofmount',$post->ID)); ?></p>
                          </div>
                          <div class="main__gr">
                            <div class="btn green"><a href="<?php the_field('link_release') ?>">公式サイトで見る</a></div>
                            <div class="btn blue"><a href="<?php the_permalink() ?>">鑑定内容の確認</a></div>
                          </div>
                        </div>
                        <?php wp_reset_postdata();?>
                      <?php endif;endwhile; ?>
                    </div>
                  </div>
                  <div id="sec5"></div>

                  <div class="main__block">
                    <h2>電話占い<?php the_title() ?>の口コミ</h2>
                    <p><?php the_field('guide_03') ?></p>
                  </div>
                  <div id="sec6"></div>

                  <div class="main__block">
                    <h2>電話占い<?php the_title() ?>の退会方法</h2>
                    <p><?php the_field('guide_04') ?></p>
                  </div>
                  <div id="sec7"></div>

                  <div class="main__block">
                    <h2>まとめ</h2>
                    <p><?php the_field('guide_05') ?></p>
                  </div>
                </div>
                <aside class="main__sb">
                  <?php get_template_part('templates/templates','aside') ?>
                </aside>
              </div>
            </div>
          </main>
          <footer id="footer" class="footer">
            <?php get_template_part('templates/templates','footer') ?>
          </footer>
          <!-- end footer -->
          <?php get_footer(); ?>
        </div>
      <?php endwhile; endif; ?>
    </body>

    </html>