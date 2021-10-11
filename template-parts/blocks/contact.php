<?php

$className = 'contact';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className) ?>">
    <?php if (have_rows('contact')) : ?>
        <?php while (have_rows('contact')) : the_row(); ?>
            <h2><?php the_sub_field('contact'); ?></h2>
        <?php endwhile; ?>
    <?php endif; ?>

</div>