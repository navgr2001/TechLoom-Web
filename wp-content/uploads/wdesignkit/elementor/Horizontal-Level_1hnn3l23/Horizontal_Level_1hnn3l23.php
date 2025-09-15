<?php
/*
 * Widget Name: Horizontal Level
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
 * Class Wdkit_Horizontal_Level_1hnn3l23
 */
class Wdkit_Horizontal_Level_1hnn3l23 extends Widget_Base {

    /**
     * Get Widget Name.
     *
     * @since 2.0.3
     */
    public function get_name() {
        return 'wb-1hnn3l23';
    }

    /**
     * Get Widget Title.
     *
     * @since 2.0.3
     */
    public function get_title() {
        return esc_html__('Horizontal Level', 'wdesignkit');
    }

    
    /**
     * Get Widget Icon.
     *
     * @since 2.0.3
     */
    public function get_icon() {
        return 'eicon-navigation-horizontal';
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
        return array('Procedural Information','Step by Step Guide','Visual Communication','User Guidance','Website Processes','Clarity in Presentation','Process steps');
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
        

        wp_enqueue_script( 'wkit_child_script_jibdbw25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Horizontal-Level_1hnn3l23/Horizontal_Level_1hnn3l23.js', array(), '2.0.3.919885', true );

        return [ 'wkit_child_script_jibdbw25' ];
    }

