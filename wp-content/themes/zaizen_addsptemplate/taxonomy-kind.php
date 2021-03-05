<?php get_header(); ?>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
      <?php $tax = $wp_query->get_queried_object();?>
          <h1><?php echo $tax->name; ?></h1>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main main--telling">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li><a href="<?php echo home_url('columns/') ?>">電話占いコラム一覧</a></li>
            <?php if(is_tax('kind')){?>
              <li><?php single_term_title(); ?>一覧</li>
            <?php }?>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2><?php echo $tax->name ?></h2>
              <ul class="main__telling__news">
                <?php
                 $columns = apply_filters('get_list_columns',$tax->slug);
                 while($columns->have_posts()):$columns->the_post();
                ?>
                <li>
                  <?php
                    $thumb;
                    if(has_post_thumbnail()):
                      $thumb = get_the_post_thumbnail_url();
                    else:
                      $thumb = catch_thumbnail_image();
                    endif;
                  ?>
                  <figure><img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>"></figure>
                  <div class="main__telling__ct">
                    <h3><?php the_title() ?></h3>
                    <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                    <p><?php echo mb_substr(get_the_excerpt(),0,50) ?>... <a href="<?php the_permalink() ?>">＞続きを読む</a></p>
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
              <div class="main__telling__pagi">
                <?php wp_pagenavi(array('query'=>$columns)); ?>
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
</body>

</html>
