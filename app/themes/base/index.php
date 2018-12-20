<?php get_header() ?>

<div class="c-hero">
    <h1><i class="fas fa-newspaper"></i> Posts</h1>
</div>

<main role="main">

    <div class="container c-grid">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

            <article class="c-card c-grid__item">
                <?php if (has_post_thumbnail()): ?>
                <div class="c-card__image">
                    <?php the_post_thumbnail('medium', ['class' => 'c-card__image']) ?>

                    <div class="c-author clearfix">
                        <img class="c-author__photo" src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" />

                        <div class="c-author__name"><?php the_author() ?></div>

                        <time class="c-card__time"><?php the_time( get_option( 'date_format' ) ) ?></time>
                    </div>
                </div>
                <?php endif ?>

                <div class="c-card__content">
                    <header>
                        <h2 class="c-card__title"><?php the_title() ?></h2>

                        <?php if (!has_post_thumbnail()): ?>
                            <div class="c-author clearfix">
                                <img class="c-author__photo" src="<?php echo get_avatar_url(get_the_author_meta('ID')) ?>" />

                                <div class="c-author__name"><?php the_author() ?></div>

                                <time class="c-card__time"><?php the_time( get_option( 'date_format' ) ) ?></time>
                            </div>
                        <?php endif ?>
                    </header>

                    <div class="c-card__excerpt"><?php the_excerpt() ?></div>

                    <a class="c-button" href="<?php echo get_permalink() ?>">Read more</a>
                </div>
            </article>

        <?php endwhile; else: ?>

            <article>
                <p>Nothing to see.</p>
            </article>

        <?php endif ?>

    </div>

</main>

<?php get_footer();
