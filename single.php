<?php get_header(); ?>

<!-- Begin Section Content -->
  <section class="row">
    <div class="twelve columns">
<!-- BEGIN LOOP -->
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
    /* OUR DATA CONTEXT IS DEFINED */
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

          <?php
        } //end while
      }//end if
?>
<!-- END LOOP -->
    </div>
  </section>
<!-- End Section Container -->

<?php get_footer(); ?>
