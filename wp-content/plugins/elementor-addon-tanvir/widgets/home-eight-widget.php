<?php
class Home_eight_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_eight';
    }

    public function get_title()
    {
        return esc_html__('Home eight', 'elementor-addon');
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
        return ['Home', 'eight'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_8_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_8_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('our clients says', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end

        // description Tab Start

        $this->start_controls_section(
            'section_8_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_8_description',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // description Tab end


        // review Tab Start

        $this->start_controls_section(
            'section_8_review_tab',
            [
                'label' => esc_html__('Review', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'section_8_review_lists',
            [
                'label' => esc_html__('Review List', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'section_8_review_content',
                        'label' => esc_html__('Content', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'show_label' => false,
                    ],

                    [
                        'name' => 'section_8_reviewer_name',
                        'label' => esc_html__('Name', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'show_label' => false,
                    ],

                    [
                        'name' => 'section_8_reviewer_designation',
                        'label' => esc_html__('Designation', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'show_label' => false,
                    ],
                    [
                        'name' => 'section_8_reviewer_image',
                        'label' => esc_html__('Image', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => get_template_directory_uri() . '/assets/img/avatar/avatar-1.png',
                        ],
                        'show_label' => false,
                    ],
                ],
                'default' => [
                    [
                        'section_8_review_content' => esc_html__('Content', 'elementor-addon'),
                        'section_8_reviewer_name' => esc_html__('Name', 'elementor-addon'),
                        'section_8_reviewer_designation' => esc_html__('Designation', 'elementor-addon'),
                    ],
                ],
                'title_field' => '{{{ section_8_review_content }}}',
            ]
        );

        $this->end_controls_section();

        // review Tab end










    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_8_title = $settings['section_8_title'];
        $section_8_description = $settings['section_8_description'];
        $section_8_review_lists = $settings['section_8_review_lists'];



?>






        <!-- ***** Review Area Start ***** -->
        <section id="review" class="section review-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-white"><?php echo $section_8_title; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4"><?php echo $section_8_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Client Reviews -->
                    <div class="client-reviews owl-carousel">
                        <!-- Single Review -->

                        <?php if ($section_8_review_lists) {
                            foreach ($section_8_review_lists as $item) { ?>
                                <div class="single-review p-5">
                                    <div class="review-content">
                                        <div class="review-text">
                                            <p><?php echo $item['section_8_review_content'] ?></p>
                                        </div>
                                        <div class="quot-icon">
                                            <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                        </div>
                                    </div>
                                    <!-- Reviewer -->
                                    <div class="reviewer media mt-3">
                                        <div class="reviewer-thumb">
                                            <img class="avatar-lg radius-100" src="<?php echo $item['section_8_reviewer_image']['url'] ?>" alt="">
                                        </div>
                                        <div class="reviewer-meta media-body align-self-center ml-4">
                                            <h5 class="reviewer-name color-primary mb-2"><?php echo $item['section_8_reviewer_name'] ?></h5>
                                            <h6 class="text-secondary fw-6"><?php echo $item['section_8_reviewer_designation'] ?></h6>
                                        </div>
                                    </div>
                                </div>

                        <?php }
                        } ?>
                        <!-- Single Review -->
                        <!-- <div class="single-review p-5">
                           
                            <div class="review-content">
                         
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.</p>
                                </div>
                               
                                <div class="quot-icon">
                                    <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                </div>
                            </div>
                         
                            <div class="reviewer media mt-3">
                           
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-2.png" alt="">
                                </div>
                              
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Yasmin Akter</h5>
                                    <h6 class="text-secondary fw-6">Founder, Themeland</h6>
                                </div>
                            </div>
                        </div>
                  
                        <div class="single-review p-5">
                       
                            <div class="review-content">
                            
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam est modi amet error earum aperiam, fuga labore facere rem ab nemo possimus cum excepturi expedita. Culpa rerum, quaerat qui non.</p>
                                </div>
                             
                                <div class="quot-icon">
                                    <img class="avatar-sm" src="assets/img/quote.png" alt="">
                                </div>
                            </div>
                        
                            <div class="reviewer media mt-3">
                           
                                <div class="reviewer-thumb">
                                    <img class="avatar-lg radius-100" src="assets/img/avatar/avatar-3.png" alt="">
                                </div>
                         
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5 class="reviewer-name color-primary mb-2">Md. Arham</h5>
                                    <h6 class="text-secondary fw-6">CEO, Themeland</h6>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Review Area End ***** -->






<?php
    }
}
