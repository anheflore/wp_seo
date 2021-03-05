<?php get_header() ?>
<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>電話占い：悩み別占い師ランキング</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main main--teller__rank">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="/">TOP</a></li>
            <li>電話占い：悩み別占い師ランキング</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2>電話占い：悩み別占い師ランキング</h2>
              <div class="teller__rank-btns">
                <ul>
                  <li><a href="#a_love"><span>恋愛</span></a></li>
                  <li><a href="#a_reunion"><span>復縁</span></a></li>
                  <li><a href="#a_adultery"><span>不倫</span></a></li>
                  <li><a href="#a_looting_love"><span>略奪愛</span></a></li>
                  <li><a href="#a_relationships"><span>人間関係</span></a></li>
                </ul>
              </div>
              <div id="a_love" class="teller__rank-anq"></div>
            </div>
            <div class="main__block">
              <div id="love" class="main__detail">
               <h3><span>恋愛についての悩み</span></h3>
                <?php
                while ( have_rows('love') ) : the_row();
                  $post_object = get_sub_field('teller');
                if( $post_object ):
                  $post = $post_object;
                  setup_postdata( $post );
                  $serName = '';
                  if(get_field('belong_to',$post->ID)) {
                    $ser = get_field('belong_to',$post->ID);
                    $serName = get_the_title(get_field('belong_to',$post->ID));
                  }          
                  ?>
                <div class="main__detail__child">
                  <h3><?php echo $serName; ?>：<?php the_field('teller_name',$post->ID); ?></h3>
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
                    <div class="btn green"><a class="btn__appraisal" href="<?php the_field('linkurl',$post->ID); ?>"><?= the_field('teller_name',$post->ID); ?>に鑑定してもらう</a></div>
                    <div class="btn blue"><a class="btn__appraisal" href="<?php the_permalink(); ?>"><?= the_field('teller_name',$post->ID); ?>の鑑定内容を見る</a></div>
                  </div>
                </div>
                <?php wp_reset_postdata();?>
              <?php endif;endwhile; ?>
            </div>
            <div id="a_reunion" class="teller__rank-anq"></div>
          </div>
          <div class="main__block">
            <div id="reunion" class="main__detail">
            <h3><span>復縁についての悩み</span></h3>
              <?php
              while ( have_rows('reunion') ) : the_row();
                $post_object = get_sub_field('teller');
              if( $post_object ):
                $post = $post_object;
                setup_postdata( $post );
                $serName = '';
                if(get_field('belong_to',$post->ID)) {
                  $ser = get_field('belong_to',$post->ID);
                  $serName = get_the_title(get_field('belong_to',$post->ID));
                }          
                ?>
                <div class="main__detail__child">
                  <h3><?php echo $serName; ?>：<?php the_field('teller_name',$post->ID); ?></h3>
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
                    <div class="btn green"><a class="btn__appraisal" href="<?php the_field('linkurl',$post->ID); ?>"><?= the_field('teller_name',$post->ID); ?>に鑑定してもらう</a></div>
                    <div class="btn blue"><a class="btn__appraisal" href="<?php the_permalink(); ?>"><?= the_field('teller_name',$post->ID); ?>の鑑定内容を見る</a></div>
                  </div>
                </div>
                <?php wp_reset_postdata();?>
              <?php endif;endwhile; ?>
            </div>
            <div id="a_adultery" class="teller__rank-anq"></div>
          </div>
          <div class="main__block">
            <div id="adultery" class="main__detail">
            <h3><span>不倫についての悩み</span></h3>
              <?php
              while ( have_rows('adultery') ) : the_row();
                $post_object = get_sub_field('teller');
              if( $post_object ):
                $post = $post_object;
                setup_postdata( $post );
                $serName = '';
                if(get_field('belong_to',$post->ID)) {
                  $ser = get_field('belong_to',$post->ID);
                  $serName = get_the_title(get_field('belong_to',$post->ID));
                }          
                ?>
                <div class="main__detail__child">
                  <h3><?php echo $serName; ?>：<?php the_field('teller_name',$post->ID); ?></h3>
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
                    <div class="btn green"><a class="btn__appraisal" href="<?php the_field('linkurl',$post->ID); ?>"><?= the_field('teller_name',$post->ID); ?>に鑑定してもらう</a></div>
                    <div class="btn blue"><a class="btn__appraisal" href="<?php the_permalink(); ?>"><?= the_field('teller_name',$post->ID); ?>の鑑定内容を見る</a></div>
                  </div>
                </div>
                <?php wp_reset_postdata();?>
              <?php endif;endwhile; ?>
              </div>
              <div id="a_looting_love" class="teller__rank-anq"></div>
            </div>
            <div class="main__block">
            <div id="looting_love" class="main__detail">
            <h3><span>略奪愛についての悩み</span></h3>
              <?php
              while ( have_rows('looting_love') ) : the_row();
                $post_object = get_sub_field('teller');
              if( $post_object ):
                $post = $post_object;
                setup_postdata( $post );
                $serName = '';
                if(get_field('belong_to',$post->ID)) {
                  $ser = get_field('belong_to',$post->ID);
                  $serName = get_the_title(get_field('belong_to',$post->ID));
                }          
                ?>
                <div class="main__detail__child">
                  <h3><?php echo $serName; ?>：<?php the_field('teller_name',$post->ID); ?></h3>
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
                    <div class="btn green"><a class="btn__appraisal" href="<?php the_field('linkurl',$post->ID); ?>"><?= the_field('teller_name',$post->ID); ?>に鑑定してもらう</a></div>
                    <div class="btn blue"><a class="btn__appraisal" href="<?php the_permalink(); ?>"><?= the_field('teller_name',$post->ID); ?>の鑑定内容を見る</a></div>
                  </div>
                </div>
                <?php wp_reset_postdata();?>
              <?php endif;endwhile; ?>
              </div>
              <div id="a_relationships" class="teller__rank-anq"></div>
            </div>
            <div class="main__block">
              <div id="relationships" class="main__detail">
              <h3><span>人間関係についての悩み</span></h3>
              <?php
              while ( have_rows('relationships') ) : the_row();
                $post_object = get_sub_field('teller');
              if( $post_object ):
                $post = $post_object;
                setup_postdata( $post );
                $serName = '';
                if(get_field('belong_to',$post->ID)) {
                  $ser = get_field('belong_to',$post->ID);
                  $serName = get_the_title(get_field('belong_to',$post->ID));
                }          
                ?>
                <div class="main__detail__child">
                  <h3><?php echo $serName; ?>：<?php the_field('teller_name',$post->ID); ?></h3>
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
                    <div class="btn green"><a class="btn__appraisal" href="<?php the_field('linkurl',$post->ID); ?>"><?= the_field('teller_name',$post->ID); ?>に鑑定してもらう</a></div>
                    <div class="btn blue"><a class="btn__appraisal" href="<?php the_permalink(); ?>"><?= the_field('teller_name',$post->ID); ?>の鑑定内容を見る</a></div>
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
      <?php get_template_part('templates/templates','footer') ?>
    </footer>
    <!-- end footer -->
    <?php get_footer() ?>
  </div>
</body>

</html>
