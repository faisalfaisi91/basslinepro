<?php
/**
 * The template for displaying all single posts.
 *
 * @package pro
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	
	<div id="video-page-title-pro" <?php if( get_post_meta($post->ID, 'progression_studios_header_image', true) ): ?>style="background-image:url('<?php echo esc_url( get_post_meta($post->ID, 'progression_studios_header_image', true)); ?>');"<?php else: ?><?php if(has_post_thumbnail()): ?><?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'progression-studios-video-header'); ?>style="background-image:url('<?php echo esc_attr($image[0]);?>');"<?php endif; ?><?php endif; ?><?php if( get_post_meta($post->ID, 'progression_studios_video_embed', true) ): ?> class="video-embedded-media-height-post"<?php endif; ?>>
		
		<?php if( get_post_meta($post->ID, 'progression_studios_video_post', true) || get_post_meta($post->ID, 'progression_studios_youtube_video', true) || get_post_meta($post->ID, 'progression_studios_vimeo_video', true) ): ?>
		<a class="video-page-title-play-button afterglow" href="#Video-Vayvo-Single"><i class="fa fa-play"></i></a>
      <div style="display:none;">
         <video id="Video-Vayvo-Single"  <?php if( get_post_meta($post->ID, 'progression_studios_video_embed_poster', true) ): ?>poster="<?php echo esc_url( get_post_meta($post->ID, 'progression_studios_video_embed_poster', true)); ?>"<?php endif; ?> width="960" height="540" <?php if( get_post_meta($post->ID, 'progression_studios_youtube_video', true)): ?>data-youtube-id="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_youtube_video', true)); ?>"<?php endif; ?> <?php if( get_post_meta($post->ID, 'progression_studios_vimeo_video', true)): ?>data-vimeo-id="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_vimeo_video', true)); ?>"<?php endif; ?>>
				 <?php if( get_post_meta($post->ID, 'progression_studios_video_post', true)): ?><source src="<?php echo esc_url( get_post_meta($post->ID, 'progression_studios_video_post', true)); ?>" type="video/mp4"><?php endif; ?>
         </video>
      </div>
		<?php else: ?>
			<?php if( get_post_meta($post->ID, 'progression_studios_video_embed', true)  ): ?>
				<div id="vayvo-single-video-embed"><?php echo apply_filters('progression_studios_video_content_filter', get_post_meta($post->ID, 'progression_studios_video_embed', true)); ?></div>
			<?php endif; ?>
		
		<?php endif; ?>
		
		<div id="video-page-title-gradient-base"></div>
		<?php do_action( 'skrn_notices', '<div class="login-required-notice"><div class="login-notify-text">%s</div></div>' ) ?>
	</div><!-- #video-page-title-pro -->
	<div class="clearfix-pro"></div>
	
	<div id="content-pro" class="site-content-video-post<?php if (get_theme_mod( 'progression_studios_media_post_sidebar') == 'false') : ?> hide-sidebar-video-post<?php endif; ?>">
		<div class="width-container-pro">
			<?php get_template_part( 'template-parts/content', 'single-skrn_video' ); ?>
			
		<div class="clearfix-pro"></div>
		</div><!-- close .width-container-pro -->
	</div><!-- close #content-pro -->
	
<?php if (function_exists( 'progression_studios_elements_social_sharing') )  : ?><?php progression_studios_elements_social_sharing(); ?><?php endif; ?>	
	
</div><!-- close #id="post-<?php the_ID(); ?>" -->
<?php endwhile; // end of the loop. ?>			
<?php get_footer(); ?>