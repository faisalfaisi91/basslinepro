<?php


/*
Adds a star rating system to WordPress comments
https://www.cssigniter.com/add-rating-wordpress-comment-system/
*/


//Create the rating interface.
add_action( 'comment_form_logged_in_after', 'skrn_pro_comment_rating_rating_field' );
add_action( 'comment_form_after_fields', 'skrn_pro_comment_rating_rating_field' );
function skrn_pro_comment_rating_rating_field () {
	?>
	
	<?php if ( is_singular( 'video_skrn' ) ) : ?>
	<label for="rating" class="skrn-rating-pro"><?php echo esc_html__( 'Rating', 'progression-elements-vayvo' ); ?><span class="required">*</span></label>
	<fieldset class="comments-rating">
		<span class="rating-container">
			<?php for ( $i = 5; $i >= 1; $i-- ) : ?>
				<input type="radio" id="rating-<?php echo esc_attr( $i ); ?>" name="rating" value="<?php echo esc_attr( $i ); ?>" /><label for="rating-<?php echo esc_attr( $i ); ?>"><?php echo esc_html( $i ); ?></label>
			<?php endfor; ?>
			<input type="radio" id="rating-0" class="star-cb-clear" name="rating" value="0" required /><label for="rating-0">0</label>
		</span>
	</fieldset>
	<?php endif; ?>
	
	<?php
}


//Save the rating submitted by the user.
add_action( 'comment_post', 'skrn_pro_comment_rating_save_comment_rating' );
function skrn_pro_comment_rating_save_comment_rating( $comment_id ) {
	
	$comment_obj = get_comment($comment_id);
	$comment_post = get_post($comment_obj->comment_post_ID); 
	//https://wordpress.stackexchange.com/questions/221303/comment-notification-text-filter-for-custom-post-type
	
	if ($comment_post->post_type == 'video_skrn'){
		
	if ( ( isset( $_POST['rating'] ) ) && ( '' !== $_POST['rating'] ) )
	$rating = intval( $_POST['rating'] );
	add_comment_meta( $comment_id, 'rating', $rating );
	
	}
	
}


//Create the rating interface.
add_action( 'comment_form_logged_in_after', 'skrn_pro_spoiler_comment_field' );
add_action( 'comment_form_after_fields', 'skrn_pro_spoiler_comment_field' );
function skrn_pro_spoiler_comment_field () {
	?>
	
	<?php if ( is_singular( 'video_skrn' ) ) : ?>
	<div id="skrn-spoiler-container">
		<label for="spoiler" class="skrn-spoiler-pro checkbox-pro-container">
			<span class="spoiler-label-heading"><?php echo esc_html__( 'Contains Spoiler?', 'progression-elements-vayvo' ); ?></span>
			<input type="checkbox" name="spoiler" id="spoiler" value="1" />
			<span class="checkmark-pro"></span>
		</label>
		<div class="clearfix-pro"></div>
	</div>
	<?php endif; ?>
	
	<?php
}

//Save the spoiler submitted by the user.
add_action( 'comment_post', 'skrn_pro_comment_review_save_comment_spoiler' );
function skrn_pro_comment_review_save_comment_spoiler( $comment_id ) {
	
	$comment_obj = get_comment($comment_id);
	$comment_post = get_post($comment_obj->comment_post_ID); 
	//https://wordpress.stackexchange.com/questions/221303/comment-notification-text-filter-for-custom-post-type
	
	
		if ($comment_post->post_type == 'video_skrn'){
		
		if ( ( isset( $_POST['spoiler'] ) ) && ( '' !== $_POST['spoiler'] ) )
		
		if ($spoiler = intval( $_POST['spoiler'] )){
			$spoiler = intval( $_POST['spoiler'] );
			add_comment_meta( $comment_id, 'spoiler', $spoiler );
		}
		
		}

}



//Make the rating required, issues with effecting main post
//add_filter( 'preprocess_comment', 'skrn_pro_comment_rating_require_rating' );
//function skrn_pro_comment_rating_require_rating( $commentdata ) {

