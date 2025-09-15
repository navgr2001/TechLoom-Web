<?php
/**
 * The file that defines the core plugin class
 *
 * @link       https://posimyth.com/
 * @since      1.1.1
 *
 * @package    Wdesignkit
 * @subpackage Wdesignkit/includes
 */

/**
 * Exit if accessed directly.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use wdkit\Wdkit_Wdesignkit;
use wdkit\wdkit_datahooks\Wdkit_Data_Hooks;



if ( ! class_exists( 'Wdkit_Import_temp_Ajax' ) ) {

	/**
	 * It is wdesignkit Main Class
	 *
	 * @since 2.0
	 */
	class Wdkit_Import_temp_Ajax {

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
		 *  Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Define the core functionality of the plugin.
		 */
		public function __construct() {
			add_filter( 'wp_wdkit_import_temp_ajax', array( $this, 'wdkit_import_temp_ajax_call' ) );
		}

		/**
		 * Get Wdkit Api Call Ajax.
		 *
		 * @since 1.1.1
		 */
		public function wdkit_import_temp_ajax_call( $type ) {

			check_ajax_referer( 'wdkit_nonce', 'kit_nonce' );

			if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
				wp_send_json_error( array( 'content' => __( 'Insufficient permissions.', 'wdesignkit' ) ) );
			}

			if ( ! $type ) {
				$this->wdkit_error_msg( 'Something went wrong.' );
			}

			switch ( $type ) {
				case 'select_team_img':
					$response = $this->wdkit_select_team_img();
					break;
				case 'wkit_ai_desc_keyword':
					$response = $this->wkit_ai_desc_keyword();
					break;
				case 'wkit_create_widget':
					$response = $this->wkit_create_widget();
					break;
				case 'generate_ai_content':
					$response = $this->wkit_generate_ai_content();
					break;
				case 'reset_site':
					$response = $this->wkit_reset_site();
					break;
				case 'check_post_count':
					$response = $this->wkit_check_post_count();
					break;
			}

			wp_send_json( $response );
			wp_die();
		}

		/**
		 *
		 * select team image for import kit 
		 *
		 * @since 2.0.0
		 */
		public function wdkit_select_team_img() {
			$array_data = array(
				'id' => isset($_POST['folder_id']) ? sanitize_text_field($_POST['folder_id']) : '',
				'count' => isset($_POST['image_count']) ? intval($_POST['image_count']) : 5,
				'type' => isset($_POST['img_type']) ? sanitize_text_field($_POST['img_type']) : 'default',
				'token' => isset($_POST['token']) ? sanitize_text_field($_POST['token']) : '',
			);

			$response = $this->wkit_api_call( $array_data, 'ai/team/image' );
			$success  = ! empty( $response['success'] ) ? $response['success'] : false;

			if ( empty( $success ) ) {
				$response = array(
					'success'      => false,
					'message'      => esc_html__( 'Data Not Found', 'wdesignkit' ),
					'description'  => esc_html__( 'Images not found', 'wdesignkit' ),
				);

				wp_send_json( $response );
				wp_die();
			}

			$response = json_decode( wp_json_encode( $response['data'] ), true );

			return $response;
		}

		/**
		 *
		 * generate ai descrioption and image keyword from kit  
		 *
		 * @since 2.0.0
		 */
		protected function wkit_ai_desc_keyword (){
            $array_data = array(
				'site_name' => isset($_POST['site_type']) ? sanitize_text_field($_POST['site_type']) : '',
				'description' => isset($_POST['site_desc']) ? intval($_POST['site_desc']) : '',
				'type' => isset($_POST['api_type']) ? sanitize_text_field($_POST['api_type']) : 'description',
				'token' => isset($_POST['token']) ? sanitize_text_field($_POST['token']) : '',
			);

			$response = $this->wkit_api_call( $array_data, 'ai/metadata' );
			$success  = ! empty( $response['success'] ) ? $response['success'] : false;

			if ( empty( $success ) ) {
				$response = array(
					'success'      => false,
					'message'      => esc_html__( 'Data Not Found', 'wdesignkit' ),
					'description'  => esc_html__( 'Images not found', 'wdesignkit' ),
				);

				wp_send_json( $response );
				wp_die();
			}

			$response = json_decode( wp_json_encode( $response['data'] ), true );

			return $response;
		}

		/**
		 *
		 * generate ai text   
		 *
		 * @since 2.0.0
		 */
		protected function wkit_generate_ai_content (){
            $array_data = array(
				'text_array' => isset( $_POST['text_array'] ) ? json_decode( wp_unslash( $_POST['text_array'] ), true ) : '',
				'type' => isset( $_POST['site_type'] ) ? sanitize_text_field( $_POST['site_type'] ) : '',
				'title' => isset( $_POST['site_title'] ) ? sanitize_text_field( $_POST['site_title'] ) : '',
				'language' => isset( $_POST['site_lang'] ) ? sanitize_text_field( $_POST['site_lang'] ) : '',
				'description' => isset( $_POST['site_desc'] ) ? sanitize_text_field( $_POST['site_desc'] ) : '',
				'builder' => isset( $_POST['site_builder'] ) ? sanitize_text_field( $_POST['site_builder'] ) : '',
				'token' => isset($_POST['token']) ? sanitize_text_field($_POST['token']) : '',
			);

			$response = $this->wkit_api_call( $array_data, 'ai/template/import' );
			$success  = ! empty( $response['success'] ) ? $response['success'] : false;

			if ( empty( $success ) ) {
				$response = array(
					'success'      => false,
					'message'      => esc_html__( 'Data Not Found', 'wdesignkit' ),
					'description'  => esc_html__( 'Images not found', 'wdesignkit' ),
				);

				wp_send_json( $response );
				wp_die();
			}

			$response = json_decode( wp_json_encode( $response['data'] ), true );

			return $response;
		}

		/**
		 *
		 * darft all theme builder page and normal page    
		 *
		 * @since 2.0.0
		 */
		protected function wkit_reset_site(){
			do_action( 'nxt_update_builder_status', 'all' );

			if ( current_user_can('manage_options') ) {
				$pages = get_posts([
					'post_type'   => 'page',
					'post_status' => 'publish',
					'numberposts' => -1
				]);
				foreach ($pages as $page) {
					wp_update_post([
						'ID'          => $page->ID,
						'post_status' => 'draft'
					]);
				}
			} else {
				print_r('hjuj');
			}

			$response = array(
				'message'     => esc_html__( 'site Setting updated', 'wdesignkit' ),
				'description' => esc_html__( 'site Setting updated', 'wdesignkit' ),
				'success'     => true,
			);

			wp_send_json( $response );
			wp_die();
		}

		/**
		 *
		 * darft all theme builder page and normal page    
		 *
		 * @since 2.0.0
		 */
		protected function wkit_check_post_count() {
			$builder = isset($_POST['builder']) ? sanitize_text_field($_POST['builder']) : '';

			$args = [
				'post_type'      => 'any',
				'post_status'    => 'publish',
				'posts_per_page' => -1,
				'fields'         => 'ids', // Only fetch IDs for performance
			];

			$posts = get_posts($args);

			$elementor = 0;
			$gutenberg = 0;
			$classic   = 0;

			foreach ($posts as $post_id) {
				$is_elementor = get_post_meta($post_id, '_elementor_edit_mode', true);

				if ($is_elementor === 'builder') {
					$elementor++;
				} else {
					$content = get_post_field('post_content', $post_id);
					if (strpos($content, '<!-- wp:') !== false) {
						$gutenberg++;
					} else {
						$classic++;
					}
				}
			}

			// Return only requested builder count if parameter is passed
			if ($builder === 'elementor') {
				$post_data = [ 'count' => $elementor ];
			} elseif ($builder === 'gutenberg') {
				$post_data = [ 'count' => $gutenberg ];
			} elseif ($builder === 'classic') {
				$post_data = [ 'count' => $classic ];
			} else {
				// Default → return all
				$post_data = [
					'elementor' => $elementor,
					'gutenberg' => $gutenberg,
					'classic'   => $classic,
				];
			}

			$response = [
				'data'        => $post_data,
				'message'     => esc_html__( 'Post count retrieved successfully', 'wdesignkit' ),
				'description' => esc_html__( 'Post count retrieved successfully', 'wdesignkit' ),
				'success'     => true,
			];

			wp_send_json($response);
			wp_die();
		}


		/**
		 *
		 * This Function is used for API call
		 *
		 * @since 2.0.0
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

				return array(
					'data'    => json_decode( wp_remote_retrieve_body( $response ) ),
					'massage' => esc_html__( 'Success', 'wdesignkit' ),
					'status'  => $status_code,
					'success' => true,
				);
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

	Wdkit_Import_temp_Ajax::get_instance();
}