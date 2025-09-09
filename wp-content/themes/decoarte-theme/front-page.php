<?php
get_header();
?>
<main class="site-main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Bienvenido a Decoarte</h1>
            <h2>Aplicaciones Gráficas Integrales</h2>
            <p>Descubre nuestros servicios personalizados</p>
            <div class="hero-buttons">
                <a href="#productos" class="btn">Ver trabajos</a>
                <a href="#contacto" class="btn">Contáctanos</a>
            </div>
        </div>
    </section>

    <!-- Sección Nosotros -->
    <section id="nosotros" class="about-section">
        <div class="container">
            <h2 class="section-title">Nosotros</h2>
            <p class="section-subtitle">Conoce más sobre nuestra empresa y experiencia</p>
            
            <div class="about-content">
                <div class="about-text">
                    <h3>Más de 10 años creando experiencias visuales únicas</h3>
                    <p>En <strong>Decoarte</strong>, somos especialistas en aplicaciones gráficas integrales con más de una década de experiencia en el mercado chileno. Nos dedicamos a transformar ideas en realidades visuales impactantes.</p>
                    
                    <p>Nuestro equipo de profesionales combina creatividad, tecnología y pasión para entregar soluciones personalizadas que superan las expectativas de nuestros clientes.</p>
                    
                    <ul class="about-features">
                        <li>Más de 10 años de experiencia en el mercado</li>
                        <li>Equipo de diseñadores y técnicos especializados</li>
                        <li>Tecnología de última generación</li>
                        <li>Atención personalizada y seguimiento post-venta</li>
                        <li>Compromiso con la calidad y los tiempos de entrega</li>
                    </ul>
                    
                    <p>Trabajamos con empresas de todos los tamaños, desde emprendedores hasta grandes corporaciones, siempre manteniendo nuestro compromiso con la excelencia y la innovación.</p>
                </div>
                
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about-us.jpg" alt="Equipo Decoarte trabajando" style="width: 100%; height: auto; border-radius: 15px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestros Servicios -->
    <section id="servicios" class="services-section">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-subtitle">Descubre nuestra amplia gama de soluciones gráficas</p>
            <div class="instagram-services-grid">
                <?php
                // Verificar si está instalado el plugin Instagram Feed
                if (shortcode_exists('instagram-feed')) {
                    echo do_shortcode('[instagram-feed cols=3 num=9 imagepadding=10px layout=grid]');
                } else {
                    echo '<div class="instagram-placeholder">';
                    echo '<p>Conoce nuestros servicios en Instagram: <a href="https://www.instagram.com/grafica.decoarte/" target="_blank">@grafica.decoarte</a></p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h2>Contáctanos</h2>
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

                <div class="contact-form">
                    <?php 
                    if (shortcode_exists('contact-form-7')) {
                        echo do_shortcode('[contact-form-7 id="a025216" title="Contact form 1"]');
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
