<?php

namespace WPS\WP\Schema;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( __NAMESPACE__ . '\JsonLD' ) ) {
	class JsonLD {
		public function __construct() {
		}

		public function do() {
			echo '<script type="application/ld+json">';
			echo '</script>';
		}

		protected function get_data() {
			return array(
				'@context'  => 'http://schema.org',
				'@type'     => 'Organization',
				'address'   => array(
					'@type'           => 'PostalAddress',
					'addressLocality' => '',
					'postalCode'      => '',
					'streetAddress'   => '',
				),
				'name'      => '',
				'telephone' => '',
			);
		}
	}
}
