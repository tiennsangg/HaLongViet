<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hazo
 */

?>

<?php the_field('script_body', 'option'); ?>
<?php wp_footer(); ?>

<div class="back-to-top">
    <?php echo svg('back-top', '18', '18') ?>
</div>
</body>

</html>