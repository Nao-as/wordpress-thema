<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * 
 */
// @subpackage Twenty_Nineteen
//  * @since Twenty Nineteen 1.0
?>
<footer id="footer" class="footer">
    <div class="footer-inner">
        <div class="footer-nav-wrap">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav',
                'container' => 'nav',
                'container_class' => 'footer-nav',
                'container_id' => 'footer-nav',
                'fallback_cb' => ''
            )); ?>
        </div>

        <div class="copyright">
            <p>© 2016 <?php bloginfo('name'); ?></p>
        </div>
    </div>
    <!--end footer-inner-->
</footer>

<?php wp_footer(); ?>
</body>

</html>