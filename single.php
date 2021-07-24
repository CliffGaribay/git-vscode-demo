<!-- This is for the single blog posts. -->

<!-- Adds the content from the header.php file. -->
<?php get_header(); ?>

<?php

    while(have_posts()) { // The "have_posts()" is a Wordpress function.
        // The "have_posts()" is a Wordpress function.
        the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        
        <?php 
    
    get_footer();
?>

<!-- Adds the content from the header.php file. -->
<?php get_footer(); ?>