<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<main id="main-content">
    <section class="hero">
        <h1>Welcome to My Custom Home Page</h1>
        <p>This is a home page template.</p>
    </section>

    <section class="fd-content content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
