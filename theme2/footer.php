
        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>
                &copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            
            <?php foreach($footers = wp_get_nav_menu_items('footer-menu') as $footer):?>
            &middot; <a href="<?= $footer->url ?>"><?= $footer->title ?></a>
            <?php endforeach; ?>
            </p>
        </footer>
    </main>

    <!-- Ingration , Bootstrap, jquery, JavaScript
    ================================================== -->

    <?php wp_footer() ?>

</body>

</html>