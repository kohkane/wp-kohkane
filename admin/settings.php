<?php

if ( empty($_SESSION['__devReload']) ) {
  $_SESSION['__devReload'] = false;
}

if ( !empty($_GET['toggleDev']) ) {
  if ( $_GET['toggleDev'] == 'false' ) {
    $_SESSION['__devReload'] = false;
  } else {
    $_SESSION['__devReload'] = $_GET['toggleDev'] == 'true' ? 'localhost:8080' : $_GET['toggleDev'];
  }
}

if ( !class_exists('Kohkane_Admin' ) ):
  class Kohkane_Admin {

    private $settings_api;

    function __construct() {
      $this->settings_api = new WeDevs_Settings_API;
      add_action( 'admin_init', array($this, 'admin_init') );
      add_action( 'admin_menu', array($this, 'admin_menu') );
      add_action( 'admin_enqueue_scripts', array( $this, 'add_scripts' ) );
    }

    function admin_init() {
      //set the settings
      $this->settings_api->set_sections( $this->get_settings_sections() );
      $this->settings_api->set_fields( $this->get_settings_fields() );

      //initialize settings
      $this->settings_api->admin_init();
    }

    public function add_scripts() {
      if (!empty($_SESSION) && $_SESSION['__devReload'] ) {
        // wp_enqueue_script('main-dev', 'http://' . $_SESSION['__devReload'] . '/app.js', NULL, NULL, TRUE);

        wp_enqueue_script(
          'wp-kohkane-vendor',
          'http://' . $_SESSION['__devReload'] . '/chunk-vendors.js',
          null,
          null,
          true
        );
        wp_enqueue_script(
          'wp-kohkane',
          'http://' . $_SESSION['__devReload'] . '/app.js',
          array('wp-kohkane-vendor'),
          null,
          true
        );

      } else {
        wp_enqueue_script(
          'wp-kohkane-vendor',
          plugin_dir_url( __FILE__ ) . '../assets/dist/js/chunk-vendors.js',
          null,
          filemtime(plugin_dir_path( __FILE__ ) . '../assets/dist/js/chunk-vendors.js'),
          true
        );
        wp_enqueue_script(
          'wp-kohkane',
          plugin_dir_url( __FILE__ ) . '../assets/dist/js/app.js',
          array('wp-kohkane-vendor'),
          filemtime(plugin_dir_path( __FILE__ ) . '../assets/dist/js/app.js'),
          true
        );
      }
    }

    function admin_menu() {
      add_menu_page(
        'kohkane',
        'Kohkane',
        'manage_options',
        'kohkane_plugin',
        array($this, 'plugin_page'),
        'dashicons-rss',
        50
      );
    }

    function get_settings_sections() {
      $sections = array(
        array(
          'id'    => 'kohkane',
          'title' => __( 'Basic Settings', 'kohkane' )
        )
      );
      return $sections;
    }

    /**
    * Returns all the settings fields
    *
    * @return array settings fields
    */
    function get_settings_fields() {
      $settings_fields = array(
        'kohkane' => array(
          array(
            'name'              => 'kohkane_api_base',
            'label'             => __( 'API Base URL', 'kohkane' ),
            'desc'              => __( 'The base URL of the API <br><small style="color: #c10000;">(You probably don\'t need to change this)</small>', 'kohkane' ),
            'placeholder'       => __( '', 'kohkane' ),
            'type'              => 'text',
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
          )
        )
      );

      return $settings_fields;
    }

    function plugin_page() {
      require_once plugin_dir_path( __FILE__ ) . '../templates/admin.php';
    }
  }

  new Kohkane_Admin();
endif;
