<?php
/**
 * The header for our theme
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head();?>
<!-- <script>
    var meta = document.createElement('meta');
    var viewportWidth = 0;
    var viewportHeight = 0;
    meta.setAttribute('name', 'viewport');
    meta.setAttribute('content', 'width=width=device-width, initial-scale=1.0');
    if(navigator.userAgent.indexOf('Android') > 0){
        viewportWidth = screen.width/window.devicePixelRatio;
        viewportHeight = screen.height/window.devicePixelRatio;
    }else{
        viewportWidth = screen.width;
        viewportHeight = screen.height;
    }
    if(window.innerHeight < window.innerWidth){
        if(viewportHeight>737){
            meta.setAttribute('content', 'width=1130px');
        }

    }else{
        if(viewportWidth>737){
            meta.setAttribute('content', 'width=1130px');
        }
    }
    document.getElementsByTagName('head')[0].appendChild(meta);

</script> -->
<link href="<?php echo get_template_directory_uri(); ?>/css/new-style.css" rel="stylesheet" type="text/css"/>

</head>

<body <?php body_class(); ?>>
