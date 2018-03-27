<div>
  <h2><?php the_title(); ?></h2>
  <!-- <p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p> -->
  <?php the_content(); ?>
</div><!-- /.blog-post -->

<?php 
   echo '<img id="bottom-frame" src="data:image/jpg;base64,'.base64_encode(file_get_contents('C:\MAMP\htdocs\wordpress_bakery\wordpress\wp-content\themes\beccasbakery\assets\img\small_frame3.png')).'" />'
?>

          