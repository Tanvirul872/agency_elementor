<?php
class Home_third_widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'home_third';
	}

	public function get_title()
	{
		return esc_html__('Home third', 'elementor-addon');
	}

	public function get_icon()
	{
		return 'eicon-code';
	}

	public function get_categories()
	{
		return ['custom-theme-agency'];
	}

	public function get_keywords()
	{
		return ['Home', 'Third'];
	}

	protected function register_controls()
	{

		// Content Tab Start

		$this->start_controls_section(
			'section_3_title_tab',
			[
				'label' => esc_html__('Home Promo', 'elementor-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);




		//  title 
		$this->add_control(
			'h3_title',
			[
				'label' => esc_html__('Title', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('We help to grow your business.', 'elementor-addon'),
				'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
			]
		);




		// banner description                     
		$this->add_control(
			'h3_description',
			[
				'label' => esc_html__('Description', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					 Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
				'placeholder' => esc_html__('Write here the Description', 'elementor-addon'),
			]
		);


		// Repeater field start 

		$this->add_control(
			'home_third_repeater',
			[
				'label' => esc_html__('Content Repeater', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'h3_list_title',
						'label' => esc_html__('Title', 'elementor-addon'),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__('Promo Title', 'elementor-addon'),
						'label_block' => true,
					],

					[
						'name' => 'h3_list_content',
						'label' => esc_html__('Content', 'elementor-addon'),
						'rows' => 10,
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'default' => esc_html__('Promo Content', 'elementor-addon'),

					],

				],
				'default' => [

					[
						'h3_list_title' => esc_html__('Online Presence', 'elementor-addon'),
						'h3_list_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.', 'elementor-addon',
					],
					[
						'h3_list_title' => esc_html__(' Marketing Stretagy', 'elementor-addon'),
						'h3_list_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.', 'elementor-addon',
					],
					[
						'h3_list_title' => esc_html__('Promote Local Sales', 'elementor-addon'),
						'h3_list_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.', 'elementor-addon',
					],

				],
				'title_field' => '{{{ h3_list_title }}}',
			]
		);

		// buton title 
		$this->add_control(
			'h3_btn_title',
			[
				'label' => esc_html__('Button Title', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__('Learn More', 'elementor-addon'),
				'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
			]
		);



		// buton link 
		$this->add_control(
			'h3_btn_link',
			[
				'label' => esc_html__('Button Link', 'elementor-addon'),
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


		// right side image  
		$this->add_control(
			'h3_right_image',
			[
				'label' => esc_html__('Choose Image', 'elementor-addon'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_template_directory_uri() . '/assets/img/content/content_thumb.png',
				],
			]
		);





		$this->end_controls_section();




		// Content Tab End



	}

	protected function render()
	{

		$settings = $this->get_settings_for_display();
		$h3_title =   $settings['h3_title'];
		$h3_description =   $settings['h3_description'];
		$home_third_repeater =   $settings['home_third_repeater'];
		$h3_btn_title =   $settings['h3_btn_title'];
		$h3_btn_link =   $settings['h3_btn_link'];
		$h3_right_image =   $settings['h3_right_image'];



?>




		<!-- ***** Content Area Start ***** -->
		<section id="about" class="section content-area bg-grey ptb_150">
			<!-- Shape Top -->
			<div class="shape shape-top">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
					<path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
				</svg>
			</div>
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-12 col-lg-6">
						<!-- Content Inner -->
						<div class="content-inner text-center">
							<!-- Section Heading -->
							<div class="section-heading text-center mb-3">
								<h2><?php echo $h3_title; ?></h2>
								<p class="d-none d-sm-block mt-4"><?php echo $h3_description; ?></p>
							</div>
							<!-- Content List -->
							<ul class="content-list text-left">


								<!-- Single Content List -->

								<?php if ($home_third_repeater) {
									foreach ($home_third_repeater as $item) { ?>
										<li class="single-content-list media py-2">
											<div class="content-icon pr-4">
												<span class="color-1"><i class="fas fa-angle-double-right"></i></span>
											</div>
											<div class="content-text media-body">
												<span><b><?php echo $item['h3_list_title'] ?></b><br>
													<?php echo $item['h3_list_content'] ?>
												</span>
											</div>
										</li>

								<?php }
								} ?>


							</ul>
							<a href="<?php echo $h3_btn_link; ?>" class="btn btn-bordered mt-4"><?php echo $h3_btn_title; ?></a>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<!-- Service Thumb -->
						<div class="service-thumb mx-auto pt-4 pt-lg-0">
							<img src="<?php echo $h3_right_image['url'] ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<!-- Shape Bottom -->
			<div class="shape shape-bottom">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
					<path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
				</svg>
			</div>
		</section>
		<!-- ***** Content Area End ***** -->





<?php
	}
}
