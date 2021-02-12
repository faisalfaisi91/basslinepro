<?php


// In another file somewhere
function progression_studios_html_allow( $original_value, $args, $cmb2_field ) {
    return $original_value; // Unsanitized value.
}


add_action( 'cmb2_admin_init', 'progression_studios_page_meta_box' );
function progression_studios_page_meta_box() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'progression_studios_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$progression_studios_cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox_page_settings',
		'title'         => esc_html__('Page Settings', 'progression-elements-vayvo'),
		'object_types'  => array( 'page' ), // Post type,
		
		'tabs'      => array(
				'default_tab' => array(
					'label' => esc_html__( 'General Settings', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-admin-generic', // Dashicon
				),
				'header_tab'  => array(
					'label' => esc_html__( 'Header Settings', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-desktop', // Dashicon
				),
			),
			'tab_style'   => 'default',
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Sub-title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'sub_title',
		'type'       => 'text',
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Sidebar Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'page_sidebar',
		'type'       => 'select',
		'options'     => array(
			'hidden-sidebar'   => esc_html__( 'Hide Sidebar', 'progression-elements-vayvo' ),
			'right-sidebar'    => esc_html__( 'Right Sidebar', 'progression-elements-vayvo' ),
			'left-sidebar'    => esc_html__( 'Left Sidebar', 'progression-elements-vayvo' ),
		),
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Page Title Background Image', 'progression-elements-vayvo'),
		'id'         => $prefix . 'header_image',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Disable Page Title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'disable_page_title',
		'type'       => 'checkbox',
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Disable Footer', 'progression-elements-vayvo'),
		'id'         => $prefix . 'disable_footer_per_page',
		'type'       => 'checkbox',
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Transparent Header', 'progression-elements-vayvo'),
		'id'         => $prefix . 'header_transparent_float',
		'type'       => 'checkbox',
		'tab'  => 'header_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Custom logo for page', 'progression-elements-vayvo'),
		'desc' => esc_html__('Must be same size as the main logo.', 'progression-elements-vayvo'),
		'id'         => $prefix . 'custom_page_logo',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'tab'  => 'header_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Disable Header', 'progression-elements-vayvo'),
		'id'         => $prefix . 'header_disabled',
		'type'       => 'checkbox',
		'tab'  => 'header_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	

	
}



add_action( 'cmb2_admin_init', 'progression_studios_index_post_meta_box' );
function progression_studios_index_post_meta_box() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'progression_studios_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$progression_studios_cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox_post',
		'title'         => esc_html__('Post Settings', 'progression-elements-vayvo'),
		'object_types'  => array( 'post' ), // Post type
	) );

	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Featured Image Link', 'progression-elements-vayvo'),
		'id'         => $prefix . 'blog_featured_image_link',
		'type'       => 'select',
		'options'     => array(
			'progression_link_default'   => esc_html__( 'Default link to post', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'progression_link_lightbox'    => esc_html__( 'Link to image in lightbox pop-up', 'progression-elements-vayvo' ),
			'progression_link_url'    => esc_html__( 'Link to URL', 'progression-elements-vayvo' ),
			'progression_link_url_new_window'    => esc_html__( 'Link to URL (New Window)', 'progression-elements-vayvo' ),
		),

	) );
	

	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Optional Link', 'progression-elements-vayvo'),
		'desc' => esc_html__('Make your post link to another page', 'progression-elements-vayvo'),
		'id'         => $prefix . 'external_link',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_blog_featured_image_link',
		            'data-conditional-value'  => wp_json_encode( array('progression_link_url', 'progression_link_url_new_window' ) ),
		 ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'video_post',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
	) );

	
}



