<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {
	public function before() {
		parent::before();

		if ( !$this->user ) {
			HTTP::redirect('/');
		}
	}
	
	public function action_radio_shows()
	{
		$view = View::factory('User/Radio_Shows');
		
		// Radio shows
		$radio_show_model = new Model_RadioShow();
		$view->radio_shows = $radio_show_model->get_all();
		
		$this->setPageTitle('Radio Shows');
		
		$this->display(
			$view
		);
	}
}