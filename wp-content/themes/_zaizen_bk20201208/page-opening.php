<?php get_header() ?>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>運営会社情報</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main main--open">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="<?php echo home_url() ?>/">TOP</a></li>
            <li>運営会社情報</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2>運営会社情報</h2>
              <div class="main__open__table">
				<dl> 
				  </dl>
                <dl><dt>運営 会社名</dt><dd>電話占いの徹底比較</dd></dl>
                <dl><dt>サイト責任者</dt><dd>佐藤　沙織</dd>
                </dl>
                <dl><dt>運営者所在地</dt><dd>大阪府大阪市北区梅田</dd>
                </dl>
                <dl><dt>サイトお問合せ</dt><dd>saorisato0402@gmail.com</dd>
                </dl>
				
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