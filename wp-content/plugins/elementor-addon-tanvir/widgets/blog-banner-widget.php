<?php
class Blog_banner_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'blog_banner';
    }

    public function get_title()
    {
        return esc_html__('Blog Banner', 'elementor-addon');
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
        return ['Blog', 'banner'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'blog_banner_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'blog_banner_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('BLOG GRID', 'elementor-addon'),
            ]
        );



        $this->add_control(
            'blog_banner_lists',
            [
                'label' => esc_html__('Banner List', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'blog_banner_list_item', // Change this key
                        'label' => esc_html__('List Item', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Home', 'elementor-addon'),
                        'label_block' => true,
                    ],
                ],
                'default' => [
                    [
                        'blog_banner_list_item' => esc_html__('Home', 'elementor-addon'),
                    ],
                ],
                'title_field' => '{{{ blog_banner_list_item }}}', // Change this key
            ]
        );

        $this->end_controls_section();

        // title Tab end














    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $blog_banner_title = $settings['blog_banner_title'];
        $blog_banner_lists =   $settings['blog_banner_lists'];



?>







        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white text-uppercase mb-3"><?php echo $blog_banner_title ?></h2>

                            <?php if ($blog_banner_lists) { ?>
                                <ol class="breadcrumb d-flex justify-content-center">

                                    <?php foreach ($blog_banner_lists as $item) { ?>
                                        <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html"><?php echo $item['blog_banner_list_item'] ?></a></li>

                                    <?php } ?>
                                </ol>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->





<?php
    }
}
