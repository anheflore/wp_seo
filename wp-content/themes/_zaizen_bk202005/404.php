<?php get_header(); ?>
<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header'); ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>Page Not Found!!!</h2>
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
            <li>Page Not Found!!!</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2>Page Not Found!!!</h2>
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