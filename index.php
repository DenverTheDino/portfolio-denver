<?php 
    get_header();
?>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    
 
    <?php the_content(); ?>
    
   <?php endwhile; ?>
 
    <?php endif; ?>
    <?php 
    //recupere le contenu
    get_footer(); ?>
  </body>
</html>