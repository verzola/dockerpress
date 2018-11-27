<?php get_header() ?>

<main class="l-main container" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <article class="c-article-card">
            <?php the_post_thumbnail('medium', ['class' => 'c-article-card__image']) ?>

            <div class="c-article-card__content">
                <header>

                    <div class="c-article-card__meta clearfix">
                        <img class="c-article-card__avatar" src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" />
                        <div class="c-article-card__author"><?php the_author() ?></div>
                        <time class="c-article-card__time"><?php the_time( get_option( 'date_format' ) ) ?></time>
                    </div>

                    <h1 class="c-article-card__title"><?php the_title() ?></h1>
                </header>

                <?php the_excerpt() ?>

                <a class="c-button" href="<?php echo get_permalink() ?>">Read more</a>
            </div>

        </article>

    <?php endwhile; else: ?>

        <article>
            <p>Nothing to see.</p>
        </article>

    <?php endif; ?>

</main>

<?php get_footer();
