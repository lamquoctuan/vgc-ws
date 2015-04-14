<?php
get_header();
?>
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="container-inner">
                <div class="main">
                    <div class="row">
                        <?php
                        get_sidebar('product');
                        get_template_part('templates/products/list','taxonomy');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>