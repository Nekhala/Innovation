<!DOCTYPE html>
<html <?php language_attributes() ?>> 
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/bg.jpg');">
      <div class="container">

      <?php while(have_posts()) : the_post() ?>
        <h1>
          <?php the_title(); ?>
        </h1>
        <p>
          <?php the_content(); ?>
        </p>
        <a class="btn" href="">Learn More</a>

        <?php endwhile; ?>

      </div>
    </div>