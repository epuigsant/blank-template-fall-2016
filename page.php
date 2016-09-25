<?php get_header(); ?>
    <div class="row">
        <div class="twelve columns">
<!-- BEGIN PAGE PHP -->
            <?php if ( have_posts() ) {
              while ( have_posts() ) {
                /* OUR DATA CONTEXT IS DEFINE */
                the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
              }
            }?>
<!-- END PAGE PHP -->
        </div>
    </div>
<?php get_footer(); ?>
