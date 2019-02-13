<?php get_header(); ?>

<div class="">

  <div class="main-content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/page/content', get_queried_object()->post_name ); ?>
  <?php endwhile; ?>
  </div> <!-- /.blog-main -->

</div> <!-- /.row -->

<?php get_footer(); ?>