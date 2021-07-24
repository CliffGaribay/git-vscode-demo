<!-- This is for the wordpress Pages. -->

<!-- Adds the content from the header.php file. -->
<?php get_header(); ?>

<?php

    while(have_posts()) { // The "have_posts()" is a Wordpress function.
        // The "have_posts()" is a Wordpress function.
        the_post(); ?>

        <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg');  ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>TODO: DON'T FORGET TO REPLACE ME LATER.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">

    <?php  
      // Using the code below, if the post doesn't have a parent then it will always output "0"
      // echo wp_get_post_parent_id(get_the_ID());

      

    ?>

      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main"><?php the_title();  ?></span>
        </p>




      </div>

      
      <!-- <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>  -->
     

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
        
        <?php 
    }
    
?>

<!-- Adds the content from the header.php file. -->
<?php get_footer(); ?>