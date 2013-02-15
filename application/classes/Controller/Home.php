<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {
	public function action_index()
	{
		$view = View::factory('Home');

		$this->setPageTitle('Base', FALSE);
		$this->setMetaDescription('Base.');

		$this->display(
			$view
		);
	}
}