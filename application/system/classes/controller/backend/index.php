<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Index extends Controller_Backend_Template {

	public function action_index()
	{
		$this->template->content = View::factory('backend/index/index');
	}

}