<?php

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <?php
            $firstName = get_the_author_meta( 'first_name' );
            $lastName = get_the_author_meta( 'last_name' );
            $date = get_the_date('d/m/Y');
        ?>
        <p>By: <?php echo $firstName." " .$lastName." | ".$date; ?></p>

        <?php the_content(); ?>

        <?php
            $tags = get_the_tags();
            if ($tags): foreach($tags as $tag):
        ?>
            <a href="<?php echo get_tag_link($tag->term_id);?>" class="btn btn-secondary btn-sm">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; else: endif; ?>
        <?php wp_link_pages(); ?>
        <br></br>
        <?php comments_template(); ?>

    <?php }
}

?>
