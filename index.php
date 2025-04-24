<?php get_header(); ?>

<section class="notfound">
        
        <div class="breadcrumd">
            <?php
            if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    
</section>


<?php get_footer(); ?>