<?php

$replyText = '<span class="fa fa-reply"></span> ' . __('Reply', 'secondthought');

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}


// Custom Gravatar in Settings > Discussion
function secondthought_gravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function secondthought_comments($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  global $replyText;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">

      <?php if ( 'div' != $args['style'] ) : ?>

      <div id="div-comment-<?php comment_ID() ?>" class="comment-body">

      <?php endif; ?>

      <div class="comment-author vcard">

      <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 180 ); ?>

      </div>

      <div class="comment-content">

        <?php if ($comment->comment_approved == '0') : ?>
          <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'secondthought') ?></em>
          <br />
        <?php endif; ?>

        <h4><?php printf(__('%s <span class="says">says:</span>', 'secondthought'), get_comment_author_link()) ?></h4>

        <?php comment_text() ?>
        <p class="comment-detail">
          <?php printf( __('%1$s at %2$s', 'secondthought'), get_comment_date(),  get_comment_time()) ?><?php edit_comment_link('<span class="fa fa-pencil-square-o"></span>','  ','' ); ?>
        </p>

        <div class="reply">
        <?php comment_reply_link(array_merge( array('reply_text'=>$replyText), array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      </div>

      <?php if ( 'div' != $args['style'] ) : ?>
      </div>
      <?php endif; ?>

    <?php }


// add editor the privilege to edit theme

// get the the role object
$role_object = get_role( 'editor' );

// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );
