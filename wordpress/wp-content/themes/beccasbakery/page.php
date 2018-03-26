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

    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <li class="is-active orbit-slide">
                <img class="orbit-image" src="https://placehold.it/2000x750&text=1st" alt="Space">
                <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
            </li>
            <li class="orbit-slide">
                <img class="orbit-image" src="https://placehold.it/2000x750&text=2nd" alt="Space">
                <figcaption class="orbit-caption">Lets Rocket!</figcaption>
            </li>
            <li class="orbit-slide">
                <img class="orbit-image" src="https://placehold.it/2000x750&text=3nd" alt="Space">
                <figcaption class="orbit-caption">Encapsulating</figcaption>
            </li>
            <li class="orbit-slide">
                <img class="orbit-image" src="https://placehold.it/2000x750&text=4nd" alt="Space">
                <figcaption class="orbit-caption">Outta This World</figcaption>
            </li>
        </ul>
        <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
        </nav>
    </div>

    <br>

    <!-- <div class="text-center">
        <h2>Our Newest Products</h2>
        <hr>
    </div> -->

    <article class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-2 large-up-4">
            <div class="cell">
                <img class="thumbnail" src="https://placehold.it/500x600">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button expanded">Buy</a>
            </div>
            <div class="cell">
                <img class="thumbnail" src="https://placehold.it/500x600">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button expanded">Buy</a>
            </div>
                <div class="cell">
                <img class="thumbnail" src="https://placehold.it/500x600">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button expanded">Buy</a>
            </div>
            <div class="cell">
                <img class="thumbnail" src="https://placehold.it/500x600">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button expanded">Buy</a>
            </div>
        </div>

    </article>

    
    <?php get_footer() ?>

  </body>
</html>


  

    