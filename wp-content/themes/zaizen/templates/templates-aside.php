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
            <div class="btn green"><a class="btn__aside" href="<?php the_permalink() ?>"><?php the_title() ?>の詳細を見る</a></div>
            <div class="btn blue"><a class="btn__aside" href="<?php the_field('link_release') ?>"><?php the_title() ?>の公式サイトへ</a></div>
        </li>
        <?php
        wp_reset_postdata();endif;
        $i++;
        if($i >4) {
            break;
        }
    endwhile; ?>
    </ul>
    <div class="btn btn--pink"><a class="btn__aside--large" href="<?php echo home_url() ?>/search/">ランキングを<br>もっと見る＞</a></div>
</div>
<div class="sb__block">
    <h3 class="sb__tt"><span>おすすめ電話占いサイト</span></h3>
    <div class="btn green"><a href="<?php echo get_page_link( 176 ); ?>">総合ランキング</a></div>
    <div class="btn blue"><a href="<?php echo get_page_link( 188 ); ?>">悩み別ランキング</a></div>
    <div class="btn"><a href="<?php echo get_page_link( 206 ); ?>">占い師ランキング</a></div>
</div>

<div class="sb__column sb__block">
    <h3 class="sb__tt"><span>最新コラム記事</span></h3>
    <ul>
    <?php
         $args = array(
            'post_type' => 'column',
             'posts_per_page' => 5,
             'no_found_rows' => true
            );
         $the_query = new WP_Query($args);
         $the_query->post_count = 5; 
         if ( $the_query->post_count > count( $the_query->posts ) ) :
            $the_query->post_count = count( $the_query->posts );
            endif;
         if ($the_query->have_posts()) :
             while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li>
            <a href="<?php echo get_permalink(); ?>">
                <figure>
                    <?php
                        the_post_thumbnail(
                            'post-thumbnail',
                            array(
                                'alt' => the_title_attribute(
                                    array(
                                        'echo' => false,
                                    )
                                ),
                            )
                        );
                    ?>
                </figure>
                <div class="title"><?php the_title(); ?></div>
            </a>
        </li>
        <?php endwhile; endif; wp_reset_query(); ?>
    </ul>
    <div class="btn btn--blue"><a class="btn__aside--large" href="<?php echo get_page_link( 37 ); ?>">電話占いに関連する<br>コラムを読む＞</a></div>
</div>

<div class="sb__column sb__block">
    <h3 class="sb__tt"><span>特集</span></h3>
    <ul>
        <?php
         $args = array(
            'post_type' => 'column',
           'posts_per_page' => 5,
           'meta_query'=> array(
             array(
              'key'   => 'feature',
                    'value' => '1',
             )
           )
            );
         $the_query = new WP_Query($args);
         if ($the_query->have_posts()) :
             while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li>
            <a href="<?php echo get_permalink(); ?>">
                <figure>
                    <?php
                        the_post_thumbnail(
                            'post-thumbnail',
                            array(
                                'alt' => the_title_attribute(
                                    array(
                                        'echo' => false,
                                    )
                                ),
                            )
                        );
                    ?>
                </figure>
                <div class="title"><?php the_title(); ?></div>
            </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
</div>

<div class="sb__block sb__teller">
    <h3 class="sb__tt"><span>サイト別当たる<br>電話占い師ランキング</span></h3>
    <ul>
        <?php
         $args = array(
            'post_type' => 'column',
           'posts_per_page' => 15,
           'meta_query'=> array(
             array(
              'key'   => 'tellersite',
                    'value' => '1',
             )
           )
            );
         $the_query = new WP_Query($args);
         if ($the_query->have_posts()) :
             while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li>
            <h4 class="sb__teller__tt"><?php the_field('tellersite_name'); ?></h4>
            <div class="sb__row">
                <?php
                    $image = get_field('tellersite_thumb');
                    if( !empty($image) ):
                        $url = $image['url'];
                    ?>
                    <figure>
                    <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
                    </figure>
                    <?php endif;?>
                
                <div class="title"><?php the_title(); ?></div>
            </div>
            <div class="btn"><a href="<?php echo get_permalink(); ?>"><?php the_field('tellersite_name'); ?>の記事を読む</a></div>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
</div>

<div class="sb__column sb__block">
    <h3 class="sb__tt"><span>【悩み別】当たる！<br>おすすめ電話占いサイト</span></h3>
        <?php
        $args = array(
            'orderby' => 'id',
            'order' => 'ASC',
            'taxonomy' => 'worry'
            );
        $worries = get_categories( $args );
        foreach($worries as $worry) :
        ?>
        <div class="sb__worry_cat"><?php echo $worry->name;?></div>
        <ul>
        <?php
         $args = array(
            'post_type' => 'column',
           'posts_per_page' => 5,
           'tax_query'  => array(
                array(
                    array(
                        'taxonomy' => 'worry',
                        'field' => 'term_id',
                        'terms' => $worry->term_id,
                    ),
                ),
             )
            );
         $the_query = new WP_Query($args);
         if ($the_query->have_posts()) :
             while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li>
            <a href="<?php echo get_permalink(); ?>">
                <figure>
                    <?php
                        the_post_thumbnail(
                            'post-thumbnail',
                            array(
                                'alt' => the_title_attribute(
                                    array(
                                        'echo' => false,
                                    )
                                ),
                            )
                        );
                    ?>
                </figure>
                <div class="title"><?php the_title(); ?></div>
            </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
                    <?php endforeach;?>
</div>

<!-- 占の種類 -->
<div class="sb__column sb__block">
    <h3 class="sb__tt"><span>占の種類</span></h3>
    <ul class="sb__lists">
        <?php

        $args = array(
            'posts_per_page' => -1,
            'order' => 'DESC',
            'post_type' => 'fortune_telling',
        );
        $post_lists =  get_posts($args);

        foreach ($post_lists as $item) :
        ?>
            <li class="sb__item">
                <a class="sb__item-link" href="/<?php echo $item->post_type . '/' . $item->post_name; ?>">
                    <?php echo $item->post_title; ?>
                </a>
            </li>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </ul>
</div>
<!-- END 占の種類 -->
