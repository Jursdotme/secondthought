<?php // Custom Excerpts
function secondthoughtwp_index($length) // Create 20 Word Callback for Index page Excerpts, call using secondthoughtwp_excerpt('secondthoughtwp_index');
{
    return 50;
}

// Create 40 Word Callback for Custom Post Excerpts, call using secondthoughtwp_excerpt('secondthoughtwp_custom_post');
function secondthoughtwp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function secondthoughtwp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output;
    echo $output;
}

// Custom View Article link to Post
function secondthought_view_article($more)
{
    global $post;
    return '...</p><a class="read-more" href="' . get_permalink($post->ID) . '">' . __('Read more', 'secondthought') . '</a>';
} ?>
