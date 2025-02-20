<?php
//Désactiver l'éditeur de contenu en block (Gutenberg) de Wordpress
// pour revenir à une version ancienne qui nous convient mieux :


// Disable Gutenberg on the back end.
add_filter('use_block_editor_for_post', '__return_false');

// Disable Gutenberg for widgets.
add_filter('use_widgets_block_editor', '__return_false');

// Disable frontend style injections
add_action('wp_enqueue_scripts', function () {
    // Remove CSS on the front end.
    wp_dequeue_style('wp-block-library');

    // Remove Gutenberg theme.
    wp_dequeue_style('wp-block-library-theme');

    // Remove inline global CSS on the front end.
    wp_dequeue_style('global-styles');
}, 20);

//Activer l'utilisation d'image de "couverture" sur les post-types custom
add_theme_support('post-thumbnails', ['recipe']);

//Enregistrer de nouveaux types de contenus qui seront stockés dans
// la table "wp_posts" avec un id de type spécifique dans la colonne "post_type"

register_post_type('recipe', [
    'label' => 'Recettes',
    'description' => 'Les recettes ramenées de notre périple',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-carrot',
    'rewrite' => [
        'slug' => 'recettes',
    ],
    'supports'=>['title','editor','excerpt','thumbnail']
]);