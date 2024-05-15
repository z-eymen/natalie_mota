<?php get_header(); 
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage nathalie_mota theme
 */
?>

<div id="wrap">
    <section id="content">
        <h1>Nathalie Mota - Blog</h1>
        <!-- Vérification s'il y a au moins 1 article -->
        <?php  if (have_posts()): ?>
            <div id="loop">
                <?php while(have_posts()): the_post(); ?>
                    <article>
                        <h2> <?php the_title(); ?> </h2>
                        <p>
                            Publié le <?php the_time('d/m/y') ?>

                            <!-- is_page() permet de déterminer si la page en cours est une page  -->
                            <?php if (!is_page()): ?> dans <?php the_category(', '); ?>
                                <?php endif;  ?>
                        </p>

                            <!-- is_page() permet de déterminer si la page en cours est un post/article  -->
                            <?php if(is_singular()): ?>
                                <?php the_content(); ?>
                            <?php else : ?>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>"> Lire la suite</a>
                            <?php endif; ?>
                    </article>
                <?php endwhile; ?>
            </div>
            <div id="pagination">

                <!-- Afficher le système de pagination (s'il existe de nomreux articles) -->
                <?php echo paginate_links(); ?>                   
            </div>

        <?php else: ?>
            <p> Aucun résultat </p>
        <?php endif; ?>    

    </section>

</div>

<?php get_footer(); ?>

