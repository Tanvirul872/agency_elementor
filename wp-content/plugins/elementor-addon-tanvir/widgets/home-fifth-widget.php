<?php
class Home_fifth_widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'home_fifth';
	}

	public function get_title() {
		return esc_html__( 'Home fifth', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'custom-theme-agency' ];
	}

	public function get_keywords() {
		return [ 'Home', 'fifth' ]; 
	}

    // Function to get taxonomy options dynamically
    protected function get_taxonomies_options() {
        $taxonomies = get_categories(array('hide_empty'=>false));
        // echo '<pre>' ;
        // print_r($taxonomies) ;
        $options = [];

        foreach ( $taxonomies as $taxonomy ) {
            $options[ $taxonomy->slug ] = $taxonomy->name;
        }

        return $options;
    }
         

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
    

		    //  title 
			$this->add_control(
				'h4_title',
				[
					'label' => esc_html__( 'Title', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'work smarter,not harder.', 'textdomain' ),
					'placeholder' => esc_html__( 'Your Title here', 'textdomain' ),
				]
			);

              //  description 
              $this->add_control(
                'h4_desc',
                [
                    'label' => esc_html__( 'Description', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                    'rows' => 10,
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur
                     adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'textdomain' ),
                    'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
                ]
            );

		

            $this->add_control(
                'border_style',
                [
                    'label' => esc_html__( 'Border Style', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'solid',
                    'options' => $this->get_taxonomies_options(),
                    'selectors' => [
                        '{{WRAPPER}} .your-class' => 'border-style: {{VALUE}};',
                    ],
                ]
            );


            
		
	


        $this->end_controls_section();


        

        $this->start_controls_section(
			'section_image',
			[
				'label' => esc_html__( 'image', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
    



        $this->add_control(
			'h4_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
                    'url' => get_template_directory_uri() . '/<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_1.svg',
                ],
			]
		);


        $this->add_control(
			'h4_show_title',
			[
				'label' => esc_html__( 'Show Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'textdomain' ),
				'label_off' => esc_html__( 'No', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);


        $this->end_controls_section();



		// Content Tab End





	}

	protected function render() { 

		$settings = $this->get_settings_for_display();
          $h4_title =   $settings['h4_title'];
        // $hero_description =   $settings['hero_description'];
        // $button_1 =   $settings['h1_button_1'];
        // $button_1_link =   $settings['h1_button_1_link'];
        // $button_2 =   $settings['h1_button_2'];
        // $button_2_link =   $settings['h1_button_2_link'];   
          $img_url_1 = $settings['h4_image']['url'] ; 

      

		?>







        <!-- ***** Portfolio Area Start ***** -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Our Recent Works</h2>
                            <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                            <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <!-- Portfolio Menu -->
                        <div class="portfolio-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4 mb-md-5" data-toggle="buttons">
                            <label class="btn active d-table text-uppercase p-2">
                                <input type="radio" value="all" checked class="portfolio-btn">
                                <span>All</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="marketing" class="portfolio-btn">
                                <span>Marketing</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="agency" class="portfolio-btn">
                                <span>Agency</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="seo" class="portfolio-btn">
                                <span>SEO</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="development" class="portfolio-btn">
                                <span>App Development</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Items -->
                <div class="row items portfolio-items">
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item" data-groups='["marketing","development"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/case_studies_1/thumb_1.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="#" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">Digital Marketing</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item" data-groups='["seo","development"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/case_studies_1/thumb_2.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="#" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">App Development</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item" data-groups='["marketing","agency"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/case_studies_1/thumb_4.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="#" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">Content Management</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item" data-groups='["agency","development","seo"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/case_studies_1/thumb_3.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="#" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">Data Analysis</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item" data-groups='["development","marketing","development"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/case_studies_1/thumb_5.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="#" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">SEO Marketing</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item" data-groups='["agency","development","marketing","seo"]'>
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case_studies/case_studies_1/thumb_6.jpg" alt="">
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href="#" class="case-studies-overlay">
                                <!-- Overlay Text -->
                                <span class="overlay-text text-center p-3">
                                    <h3 class="text-white mb-3">Marketing Strategy</h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-bordered mt-4">View More</a>
                </div>
            </div>
        </section>
        <!-- ***** Portfolio Area End ***** -->



        


		<?php
	}
}
