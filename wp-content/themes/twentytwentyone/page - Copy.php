<?php
/**
 * Template Name: hello
 */

get_header();

/* Start the Loop */

   $votes = get_post_meta($post->ID, "votes", true);
   $votes = ($votes == "") ? 0 : $votes;
?>
This post has <div id='vote_counter'><?php echo $votes ?></div> votes<br>

<?php
   $nonce = wp_create_nonce("my_user_vote_nonce");	
    $link = admin_url('admin-ajax.php?action=my_user_vote&post_id='.$post->ID.'&nonce='.$nonce);
    echo '<a class="user_vote" data-nonce="' . $nonce . '" data-post_id="' . $post->ID . '" href="' . $link . '">vote for this article</a>';


get_footer();
