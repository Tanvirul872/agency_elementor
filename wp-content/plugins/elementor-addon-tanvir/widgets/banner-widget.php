<?php
class Banner_widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'home_banner';
	}

	public function get_title()
	{
		return esc_html__('Home Banner', 'elementor-addon');
	}

	public function get_icon()
	{
		return 'eicon-code';
	}

	public function get_categories()
	{
		return ['custom-theme-category'];
	}

	public function get_keywords()
	{
		return ['Home', 'Banner'];
	}

	protected function register_controls()
	{

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__('Home Banner', 'elementor-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// Banner title 
		$this->add_control(
			'banner_title',
			[
				'label' => esc_html__('Title', 'textdomain'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('welcome to our agency', 'textdomain'),
				'placeholder' => esc_html__('Default title', 'textdomain'),
			]
		);


		// Banner subtitle 
		$this->add_control(
			'banner_subtitle',
			[
				'label' => esc_html__('Sub Title', 'textdomain'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('gain the beautiful result ', 'textdomain'),
				'placeholder' => esc_html__('Sub title', 'textdomain'),
			]
		);


		// banner description                     
		$this->add_control(
			'banner_description',
			[
				'label' => esc_html__('Banner Description', 'textdomain'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'textdomain'),
				'placeholder' => esc_html__('Write here the Description', 'textdomain'),
			]
		);


		// Button title 
		$this->add_control(
			'button_1',
			[
				'label' => esc_html__('Button 1 Title', 'textdomain'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Learn More', 'textdomain'),
				'placeholder' => esc_html__('Button title', 'textdomain'),
			]
		);

		// Button link 

		$this->add_control(
			'button_1_link',
			[
				'label' => esc_html__('Button 1 Link', 'textdomain'),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);


		// Button title 
		$this->add_control(
			'button_2',
			[
				'label' => esc_html__('Button 1 Title', 'textdomain'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Learn More', 'textdomain'),
				'placeholder' => esc_html__('Button title', 'textdomain'),
			]
		);

		// Button link 

		$this->add_control(
			'button_2_link',
			[
				'label' => esc_html__('Button 1 Link', 'textdomain'),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => ['url', 'is_external', 'nofollow'],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);



		// repeater list  

		$this->add_control(
			'list',
			[
				'label' => esc_html__('Repeater List', 'textdomain'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_title',
						'label' => esc_html__('Title', 'textdomain'),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__('List Title', 'textdomain'),
						'label_block' => true,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__('Content', 'textdomain'),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__('List Content', 'textdomain'),
						'show_label' => false,
					],
					[
						'name' => 'list_color',
						'label' => esc_html__('Color', 'textdomain'),
						'type' => \Elementor\Controls_Manager::COLOR,
						'selectors' => [
							'{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
						],
					]
				],
				'default' => [
					[
						'list_title' => esc_html__('Title #1', 'textdomain'),
						'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
					],
					[
						'list_title' => esc_html__('Title #2', 'textdomain'),
						'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);


		// editor type 

		$this->add_control(
			'item_description',
			[
				'label' => esc_html__('Description', 'textdomain'),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__('Default description', 'textdomain'),
				'placeholder' => esc_html__('Type your description here', 'textdomain'),
			]
		);



		// code control 

		$this->add_control(
			'custom_html',
			[
				'label' => esc_html__('Custom HTML', 'textdomain'),
				'type' => \Elementor\Controls_Manager::CODE,
				'language' => 'html',
				'rows' => 20,
			]
		);


		// hidden control 

		$this->add_control(
			'view',
			[
				'label' => esc_html__('View', 'textdomain'),
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'default' => 'traditional',
			]
		);


		// switcher control 

		$this->add_control(
			'show_title',
			[
				'label' => esc_html__('Show Title', 'textdomain'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Show', 'textdomain'),
				'label_off' => esc_html__('Hide', 'textdomain'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);





		$this->end_controls_section();



		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__('Content', 'elementor-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'title_desc',
			[
				'label' => esc_html__('Descripition', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Hello  23232323', 'elementor-addon'),
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'section_link',
			[
				'label' => esc_html__('Link', 'elementor-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'link_txt',
			[
				'label' => esc_html__('Link Text', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => 'true',
				'default' => esc_html__('REad More', 'elementor-addon'),
			]
		);


		$this->add_control(
			'link_url',
			[
				'label' => esc_html__('Link Text', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::URL,
				'seperator' => 'before',
				'placeholder' => __('Write Link Url Here !', 'elementor-addon'),
			]
		);

		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__('Title', 'elementor-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'title_color_heading',
			[
				'label' => esc_html__('Title color', 'textdomain'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		// color 
		$this->add_control(
			'title_color',
			[
				'label' => esc_html__('Color', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .welcome-content h4' => 'color: {{VALUE}}',
				],
			]
		);

		// typography 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .welcome-content h4',
			]
		);






		$this->end_controls_section();




		$this->start_controls_section(
			'welcome_button',
			[
				'label' => esc_html__('Button section', 'textdomain'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);





		// hover and normale styles start  
		$this->start_controls_tabs(
			'style_tabs'
		);


		// for normal 
		$this->start_controls_tab(
			'button_normal_tab',
			[
				'label' => esc_html__('Normal', 'textdomain'),
			]
		);


		// color 
		$this->add_control(
			'btn_title_color',
			[
				'label' => esc_html__('Color', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} a.box-btn' => 'color: {{VALUE}}',
				],
			]
		);

		// background color 
		$this->add_control(
			'btn_bg_color',
			[
				'label' => esc_html__('Background Color', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'tomato',
				'selectors' => [
					'{{WRAPPER}} a.box-btn' => 'background-color: {{VALUE}}',
				],
			]
		);


		// typography 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button1_typo',
				'selector' => '{{WRAPPER}} a.box-btn',
			]
		);

		// margin
		$this->add_control(
			'btn1_margin',
			[
				'label' => esc_html__('Button Margin', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} a.box-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// padding 
		$this->add_control(
			'btn1_padding',
			[
				'label' => esc_html__('Button Padding', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} a.box-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// border radius 
		$this->add_control(
			'btn1_border_radius',
			[
				'label' => esc_html__('Button Border Radius', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} a.box-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);




		$this->end_controls_tab();





		// for hover
		$this->start_controls_tab(
			'button_hover_tab',
			[
				'label' => esc_html__('Hover', 'textdomain'),
			]
		);



		// color 
		$this->add_control(
			'btn_title_color_hover',
			[
				'label' => esc_html__('Color', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} a.box-btn:hover' => 'color: {{VALUE}}',
				],
			]
		);

		// background color 
		$this->add_control(
			'btn_bg_color_hover',
			[
				'label' => esc_html__('Background Color', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'tomato',
				'selectors' => [
					'{{WRAPPER}} a.box-btn' => 'background-color: {{VALUE}}',
				],
			]
		);


		// typography 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button1_typo_hover',
				'selector' => '{{WRAPPER}} a.box-btn:hover',
			]
		);

		// margin
		$this->add_control(
			'btn1_margin_hover',
			[
				'label' => esc_html__('Button Margin', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} a.box-btn:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// padding 
		$this->add_control(
			'btn1_padding_hover',
			[
				'label' => esc_html__('Button Padding', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} a.box-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// border radius 
		$this->add_control(
			'btn1_border_radius_hover',
			[
				'label' => esc_html__('Button Border Radius', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} a.box-btn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);




		$this->end_controls_tab();

		$this->end_controls_tabs();


		// hover and normale styles end  





		$this->end_controls_section();




		// Style Tab End

	}

	protected function render()
	{

		$settings = $this->get_settings_for_display();
		$banner_title =   $settings['banner_title'];
		$banner_subtitle =   $settings['banner_subtitle'];
		$banner_description =   $settings['banner_description'];
		$button_1 =   $settings['button_1'];
		$button_1_link =   $settings['button_1_link'];
		$button_2 =   $settings['button_2'];
		$button_2_link =   $settings['button_2_link'];

?>

		<section class="welcome-area flex-center" id="home">
			<div class="col-xl-8 mx-auto">
				<div class="welcome-content text-center">
					<h4 class="welcome-content-h4"> <?php echo $banner_title; ?> </h4>
					<h2> <?php echo $banner_subtitle; ?> </h2>
					<p> <?php echo $banner_description; ?> </p>
					<a href="<?php echo $button_1_link; ?>" class="box-btn"> <?php echo $button_1; ?> </a>
					<a href="<?php echo $button_2_link; ?>" class="border-btn"> <?php echo $button_2; ?> </a>
				</div>
			</div>
		</section>





		<!-- feature section   -->


		<section class="features features-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6">
						<div class="single-feature text-center">
							<h6>Highly Creative Solutions</h6>
							<h4>we are digital</h4>
							<div class="row">
								<div class="col-xl-6">


									<?php echo $settings['item_description']; ?>


								</div>
								<div class="col-xl-6">
									<?php echo $settings['custom_html']; ?>
								</div>
								<div class="col-xl-6">
									<div class="feature-box">
										<i class="far fa-newspaper"></i>
										<?php

										if ('yes' === $settings['show_title']) {
											echo '<h2> error free</h2>';
										}

										?>
										<h5>error free</h5>
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latinin contaversy. </p>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="feature-box">
										<i class="far fa-newspaper"></i>
										<h5>24/7 support</h5>
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latinin contaversy. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		<?php


		if ($settings['list']) {
			// echo '<pre>' ;
			// print_r( $settings['list']) ; 

			echo '<dl>';
			foreach ($settings['list'] as $item) {
				echo '<dt class="elementor-repeater-item">' . $item['list_title'] . '</dt>';
				echo '<dd>' . $item['list_content'] . '</dd>';
			}
			echo '</dl>';
		}


		?>

<?php
	}
}
