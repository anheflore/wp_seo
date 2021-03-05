<?php get_header(); ?>

<body>
  <div id="container" class="container">
    <header id="header" class="header">
      <?php get_template_part('templates/templates','header') ?>
      <?php get_template_part('templates/templates','menu') ?>
    </header>
    <!-- end header -->
    <main>
      <div class="mv">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php bloginfo('template_url') ?>/assets/img/banner_sp.png">
          <img src="<?php bloginfo('template_url') ?>/assets/img/banner.png?v=390f90bec0c23066358211fbc6cb5c78" alt="banner">
        </picture>
      </div><!-- end mv -->
      <div class="main main--top">
        <div class="main__row row">
          <div class="main__ct">
            <div class="main__block">
              <h2>利用目的に合った電話占い検索！</h2>
              <p class="center">鑑定方法、占い師の在籍数、気になる鑑定料金やサービスなど一発で検索！<br>あなたが求める電話占いサイトを絞り込みでいち早く見つけることができます。</p>
              <form action="<?php echo home_url() ?>/search" class="main__form" method="get">
                <dl>
                  <dt>鑑定方法</dt>
                  <dd>
                    <p><input type="radio" id="unspecified" name="method" value="null"><label for="unspecified">指定なし</label></p>
                    <p><input type="radio" id="phone" name="method" value="電話鑑定"><label for="phone">電話鑑定</label></p>
                    <p><input type="radio" id="email" name="method" value="メール鑑定"><label for="email">メール鑑定</label></p>
                    <!-- <p><input type="radio" id="face" name="method" value="face"><label for="face">対面鑑定</label></p> -->
                  </dd>
                </dl>
                <dl>
                  <dt>通話料金</dt>
                  <dd>
                    <p><input type="radio" id="no" name="call" value="null"><label for="no">選択なし</label></p>
                    <p><input type="radio" id="self" name="call" value="自己負担"><label for="self">自己負担</label></p>
                    <p><input type="radio" id="fee" name="call" value="鑑定料に含む"><label for="fee">鑑定料に含む</label></p>
                    <p><input type="radio" id="fee2" name="call" value="無料"><label for="fee2">無料</label></p>
                  </dd>
                </dl>
                <dl>
                  <dt>占い師の在籍数</dt>
                  <dd>
                    <p><input type="radio" id="select" name="price" value="null"><label for="select">選択なし</label></p>
                    <p><input type="radio" id="less" name="price" value="100人未満"><label for="less">100人未満</label></p>
                    <p><input type="radio" id="over" name="price" value="100人以上"><label for="over">100人以上</label></p>
                  </dd>
                </dl>
                <dl>
                  <dt>相談内容</dt>
                  <dd class="spec">
                    <p><input type="checkbox" id="consul1" name="consul[]" value="恋愛"><label for="consul1">恋愛</label></p>
                    <p><input type="checkbox" id="consul2" name="consul[]" value="復縁"><label for="consul2">復縁</label></p>
                    <p><input type="checkbox" id="consul3" name="consul[]" value="結婚"><label for="consul3">結婚</label></p>
                    <p><input type="checkbox" id="consul4" name="consul[]" value="仕事・転職"><label for="consul4">仕事・転職</label></p>
                    <p><input type="checkbox" id="consul5" name="consul[]" value="家族"><label for="consul5">家族</label></p>
                    <p><input type="checkbox" id="consul6" name="consul[]" value="離婚・失恋"><label for="consul6">離婚・失恋</label></p>
                    <p><input type="checkbox" id="consul7" name="consul[]" value="人間関係"><label for="consul7">人間関係</label></p>
                  </dd>
                </dl>
                <dl>
                  <dt>サービス特徴</dt>
                  <dd class="spec">
                    <p><input type="checkbox" id="free" name="feature[]" value="初回無料特典あり"><label for="free">初回無料特典あり</label></p>
                    <p><input type="checkbox" id="first" name="feature[]" value="初回割引制度あり"><label for="first">初回割引制度あり</label></p>
                    <p><input type="checkbox" id="open" name="feature[]" value="24時間営業"><label for="open">24時間営業</label></p>
                    <p><input type="checkbox" id="support" name="feature[]" value="深夜サポート"><label for="support">深夜サポート</label></p>
                    <p><input type="checkbox" id="hight" name="feature[]" value="テレビ出演などの有名占い師在籍"><label for="hight">テレビ出演などの有名占い師在籍</label></p>
                    <p><input type="checkbox" id="hight2" name="feature[]" value="個人情報保護認定済み"><label for="hight2">個人情報保護認定済み</label></p>
                  </dd>
                </dl>
                <div class="main__form__submit">
                  <button type="submit">この条件で検索する</button>
                </div>
              </form>
              <figure class="full"><img src="<?php bloginfo('template_url') ?>/assets/img/img01.jpg?v=cb04e3675a8fcdad6b8d8479eb04962a" alt=""></figure>
            </div>
            <div class="main__block">
              <h2>この記事の目次</h2>
              <ul>
                <li>1.当たる電話占いサイトの基準は何？</li>
                <li>2.よく当たる電話占いサイトランキング</li>
                <li>3.悩み別当たるおすすめ占い師ランキング</li>
                <li>4.当たる電話占い師に聞く電話占いとは？</li>
                <li>5.電話占いとは？</li>
                <li>6.占いサイト選びを失敗しないためには？</li>
                <li>7.占術・占いの種類</li>
                <li>8.電話占いのおすすめコンテンツ</li>
                <li>9.まとめ</li>
              </ul>
            </div>
            <div class="main__block">
              <h2>当たる電話占いサイトの基準は何？</h2>
              <p class="center">20点満点で採点しています。</p>
              <div class="main__table">
                <table>
                  <tr>
                    <th>お得</th>
                    <td>5点満点</td>
                    <td>各サイトの特典割引を調べて、どれぐらいお得かを覆面調査</td>
                  </tr>
                  <tr>
                    <th>当たる確率</th>
                    <td>5点満点</td>
                    <td>実際に占い師に占ってもらい、どれだけ当たるのか覆面調査</td>
                  </tr>
                  <tr>
                    <th>口コミ評価</th>
                    <td>5点満点</td>
                    <td>当サイトの口コミの数値を元に評価</td>
                  </tr>
                  <tr>
                    <th>安全性・信頼性</th>
                    <td>5点満点</td>
                    <td>安全性・信頼性は高いか覆面調査</td>
                  </tr>
                </table>
              </div>
              <div class="main__charts">
                <?php
                  while ( have_rows('list_service') ) : the_row();
                  $post_object = get_sub_field('service');
                  if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
                ?>
                <div class="main__charts__child">
                  <h3><?php the_title() ?><span><?php echo (get_field('great_value')+get_field('review_rating')+get_field('hit')+get_field('safety'))/4 ?>点<small>/5点</small></span></h3>
                  <p><?php echo get_field('service_intro') ?></p>
                  <?php if(get_field('service_banner')): ?>
                  <figure><img src="<?php the_field('service_banner') ?>" alt=""></figure>
                  <?php endif;?>
                  <div class="main__rate">
                    <dl>
                      <dt>お得</dt>
                      <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('great_value')*20).'%'; ?>"></span></div></dd>
                    </dl>
                    <dl>
                      <dt>口コミ評価</dt>
                      <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('review_rating')*20).'%'; ?>"></span></div></dd>
                    </dl>
                    <dl>
                      <dt>当たる確率</dt>
                      <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('hit')*20).'%'; ?>"></span></div></dd>
                    </dl>
                    <dl>
                      <dt>安全性・信頼性</dt>
                      <dd><div class="wrap_star"><span class="star" style="width: <?php echo (get_field('safety')*20).'%'; ?>"></span></div></dd>
                    </dl>
                  </div>
                  <div class="main__tab">
                    <ul class="tabs">
                      <li class="active"><a href="" data-tabs="0">お得</a></li>
                      <li><a href="" data-tabs="1">当たる確率</a></li>
                      <li><a href="" data-tabs="2">口コミ</a></li>
                      <li><a href="" data-tabs="3">安全性・信頼性</a></li>
                    </ul>
                    <div class="main__tab__ct">
                      <div class="ctn_tabs" data-tabs="0">
                        <?php the_field('greate_value_text') ?>
                      </div>
                      <div class="ctn_tabs" data-tabs="1">
                        <?php the_field('review_rating_text') ?>
                      </div>
                      <div class="ctn_tabs" data-tabs="2">
                        <?php the_field('hit_text') ?>
                      </div>
                      <div class="ctn_tabs" data-tabs="3">
                        <?php the_field('satefy_text') ?>
                      </div>
                    </div>
                  </div>
                  <div class="main__gr">
                    <div class="btn green"><a href="<?php the_permalink(); ?>">詳細を見る</a></div>
                    <div class="btn blue"><a href="<?php the_field('link_release') ?>" target="_blank">公式サイトへ</a></div>
                  </div>
                </div>
              <?php wp_reset_postdata(); endif; endwhile; ?>
              </div>
            </div>
            <div class="main__block">
              <h2>悩み別！<br class="show_sp">当たるおすすめ占い師ランキング</h2>
              <div class="main__layout">
                <h3>恋愛についての悩み</h3>
                <ul>
                  <?php
                    while ( have_rows('love') ) : the_row();
                    $post_object = get_sub_field('teller');
                    if( $post_object ):
                      $post = $post_object;
                      setup_postdata( $post );
                  ?>
                    <li>
                      <a href="<?php the_permalink() ?>">
                        <figure>
                          <?php
                          $thumb;
                          if(has_post_thumbnail()):
                            $thumb = get_the_post_thumbnail_url();
                          else:
                            $thumb = catch_thumbnail_image();
                          endif;
                          ?>
                          <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>">
                          <figcaption><small><?php echo get_the_title(get_field('belong_to')) ?></small><?php the_field('teller_name') ?></figcaption>
                        </figure>
                      </a>
                    </li>
                  <?php wp_reset_postdata(); endif; endwhile; ?>
                </ul>
              </div>
              <div class="main__layout">
                <h3>復縁についての悩み</h3>
                <ul>
                  <?php
                    while ( have_rows('reunion') ) : the_row();
                    $post_object = get_sub_field('teller');
                    if( $post_object ):
                      $post = $post_object;
                      setup_postdata( $post );
                  ?>
                    <li>
                      <a href="<?php the_permalink() ?>">
                        <figure>
                          <?php
                          $thumb;
                          if(has_post_thumbnail()):
                            $thumb = get_the_post_thumbnail_url();
                          else:
                            $thumb = catch_thumbnail_image();
                          endif;
                          ?>
                          <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>">
                          <figcaption><small><?php echo get_the_title(get_field('belong_to')) ?></small><?php the_field('teller_name') ?></figcaption>
                        </figure>
                      </a>
                    </li>

                  <?php wp_reset_postdata(); endif; endwhile; ?>
                </ul>
              </div>
              <div class="main__layout">
                <h3>不倫についての悩み</h3>
                <ul>
                  <?php
                    while ( have_rows('adultery') ) : the_row();
                    $post_object = get_sub_field('teller');
                    if( $post_object ):
                      $post = $post_object;
                      setup_postdata( $post );
                  ?>
                    <li>
                      <a href="<?php the_permalink() ?>">
                        <figure>
                          <?php
                          $thumb;
                          if(has_post_thumbnail()):
                            $thumb = get_the_post_thumbnail_url();
                          else:
                            $thumb = catch_thumbnail_image();
                          endif;
                          ?>
                          <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>">
                          <figcaption><small><?php echo get_the_title(get_field('belong_to')) ?></small><?php the_field('teller_name') ?></figcaption>
                        </figure>
                      </a>
                    </li>
                  <?php wp_reset_postdata(); endif; endwhile; ?>
                </ul>
              </div>
              <div class="main__layout">
                <h3>略奪愛についての悩み</h3>
                <ul>
                  <?php
                    while ( have_rows('looting_love') ) : the_row();
                    $post_object = get_sub_field('teller');
                    if( $post_object ):
                      $post = $post_object;
                      setup_postdata( $post );
                  ?>
                    <li>
                      <a href="<?php the_permalink() ?>">
                        <figure>
                          <?php
                          $thumb;
                          if(has_post_thumbnail()):
                            $thumb = get_the_post_thumbnail_url();
                          else:
                            $thumb = catch_thumbnail_image();
                          endif;
                          ?>
                          <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>">
                          <figcaption><small><?php echo get_the_title(get_field('belong_to')) ?></small><?php the_field('teller_name') ?></figcaption>
                        </figure>
                      </a>
                    </li>

                  <?php wp_reset_postdata(); endif; endwhile; ?>
                </ul>
              </div>
              <div class="main__layout">
                <h3>人間関係についての悩み</h3>
                <ul>
                  <?php
                    while ( have_rows('relationships') ) : the_row();
                    $post_object = get_sub_field('teller');
                    if( $post_object ):
                      $post = $post_object;
                      setup_postdata( $post );
                  ?>
                    <li>
                      <a href="<?php the_permalink() ?>">
                        <figure>
                          <?php
                          $thumb;
                          if(has_post_thumbnail()):
                            $thumb = get_the_post_thumbnail_url();
                          else:
                            $thumb = catch_thumbnail_image();
                          endif;
                          ?>
                          <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>">
                          <figcaption><small><?php echo get_the_title(get_field('belong_to')) ?></small><?php the_field('teller_name') ?></figcaption>
                        </figure>
                      </a>
                    </li>
                  <?php wp_reset_postdata(); endif; endwhile; ?>
                </ul>
              </div>
            </div>
            <div class="main__block">
              <h2>電話占いとは？</h2>
              <p>ここまでは、電話占いをしているサイトをいくつか紹介してきました。電話占いでも納得いく鑑定結果が得られるとはいえ、そもそも電話占いがどのようなものなのか分からないという人も多いのでは？</p>
              <p>電話占いとは、その名の通り電話を利用して占い師に鑑定してもらうサービスです。対面形式ではなく電話で占いをしてもらうため、わざわざ占い師のもとへ出かけなくても良いことや、時間に縛られずにどこからでも鑑定してもらえるというメリットがあります。</p>
              <p>電話占いを利用する時は、サービスを提供しているウェブサイトでメールアドレスなどの情報を使用した上で利用者登録をして、サイトの中から占ってもらいたい占い師を選びます。その後、こちらから電話をかけるか占い師から電話がかかってくることで占いが始まります。</p>
              <p>利用料金は前払いと後払いのところがありますが、支払い方法を自由に選べるサイトが人気です。<br>相談ごとの料金設定を設けている対面形式の占いとは違い、電話占いでは1分単位で料金を定めているところが多いので、占い時間が短くなればコストを抑えて鑑定してもらえます。</p>
              <div class="btn"><a href="">もっと見る</a></div>
            </div>
            <div class="main__block">
              <h2>占いサイト選びを<br class="show_sp">失敗しないためには？</h2>
              <p>電話占いサービスを提供しているサイトはたくさんあるため、選んだサイトによっては思ったような鑑定をしてもらえない、料金が負担になってしまうというトラブルが発生することも……。</p>
              <p>サイトによっては、時間ごとに料金を定めているところや、質問内容や対面占いのように枠ごとに料金を決めているところがあるため、事前に料金システムを知っておくことが大切です。<br>また、相談内容に対して的確な鑑定結果を返してもらえるよう、事前に相談内容を明確にして、その内容に適した鑑定をしてもらえるサイトを選ぶことも、納得いく電話占いをしてもらえるサイトを選ぶ上で重要になります。</p>
              <div class="btn"><a href="">もっと見る</a></div>
            </div>
            <div class="main__block">
              <h2>占術・占いの種類</h2>
              <p>一言で「占い」と言ってもたくさんの占術があるため、どのような種類の占術があるか把握した上で、適した電話占いサービスや占い師を選ぶように心がけましょう。</p>
              <p>また、電話占いサイトや占い師によって得意としている占術が異なり、それぞれ占星術や数秘術、四柱推命やタロット占い、姓名判断などといった、さまざまな占術を取り扱っています。占術に関する知識を持っておけば、あなたの悩みや好みの占術で鑑定してもらいやすくなるでしょう。</p>
              <p>「命占」は、数字を使うことによって、占う人物の性格や運命などを視る占術で、四柱推命や九星気学が含まれます。統計学的な面もあるため、信頼性が高いのが特徴です。</p>
              <p>「卜占」は「ぼくせん」と読む占術で、具体的な悩みをもとにYesかNoの2択ではっきりと答えを出してくれるのが特徴です。明確な鑑定結果を聞ける反面、占い師によって鑑定結果に差が出るため、信頼できる占い師を選ぶようにしましょう。</p>
              <p>「相占」は、姓名判断や風水といったなじみのある占術で、あなたの置かれている状況や少し先の未来を占ってもらうのに適しています。とはいえ、「相占」は手や顔、字や家など、実際に目で見えるものを通して占う占術なので、占術によっては電話占いに向いていないものがあることを知っておきましょう。</p>
              <p>その他にも、霊視や透視といったスピリチュアルな占術もあり、あなたから発するオーラやチャクラ、エネルギーをもとに鑑定していくという方法もあります。このように占術によって鑑定方法や得られる鑑定結果が違うため、どの占術で占ってもらうかをあらかじめ考えておくとスムーズに占ってもらえるでしょう。</p>
              <div class="btn"><a href="">もっと見る</a></div>
            </div>
            <div class="main__block">
              <h2>電話占いのおすすめコンテンツ</h2>
              <ul class="main__gallery">
                <?php
                  while ( have_rows('recommend_teller') ) : the_row();
                  $post_object = get_sub_field('teller');
                  if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );
                ?>
                  <li>
                    <a href="<?php the_permalink() ?>">
                      <figure>
                        <?php
                        $thumb;
                        if(has_post_thumbnail()):
                          $thumb = get_the_post_thumbnail_url();
                        else:
                          $thumb = catch_thumbnail_image();
                        endif;
                        ?>
                        <img src="<?php echo $thumb; ?>" alt="<?php the_title() ?>">
                        <figcaption><?php the_field('teller_name') ?></figcaption>
                      </figure>
                    </a>
                  </li>
                <?php wp_reset_postdata(); endif; endwhile; ?>
              </ul>
              <div class="btn btn--nomt"><a href="">もっと見る</a></div>
            </div>
            <div class="main__block">
              <h2>まとめ</h2>
              <p>電話占いサービスを提供しているサイトの特徴や評判、電話占いとはどのようなものなのかということを説明しました。<br>選んだサイトによって、料金設定や得意とする占術が違ってくるため、事前に相談内容や好みの占術を決めておくことで、相談に集中してスムーズに鑑定結果を得られるようになります。<br>ここで説明した内容を参考にして、あなたの悩みが軽減できるような電話占いサービスを選べるようになってくださいね！</p>
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
    <?php get_footer(); ?>
  </div>
</body>

</html>