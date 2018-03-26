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
        <div class="medium-9 cell blog-container">
            <div class="blog-post">
                <div>
                  <h2>We're a little company with a lot of heart</h2>
                  <?php
                      echo '<img id="first-post-img" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\pastry_heart.jpg')).'" />'
                    ?>
                  <p>We started in Los Angeles, California and proudly cater the City of Angels’ happiest moments. From life’s grand occasions to the “just because,” we will bring only the freshest and highest-quality baked treats.</p>
                  <p>We have a wide variety of menu items, from sumptuous red velvet cupcakes, to the beloved classic apple pie. We are always updating our menu, so check often to see what we might be able to deliver to you today!</p>
                </div>
                <?php
                  echo '<img id="bottom-frame" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\small_frame2.png')).'" />'
                ?>
            </div>
          
            <div class="blog-post">
              <?php 
              if(have_posts()) : while (have_posts()) : the_post();
                get_template_part('content', get_post_format()); 
              endwhile; endif;
              ?>
            </div>
        </div>
        
        <!-- <?php get_sidebar() ?>  -->
      </div>
    </article>
  </body>
</html>


  

    