<?php
class Home_nine_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_nine';
    }

    public function get_title()
    {
        return esc_html__('Home nine', 'elementor-addon');
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
        return ['Home', 'nine'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_9_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_9_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__("let's connect!", 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end


        // Style Tab Start for title
        $this->start_controls_section(
            'section_9_title_style_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_9_title_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.nine h2' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_title_typography',
                'selector' => '{{WRAPPER}} .section-heading.nine h2',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for title









        // description Tab Start

        $this->start_controls_section(
            'section_9_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_9_description',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.", 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // description Tab end


        // Style Tab Start for description
        $this->start_controls_section(
            'section_9_description_style_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_9_description_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.nine p' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_description_typography',
                'selector' => '{{WRAPPER}} .section-heading.nine p',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for description


















        // contact Tab Start

        $this->start_controls_section(
            'section_9_contact_tab',
            [
                'label' => esc_html__('Contact', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );



        $this->add_control(
            'section_9_contact_phone',
            [
                'label' => esc_html__('Contact Number', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__("+89 (0) 2354 5470091", 'elementor-addon'),
            ]
        );

        $this->add_control(
            'section_9_contact_phone_des',
            [
                'label' => esc_html__('Contact Number Description', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__("Lorem ipsum dolor sit amet, consectetur adipisicing elit.", 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_9_contact_email',
            [
                'label' => esc_html__('Contact Email', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__("mail@company.com", 'elementor-addon'),
            ]
        );

        $this->add_control(
            'section_9_contact_email_des',
            [
                'label' => esc_html__('Contact Email Description', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__("Lorem ipsum dolor sit amet, consectetur adipisicing elit.", 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_9_contact_button_text',
            [
                'label' => esc_html__('Button Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__("Send Message", 'elementor-addon'),
            ]
        );




        $this->end_controls_section();

        // contact Tab end




        // Style Tab Start for contact
        $this->start_controls_section(
            'section_9_Contact_style_tab',
            [
                'label' => esc_html__('Contact', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color number
        $this->add_control(
            'section_9_contact_phone_color',
            [
                'label' => esc_html__('Number Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .contact-info.nine-phone h3' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_contact_phone_typography',
                'selector' => '{{WRAPPER}} .contact-info.nine-phone h3',
            ]
        );

        // color number desc
        $this->add_control(
            'section_9_contact_phone_desc_color',
            [
                'label' => esc_html__('Number Desc Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .contact-info.nine-phone p' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_contact_phone_desc_typography',
                'selector' => '{{WRAPPER}} .contact-info.nine-phone p',
            ]
        );




        // color email
        $this->add_control(
            'section_9_contact_email_color',
            [
                'label' => esc_html__('Email Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .contact-info.nine-email h3' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_contact_email_typography',
                'selector' => '{{WRAPPER}} .contact-info.nine-email h3',
            ]
        );

        // color number desc
        $this->add_control(
            'section_9_contact_email_desc_color',
            [
                'label' => esc_html__('Email Desc Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .contact-info.nine-email p' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_contact_email_desc_typography',
                'selector' => '{{WRAPPER}} .contact-info.nine-email p',
            ]
        );


        // color button text
        $this->add_control(
            'section_9_contact_button_color',
            [
                'label' => esc_html__('Button Text Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} #contact-form .btn.nine' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_9_contact_button_typography',
                'selector' => '{{WRAPPER}} #contact-form .btn.nine',
            ]
        );


        
        // border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'section_9_contact_button_border',
                'label' => esc_html__('Border', 'elementor-addon'),
                'selector' => '{{WRAPPER}} #contact-form .btn.nine',
            ]
        );

        // background
        $this->add_control(
            'section_9_contact_button_background',
            [
                'label' => esc_html__('Background', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #contact-form .btn.nine' => 'background-color: {{VALUE}} !important',
                ],
            ]
        );


        // margin
		$this->add_control(
			'section_9_contact_button_margin',
			[
				'label' => esc_html__('Margin', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} #contact-form .btn.nine' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);

		// padding 
		$this->add_control(
			'section_9_contact_button_padding',
			[
				'label' => esc_html__('Padding', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} #contact-form .btn.nine' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);

		// border radius 
		$this->add_control(
			'section_9_contact_button_radius',
			[
				'label' => esc_html__('Border Radius', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} #contact-form .btn.nine' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);




        $this->end_controls_section();

        // Style Tab end for contact










    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_9_title = $settings['section_9_title'];
        $section_9_description = $settings['section_9_description'];
        $section_9_contact_phone = $settings['section_9_contact_phone'];
        $section_9_contact_phone_des = $settings['section_9_contact_phone_des'];
        $section_9_contact_email = $settings['section_9_contact_email'];
        $section_9_contact_email_des = $settings['section_9_contact_email_des'];
        $section_9_contact_button_text = $settings['section_9_contact_button_text'];



?>







        <!--====== Contact Area Start 9 ======-->
        <section id="contact" class="contact-area ptb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5">
                        <!-- Section Heading -->
                        <div class="section-heading nine text-center mb-3">
                            <h2><?php echo $section_9_title; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_9_description; ?></p>
                        </div>
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <ul>
                                <!-- Contact Info -->
                                <li class="contact-info color-1 bg-hover active hover-bottom nine-phone text-center p-5 m-3">
                                    <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                                    <a class="d-block my-2 " href="#">
                                        <h3><?php echo $section_9_contact_phone; ?></h3>
                                    </a>
                                    <p><?php echo $section_9_contact_phone_des; ?></p>
                                </li>
                                <!-- Contact Info -->
                                <li class="contact-info color-3 bg-hover active hover-bottom nine-email text-center p-5 m-3">
                                    <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                                    <a class="d-none d-sm-block my-2" href="#">
                                        <h3><?php echo $section_9_contact_email; ?></h3>
                                    </a>

                                    <p><?php echo $section_9_contact_email_des; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form id="contact-form" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company_name" placeholder="Company Name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-bordered nine active btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span><?php echo $section_9_contact_button_text; ?></button>

                                        <!-- <button type="submit">Submit</button> -->
                                    </div>
                                </div>
                            </form>
                            <!-- <p class="form-message"></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->






<?php
    }
}
