<?php
/**
 * El template principal
 * 
 * @package Decoarte
 */

get_header();
?>

<main class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
                        endif;
                        ?>
                    </header>

                    <div class="entry-content">
                        <?php
                        if (is_singular()) :
                            the_content();
                        else :
                            the_excerpt();
                            ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                Leer más
                            </a>
                        <?php
                        endif;
                        ?> 
                    </div>
                </article>
                <?php
            endwhile;

            // Navegación de entradas
            the_posts_navigation([
                'prev_text' => '← Entradas anteriores',
                'next_text' => 'Entradas siguientes →',
            ]);

        else :
            ?>
            <article class="no-results">
                <header class="entry-header">
                    <h1 class="entry-title">No se encontró contenido</h1>
                </header>

                <div class="entry-content">
                    <p>Lo sentimos, no se encontró el contenido que buscas.</p>
                </div>
            </article>
        <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>
