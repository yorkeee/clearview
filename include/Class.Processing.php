<?php
if (class_exists('PROCESSING') != true) {

	class PROCESSING {

		public static $url_aff = 'aff';
		public static $url_cid = 'cid';
		public static $url_net = 'net';
		public static $url_sid = 'sid';

		public $COOKIE_PRODUCT = 'PRODUCT';
		public $url_product = 'prod';

		function save_data_to_cookie($name, $value){
			setcookie($name, $value, time()+(60*60*24*30), "/");
			$_COOKIE[$name] = $value;
		}

		function get_save_tracking_parameter($name){
			if(isset($_GET[$name])){
				self::save_data_to_cookie($name, $_GET[$name]);
				return $_GET[$name];
			}elseif(isset($_COOKIE[$name])){
				return $_COOKIE[$name];
			}else{
				if($name == self::$url_aff){
					self::save_data_to_cookie($name, 'organic');
					return 'organic';
				}else{
					self::save_data_to_cookie($name, 'none');
					return 'none';
				}
			}
		}

	}
}
?>