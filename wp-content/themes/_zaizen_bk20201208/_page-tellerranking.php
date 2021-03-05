<?php
/*
Template Name: 占い師ランキング
*/
?>


<?php get_header(); ?>
<body>


  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header'); ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>占い師ランキング</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu'); ?>
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
<!--               <h2>電話占い<?php the_title() ?>のおすすめ占い師ランキング</h2>
 -->              <div class="main__detail">
                <?php
                  while ( have_rows('list_teller_ranking') ) : the_row();
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

                  <div class="main__gr">
                    <div class="btn green"><a href="">公式サイトでを見る</a></div>
                    <div class="btn blue"><a href="">鑑定内容の確認</a></div>
                  </div>
                </div>
                <?php wp_reset_postdata();?>
                <?php endif;endwhile; ?>
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
    <<?php get_template_part('templates/templates','footer'); ?>
  </footer>
  <!-- end footer -->
  <?php get_footer(); ?>
</div>
</body>

</html>