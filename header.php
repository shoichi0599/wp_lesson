<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Acme">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <div class="siteinfo">
      <div class="container">
        <h1>
          <a href="<?php echo home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
        <p><?php bloginfo( 'description' ); ?></p>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/header-1500x250.jpg" width="1500" height="250" alt="">
    <nav>
      <div class="container">
        <?php wp_nav_menu( 'theme_location=navigation' ); ?>
      </div>
    </nav>
  </header>
