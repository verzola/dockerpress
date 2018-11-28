<?php get_header() ?>

<main class="l-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <header class="c-hero">
            <h1><?php the_title() ?></h1>
        </header>

        <div class="container">
            <?php the_content() ?>
        </div>

    <?php endwhile; else: ?>

        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

    <?php endif; ?>

    <?php get_sidebar() ?>

</main>

<?php get_footer();
