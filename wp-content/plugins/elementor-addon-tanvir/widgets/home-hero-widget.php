<?php
class Hero_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'home_hero';
	}

	public function get_title() {
		return esc_html__( 'Home Hero', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'custom-theme-agency' ];
	}

	public function get_keywords() {
		return [ 'Home', 'Hero' ]; 
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Home hero', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
    
        // hero title 
		$this->add_control(
			'hero_title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'We are digital agency & Marketing', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Write Your Title Here', 'elementor-addon' ),
			]
		);


        // hero description                     
         $this->add_control( 
			'hero_description',
			[
				'label' => esc_html__( 'hero Description', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem est deserunt molestias accusamus harum 
                ullam tempore debitis et, expedita, repellat delectus aspernatur neque itaque qui quod.', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Write here the Description', 'elementor-addon' ),
			]
		);


        // Button title 
		$this->add_control(
			'h1_button_1',
			[
				'label' => esc_html__( 'Button 1 Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Start a Project', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Button title', 'elementor-addon' ),
			]
		 );

       // Button link 
	
        $this->add_control(
            'h1_button_1_link',
            [
                'label' => esc_html__( 'Button 1 Link', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => [ 'url', 'is_external', 'nofollow' ],
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
			'h1_button_2',
			[
				'label' => esc_html__( 'Button 1 Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact Us', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Button title', 'elementor-addon' ),
			]
		 );

       // Button link 
	
        $this->add_control(
            'h1_button_2_link',
            [
                'label' => esc_html__( 'Button 1 Link', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        ); 




        $this->end_controls_section();



        $this->start_controls_section(
			'section_image',
			[
				'label' => esc_html__( 'Image', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        
        $this->add_control(
			'home1_img1',
			[
				'label' => esc_html__( 'Image 1', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/welcome/thumb_1.png',
                ],
			]
		);


    
        $this->add_control(
			'home1_img2',
			[
				'label' => esc_html__( 'Image 2', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/welcome/thumb_2.png',
                ],
			]
		);

        $this->add_control(
			'home1_img3',
			[
				'label' => esc_html__( 'Image 3', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/welcome/thumb_3.png',
                ],
			]
		);

        $this->add_control(
			'home1_img4',
			[
				'label' => esc_html__( 'Image 4', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/welcome/thumb_4.png',
                ],
			]
		);

        $this->add_control(
			'home1_img5',
			[
				'label' => esc_html__( 'Image 5', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/welcome/thumb_5.png',
                ],
			]
		);

        $this->add_control(
			'home1_img6',
			[
				'label' => esc_html__( 'Image 6', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/assets/img/welcome/thumb_6.png',
                ],
			]
		);


        $this->end_controls_section();

		// Content Tab End

		// Style Tab Start
		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'title_color_heading',
			[
				'label' => esc_html__( 'Title color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		// color 
		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff' ,
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
				'label' => esc_html__( 'Button section', 'elementor-addon' ),
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
		'label' => esc_html__( 'Normal', 'elementor-addon' ),
	]
);


// color 
	$this->add_control(
		'btn_title_color',
		[
			'label' => esc_html__( 'Color', 'elementor-addon' ),
			'type' => \Elementor\Controls_Manager::COLOR,
			'default' => '#fff' ,
			'selectors' => [
				'{{WRAPPER}} a.box-btn' => 'color: {{VALUE}}',
			],
		]
	);

// background color 
	$this->add_control(
		'btn_bg_color',
		[
			'label' => esc_html__( 'Background Color', 'elementor-addon' ),
			'type' => \Elementor\Controls_Manager::COLOR,
			'default' => 'tomato' ,
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
			'label' => esc_html__( 'Button Margin', 'elementor-addon' ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
			'selectors' => [
				'{{WRAPPER}} a.box-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
	);

 // padding 
	$this->add_control(
		'btn1_padding',
		[
			'label' => esc_html__( 'Button Padding', 'elementor-addon' ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
			'selectors' => [
				'{{WRAPPER}} a.box-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
	);

// border radius 
	$this->add_control(
		'btn1_border_radius',
		[
			'label' => esc_html__( 'Button Border Radius', 'elementor-addon' ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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
		'label' => esc_html__( 'Hover', 'elementor-addon' ),
	]
);



// color 
$this->add_control(
	'btn_title_color_hover',
	[
		'label' => esc_html__( 'Color', 'elementor-addon' ),
		'type' => \Elementor\Controls_Manager::COLOR,
		'default' => '#fff' ,
		'selectors' => [
			'{{WRAPPER}} a.box-btn:hover' => 'color: {{VALUE}}',
		],
	]
);

// background color 
$this->add_control(
	'btn_bg_color_hover',
	[
		'label' => esc_html__( 'Background Color', 'elementor-addon' ),
		'type' => \Elementor\Controls_Manager::COLOR,
		'default' => 'tomato' ,
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
		'label' => esc_html__( 'Button Margin', 'elementor-addon' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
		'selectors' => [
			'{{WRAPPER}} a.box-btn:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		],
	]
);

// padding 
$this->add_control(
	'btn1_padding_hover',
	[
		'label' => esc_html__( 'Button Padding', 'elementor-addon' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
		'selectors' => [
			'{{WRAPPER}} a.box-btn:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		],
	]
);

// border radius 
$this->add_control(
	'btn1_border_radius_hover',
	[
		'label' => esc_html__( 'Button Border Radius', 'elementor-addon' ),
		'type' => \Elementor\Controls_Manager::DIMENSIONS,
		'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
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

	protected function render() { 

		$settings = $this->get_settings_for_display();
        $hero_title =   $settings['hero_title'];
        $hero_description =   $settings['hero_description'];
        $button_1 =   $settings['h1_button_1'];
        $button_1_link =   $settings['h1_button_1_link'];
        $button_2 =   $settings['h1_button_2'];
        $button_2_link =   $settings['h1_button_2_link'];   
        $img_url_1 = $settings['home1_img1']['url'] ; 

      

		?>






  <!-- ***** Welcome Area Start ***** -->
  <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-7">
                        <div class="welcome-intro">
                            <h1 class="text-white"> <?php echo $hero_title; ?> </h1>
                            <p class="text-white my-4"> 
                                 <?php echo $hero_description; ?> 
                             </p>
                            <!-- Buttons -->
                            <div class="button-group">
                                <a href="<?php echo $button_1_link; ?>" class="btn btn-bordered-white">  <?php echo $button_1; ?>  </a>
                                <a href="<?php echo $button_2_link; ?>" class="btn btn-bordered-white d-none d-sm-inline-block">   <?php echo $button_2; ?>    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                            <span class="welcome-thumb-1">
                                <img class="welcome-animation d-block ml-auto" src="<?php echo $img_url_1 ; ?>" alt="">
                            </span>
                            <span class="welcome-thumb-2">
                                <img class="welcome-animation d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/thumb_2.png" alt="">
                            </span>
                            <span class="welcome-thumb-3">
                                <img class="welcome-animation d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/thumb_3.png" alt="">
                            </span>
                            <span class="welcome-thumb-4">
                                <img class="welcome-animation d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/thumb_4.png" alt="">
                            </span>
                            <span class="welcome-thumb-5">
                                <img class="welcome-animation d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/thumb_5.png" alt="">
                            </span>
                            <span class="welcome-thumb-6">
                                <img class="welcome-animation d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/welcome/thumb_6.png" alt="">
                            </span>
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
        <!-- ***** Welcome Area End ***** -->



        


		<?php
	}
}
