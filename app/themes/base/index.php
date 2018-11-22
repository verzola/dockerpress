<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :

?>

    <h2><?php the_title() ?></h2>
    <?php the_post_thumbnail() ?>
    <?php the_post() ?>
    <?php the_excerpt() ?>

<?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'devhub' );
endif;

get_sidebar();

get_footer();
