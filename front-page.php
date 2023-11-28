<?php 
    get_header();
?>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    
 
    <?php the_content(); ?>
    <section class="about">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                <h1>Qui-suis-je</h1>
                <p>Je m'appelle Marchand Christophe, agé de 28 ans, </p>
                <a class="btn btn-dark" href="a-propos.html" target="_blank">En savoir plus</a>
            </div> 
            <div class="col-12 col-md-6">
                <img src="http://localhost/wordpress/wp-content/uploads/2023/11/Christophe.png" alt="placeholder">
            </div>           
        </div>
    </div>
</section>
<section class="competence">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h2>Compétences</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-6">
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li>Bootstrapt</li>
                    <li>Git-Hub</li>
                    <li>Figma</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="projet mb-4">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h2>Projet</h2>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/site.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Reproduction d'un site</h5>
                      <p class="card-text">J'ai utilisé HTML,CSS,JS et bootstrapt.</p>
                      <a href="#" class="btn btn-warning">Go somewhere</a>                
                    </div>
                </div>                
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/site-tom-brady.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Premier brief</h5>
                      <p class="card-text">HTML,CSS</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>                
                    </div>
                </div>                
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/formulaire.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Formulaire</h5>
                      <p class="card-text">HTML,CSS,BOOTSTRAP,JS</p>
                      <a href="#" target="_blank" class="btn btn-primary">Go somewhere</a>                
                    </div>
                </div>                
            </div>            
        </div>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6">
                <h3>Contact</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-6 ">
                <a href="contact.html" class="btn btn-dark">Contactez moi</a>
            </div>
        </div>
    </div>
</section>
   
   <?php endwhile; ?>
 
    <?php endif; ?>
    <?php 
    //recupere le contenu
    get_footer(); ?>
  </body>
</html>