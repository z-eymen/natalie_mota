<!-- Wrap Slider Area -->
<section class="hero">
    <div class="hero-thumbnail">
        <!-- initialisation de post à afficher -->

        <?php
        $custom_args = [
            'post-type'     => 'photo',
            'orderby'       => 'rand',
            'post-per-page' => 1
        ];
        //création d'une instance de requête WP_Query

        $query_hero = new WP_Query($custom_args);
        ?>

        <!-- Récupérer les photos random -->
        <?php while ($query_hero->have_posts()) : ?>
            <?php $query_hero->the_post(); ?>

            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"> <?php the_post_thumbnail('hero'); ?></a>
            <?php endif; ?>
        <?php endwhile; ?>

        <h1><?php bloginfo('description'); ?></h1>
    </div>
</section>
<?php
//Réinitialise à la requête princpale
wp_reset_postdata();

?>