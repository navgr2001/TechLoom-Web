<?php
/**
 * The file that defines the core plugin class
 *
 * @link       https://posimyth.com/
 * @since      2.0.0
 *
 * @package    Wdesignkit
 * @subpackage Wdesignkit/includes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Wdkit_Code_Snippet class
 *
 * @since 2.0.0
 */
if ( ! class_exists( 'Wdkit_Code_Snippet' ) ) {
    
    /**
     * Wdkit_Code_Snippet class
     *
     * @since 2.0.0
     */
    class Wdkit_Code_Snippet {

        /**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;

        /**
		 * Member Variable
		 *
		 * @var staring $wdkit_api
		 */
		public $wdkit_api = WDKIT_SERVER_SITE_URL . 'api/wp/';

        /**
         * Get instance
         *
         * @return object
         */
        public static function get_instance() {
            if ( self::$instance === null ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Constructor
         */
        public function __construct() {
            add_action( 'wp_ajax_wdkit_code_snippet', array($this, 'wdkit_code_snippet'));
        }

        /**
         * Main API Call for Code Snippet
         */
        public function wdkit_code_snippet() {
            check_ajax_referer( 'wdkit_nonce', 'kit_nonce' );

            if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'content' => __( 'Insufficient permissions.', 'wdesignkit' ) ) );
            }
            $type = isset( $_POST['type'] ) ? strtolower( sanitize_text_field( wp_unslash( $_POST['type'] ) ) ) : false;

            if ( ! $type ) {
                $data = array(
                    'success' => false,
                    'message' => __( 'Something went wrong.', 'wdesignkit' )
                );
			}

            switch ( $type ) {
                case 'code_snippet_filter':
                    $data = $this->wdkit_code_snippet_filter();
                break;

                case 'filter_opt':
                    $data = $this->wdkit_code_snippet_filter_opt();
                break;

                case 'existing_snippet':
                    $data = $this->wdkit_code_snippet_existing_snippet();
                break;

                case 'favorite_unfavorite':
                    $data = $this->wdkit_snippet_favorite_unfavorite();
                break;
                
                case 'delete_code_snippet':
                    $data = $this->wdkit_delete_code_snippet();
                break;

                case 'save_code_snippet':
                    $data = $this->wkit_save_code_snippet();
                break;

                case 'get_user_snippets':
                    $data = $this->wkit_get_user_snippets();
                break;

                case 'download_code_snippet':
                    $data = $this->wkit_download_code_snippet();
                break;

                case 'get_snippet_info':
                    $data = $this->wdkit_get_snippet_info();
                break;

                case 'get_snippet_kit':
                    $data = $this->wdkit_get_snippet_kit();
                break;

                case 'get_user_roles':
                    $data = $this->wdkit_get_user_roles();
                break;

                default:

                break;
            }

            wp_send_json( $data );
            wp_die();
        }

        /**
         * Code snippet filter
         *
         * @return array
         */
        public function wdkit_code_snippet_filter() {

			$CurrentPage = isset( $_POST['CurrentPage'] ) ? sanitize_text_field( wp_unslash( $_POST['CurrentPage'] ) ) : 1;
            $ParPage     = isset( $_POST['ParPage'] ) ? sanitize_text_field( wp_unslash( $_POST['ParPage'] ) ) : 1;
            $search = isset( $_POST['search'] ) ? sanitize_text_field( wp_unslash( $_POST['search'] ) ) : '';
            $free_pro = isset( $_POST['free_pro'] ) ? sanitize_text_field( wp_unslash( $_POST['free_pro'] ) ) : '';
            $category = isset( $_POST['category'] ) ? sanitize_text_field( wp_unslash( $_POST['category'] ) ) : '';
            $status = isset( $_POST['status'] ) ? sanitize_text_field( wp_unslash( $_POST['status'] ) ) : '';
            $plugins = isset( $_POST['plugins'] ) ? sanitize_text_field( wp_unslash( $_POST['plugins'] ) ) : '';
            $plugin_id_exclude = isset( $_POST['plugin_id_exclude'] ) ? sanitize_text_field( wp_unslash( $_POST['plugin_id_exclude'] ) ) : '';
            $tags = isset( $_POST['tags'] ) ? sanitize_text_field( wp_unslash( $_POST['tags'] ) ) : '';
            $snippet_type = isset( $_POST['snippet_type'] ) ? sanitize_text_field( wp_unslash( $_POST['snippet_type'] ) ) : '';

            $data = array(
                'CurrentPage' => $CurrentPage,
                'ParPage' => $ParPage,
            );

            if ( ! empty( $search ) ) {
                $data['search'] = $search;
            }

            if ( ! empty( $category ) ) {
                $data['terms_id'] = $category;
            }

            if ( ! empty( $free_pro ) ) {
                $data['free_pro'] = $free_pro;
            }

            if ( ! empty( $status ) ) {
                $data['status'] = $status;
            }

            if ( ! empty( $plugins ) ) {
                $data['plugin_id'] = $plugins;
            }

            if ( ! empty( $plugin_id_exclude ) ) {
                $data['plugin_id_exclude'] = $plugin_id_exclude;
            }

            if ( ! empty( $tags ) ) {
                $data['tags'] = $tags;
            }

            if ( ! empty( $snippet_type ) && $snippet_type != 'all' ) {
                $data['type'] = $snippet_type;
            }

            // snippet/browse/list
			$response = $this->wkit_api_call( $data, 'snippet/browse/list' );

            if ( $response['success'] ) {
                $data = array(
                    'success' => true,
                    'data' => $response
                );
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Failed to fetch snippet.', 'wdesignkit' )
                );
            }

            return $data;
        }

        /**
         * Snippet Dynamic Options
         */
        public function wdkit_code_snippet_filter_opt() {
            
            $data = array(
                'type' => isset( $_POST['opt_type'] ) ? sanitize_text_field( wp_unslash( $_POST['opt_type'] ) ) : 'terms,plugin,tag',
                'search_tag' => isset( $_POST['search_tag'] ) ? sanitize_text_field( wp_unslash( $_POST['search_tag'] ) ) : '',
                'url_tag_id' => isset( $_POST['tags'] ) ? sanitize_text_field( wp_unslash( $_POST['tags'] ) ) : '',
            );

            // snippet/browse/filter
            $response = $this->wkit_api_call( $data, 'snippet/browse/filter' );

            if ( $response['success'] ) {
                $data = array(
                    'success' => true,
                    'data' => $response
                );
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Failed to fetch filter options.', 'wdesignkit' )
                );
            }

            return $data;
        }

        /**
         * Code snippet existing snippet
         *
         * @return array
         */
        public function wdkit_code_snippet_existing_snippet() {
            $data = array(
                'token' => isset( $_POST['token'] ) ? sanitize_text_field( wp_unslash( $_POST['token'] ) ) : '',
                'search' => isset( $_POST['search'] ) ? sanitize_text_field( wp_unslash( $_POST['search'] ) ) : '',
                'CurrentPage' => isset( $_POST['CurrentPage'] ) ? sanitize_text_field( wp_unslash( $_POST['CurrentPage'] ) ) : 1,
                'ParPage' => isset( $_POST['ParPage'] ) ? sanitize_text_field( wp_unslash( $_POST['ParPage'] ) ) : 1,
            );
            $response = $this->wkit_api_call( $data, 'snippet/save/get_exist' );

            if ( $response['success'] ) {
                $data = array(
                    'success' => true,
                    'data' => $response
                );
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Failed to fetch existing snippet.', 'wdesignkit' )
                );
            }

            return $data;
        }

        /**
         * Get post title by ID
         *
         * @return array
         */
        public function wdkit_get_snippet_info() {
            $post_id = isset( $_POST['post_id'] ) ? intval( sanitize_text_field( wp_unslash( $_POST['post_id'] ) ) ) : 0;
            
            if ( $post_id ) {
                $post = get_post( $post_id );
                
                if ( $post ) {
                    $data = array(
                        'success' => true,
                        'data' => array(
                            'title' => $post->post_title,
                            'description' => get_post_meta( $post_id, 'nxt-code-note', true ),
                            'id' => $post->ID
                        )
                    );
                } else {
                    $data = array(
                        'success' => false,
                        'message' => __( 'Post not found.', 'wdesignkit' )
                    );
                }
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Invalid post ID.', 'wdesignkit' )
                );
            }

            return $data;
        }

        /**
         * Snippet Favorite/Unfavorite
         *
         * @return array
         */
        public function wdkit_snippet_favorite_unfavorite() {
            $data = array(
                'token' => isset( $_POST['token'] ) ? sanitize_text_field( wp_unslash( $_POST['token'] ) ) : '',
                'snippet_id' => isset( $_POST['snippet_id'] ) ? sanitize_text_field( wp_unslash( $_POST['snippet_id'] ) ) : '',
                'type' => isset( $_POST['favorite_type'] ) ? sanitize_text_field( wp_unslash( $_POST['favorite_type'] ) ) : '',
            );

            $response = $this->wkit_api_call( $data, 'snippet/favorite' );

            if ( $response['success'] ) {
                $data = $response;
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Failed to favorite/unfavorite snippet.', 'wdesignkit' )
                );
            }

            return $data;
        }

        /**
         * Snippet Delete
         */
        public function wdkit_delete_code_snippet() {
            $data = array(
                'token' => isset( $_POST['token'] ) ? sanitize_text_field( wp_unslash( $_POST['token'] ) ) : '',
                'id' => isset( $_POST['id'] ) ? sanitize_text_field( wp_unslash( $_POST['id'] ) ) : '',
            );
            $response = $this->wkit_api_call( $data, 'snippet/delete' );

            if ( $response['success'] ) {
                $data = $response;
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Failed to delete snippet.', 'wdesignkit' )
                );
            }

            return $data;
        }

        public function wkit_save_code_snippet (){
			$post_id = isset( $_POST['post_id'] ) ? intval( sanitize_text_field( wp_unslash( $_POST['post_id'] ) ) ) : 0;
            $description = isset( $_POST['description'] ) ? sanitize_text_field( wp_unslash( $_POST['description'] ) ) : '';
			
			if ( empty( $post_id ) ) {
				$response = array(
					'success'     => false,
					'message'     => esc_html__( 'Data Not Found', 'wdesignkit' ),
					'description' => esc_html__( 'Post ID Not Found', 'wdesignkit' ),
				);

				return $response;
			}

            $type = get_post_meta($post_id, 'nxt-code-type', true);
            $get_data = [
                'id' => $post_id,
                'name'        => get_the_title( $post_id ),
				'description'	=> get_post_meta($post_id, 'nxt-code-note', true),
				'type'	=> $type,
				'post_type'    => get_post_type( $post_id ),
				'tags'	=> get_post_meta($post_id, 'nxt-code-tags', true),
				'codeExecute'	=> get_post_meta($post_id, 'nxt-code-execute', true),
				'status'	=> get_post_meta($post_id, 'nxt-code-status', true),
				'langCode' => get_post_meta( $post_id, 'nxt-'.$type.'-code', true ),
				'htmlHooks' => get_post_meta( $post_id, 'nxt-code-html-hooks', true ),
				'hooksPriority' => get_post_meta( $post_id, 'nxt-code-hooks-priority', true ),
				'include_data' => get_post_meta( $post_id, 'nxt-add-display-rule', true ),
				'exclude_data' => get_post_meta( $post_id, 'nxt-exclude-display-rule', true ),
				'in_sub_data' => get_post_meta( $post_id, 'nxt-in-sub-rule', true ),
				'ex_sub_data' => get_post_meta( $post_id, 'nxt-ex-sub-rule', true ),
				// Word-based insertion settings
				'word_count' => get_post_meta( $post_id, 'nxt-insert-word-count', true ) ?: 100,
				'word_interval' => get_post_meta( $post_id, 'nxt-insert-word-interval', true ) ?: 200,
				'post_number' => get_post_meta( $post_id, 'nxt-post-number', true ) ?: 1,
				// CSS Selector settings
				'css_selector' => get_post_meta( $post_id, 'nxt-css-selector', true ),
				'element_index' => get_post_meta( $post_id, 'nxt-element-index', true ) ?: 0,
				// Missing fields that should be exported
				'insertion' => get_post_meta( $post_id, 'nxt-code-insertion', true ),
				'location' => get_post_meta( $post_id, 'nxt-code-location', true ),
				'customname' => get_post_meta( $post_id, 'nxt-code-customname', true ),
				'compresscode' => get_post_meta( $post_id, 'nxt-code-compresscode', true ),
				'startDate' => get_post_meta( $post_id, 'nxt-code-startdate', true ),
				'endDate' => get_post_meta( $post_id, 'nxt-code-enddate', true ),
				'shortcodeattr' => get_post_meta( $post_id, 'nxt-code-shortcodeattr', true ),
				'smart_conditional_logic' => get_post_meta( $post_id, 'nxt-smart-conditional-logic', true ),
				'php_hidden_execute' => get_post_meta( $post_id, 'nxt-code-php-hidden-execute', true ),
            ];
			$array_data = array(
				'token'     => isset( $_POST['token'] ) ? sanitize_text_field( $_POST['token'] ) : '',
				'type'      => isset( $_POST['stype'] ) ? sanitize_text_field( $_POST['stype'] ) : '',
				'title'     => isset( $_POST['title'] ) ? sanitize_text_field( $_POST['title'] ) : '',
				'plugin_id' => isset( $_POST['plugin'] ) ? sanitize_text_field( $_POST['plugin'] ) : '',
				'terms_id' => isset( $_POST['category'] ) ? sanitize_text_field( $_POST['category'] ) : '',
				'data'      => wp_json_encode([
					'generator'    => 'WDesignKit Export v'.WDKIT_VERSION,
					'date_created' => current_time( 'Y-m-d H:i' ),
					'snippets'     => [ $get_data ]
				]),
			);

            $stype = isset( $_POST['stype'] ) ? sanitize_text_field( wp_unslash( $_POST['stype'] ) ) : 'new';
			$saveType = (!empty( $stype ) && $stype == 'existing') ? 'exist' : 'new';
			if(isset($_POST['snippet_id']) && !empty($_POST['snippet_id']) && $saveType == 'exist'){
				$array_data['id'] = sanitize_text_field( wp_unslash( $_POST['snippet_id'] ) );
			}

			if($saveType == 'new'){
				$array_data['w_unique'] = isset( $_POST['w_unique'] ) ? sanitize_text_field( wp_unslash( $_POST['w_unique'] ) ) : '';
				$array_data['code_type'] = $type;
				$array_data['post_content'] = $description;
			}

			$response = $this->wkit_api_call( $array_data, 'snippet/save/'.$saveType );

			if ( $response['success'] ) {
				$data = array(
					'success' => true,
					'data' => $response
				);
			} else {
				$data = array(
					'success' => false,
					'message' => __( 'Failed to save snippet.', 'wdesignkit' )
				);
			}

			return $data;
		}

        public function wdkit_get_snippet_kit() {
            $data = array();

            $kit_id = isset( $_POST['kit_id'] ) ? sanitize_text_field( wp_unslash( $_POST['kit_id'] ) ) : '';
            if(empty($kit_id)){
                $data = array(
                    'success' => false,
                    'message' => __( 'Kit ID is required.', 'wdesignkit' )
                );
                return $data;
            }

            $response = $this->wkit_api_call( $data, 'snippet/kit/'.$kit_id );

            if ( $response['success'] ) {
                $data = array(
                    'success' => true,
                    'data' => $response
                );
            } else {
                $data = array(
                    'success' => false,
                    'message' => __( 'Failed to fetch snippet kit.', 'wdesignkit' )
                );
            }

            return $data;
        }

		public function wkit_get_user_snippets() {
			$array_data = array(
				'CurrentPage'		=> isset( $_POST['CurrentPage'] ) ? sanitize_text_field( wp_unslash( $_POST['CurrentPage'] ) ) : 1,
				'ParPage'			=> isset( $_POST['ParPage'] ) ? sanitize_text_field( wp_unslash( $_POST['ParPage'] ) ) : '',
				'search'			=> isset( $_POST['search'] ) ? sanitize_text_field( wp_unslash( $_POST['search'] ) ) : '',
				'token'				=> isset( $_POST['token'] ) ? sanitize_text_field( wp_unslash( $_POST['token'] ) ) : '',
			);

			$response = $this->wkit_api_call( $array_data, 'snippet/mysnippets' );

			if ( $response['success'] ) {
				$data = array(
					'success' => true,
					'data' => $response
				);
			} else {
				$data = array(
					'success' => false,
					'message' => __( 'Failed to fetch snippet.', 'wdesignkit' )
				);
			}

			return $data;
		}

		public function wkit_download_code_snippet () {
			$array_data = array(
				'id'			=> isset( $_POST['id'] ) ? sanitize_text_field( wp_unslash( $_POST['id'] ) ) : '',
			);

            $w_unique = isset( $_POST['w_unique'] ) ? sanitize_text_field( wp_unslash( $_POST['w_unique'] ) ) : '';
            $free_pro = isset( $_POST['free_pro'] ) ? sanitize_text_field( wp_unslash( $_POST['free_pro'] ) ) : '';

            $response = [];
            if(isset( $_POST['token'] ) && !empty( $_POST['token'] )){
                $array_data['token'] = sanitize_text_field( wp_unslash( $_POST['token'] ) );
                // Check if Nexter Pro extension is activated and has valid license
                if(defined('NXT_PRO_EXT') && class_exists('Nexter_Pro_Ext_Activate') && $free_pro == 'pro'){
                    $array_data['pro_active'] = 'yes';
                }

                $response = $this->wkit_api_call( $array_data, 'snippet/import' );
            }else{
                $response = $this->wkit_api_call( $array_data, 'snippet/import/free' );
            }

			// Check if API call was successful
			if ( ! $response || ! isset( $response['success'] ) || ! $response['success'] ) {
				$data = array(
					'success' => false,
					'data' => array(
						'message' => __( 'Failed to download snippet from server.', 'wdesignkit' )
					)
				);
			}

            if($response && isset( $response['data'] ) && $response['data'] == 'error'){
                $data = array(
                    'success' => false,
                    'data' => array(
                        'message' => $response['message'] ?? __( 'Failed to download snippet from server.', 'wdesignkit' )
                    )
                );
            }

			if($response && $response['content']){
				$json = json_decode( $response['content'], true );

				if ( ! $json || empty( $json['snippets'] ) || ! is_array( $json['snippets'] ) ) {
					$data = array(
						'success' => false,
						'data' => array(
						    'message' => __( 'Invalid snippet file.', 'wdesignkit' )
                        )
					);
				}
			
				$snippet = $json['snippets'][0];

				if ( empty( $snippet['post_type'] ) || $snippet['post_type'] !== 'nxt-code-snippet' ) {
					$data = array(
						'success' => false,
						'data' => array(
							'message' => __( 'Invalid snippet type.', 'wdesignkit' )
						)
					);
				}
				$post_id = wp_insert_post( [
					'post_title'   => sanitize_text_field( html_entity_decode( wp_unslash( $snippet['name'] ) ) ),
					'post_type'    => 'nxt-code-snippet',
					'post_status'  => 'publish'
				] );
			
				if ( is_wp_error( $post_id ) ) {
					$data = array(
						'success' => false,
						'data' => array(
							'message' => __( 'Failed to insert snippet.', 'wdesignkit' )
						)
					);
				}
	
				$tags = ( isset( $snippet['tags'] ) && !empty( $snippet['tags'] ) ) 
					? array_map( 'sanitize_text_field', is_array( $snippet['tags'] ) ? $snippet['tags'] : explode( ',', $snippet['tags'] ) ) : [];
			
				// Save meta fields
				update_post_meta( $post_id, 'nxt-code-type', sanitize_text_field( wp_unslash( $snippet['type'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-note', sanitize_text_field( wp_unslash( $snippet['description'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-tags', $tags );
				update_post_meta( $post_id, 'nxt-code-execute', sanitize_text_field( wp_unslash( $snippet['codeExecute'] ?? '' ) ) );
				// update_post_meta( $post_id, 'nxt-code-status', sanitize_text_field( $snippet['status'] ?? '' ) );
				update_post_meta( $post_id, 'nxt-code-status', 0 );
	
				update_post_meta( $post_id, 'nxt-'.$snippet['type'].'-code', wp_unslash( $snippet['langCode'] ?? '' ) );
				update_post_meta( $post_id, 'nxt-code-html-hooks', wp_unslash( $snippet['htmlHooks'] ?? '' ) );
				update_post_meta( $post_id, 'nxt-code-hooks-priority', sanitize_text_field( wp_unslash( $snippet['hooksPriority'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-add-display-rule', sanitize_text_field( wp_unslash( $snippet['include_data'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-exclude-display-rule', sanitize_text_field( wp_unslash( $snippet['exclude_data'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-in-sub-rule', sanitize_text_field( wp_unslash( $snippet['in_sub_data'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-ex-sub-rule', sanitize_text_field( wp_unslash( $snippet['ex_sub_data'] ?? '' ) ) );
				
				// Word-based insertion settings
				update_post_meta( $post_id, 'nxt-insert-word-count', sanitize_text_field( wp_unslash( $snippet['word_count'] ?? 100 ) ) );
				update_post_meta( $post_id, 'nxt-insert-word-interval', sanitize_text_field( wp_unslash( $snippet['word_interval'] ?? 200 ) ) );
				update_post_meta( $post_id, 'nxt-post-number', sanitize_text_field( wp_unslash( $snippet['post_number'] ?? 1 ) ) );
				
				// CSS Selector settings
				update_post_meta( $post_id, 'nxt-css-selector', wp_unslash( $snippet['css_selector'] ?? '' ) );
				update_post_meta( $post_id, 'nxt-element-index', sanitize_text_field( wp_unslash( $snippet['element_index'] ?? 0 ) ) );
				
				// Additional save options
				update_post_meta( $post_id, 'nxt-code-insertion', sanitize_text_field( wp_unslash( $snippet['insertion'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-location', sanitize_text_field( wp_unslash( $snippet['location'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-customname', sanitize_text_field( wp_unslash( $snippet['customname'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-compresscode', sanitize_text_field( wp_unslash( $snippet['compresscode'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-startdate', sanitize_text_field( wp_unslash( $snippet['startDate'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-enddate', sanitize_text_field( wp_unslash( $snippet['endDate'] ?? '' ) ) );
				update_post_meta( $post_id, 'nxt-code-shortcodeattr', wp_unslash( $snippet['shortcodeattr'] ?? '' ) );
				update_post_meta( $post_id, 'nxt-smart-conditional-logic', wp_unslash( $snippet['smart_conditional_logic'] ?? '' ) );
				update_post_meta( $post_id, 'nxt-code-php-hidden-execute', sanitize_text_field( wp_unslash( $snippet['php_hidden_execute'] ?? '' ) ) );
                update_post_meta( $post_id, 'nxt-wdkit-unique-sid', $w_unique );
			
				$data = array(
					'success' => true,
                    'data' => array(
                        'message' => __( 'Snippet imported.', 'wdesignkit' ),
                        'post_id' => $post_id,
                    )
				);
			} else {
				$data = array(
					'success' => false,
					'data' => array(
						'message' => __( 'No snippet content received from server.', 'wdesignkit' ),
					)
				);
			}

			return $data;
		}

        /**
         * Get user role
         */

        public function wdkit_get_user_roles() {
            $data = array(
                'success' => true,
                'data' => array(
                    'wp_user_can_manage_options' => current_user_can( 'manage_options' ),
                    'wp_user_roles'             => wp_get_current_user()->roles
                )
            );

            return $data;
        }

		/**
		 *
		 * This Function is used for API call
		 *
		 * @since 1.2.4
		 *
		 * @param array $data give array.
		 * @param array $name store data.
		 */
		public function wkit_api_call( $data, $name ) {
			$u_r_l = $this->wdkit_api;

			if ( empty( $u_r_l ) ) {
				return array(
					'massage' => esc_html__( 'API Not Found', 'wdesignkit' ),
					'success' => false,
				);
			}

			$args     = array(
				'method'  => 'POST',
				'body'    => $data,
				'timeout' => 100,
			);
			$response = wp_remote_post( $u_r_l . $name, $args );

			if ( is_wp_error( $response ) ) {
				$error_message = $response->get_error_message();

				/* Translators: %s is a placeholder for the error message */
				$error_message = printf( esc_html__( 'API request error: %s', 'wdesignkit' ), esc_html( $error_message ) );

				return array(
					'massage' => $error_message,
					'success' => false,
				);
			}

			$status_code = wp_remote_retrieve_response_code( $response );
			if ( 200 === $status_code ) {
				return json_decode( wp_remote_retrieve_body( $response ), true );
			}

			$error_message = printf( 'Server error: %d', esc_html( $status_code ) );

			if ( isset( $error_data->message ) ) {
				$error_message .= ' (' . $error_data->message . ')';
			}

            return array(
                'massage' => $error_message,
                'status'  => $status_code,
                'success' => false,
            );
	    }
    }

	Wdkit_Code_Snippet::get_instance(); 
}