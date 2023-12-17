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
                            <h2 class="text-white"><?php echo $section_10_title; ?></h2>
                            <p class="text-white d-none d-sm-block mt-4"><?php echo $section_10_description; ?></p>
                            <a href="#" class="btn btn-bordered-white mt-4"><?php echo $section_10_link_title; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Call To Action Area End ======-->






<?php
    }
}
