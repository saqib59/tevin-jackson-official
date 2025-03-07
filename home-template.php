<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<main id="main-content">
    <section class="flex h-screen">
        <h1 class="text-3xl font-bold justify-center items-center underline text-clifford">
        Flipping Detroit !
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
