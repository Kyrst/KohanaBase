<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Base {
	public function action_index()
	{
		$view = View::factory('About');

		$this->setPageTitle('About');
		$this->setMetaDescription('About.');

		$this->loadLib('jquery-ui');

		$this->display(
			$view
		);
	}
}