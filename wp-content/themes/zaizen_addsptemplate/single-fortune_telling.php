<?php get_header() ?>
  <body>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div id="container" class="container">
  
        <header id="header" class="header">
          <?php get_template_part('templates/templates','header') ?>
          <div class="ttl" id="ttl">
            <div class="row">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
          <?php get_template_part('templates/templates','menu') ?>
        </header>
  
        <main>
          <div class="main main--telling">
  
            <?php $type = wp_get_post_terms($post->ID,'kind',array("fields" => "all")); ?>
  
            <!-- パンくず -->
            <div class="breadcrum">
              <ul class="breadcrum__row row">
                <li><a href="<?php echo home_url() ?>/">TOP</a></li>
                <li><?php echo strip_tags(get_the_title());?></li>
              </ul>
            </div>
  
            <!-- 記事内容 -->
            <div class="main__row row">
              <div class="main__ct">

                <div class="main__telling__detail" id="article">

                  <div class="main__telling__detail__tt">
                    <h2>
                      <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y/m.d') ?></time>
                      <em><?php the_title() ?></em>
                    </h2>
                  </div>

                  <?php the_content(); ?>

                  <?php
                  // カスタムフィールド（Column）
                  if(have_rows('toc')):
                    while(have_rows('toc')): the_row(); ?>
                      <h3 class="tt"><?php the_sub_field('sub_title') ?></h3>
                      <?php the_sub_field('sub_description'); ?>
                  <?php endwhile;endif; ?>

                </div><!-- END #article -->
              </div><!-- END .main__ct-->
  
              <!-- サイドバー -->
              <aside class="main__sb">
                <?php get_template_part('templates/templates','aside') ?>
              </aside>

            </div><!-- END .main__row-->
          </div><!-- END .main -->
        </main>
  
        <div id="back-to-top"><a href="#" class="page-top">top</a></div>
  
        <!-- フッター -->
        <footer id="footer" class="footer">
          <?php get_template_part('templates/templates','footer') ?>
        </footer>
  
        <?php get_footer(); ?>
  
      </div><!-- END #container -->
    <?php endwhile; endif; ?>
  </body>
</html>
