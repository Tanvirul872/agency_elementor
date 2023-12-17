<?php
class Home_six_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_six';
    }

    public function get_title()
    {
        return esc_html__('Home six', 'elementor-addon');
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
        return ['Home', 'six'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_6_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_6_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('our recent works', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end

        // description Tab Start

        $this->start_controls_section(
            'section_6_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_6_description',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
                'placeholder' => esc_html__('Your description here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // description Tab end




    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_6_title = $settings['section_6_title'];
        $section_6_description = $settings['section_6_description'];



?>






        <!-- portfolio area section start  -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2><?php echo $section_6_title; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_6_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <!-- Portfolio Menu -->
                        <div class="portfolio-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4 mb-md-5" data-toggle="buttons">
                            <label class="btn d-table text-uppercase p-2 active">
                                <input type="radio" value="all" checked="" class="portfolio-btn-1">
                                <span>All</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="marketing" class="portfolio-btn-1">
                                <span>Marketing</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="agency" class="portfolio-btn-1">
                                <span>Agency</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="seo" class="portfolio-btn-1">
                                <span>SEO</span>
                            </label>
                            <label class="btn d-table text-uppercase p-2">
                                <input type="radio" value="development" class="portfolio-btn-1">
                                <span>App Development</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Items -->
                <div class="row items portfolio-items-1 shuffle" style="position: relative; overflow: hidden; height: 615px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;marketing&quot;,&quot;development&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; transform: translate(0px, 0px) scale(1);">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="http://localhost/agency_elementor/wp-content/themes/picchi/assets/img/case_studies/case_studies_1/thumb_1.jpg" alt="">
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
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;seo&quot;,&quot;development&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(380px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="http://localhost/agency_elementor/wp-content/themes/picchi/assets/img/case_studies/case_studies_1/thumb_2.jpg" alt="">
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
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;marketing&quot;,&quot;agency&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(760px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="http://localhost/agency_elementor/wp-content/themes/picchi/assets/img/case_studies/case_studies_1/thumb_4.jpg" alt="">
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
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;agency&quot;,&quot;development&quot;,&quot;seo&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 308px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="http://localhost/agency_elementor/wp-content/themes/picchi/assets/img/case_studies/case_studies_1/thumb_3.jpg" alt="">
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
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;development&quot;,&quot;marketing&quot;,&quot;development&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(380px, 308px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="http://localhost/agency_elementor/wp-content/themes/picchi/assets/img/case_studies/case_studies_1/thumb_5.jpg" alt="">
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
                    <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups="[&quot;agency&quot;,&quot;development&quot;,&quot;marketing&quot;,&quot;seo&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(760px, 308px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <!-- Single Case Studies -->
                        <div class="single-case-studies">
                            <!-- Case Studies Thumb -->
                            <a href="#">
                                <img src="http://localhost/agency_elementor/wp-content/themes/picchi/assets/img/case_studies/case_studies_1/thumb_6.jpg" alt="">
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
        <!-- portfolio area section end  -->






<?php
    }
}
