<?php get_header() ?>

<body>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php $services = apply_filters('get_service',$_GET); ?>
  <?php
    if(!$services->have_posts()): ?>
    <script type="text/javascript">
      window.location.href = "<?php _e(home_url()) ?>/services"
    </script>
    <?php endif; ?>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2><?php the_title() ?></h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li><?php the_title() ?></li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <div class="main__charts">
              <?php while($services->have_posts()): $services->the_post(); ?>
                <div class="main__charts__child main__charts__search">
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
                    <dl>
                      <dt>運営会社</dt>
                      <dd><?php echo get_field('operating_company'); ?></dd>
                    </dl>
                    <dl>
                      <dt>営業時間</dt>
                      <dd><?php echo get_field('business_hours'); ?></dd>
                    </dl>
                    <dl>
                      <dt>運営歴</dt>
                      <dd><?php echo get_field('operating_history'); ?></dd>
                    </dl>
                    <dl>
                      <dt>占い師数</dt>
                      <dd><?php echo get_field('num_teller'); ?></dd>
                    </dl>
                    <dl>
                      <dt>料金</dt>
                      <dd><?php echo get_field('price'); ?></dd>
                    </dl>
                    <dl>
                      <dt>初回特典</dt>
                      <dd><?php echo get_field('initial_benefits'); ?></dd>
                    </dl>
                  </div>
                  <div class="main__tab">
                    <ul class="tabs">
                      <li class="active"><a href="" data-tabs="0">お得</a></li>
                      <li><a href="" data-tabs="1">当たる確率</a></li>
                      <li><a href="" data-tabs="2">口コミ</a></li>
                      <li><a href="" data-tabs="3">安全性・信頼性</a></li>
                    </ul>
                    <div class="main__tab__ct">
                      <div class="ctn_tabs" data-tabs="0">
                        <?php the_field('greate_value_text') ?>
                      </div>
                      <div class="ctn_tabs" data-tabs="1">
                        <?php the_field('review_rating_text') ?>
                      </div>
                      <div class="ctn_tabs" data-tabs="2">
                        <?php the_field('hit_text') ?>
                      </div>
                      <div class="ctn_tabs" data-tabs="3">
                        <?php the_field('satefy_text') ?>
                      </div>
                    </div>
                  </div>
                  <div class="main__gr">
                    <div class="btn green"><a href="<?php the_permalink(); ?>"><?php the_title() ?>の詳細を見る</a></div>
                    <div class="btn blue"><a href="<?php the_field('link_release') ?>" target="_blank" rel="noopener noreferrer"><?php the_title() ?>の公式サイトへ</a></div>
                  </div>
                </div>
              <?php endwhile;wp_reset_query();?>
              </div>
            </div>
          </div>
          <aside class="main__sb">
            <?php get_template_part('templates/templates','aside') ?>
          </aside>
        </div>
      </div>
    </main>
    <div id="back-to-top"><a href="#" class="page-top">top</a></div>
    <footer id="footer" class="footer">
      <?php get_template_part('templates/templates','footer') ?>
    </footer>
    <!-- end footer -->
    <?php get_footer() ?>
  </div>
  <?php endwhile; endif; ?>
</body>

</html>
