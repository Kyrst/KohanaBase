<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Helper extends Controller {
	public function action_combine_css()
	{
		$files = $this->request->query('f');
		
		if ( count($files) === 0 )
			return;
		
		$out = '';
		
		foreach ( $files as $file ) {
			if ( !file_exists($path = DOCROOT . $file) )
				continue;

			$content = file_get_contents($path);

			$out .= Common::minify_css($content);
		}
		
		$this->response->headers(
			array(
				'Content-Type' => 'text/css'
			)
		);
		
		echo $out;
	}
	
	public function action_combine_js() {
		$files = $this->request->query('f');
		
		if ( count($files) === 0 )
			return;
		
		$out = '';

		foreach ( $files as $file ) {
			if ( !file_exists($path = DOCROOT . $file) )
				continue;
		
			$content = file_get_contents($path);
		
			$out .= $content;
		}
		
		$this->response->headers(
			array(
				'Content-Type' => 'application/javascript'
			)
		);
	
		echo $out;
	}
}