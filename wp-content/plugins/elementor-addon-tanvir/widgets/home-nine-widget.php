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
                        <div class="section-heading text-center mb-3">
                            <h2><?php echo $section_9_title; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_9_description; ?></p>>
                        </div>
                        <!-- Contact Us -->
                        <div class="contact-us">
                            <ul>
                                <!-- Contact Info -->
                                <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                                    <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                                    <a class="d-block my-2" href="#">
                                        <h3><?php echo $section_9_contact_phone; ?></h3>
                                    </a>
                                    <p><?php echo $section_9_contact_phone_des; ?></p>
                                </li>
                                <!-- Contact Info -->
                                <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                                    <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                                    <!-- <a class="d-none d-sm-block my-2" href="#">
                                        <h3>mail@company.com</h3>
                                    </a> -->
                                    <a class="d-block d-sm-none my-2" href="#">
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
                                        <button type="submit" class="btn btn-bordered active btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span><?php echo $section_9_contact_button_text; ?></button>

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
