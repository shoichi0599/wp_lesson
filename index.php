<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Acme">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <div class="container">
      <div class="siteinfo">
        <h1>
          <a href="<?php echo home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
        <p><?php bloginfo( 'description' ); ?></p>
      </div>
    </div>
  </header>

  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class(); ?>>
        <?php if( is_single() ): ?>
          <h1><?php the_title(); ?></h1>
        <?php else: ?>
          <h1>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h1>
        <?php endif; ?>

        <div class="postinfo">
          <time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
            <i class="fa fa-clock-o"></i>
            <?php echo get_the_date(); ?>
          </time>

          <span class="postcat">
            <i class="fa fa-folder-open"></i>
            <?php the_category( ',' ); ?>
          </span>
        </div>

        <?php the_content(); ?>

        <?php if( is_single() ): ?>
          <div class="pagenav">
            <span class="old">
              <?php previous_post_link( '%link', '<i class="fa fa-chevron-circle-left"></i> %title' ); ?>
            </span>

            <span class="new">
              <?php next_post_link( '%link', '%title <i class="fa fa-chevron-circle-right"></i>' ); ?>
            </span>
          </div>
        <?php endif; ?>

      </article>
    <?php endwhile; endif; ?>

    <?php if ( $wp_query->max_num_pages > 1 ): ?>
      <div class="pagenav">
        <span class="old">
          <?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i>　古い記事' ); ?>
        </span>

        <span class="new">
          <?php previous_posts_link( '新しい記事　<i class="fa fa-chevron-circle-right"></i>' ); ?>
        </span>
      </div>
    <?php endif; ?>
  </div> <!-- container -->

  <footer>
    <div class="container">
      <small>Copyright &copy; <?php bloginfo( 'name' ); ?></small>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
