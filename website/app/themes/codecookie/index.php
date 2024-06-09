<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Codecookie
 */
get_header();
?>
    <h1>Index de codeCookie</h1>
    <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a> - <?php the_author() ?></li>
        <?php endwhile ?>
    <?php endif ?>
<?php
get_footer();