<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus</title>
</head>
<body>
    <?php get_header("header.php"); 

  if ( have_posts() ) {
      while ( have_posts() ) {
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Loe edasi..</a>
    <?php
    }
  }
  ?>
 <?php get_footer("footer.php"); ?>
</body>
</html>

