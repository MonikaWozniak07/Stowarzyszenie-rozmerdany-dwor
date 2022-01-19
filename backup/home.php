<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
?>

<?php get_header(); ?>

<section>
    <div class="container">
        <div style="background:yellow">home.php</div>
        <?php
        while(have_posts()) { ?>
        <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php the_content(); ?>
        <?php }
        ?>
    </div>
</section>

<?php get_footer(); ?>