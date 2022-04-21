<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>
    <?php get_header("header.php"); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content();
    get_footer("footer.php");
    ?>
</body>
</html>