<?php 
    get_header();
?>
    
    <section class="about">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                <h1>Qui-suis-je</h1>
                <p> 
                    <?php $post = get_post(177) ?>
                    <?php echo $post->post_content;?> 
                </p>
                <a class="btn btn-dark" href="http://localhost/wordpress/a-propos/" target="_blank">En savoir plus</a>
            </div> 
            <div class="col-12 col-md-6">
                <img src="http://localhost/wordpress/wp-content/uploads/2023/11/Christophe.png" alt="Une photo de moi">
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
<section class="projet ">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h2>Projet</h2>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/site.png" class="card-img-top" alt="site réalisé">
                    <div class="card-body">
                      <h5 class="card-title">Reproduction d'un site</h5>
                      <p class="card-text">J'ai utilisé HTML,CSS,JS et bootstrapt.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>                
                    </div>
                </div>                
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/site-tom-brady.png" class="card-img-top" alt="premier brief">
                    <div class="card-body">
                      <h5 class="card-title">Premier brief</h5>
                      <p class="card-text">HTML,CSS</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>                
                    </div>
                </div>                
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/formulaire.png" class="card-img-top" alt="formulaire crée">
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

        
   

    <?php 
    //recupere le contenu
    get_footer(); ?>
  </body>
</html>