<?php
/*
 * Widget Name: WhatsApp Chat
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
 * Class Wdkit_WhatsApp_Chat_k7lzew23
 */
class Wdkit_WhatsApp_Chat_k7lzew23 extends Widget_Base {

    /**
     * Get Widget Name.
     *
     * @since 2.0.3
     */
    public function get_name() {
        return 'wb-k7lzew23';
    }

    /**
     * Get Widget Title.
     *
     * @since 2.0.3
     */
    public function get_title() {
        return esc_html__('WhatsApp Chat', 'wdesignkit');
    }

    
    /**
     * Get Widget Icon.
     *
     * @since 2.0.3
     */
    public function get_icon() {
        return 'eicon-commenting-o';
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
        return array('WhatsApp','Chat');
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
        

        wp_enqueue_script( 'wkit_child_script_n8zavc25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/WhatsApp-Chat_k7lzew23/WhatsApp_Chat_k7lzew23.js', array(), '2.0.3.490988', true );

        return [ 'wkit_child_script_n8zavc25' ];
    }

    /**
    * Get Widget Styles
    *
    * @since 2.0.3
    */
    public function get_style_depends() {
        
        /**External Css enqueue*/
        

        wp_enqueue_style( 'wkit_css_1_smyppq25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/WhatsApp-Chat_k7lzew23/WhatsApp_Chat_k7lzew23.css', false, '2.0.3.953587', 'all' );

        return [ 'wkit_css_1_smyppq25' ];
    }

    

