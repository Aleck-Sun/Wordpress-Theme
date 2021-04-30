<?php

if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>

        <div class="card">
            <?php if(has_post_thumbnail()):?>
                <img class="card-img-top" src="<?php the_post_thumbnail_url('blog-small'); ?>" />
            <?php endif; ?>
            <h2 class="card-header"><?php the_title(); ?></h2>
            <div class="card-body">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">Read More</a>
            </div>
        </div>
 
    <?php }
}

?>