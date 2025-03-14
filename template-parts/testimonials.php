<?php 
$testimonials_section = get_field('general_testimonials', 'option');
if ($testimonials_section) : ?>
<section class="testimonial_section">
        <?php if (!empty($testimonials_section['section_heading'])) : ?>
                        <h2><?php echo esc_html($testimonials_section['section_heading']); ?></h2>
        <?php endif; ?>
    <div id="splide" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php if (!empty($testimonials_section['testimonials'])) : ?>
                    <?php foreach ($testimonials_section['testimonials'] as $testimonial) : ?>
                        <?php if (!empty($testimonial['tesimony_image'])) : ?>
                            <li class="splide__slide">
                                <img src="<?php echo esc_url($testimonial['tesimony_image']); ?>">
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="loader-btn">
        <div id="circle-loader-wrap">
            <div class="left-wrap">
                <div class="loader"></div>
            </div>
            <div class="right-wrap">
                <div class="loader"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
