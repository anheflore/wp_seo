<?php get_header() ?>
<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <div class="ttl" id="ttl">
        <div class="row">
          <h2>電話占いサービス一覧</h2>
        </div>
      </div>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="main main--service">
        <div class="breadcrum">
          <ul class="breadcrum__row row">
            <li><a href="/">TOP</a></li>
            <li>電話占いサービス一覧</li>
          </ul>
        </div>
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__service__table">
              <table>
                <thead>
                  <tr>
                    <th>サービス名</th>
                    <th>鑑定方法</th>
                    <th>鑑定料金</th>
                    <th>無料特典</th>
                    <th>占い師の<br>在籍数</th>
                    <th>運営開始</th>
                    <th>口コミ評価</th>
                    <th>評価・<br>満足度</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $services = apply_filters('get_service',$_GET);
                    while($services->have_posts()): $services->the_post();
                  ?>
                  <tr>
                    <td>
                      <figure>
                        <?php
                          $thumb = get_template_directory_uri().'/no-image.jpg';
                          if(get_field('service_logo')) {
                            $thumb = get_field('service_logo');
                          }
                        ?>
                        <a href="<?php the_permalink() ?>"><img src="<?php echo $thumb ?>" alt="the_title"></a>
                        <figcaption><?php the_title() ?></figcaption>
                      </figure>
                    </td>
                    <td><?php the_field('by_phone') ?></td>
                    <td><?php the_field('by_fee') ?></td>
                    <td><?php the_field('benefit') ?></td>
                    <td><?php the_field('price') ?></td>
                    <td><?php the_field('operation') ?></td>
                    <td><?php the_field('review') ?></td>
                    <td><div class="wrap_star"><span class="star" style="width: <?php echo ((get_field('great_value')+get_field('review_rating')+get_field('hit')+get_field('safety'))*5).'%'; ?>"></span></div></td>
                  </tr>
                <?php endwhile; wp_reset_query() ?>
                </tbody>
              </table>
            </div>
          </div>
          <aside class="main__sb">
            <?php get_template_part('templates/templates','aside') ?>
          </aside>
        </div>
      </div>
    </main>
    <footer id="footer" class="footer">
      <?php get_template_part('templates/templates','footer') ?>
    </footer>
    <!-- end footer -->
    <?php get_footer() ?>
  </div>
</body>

</html>