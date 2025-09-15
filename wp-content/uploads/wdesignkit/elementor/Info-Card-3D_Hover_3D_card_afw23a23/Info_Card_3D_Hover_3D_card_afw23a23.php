<?php
/*
 * Widget Name: Info Card 3D
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
 * Class Wdkit_Info_Card_3D_Hover_3D_card_afw23a23
 */
class Wdkit_Info_Card_3D_Hover_3D_card_afw23a23 extends Widget_Base {

    /**
     * Get Widget Name.
     *
     * @since 2.0.3
     */
    public function get_name() {
        return 'wb-Hover_3D_card_afw23a23';
    }

    /**
     * Get Widget Title.
     *
     * @since 2.0.3
     */
    public function get_title() {
        return esc_html__('Info Card 3D', 'wdesignkit');
    }

    
    /**
     * Get Widget Icon.
     *
     * @since 2.0.3
     */
    public function get_icon() {
        return 'eicon-image-rollover';
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
        return array('hover','3D card','image galleries','menus');
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
        

        wp_enqueue_script( 'wkit_child_script_vcuo4k25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Info-Card-3D_Hover_3D_card_afw23a23/Info_Card_3D_Hover_3D_card_afw23a23.js', array(), '2.0.3.767869', true );

        return [ 'wkit_child_script_vcuo4k25' ];
    }

