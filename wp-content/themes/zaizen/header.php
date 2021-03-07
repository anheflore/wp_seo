<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
  <meta property="og:locale" content="ja_JP">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/common.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162916202-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162916202-1');
</script>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
<?php wp_head();?>
</head>