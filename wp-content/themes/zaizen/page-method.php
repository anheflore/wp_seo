<?php get_header(); ?>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h1>調査方法</h1>
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
            <li>調査方法</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2>調査方法</h2>
              <div class="main__open__table">
                <dl>
                  <dt>調査企画・担当者</dt>
                  <dd>中島歩美</dd>
                </dl>
                <dl>
                  <dt>調査目的</dt>
                  <dd>利用者に自分にあった電話占いサイトを選んでもらうため</dd>
                </dl>
                <dl>
                  <dt>調査方法</dt>
                  <dd>電話占いサイトの口コミを参考に作成しております。</dd>
                </dl>
                <dl>
                  <dt>母集団</dt>
                  <dd>電話占いサイトの利用者</dd>
                </dl>
                <dl>
                  <dt>調査対象地域</dt>
                  <dd>全国</dd>
                </dl>
                <dl>
                  <dt>調査実施期間</dt>
                  <dd>2020年2月1日〜継続中</dd>
                </dl>
              </div>
<br><br>
              <div class="pdf-data"><a href="<?php bloginfo('template_url') ?>/enquete.pdf">>電話占いに関するアンケート調査結果報告書</a></div>

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