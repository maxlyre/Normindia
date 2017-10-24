<div id="header-img" class="row expanded">
  <?php $image = get_field('header_image');
    ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
</div>
