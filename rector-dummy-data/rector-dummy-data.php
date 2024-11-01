<?php
/**
 * Quick Demo Import Compatibility File
 *
 * @package rector
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Rector_Quick_Demo_Import' ) ) {

	/**
	 * class Rector_Quick_Demo_Import
	 */
	class Rector_Quick_Demo_Import {

		/**
		 * @var $instance
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {

			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Constructor.
		 */
		public function __construct() {
			add_filter( 'quick-demo-import/supported_themes', array( $this, 'theme_support' ) );
			add_filter( 'quick-demo-import/demo_packages', array( $this, 'demo_packages' ) );
		}

		/**
		 * Support theme.
		 *
		 * @param array $themes Supported themes.
		 * @return array Themes.
		 */
		public function theme_support( $themes ) {
			return array_merge( $themes, array( 'rector' ) );
		}

		/**
		 * Demo packages.
		 *
		 * @return array Demo packages.
		 */
		public function demo_packages() {
			return array(
				'categories'   => array(
					'education' => __( 'Education', 'rector' ),
					'elementor'      => __( 'Elementor', 'rector' ),
				),
				'demos'        => array(
					'rector-default' => array(
						'title'                  => 'Rector Main Demo',
						'preview'                => 'https://templatesell.net/rector',
						'description'            => 'Just another WordPress site',
						'category'               => array( 'education', 'blog' ),
						'pagebuilder'            => array( 'elementor' ),
						'screenshot'             =>  plugin_dir_url( __FILE__ ) . 'dummy-data-files/assets/main.jpg',
						'zip'                    =>  plugin_dir_url( __FILE__ ) . 'dummy-data-files/main.zip',
						'plugins_list'           => array(
							'learning-management-system' => array(
								'name' => 'Masteriyo LMS',
								'slug' => 'learning-management-system/lms.php',
							),
							'everest-forms'              => array(
								'name' => 'Everest Forms',
								'slug' => 'everest-forms/everest-forms.php',
							),
						),
						'core_options'           => array(
							'blogname'       => 'rector',
							'page_on_front'  => 'Home',
							'page_for_posts' => 'Blog',
						),
						'customizer_data_update' => array(
							'nav_menu_locations' => array(
								'menu-primary' => 'Main',
							),
						),
						'masteriyo_settings'     => array(
							'general.styling.primary_color' => '#7963E0',
						),
					),
					'rector-elementor' => array(
						'title'                  => 'Rector Elementor Demo',
						'preview'                => 'https://templatesell.net/rector-elementor',
						'description'            => 'Just another WordPress site',
						'category'               => array( 'elementor', 'blog' ),
						'pagebuilder'            => array( 'elementor' ),
						'screenshot'             =>  plugin_dir_url( __FILE__ ) . 'dummy-data-files/assets/elementor.png',
						'zip'                    =>  plugin_dir_url( __FILE__ ) . 'dummy-data-files/elementor.zip',
						'plugins_list'           => array(
							'learning-management-system' => array(
								'name' => 'Masteriyo LMS',
								'slug' => 'learning-management-system/lms.php',
							),
							'elementor' => array(
								'name' => 'Elementor Page Builder',
								'slug' => 'elementor/elementor.php',
							),
							'everest-forms'              => array(
								'name' => 'Everest Forms',
								'slug' => 'everest-forms/everest-forms.php',
							),
						),
						'core_options'           => array(
							'blogname'       => 'rector',
							'page_on_front'  => 'Home',
							'page_for_posts' => 'Blog',
						),
						'customizer_data_update' => array(
							'nav_menu_locations' => array(
								'menu-primary' => 'Main',
							),
						),
						'masteriyo_settings'     => array(
							'general.styling.primary_color' => '#7963E0',
						),
					),
				),
			);
		}
	}
	Rector_Quick_Demo_Import::get_instance();
}