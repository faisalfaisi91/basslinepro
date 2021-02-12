<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pro
 */
?>


<div id="video-post-container">
	<h1 class="video-page-title"><?php the_title(); ?></h1>

	<ul id="video-post-meta-list">
		
		<?php if (get_theme_mod( 'progression_studios_media_grenre_sidebar', 'true') == 'true') : ?>
		<?php 
			$terms = get_the_terms( $post->ID , 'video-genres' ); 
			if ( !empty( $terms ) ) :
				echo '<li id="video-post-meta-cat"><ul>';
			foreach ( $terms as $term ) {
				$term_link = get_term_link( $term, 'video-genres' );
				if( is_wp_error( $term_link ) )
					continue;
				echo '<li><a href="' . $term_link . '">' . $term->name . '</a></li>';
			} 
			echo '</ul></li>';
		endif;
		?>
		<?php endif; ?>
		
		<?php if( comments_open() ): ?>	
		<li id="video-post-meta-reviews">
			
			<?php if ( skrn_pro_comment_rating_get_average_ratings( $post->ID ) ) : ?>
				<?php $rating_edit_format = skrn_pro_comment_rating_get_average_ratings( $post->ID );  ?>
				<div class="average-rating-count-progression-studios"><?php comments_number( esc_html__('No Reviews', 'vayvo-progression') , esc_html__('1 Review','vayvo-progression'), esc_html__('% Reviews','vayvo-progression')); ?></div>
				<div class="average-rating-video-post">
					<div class="average-rating-video-empty">
						<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
					</div>
					<div class="average-rating-overflow-width" style="width:<?php echo (esc_attr($rating_edit_format) / 5 * 100) ;	?>%;">
						<div class="average-rating-video-filled">
							<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
						<div class="clearfix-pro"></div>
						</div><!-- close .average-rating-video-filled -->
					</div><!-- close .average-rating-overflow-width -->
				</div>
				
				<div class="clearfix"></div>					
			<?php else: ?>
				
				<span id="no-reviews-meta-list"><?php esc_html_e( 'Leave First Review', 'vayvo-progression' ); ?></span>
				
			<?php endif; ?>

		</li>
		<?php endif; ?>
		
		<?php if (get_theme_mod( 'progression_studios_media_releases_date_sidebar', 'true') == 'true') : ?>
		<?php if( get_post_meta($post->ID, 'progression_studios_release_date', true) ): ?>
			<li id="video-post-meta-year"><?php 
					$video_release_date = get_post_meta($post->ID, 'progression_studios_release_date', true);
					echo esc_attr(date_i18n('Y',strtotime($video_release_date) )); ?></li>
		<?php endif; ?>
		<?php endif; ?>
		
		<?php if( get_post_meta($post->ID, 'progression_studios_film_rating', true)): ?>
			<li id="video-post-meta-rating"><span><?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_film_rating', true)); ?></span></li>
		<?php endif; ?>
	</ul>
	<div class="clearfix-pro"></div>
	
	
	<div id="video-post-buttons-container">
		<?php if( get_post_meta($post->ID, 'progression_studios_video_post', true) || get_post_meta($post->ID, 'progression_studios_youtube_video', true) || get_post_meta($post->ID, 'progression_studios_vimeo_video', true) ): ?><a href="#Video-Vayvo-Single" id="video-post-play-text-btn" class="afterglow"><i class="fa fa-play-circle" aria-hidden="true"></i><?php esc_html_e( 'Play', 'vayvo-progression' ); ?></a><?php endif; ?>
		<?php progression_the_wishlist_button() ?>
		<?php if (function_exists( 'progression_studios_elements_social_sharing') && get_theme_mod( 'progression_studios_blog_post_sharing', 'on') == 'on' )  : ?>
			<div id="video-social-sharing-button"><i class="fa fa-share" aria-hidden="true"></i><?php esc_html_e( 'Share', 'vayvo-progression' ); ?></div>
		<?php endif; ?>
	<div class="clearfix-pro"></div>
	</div><!-- close #video-post-buttons-container -->
	
	<div id="vayvo-video-post-content">
		<?php the_content(); ?>
	</div><!-- #vayvo-video-post-content -->
	
	
	<?php wp_reset_postdata();?>
	<?php if (get_theme_mod( 'progression_studios_media_lead_cast', 'true') == 'true') : ?>
		<?php get_template_part( 'template-parts/cast', 'posts' ); ?>
	<?php endif; ?>
	
	<?php if(get_post_meta($post->ID, 'progression_studios_season_title', true)): ?>
		<?php get_template_part( 'template-parts/season', 'episodes' ); ?>		
	<?php endif; ?>
		
	<?php if (get_theme_mod( 'progression_studios_media_more_like_this', 'true') == 'true' && !get_post_meta($post->ID, 'progression_studios_season_title', true)) : ?>
		<?php get_template_part( 'template-parts/related', 'videos' ); ?>
	<?php endif; ?>
	

