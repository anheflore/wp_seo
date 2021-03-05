<div class="footer__row row">
  <div class="footer__ct row4">
    <dl class="footer__col">
      <dd><a href="<?php echo home_url() ?>/">電話占い比較TOP</a></dd>
    </dl>
    <dl class="footer__col">
      <dd><a href="<?php echo home_url() ?>/beginer/">電話占い初心者ガイド</a></dd>
    </dl>
    <dl class="footer__col"></dl>
    <dl class="footer__col"></dl>

  </div>

  <!--サービス一覧-->
  <dl class="footer__col">
    <dt>■サービス一覧</dt>
  </dl>
  <div class="footer__ct row4">
    <dl class="footer__col">
      <dd><a href="<?php echo get_permalink( 82 ); ?>">１位 電話占いシエロ</a></dd>
      <dd><a href="<?php echo get_permalink( 141 ); ?>">２位 電話占いスピカ</a></dd>
      <dd><a href="<?php echo get_permalink( 143 ); ?>">３位 エキサイト電話占い</a></dd>
      <dd><a href="<?php echo get_permalink( 146 ); ?>">４位 ヴェルニ</a></dd>
      <dd><a href="<?php echo get_permalink( 162 ); ?>">５位 インスピ</a></dd>
    </dl>
    <dl class="footer__col">
      <dd><a href="<?php echo get_permalink( 214 ); ?>">６位 マヒナ</a></dd>
      <dd><a href="<?php echo get_permalink( 216 ); ?>">７位 カリス</a></dd>
      <dd><a href="<?php echo get_permalink( 218 ); ?>">８位 みん電占い</a></dd>
      <dd><a href="<?php echo get_permalink( 220 ); ?>">９位 クオーレ</a></dd>
      <dd><a href="<?php echo get_permalink( 222 ); ?>">１０位 ピュアリ</a></dd>
    </dl>
    <dl class="footer__col">
      <dd><a href="<?php echo get_permalink( 224 ); ?>">１１位 ウラナ</a></dd>
      <dd><a href="<?php echo get_permalink( 226 ); ?>">１２位 リエル</a></dd>
      <dd><a href="<?php echo get_permalink( 228 ); ?>">１３位 ピクシィ</a></dd>
      <dd><a href="<?php echo get_permalink( 230 ); ?>">１４位 ウィル</a></dd>
      <dd><a href="<?php echo get_permalink( 232 ); ?>">１５位 フィール</a></dd>
    </dl>
    <dl class="footer__col"></dl>
  </div>

  <!--コラム一覧-->
  <dl class="footer__col show_pc">
    <dt><a href="<?php echo home_url() ?>/column/">■コラム一覧</a></dt>
  </dl>
  <div class="footer__ct show_pc">
    <?php
    $column_arg = [
        'posts_per_page' => '-1',
        'order' => 'DESC',
        'post_type' => 'column',
    ];
    $column_posts = get_posts( $column_arg );// 全コラム取得
    $column_kinds = [];
    foreach ( $column_posts as $v ) {
        // カテゴリ取得
        $kind = get_the_terms($v->ID, 'kind')[0];
        // データを挿入
        if ( !empty($kind) && isset($column_kinds[$kind->slug]) ) {
            $data_set = [
                "title" => str_replace('<br>', ' ', $v->post_title),
                "url"   => $v->guid,
            ];
            array_push( $column_kinds[$kind->slug][1], $data_set );
        }
        // データを挿入（初出のカテゴリの場合）
        if ( !empty($kind) && !isset($column_kinds[$kind->slug]) ) {
            $data_set = [
                "title" => str_replace('<br>', ' ', $v->post_title),
                "url"   => $v->guid,
            ];
            $column_kinds[$kind->slug][0] = $kind->name;
            $column_kinds[$kind->slug][1] = [];
            array_push( $column_kinds[$kind->slug][1], $data_set );
        }
    }
    wp_reset_postdata();
    ?>
    <!-- 比較調査コラム -->
    <dl class="footer__col footer__col--column">
        <dt>
            <a href="<?php echo home_url() ?>/column/survey/">
                比較調査コラム
            </a>
        </dt>
        <dd>
            <?php
            for ( $i=0; $i<14; $i++ ) :
                if ( !empty($column_kinds['survey'][1][$i]) ) : ?> 
                    <a href="<?php echo $column_kinds['survey'][1][$i]['url']; ?>">
                        <?php echo $column_kinds['survey'][1][$i]['title']; ?>
                    </a>
                <?php
                endif;
            endfor;
            ?>
        </dd>
    </dl>
    <!-- お悩み別コラム -->
    <dl class="footer__col footer__col--column">
        <dt>
            <a href="<?php echo home_url() ?>/column/worries/">
                お悩み別コラム
            </a>
        </dt>
        <dd>
            <?php
            for ( $i=0; $i<14; $i++ ) :
                if ( !empty($column_kinds['worries'][1][$i]) ) : ?> 
                    <a href="<?php echo $column_kinds['worries'][1][$i]['url']; ?>">
                        <?php echo $column_kinds['worries'][1][$i]['title']; ?>
                    </a>
                <?php
                endif;
            endfor;
            ?>
        </dd>
    </dl>
    <!-- 電話占い実体験コラム -->
    <dl class="footer__col footer__col--column">
        <dt>
            <a href="<?php echo home_url() ?>/column/story/">
                電話占い実体験コラム
            </a>
        </dt>
        <dd>
            <?php
            for ( $i=0; $i<14; $i++ ) :
                if ( !empty($column_kinds['story'][1][$i]) ) : ?> 
                    <a href="<?php echo $column_kinds['story'][1][$i]['url']; ?>">
                        <?php echo $column_kinds['story'][1][$i]['title']; ?>
                    </a>
                <?php
                endif;
            endfor;
            ?>
        </dd>
    </dl>
    <!-- 豆知識 -->
    <dl class="footer__col footer__col--column">
        <dt>
            <a href="<?php echo home_url() ?>/column/trivia/">
                豆知識
            </a>
        </dt>
        <dd>
            <?php
            for ( $i=0; $i<14; $i++ ) :
                if ( !empty($column_kinds['trivia'][1][$i]) ) : ?> 
                    <a href="<?php echo $column_kinds['trivia'][1][$i]['url']; ?>">
                        <?php echo $column_kinds['trivia'][1][$i]['title']; ?>
                    </a>
                <?php
                endif;
            endfor;
            ?>
        </dd>
    </dl>
  </div>

  <div class="footer__ct footer__ct--last-row">

    <!--特集記事-->
    <dl class="footer__col">
     <dt>■特集</dt>
      <dd><a href="<?php echo home_url() ?>/column/survey/293/">2020年電話占いシエロを実際に体験！おすすめの先生８人はこの人！</a></dd>
      <dd><a href="<?php echo home_url() ?>/column/survey/619/">電話占いインスピの口コミ評判と当たる占い師９選</a></dd>
      <dd><a href="<?php echo home_url() ?>/column/survey/623/">電話占いピクシィの当たる占い師と口コミ</a></dd>
      <dd><a href="<?php echo home_url() ?>/column/survey/676/">電話占いスピカの当たる占い師と口コミ</a></dd>
      <dd><a href="<?php echo home_url() ?>/column/survey/686/">電話占いリエルの今注目の占い師9名と口コミ徹底解説！</a></dd>
    </dl>

    <!--占いの種類-->
    <dl class="footer__col show_pc">
     <dt>■占い【種類】</dt>
    <?php
    $uranai_arg = [
        'posts_per_page' => '-1',
        'order' => 'DESC',
        'post_type' => 'fortune_telling',
    ];
    $uranai_posts = get_posts( $uranai_arg );// 全記事取得
    wp_reset_postdata();
    foreach ($uranai_posts as $v) : ?>
        <dd>
            <a href="<?php echo $v->guid; ?>">
                <?php echo str_replace('<br>', '', $v->post_title); ?>
            </a>
        </dd>
    <?php endforeach; ?>
    </dl>

    <!--当サイトについて-->
    <dl class="footer__col show_pc">
        <dt>■当サイトについて</dt>
        <dd><a href="<?php echo home_url() ?>/method/">調査方法</a></dd>
        <dd><a href="<?php echo home_url() ?>/opening/">運営者情報</a></dd>
        <dd><a href="<?php echo home_url() ?>/privacy/">プライバシーポリシー</a></dd>
        <dd><a href="<?php echo home_url() ?>/sitemap/">サイトマップ</a></dd>
    </dl>

  </div>

  <div class="footer__ct show_sp">
    <!--当サイトについて-->
    <dl class="footer__col">
        <dt>■当サイトについて</dt>
        <dd><a href="<?php echo home_url() ?>/method/">調査方法</a></dd>
        <dd><a href="<?php echo home_url() ?>/opening/">運営者情報</a></dd>
        <dd><a href="<?php echo home_url() ?>/privacy/">プライバシーポリシー</a></dd>
        <dd><a href="<?php echo home_url() ?>/sitemap/">サイトマップ</a></dd>
    </dl>
  </div>

  <p class="footer__cpr">2020 &copy; 電話占い調査隊.</p>
</div>
