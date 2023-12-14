<?php
class Home_second_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'home_second';
	}

	public function get_title() {
		return esc_html__( 'Home Second', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'custom-theme-agency' ];
	}

	public function get_keywords() {
		return [ 'Home', 'Second' ]; 
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Home Promo', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
    


		// Repeater field start 

		$this->add_control(
			'home_promo',
			[
				'label' => esc_html__( 'Promo Repeater', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_title',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'Promo Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'list_content',
						'label' => esc_html__( 'Content', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Promo Content' , 'textdomain' ),
						'show_label' => false,
					],
					
				],
				'default' => [ 

					[
						'list_title' => esc_html__( 'trend design', 'textdomain' ),
						'list_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Aspernatur provident unde</strong> ex eligendi magni sit impedit iusto, sed ad fuga minima, dignissimos ducimus autem molestias, nostrum nesciunt enim? Ea, non hic voluptates dolorum impedit eveniet dolorem temporibus illo incidunt quis minima facere doloribus sit maiores, blanditiis labore quasi, accusantium quaerat!</p>', 'textdomain' ,
					],
					[
						'list_title' => esc_html__( 'Keyword ranking', 'textdomain' ),
						'list_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Aspernatur provident unde</strong> ex eligendi magni sit impedit iusto, sed ad fuga minima, dignissimos ducimus autem molestias, nostrum nesciunt enim? Ea, non hic voluptates dolorum impedit eveniet dolorem temporibus illo incidunt quis minima facere doloribus sit maiores, blanditiis labore quasi, accusantium quaerat!</p>', 'textdomain' ,
					],
					[
						'list_title' => esc_html__( 'Social media', 'textdomain' ),
						'list_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Aspernatur provident unde</strong> ex eligendi magni sit impedit iusto, sed ad fuga minima, dignissimos ducimus autem molestias, nostrum nesciunt enim? Ea, non hic voluptates dolorum impedit eveniet dolorem temporibus illo incidunt quis minima facere doloribus sit maiores, blanditiis labore quasi, accusantium quaerat!</p>', 'textdomain' ,
					],

				],
				'title_field' => '{{{ list_title }}}',
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
        // $hero_title =   $settings['hero_title'];
        // $hero_description =   $settings['hero_description'];
        // $button_1 =   $settings['h1_button_1'];
        // $button_1_link =   $settings['h1_button_1_link'];
        // $button_2 =   $settings['h1_button_2'];
        // $button_2_link =   $settings['h1_button_2_link'];   
        // $img_url_1 = $settings['home1_img1']['url'] ; 

      

		?>





		

        <!-- ***** Promo Area Start ***** -->
        <section class="section promo-area ptb_100">
            <div class="container">
                <div class="row">




				<?php 
				   

				   if ( $settings['home_promo'] ) {
					// echo '<dl>';
					foreach (  $settings['home_promo'] as $item ) { ?>


					<div class="col-12 col-md-6 col-lg-4 res-margin">
                        <!-- Single Promo -->
                        <div class="single-promo color-1 bg-hover hover-bottom text-center p-5">
                            <h3 class="mb-3">   <?php echo  $item['list_title']; ?>  </h3>
                            <p>  <?php echo  $item['list_content']; ?>  </p>
                        </div>
                    </div>


				<?php 
						// echo '<dt class="elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">' . $item['list_title'] . '</dt>';
						// echo '<dd>' . $item['list_content'] . '</dd>';
					}
					
				}


				
				?>
                   
                    


                </div>
            </div>
        </section>
        <!-- ***** Promo Area End ***** -->

        


		<?php
	}
}
