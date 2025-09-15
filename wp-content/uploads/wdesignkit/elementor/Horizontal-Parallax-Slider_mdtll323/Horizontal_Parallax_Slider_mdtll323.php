<?php
/*
 * Widget Name: Horizontal Parallax Slider
 * Author: POSIMYTH
 * Author URI: https://posimyth.com
 * 
 * @package wdesignkit
 */


use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Class Wdkit_Horizontal_Parallax_Slider_mdtll323
 */
class Wdkit_Horizontal_Parallax_Slider_mdtll323 extends Widget_Base {

    /**
     * Get Widget Name.
     *
     * @since 2.0.3
     */
    public function get_name() {
        return 'wb-mdtll323';
    }

    /**
     * Get Widget Title.
     *
     * @since 2.0.3
     */
    public function get_title() {
        return esc_html__('Horizontal Parallax Slider', 'wdesignkit');
    }

    
    /**
     * Get Widget Icon.
     *
     * @since 2.0.3
     */
    public function get_icon() {
        return 'eicon-posts-group';
    }

    /**
     * Get Widget categories.
     *
     * @since 2.0.3
     */
    public function get_categories() {
        $GG_Databash = get_option( "wkit_builder" );
        if ( (empty($GG_Databash) || $GG_Databash == false) ) {
            return array('WDesignKit');
        }else{
            if( in_array( 'WDesignKit', $GG_Databash ) ){

                return array('WDesignKit');
            }else{
                return array('WDesignKit');
            }
        }
    }

    /**
     * Get Widget keywords.
     *
     * @since 2.0.3
     */
    public function get_keywords() {
        return array('Horizontal Slider','Navigation Slider');
    }

    

    /**
        * Prevent JS senitizer
        *
        * @since 1.2.4
        * */
        function wdk_senitize_js( $input ) {

            $input = preg_replace( '/&#x[0-9a-fA-F]+;/i', '', $input );

            // Remove complete iframe tags with or without content
            $input = preg_replace( '/<iframe[^>]*>.*?<\/iframe>/is', '', $input );

            // Remove incomplete iframe tags
            $input = preg_replace( '/<iframe[^>]*\/?>/is', '', $input );

            // Remove JavaScript pseudo-protocols (like javascript:)
            $input = preg_replace( '/javascript\s*:/i', '', $input );

            // Remove JavaScript event handlers (like onload, onclick, etc.)
            $input = preg_replace( '/\s*on\w+\s*=\s*(".*?"|\'.*?\'|[^>\s]+)/is', '', $input );

            // Ensure input is not overly stripped by handling invalid tags carefully
            $input = strip_tags( $input );

            return trim( $input );
        }

    

    

    /**
    * Get Widget Scripts
    *
    * @since 2.0.3
    */
    public function get_script_depends() {
        
        /**External js enqueue*/
        wp_enqueue_script( 'wd_ex_script_jybn5v25', 'https://unpkg.com/swiper@5.4.5/js/swiper.min.js', array(), '2.0.3.660014', true );


        wp_enqueue_script( 'wkit_child_script_wjno2t25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Horizontal-Parallax-Slider_mdtll323/Horizontal_Parallax_Slider_mdtll323.js', array(), '2.0.3.96127', true );

        return [ 'wkit_child_script_wjno2t25' ];
    }

