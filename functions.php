<?php 

/** Ajouter un menu à son site */
  function register_my_menu(){
      register_nav_menu( 'main-menu', 'Menu principal' );
    }
      add_action( 'after_setup_theme', 'register_my_menu' );
 
 
 
      /**Brief n°4 */


function apprenants_2_register_post_types(){
  /**CPT APPRENANTS  2*/
  $labels = array(
    'name'=> 'Apprenants-2',
    'all_items'=> 'Tous les Apprenants-2',
    'singular_name'=> 'Apprenant-2',
    'add_new_item'=> 'Ajouter un apprenant',
    'edit_item'=> 'Modifier apprenant',
    'menu_name'=> 'Apprenants-2',
  );
  $args = array(
  'labels'=> $labels,
  'public'=> true,
  'show_in_rest'=> true,
  'has_archive'=> true,
  'supports'=> array ('title','editor','thumbnail'),
  'menu_position'=> 20,
  'menu_icon'=> 'dashicons-admin-generic',
  
  );

  register_post_type('apprenants_2',$args);
  //* Déclaration de la taxonomie formation*/
  $labels = array(
    'name'=>'Formation',
    'new_item_name'=>'Intitulé formation',
    'parent_item' => 'Formation parent',
  );
  $args = array(
    'labels'=> $labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,
  );
  register_taxonomy('formation2','apprenants_2',$args);

  $labels = array(
    'name'=>'Promotion',
    'new_item_name'=>'année promotion',
    'parent_item' => 'promotion parent',
  );
  $args = array(
    'labels'=> $labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,
  );
  register_taxonomy('promotion2','apprenants_2',$args);

  $labels = array(
    'name'=>'Compétences',
    'new_item_name'=>'intitulé compétences',
    'parent_item' => 'compétences parent',
  );
  $args = array(
    'labels'=> $labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,
  );
  register_taxonomy('competences2','apprenants_2',$args);
  
}
  add_action('init','apprenants_2_register_post_types');
  

  

?>



 