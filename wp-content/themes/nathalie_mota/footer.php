<?php

/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage nathalie_mota
 */
?>


<?php wp_footer() ?>


<footer id="footer">

    <!-- Affichage du menu déclaré dans function.php  -->

    <?php wp_nav_menu(
        [
            'theme_location'  => 'menu-footer',
            'menu_class'      => 'footer'
        ]
    );
    ?>
   

</footer>
<!-- Lance la popup contact  -->

<?php get_template_part('template-parts/modal/contact'); ?>

<?php wp_footer(); ?>

</body>

</html>