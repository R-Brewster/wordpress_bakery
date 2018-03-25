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
    <script href="<?php echo get_bloginfo('template_directory'); ?>'/js/foundation.min.js'" rel="javascript"></script>




    <?php wp_head(); ?>
  </head>

  <body>
    <!-- Start Top Bar -->
    <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text"><?php echo get_bloginfo('name'); ?></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <!-- <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li> -->
        <?php wp_list_pages('&title_li='); ?>
      </ul>
    </div>
    </div>
    <!-- End Top Bar -->
    <div class="callout large primary">
    <div class="text-center">
      <h1><a href="<?php echo get_bloginfo('wpurl');?>"> <?php echo get_bloginfo('name'); ?></a></h1>
      <p><?php echo get_bloginfo('description'); ?></p>
    </div>
    </div>

    <article class="grid-container">
    <div class="grid-x grid-margin-x" id="content">
      
    <div class="medium-9 cell">
      <div class="blog-post">
        <!-- <h3>Awesome blog post title <small>3/6/2016</small></h3>
        <img class="thumbnail" src="https://placehold.it/850x350">
        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
        <div class="callout">
          <ul class="menu simple">
            <li><a href="#">Author: Mike Mikers</a></li>
            <li><a href="#">Comments: 3</a></li>
          </ul>
        </div> -->
        <?php 
        if(have_posts()) : while (have_posts()) : the_post();
          get_template_part('content', get_post_format()); 
        endwhile; endif;
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

    <!-- <div class="grid-x cell">
    <ul class="pagination" role="navigation" aria-label="Pagination">
      <li class="disabled">Previous</li>
      <li class="current"><span class="show-for-sr">You're on page</span> </li>
      <li><a href="#" aria-label="Page 2">2</a></li>
      <li><a href="#" aria-label="Page 3">3</a></li>
      <li><a href="#" aria-label="Page 4">4</a></li>
      <li class="ellipsis"></li>
      <li><a href="#" aria-label="Page 12">12</a></li>
      <li><a href="#" aria-label="Page 13">13</a></li>
      <li><a href="#" aria-label="Next page">Next</a></li>
    </ul>
    </div> -->
    </article>
  </body>
</html>


  

    