<?php
class Home_fifth_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_fifth';
    }

    public function get_title()
    {
        return esc_html__('Home fifth', 'elementor-addon');
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
        return ['Home', 'fifth'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_5_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_5_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('we provide the best digital services', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end



        // Style Tab Start for title
        $this->start_controls_section(
            'section_5_title_style_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_5_title_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.five h2' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_5_title_typography',
                'selector' => '{{WRAPPER}} .section-heading.five h2',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for title










        // description Tab Start

        $this->start_controls_section(
            'section_5_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_5_description',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
                'placeholder' => esc_html__('Your description here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // description Tab end


        // Style Tab Start for description
        $this->start_controls_section(
            'section_5_description_style_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_5_description_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.five p' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_5_description_typography',
                'selector' => '{{WRAPPER}} .section-heading.five p',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for title








        // repeater Content Tab Start

        $this->start_controls_section(
            'section_5_content',
            [
                'label' => esc_html__('Content', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );




        $this->add_control(
            'section_5_content_lists',
            [
                'label' => esc_html__('Repeater List', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'section_5_content_list_icon',
                        'label' => esc_html__('Icon', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::ICON,
                        'default' => 'fas fa-star', // Default icon class
                        'label_block' => true,
                    ],
                    [
                        'name' => 'section_5_content_list_title',
                        'label' => esc_html__('Title', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('List Title', 'elementor-addon'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'section_5_content_list_desc',
                        'label' => esc_html__('Content', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'elementor-addon'),
                        'show_label' => false,
                    ],
                ],
                'default' => [
                    [
                        'section_4_list_title' => esc_html__('Data Analytics', 'elementor-addon'),
                        'section_4_list_desc' => esc_html__('Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.', 'elementor-addon'),
                    ],
                ],
                'title_field' => '{{{ section_5_content_list_title }}}',
            ]
        );


        $this->end_controls_section();
        // repeater Content Tab end


        // button Tab Start

        $this->start_controls_section(
            'section_5_button_tab',
            [
                'label' => esc_html__('Button', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_5_button_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Learn more', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end


    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_5_title =   $settings['section_5_title'];
        $section_5_description =   $settings['section_5_description'];
        $section_5_content_lists =   $settings['section_5_content_lists'];
        $section_5_button_title =   $settings['section_5_button_title'];



?>







        <!-- ***** Service Area End ***** -->
        <section id="service" class="section service-area bg-grey ptb_150">
            <!-- Shape Top -->
            <div class="shape shape-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading five text-center">
                            <h2><?php echo $section_5_title ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_5_description ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php if ($section_5_content_lists) { ?>

                        <?php foreach ($section_5_content_lists as $item) { ?>

                            <div class="col-12 col-md-6 col-lg-4">

                                <div class="single-service p-4">
                                    <span class="flaticon-rocket-launch color-1 icon-bg-1"></span>
                                    <!-- <img class="color-1 icon-bg-1" src="" alt=""> -->
                                    <h3 class="my-3"><?php echo $item['section_5_content_list_title'] ?></h3>
                                    <p><?php echo $item['section_5_content_list_desc'] ?></p>
                                    <a class="service-btn mt-3" href="#"><?php echo $section_5_button_title ?></a>
                                </div>
                            </div>

                    <?php }
                    } ?>
                    <!-- <div class="col-12 col-md-6 col-lg-4">
                        
                        <div class="single-service p-4">
                            <span class="flaticon-monitoring color-2 icon-bg-2"></span>
                            <h3 class="my-3">Website Growth</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        
                        <div class="single-service p-4">
                            <span class="flaticon-web color-3 icon-bg-3"></span>
                            <h3 class="my-3">Seo Ranking</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        
                        <div class="single-service p-4">
                            <span class="flaticon-smartphone color-4 icon-bg-4"></span>
                            <h3 class="my-3">App Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        
                        <div class="single-service p-4">
                            <span class="flaticon-email color-5 icon-bg-5"></span>
                            <h3 class="my-3">Email Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        
                        <div class="single-service p-4">
                            <span class="flaticon-affiliate color-6 icon-bg-6"></span>
                            <h3 class="my-3">Affiliate Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt emit.</p>
                            <a class="service-btn mt-3" href="#">Learn More</a>
                        </div>
                    </div> -->
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
        <!-- ***** Service Area End ***** -->






<?php
    }
}
