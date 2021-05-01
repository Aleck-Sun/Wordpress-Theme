<?php get_header(); ?>

<section class="page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php 
                if(is_active_sidebar('blog-sidebar')){
                    dynamic_sidebar('blog-sidebar');
                }
                ?>
            </div>
            <div class="col-10">
                <h1><?php echo single_cat_title();?></h1>
                <?php get_template_part('includes/section', 'archive'); ?>
                <?php previous_posts_link(); ?>
                <?php next_posts_link(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>