<?php
class Home_copy_widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'home_copy';
    }

    public function get_title()
    {
        return esc_html__('Home copy', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['copy-theme-agency'];
    }

    public function get_keywords()
    {
        return ['Home', 'copy'];
    }




    protected function register_controls()
    {

        // title Tab Start

        $this->start_controls_section(
            'section_copy_title_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  title 
        $this->add_control(
            'section_copy_title',
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
            'section_copy_title_style_tab',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'separator' => 'after',
            ]
        );


        // color 
        $this->add_control(
            'section_copy_title_color',
            [
                'label' => esc_html__('Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .section-heading.copy h2' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        // typography 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_copy_title_typography',
                'selector' => '{{WRAPPER}} .section-heading.copy h2',
            ]
        );


        $this->end_controls_section();

        // Style Tab end for title












        // description Tab Start

        $this->start_controls_section(
            'section_copy_description_tab',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        //  description 
        $this->add_control(
            'section_copy_description',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.', 'elementor-addon'),
                'placeholder' => esc_html__('Your description here', 'elementor-addon'),
            ]
        );


        $this->add_control(
            'size',
            [
                'type' => \Elementor\Controls_Manager::NUMBER,
                'label' => esc_html__('Size', 'elementor-addon'),
                'placeholder' => '0',
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'default' => 50,
            ]
        );


        $this->add_control(
            'open_lightbox',
            [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Lightbox', 'elementor-addon'),
                'options' => [
                    'default' => esc_html__('Default', 'elementor-addon'),
                    'yes' => esc_html__('Yes', 'elementor-addon'),
                    'no' => esc_html__('No', 'elementor-addon'),
                ],
                'default' => 'no',
            ]
        );




        $this->add_control(
            'alignment',
            [
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'label' => esc_html__('Alignment', 'textdomain'),
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'textdomain'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'textdomain'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'textdomain'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
            ]
        );



        $this->add_control(
            'font_size',
            [
                'type' => \Elementor\Controls_Manager::SLIDER,
                'label' => esc_html__('Size', 'textdomain'),
                'size_units' => ['px', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 200,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 20,
                ],
            ]
        );


        $this->add_control(
            'text_color',
            [
                'type' => \Elementor\Controls_Manager::COLOR,
                'label' => esc_html__('Text Color', 'textdomain'),
                'default' => '#fefefe',
            ]
        );


        $this->add_control(
            'image',
            [
                'type' => \Elementor\Controls_Manager::MEDIA,
                'label' => esc_html__('Choose Image', 'textdomain'),
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->add_responsive_control(
            'control-name',
            [
                'label' => esc_html__('Spacing', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
            ]
        );


        $this->add_responsive_control(
            'control-name',
            [
                'label' => esc_html__('Spacing', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
            ]
        );


        $this->add_responsive_control(
            'title_padding',
            [
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'label' => esc_html__('Padding', 'textdomain'),
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'selectors' => [
                    '{{WRAPPER}} .widget-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .title',
            ]
        );



        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'selector' => '{{WRAPPER}} .wrapper',
            ]
        );



        $this->add_control(
            'popover-toggle',
            [
                'label' => esc_html__('Box', 'textdomain'),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off' => esc_html__('Default', 'textdomain'),
                'label_on' => esc_html__('Custom', 'textdomain'),
                'return_value' => 'yes',
            ]
        );


        $this->add_control(
            'custom_html',
            [
                'label' => esc_html__('Custom HTML', 'textdomain'),
                'type' => \Elementor\Controls_Manager::CODE,
                'language' => 'html',
                'rows' => 20,
            ]
        );


        $this->add_control(
            'view',
            [
                'label' => esc_html__('View', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HIDDEN,
                'default' => 'traditional',
            ]
        );


        $this->add_control(
            'show_title',
            [
                'label' => esc_html__('Show Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'textdomain'),
                'label_off' => esc_html__('Hide', 'textdomain'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $this->add_control(
            'border_style',
            [
                'label' => esc_html__('Border Style', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    '' => esc_html__('Default', 'textdomain'),
                    'none' => esc_html__('None', 'textdomain'),
                    'solid'  => esc_html__('Solid', 'textdomain'),
                    'dashed' => esc_html__('Dashed', 'textdomain'),
                    'dotted' => esc_html__('Dotted', 'textdomain'),
                    'double' => esc_html__('Double', 'textdomain'),
                ],
                'selectors' => [
                    '{{WRAPPER}} .your-class' => 'border-style: {{VALUE}};',
                ],
            ]
        );



        $this->add_control(
            'list',
            [
                'label' => esc_html__('Show Elements', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => true,
                'options' => [
                    'title'  => esc_html__('Title', 'textdomain'),
                    'description' => esc_html__('Description', 'textdomain'),
                    'button' => esc_html__('Button', 'textdomain'),
                ],
                'default' => ['title', 'description'],
            ]
        );


        $this->add_control(
            'icon',
            [
                'label' => esc_html__('Social Icons', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICON,
                'include' => [
                    'fa fa-facebook',
                    'fa fa-flickr',
                    'fa fa-google-plus',
                    'fa fa-instagram',
                    'fa fa-linkedin',
                    'fa fa-pinterest',
                    'fa fa-reddit',
                    'fa fa-twitch',
                    'fa fa-twitter',
                    'fa fa-vimeo',
                    'fa fa-youtube',
                ],
                'default' => 'fa fa-facebook',
            ]
        );


        $this->add_control(
            'due_date',
            [
                'label' => esc_html__('Due Date', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
            ]
        );



        $this->add_control(
            'gallery',
            [
                'label' => esc_html__('Add Images', 'textdomain'),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'show_label' => false,
                'default' => [],
            ]
        );



        $this->add_control(
            'list1',
            [
                'label' => esc_html__('Repeater List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'list_title',
                        'label' => esc_html__('Title', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('List Title', 'textdomain'),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'list_content',
                        'label' => esc_html__('Content', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'textdomain'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'list_color',
                        'label' => esc_html__('Color', 'textdomain'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
                        ],
                    ]
                ],
                'default' => [
                    [
                        'list_title' => esc_html__('Title #1', 'textdomain'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                    ],
                    [
                        'list_title' => esc_html__('Title #2', 'textdomain'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );


        $this->add_control(
            'entrance_animation',
            [
                'label' => esc_html__('Entrance Animation', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ANIMATION,
                'prefix_class' => 'animated ',
            ]
        );


        $this->add_control(
            'website_link',
            [
                'label' => esc_html__('Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );


        $this->add_control(
            'custom_dimension',
            [
                'label' => esc_html__('Image Dimension', 'textdomain'),
                'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
                'description' => esc_html__('Crop the original image size to any custom size. Set custom width or height to keep the original size ratio.', 'textdomain'),
                'default' => [
                    'width' => '',
                    'height' => '',
                ],
            ]
        );


        $this->add_control(
            'icon1',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
                'recommended' => [
                    'fa-solid' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                    'fa-regular' => [
                        'circle',
                        'dot-circle',
                        'square-full',
                    ],
                ],
            ]
        );



        $this->add_control(
            'custom_text_shadow',
            [
                'label' => esc_html__('Text Shadow', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT_SHADOW,
                'selectors' => [
                    '{{SELECTOR}}' => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};',
                ],
            ]
        );


        $this->add_control(
            'custom_box_shadow',
            [
                'label' => esc_html__('Box Shadow', 'textdomain'),
                'type' => \Elementor\Controls_Manager::BOX_SHADOW,
                'selectors' => [
                    '{{SELECTOR}}' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}};',
                ],
            ]
        );


        $this->add_control(
            'width',
            [
                'label' => esc_html__('Width', 'textdomain'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .your-class' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );


        $this->add_control(
            'margin',
            [
                'label' => esc_html__('Margin', 'textdomain'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'default' => [
                    'top' => 2,
                    'right' => 0,
                    'bottom' => 2,
                    'left' => 0,
                    'unit' => 'em',
                    'isLinked' => false,
                ],
                'selectors' => [
                    '{{WRAPPER}} .your-class' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->add_control(
            'more_options',
            [
                'label' => esc_html__('Additional Options', 'textdomain'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );


        $this->add_control(
            'important_note',
            [
                'label' => esc_html__('Important Note', 'textdomain'),
                'type' => \Elementor\Controls_Manager::RAW_HTML,
                'raw' => esc_html__('A very important message to show in the panel.', 'textdomain'),
                'content_classes' => 'your-class',
            ]
        );


        $this->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'delete_content',
            [
                'label' => esc_html__('Delete Content', 'textdomain'),
                'type' => \Elementor\Controls_Manager::BUTTON,
                'separator' => 'before',
                'button_type' => 'success',
                'text' => esc_html__('Delete', 'textdomain'),
                'event' => 'namespace:editor:delete',
            ]
        );


        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'text_stroke',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'text_shadow',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border11',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => [ 'custom' ],
				'include' => [],
				'default' => 'large',
			]
		);



        $this->add_group_control(
			\Elementor\Group_Control_Css_Filter::get_type(),
			[
				'name' => 'custom_css_filters',
				'selector' => '{{WRAPPER}} .your-class',
			]
		);


        $this->end_controls_section();

        // description Tab end







        // // Style Tab Start for description
        // $this->start_controls_section(
        //     'section_copy_title_style_tab',
        //     [
        //         'label' => esc_html__('Title', 'elementor-addon'),
        //         'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        //         'separator' => 'after',
        //     ]
        // );


        // // color 
        // $this->add_control(
        //     'section_copy_desc_color',
        //     [
        //         'label' => esc_html__('Color', 'elementor-addon'),
        //         'type' => \Elementor\Controls_Manager::COLOR,
        //         'default' => '#fff',
        //         'selectors' => [
        //             '{{WRAPPER}} .section-heading.copy p' => 'color: {{VALUE}} !important',
        //         ],
        //     ]
        // );

        // // typography 
        // $this->add_group_control(
        //     \Elementor\Group_Control_Typography::get_type(),
        //     [
        //         'name' => 'section_copy_desc_typography',
        //         'selector' => '{{WRAPPER}} .section-heading.copy p',
        //     ]
        // );


        // $this->end_controls_section();

        // // Style Tab end for description




    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $section_copy_title = $settings['section_copy_title'];
        $section_copy_description = $settings['section_copy_description'];
        $size = $settings['size'];
        $open_lightbox = $settings['open_lightbox'];



?>







        <!-- ***** Portfolio Area Start 6 ***** -->
        <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading copy text-center">
                            <h2><?php echo $section_copy_title; ?></h2>
                            <p class="d-none d-sm-block mt-4"><?php echo $section_copy_description; ?></p>
                            <p class="d-none d-sm-block mt-4"><?php echo $size; ?></p>
                            <p class="d-none d-sm-block mt-4"><?php echo $open_lightbox; ?></p>

                            <i class="{{ settings.icon }}" aria-hidden="true"></i>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ***** Portfolio Area End ***** -->





<?php
    }
}
