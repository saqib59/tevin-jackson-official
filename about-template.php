<?php
/**
 * Template Name: About
 */

get_header(); ?>

<main id="main-content">
    <section class="flex h-screen justify-center items-center">
        <h1 class="text-3xl font-bold underline text-clifford">
        About us !
        </h1>
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
