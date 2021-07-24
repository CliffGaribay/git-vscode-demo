<!-- This file allows me to have a conversation with the Wordpress system. -->

<?php  

function university_files() {
    // Calls the javascript for the slider on the home page.
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    // Calls the fonts from Google.
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // Calls the "Social Media" icons into the "Connect With Us" footer area.
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // This calls the CSS files that came with the course.
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    
}

// This function requires two arguments to work.
add_action('wp_enqueue_scripts','university_files');


// This adds the name of the HTML into the browser tab
function university_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');





?>