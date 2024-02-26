<footer id="colophon">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <?php
                // Display the navigation menu
                wp_nav_menu(array(
                    'theme_location' => 'footer-1', // This should match the menu location defined in your theme
                    'container' => 'nav',
                    'container_class' => 'footer-1',
                    'menu_class' => 'menu',
                    'fallback_cb' => false // If no menu is assigned to the location, do not fallback to wp_page_menu()
                ));
            ?>
            </div>
            <div class="col-sm-4">
            <?php
                // Display the navigation menu
                wp_nav_menu(array(
                    'theme_location' => 'footer-2', // This should match the menu location defined in your theme
                    'container' => 'nav',
                    'container_class' => 'footer-2',
                    'menu_class' => 'menu',
                    'fallback_cb' => false // If no menu is assigned to the location, do not fallback to wp_page_menu()
                ));
            ?>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>

</footer>

<script>

    const mobileNavigation = document.getElementById("mobile-navigation");
    function toggleMenu() {
        mobileNavigation.classList.toggle("visible");
        console.log("toggle");
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
