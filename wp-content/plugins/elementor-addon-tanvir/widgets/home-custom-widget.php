<?php
class Home_custom_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_custom';
    }

    public function get_title()
    {
        return esc_html__('Home custom', 'elementor-addon');
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
        return ['Home', 'custom'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_custom_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_custom_title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('our recent team', 'elementor-addon'),
                'placeholder' => esc_html__('Your Title here', 'elementor-addon'),
            ]
        );

        $this->end_controls_section();

        // title Tab end




        // Style Tab Start for title
        $this->start_controls_section(
            'section_custom_title_style_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_custom_title_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.custom h2' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_custom_title_typography',
                'selector' => '{{WRAPPER}} .section-heading.custom h2',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for title












        // description Tab Start

        $this->start_controls_section(
            'section_custom_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_custom_description',
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
            'section_custom_title_style_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_custom_desc_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.custom p' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_custom_desc_typography',
                'selector' => '{{WRAPPER}} .section-heading.custom p',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for description




    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_custom_title = $settings['section_custom_title'];
        $section_custom_description = $settings['section_custom_description'];



?>







        <!-- ***** Portfolio Area Start 6 ***** -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading custom text-center">
                            <h2><?php echo $section_custom_title; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_custom_description; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12">



                        <?php
                        // Custom post type name
                        $post_type = 'team';

                        // Custom taxonomy name
                        $taxonomy = 'team_cat';

                        // Get all terms for the custom taxonomy
                        $terms = get_terms(array(
                            'taxonomy' => $taxonomy,
                            'hide_empty' => false, // Set to true to hide terms with no posts
                        ));

                        // Check if there are any terms
                        if (!empty($terms)) {
                            echo '<div class="portfolio-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4 mb-md-5" data-toggle="buttons">';

                            // Generate the "All" button
                            echo '<label class="btn d-table text-uppercase p-2 active">';
                            echo '<input type="radio" value="all" checked="" class="portfolio-btn-1">';
                            echo '<span>All</span>';
                            echo '</label>';

                            // Generate buttons for each term
                            foreach ($terms as $term) {
                                $term_slug = $term->slug;
                                $term_name = $term->name;

                                echo '<label class="btn d-table text-uppercase p-2">';
                                echo '<input type="radio" value="' . esc_attr($term_slug) . '" class="portfolio-btn-1">';
                                echo '<span>' . esc_html($term_name) . '</span>';
                                echo '</label>';
                            }

                            echo '</div>';
                        }
                        ?>

                    </div>
                </div>
                <!-- Portfolio Items -->
                <div class="row items portfolio-items-1 shuffle" style="position: relative; overflow: hidden; height: 615px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">


                    <?php
                    // Define the query arguments
                    $args = array(
                        'post_type'      => 'team',
                        'posts_per_page' => -1,
                    );

                    // Run the query
                    $query = new WP_Query($args);

                    // Check if there are any posts
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();

                            // Get post terms for the 'team_cat' taxonomy
                            $terms = get_the_terms(get_the_ID(), 'team_cat');
                            $term_slugs = array();

                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    $term_slugs[] = $term->slug;
                                }
                            }

                            // Output your HTML for each post
                    ?>
                            <div class="col-12 col-sm-6 col-lg-4 portfolio-item-1 shuffle-item shuffle-item--visible" data-groups='["<?php echo implode('","', $term_slugs); ?>"]' style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; transform: translate(0px, 0px) scale(1);">
                                <!-- Single Case Studies -->
                                <div class="single-case-studies">
                                    <!-- Case Studies Thumb -->
                                    <a href="#">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                    <!-- Case Studies Overlay -->
                                    <a href="<?php the_permalink(); ?>" class="case-studies-overlay">
                                        <!-- Overlay Text -->
                                        <span class="overlay-text text-center p-3">
                                            <h3 class="text-white mb-3"><?php the_title(); ?></h3>
                                            <p class="text-white"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    // No posts found
                    endif;
                    ?>








                </div>




                <div class="row justify-content-center">
                    <a href="#" class="btn btn-bordered mt-4">View More</a>
                </div>
            </div>
        </section>
        <!-- ***** Portfolio Area End ***** -->





<?php
    }
}
