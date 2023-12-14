<?php
class Home_fourth_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_fourth';
    }

    public function get_title()
    {
        return esc_html__('Home fourth', 'elementor-addon');
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
        return ['Home', 'Fourth'];
    }

    protected function register_controls()
    {

        // Title Tab Start

        $this->start_controls_section(
            '4_section_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //  title 
        $this->add_control(
            'h4_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('work smarter,not harder.', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();
        // Title Tab end




		// Style Tab Start for title
		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'h4_title_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
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
					'{{WRAPPER}} .section-heading h2' => 'color: {{VALUE}}',
				],
			]
		);

		// typography 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .section-heading h2',
			]
		);


        $this->end_controls_section();

        // Style Tab end for title





        // Description Tab Start

        $this->start_controls_section(
            '4_section_description',
            [
                'label' => esc_html__('Short Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //  title 
        $this->add_control(
            'section_4_short_desc',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.

                ', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );


        $this->end_controls_section();

        // Description Tab end

        // Style Tab Start for description
		$this->start_controls_section(
			'4_section_des_style',
			[
				'label' => esc_html__( 'Description', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'h4_des_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		// color 
		$this->add_control(
			'4_des_color',
			[
				'label' => esc_html__( 'Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff' ,
				'selectors' => [
					'{{WRAPPER}} .section-heading p' => 'color: {{VALUE}}',
				],
			]
		);

		// typography 
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => '4_desc_typography',
				'selector' => '{{WRAPPER}} .section-heading p',
			]
		);


        $this->end_controls_section();

        // Style Tab end for description



        





    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $h4_title =   $settings['h4_title'];  
        $section_4_short_desc =   $settings['section_4_short_desc'];  



?>



        <!-- ***** Content Area Start ***** -->
        <section class="section content-area ptb_150">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-6">
                        <!-- Profile Circle Wrapper -->
                        <div class="profile-circle-wrapper circle-animation d-none d-sm-block">
                            <!-- Profile Inner -->
                            <div class="profile-inner">
                                <!-- Profile Circle -->
                                <div class="profile-circle circle-lg">
                                    <span class="profile-icon icon-1">
                                        <img class="icon-1-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_1.svg" alt="" />
                                    </span>
                                    <span class="profile-icon icon-2">
                                        <img class="icon-2-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_2.svg" alt="" />
                                    </span>
                                    <span class="profile-icon icon-3">
                                        <img class="icon-3-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_1.svg" alt="" />
                                    </span>
                                    <span class="profile-icon icon-4">
                                        <img class="icon-4-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_2.svg" alt="" />
                                    </span>
                                </div>

                                <!-- Profile Circle -->
                                <div class="profile-circle circle-md">
                                    <span class="profile-icon icon-5">
                                        <img class="icon-5-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_3.svg" alt="" />
                                    </span>
                                    <span class="profile-icon icon-6">
                                        <img class="icon-6-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_3.svg" alt="" />
                                    </span>
                                    <span class="profile-icon icon-7">
                                        <img class="icon-7-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_3.svg" alt="" />
                                    </span>
                                </div>

                                <!-- Profile Circle -->
                                <div class="profile-circle circle-sm">
                                    <span class="profile-icon icon-8">
                                        <img class="icon-8-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_4.svg" alt="" />
                                    </span>
                                    <span class="profile-icon icon-9">
                                        <img class="icon-9-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/profile-icons/profile_icon_4.svg" alt="" />
                                    </span>
                                </div>
                            </div>
                            <img class="folder-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/folders.png" alt="" />
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- Content Inner -->
                        <div class="content-inner text-center pt-sm-4 pt-lg-0 mt-sm-5 mt-lg-0">
                            <!-- Section Heading -->
                            <div class="section-heading text-center mb-3">
                                <h2> <?php echo $h4_title; ?></h2>
                                <p class="d-none d-sm-block mt-4"><?php echo $section_4_short_desc; ?></p>
                                
                            </div>
                            <!-- Content List -->
                            <ul class="content-list text-left">
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Digital Agency &amp; Marketing</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Planning To Startup</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                                    </div>
                                </li>
                                <!-- Single Content List -->
                                <li class="single-content-list media py-2">
                                    <div class="content-icon pr-4">
                                        <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                    </div>
                                    <div class="content-text media-body">
                                        <span><b>Content Management</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Content Area End ***** -->




<?php
    }
}
