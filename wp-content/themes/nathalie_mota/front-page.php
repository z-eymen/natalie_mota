<?php get_header(); ?>
<div id="front-page">
    <section id="content">
        <!-- chargement du Hero -->
        <?php get_template_part('template-parts/header/hero'); ?>

        <!-- chargementdes filtres -->
        <?php get_template_part('template-parts/post/photo-filter'); ?>

        <?php
        // Initialisation de variable pour les filtres de requettes Query
        $categorie_id = "";
        $format_id = "";
        $order = "";
        $orderby = "date";


     
      
        $custom_args = array(
            'post_type' => 'photo',
            // 'posts_per_page' => 8,
            'posts_per_page' => get_option('posts_per_page'), // Valeur par défaut
            'order' => $order, // "", ASC , DESC 
            'orderby' =>  $orderby, // 'date' , 'meta_value_num', rand
            'paged' => 1,
            'meta_query'    => array(
                'relation'      => 'AND',
                array(
                    'key'       => 'categorie-acf',
                    'compare'   => 'LIKE',
                    'value'     =>  $categorie_id,
                ),
                array(
                    'key'       => 'format-acf',
                    'compare'   => 'LIKE',
                    'value'     => $format_id,
                )
            ),
            'nopaging' => false,
        );
        //On crée ensuite une instance de requête WP_Query basée sur les critères placés dans la variables $args
        $query = new WP_Query($custom_args);
        $max_pages = $query->max_num_pages;

        

        ?>

    </section>
</div>

<?php get_footer(); ?>