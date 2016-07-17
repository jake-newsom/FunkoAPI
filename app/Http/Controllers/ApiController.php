<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use DB;

class ApiController extends BaseController
{
	public function apiversion(){
  		return response ()->json (['version'=> env ('APP_VERSION')]);
	}
	public function ping(){
		return response ()->json ("pong");
	}

	public function showPops(){
		//$results = app('db')->select("SELECT * FROM pops");
		//return print_r($results,true);
		$results = DB::table('pops')->get();
		return response()->json($results);
	}
}

?>
