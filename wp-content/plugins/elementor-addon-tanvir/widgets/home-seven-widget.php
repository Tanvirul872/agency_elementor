<?php
class Home_seven_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_seven';
    }

    public function get_title()
    {
        return esc_html__('Home seven', 'elementor-addon');
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
        return ['Home', 'seven'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_7_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_7_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('our price plans', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end

        // description Tab Start

        $this->start_controls_section(
            'section_7_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_7_description',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
                'placeholder' => esc_html__('Your description here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // description Tab end








        // basic price Tab Start

        $this->start_controls_section(
            'section_7_basic_price_tab',
            [
                'label' => esc_html__('Basic Pricing', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );



        $this->add_control(
            'section_7_basic_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Basic', 'elementor-addon'),
            ]
        );



        $this->add_control(
            'section_7_basic_desc',
            [
                'label' => esc_html__('Basic Short Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, nemo.', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_7_basic_price',
            [
                'label' => esc_html__('Basic Price', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('49', 'elementor-addon'),
            ]
        );

        $this->add_control(
            'section_7_basic_duration',
            [
                'label' => esc_html__('Basic Price Duration', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('mo', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_7_basic_lists',
            [
                'label' => esc_html__('Benefit List', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'section_7_list_title', // Change this key
                        'label' => esc_html__('Title', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('5GB Linux Web Space', 'elementor-addon'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'section_7_list_title' => esc_html__('5GB Linux Web Space', 'elementor-addon'), // Change this key
                    ],
                ],
                'title_field' => '{{{ section_7_list_title }}}', // Change this key
            ]
        );


        $this->add_control(
            'section_7_basic_button_text',
            [
                'label' => esc_html__('Basic Button Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Started', 'elementor-addon'),
            ]
        );


        $this->end_controls_section();

        // basic price Tab end



        // pro price Tab Start

        $this->start_controls_section(
            'section_7_pro_price_tab',
            [
                'label' => esc_html__('Pro Pricing', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );



        $this->add_control(
            'section_7_pro_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Pro', 'elementor-addon'),
            ]
        );



        $this->add_control(
            'section_7_pro_desc',
            [
                'label' => esc_html__('Pro Short Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, nemo.', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_7_pro_save',
            [
                'label' => esc_html__('Pro Price Save', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Save 20%', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_7_pro_price',
            [
                'label' => esc_html__('Pro Price', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('65', 'elementor-addon'),
            ]
        );

        $this->add_control(
            'section_7_pro_duration',
            [
                'label' => esc_html__('Pro Price Duration', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('mo', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'section_7_pro_lists',
            [
                'label' => esc_html__('Benefit List', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'section_7_pro_list_title', // Change this key
                        'label' => esc_html__('Title', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('10GB Linux Web Space', 'elementor-addon'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'section_7_pro_list_title' => esc_html__('10GB Linux Web Space', 'elementor-addon'), // Change this key
                    ],
                ],
                'title_field' => '{{{ section_7_pro_list_title }}}', // Change this key
            ]
        );


        $this->add_control(
            'section_7_pro_button_text',
            [
                'label' => esc_html__('Pro Button Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Get Started', 'elementor-addon'),
            ]
        );


        $this->end_controls_section();

        // basic price Tab end




        // footer Tab Start

        $this->start_controls_section(
            'section_7_footer_tab',
            [
                'label' => esc_html__('Footer', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );



        $this->add_control(
            'section_7_footer_text',
            [
                'label' => esc_html__('Short Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Not sure what to choose? ', 'elementor-addon'),
            ]
        );

        $this->add_control(
            'section_7_footer_link_text',
            [
                'label' => esc_html__('Link Text', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__(' Contact Us ', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // footer Tab end








    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_7_title = $settings['section_7_title'];
        $section_7_description = $settings['section_7_description'];
        $section_7_footer_text = $settings['section_7_footer_text'];
        $section_7_footer_link_text = $settings['section_7_footer_link_text'];


        $section_7_basic_title = $settings['section_7_basic_title'];
        $section_7_basic_desc = $settings['section_7_basic_desc'];
        $section_7_basic_price = $settings['section_7_basic_price'];
        $section_7_basic_duration = $settings['section_7_basic_duration'];
        $section_7_basic_lists = $settings['section_7_basic_lists'];
        $section_7_basic_button_text = $settings['section_7_basic_button_text'];



        $section_7_pro_title = $settings['section_7_pro_title'];
        $section_7_pro_desc = $settings['section_7_pro_desc'];
        $section_7_pro_price = $settings['section_7_pro_price'];
        $section_7_pro_duration = $settings['section_7_pro_duration'];
        $section_7_pro_lists = $settings['section_7_pro_lists'];
        $section_7_pro_button_text = $settings['section_7_pro_button_text'];
        $section_7_pro_save = $settings['section_7_pro_save'];



?>






        <!-- price area section start  -->
        <section id="pricing" class="section price-plan-area bg-grey overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2><?php echo $section_7_title; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_7_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="row price-plan-wrapper">
                            <div class="col-12 col-md-6">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                    <!-- Plan Title -->
                                    <div class="plan-title mb-2 mb-sm-3">
                                        <h3 class="mb-2"><?php echo $section_7_basic_title ?></h3>
                                        <p><?php echo $section_7_basic_desc ?></p>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <span class="color-primary fw-7">$</span>
                                        <span class="h1 fw-7"><?php echo $section_7_basic_price; ?></span>
                                        <sub class="validity text-muted fw-5">/<?php echo $section_7_basic_duration; ?></sub>
                                    </div>
                                    <!-- Plan Description -->
                                    <?php if ($section_7_basic_lists) {
                                    ?>
                                        <div class="plan-description">
                                            <ul class="plan-features">
                                                <?php foreach ($section_7_basic_lists as $item) { ?>
                                                    <li class="py-2 text-muted"><?php echo $item['section_7_list_title'] ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    <?php } ?>

                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#" class="btn btn-bordered mt-3"><?php echo $section_7_basic_button_text; ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0">
                                <!-- Single Price Plan -->
                                <div class="single-price-plan color-2 bg-hover active hover-top text-center p-5">
                                    <!-- Plan Title -->
                                    <div class="plan-title mb-2 mb-sm-3">
                                        <h3 class="mb-2"><?php echo $section_7_pro_title; ?><sup><span class="badge badge-pill badge-warning ml-2"><?php echo $section_7_pro_save; ?></span></sup></h3>
                                        <p><?php echo $section_7_pro_desc; ?></p>
                                    </div>
                                    <!-- Plan Price -->
                                    <div class="plan-price pb-2 pb-sm-3">
                                        <span class="color-primary fw-7">$</span>
                                        <span class="h1 fw-7"><?php echo $section_7_pro_price; ?></span>
                                        <sub class="validity text-muted fw-5">/<?php echo $section_7_pro_duration; ?></sub>
                                    </div>
                                    <!-- Plan Description -->
                                    <div class="plan-description">
                                        <ul class="plan-features">

                                            <?php if ($section_7_pro_lists) {
                                            ?>
                                                <div class="plan-description">
                                                    <ul class="plan-features">
                                                        <?php foreach ($section_7_pro_lists as $item) { ?>
                                                            <li class="py-2 "><?php echo $item['section_7_pro_list_title'] ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- Plan Button -->
                                    <div class="plan-button">
                                        <a href="#" class="btn btn-bordered mt-3"><?php echo $section_7_pro_button_text; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-5">
                    <p class="pt-4 fw-5"><?php echo $section_7_footer_text; ?><a class="service-btn" href="#"><strong><?php echo $section_7_footer_link_text; ?></strong></a></p>
                </div>
            </div>
        </section>
        <!-- price area section end  -->






<?php
    }
}
