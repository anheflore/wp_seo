<div class="sb__block">
  <h3 class="sb__tt"><span>おすすめ電話占いサイト</span></h3>
  <ul class="sb__list">
    <?php
    $rankingID = get_id_by_slug('ranking');
    $i = 0;
    while ( have_rows('list_service',$rankingID) ) : the_row();
    $post_object = get_sub_field('service');
    if( $post_object ):
      $post = $post_object;
      setup_postdata( $post );
     ?>
    <li class="sb__child">
      <h4><?php the_title() ?></h4>
      <?php if(get_field('service_banner')): ?>
      <figure><img src="<?php the_field('service_banner') ?>" alt=""></figure>
      <?php endif;?>
      <div class="btn green"><a href="<?php the_permalink() ?>">詳細を見る</a></div>
      <div class="btn blue"><a href="<?php the_field('link_release') ?>">公式サイトへ</a></div>
    </li>
    <?php
    wp_reset_postdata();endif;
    $i++;
    if($i >4) {
      break;
    }
  endwhile; ?>
  </ul>
  <div class="btn btn--pink"><a href="<?php echo home_url() ?>/search/">ランキングを<br>もっと見る＞</a></div>
</div>
<div class="sb__block">
  <h3 class="sb__tt"><span>おすすめ電話占いサイト</span></h3>
  <div class="btn green"><a href="<?php echo get_page_link( 176 ); ?>">総合ランキング</a></div>
  <div class="btn blue"><a href="<?php echo get_page_link( 188 ); ?>">悩み別ランキング</a></div>
  <div class="btn"><a href="<?php echo get_page_link( 206 ); ?>">占い師ランキング</a></div>
</div>
<div class="btn btn--blue"><a href="<?php echo get_page_link( 37 ); ?>">電話占いに関連する<br>コラムを読む＞</a></div>