<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Nathalie Mota</title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header id="header" class="header flexrow">
        <div class="container-header flexrow" >
            <a href="<?php echo home_url('/'); ?>" aria-label="Page d'accueil de Nathalie Mota">
                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Logo.png" alt="Logo <?php echo bloginfo('name'); ?>">
            </a>

            <nav id="navigation">

            <!-- Affichage du menu déclaré dans function.php  -->

            <?php wp_nav_menu([
                    'theme_location'  => 'menu-header',
                    'menu_class'      => 'navigation'
                ]
            );
            ?>   
            </nav>
        </div>
    </header>