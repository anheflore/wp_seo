<?php
  global $wp;
  $relativePath = wp_make_link_relative((home_url( $wp->request )));
  $arrayStepPath = explode('/', $relativePath);
  $index = array_search('column', $arrayStepPath);
  $columnPagePrefix = "";
  if ($index < 0) {}
  else {
    $arrayColumnPath = array_slice($arrayStepPath, $index + 1, );
    if (count($arrayColumnPath) == 0) {
    } else {
      $columnPagePrefix = '-' . implode('', $arrayColumnPath);
    }
  }
?>


<?php get_header() ?>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h1>電話占いコラム<?php echo $columnPagePrefix ?>
              </h1>
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
            <div class="main__block">
              <h2>記事カテゴリー</h2>
              <ul class="main__telling__layout">
                <?php
                  $kinds = apply_filters('list_taxo','kind');
                  foreach($kinds as $kind) :
                ?>
                <li>
                  <a href="<?php echo get_term_link($kind);?>">
                    <?php
                    $thumb = get_template_directory_uri().'/no-image.jpg';
                    $meta = get_all_wp_terms_meta($kind->term_id);
                    if($meta['figure']) {
                      $fig = $meta['figure'];
                      $thumb =  $fig[0];
                    }
                    ?>
                    <figure><img src="<?php echo $thumb ?>" alt=""></figure>
                    <h3><?php echo $kind->name; ?>  ＞</h3>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="main__block">
              <h2>最新記事一覧</h2>
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
                  <a href="<?php echo get_permalink(); ?>"><figure><img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>"></figure></a>
                  <div class="main__telling__ct">
                    <a href="<?php echo get_permalink(); ?>"><h3><?php the_title() ?></h3></a>
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