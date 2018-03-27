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
    <link href="<?php echo get_bloginfo('template_directory'); ?>'/motion-ui-starter/css/motion-ui.css'" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>'/blog.css'" rel="stylesheet">
    <script href="<?php echo get_bloginfo('template_directory'); ?>'/js/foundation.min.js'" rel="javascript"></script>

    <?php wp_head(); ?>
  </head>

  <body>

    <?php get_header() ?>

    <article class="grid-container">
    <h1 id="blog-section-title" >Our Menu:</h1>
    <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert1.jpg')).'" />'
        ?>
        <span class="tooltiptext">Tooltip text</span>
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert2.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert3.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert4.jpg')).'" />'
        ?>
       
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert5.jpg')).'" />'
        ?>
       
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert6.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert7.jpg')).'" />'
        ?>
      
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert8.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert9.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert10.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert11.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert12.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert13.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert14.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert15.jpg')).'" />'
        ?>
        
      </div>
      <div class="cell tooltip-container">
        <?php
          echo '<img class="thumbnail" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\dessert16.jpg')).'" />'
        ?>
        
      </div>
     
    </div>

    <br>

   

    <div id="menu-items">
    <?php 
          get_template_part('menu_content', get_post_format()); 
    ?>
    </div>

    
    <?php get_footer() ?>

  </body>
</html>


  

    