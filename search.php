<?php get_header(); ?>

<section class="page">
    <div class="container">
        <h1>Search Results For: '<?php echo get_search_query(); ?>'</h1>
        <?php get_template_part('includes/section', 'search'); ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</section>

<?php get_footer(); ?>