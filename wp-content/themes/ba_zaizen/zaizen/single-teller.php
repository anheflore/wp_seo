<?php get_header(); ?>

<body>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>占い師紹介</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main main--intro">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li>占い師紹介</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <?php
                $serName = '';
                if(get_field('belong_to')) {
                  $serName = get_the_title(get_field('belong_to'));
                }
               ?>
              <h3><span>当たる電話占い<?php echo $serName; ?>の<?php the_field('teller_name') ?>先生<br>徹底調査！</span></h3>
              <div class="main__detail">
                <?php
                $thumb;
                if(has_post_thumbnail()):
                  $thumb = get_the_post_thumbnail_url();
                else:
                  $thumb = catch_thumbnail_image();
                endif;
                ?>
                <figure><img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>"></figure>
                <div class="main__detail__box">
                  <h4 class="tt tt--no">目次</h4>
                  <ul>
                    <?php
                      if(have_rows('toc')):
                      while(have_rows('toc')): the_row();
                      $i = 1;
                    ?>
                    <li><?php echo $i ?>.<?php the_sub_field('toc_title') ?></li>
                    <?php $i++; endwhile; endif; ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php
              if(have_rows('toc')):
              while(have_rows('toc')): the_row();
            ?>
            <div class="main__block">
              <h2><?php the_sub_field('toc_title') ?></h2>
              <?php the_sub_field('toc_content') ?>
            </div>
            <?php endwhile; endif; ?>
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
    <?php get_footer() ?>
  </div>
  <?php endwhile; endif; ?>
</body>

</html>