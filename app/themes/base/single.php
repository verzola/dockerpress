<?php get_header() ?>

<main class="l-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <article class="c-article">
            <header class="c-hero">
                <h1><?php the_title() ?></h1>

                <div class="c-author clearfix">
                    <img class="c-author__photo" src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" />
                    <div class="c-author__name"><?php the_author() ?></div>
                    <time class="c-article__time"><?php the_time( get_option( 'date_format' ) ) ?></time>
                </div>

            </header>

            <div class="c-article__content container">
                <?php the_content() ?>
            </div>
        </article>

    <?php endwhile; else: ?>

        <article>
            <p>Nothing to see.</p>
        </article>

    <?php endif; ?>

    <?php get_sidebar() ?>

</main>

<?php get_footer();
