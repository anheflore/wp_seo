<?php get_header(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
    <section class="bannerPage">
        <article class="container">
            <div class="bannerPage__main" style="background-image: url('<?php if($featured_img_url):?><?php echo esc_url($featured_img_url) ?><?php else : ?><?php bloginfo('template_url'); ?>/images/banner-page3.jpg <?php endif; ?>')">
                <h3>Page not found</h3>
            </div>
        </article>
    </section>
    <!-- End /box banner page defaul -->

    <section class="contentPage">
        <article class="mainPage">
            <div class="container text-center">
                <div class="btSuperTitle">We are sorry, page not found.</div>
                <div class="dash"><h1><span class="headline">Error 404.</span></h1></div>
                <div class="more"><a href="<?php echo get_bloginfo('url'); ?>/">Back to homepage</a></div>
            </div>
        </article>
    </section>

<?php get_footer(); ?>