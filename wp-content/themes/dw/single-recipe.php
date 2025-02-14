<?php get_header(); ?>
<h2>A propos de moi&nbsp;!</h2>
<?php
//On ouvre la boucle (the loop) la structure de contrôle de contenu propre à wordpress
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?= get_the_title(); ?></h2>
<p><?= get_the_excerpt()?></p>
    <div class="recipe">
        <aside class="recipe_ingredients">
            <div>
                <h3>Ingrédients</h3>
                <p>A compléter...</p>
            </div>
            <figure class="recipe_fig">
                <?= get_the_post_thumbnail(size:'medium') ?>
            </figure>
        </aside>
        <section class="recipe_steps">
            <h3>Etapes</h3>
            <div><?= the_content() ?></div>
        </section>
    </div>
<?php
    //On ferme la boucle
endwhile;
else: ?>
    <p>Cette recette n'existe pas</p>
<?php endif; ?>
<?php get_footer(); ?>
