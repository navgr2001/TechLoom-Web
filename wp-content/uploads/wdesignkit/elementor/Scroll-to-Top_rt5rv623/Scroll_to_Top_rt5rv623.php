<?php
/*
 * Widget Name: Scroll to Top
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
 * Class Wdkit_Scroll_to_Top_rt5rv623
 */
class Wdkit_Scroll_to_Top_rt5rv623 extends Widget_Base {

    /**
     * Get Widget Name.
     *
     * @since 2.0.3
     */
    public function get_name() {
        return 'wb-rt5rv623';
    }

    /**
     * Get Widget Title.
     *
     * @since 2.0.3
     */
    public function get_title() {
        return esc_html__('Scroll to Top', 'wdesignkit');
    }

    
    /**
     * Get Widget Icon.
     *
     * @since 2.0.3
     */
    public function get_icon() {
        return 'eicon-v-align-top';
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
        return array('Scroll to Top','Back to Top','Page Navigation');
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
        

        wp_enqueue_script( 'wkit_child_script_ss3mwt25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Scroll-to-Top_rt5rv623/Scroll_to_Top_rt5rv623.js', array(), '2.0.3.90861', true );

        return [ 'wkit_child_script_ss3mwt25' ];
    }

    /**
    * Get Widget Styles
    *
    * @since 2.0.3
    */
    public function get_style_depends() {
        
        /**External Css enqueue*/
        

        wp_enqueue_style( 'wkit_css_1_v3pcxk25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Scroll-to-Top_rt5rv623/Scroll_to_Top_rt5rv623.css', false, '2.0.3.120672', 'all' );

        return [ 'wkit_css_1_v3pcxk25' ];
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
$this->add_control('text_84wm4g23',
                array(
            
            'label' => esc_html__( 'Title', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Back to Top', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            
        )
            );
$this->add_control('select_llua2q23',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'icon',
            
            'options' => array( 'icon'  => esc_html__( 'Icon', 'wdesignkit' ),'image'  => esc_html__( 'Image', 'wdesignkit' ),'none'  => esc_html__( 'None', 'wdesignkit' ), ),
        )
            );
$this->add_control('select_f8h0cz23',
                array(
            
            'label' => esc_html__( 'Icon Position', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'after-text',
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'options' => array( 'after-text'  => esc_html__( 'After', 'wdesignkit' ),'before-text'  => esc_html__( 'Before', 'wdesignkit' ), ),
        )
            );
$this->add_control('iconscontrol_4w93sa23',
                array(
            
            'label' => esc_html__( ' Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            'classes' => 'tp-title-icon',
            'default' => array(
                'value' => 'fas fa-arrow-right',
                'library' => 'fa-solid',
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
        )
            );
$this->add_control('media_7uav9v23',
                array(
            
            'label' => esc_html__( 'Select Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => 'https://etemplates.wdesignkit.com/widgets/wp-content/plugins/wdesignkit/assets/images/jpg/placeholder.png',
            ),
            
            'label_block' => true,
            
            'media_types' => array("image"),
           'dynamic' => array(
                'active' => true,
            ),
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'image'),
],
                ),
        )
            );
$this->add_control('select_j6s46n23',
                array(
            
            'label' => esc_html__( 'Select Side', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'horizontal',
            
            'options' => array( 'horizontal'  => esc_html__( 'Horizontal', 'wdesignkit' ),'vertical'  => esc_html__( 'Vertical', 'wdesignkit' ), ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Extra Options_tab_content',
            [
                'label' => esc_html__( 'Extra Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_7r268k24',
                array(
            
            'label' => esc_html__( 'Apply To', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'body',
            
            'options' => array( 'body'  => esc_html__( 'Body', 'wdesignkit' ),'container'  => esc_html__( 'Container', 'wdesignkit' ), ),
        )
            );
$this->add_control('text_9yzuwi24',
                array(
            
            'label' => esc_html__( 'Connection ID/Class', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            
            'placeholder' => esc_html__( '#id or .classname', 'wdesignkit' ),
            
            
            'label_block' => true,
            'input_type' => 'text', 
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_7r268k24', 'operator' => '==', 'value' => 'container'),
],
                ),
        )
            );
$this->add_control('rawhtml_k11oa225',
                array(
            
            'label' => esc_html__( 'RawHtml', 'wdesignkit' ),
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400; 
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: If you leave the Connection ID empty, it will target the closest container.
</div>', 'wdesignkit' ),
            'show_label' => false,
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_7r268k24', 'operator' => '==', 'value' => 'container'),
],
                ),
        )
            );
$this->add_control('select_qf9zw924',
                array(
            
            'label' => esc_html__( 'Select Position', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'relative',
            
            'options' => array( 'relative'  => esc_html__( 'Relative', 'wdesignkit' ),'fixed'  => esc_html__( 'Fixed', 'wdesignkit' ), ),
        )
            );
$this->add_control('heading_4b4qzx24',
                array(
            
            'label' => esc_html__( 'Offset', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$this->add_control('number_pv2byx23',
                array(
            
            'label' => esc_html__( 'Desktop', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => "",
            'max' => 1000,
            'step' => 1,
            'default' => 100,
            
            
            
            
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('number_7bs6qp23',
                array(
            
            'label' => esc_html__( 'Tablet', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => "",
            'max' => 5000,
            'step' => 1,
            'default' => 50,
            
            
            
            
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('number_ao6cgb23',
                array(
            
            'label' => esc_html__( 'Mobile', 'wdesignkit' ),
            'type' => Controls_Manager::NUMBER,
            'min' => "",
            'max' => 5000,
            'step' => 1,
            'default' => 25,
            
            
            
            
            
            
            'dynamic' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} undefined' => 'undefined: {{VALUE}}',),
        )
            );
$this->add_control('rawhtml_8ndcpy25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: When you select a container, the offset value starts from the container
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Need Help ?_tab_content',
            [
                'label' => esc_html__( 'Need Help ?', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('rawhtml_g7e51u25',
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
      href="https://learn.wdesignkit.com/docs/scroll-to-top/"
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
            'Button_style_secdddtion',
            [
                'label' => esc_html__( 'Button', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('choose_8aa6ak23',
                array(
            
            'label' => esc_html__( 'Direction', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'normal' => array(
                        'title' => esc_html__( 'Normal', 'wdesignkit' ),
                        'icon' => 'eicon-arrow-right',
                    ),
                
                    'column' => array(
                        'title' => esc_html__( 'Column', 'wdesignkit' ),
                        'icon' => 'eicon-arrow-down',
                    ),
                ),
            'default' => 'normal',
            'toggle' => true,
            
            
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop-main .wkit-scrolltotop' => 'flex-direction: {{VALUE}}',),
        )
            );
$this->add_responsive_control('choose_56a2em24',
                array(
            
            'label' => esc_html__( 'Alignment', 'wdesignkit' ),
            
            'type' => Controls_Manager::CHOOSE,
            'options' => array(
                    'flex-start' => array(
                        'title' => esc_html__( 'Left', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-left',
                    ),
                
                    'center' => array(
                        'title' => esc_html__( 'Center', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-center',
                    ),
                
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'wdesignkit' ),
                        'icon' => 'eicon-text-align-right',
                    ),
                ),
            
            'toggle' => true,
            
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_7r268k24', 'operator' => '==', 'value' => 'relative'),
],
                ),
            'selectors' => array('{{WRAPPER}} .pos-relative' => 'justify-content: {{VALUE}}',),
        )
            );
$this->add_responsive_control('dimension_94pekm23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_responsive_control('slider_nn09fl24',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_7r268k24', 'operator' => '==', 'value' => 'fixed'),
],
                ),
            'selectors' => array('{{WRAPPER}} .pos-fixed .wkit-scrolltotop' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_nv168324',
                array(
            
            'label' => esc_html__( 'Left Offset', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_7r268k24', 'operator' => '==', 'value' => 'fixed'),
],
                ),
            'selectors' => array('{{WRAPPER}} .pos-fixed .wkit-scrolltotop' => 'left: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_bvoss823',
                array(
            
            'label' => esc_html__( 'Button Width', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_0xu7cs23',
                array(
            
            'label' => esc_html__( 'Button Height', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_lk6xgl23',
                array(
            
            'label' => esc_html__( 'Gap', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 10,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop' => 'gap: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_yhmtpu23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-scrolltotop',
			)
            );
$this->start_controls_tabs('normalhover_3x4bzq23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_3x4bzq23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_8y24hh23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_t0baor23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_o4q89k23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop',
        )
            );
$this->add_responsive_control('dimension_j9uani23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_y7k2qr23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_3x4bzq23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_ylaper23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop:hover' => 'color: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_17oavs23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_j58us323',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop:hover',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_vw9akj23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop:hover', 
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Icon_style_secdddtion',
            [
                'label' => esc_html__( 'Icon', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_llua2q23', 'operator' => '!=', 'value' => 'none'],
],
                ),
            ]
        );
$this->add_responsive_control('slider_novwyy23',
                array(
            
            'label' => esc_html__( 'Image Width', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'image'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop img' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_60o6xf25',
                array(
            
            'label' => esc_html__( 'Image Height', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'image'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop img' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_jy3lkm25',
                array(
            
            'label' => esc_html__( 'Icon Width', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop .tp-title-icon' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_tum7ix23',
                array(
            
            'label' => esc_html__( 'Icon Height', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop .tp-title-icon' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_sw0lj923',
                array(
            
            'label' => esc_html__( 'Icon Size', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop .tp-title-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_4makrz23',
                array(
            
            'label' => esc_html__( 'SVG Size', 'wdesignkit' ),
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
           
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop .tp-title-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_m8ze9t23',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '!=', 'value' => 'none'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_m8ze9t23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_rbsesr23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop-main .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_vca01v24',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop-main .tp-title-icon svg,{{WRAPPER}} .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_qmlxm923',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selector' => '{{WRAPPER}} .wkit-scrolltotop-main .tp-title-icon',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_u8cigk23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop-main .tp-title-icon',
        )
            );
$this->add_responsive_control('dimension_ip34nn23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop-main .tp-title-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_m8ze9t23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_13qqje23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop:hover .tp-title-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_estnm424',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-scrolltotop:hover .tp-title-icon svg, {{WRAPPER}} .wkit-scrolltotop:hover svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_dg1yyt23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_llua2q23', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selector' => '{{WRAPPER}} .wkit-scrolltotop:hover .tp-title-icon',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_jlxycy23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-scrolltotop:hover .tp-title-icon',
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();

    }

    /**
     * Written in PHP and HTML.
     *
     * @since 2.0.3
     */
    protected function render() { 	

        $settings = $this->get_settings_for_display();
        $text_84wm4g23 = !empty($settings['text_84wm4g23']) ? $this->wdk_senitize_js($settings['text_84wm4g23']) : '';
$select_llua2q23 = !empty($settings['select_llua2q23']) ? $this->wdk_senitize_js($settings['select_llua2q23']) : '';
$select_f8h0cz23 = !empty($settings['select_f8h0cz23']) ? $this->wdk_senitize_js($settings['select_f8h0cz23']) : '';
$iconscontrol_4w93sa23 = "";
                        if(!empty($settings['iconscontrol_4w93sa23']) && !empty($settings['iconscontrol_4w93sa23']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($settings['iconscontrol_4w93sa23'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_4w93sa23 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$media_7uav9v23 = !empty($settings['media_7uav9v23']['url']) ? $this->wdk_senitize_js($settings['media_7uav9v23']['url']) : '';
$select_j6s46n23 = !empty($settings['select_j6s46n23']) ? $this->wdk_senitize_js($settings['select_j6s46n23']) : '';
$select_7r268k24 = !empty($settings['select_7r268k24']) ? $this->wdk_senitize_js($settings['select_7r268k24']) : '';
$text_9yzuwi24 = !empty($settings['text_9yzuwi24']) ? $this->wdk_senitize_js($settings['text_9yzuwi24']) : '';
$rawhtml_k11oa225 = !empty($settings['rawhtml_k11oa225']) ? $this->wdk_senitize_js($settings['rawhtml_k11oa225']) : '';
$select_qf9zw924 = !empty($settings['select_qf9zw924']) ? $this->wdk_senitize_js($settings['select_qf9zw924']) : '';
$heading_4b4qzx24 = !empty($settings['heading_4b4qzx24']) ? $settings['heading_4b4qzx24'] : '';
$number_pv2byx23 = isset($settings['number_pv2byx23']) ? $this->wdk_senitize_js($settings['number_pv2byx23']) : '';
$number_7bs6qp23 = isset($settings['number_7bs6qp23']) ? $this->wdk_senitize_js($settings['number_7bs6qp23']) : '';
$number_ao6cgb23 = isset($settings['number_ao6cgb23']) ? $this->wdk_senitize_js($settings['number_ao6cgb23']) : '';
$rawhtml_8ndcpy25 = !empty($settings['rawhtml_8ndcpy25']) ? $this->wdk_senitize_js($settings['rawhtml_8ndcpy25']) : '';
$rawhtml_g7e51u25 = !empty($settings['rawhtml_g7e51u25']) ? $this->wdk_senitize_js($settings['rawhtml_g7e51u25']) : '';

        

        $output = '';
        $output .= '<div class="wkit-wb-Widget_rt5rv623" data-wdkitunique="rt5rv623">';
            $output .= '<div class="wkit-scrolltotop-main '.$select_f8h0cz23.' side-'.$select_j6s46n23.' pos-'.$select_qf9zw924.'">
    <button class="wkit-scrolltotop type-'.$select_llua2q23.'" data-desk="'.$number_pv2byx23.'" data-tab="'.$number_7bs6qp23.'" data-mob="'.$number_ao6cgb23.'" data-applyto="'.$select_7r268k24.'" data-cid="'.$text_9yzuwi24.'">
        '.$iconscontrol_4w93sa23.'
        <img class="tp-title-icon" src="'.$media_7uav9v23.'">
        <span class="scrolltotop-text" data-text="'.$text_84wm4g23.'">'.$text_84wm4g23.'</span>
    </button>
</div> ';
        $output .= '</div>';
        
        echo $output;
    }
}