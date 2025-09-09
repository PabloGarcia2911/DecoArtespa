<?php
/**
 * Footer template
 */
?>
<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * Footer template
 */
?>
<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
        <nav class="footer-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => 'footer-menu',
                'fallback_cb' => false
            ]);
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
