    <div class="container-fluid sd-footer py-2">
        <div class="row align-items-center">
            <div class="col-12 py-4 px-4 sd-copyright">
                <?php 
                    if(is_active_sidebar('footer-widget-copyright')):
                        dynamic_sidebar('footer-widget-copyright');
                    endif;
                ?>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->
    <?php wp_footer(); ?>
</body>
</html>