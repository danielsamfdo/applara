<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesJobs, ValidatesRequests;

	public function get_current_user()
	{
		return Auth::user();
	}

	public function get_current_organization()
	{
		return Auth::user() ? Auth::user()->church() : null;
	}

}