    /**
     * Register controls.
     *
     * @since 2.0.3
     */
    protected function register_controls() {

            $this->start_controls_section('Toggle Button_tab_content',
            [
                'label' => esc_html__( 'Toggle Button', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('text_vyi5pp23',
                array(
            
            'label' => esc_html__( 'Button Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Need a Help?', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->add_control('select_l6nskb23',
                array(
            
            'label' => esc_html__( 'Icon Type', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'none',
            
            'options' => array( 'none'  => esc_html__( 'None', 'wdesignkit' ),'icon'  => esc_html__( 'Icon', 'wdesignkit' ), ),
        )
            );
$this->add_control('select_5iy06v25',
                array(
            
            'label' => esc_html__( 'Icon Position', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'before',
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'options' => array( 'before'  => esc_html__( 'Before', 'wdesignkit' ),'after'  => esc_html__( 'After', 'wdesignkit' ), ),
        )
            );
$this->add_control('iconscontrol_0p5x3523',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fab fa-whatsapp',
                'library' => 'fa-solid',
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Profile Title_tab_content',
            [
                'label' => esc_html__( 'Profile Title', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('text_wiqdor23',
                array(
            
            'label' => esc_html__( 'Title', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Posimyth', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->add_control('media_vq0g6123',
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
$this->add_control('iconscontrol_2n1gbw24',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'far fa-check-circle',
                'library' => 'fa-solid',
            ),
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Profile Subtitle_tab_content',
            [
                'label' => esc_html__( 'Profile Subtitle', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('text_obeg2k23',
                array(
            
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'replies within a day', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->add_control('iconscontrol_m6x3ve24',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'far fa-clock',
                'library' => 'fa-solid',
            ),
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Popup Content_tab_content',
            [
                'label' => esc_html__( 'Popup Content', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('textarea_q2tlj223',
                array(
            
            'type' => Controls_Manager::TEXTAREA,
            'ai'   => [ 'active' => false ],
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            
            
            'label_block' => true,
            
            'rows' => '5',
            
            'default' => esc_html__( 'Hi there 👋
How can I help you?', 'wdesignkit' ),
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Popup Button_tab_content',
            [
                'label' => esc_html__( 'Popup Button', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('text_by1gvg23',
                array(
            
            'label' => esc_html__( 'Text', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Start Chat', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->add_control('select_egyy2t23',
                array(
            
            'label' => esc_html__( 'Icon Type', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'none',
            
            'options' => array( 'none'  => esc_html__( 'None', 'wdesignkit' ),'icon'  => esc_html__( 'Icon', 'wdesignkit' ), ),
        )
            );
$this->add_control('iconscontrol_4r22vh23',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fas fa-external-link-alt',
                'library' => 'fa-solid',
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_egyy2t23', 'operator' => '==', 'value' => 'icon'),
],
                ),
        )
            );
$this->add_control('text_wge8i023',
                array(
            
            'label' => esc_html__( 'WhatsApp Number', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( '911234567890', 'wdesignkit' ),
            
            
            
            'label_block' => true,
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->add_control('rawhtml_qbc6ao25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: Add WhatsApp Number with County Code. ex: 911234567890 here 91 is county code of India
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->add_control('textarea_riravg23',
                array(
            
            'type' => Controls_Manager::TEXTAREA,
            'ai'   => [ 'active' => false ],
            'label' => esc_html__( 'Message', 'wdesignkit' ),
            
            
            'label_block' => true,
            
            'rows' => '5',
            
            'default' => esc_html__( 'Its a fun place to connect and share.', 'wdesignkit' ),
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Extra Options_tab_content',
            [
                'label' => esc_html__( 'Extra Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('switcher_xuo26v23',
                array(
            
            'label' => esc_html__( 'Show Dot', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'yes',
            'default' => 'yes',
            
            'label_block' => false,
            
            
            
        )
            );
$this->add_control('switcher_wvlbhb23',
                array(
            
            'label' => esc_html__( 'Default Enable', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'active',
            'default' => 'active',
            
            'label_block' => false,
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Need Help ?_tab_content',
            [
                'label' => esc_html__( 'Need Help ?', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('rawhtml_54b9b425',
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
      href="https://learn.wdesignkit.com/docs/whatsapp-chat/"
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
            'Toggle Button_style_secdddtion',
            [
                'label' => esc_html__( 'Toggle Button', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_in5gfk24',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_responsive_control('slider_lydd7p24',
                array(
            
            'label' => esc_html__( 'Top Space', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn' => 'margin-top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_htd7qf23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-tgl-btn-text',
			)
            );
$this->start_controls_tabs('normalhover_fve45k23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_fve45k23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_sy57cu23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-tgl-btn-text' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_dk27qn23',
                array(
            
            'label' => esc_html__( 'Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_xuo26v23', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.dot-show-yes::before' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_ecwnl223',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_5esc5f23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn',
        )
            );
$this->add_responsive_control('dimension_dqp9qp23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_cxjrq723',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_fve45k23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_5fw9ji23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn:hover .wkit-tgl-btn-text' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_ku18rf23',
                array(
            
            'label' => esc_html__( 'Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_xuo26v23', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.dot-show-yes:hover::before' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_9ob81j23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_47tsxy23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_t7be2123',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn:hover', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_fve45k23_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_yr45co23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.active .wkit-tgl-btn-text' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_d4iumi23',
                array(
            
            'label' => esc_html__( 'Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_xuo26v23', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.dot-show-yes.active::before' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_7crk3423',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn.active',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_3vpgwj23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn.active',
        )
            );
$this->add_responsive_control('dimension_ny2hx423',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_qawmmw23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn.active', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Toggle Icon_style_secdddtion',
            [
                'label' => esc_html__( 'Toggle Icon', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'],
],
                ),
            ]
        );
$this->add_responsive_control('slider_p9tahm25',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 200,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn .tp-title-icon' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_hr3qs525',
                array(
            
            'label' => esc_html__( 'Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 200,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn .tp-title-icon' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_veb44t23',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_mw4nur23',
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_7ryv5x24',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
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
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .type-icon .wkit-toggle-btn .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_hr17e525',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_hr17e525_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_28idto23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_0suica24',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_hs827025',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn .tp-title-icon',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_o34vfd25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn .tp-title-icon',
        )
            );
$this->add_responsive_control('dimension_x6vtln25',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn .tp-title-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_shex8l25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn .tp-title-icon', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_hr17e525_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_c3w3xm23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_wzqsiv24',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_p20b3925',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn:hover .tp-title-icon',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_0ssioo25',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn:hover .tp-title-icon',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_58ihyd25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn:hover .tp-title-icon', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_hr17e525_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_7gudm823',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.active .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_7anjwg24',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_l6nskb23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.active .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_ku2vok25',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn.active .tp-title-icon',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_vaisr825',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn.active .tp-title-icon',
        )
            );
$this->add_responsive_control('dimension_5bvj2n25',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-toggle-btn.active .tp-title-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_4s007v25',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-toggle-btn.active .tp-title-icon', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Content Header_style_secdddtion',
            [
                'label' => esc_html__( 'Content Header', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_fya9if23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-header',
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Avatar Image_style_secdddtion',
            [
                'label' => esc_html__( 'Avatar Image', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_mxphtu23',
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
           
            
            'selectors' => array('{{WRAPPER}} .avatar-img-wrap' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_2h080623',
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
           
            
            'selectors' => array('{{WRAPPER}} .avatar-img-wrap' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_control('color_u45lua23',
                array(
            
            'label' => esc_html__( 'Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-avatar::before' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_k7nhoe23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .avatar-img-wrap',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_uni09u23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .header-avatar', 
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Profile Title_style_secdddtion',
            [
                'label' => esc_html__( 'Profile Title', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_vx8rg725',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .header-name' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_xjag9k25',
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
           
            
            'selectors' => array('{{WRAPPER}} .header-name .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_glalaw25',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .header-name .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_xia4h723',
                
                
                
                'selector' => '{{WRAPPER}} .header-name',
			)
            );
$this->add_control('color_oraozg23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-name' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_1igo5o25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-name .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_lzwjx025',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-name .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Profile Subtitle_style_secdddtion',
            [
                'label' => esc_html__( 'Profile Subtitle', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_txje5y25',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .header-time' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_des63825',
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
           
            
            'selectors' => array('{{WRAPPER}} .header-time .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_ux0ekz25',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .header-time .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_mcrrug23',
                
                
                
                'selector' => '{{WRAPPER}} .header-time',
			)
            );
$this->add_control('color_kawax723',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-time' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_ltwbsl25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-time .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_nwcwzq25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .header-time .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Popup Body_style_secdddtion',
            [
                'label' => esc_html__( 'Popup Body', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_control('heading_n4q47y23',
                array(
            
            'label' => esc_html__( 'Title', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_8np72823',
                
                
                
                'selector' => '{{WRAPPER}} .author-name',
			)
            );
$this->add_control('color_0wn6u123',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .author-name' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('heading_oc81cg23',
                array(
            
            'label' => esc_html__( 'Message', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_oim9na23',
                
                
                
                'selector' => '{{WRAPPER}} .content-text',
			)
            );
$this->add_control('color_u1dm9m23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .content-text' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('heading_9cq99223',
                array(
            
            'label' => esc_html__( 'Time', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_jw21k123',
                
                
                
                'selector' => '{{WRAPPER}} .content-time',
			)
            );
$this->add_control('color_lmmbec23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .content-time' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_qjrdgj23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            'separator' => 'before',
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-body',
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Loader_style_secdddtion',
            [
                'label' => esc_html__( 'Loader', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_control('color_9odl9323',
                array(
            
            'label' => esc_html__( 'Color 1', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .whatsapp-typing-loader' => '--wdotColor1: {{VALUE}}',),
        )
            );
$this->add_control('color_anbrrw23',
                array(
            
            'label' => esc_html__( 'Color 2', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .whatsapp-typing-loader' => '--wdotColor2: {{VALUE}}',),
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Content Button_style_secdddtion',
            [
                'label' => esc_html__( 'Content Button', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_control('heading_ygznk023',
                array(
            
            'label' => esc_html__( 'Outer', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_responsive_control('dimension_ofe1s523',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-wa-btn-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_lpaz0623',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-wa-btn-wrap',
        )
            );
$this->add_control('heading_tl42m423',
                array(
            
            'label' => esc_html__( 'Button', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_responsive_control('dimension_kfsp3j24',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_2uyqzo23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-whatsapp-btn span',
			)
            );
$this->start_controls_tabs('normalhover_vijh8423',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_vijh8423_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_of6pef23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn .wa-btn-text' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_j8ky0523',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-btn',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_um2xc923',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-btn',
        )
            );
$this->add_responsive_control('dimension_nsvcp223',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_lwnprh23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-btn', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_vijh8423_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_s55e8823',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn:hover .wa-btn-text' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_lsqnsv23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-btn:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_v893xn23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-btn:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_pjwdj623',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-btn:hover', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Content Button Icon_style_secdddtion',
            [
                'label' => esc_html__( 'Content Button Icon', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_egyy2t23', 'operator' => '==', 'value' => 'icon'],
],
                ),
            ]
        );
$this->add_responsive_control('slider_zirlwy25',
                array(
            
            'label' => esc_html__( 'Icon Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 200,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_0ezu0q25',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 200,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_a36nf725',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 199,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_9xvac225',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_9xvac225_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_d7picu25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_0nsxuh25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_9xvac225_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_3wswqw25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_hwktfe25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-btn:hover .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Popup Background_style_secdddtion',
            [
                'label' => esc_html__( 'Popup Background', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('choose_w125ax23',
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
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-chat' => 'text-align: {{VALUE}}',),
        )
            );
$this->add_responsive_control('slider_cl7ey923',
                array(
            
            'label' => esc_html__( 'Width', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 1000,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-wa-inner-wrap' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_hqy35f24',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-chat-inner',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_bkdazs24',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-chat-inner',
        )
            );
$this->add_responsive_control('dimension_n36rc224',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-whatsapp-chat-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_b3o1jt24',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-whatsapp-chat-inner', 
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
        $text_vyi5pp23 = !empty($settings['text_vyi5pp23']) ? $this->wdk_senitize_js($settings['text_vyi5pp23']) : '';
$select_l6nskb23 = !empty($settings['select_l6nskb23']) ? $this->wdk_senitize_js($settings['select_l6nskb23']) : '';
$select_5iy06v25 = !empty($settings['select_5iy06v25']) ? $this->wdk_senitize_js($settings['select_5iy06v25']) : '';
$iconscontrol_0p5x3523 = "";
                        if(!empty($settings['iconscontrol_0p5x3523']) && !empty($settings['iconscontrol_0p5x3523']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_0p5x3523'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_0p5x3523 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$text_wiqdor23 = !empty($settings['text_wiqdor23']) ? $this->wdk_senitize_js($settings['text_wiqdor23']) : '';
$media_vq0g6123 = !empty($settings['media_vq0g6123']['url']) ? $this->wdk_senitize_js($settings['media_vq0g6123']['url']) : '';
$iconscontrol_2n1gbw24 = "";
                        if(!empty($settings['iconscontrol_2n1gbw24']) && !empty($settings['iconscontrol_2n1gbw24']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_2n1gbw24'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_2n1gbw24 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$text_obeg2k23 = !empty($settings['text_obeg2k23']) ? $this->wdk_senitize_js($settings['text_obeg2k23']) : '';
$iconscontrol_m6x3ve24 = "";
                        if(!empty($settings['iconscontrol_m6x3ve24']) && !empty($settings['iconscontrol_m6x3ve24']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_m6x3ve24'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_m6x3ve24 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$textarea_q2tlj223 = !empty($settings['textarea_q2tlj223']) ? $this->wdk_senitize_js($settings['textarea_q2tlj223']) : '';
$text_by1gvg23 = !empty($settings['text_by1gvg23']) ? $this->wdk_senitize_js($settings['text_by1gvg23']) : '';
$select_egyy2t23 = !empty($settings['select_egyy2t23']) ? $this->wdk_senitize_js($settings['select_egyy2t23']) : '';
$iconscontrol_4r22vh23 = "";
                        if(!empty($settings['iconscontrol_4r22vh23']) && !empty($settings['iconscontrol_4r22vh23']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_4r22vh23'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_4r22vh23 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$text_wge8i023 = !empty($settings['text_wge8i023']) ? $this->wdk_senitize_js($settings['text_wge8i023']) : '';
$rawhtml_qbc6ao25 = !empty($settings['rawhtml_qbc6ao25']) ? $this->wdk_senitize_js($settings['rawhtml_qbc6ao25']) : '';
$textarea_riravg23 = !empty($settings['textarea_riravg23']) ? $this->wdk_senitize_js($settings['textarea_riravg23']) : '';
$switcher_xuo26v23 = !empty($settings['switcher_xuo26v23']) ? $settings['switcher_xuo26v23'] : '';
$switcher_wvlbhb23 = !empty($settings['switcher_wvlbhb23']) ? $settings['switcher_wvlbhb23'] : '';
$rawhtml_54b9b425 = !empty($settings['rawhtml_54b9b425']) ? $this->wdk_senitize_js($settings['rawhtml_54b9b425']) : '';

        

        $output = '';
        $output .= '<div class="wkit-wb-Widget_k7lzew23" data-wdkitunique="k7lzew23">';
            $output .= '<div class="wkit-whatsapp-chat">
    <div class="wkit-wa-inner-wrap">
        <div class="wkit-whatsapp-chat-inner '.$switcher_wvlbhb23.'">
            <div class="wkit-whatsapp-header">
                <div class="header-avatar" data-src="'.$media_vq0g6123.'">
                    <div class="avatar-img-wrap">
                        <img class="avatar-image" src="'.$media_vq0g6123.'">
                    </div>
                </div>
                <div class="header-content">
                    <span class="header-name" data-text="'.$text_wiqdor23.'">'.$text_wiqdor23.''.$iconscontrol_2n1gbw24.'</span>
                    <span class="header-time" data-text="'.$text_obeg2k23.'">'.$iconscontrol_m6x3ve24.''.$text_obeg2k23.'</span>
                </div>
                <div class="wkit-wa-popup-close">+</div>
            </div>
            <div class="wkit-whatsapp-body">
                <div class="whatsapp-typing-loader">
                    <div class="what-dot dot-1"></div>
                    <div class="what-dot dot-2"></div>
                    <div class="what-dot dot-3"></div>
                </div>
                <div class="body-main-content">
                    <div class="author-name" data-text="'.$text_wiqdor23.'">'.$text_wiqdor23.'</div>
                    <div class="content-text" data-text="'.$textarea_q2tlj223.'">'.$textarea_q2tlj223.'</div>
                    <div class="content-time"></div>
                </div>
            </div>
            <div class="wkit-wa-btn-wrap type-'.$select_egyy2t23.'" wa-number="'.$text_wge8i023.'" wa-message="'.$textarea_riravg23.'">
                <a class="wkit-whatsapp-btn" target="_blank">
                    '.$iconscontrol_4r22vh23.'
                    <span class="wa-btn-text" data-text="'.$text_by1gvg23.'">'.$text_by1gvg23.'</span>
                </a>
            </div>
        </div>
        <div class="wkit-whatsapp-toggle type-'.$select_l6nskb23.'">
            <div class="wkit-toggle-btn dot-show-'.$switcher_xuo26v23.' '.$switcher_wvlbhb23.' '.$select_5iy06v25.'">
                '.$iconscontrol_0p5x3523.'
                <span class="wkit-tgl-btn-text" data-text="'.$text_vyi5pp23.'">'.$text_vyi5pp23.'</span>
            </div>
        </div>
    </div>
</div>';
        $output .= '</div>';
        
        echo $output;
    }
}