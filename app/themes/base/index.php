<?php get_header(); ?>

<main role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>
            <header>
                <?php the_post_thumbnail() ?>
                <h1><?php the_title() ?></h1>
            </header>

            <?php the_content() ?>
        </article>

    <?php endwhile; else: ?>

        <article>
            <p>Nothing to see.</p>
        </article>

    <?php endif; ?>

    <?php get_sidebar(); ?>

</main>

<?php get_footer();
