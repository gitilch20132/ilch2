<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Index extends Template_Frontend {

	public function action_index()
	{
        Jelly::query('user_auth_service')->with('user')->select();
        
		$this->template->content = View::factory('frontend/index/index');
	}

}