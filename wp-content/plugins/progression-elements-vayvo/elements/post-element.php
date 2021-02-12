<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.


class Widget_ProgressionElementsVideoList extends Widget_Base {

	
	public function get_name() {
		return 'progression-video-post-list';
	}

	public function get_title() {
		return esc_html__( 'Video List - Vayvo', 'progression-elements-vayvo' );
	}

	public function get_icon() {
		return 'eicon-post-list progression-studios-vayvo-pe';
	}

   public function get_categories() {
		return [ 'progression-elements-vayvo-cat' ];
	}
	
	public function get_script_depends() { 
		return [ 'boosted_elements_progression_masonry_js' ];
	}
	
	
	function Widget_ProgressionElementsVideoList($widget_instance){
		
	}
	
	protected function _register_controls() {

		
  		$this->start_controls_section(
  			'section_title_global_options',
  			[
  				'label' => esc_html__( 'Post Settings', 'progression-elements-vayvo' )
  			]
  		);
		
		$this->add_control(
			'boosted_post_list_text_title',
			[
				'label' => esc_html__( 'Section Heading', 'progression-elements-progression' ),
				'type' => Controls_Manager::TEXT,
			]
		);
		
		$this->add_control(
			'boosted_post_list_sub_heading_text_title',
			[
				'label' => esc_html__( 'Section Sub-Heading', 'progression-elements-progression' ),
				'type' => Controls_Manager::TEXT,
			]
		);
		
		$this->add_control(
			'progression_main_post_count',
			[
				'label' => esc_html__( 'Post Count', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '6',
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_image_grid_column_count',
			[
  				'label' => esc_html__( 'Columns', 'progression-elements-vayvo' ),
				'label_block' => true,
				'type' => Controls_Manager::SELECT,				
				'desktop_default' => '33.330%',
				'tablet_default' => '50%',
				'mobile_default' => '100%',
				'options' => [
					'100%' => esc_html__( '1 Column', 'progression-elements-vayvo' ),
					'50%' => esc_html__( '2 Column', 'progression-elements-vayvo' ),
					'33.330%' => esc_html__( '3 Columns', 'progression-elements-vayvo' ),
					'25%' => esc_html__( '4 Columns', 'progression-elements-vayvo' ),
					'20%' => esc_html__( '5 Columns', 'progression-elements-vayvo' ),
					'16.67%' => esc_html__( '6 Columns', 'progression-elements-vayvo' ),
				],
				'selectors' => [
					'{{WRAPPER}} .progression-masonry-item' => 'width: {{VALUE}};',
				],
				'render_type' => 'template'
			]
		);
		
		
  		$this->add_responsive_control(
  			'progression_elements_image_grid_margin',
  			[
  				'label' => esc_html__( 'Margin', 'progression-elements-vayvo' ),
  				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 3,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 120,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .progression-masonry-margins' => 'margin-left:-{{SIZE}}px; margin-right:-{{SIZE}}px;',
					'{{WRAPPER}} .progression-masonry-padding-blog' => 'padding: {{SIZE}}px;',
				],
				'render_type' => 'template'
  			]
  		);
		
		
		
		$this->add_control(
			'boosted_post_list_masonry',
			[
				'label' => esc_html__( 'Masonry Layout', 'progression-elements-progression' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		
		$this->add_control(
			'progression_elements_post_list_pagination',
			[
				'label' => esc_html__( 'Post Pagination', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'no-pagination',
				'options' => [
					'no-pagination' => esc_html__( 'No Pagination', 'progression-elements-vayvo' ),
					'default' => esc_html__( 'Default Pagination', 'progression-elements-vayvo' ),
					'load-more' => esc_html__( 'Load More Posts', 'progression-elements-vayvo' ),
					'infinite-scroll' => esc_html__( 'Inifinite Scroll', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_main_post_load_more',
			[
				'label' => esc_html__( 'Load More Text', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Load More',
				'condition' => [
					'progression_elements_post_list_pagination' => 'load-more',
				],
			]
		);
		
		

		
		$this->end_controls_section();
		
		
  		$this->start_controls_section(
  			'section_title_layout_options',
  			[
  				'label' => esc_html__( 'Post Layout', 'progression-elements-vayvo' )
  			]
  		);

		

		
		$this->add_control(
			'progression_elements_post_show_rating',
			[
				'label' => esc_html__( 'Display Rating', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		

		
		$this->add_control(
			'progression_elements_post_display_genres',
			[
				'label' => esc_html__( 'Display Video Genres', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_post_display_categories',
			[
				'label' => esc_html__( 'Display Video Categories', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		$this->add_control(
			'progression_elements_post_display_types',
			[
				'label' => esc_html__( 'Display Video Types', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		
  	

		
		$this->end_controls_section();
		
		
  		$this->start_controls_section(
  			'section_title_secondary_options',
  			[
  				'label' => esc_html__( 'Post Query', 'progression-elements-vayvo' )
  			]
  		);
		
		
		$this->add_control(
			'progression_post_types',
			[
				'label' => esc_html__( 'Narrow by Filtering Types', 'progression-elements-vayvo' ),
				'description' => esc_html__( 'Choose a filtering type to display posts', 'progression-elements-vayvo' ),
				'label_block' => true,
				'multiple' => true,
				'type' => Controls_Manager::SELECT2,
				'options' => vayvo_elements_post_type_types(),
			]
		);

		
		$this->add_control(
			'progression_post_genres',
			[
				'label' => esc_html__( 'Narrow by Genres', 'progression-elements-vayvo' ),
				'description' => esc_html__( 'Choose a genre to display posts', 'progression-elements-vayvo' ),
				'label_block' => true,
				'multiple' => true,
				'type' => Controls_Manager::SELECT2,
				'options' => vayvo_elements_post_type_genres(),
			]
		);
		
		$this->add_control(
			'progression_post_cats',
			[
				'label' => esc_html__( 'Narrow by Category', 'progression-elements-vayvo' ),
				'description' => esc_html__( 'Choose a category to display posts', 'progression-elements-vayvo' ),
				'label_block' => true,
				'multiple' => true,
				'type' => Controls_Manager::SELECT2,
				'options' => vayvo_elements_post_type_categories(),
			]
		);
		
		
		
		
		
		
		
		$this->add_control(
			'progression_elements_post_order_sorting',
			[
				'label' => esc_html__( 'Order By', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => [
					'date' => esc_html__( 'Default - Date', 'progression-elements-vayvo' ),
					'title' => esc_html__( 'Post Title', 'progression-elements-vayvo' ),
					'menu_order' => esc_html__( 'Menu Order', 'progression-elements-vayvo' ),
					'modified' => esc_html__( 'Last Modified', 'progression-elements-vayvo' ),
					'comment_count' => esc_html__( 'Comment Count', 'progression-elements-viseo' ),
					'rand' => esc_html__( 'Random', 'progression-elements-vayvo' ),
				],
			]
		);
		
		
		$this->add_control(
			'progression_elements_post_order',
			[
				'label' => esc_html__( 'Order', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'ASC' => esc_html__( 'Ascending', 'progression-elements-vayvo' ),
					'DESC' => esc_html__( 'Descending', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_main_offset_count',
			[
				'label' => esc_html__( 'Offset Count', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
				'description' => esc_html__( 'Use this to skip over posts (Example: 3 would skip the first 3 posts.)', 'progression-elements-vayvo' ),
			]
		);
	
		
		$this->end_controls_section();
		
		
  		$this->start_controls_section(
  			'section_title_post_filtering',
  			[
  				'label' => esc_html__( 'Post Sorting', 'progression-elements-vayvo' )
  			]
  		);
		
		
		$this->add_control(
			'progression_elements_post_sorting',
			[
  				'label' => esc_html__( 'Video Sorting', 'progression-elements-vayvo' ),
				'label_block' => true,
				'type' => Controls_Manager::SELECT,				
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'No Sorting', 'progression-elements-vayvo' ),
					'type' => esc_html__( 'Sort by Type', 'progression-elements-vayvo' ),
					'genre' => esc_html__( 'Sort by Genre', 'progression-elements-vayvo' ),
					'category' => esc_html__( 'Sort by Category', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_elements_post_filtering_text',
			[
				'label' => esc_html__( 'Sorting Text for "All Posts"', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'All', 'progression-elements-vayvo' ),
			]
		);
		
		

		
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'progression_elements_section_main_styles',
			[
				'label' => esc_html__( 'Main Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		

		
  		$this->add_control(
  			'progression_elements_container_border-radius',
  			[
  				'label' => esc_html__( 'Container Border Radius', 'progression-elements-vayvo' ),
  				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .video-index-border-hover, {{WRAPPER}} .progression-video-index-content, {{WRAPPER}} .progression-studios-video-index-container, {{WRAPPER}}  .progression-studios-video-feaured-image img' => 'border-radius: {{SIZE}}px;',
				],
  			]
  		);
		

		
		$this->add_responsive_control(
			'progression_elements_content_padding',
			[
				'label' => esc_html__( 'Container Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .progression-video-index-vertical-align' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'progression_elements_background_overlay',
				'types' => [ 'classic', 'gradient' ],
				'separator' => 'before',
				'selector' => '{{WRAPPER}} .progression-video-index-content',
			]
		);
		
		
		$this->add_control(
			'progression_elements_image_background_color',
			[
				'label' => esc_html__( 'Border Hover Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-video-index-container:hover .video-index-border-hover' => 'border-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'progression_elements_rating_color',
			[
				'label' => esc_html__( 'Rating Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .average-rating-video-empty' => 'color: {{VALUE}}',
				],
			]
		);
		
		
		$this->add_control(
			'progression_elements_rating_selected_color',
			[
				'label' => esc_html__( 'Rating Fill Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .average-rating-video-filled' => 'color: {{VALUE}}',
				],
			]
		);
		
		
		$this->end_controls_section();
		

		
		$this->start_controls_section(
			'section_styles_heading_styles',
			[
				'label' => esc_html__( 'Section Heading Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'boosted_flip_box_front_title_styles',
			[
				'type' => Controls_Manager::HEADING,
				'label' => esc_html__( 'Title', 'progression-elements-vayvo' ),
				'separator' => 'before',
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_heading_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.progression-studios-skrn-post-list-title',
			]
		);
		
		$this->add_control(
			'boosted_elements_heading_font_color',
			[
				'label' => esc_html__( 'Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'progression_elements_secting_heading_margin',
			[
				'label' => esc_html__( 'Section Margin', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_secting_heading_align',
			[
				'label' => esc_html__( 'Align', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title' => 'text-align: {{VALUE}}',
				],
			]
		);
		
		
		
		$this->add_control(
			'boosted_flip_box_front_sub_title_styles',
			[
				'type' => Controls_Manager::HEADING,
				'label' => esc_html__( 'Sub-Title', 'progression-elements-vayvo' ),
				'separator' => 'before',
			]
		);
		
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_sub_heading_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.progression-studios-skrn-post-list-title span',
			]
		);
		
		$this->add_control(
			'boosted_elements_heading_sub_font_color',
			[
				'label' => esc_html__( 'Sub-Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title span' => 'color: {{VALUE}};',
				],
			]
		);

		
		
		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_title_styles',
			[
				'label' => esc_html__( 'Title Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_title_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.progression-video-title',
			]
		);
		
		$this->add_control(
			'boosted_elements_title_font_color',
			[
				'label' => esc_html__( 'Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-video-title' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'boosted_elements_title_margin_bottom',
			[
				'label' => esc_html__( 'Title Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -20,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} h2.progression-video-title' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_meta_styles',
			[
				'label' => esc_html__( 'Meta Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
				
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_escerpt_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} ul.video-index-meta-taxonomy li',
			]
		);
		
		
		$this->add_control(
			'progression_elements_excerpt_font_color',
			[
				'label' => esc_html__( 'Meta Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.video-index-meta-taxonomy li' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'boosted_elements_excerpt_margin_bottom',
			[
				'label' => esc_html__( 'Meta Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -50,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ul.video-index-meta-taxonomy li' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		
		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_load_more_styles',
			[
				'label' => esc_html__( 'Load More Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'section_styles_load_more_icon',
			[
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => 'fa-arrow-circle-down',
			]
		);
		
		$this->add_control(
			'section_styles_load_more_icon_indent',
			[
				'label' => esc_html__( 'Icon Spacing', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a span i' => 'margin-left: {{SIZE}}px;',
				],
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_load_more_margin',
			[
				'label' => esc_html__( 'Margin', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'progression_elements_load_more_padding',
			[
				'label' => esc_html__( 'Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_load_moretypography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .infinite-nav-pro a',
			]
		);
		
		
		
		
		$this->start_controls_tabs( 'boosted_elements_button_tabs' );

		$this->start_controls_tab( 'normal', [ 'label' => esc_html__( 'Normal', 'progression-elements-vayvo' ) ] );

		$this->add_control(
			'boosted_elements_button_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'boosted_elements_button_background_color',
			[
				'label' => esc_html__( 'Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'boosted_elements_button_border_color',
			[
				'label' => esc_html__( 'Border Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'border-color: {{VALUE}};',
				],
			]
		);

		
		$this->end_controls_tab();

		$this->start_controls_tab( 'boosted_elements_hover', [ 'label' => esc_html__( 'Hover', 'progression-elements-vayvo' ) ] );

		$this->add_control(
			'boosted_elements_button_hover_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'boosted_elements_button_hover_background_color',
			[
				'label' => esc_html__( 'Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'boosted_elements_button_hover_border_color',
			[
				'label' => esc_html__( 'Border Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		
		
		
		
		$this->start_controls_section(
			'section_styles_post_sorting_styles',
			[
				'label' => esc_html__( 'Post Sorting Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		

		
		$this->add_responsive_control(
			'progression_elements_sorting_margins',
			[
				'label' => esc_html__( 'Sorting Container Margin', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_sorting_padding',
			[
				'label' => esc_html__( 'Sorting List Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		

		
		$this->add_responsive_control(
			'boosted_elements_sorting_align',
			[
				'label' => esc_html__( 'Align', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group' => 'text-align: {{VALUE}}',
				],
			]
		);
		
		
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'boosted_elements_sorting_align_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} ul.progression-filter-button-group li',				
			]
		);
		
		$this->add_control(
			'progression_elements_sorting_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li' => 'color: {{VALUE}}',
				],
			]
		);
		


		$this->add_control(
			'progression_elements_sorting_selected_text_color',
			[
				'label' => esc_html__( 'Selected Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li.pro-checked' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
				
			]
		);
		
		$this->add_control(
			'progression_elements_sorting_selected_border_color',
			[
				'label' => esc_html__( 'Selected Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li.pro-checked' => 'background-color: {{VALUE}}',
				],
			]
		);
		

		
		
		$this->end_controls_section();
		
		
		
		
	}
	

	protected function render( ) {
		
	
	$settings = $this->get_settings();

	global $blogloop;
	global $post;
	
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {   $paged = get_query_var('page'); } else {  $paged = 1; }
	

	$post_per_page = $settings['progression_main_post_count'];
	$offset = $settings['progression_main_offset_count'];
	$offset_new = $offset + (( $paged - 1 ) * $post_per_page);
	
	
	
	if ( ! empty( $settings['progression_post_cats'] ) ) {
		$formatarray = $settings['progression_post_cats']; // get custom field value
		
		$catarray = $settings['progression_post_cats']; // get custom field value
		if($catarray >= 1 ) { 
			$catids = implode(', ', $catarray); 
		} else {
			$catids = '';
		}
		
		if($formatarray >= 1) { 
			$formatids = implode(', ', $formatarray);
         $formatidsexpand = explode(', ', $formatids);
			$formatoperator = 'IN'; 
		} else {
			$formatidsexpand = '';
			$formatoperator = 'NOT IN'; 
		}
		$operator = 'IN';
 	} else {

	 		$formatidsexpand = '';
			$operator = 'NOT IN';
 	}
	
	
	if ( ! empty( $settings['progression_post_types'] ) ) {
		$formattagarray = $settings['progression_post_types']; // get custom field value
		
		$tagarray = $settings['progression_post_types']; // get custom field value
		if($tagarray >= 1 ) { 
			$cattagidss = implode(', ', $tagarray); 
		} else {
			$cattagidss = '';
		}
		
		if($formattagarray >= 1) { 
			$formatagids = implode(', ', $formattagarray);
         $formatagidsexpand = explode(', ', $formatagids);
			$formatotagperator = 'IN'; 
		} else {
			$formatagidsexpand = '';
			$formatotagperator = 'NOT IN'; 
		}
		$tagoperator = 'IN';
 	} else {

	 		$formatagidsexpand = '';
			$tagoperator = 'NOT IN';
 	}
	
	/* Duplicate
	if ( ! empty( $settings['progression_post_genres'] ) ) {
		$formatgenrearray = $settings['progression_post_genres']; // get custom field value
		
		$genrearray = $settings['progression_post_genres']; // get custom field value
		if($genrearray >= 1 ) { 
			$catgenreidss = implode(', ', $genrearray); 
		} else {
			$catgenreidss = '';
		}
		
		if($formatgenrearray >= 1) { 
			$formagenreids = implode(', ', $formatgenrearray);
         $formataggenresexpand = explode(', ', $formagenreids);
			$formagenresidsexpand = 'IN'; 
		} else {
			$formataggenresexpand = '';
			$formagenresidsexpand = 'NOT IN'; 
		}
		$genreoperator = 'IN';
 	} else {

	 		$formagenresidsexpand = '';
			$genreoperator = 'NOT IN';
 	}
	*/
	
	
	if ( ! empty( $settings['progression_post_genres'] ) ) {
		$formatgenrearray = $settings['progression_post_genres']; // get custom field value
		
		$genrearray = $settings['progression_post_genres']; // get custom field value
		if($genrearray >= 1 ) { 
			$catgenreidss = implode(', ', $genrearray); 
		} else {
			$catgenreidss = '';
		}
		
		if($formatgenrearray >= 1) { 
			$formagenreids = implode(', ', $formatgenrearray);
         $formagenreidsexpand = explode(', ', $formagenreids);
			$formatogenreperator = 'IN'; 
		} else {
			$formagenreidsexpand = '';
			$formatogenreperator = 'NOT IN'; 
		}
		$genreoperator = 'IN';
 	} else {

	 		$formagenreidsexpand = '';
			$genreoperator = 'NOT IN';
 	}
	
	
	
 	$args = array(
 	        'post_type'         => 'video_skrn',
			  'orderby'         => $settings['progression_elements_post_order_sorting'],
			  'order'         => $settings['progression_elements_post_order'],
			  'ignore_sticky_posts' => 1,
			  'posts_per_page'     =>  $post_per_page,
			  'paged' => $paged,
			  'offset' => $offset_new,
			  'tax_query' => array(
				  'relation' => 'AND',
		        array(
		            'taxonomy' => 'video-category',
		            'field'    => 'slug',
		            'terms'    => $formatidsexpand,
						'operator' => $operator
		        ),
		        array(
	            'taxonomy' => 'video-type',
		            'field'    => 'slug',
		            'terms'    => $formatagidsexpand,
						'operator' => $tagoperator
		        ),
		        array(
	            'taxonomy' => 'video-genres',
		            'field'    => 'slug',
		            'terms'    => $formagenreidsexpand,
						'operator' => $genreoperator
		        ),
			  ),
 	);

	$blogloop = new \WP_Query( $args );
	?>
	

	
	<div class="progression-studios-elementor-review-container">
		

		<?php if ( $settings['progression_elements_post_sorting'] != 'none' ) : ?>
			<ul class="progression-filter-button-group progression-filter-group-<?php echo esc_attr($this->get_id()); ?>">
				<?php if ( $settings['progression_elements_post_sorting'] == 'type' ) : ?>
					<?php if($settings['progression_post_types']): ?>
	
	
						<?php
							$i = 0;
							
							
							$postIds =  $formatagids; // get custom field value
						    $arrayIds = explode(',', $postIds); // explode value into an array of ids
						    if(count($arrayIds) <= 1) // if array contains one element or less, there's spaces after comma's, or you only entered one id
						    {
						        if( strpos($arrayIds[0], ',') !== false )// if the first array value has commas, there were spaces after ids entered
						        {
						            $arrayIds = array(); // reset array
						            $arrayIds = explode(', ', $postIds); // explode ids with space after comma's
						        }
							 }
							
							
							$args_type = array(
							    'hide_empty'             => '0',
							    'slug'              => $arrayIds,
							); 
							$terms = get_terms( 'video-type', $args_type );
							
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

								foreach ( $terms as $term ) {
								$term_photo = get_term_meta( $term->term_id, 'progression_studios_cast_Photo', true);
								if ($i == 0) {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								} else if ($i > 0)  {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								}
								$i++;
								}
							}	
						?>
					<?php else : ?>
						<?php
							$i = 0;
							$terms = get_terms( 'video-type', 'hide_empty=0' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

								foreach ( $terms as $term ) {
								$term_photo = get_term_meta( $term->term_id, 'progression_studios_cast_Photo', true);
								if ($i == 0) {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								} else if ($i > 0)  {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								}
								$i++;
								}
							}	
						?>
					<?php endif ?>
				<?php endif; ?>
				
				
				<?php if ( $settings['progression_elements_post_sorting'] == 'genre' ) : ?>
					<?php if($settings['progression_post_genres']): ?>
						<?php
							$i = 0;
							
							$postIds =  $formagenreids; // get custom field value
						    $arrayIds = explode(',', $postIds); // explode value into an array of ids
						    if(count($arrayIds) <= 1) // if array contains one element or less, there's spaces after comma's, or you only entered one id
						    {
						        if( strpos($arrayIds[0], ',') !== false )// if the first array value has commas, there were spaces after ids entered
						        {
						            $arrayIds = array(); // reset array
						            $arrayIds = explode(', ', $postIds); // explode ids with space after comma's
						        }
							 }

							$args_genres = array(
							    'hide_empty'        => '0',
							    'slug'              => $arrayIds,
							); 

							$terms = get_terms( 'video-genres', $args_genres );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

								foreach ( $terms as $term ) {
								$term_photo = get_term_meta( $term->term_id, 'progression_studios_cast_Photo', true);
								if ($i == 0) {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								} else if ($i > 0)  {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								}
								$i++;
								}
							}	
						?>
					<?php else : ?>
						
						<?php
							$i = 0;
							$terms = get_terms( 'video-genres', 'hide_empty=0' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
								echo '<li class="pro-checked" data-filter="*"><div class="skrn-sorting-container-padding">' . $settings['progression_elements_post_filtering_text'] .'</div></li> ';	
				
								foreach ( $terms as $term ) {
								$term_photo = get_term_meta( $term->term_id, 'progression_studios_cast_Photo', true);
								if ($i == 0) {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								} else if ($i > 0)  {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								}
								$i++;
								}
							}	
						?>
					<?php endif ?>
				<?php endif; ?>
				
				<?php if ( $settings['progression_elements_post_sorting'] == 'category' ) : ?>
					<?php if($settings['progression_post_cats']): ?>
						<?php
							$i = 0;
							
							
							
							$postIds =  $catids; // get custom field value
						    $arrayIds = explode(',', $postIds); // explode value into an array of ids
						    if(count($arrayIds) <= 1) // if array contains one element or less, there's spaces after comma's, or you only entered one id
						    {
						        if( strpos($arrayIds[0], ',') !== false )// if the first array value has commas, there were spaces after ids entered
						        {
						            $arrayIds = array(); // reset array
						            $arrayIds = explode(', ', $postIds); // explode ids with space after comma's
						        }
							 }

							$args_cats = array(
							    'hide_empty'        => '0',
							    'slug'              => $arrayIds,
							); 
							
							
						
							$terms = get_terms( 'video-category', $args_cats );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
								echo '<li class="pro-checked" data-filter="*"><div class="skrn-sorting-container-padding">' . $settings['progression_elements_post_filtering_text'] .'</div></li> ';	
				
								foreach ( $terms as $term ) {
								$term_photo = get_term_meta( $term->term_id, 'progression_studios_cast_Photo', true);
								if ($i == 0) {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								} else if ($i > 0)  {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								}
								$i++;
								}
							}	
						?>
					<?php else : ?>
						<?php
							$i = 0;
							$terms = get_terms( 'video-category', 'hide_empty=0' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
								echo '<li class="pro-checked" data-filter="*"><div class="skrn-sorting-container-padding">' . $settings['progression_elements_post_filtering_text'] .'</div></li> ';	
				
								foreach ( $terms as $term ) {
								$term_photo = get_term_meta( $term->term_id, 'progression_studios_cast_Photo', true);
								if ($i == 0) {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								} else if ($i > 0)  {
								echo '<li data-filter=".'.$term->slug.'"><div class="skrn-sorting-container-padding"><div class="skrn-video-sorting-icon" style="background-image:url(' . $term_photo . ')"></div><div class="clearfix-pro"></div>' .$term->name .'</div></li>';	
								}
								$i++;
								}
							}	
						?>
					<?php endif ?>
				<?php endif; ?>
				
			</ul>
			<div class="clearfix-pro"></div>
		<?php endif; ?>
		
		<?php if ( $settings['boosted_post_list_text_title'] ) : ?>
			<h2 class="progression-studios-skrn-post-list-title"><?php echo esc_attr( $settings['boosted_post_list_text_title'] ); ?><?php if ( $settings['boosted_post_list_sub_heading_text_title'] ) : ?><span><?php echo esc_attr( $settings['boosted_post_list_sub_heading_text_title'] ); ?></span><?php endif; ?>
</h2>
		<?php endif; ?>

		
		
		<div class="progression-masonry-margins">
			<div id="progression-video-index-masonry-<?php echo esc_attr($this->get_id()); ?>">
				<?php while($blogloop->have_posts()): $blogloop->the_post();?>
					
				<div class="progression-masonry-item 
				<?php if ( $settings['progression_elements_post_sorting'] == 'type' ) : ?><?php  $terms = get_the_terms( $post->ID , 'video-type' );  if ( !empty( $terms ) ) : 	foreach ( $terms as $term ) { 	$term_link = get_term_link( $term, 'video-type' ); if( is_wp_error( $term_link ) ) continue; echo " ". $term->slug ; }  endif; ?><?php endif; ?>
				
				<?php if ( $settings['progression_elements_post_sorting'] == 'genre' ) : ?><?php  $terms = get_the_terms( $post->ID , 'video-genres' );  if ( !empty( $terms ) ) : 	foreach ( $terms as $term ) { 	$term_link = get_term_link( $term, 'video-genres' ); if( is_wp_error( $term_link ) ) continue; echo " ". $term->slug ; }  endif; ?><?php endif; ?>
					
				<?php if ( $settings['progression_elements_post_sorting'] == 'category' ) : ?><?php  $terms = get_the_terms( $post->ID , 'video-category' );  if ( !empty( $terms ) ) : 	foreach ( $terms as $term ) { 	$term_link = get_term_link( $term, 'video-category' ); if( is_wp_error( $term_link ) ) continue; echo " ". $term->slug ; }  endif; ?><?php endif; ?>
				
				"><!-- .progression-masonry-item -->
					<div class="progression-masonry-padding-blog">
						<div class="progression-studios-isotope-animation">
							
							<?php include(locate_template('template-parts/elementor/content-skrn_video.php')); ?>
							
						</div><!-- close .progression-studios-isotope-animation -->
					</div><!-- close .progression-masonry-padding-blog -->
				</div><!-- close .progression-masonry-item -->
				<?php  endwhile; // end of the loop. ?>
			</div><!-- close #progression-video-index-masonry-<?php echo esc_attr($this->get_id()); ?>  -->
		</div><!-- close .progression-masonry-margins -->
		
		<div class="clearfix-pro"></div>
		
				<div class="vayvo-progression-pagination-elementor">
					<?php if ( $settings['progression_elements_post_list_pagination'] == 'default' ) : ?>
						<?php
			
						$page_tot = ceil(($blogloop->found_posts - $offset) / $post_per_page);
			
						if ( $page_tot > 1 ) {
						$big        = 999999999;
				      echo paginate_links( array(
				              'base'      => str_replace( $big, '%#%',get_pagenum_link( 999999999, false ) ), // need an unlikely integer cause the url can contains a number
				              'format'    => '?paged=%#%',
				              'current'   => max( 1, $paged ),
				              'total'     => ceil(($blogloop->found_posts - $offset) / $post_per_page),
				              'prev_next' => true,
				  				'prev_text'    => esc_html__('&lsaquo; Previous', 'progression-elements-vayvo'),
				  				'next_text'    => esc_html__('Next &rsaquo;', 'progression-elements-vayvo'),
				              'end_size'  => 1,
				              'mid_size'  => 2,
				              'type'      => 'list'
				          )
				      );
						}
						?>
					<?php endif; ?>
					
							<?php if ( $settings['progression_elements_post_list_pagination'] == 'load-more' ) : ?>
			
								<?php $page_tot = ceil(($blogloop->found_posts - $offset) / $post_per_page); if ( $page_tot > 1 ) : ?>
									<div id="progression-load-more-manual">
									<div id="infinite-nav-pro-<?php echo esc_attr($this->get_id()); ?>" class="infinite-nav-pro"><div class="nav-previous"><?php next_posts_link( $settings['progression_main_post_load_more']
					. '<span><i class="fa ' . $settings['section_styles_load_more_icon'] . '"></i></span>', $blogloop->max_num_pages ); ?></div></div>
									</div>
								<?php endif ?>
							<?php endif; ?>
	
							<?php if ( $settings['progression_elements_post_list_pagination'] == 'infinite-scroll' ) : ?>
								<?php $page_tot = ceil(($blogloop->found_posts - $offset) / $post_per_page); if ( $page_tot > 1 ) : ?><div id="infinite-nav-pro-<?php echo esc_attr($this->get_id()); ?>" class="infinite-nav-pro"><div class="nav-previous"><?php next_posts_link( 'Next', $blogloop->max_num_pages ); ?></div></div><?php endif ?>
							<?php endif; ?>
				</div>
		
	</div><!-- close .progression-studios-elementor-review-container -->
	
	<div class="clearfix-pro"></div>
	
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		'use strict';
		
		/* Default Isotope Load Code */
		var $container<?php echo esc_attr($this->get_id()); ?> = $("#progression-video-index-masonry-<?php echo esc_attr($this->get_id()); ?>").isotope();
		$container<?php echo esc_attr($this->get_id()); ?>.imagesLoaded( function() {
			$(".progression-masonry-item").addClass("opacity-progression");
			$container<?php echo esc_attr($this->get_id()); ?>.isotope({
				itemSelector: "#progression-video-index-masonry-<?php echo esc_attr($this->get_id()); ?> .progression-masonry-item",				
				percentPosition: true,
				layoutMode: <?php if ( ! empty( $settings['boosted_post_list_masonry'] ) ) : ?>"masonry"<?php else: ?>"fitRows"<?php endif; ?> 
	 		});
		});
		/* END Default Isotope Code */
		
		
		<?php if ( $settings['progression_elements_post_sorting'] != 'none' ) : ?>
		$('.progression-filter-group-<?php echo esc_attr($this->get_id()); ?>').on( 'click', 'li', function() {
		  var filterValue = $(this).attr('data-filter');
		  $container<?php echo esc_attr($this->get_id()); ?>.isotope({ filter: filterValue });
		});
		
    	  $('.progression-filter-group-<?php echo esc_attr($this->get_id()); ?>').each( function( i, buttonGroup ) {
    		var $buttonGroup = $( buttonGroup );
    		$buttonGroup.on( 'click', 'li', function() {
    		  $buttonGroup.find('.pro-checked').removeClass('pro-checked');
    		  $( this ).addClass('pro-checked');
    		});
    	  });
		<?php endif ?>
		  
		  
		  
    		<?php if ( $settings['progression_elements_post_list_pagination'] == 'infinite-scroll' || $settings['progression_elements_post_list_pagination'] == 'load-more' ) : ?>
		
    		/* Begin Infinite Scroll */
    		$container<?php echo esc_attr($this->get_id()); ?>.infinitescroll({
    		errorCallback: function(){  $("#infinite-nav-pro-<?php echo esc_attr($this->get_id()); ?>").delay(500).fadeOut(500, function(){ $(this).remove(); }); },
    		  navSelector  : "#infinite-nav-pro-<?php echo esc_attr($this->get_id()); ?>",  
    		  nextSelector : "#infinite-nav-pro-<?php echo esc_attr($this->get_id()); ?> .nav-previous a", 
    		  itemSelector : "#progression-video-index-masonry-<?php echo esc_attr($this->get_id()); ?> .progression-masonry-item", 
    	   		loading: {
    	   		 	img: "<?php echo esc_url( get_template_directory_uri() );?>/images/loader.gif",
    	   			 msgText: "",
    	   		 	finishedMsg: "<div id='no-more-posts'></div>",
    	   		 	speed: 0, }
    		  },
    		  // trigger Isotope as a callback
    		  function( newElements ) {
			  
			  
    		    var $newElems = $( newElements );
 	
    				$newElems.imagesLoaded(function(){
					
    				$container<?php echo esc_attr($this->get_id()); ?>.isotope( "appended", $newElems );
    				$(".progression-masonry-item").addClass("opacity-progression");
				
    			});

    		  }
    		);
    	    /* END Infinite Scroll */
    		<?php endif; ?>
		
		
    		<?php if ( $settings['progression_elements_post_list_pagination'] == 'load-more' ) : ?>
    		/* PAUSE FOR LOAD MORE */
    		$(window).unbind(".infscr");
    		// Resume Infinite Scroll
    		$("#infinite-nav-pro-<?php echo esc_attr($this->get_id()); ?> .nav-previous a").click(function(){
    			$container<?php echo esc_attr($this->get_id()); ?>.infinitescroll("retrieve");
    			return false;
    		});
    		/* End Infinite Scroll */
    		<?php endif; ?>
		
	});
	</script>
	

	<?php wp_reset_postdata();?>
	

	<?php
	
	}

	protected function content_template(){}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_ProgressionElementsVideoList() );