</div><!-- close #video-post-container -->


<div id="video-post-sidebar">
	
	<?php if( get_post_meta($post->ID, 'progression_studios_poster_image', true) ): ?>
		<div class="content-sidebar-image noselect<?php if( get_post_meta($post->ID, 'progression_studios_video_embed', true) ): ?>  video-embedded-media-height-adjustment<?php endif; ?>">			
			<img src="<?php echo esc_url( get_post_meta($post->ID, 'progression_studios_poster_image', true)); ?>" alt="<?php the_title(); ?>">
		</div>
	<?php endif; ?>
	
	<?php if (get_theme_mod( 'progression_studios_media_releases_date_sidebar', 'true') == 'true') : ?>
	<?php if( get_post_meta($post->ID, 'progression_studios_release_date', true) ): ?>
	<div class="content-sidebar-section video-sidebar-section-release-date">
		<h4 class="content-sidebar-sub-header"><?php esc_html_e( 'Release Date', 'vayvo-progression' ); ?></h4>
		<div class="content-sidebar-short-description"><?php 
			$video_release_date = get_post_meta($post->ID, 'progression_studios_release_date', true);
			echo esc_attr(date_i18n(get_option('date_format'), strtotime($video_release_date) )); ?></div>
	</div><!-- close .content-sidebar-section -->
	<?php endif; ?>
	<?php endif; ?>
	
	
	
	<?php if (get_theme_mod( 'progression_studios_media_duration_sidebar', 'true') == 'true') : ?>
	<?php if( get_post_meta($post->ID, 'progression_studios_media_duration_meta', true) ): ?>
	<div class="content-sidebar-section video-sidebar-section-length">
		<h4 class="content-sidebar-sub-header"><?php esc_html_e( 'Duration', 'vayvo-progression' ); ?></h4>
		<div class="content-sidebar-short-description"><?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_media_duration_meta', true)); ?></div>
	</div><!-- close .content-sidebar-section -->
	<?php endif; ?>
	<?php endif; ?>
	
	<?php if (get_theme_mod( 'progression_studios_media_director_sidebar', 'true') == 'true') : ?>
	<?php 
		$terms = get_the_terms( $post->ID , 'video-director' ); 
		if ( !empty( $terms ) ) :
			echo '<div class="content-sidebar-section video-sidebar-section-director"><h4 class="content-sidebar-sub-header">';
			echo  esc_html_e( 'Director', 'vayvo-progression');
			echo '</h4><ul class="video-director-meta-sidebar">';
		foreach ( $terms as $term ) {
			$term_link = get_term_link( $term, 'video-director' );
			if( is_wp_error( $term_link ) )
				continue;
			echo '<li><a href="' . $term_link . '">' . $term->name . '</a></li>';
		} 
		echo '</ul></div>';
	endif;
	?>
	<?php endif; ?>
	
	<?php if (get_theme_mod( 'progression_studios_media_recent_reviews_sidebar', 'true') == 'true') : ?>
	<?php if(  comments_open() || get_comments_number() ): ?>	
	<div id="video-post-recent-reviews-sidebar">
		<h3 class="content-sidebar-reviews-header"><?php esc_html_e( 'Recent Reviews', 'vayvo-progression' ); ?></h3>
		
		<?php  $comment_count_pro = get_comments_number(); if( $comment_count_pro >= 1  ): ?>
			<ul class="sidebar-reviews-pro">
				<?php
				//https://deluxeblogtips.com/display-comments-in-homepage/
				$comments = get_comments( array(
				    'post_id' => get_the_ID(),
				    'status' => 'approve',
				) );
				
		    	wp_list_comments( array(
					'per_page'          => '2',
					'callback' => 'progression_studios_review_sidebar',
					'type'     => 'comment',
				), $comments );

				?>
			</ul>
			<div id="all-reviews-button-progression"><?php echo esc_html_e( 'See All Reviews', 'vayvo-progression' ); ?></div>
			<?php else: ?>
				<div class="no-recent-reviews">

						
						<?php echo esc_html_e( 'No reviews of ', 'vayvo-progression' ); ?> <?php the_title(); ?>
				</div>
				<div id="all-reviews-button-progression"><?php echo esc_html_e( 'Leave First Review', 'vayvo-progression' ); ?></div>
			<?php endif; ?>
		
	</div><!-- close #video-post-recent-reviews-sidebar -->
	<?php endif; ?>
	<?php endif; ?>
	
	<div class="clearfix-pro"></div>
</div><!-- close #video-post-sidebar -->

<?php get_template_part( 'template-parts/reviews/reviews', 'popup' ); ?>
