<?php get_header(); ?>

<body>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="container" class="container">
            <header id="header" class="header">
                <?php get_template_part('templates/templates','header') ?>
                <div class="ttl" id="ttl">
                    <div class="row">
                        <h1></h1>
                    </div>
                </div>
                <?php get_template_part('templates/templates','menu') ?>
            </header><!-- end header -->

            <?php
            $serName = '';
            if(get_field('belong_to')) {
                $ser = get_field('belong_to');
                $serName = get_the_title(get_field('belong_to'));
            }
            ?>

            <main>

                <?php if(is_single(array('462','465'))):?>

                    <div class="main main--intro teller--ft">
                        <div class="breadcrum">
                            <ul class="breadcrum__row row">
                                <li><a href="<?php echo home_url() ?>/">TOP</a></li>
                                <li><a href="<?php echo home_url('service/141/'); ?>">スピカ</a></li>
                                <li><?php the_title();?></li>
                            </ul>
                        </div>
                        <div class="main__row row">
                            <div class="main__ct">
                                <?php the_content();?>
                                <div class="main__block">
                                    <div class="main__gr">
                                        <div class="btn green">
                                            <a href="<?= get_the_permalink($ser); ?>"><?= $serName; ?>の詳細へ</a>
                                        </div>
                                        <div class="btn blue">
                                            <a href="<?= get_field('link_release', $ser); ?>" target="_blank" rel="noopener noreferrer"><?= $serName ?>の公式サイトへ</a>
                                        </div>
                                    </div><!--End main__gr-->
                                </div>
                            </div>
                            <aside class="main__sb">
                                <?php get_template_part('templates/templates','aside') ?>
                            </aside>
                        </div>
                    </div>

                <?php elseif(is_single(array('467','469'))):?>

                    <div class="main main--intro teller--ft">
                        <div class="breadcrum">
                            <ul class="breadcrum__row row">
                                <li><a href="<?php echo home_url() ?>/">TOP</a></li>
                                <li><a href="<?php echo home_url('service/82/'); ?>">シエロ</a></li>
                                <li><?php the_title();?></li>
                            </ul>
                        </div>
                        <div class="main__row row">
                            <div class="main__ct">
                                <?php the_content();?>
                                <div class="main__block">
                                    <div class="main__gr">
                                        <div class="btn green">
                                            <a href="<?= get_the_permalink($ser); ?>"><?= $serName; ?>の詳細へ</a>
                                        </div>
                                        <div class="btn blue">
                                            <a href="<?= get_field('link_release', $ser); ?>" target="_blank" rel="noopener noreferrer"><?= $serName ?>の公式サイトへ</a>
                                        </div>
                                    </div><!--End main__gr-->
                                </div>
                            </div>
                            <aside class="main__sb">
                                <?php get_template_part('templates/templates','aside') ?>
                            </aside>
                        </div>
                    </div>

                <?php elseif(is_single(array('471'))):?>

                    <div class="main main--intro teller--ft">
                        <div class="breadcrum">
                            <ul class="breadcrum__row row">
                                <li><a href="<?php echo home_url() ?>/">TOP</a></li>
                                <li><a href="<?php echo home_url('service/143/'); ?>">エキサイト</a></li>
                                <li><?php the_title();?></li>
                            </ul>
                        </div>
                        <div class="main__row row">
                            <div class="main__ct">
                                <?php the_content();?>
                                <div class="main__block">
                                    <div class="main__gr">
                                        <div class="btn green">
                                            <a href="<?= get_the_permalink($ser); ?>"><?= $serName; ?>の詳細へ</a>
                                        </div>
                                        <div class="btn blue">
                                            <a href="<?= get_field('link_release', $ser); ?>" target="_blank" rel="noopener noreferrer"><?= $serName ?>の公式サイトへ</a>
                                        </div>
                                    </div><!--End main__gr-->
                                </div>
                            </div>
                            <aside class="main__sb">
                                <?php get_template_part('templates/templates','aside') ?>
                            </aside>
                        </div>
                    </div>

                <?php else:?>

                    <div class="main main--intro">
                        <div class="breadcrum">
                            <ul class="breadcrum__row row">
                                <li><a href="<?php echo home_url() ?>/">TOP</a></li>
                                <?php if(get_field('belong_to')) {?>
                                    <li><a href="<?php echo get_the_permalink($ser); ?>"><?php echo $serName;?></a></li>
                                <?php } ?>
                                    <li><?php the_title();?></li>
                            </ul>
                        </div>
                        <div class="main__row row">
                            <div class="main__ct">
                                <div class="main__block">
                                    <h3><span>当たる電話占い<?php echo $serName; ?>の<?php the_field('teller_name') ?><br>徹底調査！</span></h3>
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
                                                $i = 1;
                                                if(have_rows('toc')):
                                                    while(have_rows('toc')): the_row();
                                                ?>
                                                        <li><?php echo $i ?>.<?php the_sub_field('toc_title') ?></li>
                                                <?php
                                                        $i++;
                                                    endwhile;
                                                endif;
                                                ?>
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
                                <?php
                                    endwhile;
                                endif;
                                ?>

                                <div class="main__block">
                                    <div class="main__gr">
                                        <div class="btn green">
                                            <a href="<?= get_the_permalink($ser); ?>"><?= $serName; ?>の詳細へ</a>
                                        </div>
                                        <div class="btn blue">
                                            <a href="<?= get_field('link_release', $ser); ?>" target="_blank" rel="noopener noreferrer"><?= $serName ?>の公式サイトへ</a>
                                        </div>
                                    </div><!--End main__gr-->
                                </div>

                            </div>
                            <aside class="main__sb">
                                <?php get_template_part('templates/templates','aside') ?>
                            </aside>
                        </div>
                    </div>
                <?php endif;?>
            </main>
            <div id="back-to-top"><a href="#" class="page-top">top</a></div>
            <footer id="footer" class="footer">
                <?php get_template_part('templates/templates','footer') ?>
            </footer><!-- end footer -->
            <?php get_footer() ?>
        </div><!-- End containere -->
    <?php endwhile; endif; ?>

    <!-- タイトル設定 -->
    <script type="text/javascript">
    (function () {
        const h1    = document.getElementsByTagName('h1')[0];
        let title   = document.getElementsByTagName('h3')[0].textContent;
        h1.innerHTML = title;
    })();
  </script>
</body>
</html>