//	if ( ! isset( $_POST['rating'] ) || 0 === intval( $_POST['rating'] ) )
//		wp_die( esc_html__( 'Error: You did not add a rating. Hit the Back button on your Web browser and resubmit your review with a rating.', 'progression-elements-vayvo' ) 	);
//	return $commentdata;
	
//}


//Get the average rating of a post.
function skrn_pro_comment_rating_get_average_ratings( $id ) {
	$comments = get_approved_comments( $id );

	if ( $comments ) {
		$i = 0;
		$total = 0;
		foreach( $comments as $comment ){
			$rate = get_comment_meta( $comment->comment_ID, 'rating', true );
			if( isset( $rate ) && '' !== $rate ) {
				$i++;
				$total += $rate;
			}
		}

		if ( 0 === $i ) {
			return false;
		} else {
			return round( $total / $i, 1 );
		}
	} else {
		return false;
	}
}




// Add an edit option to comment editing screen  
add_action( 'add_meta_boxes_comment', 'skrn_extend_comment_add_meta_box' );
function skrn_extend_comment_add_meta_box() {
    add_meta_box('title', __( 'Review Rating' ), 'extend_comment_meta_box', 'comment', 'normal', 'high' );
}

function extend_comment_meta_box ( $comment ) {
    $spoiler = get_comment_meta( $comment->comment_ID, 'spoiler', true );
    $rating = get_comment_meta( $comment->comment_ID, 'rating', true );
    wp_nonce_field( 'extend_comment_update', 'extend_comment_update', false );
    ?>
	 
	 
	 <?php 
 	$comment_obj = get_comment($comment_id);
 	$comment_post = get_post($comment_obj->comment_post_ID); 
	 if ( $comment_post->post_type == 'video_skrn' ) : ?>

    <p>
        <label for="rating"><?php _e( 'Rating: ' ); ?></label>
      <span class="commentratingbox">
      <?php for( $i=1; $i <= 5; $i++ ) {
        echo '<span class="commentrating"><input type="radio" name="rating" id="rating" value="'. $i .'"';
        if ( $rating == $i ) echo ' checked="checked"';
        echo ' />'. $i .' </span>';
        }
      ?>
      </span>
    </p>
	 
	 
    <p>
        <label for="spoiler"><?php _e( 'Contains Spoiler: ' ); ?></label>
		<span class="spoiler-container">
	      <input type="checkbox" name="spoiler" id="spoiler" <?php if ( $spoiler == 'on' || $spoiler == '1' ) echo ' checked="checked"' ?> />
		</span>
    </p>
	 
	 <?php endif; ?>
	 
    <?php
}


// Update comment meta data from comment editing screen 

add_action( 'edit_comment', 'skrn_extend_comment_edit_metafields' );

function skrn_extend_comment_edit_metafields( $comment_id ) {
	
	$comment_obj = get_comment($comment_id);
	$comment_post = get_post($comment_obj->comment_post_ID); 
	//https://wordpress.stackexchange.com/questions/221303/comment-notification-text-filter-for-custom-post-type
	
	if ($comment_post->post_type == 'video_skrn'){
		
	
    if( ! isset( $_POST['extend_comment_update'] ) || ! wp_verify_nonce( $_POST['extend_comment_update'], 'extend_comment_update' ) ) return;

  if ( ( isset( $_POST['rating'] ) ) && ( $_POST['rating'] != '') ):
  $rating = wp_filter_nohtml_kses($_POST['rating']);
  update_comment_meta( $comment_id, 'rating', $rating );
  else :
  delete_comment_meta( $comment_id, 'rating');
  endif;
  
  
  if ( ( isset( $_POST['spoiler'] ) ) && ( $_POST['spoiler'] != '') ):
  $spoiler = wp_filter_nohtml_kses($_POST['spoiler']);
  update_comment_meta( $comment_id, 'spoiler', $spoiler );
  else :
  delete_comment_meta( $comment_id, 'spoiler');
  endif;
  
}

}

