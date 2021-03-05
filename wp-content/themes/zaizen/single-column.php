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
    <!-- end header -->
    <main>
      <div class="main main--telling">
      <?php $type = wp_get_post_terms($post->ID,'kind',array("fields" => "all")); ?>
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li><a href="<?php echo home_url('column/') ?>">電話占いコラム一覧</a></li>
            <?php if(!empty( $type ) ){?>
            <li><a href="<?php echo get_term_link($type[0])?>"><?php echo $type[0]->name ?></a></li>
            <?php } ?>
            <li><?php echo strip_tags(get_the_title());?></li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__telling__detail" id="article">
              <div class="main__telling__detail__tt">
                <h2>
                  <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y/m.d') ?></time>

                  <a class="cat" href="<?php echo get_term_link($type[0])?>"><?php echo $type[0]->name ?></a>
                  <em><?php the_title() ?></em>
                </h2>
              </div>
              <?php the_content(); ?>
              <?php if(have_rows('toc')):
                while(have_rows('toc')): the_row();
               ?>
              <h3 class="tt"><?php the_sub_field('sub_title') ?></h3>
              <?php the_sub_field('sub_description'); ?>
              <?php endwhile;endif; ?>
              <?php if(has_term('story', 'kind', $post)): ?>
                <div class="story__report">
                <h2>体験談レポート</h2>
                <p><?php the_field('report_intro'); ?></p>
                <?php if(have_rows('report_call')):?>
                  <h3 class="story__report__title">～電話中～</h3>
                  <ul>
                    <?php while(have_rows('report_call')): the_row();?>
                    <li class="teller">
                      <div class="icon"><i></i>先生</div><div class="message"><?php the_sub_field('report_call_teller') ?></div>
                    </li>
                    <li class="user">
                      <div class="icon"><i></i>私</div><div class="message"><?php the_sub_field('report_call_user') ?></div>
                    </li>
                    <?php endwhile;?>
                  </ul>
                <?php endif;?>
                <?php if(have_rows('report_result')):?>
                  <h3 class="story__report__title">～鑑定中～</h3>
                  <ul>
                    <?php while(have_rows('report_result')): the_row();?>
                    <li class="teller">
                      <div class="icon"><i></i>先生</div><div class="message"><?php the_sub_field('report_result_teller') ?></div>
                    </li>
                    <li class="user">
                      <div class="icon"><i></i>私</div><div class="message"><?php the_sub_field('report_result_user') ?></div>
                    </li>
                    <?php endwhile;?>
                  </ul>
                  <h3 class="story__report__title">～電話終了～</h3>
                <?php endif;?>
                </div>
                <div class="content_bottom">
                <?php the_field('end_contents'); ?>
                <?php if(have_rows('toc2')):
                while(have_rows('toc2')): the_row();
               ?>
              <h3 class="tt"><?php the_sub_field('sub_title') ?></h3>
              <?php the_sub_field('sub_description'); ?>
              <?php endwhile;endif; ?>
               </div>
              <?php endif;?>
            </div>
            <div class="post__nav">
              <div class="post__nav__prev">
              <?php if (get_previous_post()):?>
                <div class="btn green">
                <?php previous_post_link('%link', '前の記事へ'); ?>
                </div>
              <?php endif; ?>
              </div>
              <div class="post__nav__next">
              <?php if (get_next_post()):?>
                <div class="btn blue">
                <?php next_post_link('%link', '次の記事へ'); ?>
                </div>
              <?php endif; ?>
              </div>
              <div class="post__nav__back">
                <div class="btn"><a href="<?php echo home_url() ?>/columns/">コラム記事一覧へ</a></div>
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
    <?php get_footer(); ?>
  </div>
  <?php endwhile; endif; ?>
</body>

</html>
