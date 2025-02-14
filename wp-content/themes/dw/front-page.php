<?php get_header(); ?>
<h2>Bienvenue sur mon site&nbsp;!</h2>
<?php
//On ouvre la boucle (the loop) la structure de contrôle de contenu propre à wordpress
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?= get_the_title(); ?></h2>
    <div class="wysiwyg"><?= get_the_content(); ?></div>
<?php
    //On ferme la boucle
endwhile;
else: ?>
    <p>Pas de contenu à afficher</p>
<?php endif; ?>
<?php get_footer(); ?>
