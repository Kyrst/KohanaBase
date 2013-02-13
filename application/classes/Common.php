<?php
defined('SYSPATH') or die('No direct script access.');

class Common {
	public static function minify_css($str) {
		$str = preg_replace('!/\*.*?\*/!s', '', $str);
		$str = preg_replace('/\n\s*\n/', "\n", $str);
		$str = preg_replace('/[\n\r \t]/', ' ', $str);
		$str = preg_replace('/ +/', ' ', $str);
		$str = preg_replace('/ ?([,:;{}]) ?/', '$1', $str);
		$str = preg_replace('/;}/', '}', $str);
		
		return trim($str);
	}
}
?>