<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= wp_title('.', false, 'right') . get_bloginfo('name') ?></title>
</head>
<body>
<header>
    <h1><?= get_bloginfo('name') ?></h1>
    <p><?= get_bloginfo('description') ?></p>
</header>

<main>
    <h2>Bienvenue sur mon site&nbsp;!</h2>
    <?php
    //On ouvre la boucle (the loop) la structure de contrôle de contenu propre à wordpress
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?= get_the_title();?></h2>
        <div class="wysiwyg"><?= get_the_content(); ?></div>
    <?php
    //On ferme la boucle
    endwhile; else: ?>
        <p>Pas de contenu à afficher</p>
    <?php endif; ?>
</main>
</body>
</html>
