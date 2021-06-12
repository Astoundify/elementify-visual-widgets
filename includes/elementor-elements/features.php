<?php
/**
 * Elementor Feature Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

if( !class_exists( 'EVW_Widget_About_Company_Features' ) ) {
	class EVW_Widget_About_Company_Features extends Widget_Base {

		/**
		 * Get widget name.
		 *
		 * Retrieve Feature widget name.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget name.
		 */
		public function get_name() {
			return 'about-company-features';
		}

		/**
		 * Get widget title.
		 *
		 * Retrieve Feature widget title.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget title.
		 */
		public function get_title() {
			return __( 'About Company Features', 'elementify-visual-widgets' );
		}

		/**
		 * Get widget icon.
		 *
		 * Retrieve Feature widget icon.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget icon.
		 */
		public function get_icon() {
			return 'fa fa-code';
		}

		/**
		 * Get widget categories.
		 *
		 * Retrieve the list of categories the Feature widget belongs to.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return array Widget categories.
		 */
		public function get_categories() {
			return [ 'creativeg' ];
		}

		/**
		 * Register Feature widget controls.
		 *
		 * Adds different input fields to allow the user to change and customize the widget settings.
		 *
		 * @since 1.0.0
		 * @access protected
		 */
		protected function _register_controls() {

			$this->start_controls_section(
				'content_section',
				[
					'label' => __( 'Company Features', 'elementify-visual-widgets' ),
					'tab' 	=> \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);

			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'title', [
					'label' 		=> __( 'Title', 'elementify-visual-widgets' ),
					'type' 			=> \Elementor\Controls_Manager::TEXT,
					'label_block' 	=> true,
					'description' 	=> __( 'Enter the title' , 'elementify-visual-widgets' ),
				]
			);

			$repeater->add_control(
				'content', [
					'label' 		=> __( 'Description', 'elementify-visual-widgets' ),
					'type' 			=> \Elementor\Controls_Manager::TEXTAREA,
					'label_block' 	=> true,
					'description' 	=> __( 'Enter the description' , 'elementify-visual-widgets' ),
				]
			);

			$this->add_control(
				'tabs',
				[
					'label' 		=> __( 'Company Tabs', 'elementify-visual-widgets' ),
					'type' 			=> \Elementor\Controls_Manager::REPEATER,
					'fields' 		=> $repeater->get_controls(),
					'title_field' 	=> '{{{ title }}}',
				]
			);

			$this->end_controls_section();

		}
		
		protected function render() {

			$settings = $this->get_settings_for_display();

			require EVW_PLUGIN_PATH . 'includes/elementor-elements/features-output.php';
		}

	}

}
Plugin::instance()->widgets_manager->register_widget_type( new EVW_Widget_About_Company_Features );