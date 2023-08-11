<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>
<p <?php echo get_block_wrapper_attributes(); ?>>
    <?php /* esc_html_e('This is a test from render.php - Hello Dolly Block – hello from a dynamic block!', 'hello-dolly-block'); */ ?>
    <?php echo hello_dolly_render_lyric() . "hello" ?>
</p>
