<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="Keywords" content="<?php bloginfo('keywords'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
  <meta property="og:locale" content="ja_JP">
  <meta property="og:title" content="<?php bloginfo('name')?>">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:image" content="">
  <meta property="og:type" content="website">
	<meta name="google-site-verification" content="b93e6o27dp7-wy2S0sYUt9mrIkYg9GSizbp2TmWePUA" />
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

  <?php wp_head();?>
</head>