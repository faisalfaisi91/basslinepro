<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.


class Widget_ProgressionElementsVideoSlider extends Widget_Base {

	public function get_name() {
		return 'progression-studios-video-slider';
	}

	public function get_title() {
		return esc_html__( 'Video Slider - Vayvo', 'progression-elements-vayvo' );
	}

	public function get_icon() {
		return 'eicon-slideshow progression-studios-vayvo-pe';
	}

   public function get_categories() {
		return [ 'progression-elements-vayvo-cat' ];
	}
	
	public function get_script_depends() { 
		return [ 'boosted_elements_progression_flexslider_js', 'afterglow' ];
	}
	
	
	function Widget_ProgressionElementsVideoSlider($widget_instance){
		
	}
	
	protected function _register_controls() {
		
		
		
		
  		$this->start_controls_section(
  			'section_title_boosted_slider_options',
  			[
  				'label' => esc_html__( 'Slider Options', 'progression-elements-vayvo' )
  			]
  		);
		
		$this->add_responsive_control(
			'progression_elements_slider_main_height',
			[
				'label' => esc_html__( 'Slider Height', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 80,
					'unit' => 'vh',
				],
				'range' => [
					'px' => [
						'min' => 100,
						'max' => 1500,
					],
					'vh' => [
						'min' => 10,
						'max' => 150,
					],
				],
				'size_units' => [ 'px', 'vh', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .progression-studios-skrn-slider-background' => 'height:{{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'progression_elements_slider_transition',
			[
				'label' => esc_html__( 'Slide Transition', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'fade',
				'options' => [
					'fade' => esc_html__( 'Fade', 'progression-elements-vayvo' ),
					'slide' => esc_html__( 'Slide', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_elements_slide_transition_speed',
			[
				'label' => esc_html__( 'Transition Speed', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '1000',
			]
		);
		
		$this->add_control(
			'progression_elements_slider_css3_animation',
			[
				'label' => esc_html__( 'Text Animation', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'progression_animate_none',
				'options' => [
					'progression_animate_none' => esc_html__( 'No Animation', 'progression-elements-vayvo' ),
					'progression_animate_in' => esc_html__( 'Zoom In', 'progression-elements-vayvo' ),
					'progression_animate_out' => esc_html__( 'Zoom Out', 'progression-elements-vayvo' ),
					'progression_animate_up' => esc_html__( 'Fade Up', 'progression-elements-vayvo' ),
					'progression_animate_down' => esc_html__( 'Fade Down', 'progression-elements-vayvo' ),
					'progression_animate_right' => esc_html__( 'Fade Right', 'progression-elements-vayvo' ),
					'progression_animate_left' => esc_html__( 'Fade Left', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_elements_autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_play_number_speed',
			[
				'label' => esc_html__( 'Autoplay Speed', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '7500'
			]
		);
		
		
		$this->add_control(
			'progression_elements_slider_pause_hover',
			[
				'label' => esc_html__( 'Pause on Hover', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_slider_arrow_visiblity',
			[
				'label' => esc_html__( 'Slide Arrows', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'progression_elements_slider_arrow_visiblity_hover',
				'options' => [
					'progression_elements_slider_arrow_visiblity_visible' => esc_html__( 'Always Visible', 'progression-elements-vayvo' ),
					'progression_elements_slider_arrow_visiblity_hover' => esc_html__( 'Visible on Hover', 'progression-elements-vayvo' ),
					'progression_elements_slider_arrow_visiblity_hidden' => esc_html__( 'Hidden', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_elements_slider_bullets_visiblity',
			[
				'label' => esc_html__( 'Slide Bullets', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'progression_elements_slider_dots_visiblity_visible',
				'options' => [
					'progression_elements_slider_dots_visiblity_visible' => esc_html__( 'Always Visible', 'progression-elements-vayvo' ),
					'progression_elements_slider_dots_visiblity_hover' => esc_html__( 'Visible on Hover', 'progression-elements-vayvo' ),
					'progression_elements_slider_dots_visiblity_hidden' => esc_html__( 'Hidden', 'progression-elements-vayvo' ),
				],
			]
		);
		

		
		$this->end_controls_section();
		
		

  		$this->start_controls_section(
  			'section_title_global_options',
  			[
  				'label' => esc_html__( 'Slider Settings', 'progression-elements-vayvo' )
  			]
  		);
		
		$this->add_control(
			'progression_main_post_count',
			[
				'label' => esc_html__( 'Post Count', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '3',
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
  			'section_title_boosted_post_layout',
  			[
  				'label' => esc_html__( 'Post Layout', 'progression-elements-vayvo' )
  			]
  		);
		
		
		$this->add_control(
			'progression_elements_slider_reflection',
			[
				'label' => esc_html__( 'Show Reflection', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_slider_play_button',
			[
				'label' => esc_html__( 'Show Play Button', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		

		$this->add_control(
			'progression_elements_video_meta',
			[
				'label' => esc_html__( 'Show Meta?', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_post_genre',
			[
				'label' => esc_html__( 'Show Genre', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_post_cat',
			[
				'label' => esc_html__( 'Show Category', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_post_types',
			[
				'label' => esc_html__( 'Show Types', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		
		
		$this->add_control(
			'progression_elements_post_rating',
			[
				'label' => esc_html__( 'Show Rating', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		
		$this->add_control(
			'progression_elements_post_release_date',
			[
				'label' => esc_html__( 'Show Release Year', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		
		$this->add_control(
			'progression_elements_post_film_rating',
			[
				'label' => esc_html__( 'Show Film Rating', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		
		
		$this->add_control(
			'progression_elements_post_excerpt',
			[
				'label' => esc_html__( 'Show Excerpt', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		
		
		
		
		
		$this->end_controls_section();
		
		
		
		
		
		
		
		$this->start_controls_section(
			'boosted_elements_section_main_styles',
			[
				'label' => esc_html__( 'Main Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		

		
		
		$this->add_responsive_control(
			'boosted_elements_content_width',
			[
				'label' => esc_html__( 'Text Width', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ '%', 'px' ],
				'default' => [
					'size' => '540',
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .progression-skrn-slider-content-max-width' => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'boosted_elements_container_width',
			[
				'label' => esc_html__( 'Container Max Width', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1500,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ '%', 'px' ],
				'default' => [
					'size' => '82',
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .progression-skrn-slider-container-max-width' => 'max-width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'boosted_elements_content_padding',
			[
				'label' => esc_html__( 'Content Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .progression-skrn-slider-content-margins' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
	
	
		$this->add_responsive_control(
			'boosted_elements_vertical_position',
			[
				'label' => esc_html__( 'Vertical Position', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'default' => 'middle',
				'options' => [
					'top' => [
						'title' => esc_html__( 'Top', 'progression-elements-vayvo' ),
						'icon' => 'eicon-v-align-top',
					],
					'middle' => [
						'title' => esc_html__( 'Middle', 'progression-elements-vayvo' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => esc_html__( 'Bottom', 'progression-elements-vayvo' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .progression-skrn-slider-text-floating-container' => '{{VALUE}}',
				],
				'selectors_dictionary' => [
					'top' => 'display:block;',
					'middle' => 'display:table-cell; vertical-align:middle;',
					'bottom' => 'position:absolute; bottom:0px;',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'boosted_elements_horizontal_position',
			[
				'label' => esc_html__( 'Horizontal Position', 'progression-elements-vayvo' ),
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
				'selectors' => [
					'{{WRAPPER}} .progression-skrn-slider-content-floating-container' => '{{VALUE}}',
				],
				'default' => 'left',
				'selectors_dictionary' => [
					'left' => 'float:left;',
					'center' => '',
					'right' => 'float:right;',
				],
			]
		);

		
		
		$this->add_control(
			'boosted_flip_box_front_title_styles',
			[
				'type' => Controls_Manager::HEADING,
				'label' => esc_html__( 'Slide Overlay Color', 'progression-elements-vayvo' ),
				'separator' => 'before',
			]
		);
		
		
		
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'progression_elements_background_overlay',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .slider-background-overlay-color',
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
				'selector' => '{{WRAPPER}} h2.progression-vayvo-progression-slider-title',
			]
		);
		
		$this->add_control(
			'boosted_elements_title_font_color',
			[
				'label' => esc_html__( 'Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-vayvo-progression-slider-title a' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_control(
			'boosted_elements_title_hover_font_color',
			[
				'label' => esc_html__( 'Title Hover Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-vayvo-progression-slider-title a:hover' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} h2.progression-vayvo-progression-slider-title' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		
		
		
		
		$this->start_controls_section(
			'section_styles_post_meta_styles',
			[
				'label' => esc_html__( 'Post Meta Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
	
		

		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_post_meta_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} ul.slider-video-post-meta-list li',
			]
		);
		
		
		$this->add_control(
			'progression_elements_post_meta_border_color',
			[
				'label' => esc_html__( 'Post Meta Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.slider-video-post-meta-list li, {{WRAPPER}} ul.slider-video-post-meta-list li a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'progression_elements_post_meta_font_color',
			[
				'label' => esc_html__( 'Post Meta Border', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.slider-video-post-meta-list li' => 'border-color: {{VALUE}}',
				],
			]
		);
		

		$this->add_responsive_control(
			'boosted_elements_post_meta_padding_right',
			[
				'label' => esc_html__( 'Post Meta Padding Right', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ul.slider-video-post-meta-list li' => 'margin-right: {{SIZE}}px; padding-right: {{SIZE}}px;',
				],
			]
		);
		
		$this->add_responsive_control(
			'boosted_elements_post_meta_margin_bottom',
			[
				'label' => esc_html__( 'Post Meta Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -20,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ul.slider-video-post-meta-list' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		
		$this->end_controls_section();
		
		
		
		
		$this->start_controls_section(
			'section_styles_meta_styles',
			[
				'label' => esc_html__( 'Excerpt Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
	
		
		$this->add_control(
			'boosted_elements_heading_meta',
			[
				'type' => Controls_Manager::HEADING,
				'label' => esc_html__( 'Excerpt', 'progression-elements-vayvo' ),
				'separator' => 'before',
			]
		);
		

		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_escerpt_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .progression-studios-video-slider-excerpt',
			]
		);
		
		
		$this->add_control(
			'progression_elements_excerpt_font_color',
			[
				'label' => esc_html__( 'Excerpt Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-video-slider-excerpt' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'boosted_elements_excerpt_margin_bottom',
			[
				'label' => esc_html__( 'Excerpt Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -20,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .progression-studios-video-slider-excerpt' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);

		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_category_styles',
			[
				'label' => esc_html__( 'Button Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		
		$this->add_responsive_control(
			'progression_elements_category_padding',
			[
				'label' => esc_html__( 'Button Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} a.vayvo-progression-slider-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_category_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} a.vayvo-progression-slider-button',
			]
		);
		
		
		
		
		$this->start_controls_tabs( 'boosted_elements_category_tabs' );

		$this->start_controls_tab( 'boosted_elements_category_normal', [ 'label' => esc_html__( 'Normal', 'progression-elements-vayvo' ) ] );

		$this->add_control(
			'boosted_elements_cat_button_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a.vayvo-progression-slider-button' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'boosted_elements_cat_button_background_color',
			[
				'label' => esc_html__( 'Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a.vayvo-progression-slider-button' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'boosted_elements_button_box_shadow',
				'selector' => '{{WRAPPER}} a.vayvo-progression-slider-button',
			]
		);

		
		$this->end_controls_tab();

		$this->start_controls_tab( 'boosted_elements_cat_hover', [ 'label' => esc_html__( 'Hover', 'progression-elements-vayvo' ) ] );

		$this->add_control(
			'boosted_elements_bcat_utton_hover_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a.vayvo-progression-slider-button:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'boosted_elements_cat_button_hover_background_color',
			[
				'label' => esc_html__( 'Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} a.vayvo-progression-slider-button:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'boosted_elements_button_box_shadow_hover',
				'selector' => '{{WRAPPER}} a.vayvo-progression-slider-button:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();
		
		
		$this->add_responsive_control(
			'boosted_elements_category_margin_bottom',
			[
				'label' => esc_html__( 'Button Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} a.vayvo-progression-slider-button' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		

		$this->end_controls_section();
		
		
		
		
		
		$this->start_controls_section(
			'section_styles_nav_styles',
			[
				'label' => esc_html__( 'Navigation Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		
		$this->add_control(
			'progression_elements_nav_arrow_color',
			[
				'label' => esc_html__( 'Arrow Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-post-slider-main .flex-direction-nav a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'progression_elements_nav_arrow_hover_color',
			[
				'label' => esc_html__( 'Arrow Hover Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-post-slider-main .flex-direction-nav a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		
		
		
		$this->add_control(
			'progression_elements_nav_bullet_color',
			[
				'label' => esc_html__( 'Bullet Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-post-slider-main  .flex-control-paging li a' => 'border-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'progression_elements_nav_bullet_hover_color',
			[
				'label' => esc_html__( 'Bullet Selected Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-post-slider-main .flex-control-paging li a.flex-active' => 'background: {{VALUE}}; border-color: {{VALUE}}',
				],
			]
		);
		

		
		$this->end_controls_section();
		

		
	}
	

	protected function render( ) {
		
      $settings = $this->get_settings();
		
	?>
	
	<?php	
	global $blogloop;
	global $post;

	
	$post_per_page = $settings['progression_main_post_count'];
	$offset_new = $settings['progression_main_offset_count'];
	
	
	
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
	

	
	<div class="progression-studios-post-slider-main <?php echo esc_attr($settings['progression_elements_slider_arrow_visiblity'] ); ?> <?php echo esc_attr($settings['progression_elements_slider_bullets_visiblity'] ); ?>">
		<div id="progression-elements-progression-flexslider-<?php echo esc_attr($this->get_id()); ?>" class="flexslider">
			<ul class="slides">
				<?php while($blogloop->have_posts()): $blogloop->the_post();?>
					<?php include(locate_template('template-parts/elementor/content-slider.php')); ?>
				<?php  endwhile; // end of the loop. ?>
			</ul>
		</div><!-- #-elements-progression-flexslider-<?php echo esc_attr($this->get_id()); ?> -->
	</div><!-- close .progression-studios-post-slider-main -->

	<?php wp_reset_postdata();?>
	
	<script type="text/javascript"> 
	jQuery(document).ready(function($) {
		'use strict';

      $('#progression-elements-progression-flexslider-<?php echo esc_attr($this->get_id()); ?>').flexslider({
			prevText: "",
			nextText: "",
			slideshow:<?php if ( ! empty( $settings['progression_elements_autoplay'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,
			slideshowSpeed: <?php echo esc_attr($settings['progression_elements_play_number_speed'] ); ?>,
			animation: "<?php echo esc_attr($settings['progression_elements_slider_transition'] ); ?>",
			animationSpeed: <?php echo esc_attr($settings['progression_elements_slide_transition_speed'] ); ?>,
			pauseOnHover: <?php if ( ! empty( $settings['progression_elements_slider_pause_hover'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,
      });

	});
	</script>
	

	<?php
	
	}

	protected function content_template(){}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_ProgressionElementsVideoSlider() );