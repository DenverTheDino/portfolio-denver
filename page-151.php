<?php 
// récupérer le contenu du fichier header.php
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<section class="mine__banner">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-md-6 image">
                <img src="http://localhost/wordpress/wp-content/uploads/2023/11/Christophe.png" alt="placeholder">
            </div>           
            <div class="col-12 col-md-6 pt-5">
                <h1>Mon parcours</h1>
                <p class="pt-5">J'ai effectué des études de Technicien Conseil Vente en Animalerie ou j'ai obtenu mon diplome, suite a cela,
                j'ai pu travailler dans différents types de magasins divers et varié. En fin juillet 2023, j'ai deménagé en Lozère pour changer de vie
                grâce a une association qui m'a aider a m'y installer.Fin Aoüt le temps de trouver mes marques, j'ai effectué une info collective pour une formation de dévellopeur Web et Web Mobile ou j'ai été retenu;je suis
                actuellement en plein dans cette formation quand j'écris ce portofolio
                </p>                        
            </div>                     
        </div>
    </div>
</section>
<section class="mine__competence">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h2>Profil</h2>
            </div>
        </div>
        <div class="row text-center pt5 pb-5">
            <div class="col-12 col-md-6">
                <ul>
                    <li>Ponctuel</li>
                    <li>Aime apprendre</li>
                    <li>Bonne notion en BOOTSTRAP</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li>Autonome</li>
                    <li>dynamique</li>
                    <li>Adaptabilité</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mine__hobbies">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h2>Hobbies</h2>
            </div>
        </div>
        <div class="row text-center pt-5 pb-5">
            <div class="col-12 col-md-6">
                <ul>
                    <li>Ornithologie</li>
                    <li>Nouvelles technologie</li>
                    <li>Jeux Videos</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li>Handball</li>
                    <li>Tennis de table </li>
                    <li>Football américain</li>
                </ul>
            </div>
        </div>
    </div>
</section>       

        <?php wp_link_pages(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
<?php 
//le contenu du footer
get_footer(); ?>