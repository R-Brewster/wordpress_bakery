<div class="top-bar">
  <div class="top-bar-left">
    <ul class="menu">
      <li class="menu-text"><a href="<?php echo get_bloginfo('wpurl');?>"><?php echo get_bloginfo('name'); ?></li>
    </ul>
  </div>
  <div class="top-bar-right" >
    <ul class="menu">
      <?php wp_list_pages('&title_li='); ?>
    </ul>
  </div>
</div>