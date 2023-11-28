<?php 
    get_header();
?>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <h1><?php the_title(); ?></h1>
 
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
   <?php endwhile; ?>
 
    <?php endif; ?>
    <?php 
    //recupere le contenu
    get_footer(); ?>
  </body>
</html>