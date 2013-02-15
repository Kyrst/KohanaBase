<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {
	public function before() {
		parent::before();

		if ( !$this->user && $this->request->action() !== 'login' ) {
			HTTP::redirect('/user/login');
		}
	}

	public function action_login()
	{
		if ( $form_data = $this->request->post() )
		{
			if ( Auth::instance()->login($form_data['username'], $form_data['password']) )
			{
			}
			else
			{
				// Show error dialog
				$this->showMessagePopup(
					'Could not log in',
					'Could not log in, please try again.',
					"[ { text: 'OK', click: function() { $(this).dialog('close') } } ]"
				);

				$this->redirect('user/login');
			}
		}

		$view = View::factory('User/Login');

		$this->display(
			$view
		);
	}
}