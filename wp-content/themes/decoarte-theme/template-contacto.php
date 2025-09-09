<?php
/**
 * Template Name: Plantilla de Contacto
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
                        <a href="tel:+56986754131">+569 8675 4131</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:agi.decoarte@gmail.com">agi.decoarte@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="contact-form-container">
                <h2>Envíanos un mensaje</h2>
                <?php echo do_shortcode('[contact-form-7 id="2" title="Formulario de contacto"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
