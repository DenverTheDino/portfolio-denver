<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="contact__text">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-12 p ">  
                    <h2>Si vous souhaitez me contacter veuillez remplir vos coordonnés si dessous</h1>
                    <?php the_content(); ?>
                </div>
            </div>    
        </div>
    </section>
  
    
            
    
    
    <?php wp_link_pages(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
  </body>
</html>