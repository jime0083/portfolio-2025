<footer id="colophon" class="site-footer">
    <div class="site-info">
        &copy; <?php echo date( 'Y' ); ?> Hajime Kurita
    </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('mobile-menu-toggle');
    var mobileNav = document.getElementById('mobile-navigation');
    var menuClose = document.getElementById('mobile-menu-close');

    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', function() {
            mobileNav.classList.add('is-open');
        });
    }

    if (menuClose && mobileNav) {
        menuClose.addEventListener('click', function() {
            mobileNav.classList.remove('is-open');
        });
    }
});
</script>
<?php wp_footer(); ?>
</body>
</html>
