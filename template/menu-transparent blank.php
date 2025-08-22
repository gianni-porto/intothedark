<?php
  /*
  *
  * Template Name: Menu Transparent blank
  *
  */
?>



<?php get_header(); ?>




<?php if (have_posts()): ?> <?php while (have_posts()): the_post(); ?>

<?php /* Image Url */
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>



<main class="grid grid__center" id="main-content" role="main" tabindex="-1">

  <div class="col-100">

      <?php the_content(); ?>

  </div>

</main>

<?php endwhile; else: ?>

<p>
  <?php esc_html_e('Sorry, no posts matched your criteria.', 'intothedark'); ?>
</p>

<?php endif; ?>

<?php get_footer();   ?>