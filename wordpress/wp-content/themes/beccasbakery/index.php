<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>'/css/foundation.min.css'" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>'/blog.css'" rel="stylesheet">
    <script href="<?php echo get_bloginfo('template_directory'); ?>'/js/foundation.min.js'" rel="javascript"></script>

    <?php wp_head(); ?>
  </head>

  <body>

    <?php get_header() ?>

    <div class="callout large primary" style="padding: 0">
    <div id="hero-image">
        <?php
          echo '<img src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\header' . rand(1, 6) . '.jpg')).'" />'
        ?>
      </div>
      <div class="text-center">
        <h1><a href="<?php echo get_bloginfo('wpurl');?>"> <?php echo get_bloginfo('name'); ?></a></h1>
        <?php
          echo '<img src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\small_frame1.png')).'" />'
        ?>
        <!-- <p><?php echo get_bloginfo('description'); ?></p> -->
      </div>
    </div>

    <article class="grid-container">
    <div class="grid-x grid-margin-x" id="content">
      
    <div class="medium-9 cell">
      <div class="blog-post">
        <?php 
        if(have_posts()) : while (have_posts()) : the_post();
          get_template_part('content', get_post_format()); 
        endwhile; endif;
        ?>
        <?php
          echo '<img id="bottom-frame" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\small_frame2.png')).'" />'
        ?>
      </div>
      
    </div>
    <div class="medium-3 cell" data-sticky-container>
      <div class="sticky" data-sticky data-anchor="content">
        <h4>About</h4>
        <p><?php the_author_meta('description'); ?></p>

        <h4>Archives</h4>
          <ol class="list-unstyled">
          <?php wp_get_archives('type=monthly'); ?>
        </ol>
      </div>
    </div>
    </div>

    </article>
  </body>
</html>


  

    