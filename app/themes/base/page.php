<?php get_header() ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <header class="c-hero">
            <h1><?php the_title() ?></h1>
        </header>

        <main class="l-main" role="main">
            <div class="container">
                <?php the_content() ?>
            </div>
        </main>

    <?php endwhile; else: ?>

        <main class="l-main" role="main">
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ) ?></p>
        </main>

    <?php endif ?>

<?php get_footer() ?>
