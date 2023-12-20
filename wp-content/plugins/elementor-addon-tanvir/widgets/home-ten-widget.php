<?php
class Home_ten_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_ten';
    }

    public function get_title()
    {
        return esc_html__('Home ten', 'elementor-addon');
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
        return ['Home', 'ten'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_10_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_10_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('looking for the best digital agency & marketing solution?', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end




        // Style Tab Start for title
        $this->start_controls_section(
            'section_10_title_style_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );




        // color 
        $this->add_control(
            'section_10_title_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading h2.ten' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_10_title_typography',
                'selector' => '{{WRAPPER}} .section-heading h2.ten',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for title


        // description Tab Start

        $this->start_controls_section(
            'section_10_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_10_description',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_10_link_title',
            [
                'label' => esc_html__('Link Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Contact Us', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // description Tab end



        // Style Tab Start for description
        $this->start_controls_section(
            'section_10_description_style_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );




        // color 
        $this->add_control(
            'section_10_description_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading p.ten' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_10_desc_typography',
                'selector' => '{{WRAPPER}} .section-heading p.ten',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for description



        // Style Tab Start for button text
        $this->start_controls_section(
            'section_10_button_style_tab',
            [
                'label' => esc_html__('Button', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );




        // color 
        $this->add_control(
            'section_10_button_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading a.ten' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_10_button_typography',
                'selector' => '{{WRAPPER}} .section-heading a.ten',
            ]
        );


        // border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'section_10_button_border',
                'label' => esc_html__('Border', 'elementor-addon'),
                'selector' => '{{WRAPPER}} .section-heading a.ten',
            ]
        );

        // background
        $this->add_control(
            'section_10_button_background',
            [
                'label' => esc_html__('Background', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-heading a.ten' => 'background-color: {{VALUE}} !important',
                ],
            ]
        );


        // margin
		$this->add_control(
			'section_10_button_margin',
			[
				'label' => esc_html__('Margin', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} .section-heading a.ten' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// padding 
		$this->add_control(
			'section_10_button_padding',
			[
				'label' => esc_html__('Padding', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} .section-heading a.ten' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		// border radius 
		$this->add_control(
			'section_10_button_border_radius',
			[
				'label' => esc_html__('Border Radius', 'textdomain'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em', 'rem', 'custom'],
				'selectors' => [
					'{{WRAPPER}} .section-heading a.ten' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


        $this->end_controls_section();

        // Style Tab end for description











    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_10_title = $settings['section_10_title'];
        $section_10_description = $settings['section_10_description'];
        $section_10_link_title = $settings['section_10_link_title'];



?>






        <!--====== Call To Action Area Start ======-->
        <section class="section cta-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <!-- Section Heading -->
                        <div class="section-heading text-center m-0">
                            <h2 class="text-white ten"><?php echo $section_10_title; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4 ten"><?php echo $section_10_description; ?></p>
                            <a href="#" class="btn btn-bordered-white mt-4 ten"><?php echo $section_10_link_title; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->






<?php
    }
}
