<?php
/*
Template Name: カテゴリー別ランキング
*/
?>


<?php get_header(); ?>
<body>


  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header'); ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>カテゴリー別ランキング</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu'); ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li>カテゴリー別ランキング</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
           <div class="main__block">
            <div class="main__charts">






<div class="sb__block">
  <div class="btn green"><a href="<?php echo get_page_link( 176 ); ?>">総合ランキング</a></div>
  <div class="btn blue"><a href="<?php echo get_page_link( 188 ); ?>">悩み別ランキング</a></div>
  <div class="btn"><a href="<?php echo home_url() ?>/tellerranking">占い師ランキング</a></div>
</div>






            </div><!-- main__charts -->
          </div>
        </div>





        <aside class="main__sb">
          <?php get_template_part('templates/templates','aside'); ?>
        </aside>

      </div>
    </div>
  </main>
  <footer id="footer" class="footer">
    <<?php get_template_part('templates/templates','footer'); ?>
  </footer>
  <!-- end footer -->
  <?php get_footer(); ?>
</div>
</body>

</html>