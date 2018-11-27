<?php get_header() ?>

<main class="l-main container" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <article class="c-article">
            <header>
                <?php the_post_thumbnail() ?>
                <h1><?php the_title() ?></h1>
                <time><?php the_time( get_option( 'date_format' ) ) ?></time>
                <div class="c-article__author"><?php the_author() ?></div>
                <div class="c-article__category"><?php the_category() ?></div>
                <div class="c-article__tags"><?php the_tags() ?></div>
            </header>

            <?php the_content() ?>
        </article>

    <?php endwhile; else: ?>

        <article>
            <p>Nothing to see.</p>
        </article>

    <?php endif; ?>

    <?php get_sidebar() ?>

</main>

<?php get_footer();
