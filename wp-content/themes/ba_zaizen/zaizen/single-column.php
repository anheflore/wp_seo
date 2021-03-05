<?php get_header() ?>

<body>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>電話占いコラム</h2>
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
            <li>電話占いコラム</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__telling__detail">
              <div class="main__telling__detail__tt">
                <h2>
                  <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y/m.d') ?></time>
                  <?php $type = wp_get_post_terms($post->ID,'kind',array("fields" => "all")); ?>
                  <a class="cat" href="<?php echo get_term_link($type[0])?>"><?php echo $type[0]->name ?></a>
                  <em><?php the_title() ?></em>
                </h2>
              </div>
              <?php the_content(); ?>
              <?php
              if(have_rows('toc')):
                while(have_rows('toc')): the_row();
               ?>
              <h3 class="tt"><?php the_sub_field('sub_title') ?></h3>
              <?php the_sub_field('sub_description'); ?>
              <?php endwhile;endif; ?>
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