add_action( 'cmb2_admin_init', 'progression_studios_media_meta_box' );
function progression_studios_media_meta_box() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'progression_studios_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$progression_studios_cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox_media_settings',
		'title'         => esc_html__('Video Options', 'progression-elements-vayvo'),
		'object_types'  => array( 'video_skrn' ), // Post type,
		'tabs'      => array(
				'default_tab' => array(
					'label' => esc_html__( 'Default Settings', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-admin-generic', // Dashicon
				),
				'social_tab'  => array(
					'label' => esc_html__( 'Meta Settings', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-admin-tools', // Dashicon
				),
				'slider_tab'  => array(
					'label' => esc_html__( 'Slider Settings', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-slides', // Dashicon
				),
				'season_1_tab'  => array(
					'label' => esc_html__( 'Season 1', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-media-default', // Dashicon
				),
				'season_2_tab'  => array(
					'label' => esc_html__( 'Season 2', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-media-default', // Dashicon
				),
				'season_3_tab'  => array(
					'label' => esc_html__( 'Season 3', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-media-default', // Dashicon
				),
				'season_4_tab'  => array(
					'label' => esc_html__( 'Season 4', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-media-default', // Dashicon
				),
				'season_5_tab'  => array(
					'label' => esc_html__( 'Season 5', 'progression-elements-vayvo' ),
					'icon'  => 'dashicons-media-default', // Dashicon
				),
			),
			'tab_style'   => 'default',
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Index Link', 'progression-elements-vayvo'),
		'id'         => $prefix . 'blog_featured_image_link',
		'type'       => 'select',
		'options'     => array(
			'progression_link_default'   => esc_html__( 'Default link to post', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'progression_link_url'    => esc_html__( 'Link to URL', 'progression-elements-vayvo' ),
			'progression_link_url_new_window'    => esc_html__( 'Link to URL (New Window)', 'progression-elements-vayvo' ),
		),
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	

	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Optional Index Link', 'progression-elements-vayvo'),
		'desc' => esc_html__('Make your index post link to another page', 'progression-elements-vayvo'),
		'id'         => $prefix . 'external_link',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_blog_featured_image_link',
		            'data-conditional-value'  => wp_json_encode( array( 'progression_link_url', 'progression_link_url_new_window' ) ),
		 ),
		 'tab'  => 'default_tab',
		 'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Sidebar Poster', 'progression-elements-vayvo'),
		'desc' => esc_html__('Optional custom sidebar poster image. Default display is the Featured Image', 'progression-elements-vayvo'),
		'id'         => $prefix . 'poster_image',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Header Background', 'progression-elements-vayvo'),
		'id'         => $prefix . 'header_image',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Video Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'video_display',
		'type'       => 'select',
		'options'     => array(
			'local'   => esc_html__( 'Locally Hosted .mp4', 'progression-elements-vayvo' ),
			'youtube'    => esc_html__( 'Youtube', 'progression-elements-vayvo' ),
			'vimeo'    => esc_html__( 'Vimeo', 'progression-elements-vayvo' ),
			'embed'    => esc_html__( 'Embedded Video/Audio', 'progression-elements-vayvo' ),
		),
		'tab'  => 'default_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Hosted Video (.mp4)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url', 'progression-elements-vayvo'),
		'id'         => $prefix . 'video_post',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_video_display',
		            'data-conditional-value'  => 'local',
		 ),
 		'tab'  => 'default_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'video_embed_poster',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_video_display',
		            'data-conditional-value'  => 'local',
		 ),
 		'tab'  => 'default_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Youtube Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL after ?v=', 'progression-elements-vayvo'),
		'id'         => $prefix . 'youtube_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_video_display',
		            'data-conditional-value'  => 'youtube',
		 ),
 		'tab'  => 'default_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Vimeo Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL', 'progression-elements-vayvo'),
		'id'         => $prefix . 'vimeo_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_video_display',
		            'data-conditional-value'  => 'vimeo',
		 ),
 		'tab'  => 'default_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Embedded Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'video_embed',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_video_display',
		            'data-conditional-value'  => 'embed',
		 ),
 		'tab'  => 'default_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Video Rating', 'progression-elements-vayvo'),
		'id'         => $prefix . 'film_rating',
		'type'       => 'text',
		'tab'  => 'social_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );

	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Release Date', 'progression-elements-vayvo'),
		'id'         => $prefix . 'release_date',
		'type'       => 'text_date',
		'tab'  => 'social_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'media_duration_meta',
		'type'       => 'text',
		'tab'  => 'social_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Search Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'media_duration',
		'type'       => 'select',
		'options'     => array(
			'short'   => esc_html__( 'Short (< 5 minutes)', 'progression-elements-vayvo' ),
			'medium'    => esc_html__( 'Medium (5-10 minutes)', 'progression-elements-vayvo' ),
			'long'    => esc_html__( 'Long (> 10 minutes)', 'progression-elements-vayvo' ),
		),
		'tab'  => 'social_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Slider Header Image', 'progression-elements-vayvo'),
		'id'         => $prefix . 'slider_header_image',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'tab'  => 'slider_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Button Target', 'progression-elements-vayvo'),
		'id'         => $prefix . 'slider_btn_target',
		'type'       => 'select',
		'options'     => array(
			'no-button'    => esc_html__( 'No Button', 'progression-elements-vayvo' ),
			'link'    => esc_html__( 'Page Link', 'progression-elements-vayvo' ),
			'external'    => esc_html__( 'Page Link Open in New Window', 'progression-elements-vayvo' ),
			'youtube_video'   => esc_html__( 'Youtube Lightbox', 'progression-elements-vayvo' ),
			'vimeo_video'   => esc_html__( 'Vimeo Lightbox', 'progression-elements-vayvo' ),
			'mp4_video'   => esc_html__( 'Locally Hosted Video', 'progression-elements-vayvo' ),
		),
		'tab'  => 'slider_tab',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Button Text', 'progression-elements-vayvo'),
		'id'         => $prefix . 'slider_btn_text',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_slider_btn_target',
		            'data-conditional-value'  => wp_json_encode( array( 'link', 'youtube_video', 'vimeo_video', 'mp4_video', 'external' ) ),
		 ),
 		'tab'  => 'slider_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Button Icon', 'progression-elements-vayvo'),
		'desc'       => esc_html__('View list of Icons: https://fontawesome.com/v4.7.0/icons/', 'progression-elements-vayvo'),
		'id'         => $prefix . 'slider_btn_icon',		
		'type'       => 'text',
		'attributes'    => array(
			'placeholder'       => 'play-circle',
		            'data-conditional-id'     => 'progression_studios_slider_btn_target',
		            'data-conditional-value'  => wp_json_encode( array( 'link', 'youtube_video', 'vimeo_video', 'mp4_video', 'external' ) ),
		 ),
 		'tab'  => 'slider_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Button Link/Video', 'progression-elements-vayvo'),
		'desc'       => esc_html__('If linking to Youtube or Vimeo videos, use video ID', 'progression-elements-vayvo'),
		'id'         => $prefix . 'slider_btn_link',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_slider_btn_target',
		            'data-conditional-value'  => wp_json_encode( array( 'link', 'youtube_video', 'vimeo_video', 'mp4_video', 'external' ) ),
		 ),
 		'tab'  => 'slider_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Locally Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'optional_locally_hosted_mp4_button',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_slider_btn_target',
		            'data-conditional-value'  => 'mp4_video',
		 ),
 		'tab'  => 'slider_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	
	
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Season 1 Title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'season_title',
		'type'       => 'text',
 		'tab'  => 'season_1_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$group_field_id = $progression_studios_cmb->add_field( array(
		'id'          => $prefix . 'display_season',
		'type'        => 'group',
		'tab'        => 'season_1_tab',
		'render_row_cb' => array('CMB2_Tabs', 'tabs_render_group_row_cb'),
		'options'     => array(
			'group_title'   => esc_html__( 'Episode {#}', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Episode', 'progression-elements-vayvo' ),
			'remove_button' => esc_html__( 'Remove Episode', 'progression-elements-vayvo' ),
			'sortable'      => true, // beta
			'closed'         => true, // true to have the groups closed by default
		),
		
	) );
	
	

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Episode Title', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_title',
		'type'       => 'text',
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized value
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Episode Description', 'progression-elements-vayvo' ),
		'id'          => $prefix .  'description',
		'type'        => 'textarea_small',
		'attributes'  => array(
				'rows'        => 3,
			),
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized valu
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Episode Thumbnail', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_image',
		'type'       => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Release Date', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_release_date',
		'type'       => 'text_date',
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_media_duration_meta',
		'type'       => 'text',
	) );
	
	
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Video Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_display',
		'type'       => 'select',
		'options'     => array(
			'local'   => esc_html__( 'Locally Hosted .mp4', 'progression-elements-vayvo' ),
			'youtube'    => esc_html__( 'Youtube', 'progression-elements-vayvo' ),
			'vimeo'    => esc_html__( 'Vimeo', 'progression-elements-vayvo' ),
			'embed'    => esc_html__( 'Embedded Video/Third party', 'progression-elements-vayvo' ),
		),
	) );
	
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Hosted Video (.mp4)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_mp4',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name' => esc_html__('Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_poster',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Youtube Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL after ?v=', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_youtube_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'youtube',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Vimeo Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_vimeo_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'vimeo',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id, array(
		'name'       => esc_html__('Embedded Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_embed',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'embed',
		 ),
	) );
	
	
	
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Season 2 Title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'season_title_two',
		'type'       => 'text',
 		'tab'  => 'season_2_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$group_field_id_two = $progression_studios_cmb->add_field( array(
		'id'          => $prefix . 'display_season_two',
		'type'        => 'group',
		'tab'        => 'season_2_tab',
		'render_row_cb' => array('CMB2_Tabs', 'tabs_render_group_row_cb'),
		'options'     => array(
			'group_title'   => esc_html__( 'Episode {#}', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Episode', 'progression-elements-vayvo' ),
			'remove_button' => esc_html__( 'Remove Episode', 'progression-elements-vayvo' ),
			'sortable'      => true, // beta
			'closed'         => true, // true to have the groups closed by default
		),
		
	) );
	
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__( 'Episode Title', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_title',
		'type'       => 'text',
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized value
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'        => esc_html__( 'Episode Description', 'progression-elements-vayvo' ),
		'id'          => $prefix .  'description',
		'type'        => 'textarea_small',
		'attributes'  => array(
				'rows'        => 3,
			),
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized valu
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__( 'Episode Thumbnail', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_image',
		'type'       => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Release Date', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_release_date',
		'type'       => 'text_date',
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_media_duration_meta',
		'type'       => 'text',
	) );
	
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Video Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_display',
		'type'       => 'select',
		'options'     => array(
			'local'   => esc_html__( 'Locally Hosted .mp4', 'progression-elements-vayvo' ),
			'youtube'    => esc_html__( 'Youtube', 'progression-elements-vayvo' ),
			'vimeo'    => esc_html__( 'Vimeo', 'progression-elements-vayvo' ),
			'embed'    => esc_html__( 'Embedded Video/Third party', 'progression-elements-vayvo' ),
		),
	) );
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Hosted Video (.mp4)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_mp4',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name' => esc_html__('Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_poster',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Youtube Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL after ?v=', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_youtube_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'youtube',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Vimeo Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_vimeo_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'vimeo',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_two, array(
		'name'       => esc_html__('Embedded Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_embed',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'embed',
		 ),
	) );
	
	
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Season 3 Title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'season_title_three',
		'type'       => 'text',
 		'tab'  => 'season_3_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$group_field_id_three = $progression_studios_cmb->add_field( array(
		'id'          => $prefix . 'display_season_three',
		'type'        => 'group',
		'tab'        => 'season_3_tab',
		'render_row_cb' => array('CMB2_Tabs', 'tabs_render_group_row_cb'),
		'options'     => array(
			'group_title'   => esc_html__( 'Episode {#}', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Episode', 'progression-elements-vayvo' ),
			'remove_button' => esc_html__( 'Remove Episode', 'progression-elements-vayvo' ),
			'sortable'      => true, // beta
			'closed'         => true, // true to have the groups closed by default
		),
		
	) );
	
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__( 'Episode Title', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_title',
		'type'       => 'text',
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized value
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'        => esc_html__( 'Episode Description', 'progression-elements-vayvo' ),
		'id'          => $prefix .  'description',
		'type'        => 'textarea_small',
		'attributes'  => array(
				'rows'        => 3,
			),
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized valu
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__( 'Episode Thumbnail', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_image',
		'type'       => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Release Date', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_release_date',
		'type'       => 'text_date',
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_media_duration_meta',
		'type'       => 'text',
	) );
	
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Video Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_display',
		'type'       => 'select',
		'options'     => array(
			'local'   => esc_html__( 'Locally Hosted .mp4', 'progression-elements-vayvo' ),
			'youtube'    => esc_html__( 'Youtube', 'progression-elements-vayvo' ),
			'vimeo'    => esc_html__( 'Vimeo', 'progression-elements-vayvo' ),
			'embed'    => esc_html__( 'Embedded Video/Third party', 'progression-elements-vayvo' ),
		),
	) );
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Hosted Video (.mp4)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_mp4',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name' => esc_html__('Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_poster',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Youtube Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL after ?v=', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_youtube_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'youtube',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Vimeo Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_vimeo_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'vimeo',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Embedded Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_embed',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'embed',
		 ),
	) );
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Season 4 Title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'season_title_four',
		'type'       => 'text',
 		'tab'  => 'season_4_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$group_field_id_three = $progression_studios_cmb->add_field( array(
		'id'          => $prefix . 'display_season_four',
		'type'        => 'group',
		'tab'        => 'season_4_tab',
		'render_row_cb' => array('CMB2_Tabs', 'tabs_render_group_row_cb'),
		'options'     => array(
			'group_title'   => esc_html__( 'Episode {#}', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Episode', 'progression-elements-vayvo' ),
			'remove_button' => esc_html__( 'Remove Episode', 'progression-elements-vayvo' ),
			'sortable'      => true, // beta
			'closed'         => true, // true to have the groups closed by default
		),
		
	) );
	
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__( 'Episode Title', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_title',
		'type'       => 'text',
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized value
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'        => esc_html__( 'Episode Description', 'progression-elements-vayvo' ),
		'id'          => $prefix .  'description',
		'type'        => 'textarea_small',
		'attributes'  => array(
				'rows'        => 3,
			),
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized valu
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__( 'Episode Thumbnail', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_image',
		'type'       => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Release Date', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_release_date',
		'type'       => 'text_date',
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_media_duration_meta',
		'type'       => 'text',
	) );
	
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Video Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_display',
		'type'       => 'select',
		'options'     => array(
			'local'   => esc_html__( 'Locally Hosted .mp4', 'progression-elements-vayvo' ),
			'youtube'    => esc_html__( 'Youtube', 'progression-elements-vayvo' ),
			'vimeo'    => esc_html__( 'Vimeo', 'progression-elements-vayvo' ),
			'embed'    => esc_html__( 'Embedded Video/Third party', 'progression-elements-vayvo' ),
		),
	) );
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Hosted Video (.mp4)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_mp4',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name' => esc_html__('Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_poster',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Youtube Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL after ?v=', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_youtube_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'youtube',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Vimeo Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_vimeo_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'vimeo',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Embedded Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_embed',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'embed',
		 ),
	) );
	
	
	
	$progression_studios_cmb->add_field( array(
		'name'       => esc_html__('Season 5 Title', 'progression-elements-vayvo'),
		'id'         => $prefix . 'season_title_five',
		'type'       => 'text',
 		'tab'  => 'season_5_tab',
 		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	
	
	$group_field_id_three = $progression_studios_cmb->add_field( array(
		'id'          => $prefix . 'display_season_five',
		'type'        => 'group',
		'tab'        => 'season_5_tab',
		'render_row_cb' => array('CMB2_Tabs', 'tabs_render_group_row_cb'),
		'options'     => array(
			'group_title'   => esc_html__( 'Episode {#}', 'progression-elements-vayvo' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Episode', 'progression-elements-vayvo' ),
			'remove_button' => esc_html__( 'Remove Episode', 'progression-elements-vayvo' ),
			'sortable'      => true, // beta
			'closed'         => true, // true to have the groups closed by default
		),
		
	) );
	
	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__( 'Episode Title', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_title',
		'type'       => 'text',
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized value
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'        => esc_html__( 'Episode Description', 'progression-elements-vayvo' ),
		'id'          => $prefix .  'description',
		'type'        => 'textarea_small',
		'attributes'  => array(
				'rows'        => 3,
			),
		'sanitization_cb' => 'progression_studios_html_allow', // function should return a sanitized valu
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__( 'Episode Thumbnail', 'progression-elements-vayvo' ),
		'id'         => $prefix .  'episode_image',
		'type'       => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Release Date', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_release_date',
		'type'       => 'text_date',
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Duration', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_media_duration_meta',
		'type'       => 'text',
	) );
	
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Video Display', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_display',
		'type'       => 'select',
		'options'     => array(
			'local'   => esc_html__( 'Locally Hosted .mp4', 'progression-elements-vayvo' ),
			'youtube'    => esc_html__( 'Youtube', 'progression-elements-vayvo' ),
			'vimeo'    => esc_html__( 'Vimeo', 'progression-elements-vayvo' ),
			'embed'    => esc_html__( 'Embedded Video/Third party', 'progression-elements-vayvo' ),
		),
	) );
	
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Hosted Video (.mp4)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_mp4',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name' => esc_html__('Hosted Video Poster', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_poster',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'local',
		 ),
	) );
	

	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Youtube Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL after ?v=', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_youtube_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'youtube',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Vimeo Video (ID)', 'progression-elements-vayvo'),
		'desc'       => esc_html__('You can find the id at the end of the URL', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_vimeo_video',
		'type'       => 'text',
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'vimeo',
		 ),
	) );
	
	$progression_studios_cmb->add_group_field( $group_field_id_three, array(
		'name'       => esc_html__('Embedded Video/Audio', 'progression-elements-vayvo'),
		'desc'       => esc_html__('Paste in your video url or embed code', 'progression-elements-vayvo'),
		'id'         => $prefix . 'episode_video_embed',
		'type'       => 'textarea_code',
		'options' => array( 'disable_codemirror' => true ),
		'attributes'    => array(
		            'data-conditional-id'     => 'progression_studios_episode_video_display',
		            'data-conditional-value'  => 'embed',
		 ),
	) );
	
	
	
	
	
}









add_action( 'cmb2_admin_init', 'progression_studios_cast_taxonomy_meta_box' );
function progression_studios_cast_taxonomy_meta_box() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'progression_studios_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$progression_studios_cmb = new_cmb2_box( array(
		'id'            => $prefix . 'metabox_media_cast_settings',
		'title'         => esc_html__('Post Meta', 'progression-elements-vayvo'),
		'object_types'     => array( 'term' ),
		'taxonomies'       => array( 'video-cast', 'video-director', 'video-type', 'video-genres', 'video-category' ),
	) );
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Image Icon/Photo', 'progression-elements-vayvo'),
		'id'         => $prefix . 'cast_Photo',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	$progression_studios_cmb->add_field( array(
		'name' => esc_html__('Background Image', 'progression-elements-vayvo'),
		'id'         => $prefix . 'background_image',
		'type'         => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
	
	
	

}