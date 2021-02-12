<?php

function progression_studios_skrn_social_customizer( $wp_customize ) {
	
	
	/* Section - Blog - Blog Index Post Options */
   $wp_customize->add_section( 'progression_studios_section_blog_post_sharing', array(
   	'title'          => esc_html__( 'Video Post Sharing', 'progression-elements-vayvo' ),
   	'panel'          => 'progression_studios_videos_panel', // Not typically needed.
   	'priority'       => 1220,
   ) 
	);
	


	

   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_twitter' ,array(
 		'default' =>  '1',
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_twitter', array(
 		'label'          => esc_html__( 'Twitter Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 605,
 		)
	
 	);
	

   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_facebook' ,array(
 		'default' =>  '1',
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_facebook', array(
 		'label'          => esc_html__( 'Facebook Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 609,
 		)
	
 	);
	
	
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_pinterest' ,array(
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_pinterest', array(
 		'label'          => esc_html__( 'Pinterest Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 615,
 		)
	
 	);
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_vk' ,array(
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_vk', array(
 		'label'          => esc_html__( 'VK Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 620,
 		)
	
 	);
	
	
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_google' ,array(
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_google', array(
 		'label'          => esc_html__( 'Google+ Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 620,
 		)
	
 	);
	
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_reddit' ,array(
		'default' =>  '1',
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_reddit', array(
 		'label'          => esc_html__( 'Reddit Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 625,
 		)
	
 	);
	
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_linkedin' ,array(
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_linkedin', array(
 		'label'          => esc_html__( 'LinkedIn Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 630,
 		)
	
 	);
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_tumblr' ,array(
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_tumblr', array(
 		'label'          => esc_html__( 'Tumblr Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 635,
 		)
	
 	);
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_stumble' ,array(
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_stumble', array(
 		'label'          => esc_html__( 'StumbleUpon Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 638,
 		)
	
 	);
	
   /* Section - Blog - Post Options */
 	$wp_customize->add_setting( 'progression_single_sharing_mail' ,array(
 		'default' =>  '1',
 		'sanitize_callback' => 'progression_studios_sanitize_choices',
 	) );
 	$wp_customize->add_control( 'progression_single_sharing_mail', array(
 		'label'          => esc_html__( 'Email Sharing', 'progression-elements-vayvo' ),
 		'section' => 'progression_studios_section_blog_post_sharing',
 		'type' => 'checkbox',
 		'priority'   => 640,
 		)
	
 	);
  
	
}
add_action( 'customize_register', 'progression_studios_skrn_social_customizer' );



//no-HTML text
function progression_studios_skrn_sanitize_elements_choices( $input ) {
	return wp_filter_nohtml_kses( $input );
}




if ( ! function_exists( 'progression_studios_elements_social_sharing' ) ) {

function progression_studios_elements_social_sharing() {
?>
	<?php if (get_theme_mod( 'progression_studios_blog_post_sharing', 'on') == 'on') : ?>
	<div id="blog-single-social-sharing-container">
			<div id="close-social-sharing-skrn"><span></span></div>
			<ul id="blog-single-social-sharing" class="noselect">

				<?php if (get_theme_mod( 'progression_single_sharing_twitter', '1')) : ?><li><a href="https://twitter.com/share?text=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Twitter', 'progression-elements-vayvo' ); ?>" class="twitter-share" target="_blank"><i class="fa fa-twitter"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on Twitter', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
			
				<?php if (get_theme_mod( 'progression_single_sharing_facebook', '1')) : ?><li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(the_permalink()); ?>&t=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on Facebook', 'progression-elements-vayvo' ); ?>" class="facebook-share" target="_blank"><i class="fa fa-facebook-square"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on Facebook', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
			
			
				<?php if (get_theme_mod( 'progression_single_sharing_pinterest')) : ?><li><a href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;//assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" title="<?php esc_html_e( 'Share on Pinterest', 'progression-elements-vayvo' ); ?>" class="pinterest-share"><i class="fa fa-pinterest-p"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on Pinterest', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
	
				<?php if (get_theme_mod( 'progression_single_sharing_vk')) : ?><li><a href="http://vkontakte.ru/share.php?url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on VK', 'progression-elements-vayvo' ); ?>" class="vk-share" target="_blank"><i class="fa fa-vk"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on VK', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
	
				<?php if (get_theme_mod( 'progression_single_sharing_google')) : ?><li><a href="https://plus.google.com/share?url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on Google+', 'progression-elements-vayvo' ); ?>" class="google-share" target="_blank"><i class="fa fa-google-plus"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on Google+', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>

				<?php if (get_theme_mod( 'progression_single_sharing_reddit', '1')) : ?><li><a href="http://reddit.com/submit?url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on Reddit', 'progression-elements-vayvo' ); ?>" class="reddit-share" target="_blank"><i class="fa fa-reddit-alien"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on Reddit', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
	
				<?php if (get_theme_mod( 'progression_single_sharing_linkedin')) : ?><li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on LinkedIn', 'progression-elements-vayvo' ); ?>" class="linkedin-share" target="_blank"><i class="fa fa-linkedin"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on LinkedIn', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
	
				<?php if (get_theme_mod( 'progression_single_sharing_tumblr')) : ?><li><a href="http://www.tumblr.com/share/link?url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on Tumblr', 'progression-elements-vayvo' ); ?>" class="tumblr-share" target="_blank"><i class="fa fa-tumblr"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on Tumblr', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>

				<?php if (get_theme_mod( 'progression_single_sharing_stumble')) : ?><li><a href="http://www.stumbleupon.com/submit?url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" title="<?php esc_html_e( 'Share on StumbleUpon', 'progression-elements-vayvo' ); ?>" class="stumble-share" target="_blank"><i class="fa fa-stumbleupon"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share on StumbleUpon', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
	
				<?php if (get_theme_mod( 'progression_single_sharing_mail', '1')) : ?><li><a href="mailto:?subject=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;body=<?php echo urlencode(the_permalink()); ?>" title="<?php esc_html_e( 'Share on E-mail', 'progression-elements-vayvo' ); ?>" class="mail-share"><i class="fa fa-envelope"></i><span class="progression-single-dash">&ndash;</span><span class="blog-single-sharing-text"><?php echo esc_html__( 'Share via Email', 'progression-elements-vayvo' ); ?></span></a></li>
				<?php endif; ?>
	
			</ul>
		<div class="clearfix-pro"></div>
	</div>
	<?php endif; ?>
<?php
}
  
}