    /**
    * Get Widget Styles
    *
    * @since 2.0.3
    */
    public function get_style_depends() {
        
        /**External Css enqueue*/
        wp_enqueue_style( 'wd_css_ex_1_ltae8625', 'https://unpkg.com/swiper@5.4.5/css/swiper.min.css', false, '2.0.3.450811', 'all' );


        wp_enqueue_style( 'wkit_css_1_p92t7925', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Horizontal-Parallax-Slider_mdtll323/Horizontal_Parallax_Slider_mdtll323.css', false, '2.0.3.451341', 'all' );

        return [ 'wkit_css_1_p92t7925' ];
    }

    

    /**
     * Register controls.
     *
     * @since 2.0.3
     */
    protected function register_controls() {

            $this->start_controls_section('Content_tab_content',
            [
                'label' => esc_html__( 'Content', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$repeater_zxga4625 = new \Elementor\Repeater();

                $repeater_zxga4625->add_control('text_wwxxt823',
                array(
            
            'label' => esc_html__( 'Title', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'The Plus Addons for Elementor', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );
$repeater_zxga4625->add_control('textarea_2d6fdp23',
                array(
            
            'type' => Controls_Manager::TEXTAREA,
            'ai'   => [ 'active' => false ],
            'label' => esc_html__( 'Description', 'wdesignkit' ),
            
            
            'label_block' => true,
            
            'rows' => '5',
            
            'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'wdesignkit' ),
            
            'dynamic' => array(
                'active' => true,
            ),
            
        )
            );
$repeater_zxga4625->add_control('media_nd5c1223',
                array(
            
            'label' => esc_html__( 'Select Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array(),
           
            
            
        )
            );

                
                $this->add_control('repeater_xusa8q23',
                    array(
                
				'type' => Controls_Manager::REPEATER,
				'label' => esc_html__( 'Slides', 'wdesignkit' ),
                
                
                
                
                
				'fields' => $repeater_zxga4625->get_controls(),
                'default' => array(array('_id'=>uniqid('Wkit-ame8rn25'),
'text_wwxxt823' => esc_html__('The Plus Addons for Elementor', 'wdesignkit'), 
'textarea_2d6fdp23' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'wdesignkit'), 
'media_nd5c1223' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png', 
),
),
                
                     
                
        )
                );
$this->end_controls_section();$this->start_controls_section('Slide Per View_tab_content',
            [
                'label' => esc_html__( 'Slide Per View', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('number_762mii23',
                array(
            
            'label' => esc_html__( 'Desktop', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 10,
            'step' => 1,
            'default' => 6,
            
            
            
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('number_nqdoo823',
                array(
            
            'label' => esc_html__( 'Tablet', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 10,
            'step' => 1,
            'default' => 6,
            
            
            
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('number_ytr5xm23',
                array(
            
            'label' => esc_html__( 'Mobile', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 10,
            'step' => 1,
            'default' => 6,
            
            
            
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('rawhtml_59wiml25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">Note: 
Slide per view value should be adjusted as per the given repeaters.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Slide Space Between_tab_content',
            [
                'label' => esc_html__( 'Slide Space Between', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('number_7xampd23',
                array(
            
            'label' => esc_html__( 'Desktop', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 100,
            'step' => 1,
            'default' => 6,
            
            
            
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('number_cjvw9323',
                array(
            
            'label' => esc_html__( 'Tablet', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 100,
            'step' => 1,
            'default' => 6,
            
            
            
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('number_jrqiju23',
                array(
            
            'label' => esc_html__( 'Mobile', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => 1,
            'max' => 100,
            'step' => 1,
            'default' => 6,
            
            
            
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->end_controls_section();$this->start_controls_section('Extra Options_tab_content',
            [
                'label' => esc_html__( 'Extra Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_yvs4bc23',
                array(
            
            'label' => esc_html__( 'Slide Position', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'left',
            
            'options' => array( 'left'  => esc_html__( 'Left', 'wdesignkit' ),'right'  => esc_html__( 'Right', 'wdesignkit' ), ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Need Help ?_tab_content',
            [
                'label' => esc_html__( 'Need Help ?', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('rawhtml_af9h3425',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-help-main" style="height: 300px">
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://store.posimyth.com/helpdesk/"
      target="_blank"
      rel="noopener noreferrer"
    >
      Raise a Ticket
    </a>
  </div>

  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://learn.wdesignkit.com/docs/horizontal-parallax-slider/"
      target="_blank"
      rel="noopener noreferrer"
    >
      Read Documentation
    </a>
  </div>
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://roadmap.wdesignkit.com/boards/feature-requests"
      target="_blank"
      rel="noopener noreferrer"
    >
      Suggest Feature
    </a>
  </div>
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://roadmap.wdesignkit.com/roadmap"
      target="_blank"
      rel="noopener noreferrer"
    >
      Plugin Roadmap
    </a>
  </div>
  <div class="wdk-help" style="margin-bottom: 15px">
    <a
      class="wdk-docs-link"
      style="color: var(--e-a-color-txt-accent);  text-decoration: none; border-color: transparent"
      href="https://www.facebook.com/wdesignkit"
      target="_blank"
      rel="noopener noreferrer"
    >
      Join Facebook Community
    </a>
  </div>
  <div class="need-help" id="elementor-panel__editor__help">
    <a
      id="elementor-panel__editor__help__link"
      href="https://wordpress.org/support/plugin/wdesignkit/"
      target="_blank"
      style="
        margin: auto;
        color: #fff;
        background: #8072fc;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 0.4px;
        border: 1px solid #8072fc;
        box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.3);
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
      "
      >Need Help <i class="eicon-help-o" aria-hidden="true"></i>
    </a>
  </div>
</div>', 'wdesignkit' ),
            'show_label' => false,
            
            
            
            
        )
            );
$this->end_controls_section();

            $this->start_controls_section(
            'Content_style_secdddtion',
            [
                'label' => esc_html__( 'Content', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('choose_z52kxr23',
                array(
            
            'label' => esc_html__( 'Horizontal Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'left' => array(
                        'title' => esc_html__( 'Left', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-left',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'right' => array(
                        'title' => esc_html__( 'Right', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-right',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-slide-title, {{WRAPPER}} .wkit-slide-desc' => 'text-align: {{VALUE}}',),
        )
            );
$this->add_responsive_control('choose_d8pdmx23',
                array(
            
            'label' => esc_html__( 'Vertical Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'flex-start' => array(
                        'title' => esc_html__( 'Top', 'wdesignkit' ),
                        'icon' => 'eicon-arrow-up',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'flex-end' => array(
                        'title' => esc_html__( 'Bottom', 'wdesignkit' ),
                        'icon' => 'eicon-arrow-down',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .wkit-slider-content' => 'justify-content: {{VALUE}}',),
        )
            );
$this->add_responsive_control('dimension_ty1a7123',
                array(
            
            'label' => esc_html__( 'Padding', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .wkit-slider-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->start_controls_tabs('normalhover_hxhhpa23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_hxhhpa23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_y8b9pb23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-main-slider .swiper-slide',
        )
            );
$this->add_responsive_control('dimension_l8p22p23',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .swiper-slide' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_w4xd7o23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-main-slider .swiper-slide', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_hxhhpa23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_hudn6z23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-main-slider .swiper-slide:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_hfpgih23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-main-slider .swiper-slide:hover', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Title_style_secdddtion',
            [
                'label' => esc_html__( 'Title', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_3t3vkg23',
                array(
            
            'label' => esc_html__( 'Bottom Space', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 50,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .wkit-slide-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_4up2m223',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-main-slider .wkit-slide-title',
			)
            );
$this->start_controls_tabs('normalhover_3dycbd25',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_3dycbd25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_qghma023',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .swiper-slide .wkit-slide-title' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_3dycbd25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_0beo7w23',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .swiper-slide:hover .wkit-slide-title' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Description_style_secdddtion',
            [
                'label' => esc_html__( 'Description', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_duilkw23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-main-slider .wkit-slide-desc',
			)
            );
$this->start_controls_tabs('normalhover_hlre2l25',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_hlre2l25_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_ebaid025',
                array(
            
            'label' => esc_html__( 'Description Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .swiper-slide .wkit-slide-desc' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_hlre2l25_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_9do1xc23',
                array(
            
            'label' => esc_html__( 'Description Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-main-slider .swiper-slide:hover .wkit-slide-desc' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Side Bar_style_secdddtion',
            [
                'label' => esc_html__( 'Side Bar', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('choose_5cm6x223',
                array(
            
            'label' => esc_html__( 'Horizontal Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'left' => array(
                        'title' => esc_html__( 'Left', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-left',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'right' => array(
                        'title' => esc_html__( 'Right', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-right',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .wkit-slider-content .wkit-slide-title' => 'text-align: {{VALUE}}',),
        )
            );
$this->add_responsive_control('choose_6s0es223',
                array(
            
            'label' => esc_html__( 'Vertical Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'flex-start' => array(
                        'title' => esc_html__( 'Top', 'wdesignkit' ),
                        'icon' => 'eicon-arrow-up',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'flex-end' => array(
                        'title' => esc_html__( 'Bottom', 'wdesignkit' ),
                        'icon' => 'eicon-arrow-down',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .wkit-slider-content' => 'justify-content: {{VALUE}}',),
        )
            );
$this->add_responsive_control('dimension_s73szz23',
                array(
            
            'label' => esc_html__( 'Padding', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .wkit-slider-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_lbldfg23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-nav-slider .wkit-slide-title',
			)
            );
$this->start_controls_tabs('normalhover_v6rllg23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_v6rllg23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_j0mtyo23',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .wkit-slide-title' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_vtucw123',
                array(
            
            'label' => esc_html__( 'Overlay Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .nav-slide-overlay' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_y1akov23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-nav-slider .swiper-slide',
        )
            );
$this->add_responsive_control('dimension_8ds8jt23',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .swiper-slide' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_ua51a623',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-nav-slider .swiper-slide', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_v6rllg23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_08gz6m23',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .swiper-slide:hover .wkit-slide-title' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_kdsel523',
                array(
            
            'label' => esc_html__( 'Overlay Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .swiper-slide:hover .nav-slide-overlay' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_tqk44623',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-nav-slider .swiper-slide:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_72dhqb23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-nav-slider .swiper-slide:hover', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_v6rllg23_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_la9z9k23',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .swiper-slide.swiper-slide-active .wkit-slide-title' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_q12b3b23',
                array(
            
            'label' => esc_html__( 'Overlay Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .swiper-slide.swiper-slide-active .nav-slide-overlay' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_hdlhhk23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-nav-slider .swiper-slide.swiper-slide-active',
        )
            );
$this->add_responsive_control('dimension_uugqj923',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-nav-slider .swiper-slide.swiper-slide-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_2729f823',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-nav-slider .swiper-slide.swiper-slide-active', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Overlay_style_secdddtion',
            [
                'label' => esc_html__( 'Overlay', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_825k2m23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-main-slider .swiper-slide .main-slide-overlay',
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Arrow_style_secdddtion',
            [
                'label' => esc_html__( 'Arrow', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_dj2v0123',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .swiper-button-next, {{WRAPPER}} .swiper-button-prev' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_t29ndc23',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .swiper-button-next, {{WRAPPER}} .swiper-button-prev' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_6cmrwg23',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .swiper-button-next:after, {{WRAPPER}} .swiper-button-prev:after' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_8oda6723',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_8oda6723_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_yas8wd23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .swiper-button-next:after, {{WRAPPER}} .swiper-button-prev:after' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_nts6e223',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .swiper-button-next, {{WRAPPER}} .swiper-button-prev',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_fxvtfw23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .swiper-button-next, {{WRAPPER}} .swiper-button-prev',
        )
            );
$this->add_responsive_control('dimension_47uh7p23',
                array(
            
            'label' => esc_html__( 'Border Radius', 'wdesignkit' ),
            'type' => Controls_Manager::DIMENSIONS,
            
            
            'label_block' => true,
            'size_units' => array('px','%',),
            'default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            'tablet_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'mobile_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
                'widescreen_default' => array(
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'unit' => 'px',
                    'isLinked' => 'true',
                ),
            
            
            
            'selectors' => array('{{WRAPPER}} .swiper-button-next, {{WRAPPER}} .swiper-button-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_649gyd23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .swiper-button-next, {{WRAPPER}} .swiper-button-prev', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_8oda6723_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_g2oqdt23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .swiper-button-next:hover:after, {{WRAPPER}} .swiper-button-prev:hover:after' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_f2y8be23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .swiper-button-next:hover, {{WRAPPER}} .swiper-button-prev:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_9dwo0k23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .swiper-button-next:hover, {{WRAPPER}} .swiper-button-prev:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_d91slq23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .swiper-button-next:hover, {{WRAPPER}} .swiper-button-prev:hover', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Background_style_secdddtion',
            [
                'label' => esc_html__( 'Background', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_m2j52i23',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%","vh", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'vh' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-slider-wrap' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_section();

    }

    /**
     * Written in PHP and HTML.
     *
     * @since 2.0.3
     */
    protected function render() { 	

        $settings = $this->get_settings_for_display();
        $number_762mii23 = isset($settings['number_762mii23']) ? $this->wdk_senitize_js($settings['number_762mii23']) : '';
$number_nqdoo823 = isset($settings['number_nqdoo823']) ? $this->wdk_senitize_js($settings['number_nqdoo823']) : '';
$number_ytr5xm23 = isset($settings['number_ytr5xm23']) ? $this->wdk_senitize_js($settings['number_ytr5xm23']) : '';
$rawhtml_59wiml25 = !empty($settings['rawhtml_59wiml25']) ? $this->wdk_senitize_js($settings['rawhtml_59wiml25']) : '';
$number_7xampd23 = isset($settings['number_7xampd23']) ? $this->wdk_senitize_js($settings['number_7xampd23']) : '';
$number_cjvw9323 = isset($settings['number_cjvw9323']) ? $this->wdk_senitize_js($settings['number_cjvw9323']) : '';
$number_jrqiju23 = isset($settings['number_jrqiju23']) ? $this->wdk_senitize_js($settings['number_jrqiju23']) : '';
$select_yvs4bc23 = !empty($settings['select_yvs4bc23']) ? $this->wdk_senitize_js($settings['select_yvs4bc23']) : '';
$rawhtml_af9h3425 = !empty($settings['rawhtml_af9h3425']) ? $this->wdk_senitize_js($settings['rawhtml_af9h3425']) : '';

        $repeater_xusa8q23_g625 = '';
                            if ( $settings['repeater_xusa8q23'] ) {
                                foreach ( $settings['repeater_xusa8q23'] as $key => $r_item ) {
                                    $media_nd5c1223 = !empty($r_item['media_nd5c1223']['url']) ? $this->wdk_senitize_js($r_item['media_nd5c1223']['url']) : '';

                                    $repeater_xusa8q23_g625 .= '<div class="elementor-repeater-item-' .esc_attr($r_item['_id']) . ' swiper-slide" data-repeater_xusa8q23="{repeater_xusa8q23}">
                <div class="slide-bg-img" style="background-image: url('.$media_nd5c1223.')"></div>
                <div class="main-slide-overlay"></div>
                <div class="wkit-slider-content">
                    <span class="wkit-slide-title" data-title="' . $this->wdk_senitize_js($r_item['text_wwxxt823']) . '">' . $this->wdk_senitize_js($r_item['text_wwxxt823']) . '</span>
                    <p class="wkit-slide-desc" data-desc="' . $this->wdk_senitize_js($r_item['textarea_2d6fdp23']) . '">' . $this->wdk_senitize_js($r_item['textarea_2d6fdp23']) . '</p>
                </div>
            </div>';
                                }
                            }$repeater_xusa8q23_qv25 = '';
                            if ( $settings['repeater_xusa8q23'] ) {
                                foreach ( $settings['repeater_xusa8q23'] as $key => $r_item ) {
                                    $media_nd5c1223 = !empty($r_item['media_nd5c1223']['url']) ? $this->wdk_senitize_js($r_item['media_nd5c1223']['url']) : '';

                                    $repeater_xusa8q23_qv25 .= '<div class="elementor-repeater-item-' .esc_attr($r_item['_id']) . ' swiper-slide" data-repeater_xusa8q23="{repeater_xusa8q23}">
                <div class="slide-bg-img" style="background-image:url('.$media_nd5c1223.')"></div>
                <div class="nav-slide-overlay"></div>
                <div class="wkit-slider-content">
                    <span class="wkit-slide-title" data-title="' . $this->wdk_senitize_js($r_item['text_wwxxt823']) . '">' . $this->wdk_senitize_js($r_item['text_wwxxt823']) . '</span>
                </div>
            </div>';
                                }
                            }

        $output = '';
        $output .= '<div class="wkit-wb-Widget_mdtll323" data-wdkitunique="mdtll323">';
            $output .= '<div class="wkit-hor-par-slider side-bar-pos-'.$select_yvs4bc23.'" data-spv-desk="'.$number_762mii23.'" data-spv-tab="'.$number_nqdoo823.'" data-spv-mob="'.$number_ytr5xm23.'" data-ssb-desk="'.$number_7xampd23.'" data-ssb-tab="'.$number_cjvw9323.'" data-ssb-mob="'.$number_jrqiju23.'">
    <div class="wkit-slider-wrap wkit-main-slider">
        <div class="swiper-wrapper">
            '.$repeater_xusa8q23_g625.'
        </div>
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>
    <div class="wkit-slider-wrap wkit-nav-slider">
        <div class="swiper-wrapper" role="navigation">
            '.$repeater_xusa8q23_qv25.'
        </div>
    </div>
</div>';
        $output .= '</div>';
        
        echo $output;
    }
}