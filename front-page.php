<?php 
    get_header();
?>
    
    <section class="about">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-md-6">
                <h1>Qui-suis-je</h1>
                <p>Je m'appelle Marchand Christophe, agé de 28 ans, je viens de Paris je suis installé depuis peu en Lozère </p>
                <a class="btn btn-dark" href="http://localhost/wordpress/a-propos/" target="_blank">En savoir plus</a>
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
                    <img src="http://localhost/wordpress/wp-content/uploads/2023/11/site.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Reproduction d'un site</h5>
                      <p class="card-text">J'ai utilisé HTML,CSS,JS et bootstrapt.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>                
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
                <a href="http://localhost/wordpress/contact/" class="btn btn-dark">Contactez moi</a>
            </div>
        </div>
    </div>
</section>
   

    <?php 
    //recupere le contenu
    get_footer(); ?>
  </body>
</html>