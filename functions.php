<?php

function enqueue_myportfolio_script()
{

    // Enqueue le CSS
    wp_enqueue_style('myportfolio-style', get_stylesheet_directory_uri() . '/style.css');
    // Enqueue le script JavaScript
    wp_enqueue_script('myportfolio-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_myportfolio_script');



if (!function_exists('webtion_slider_o')) {
    function webtion_slider_o($file_list_meta_key, $img_size = 'full')
    {
        // Get the list of files
        $files = get_post_meta(get_the_ID(), $file_list_meta_key, 1);

        // Loop through them and output an image
        foreach ((array) $files as $attachment_id => $attachment_url) {
            echo '<div class="gitem">';
            echo wp_get_attachment_image($attachment_id, $img_size);
            echo '<div class="prot_content"><div class="prot_content_inner"><div class="picon">
                    <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="' . $attachment_url . '">
                        <i class="fas fa-arrows-alt"></i>
                    </a>
                   </div></div></div>';
            echo '</div>';
        }
    }
}
