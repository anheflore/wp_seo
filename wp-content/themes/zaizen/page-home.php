<?php get_header(); ?>

<body>
<?php
  $ua=$_SERVER['HTTP_USER_AGENT'];
  if ( wp_is_mobile() ) {
    get_template_part('templates/templates','home_sp');
  }else{
    get_template_part('templates/templates','home');
  }
?>

</body>

</html>