    /**
    * Get Widget Styles
    *
    * @since 2.0.3
    */
    public function get_style_depends() {
        
        /**External Css enqueue*/
        wp_enqueue_style( 'wd_css_ex_1_xc55ok25', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', false, '2.0.3.999279', 'all' );
wp_enqueue_style( 'wd_css_ex_1_uho9ux25', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', false, '2.0.3.803853', 'all' );


        wp_enqueue_style( 'wkit_css_1_liosct25', wp_upload_dir()['baseurl'].'/wdesignkit/elementor/Horizontal-Level_1hnn3l23/Horizontal_Level_1hnn3l23.css', false, '2.0.3.404318', 'all' );

        return [ 'wkit_css_1_liosct25' ];
    }

    

    /**
     * Register controls.
     *
     * @since 2.0.3
     */
    protected function register_controls() {

            $this->start_controls_section('Layout_tab_content',
            [
                'label' => esc_html__( 'Layout', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_abg0cy23',
                array(
            
            'label' => esc_html__( 'Style', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'style-1',
            
            'options' => array( 'style-1'  => esc_html__( 'Dot', 'wdesignkit' ),'style-2'  => esc_html__( 'Number', 'wdesignkit' ),'style-3'  => esc_html__( 'Check Mark', 'wdesignkit' ), ),
        )
            );
$this->add_control('rawhtml_dbux6n25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: You must enable the ACTIVE field from Repeater when choosing Check Mark to show an active icon.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section('Content_tab_content',
            [
                'label' => esc_html__( 'Content', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$repeater_970so425 = new \Elementor\Repeater();

                $repeater_970so425->add_control('select_fstai223',
                array(
            
            'label' => esc_html__( 'Style', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'text',
            
            'options' => array( 'text'  => esc_html__( 'Text', 'wdesignkit' ),'icon'  => esc_html__( 'Icon', 'wdesignkit' ),'image'  => esc_html__( 'Image', 'wdesignkit' ), ),
        )
            );
$repeater_970so425->add_control('text_83fo9323',
                array(
            
            'label' => esc_html__( 'Title', 'wdesignkit' ),
            'type' => Controls_Manager::TEXT,
            'ai'   => [ 'active' => false ],
            'default' => esc_html__( 'Acquire', 'wdesignkit' ),
            
            
            
            
            'input_type' => 'text', 
            
            
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'text'),
],
                ),
        )
            );
$repeater_970so425->add_control('iconscontrol_391bl823',
                array(
            
            'label' => esc_html__( 'Select Icon', 'wdesignkit' ),
            'type' => Controls_Manager::ICONS,
            'fa4compatibility' => 'icon',
            
            
            'label_block' => true,
            'skin' => 'media',
            'exclude_inline_options' => array('none'),
            
            
            'default' => array(
                'value' => 'fas fa-home',
                'library' => 'fa-solid',
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
        )
            );
$repeater_970so425->add_control('media_7czjjy23',
                array(
            
            'label' => esc_html__( 'Select Image', 'wdesignkit' ),
            'type' => Controls_Manager::MEDIA,
            'ai'   => [ 'active' => false ],
            
            'default' => array(
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ),
            
            'label_block' => true,
            
            'media_types' => array("image","svg"),
           
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'image'),
],
                ),
        )
            );
$repeater_970so425->add_control('wysiwyg_y0zki523',
                array(
                
                'label' => esc_html__( 'Description', 'wdesignkit' ),
				'type' => Controls_Manager::WYSIWYG,
                'ai'   => [ 'active' => false ],
                'default' => esc_html__( 'Discover all available features in WDesignKit.', 'wdesignkit' ),
                
                
                
                'label_block' => true,
                
                
                
                
        )
            );
$repeater_970so425->add_control('switcher_vdtbtv23',
                array(
            
            'label' => esc_html__( 'Active', 'wdesignkit' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'wdesignkit' ),
            'label_off' => esc_html__( 'No', 'wdesignkit' ),
            
            'return_value' => 'yes',
            'default' => '',
            
            'label_block' => false,
            
            
            
        )
            );
$repeater_970so425->add_control('heading_ih8txk23',
                array(
            
            'label' => esc_html__( 'Normal', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$repeater_970so425->add_control('color_3gtq5223',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-step-title' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_kvwfob23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-progress-icon' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_oxn6er24',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-progress-icon .tp-title-icon svg' => 'fill: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_cpt8q623',
                array(
            
            'label' => esc_html__( 'Description Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-step-desc' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('heading_zp6dmt23',
                array(
            
            'label' => esc_html__( 'Hover', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$repeater_970so425->add_control('color_fdwdr923',
                array(
            
            'label' => esc_html__( 'Title Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'text'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-step-title:hover' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_id73mt23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-progress-icon:hover' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_acym8d24',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-progress-icon:hover .tp-title-icon svg' => 'fill: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_czo5ce23',
                array(
            
            'label' => esc_html__( 'Description Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}} .wkit-hz-step-desc:hover' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_5iswbp23',
                array(
            
            'label' => esc_html__( 'Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            'separator' => 'before',
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_vdtbtv23', 'operator' => '!=', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}} .wkit-hz-pix-levels-dot' => 'background-color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_xazzfl23',
                array(
            
            'label' => esc_html__( 'Active Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            'separator' => 'before',
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_vdtbtv23', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}}.wkit-hz-active-yes .wkit-hz-pix-levels-dot' => 'background-color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_rpbmum23',
                array(
            
            'label' => esc_html__( 'Inner Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_vdtbtv23', 'operator' => '!=', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}} .wkit-hz-pix-levels-dot-inner' => 'background-color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('heading_8pssg925',
                array(
            
            'label' => esc_html__( 'Active', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            
        )
            );
$repeater_970so425->add_control('color_t0vonb25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}}.wkit-hz-active-yes .wkit-hz-progress-icon' => 'color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_1pp1zd25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_fstai223', 'operator' => '==', 'value' => 'icon'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper {{CURRENT_ITEM}}.wkit-hz-active-yes .wkit-hz-progress-icon .tp-title-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_ybqtct23',
                array(
            
            'label' => esc_html__( 'Active Inner Dot Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_vdtbtv23', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}}.wkit-hz-active-yes .wkit-hz-pix-levels-dot-inner' => 'background-color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_73oeht23',
                array(
            
            'label' => esc_html__( 'Progress Bar Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_vdtbtv23', 'operator' => '!=', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}} .wkit-bg-gray-2,{{CURRENT_ITEM}} .wkit-hz-bg-gradient-primary' => 'background-color: {{VALUE}}',),
        )
            );
$repeater_970so425->add_control('color_2gfe2b23',
                array(
            
            'label' => esc_html__( 'Active Progress Bar Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'switcher_vdtbtv23', 'operator' => '==', 'value' => 'yes'),
],
                ),
            'selectors' => array('{{WRAPPER}} {{CURRENT_ITEM}}.wkit-hz-active-yes .wkit-bg-gray-2,{{CURRENT_ITEM}}.wkit-hz-active-yes .wkit-hz-bg-gradient-primary' => 'background-color: {{VALUE}}',),
        )
            );

                
                $this->add_control('repeater_9qo8go23',
                    array(
                
				'type' => Controls_Manager::REPEATER,
				'label' => esc_html__( 'Levels', 'wdesignkit' ),
                
                
                
                
                
				'fields' => $repeater_970so425->get_controls(),
                'default' => array(array('_id'=>uniqid('Wkit-15bsrf25'),
'select_fstai223' => 'text',
'text_83fo9323' => esc_html__('Acquire', 'wdesignkit'), 
'iconscontrol_391bl823' => 'fas fa-home', 
'media_7czjjy23' => '', 
'wysiwyg_y0zki523' => 'Discover all available features in WDesignKit.', 
'switcher_vdtbtv23' => false,
'heading_ih8txk23' => esc_html__('', 'wdesignkit'), 
'color_3gtq5223' => '', 
'color_kvwfob23' => '', 
'color_oxn6er24' => '', 
'color_cpt8q623' => '', 
'heading_zp6dmt23' => esc_html__('', 'wdesignkit'), 
'color_fdwdr923' => '', 
'color_id73mt23' => '', 
'color_acym8d24' => '', 
'color_czo5ce23' => '', 
'color_5iswbp23' => '', 
'color_xazzfl23' => '', 
'color_rpbmum23' => '', 
'heading_8pssg925' => esc_html__('', 'wdesignkit'), 
'color_t0vonb25' => '', 
'color_1pp1zd25' => '', 
'color_ybqtct23' => '', 
'color_73oeht23' => '', 
'color_2gfe2b23' => '', 
),
),
                
                     
                
        )
                );
$this->end_controls_section();$this->start_controls_section('Extra Options_tab_content',
            [
                'label' => esc_html__( 'Extra Options', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('select_9cj4zf23',
                array(
            
            'label' => esc_html__( 'Desktop', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'dcl-4',
            
            'options' => array( 'dcl-1'  => esc_html__( '1', 'wdesignkit' ),'dcl-2'  => esc_html__( '2', 'wdesignkit' ),'dcl-3'  => esc_html__( '3', 'wdesignkit' ),'dcl-4'  => esc_html__( '4', 'wdesignkit' ),'dcl-5'  => esc_html__( '5', 'wdesignkit' ),'dcl-6'  => esc_html__( '6', 'wdesignkit' ),'dcl-7'  => esc_html__( '7', 'wdesignkit' ),'dcl-8'  => esc_html__( '8', 'wdesignkit' ), ),
        )
            );
$this->add_control('select_595scc23',
                array(
            
            'label' => esc_html__( 'Tablet', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'tcl-3',
            
            'options' => array( 'tcl-1'  => esc_html__( '1', 'wdesignkit' ),'tcl-2'  => esc_html__( '2', 'wdesignkit' ),'tcl-3'  => esc_html__( '3', 'wdesignkit' ),'tcl-4'  => esc_html__( '4', 'wdesignkit' ),'tcl-5'  => esc_html__( '5', 'wdesignkit' ),'tcl-6'  => esc_html__( '6', 'wdesignkit' ), ),
        )
            );
$this->add_control('select_rnc7lt23',
                array(
            
            'label' => esc_html__( 'Mobile', 'wdesignkit' ),
            'type' => Controls_Manager::SELECT,
            
            
            
            
            
            'default' => 'mcl-2',
            
            'options' => array( 'mcl-1'  => esc_html__( '1', 'wdesignkit' ),'mcl-2'  => esc_html__( '2', 'wdesignkit' ),'mcl-3'  => esc_html__( '3', 'wdesignkit' ),'mcl-4'  => esc_html__( '4', 'wdesignkit' ), ),
        )
            );
$this->end_controls_section();$this->start_controls_section('Need Help ?_tab_content',
            [
                'label' => esc_html__( 'Need Help ?', 'wdesignkit' ),
                'tab' => Controls_Manager::TAB_CONTENT,
                
            ]
        );
$this->add_control('rawhtml_x44ogs25',
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
      href="https://learn.wdesignkit.com/docs/horizontal-level/"
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
            'Content_style_secdddtion',
            [
                'label' => esc_html__( 'Content', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->start_controls_tabs('normalhover_za08o723',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_za08o723_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_responsive_control('slider_5j0oe423',
                array(
            
            'label' => esc_html__( 'Opacity (%)', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "%", ),
            
            
            'range' => array('%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 10,
					),),
            'default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-hz-step-content.wkit-hz-pix-levels-step' => 'opacity: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_za08o723_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_responsive_control('slider_bea08323',
                array(
            
            'label' => esc_html__( 'Opacity (%)', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "%", ),
            
            
            'range' => array('%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 10,
					),),
            'default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
            'tablet_default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
                'mobile_default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
                'widescreen_default' => array(
                                    'unit' => '%',
                                    'size' => '',
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-hz-step-content.wkit-hz-pix-levels-step.wkit-hz-active-yes' => 'opacity: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_control('rawhtml_a54xj025',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: You can apply here different opacity for Normal level & Active level.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Title_style_secdddtion',
            [
                'label' => esc_html__( 'Title', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_ppyvov23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_responsive_control('dimension_yiohpe23',
                array(
            
            'label' => esc_html__( 'Margin', 'wdesignkit' ),
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_j2tc9o23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-title',
			)
            );
$this->start_controls_tabs('normalhover_wpf6f923',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_wpf6f923_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_csrfiz23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-title' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_wpf6f923_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_sjl3vk23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-title:hover' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_wpf6f923_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_0ifsza23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-active-yes .wkit-hz-step-title' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_control('rawhtml_erws0n25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: Note: If a property is already applied to the main card, then the property applied here will not take effect.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Description_style_secdddtion',
            [
                'label' => esc_html__( 'Description', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_f3d64j23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-desc' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_responsive_control('dimension_hw0owm23',
                array(
            
            'label' => esc_html__( 'Margin', 'wdesignkit' ),
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-desc' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
            Group_Control_Typography::get_type(),
			array(
				'name' => 'typography_colu3g23',
                
                
                
                'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-desc',
			)
            );
$this->start_controls_tabs('normalhover_w8njhx23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_w8njhx23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_07s30123',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-desc' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_w8njhx23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_4wstaj23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-desc:hover' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_w8njhx23_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_pjmfoh23',
                array(
            
            'label' => esc_html__( 'Text Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-active-yes .wkit-hz-step-desc' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_control('rawhtml_qe77p625',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: Note: If a property is already applied to the main card, then the property applied here will not take effect.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Icon_style_secdddtion',
            [
                'label' => esc_html__( 'Icon', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_ijas5623',
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content .wkit-hz-progress-icon' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_qytr9023',
                array(
            
            'label' => esc_html__( 'SVG Width', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content .wkit-hz-progress-icon svg' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_f8zz1c23',
                array(
            
            'label' => esc_html__( 'SVG Height', 'wdesignkit' ),
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content .wkit-hz-progress-icon svg' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_i3sd5u23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_i3sd5u23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_1y7tk223',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content .wkit-hz-progress-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_dsw6t523',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content .wkit-hz-progress-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_i3sd5u23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_cgtr8b23',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content:hover .wkit-hz-progress-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_v5hcoc23',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content:hover .wkit-hz-progress-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_i3sd5u23_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_el57uz25',
                array(
            
            'label' => esc_html__( 'Icon Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-hz-content-bg .wkit-hz-active-yes .wkit-hz-progress-icon' => 'color: {{VALUE}}',),
        )
            );
$this->add_control('color_8l4epb25',
                array(
            
            'label' => esc_html__( 'SVG Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-hz-content-bg .wkit-hz-active-yes .wkit-hz-progress-icon svg path' => 'fill: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_control('rawhtml_ut3itm25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: Note: If a property is already applied to the main card, then the property applied here will not take effect.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Image_style_secdddtion',
            [
                'label' => esc_html__( 'Image', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_12dfcq23',
                array(
            
            'label' => esc_html__( 'Left Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content .wkit-hz-progress-img' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_qmpnwd23',
                array(
            
            'label' => esc_html__( 'Image Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 500,
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
           
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content.wkit-hz-image .wkit-hz-progress-img .tp-hz-title-image' => 'width: {{SIZE}}{{UNIT}};',)
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Dots_style_secdddtion',
            [
                'label' => esc_html__( 'Dots', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('slider_xz0rw923',
                array(
            
            'label' => esc_html__( 'Progress Bar Height', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 20,
						'step' => 1,
					),'%' => array(
						'min' => 0,
						'max' => 100,
						'step' => 1,
					),),
            'default' => array(
                                    'unit' => 'px',
                                    'size' => 8,
                                ),
            'tablet_default' => array(
                                    'unit' => 'px',
                                    'size' => 8,
                                ),
                'mobile_default' => array(
                                    'unit' => 'px',
                                    'size' => 8,
                                ),
                'widescreen_default' => array(
                                    'unit' => 'px',
                                    'size' => 8,
                                ),
            
            
            'render_type' => 'ui',
           
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-pix-levels-step .progress' => 'height: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_5051p023',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_5051p023_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('heading_l6skcp23',
                array(
            
            'label' => esc_html__( 'Dots', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_control('color_jc49v725',
                array(
            
            'label' => esc_html__( 'Overlay Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .levels-dot-overlay' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_control('color_phbrh123',
                array(
            
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-pix-levels-dot' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_control('heading_coxi2v23',
                array(
            
            'label' => esc_html__( 'Inner Dots', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-1'),
],
                ),
        )
            );
$this->add_control('color_cb9phj23',
                array(
            
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-1'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-pix-levels-dot-inner' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_control('heading_9s7ry923',
                array(
            
            'label' => esc_html__( 'Progress Bar', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_control('color_8sg7hj23',
                array(
            
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-bg-gray-2,.wkit-multi-step-hz-wrapper .wkit-hz-bg-gradient-primary' => 'background-color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_5051p023_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('heading_8t3wco23',
                array(
            
            'label' => esc_html__( 'Dots', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_control('color_iio2wp25',
                array(
            
            'label' => esc_html__( 'Overlay Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-hz-active-yes .levels-dot-overlay' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_control('color_dgdb5r23',
                array(
            
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-active-yes .wkit-hz-pix-levels-dot' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_control('heading_u4z29t23',
                array(
            
            'label' => esc_html__( 'Inner Dots', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            'separator' => 'before',
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-1'),
],
                ),
        )
            );
$this->add_control('color_u6uwgr23',
                array(
            
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-1'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-active-yes .wkit-hz-pix-levels-dot-inner' => 'background-color: {{VALUE}}',),
        )
            );
$this->add_control('heading_74f2l223',
                array(
            
            'label' => esc_html__( 'Progress Bar', 'wdesignkit' ),
            'type' => Controls_Manager::HEADING,
            
            
            
        )
            );
$this->add_control('color_o8klr423',
                array(
            
            'label' => esc_html__( 'Background Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}}     .wkit-multi-step-hz-wrapper .wkit-hz-active-yes .wkit-bg-gray-2,{{WRAPPER}} .wkit-hz-active-yes .wkit-hz-bg-gradient-primary' => 'background-color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->add_control('rawhtml_drsv0e25',
                array(
            
            
            'type' => Controls_Manager::RAW_HTML,
            
            'raw' => wp_kses_post( '<div class="wdk-note" style="color: var(--e-a-color-txt-accent);
    background: #8072fc3b;
    padding: 10px;
    font-weight: 400;
    border-left: 3px solid #8072FC;
    font-size: 12px;
    line-height: 15px;">
Note: Note: If a property is already applied to the main card, then the property applied here will not take effect.
</div>', 'wdesignkit' ),
            
            
            
            
            
        )
            );
$this->end_controls_section();$this->start_controls_section(
            'Checked Icon_style_secdddtion',
            [
                'label' => esc_html__( 'Checked Icon', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-3'],
],
                ),
            ]
        );
$this->add_responsive_control('slider_n1w3iv23',
                array(
            
            'label' => esc_html__( 'Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 40,
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
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-3'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-3 .wkit-hz-pix-levels-dot-inner.wkit-hz-check-mark:before' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_95rzzy24',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-3'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_95rzzy24_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_008bim24',
                array(
            
            'label' => esc_html__( 'Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-3 .wkit-hz-pix-levels-dot-inner.wkit-hz-check-mark:hover:before' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_95rzzy24_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_fhjwip24',
                array(
            
            'label' => esc_html__( 'Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}}  .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-3 .wkit-hz-pix-levels-dot-inner.wkit-hz-check-mark:before' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Number_style_secdddtion',
            [
                'label' => esc_html__( 'Number', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'conditions' => array(
                    'relation' => 'or',
                    'terms' => [['name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-2'],
],
                ),
            ]
        );
$this->add_responsive_control('slider_y7vfau23',
                array(
            
            'label' => esc_html__( 'Size', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 20,
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
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-2'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-2 .wkit-prg-two:before' => 'font-size: {{SIZE}}{{UNIT}};',)
        )
            );
$this->add_responsive_control('slider_27zstx24',
                array(
            
            'label' => esc_html__( 'Top Offset', 'wdesignkit' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => array( "px","%", ),
            
            
            'range' => array('px' => array(
						'min' => 0,
						'max' => 20,
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
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-2'),
],
                ),
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-2 .wkit-prg-two:before' => 'top: {{SIZE}}{{UNIT}};',)
        )
            );
$this->start_controls_tabs('normalhover_ap8zux23',
                array(
            
            'conditions' => array(
                    'relation' => 'or',
                    'terms' => [array('name' => 'select_abg0cy23', 'operator' => '==', 'value' => 'style-2'),
],
                ),
        )
            );
            $this->start_controls_tab(

                        'normalhover_ap8zux23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_e953u023',
                array(
            
            'label' => esc_html__( 'Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-2 .wkit-prg-two:before' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_ap8zux23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_frajh523',
                array(
            
            'label' => esc_html__( 'Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-2 .wkit-prg-two:hover:before, .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-2 .wkit-hz-active-yes .wkit-prg-two:hover:before' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_ap8zux23_active_tab',
                            array(
                                'label' => esc_html__( 'Active', 'wdesignkit' ),
                            )
                        );
$this->add_control('color_7yc8dx23',
                array(
            
            'label' => esc_html__( 'Color', 'wdesignkit' ),
            'type' =>  Controls_Manager::COLOR,
            
                            
            
            
            
            
            'alpha' => true,
            'global' => array(
                'active' => true,
            ),
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-inner-style-2 .wkit-hz-active-yes .wkit-prg-two:before' => 'color: {{VALUE}}',),
        )
            );
$this->end_controls_tab();


            $this->end_controls_tabs();$this->end_controls_section();$this->start_controls_section(
            'Box Background_style_secdddtion',
            [
                'label' => esc_html__( 'Box Background', 'wdesignkit' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                
            ]
        );
$this->add_responsive_control('dimension_y4lx1023',
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
            'separator' => 'before',
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-content-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_responsive_control('dimension_oyasnz23',
                array(
            
            'label' => esc_html__( 'Margin', 'wdesignkit' ),
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-content-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->start_controls_tabs('normalhover_b19a0b23',
                array(
            
            
        )
            );
            $this->start_controls_tab(

                        'normalhover_b19a0b23_normal_tab',
                            array(
                                'label' => esc_html__( 'Normal', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_27rlp723',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-step-content',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_yp8c5723',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-content-bg',
        )
            );
$this->add_responsive_control('dimension_4cxerm23',
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
            
            
            
            'selectors' => array('{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-content-bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',),
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_4z5n1c23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper .wkit-hz-content-bg', 
        )
            );
$this->end_controls_tab();
$this->start_controls_tab(

                        'normalhover_b19a0b23_hover_tab',
                            array(
                                'label' => esc_html__( 'Hover', 'wdesignkit' ),
                            )
                        );
$this->add_group_control(
                
        Group_Control_Background::get_type(),
        array(
            'name' => 'background_n6jf3h23',
            'label' => esc_html__( 'Background', 'wdesignkit' ),
            'types' => ["classic","gradient"],
            
            
            
            'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper:hover .wkit-hz-step-content',
        )
            );
$this->add_group_control(
                
        Group_Control_Border::get_type(),
        array(
            'name' => 'border_e5gwsa23',
            'label' => esc_html__( 'Border', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper:hover .wkit-hz-content-bg',
        )
            );
$this->add_group_control(
                
        Group_Control_Box_Shadow::get_type(),
        array(
            'name' => 'boxshadow_9wzyqt23',
            'label' => esc_html__( 'Box Shadow', 'wdesignkit' ),
            
            
            
            'selector' => '{{WRAPPER}} .wkit-multi-step-hz-wrapper:hover .wkit-hz-content-bg', 
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
        $select_abg0cy23 = !empty($settings['select_abg0cy23']) ? $this->wdk_senitize_js($settings['select_abg0cy23']) : '';
$rawhtml_dbux6n25 = !empty($settings['rawhtml_dbux6n25']) ? $this->wdk_senitize_js($settings['rawhtml_dbux6n25']) : '';
$select_9cj4zf23 = !empty($settings['select_9cj4zf23']) ? $this->wdk_senitize_js($settings['select_9cj4zf23']) : '';
$select_595scc23 = !empty($settings['select_595scc23']) ? $this->wdk_senitize_js($settings['select_595scc23']) : '';
$select_rnc7lt23 = !empty($settings['select_rnc7lt23']) ? $this->wdk_senitize_js($settings['select_rnc7lt23']) : '';
$rawhtml_x44ogs25 = !empty($settings['rawhtml_x44ogs25']) ? $this->wdk_senitize_js($settings['rawhtml_x44ogs25']) : '';

        $repeater_9qo8go23_jl25 = '';
                            if ( $settings['repeater_9qo8go23'] ) {
                                foreach ( $settings['repeater_9qo8go23'] as $key => $r_item ) {
                                    $iconscontrol_391bl823 = "";
                        if(!empty($r_item['iconscontrol_391bl823']) && !empty($r_item['iconscontrol_391bl823']['value'])){
                            ob_start();
                                \Elementor\Icons_Manager::render_icon($r_item['iconscontrol_391bl823'],['aria-hidden'=>'true']);
                                $Icon = ob_get_contents();
                            ob_end_clean();
                            $iconscontrol_391bl823 .= '<span class="tp-title-icon">'.$Icon.'</span>';
                        };
$media_7czjjy23 = !empty($r_item['media_7czjjy23']['url']) ? $this->wdk_senitize_js($r_item['media_7czjjy23']['url']) : '';

                                    $repeater_9qo8go23_jl25 .= '<div id="" class="elementor-repeater-item-' .esc_attr($r_item['_id']) . ' wkit-hz-step-content wkit-hz-' . $this->wdk_senitize_js($r_item['select_fstai223']) . ' wkit-hz-pix-levels-step wkit-hz-active-' . $r_item['switcher_vdtbtv23'] . ' col-xs-12 hz-'.$select_9cj4zf23.' hz-'.$select_595scc23.' hz-'.$select_rnc7lt23.'" data-repeater_9qo8go23="{repeater_9qo8go23}">
                <h6 class="wkit-hz-step-title text-center" data-ttl="' . $this->wdk_senitize_js($r_item['text_83fo9323']) . '">' . $this->wdk_senitize_js($r_item['text_83fo9323']) . '</h6>
                <span class="wkit-hz-progress-icon">'.$iconscontrol_391bl823.'</span>
                <div class="wkit-hz-progress-img">
                    <img src="'.$media_7czjjy23.'" class="tp-hz-title-image">
                </div>
                <div class="wkit-progress-area text-center">
                    <div class="progress wkit-bg-gray-2">
                        <div class="wkit-prg-one progress-bar wkit-hz-bg-gradient-primary">
                        </div>
                    </div>
                    <div class="wkit-pix-leveles-dot-div">
                        <div class="levels-dot-overlay">
                        <span class="wkit-prg-two wkit-hz-pix-levels-dot wkit-hz-bg-gradient-primary" data-index="'.$key.'">
                            <span class="wkit-hz-pix-levels-dot-inner wkit-hz-bg-dark-opacity-3"></span>
                        </span>
                        </div>
                    </div>
                </div>
                <span class="wkit-hz-step-desc text-center" data-desc="' . $this->wdk_senitize_js($r_item['wysiwyg_y0zki523']) . '">' . $this->wdk_senitize_js($r_item['wysiwyg_y0zki523']) . '</span>
            </div>';
                                }
                            }

        $output = '';
        $output .= '<div class="wkit-wb-Widget_1hnn3l23" data-wdkitunique="1hnn3l23">';
            $output .= '<div class="wkit-multi-step-hz-wrapper text-center">
    <div class="wkit-hz-card wkit-hz-inner-'.$select_abg0cy23.'">
        <div class="wkit-hz-content-bg row">
            '.$repeater_9qo8go23_jl25.'
        </div>
    </div>
</div>';
        $output .= '</div>';
        
        echo $output;
    }
}