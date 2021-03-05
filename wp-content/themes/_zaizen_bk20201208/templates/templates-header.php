<div class="header__logo" id="header__logo">
  <div class="row">

    <?php
    $obj = get_queried_object();
    if (is_tax('kind') || $obj->post_type === 'teller' || $obj->post_type === 'column') : ?>
      <a href="<?php echo home_url() ?>/"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="電話占い調査団"></a>
    <?php else: ?>
      <h1><a href="<?php echo home_url() ?>/"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="電話占い調査団"></a></h1>
    <?php endif; ?>

    <div class="menu_sp show_sp" id="icon_nav">
      <div class="icon_menu">
        <div class="icon_inner"></div>
      </div>
    </div>
  </div>
</div>
