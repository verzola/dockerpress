<?php get_header() ?>

<main role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <div class="c-article">
            <header class="c-hero">
                <h1><?php the_title() ?></h1>
            </header>

            <main class="l-main" role="main">
                <div class="c-article__content container">
                    <?php the_content() ?>
                </div>
            </main>
        </div>

    <?php endwhile; else: ?>

        <main class="l-main" role="main">
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ) ?></p>
        </main>

    <?php endif ?>

</main>

<?php get_footer() ?>