    /**
    * Get Widget Styles
    *
    * @since 2.0.3
    */
    public function get_style_depends() {
        
        /**External Css enqueue*/
        

        wp_enqueue_style( 'wkit_css_1_s1830g25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Info-Card-3D_Hover_3D_card_afw23a23/Info_Card_3D_Hover_3D_card_afw23a23.css', false, '2.0.3.33049', 'all' );

        return [ 'wkit_css_1_s1830g25' ];
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
$this->add_control('media_rgrifu23',
                array(
            
            'label' => esc_html__( 'Main Banner Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array(),
           
            
            
        )
            );
$this->add_control('media_eryzmq23',
                array(
            
            'label' => esc_html__( 'Select Character Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array(),
           
            
            
        )
            );
$this->add_control('select_zt4n4023',
                array(
            
            'label' => esc_html__( 'Select Type', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'image',
            
            'options' => array( 'text'  => esc_html__( 'Text', 'wdesignkit' ),'image'  => esc_html__( 'Image', 'wdesignkit' ), ),
        )
            );
$this->add_control('media_i0al3x23',
                array(
            
            'label' => esc_html__( 'Select Title Image ', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array(),
           
            
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'image'),
],
                ),
        )
            );
$this->add_control('text_o3cj5e23',
                array(
            
            'label' => esc_html__( 'Title 1', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Title 1', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('text_hz6zzq23',
                array(
            
            'label' => esc_html__( 'Title 2', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Title 2', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('text_lu23nl25',
                array(
            
            'label' => esc_html__( 'Title 3', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Title 3', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Special Options_tab_content',
            [
                'label' => esc_html__( 'Special Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'],
],
                ),
            ]
        );
$this->add_control('switcher_h874oh23',
                array(
            
            'label' => esc_html__( 'Title 1 Stroke', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'yes',
            'default' => '',
            
            'label_block' => false,
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('switcher_1gw9zi23',
                array(
            
            'label' => esc_html__( 'Title 2 Stroke', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'title2-active',
            'default' => '',
            
            'label_block' => false,
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->add_control('switcher_1fne9g23',
                array(
            
            'label' => esc_html__( 'Title 3 Stroke', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'title3-active',
            'default' => '',
            
            'label_block' => false,
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Extra Options_tab_content',
            [
                'label' => esc_html__( 'Extra Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('url_kfr8f423',
                array(
            
            'label' => esc_html__( 'URL', 'wdesignkit' ),
            'type' => Controls_Manager::URL,
            
            
            'options' => array('url','is_external','nofollow',),
            'default' => array(
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
                'custom_attributes' => '',
            ),
            
            'label_block' => true,
            
            
            
            
        )
            );
$this->add_control('switcher_6grknv25',
                array(
            
            'label' => esc_html__( 'Tablet Link', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'disable-tablet-link',
            'default' => 'disable-tablet-link',
            
            'label_block' => false,
            
            
            
        )
            );
$this->add_control('switcher_al09cu25',
                array(
            
            'label' => esc_html__( 'Mobile Link', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'disable-mobile-link',
            'default' => 'disable-mobile-link',
            
            'label_block' => false,
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Need Help ?_tab_content',
            [
                'label' => esc_html__( 'Need Help ?', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('rawhtml_2rvqwu25',
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
      href="https://learn.wdesignkit.com/docs/3d-info-card/"
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
            
            
            
            
            
        )
            );
$this->end_controls_section();

            $this->start_controls_section(
            'Card_style_secdddtion',
            [
                'label' => esc_html__( 'Card', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_348lea23',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'em' => array(
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card-item' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_6pyzzk23',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%","em", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'em' => array(
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card-item' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('choose_bksbr123',
                array(
            
            'label' => esc_html__( 'Alignment', 'wdesignkit' ),
            
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
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main' => 'text-align: {{VALUE}}',),
        )
            );
$this->start_controls_tabs('normalhover_a3pp5h23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_a3pp5h23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_3tpr0j23',
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card-wrap::after',
        )
            );
$this->add_responsive_control('dimension_jhyrrj23',
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
            
            
            
            'selectors' => array('{{WRAPPER}}  .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-hover-3d-card-wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_hqqx1u23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-hover-3d-card  .wkit-hover-3d-card-wrap', 
        )
            );
$this->add_group_control(
                
			\Elementor\Group_Control_Css_Filter::get_type(),
			array(
				'name' => 'cssfilter_76xl1g23',
                
                
				'selector' => '{{WRAPPER}} .wkit-hover-3d-card-wrap',
			)
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_a3pp5h23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_3gi7wc23',
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card:hover .wkit-hover-3d-card-wrap::before, {{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card:hover .wkit-hover-3d-card-wrap::after',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_b1tdot23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-hover-3d-card:hover .wkit-hover-3d-card-wrap', 
        )
            );
$this->add_group_control(
                
			\Elementor\Group_Control_Css_Filter::get_type(),
			array(
				'name' => 'cssfilter_iv0j2w23',
                
                
				'selector' => '{{WRAPPER}} .wkit-hover-3d-card:hover .wkit-hover-3d-card-wrap',
			)
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Title 1_style_secdddtion',
            [
                'label' => esc_html__( 'Title 1', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'],
],
                ),
            ]
        );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_ok2cb823',
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
                'selector' => '{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-1',
			)
            );
$this->add_responsive_control('slider_t3kvf623',
                array(
            
            'label' => esc_html__( 'Bottom Gap', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-1' => 'margin-bottom: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_w4hvrl23',
                array(
            
            'label' => esc_html__( 'Stroke Width', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_h874oh23', 'operator' => '==', 'value' => 'yes'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-stroke-yes' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_h9ep6723',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
array('name' => 'switcher_h874oh23', 'operator' => '!=', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-1' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_1xe9kh23',
                array(
            
            'label' => esc_html__( 'Stroke Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_h874oh23', 'operator' => '==', 'value' => 'yes'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-stroke-yes' => '-webkit-text-stroke-color: {{VALUE}}',),
        )
            );
$this->add_control('color_iqe69k23',
                array(
            
            'label' => esc_html__( 'Stroke Fill Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_h874oh23', 'operator' => '==', 'value' => 'yes'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-stroke-yes' => '-webkit-text-fill-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                    
        Group_Control_Text_Shadow::get_type(),
            array(
				'name' => 'textshadow_0mzkjk23',
                'label' => esc_html__( 'Text Shadow', 'wdesignkit' ),
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
				'selector' => '{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-1',
			)
                );
$this->end_controls_section();$this->start_controls_section(
            'Title 2_style_secdddtion',
            [
                'label' => esc_html__( 'Title 2', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'],
],
                ),
            ]
        );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_vufd0e23',
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
                'selector' => '{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-2',
			)
            );
$this->add_responsive_control('slider_a58gx923',
                array(
            
            'label' => esc_html__( 'Bottom Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 102,
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-2' => 'margin-bottom: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_mynzrh23',
                array(
            
            'label' => esc_html__( 'Stroke Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 30,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 102,
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
           
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_1gw9zi23', 'operator' => '==', 'value' => 'title2-active'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-stroke-title2-active' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_gaetcw23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
array('name' => 'switcher_1gw9zi23', 'operator' => '!=', 'value' => 'title2-active'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-2' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_wporwk23',
                array(
            
            'label' => esc_html__( 'Stroke Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_1gw9zi23', 'operator' => '==', 'value' => 'title2-active'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-stroke-title2-active' => '-webkit-text-stroke-color: {{VALUE}}',),
        )
            );
$this->add_control('color_jfkyzl23',
                array(
            
            'label' => esc_html__( 'Stroke Fill Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_1gw9zi23', 'operator' => '==', 'value' => 'title2-active'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-stroke-title2-active' => '-webkit-text-fill-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                    
        Group_Control_Text_Shadow::get_type(),
            array(
				'name' => 'textshadow_we0ow423',
                'label' => esc_html__( 'Text Shadow', 'wdesignkit' ),
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
				'selector' => '{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-2',
			)
                );
$this->end_controls_section();$this->start_controls_section(
            'Title 3_style_secdddtion',
            [
                'label' => esc_html__( 'Title 3', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'],
],
                ),
            ]
        );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_06n3ap23',
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
                'selector' => '{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-3',
			)
            );
$this->add_responsive_control('slider_zz5xvr24',
                array(
            
            'label' => esc_html__( 'Bottom Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 30,
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
           
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-3' => 'margin-bottom: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_lps7au25',
                array(
            
            'label' => esc_html__( 'Stroke Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 30,
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
           
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
array('name' => 'switcher_1fne9g23', 'operator' => '==', 'value' => 'title3-active'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-stroke-title3-active' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_1r5x6223',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
array('name' => 'switcher_1fne9g23', 'operator' => '!=', 'value' => 'title3-active'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-3' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_z87gsv24',
                array(
            
            'label' => esc_html__( 'Stroke Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_1fne9g23', 'operator' => '==', 'value' => 'title3-active'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-stroke-title3-active' => '-webkit-text-stroke-color: {{VALUE}}',),
        )
            );
$this->add_control('color_i6lm3424',
                array(
            
            'label' => esc_html__( 'Stroke Fill Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'and',
                    'terms' => [array('name' => 'switcher_1fne9g23', 'operator' => '==', 'value' => 'title3-active'),
array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-stroke-title3-active' => '-webkit-text-fill-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                    
        Group_Control_Text_Shadow::get_type(),
            array(
				'name' => 'textshadow_owj6gw23',
                'label' => esc_html__( 'Text Shadow', 'wdesignkit' ),
                
                
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_zt4n4023', 'operator' => '==', 'value' => 'text'),
],
                ),
				'selector' => '{{WRAPPER}} .wkit-hover-3d-card .wkit-hover-3d-card-title-3',
			)
                );
$this->end_controls_section();$this->start_controls_section(
            'Character Image_style_secdddtion',
            [
                'label' => esc_html__( 'Character Image', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_wagk7j23',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 2000,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-hover-card-character' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_6ra31623',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 2000,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-hover-3d-card-main .wkit-hover-3d-card .wkit-hover-card-character' => 'height: {{SIZE}}{{UNIT}};',)
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
        $media_rgrifu23 = !empty($settings['media_rgrifu23']['url']) ? $this->wdk_senitize_js($settings['media_rgrifu23']['url']) : '';
$media_eryzmq23 = !empty($settings['media_eryzmq23']['url']) ? $this->wdk_senitize_js($settings['media_eryzmq23']['url']) : '';
$select_zt4n4023 = !empty($settings['select_zt4n4023']) ? $this->wdk_senitize_js($settings['select_zt4n4023']) : '';
$media_i0al3x23 = !empty($settings['media_i0al3x23']['url']) ? $this->wdk_senitize_js($settings['media_i0al3x23']['url']) : '';
$text_o3cj5e23 = !empty($settings['text_o3cj5e23']) ? $this->wdk_senitize_js($settings['text_o3cj5e23']) : '';
$text_hz6zzq23 = !empty($settings['text_hz6zzq23']) ? $this->wdk_senitize_js($settings['text_hz6zzq23']) : '';
$text_lu23nl25 = !empty($settings['text_lu23nl25']) ? $settings['text_lu23nl25'] : '';
$switcher_h874oh23 = !empty($settings['switcher_h874oh23']) ? $settings['switcher_h874oh23'] : '';
$switcher_1gw9zi23 = !empty($settings['switcher_1gw9zi23']) ? $settings['switcher_1gw9zi23'] : '';
$switcher_1fne9g23 = !empty($settings['switcher_1fne9g23']) ? $settings['switcher_1fne9g23'] : '';
$url_kfr8f423_url = !empty($settings['url_kfr8f423']) && !empty($settings['url_kfr8f423']['url']) ? $this->wdk_senitize_js($settings['url_kfr8f423']['url']) : '';
$url_kfr8f423_is_external = !empty($settings['url_kfr8f423']) && !empty($settings['url_kfr8f423']['is_external']) ? '_blank' : '';
$url_kfr8f423_nofollow = !empty($settings['url_kfr8f423']) && !empty($settings['url_kfr8f423']['nofollow']) ? 'nofollow' : '';
$url_kfr8f423_custmAtr = !empty($settings['url_kfr8f423']) && !empty($settings['url_kfr8f423']['custom_attributes']) ? $settings['url_kfr8f423']['custom_attributes'] : '';
                $url_kfr8f423_atr = '';
        
                if( !empty( $url_kfr8f423_custmAtr ) ){
                    $url_kfr8f423_custmAtr = trim( $url_kfr8f423_custmAtr, " " );
                    $main_array = explode( ",", $url_kfr8f423_custmAtr );

                    foreach ( $main_array as $key => $value ) {
                        if( !empty( $value ) ){
                            $ct_array = explode( "|", $value );
                            $url_kfr8f423_atr .= $ct_array[0] .' = "'. $ct_array[1].'"';
                        }
                    }
                }$switcher_6grknv25 = !empty($settings['switcher_6grknv25']) ? $settings['switcher_6grknv25'] : '';
$switcher_al09cu25 = !empty($settings['switcher_al09cu25']) ? $settings['switcher_al09cu25'] : '';
$rawhtml_2rvqwu25 = !empty($settings['rawhtml_2rvqwu25']) ? $this->wdk_senitize_js($settings['rawhtml_2rvqwu25']) : '';

        

        $output = '';
        $output .= '<div class="wkit-wb-Widget_Hover_3D_card_afw23a23" data-wdkitunique="Hover_3D_card_afw23a23">';
            $output .= '<div class="wkit-hover-3d-card-main">
    <div class="wkit-hover-3d-card-item '.$switcher_6grknv25.' '.$switcher_al09cu25.'">
         <a href="'.$url_kfr8f423_url.'" target="'.$url_kfr8f423_is_external.'" rel="'.$url_kfr8f423_nofollow.'" class="info-link">
          <div class="wkit-hover-3d-card">
            <div class="wkit-hover-3d-card-wrap">
              <img src="'.$media_rgrifu23.'" class="wkit-hover-3d-card-cover-img">
            </div>
            <div class="wkit-content wkit-hover-card-title">
                <div class="wkit-hover-3d-card-title-1 wkit-stroke-'.$switcher_h874oh23.'">'.$text_o3cj5e23.'</div>
                <div class="wkit-hover-3d-card-title-2 wkit-stroke-'.$switcher_1gw9zi23.'">'.$text_hz6zzq23.'</div>
                <div class="wkit-hover-3d-card-title-3 wkit-stroke-'.$switcher_1fne9g23.'">'.$text_lu23nl25.'</div>
            </div>
            <img src="'.$media_i0al3x23.'" class="wkit-hover-card-title">
            <img src="'.$media_eryzmq23.'" class="wkit-hover-card-character">
          </div> 
        </a>
    </div>
</div>';
        $output .= '</div>';
        
        echo $output;
    }
}