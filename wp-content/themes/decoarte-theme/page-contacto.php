<?php
/**
 * Template Name: Página de Contacto
 */

get_header();
?>

<main class="site-main">
    <section class="contact-page">
        <div class="container">
            <div class="contact-info-section">
                <h1 class="page-title">Contáctanos</h1>
                <p class="contact-subtitle">Estamos aquí para ayudarte</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Santiago, Chile</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+569 8675 4131</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>agi.decoarte@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="contact-form-container">
                <?php 
                if (shortcode_exists('contact-form-7')) {
                    echo do_shortcode('[contact-form-7 id="2" title="Formulario de contacto"]');
                } else {
                    echo '<p>Por favor, instala y activa el plugin Contact Form 7 para usar el formulario de contacto.</p>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
