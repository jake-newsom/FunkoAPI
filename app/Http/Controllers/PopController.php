<?php

namespace App\Http\Controllers;

use App\Pop;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PopController extends BaseController{

	public function index(){
		$pops = Pop::all();
		return response()->json($pops);
	}

	public function getPop($id){
		$pop = Pop::find($id);
		return response()->json($pop);
	}

	public function createPop(Request $request){
		$pop = Pop::create($request->all());
		return response()->json($pop);
	}

	public function deletePop($id){
		$pop = Pop::find($id);
		$pop->delete();

		return response()->json('deleted');
	}

	public function updatePop(Request $request,$id){
		$pop = Pop::find($id);
		$pop->name = $request->input('name');
		$pop->item_number = $request->input('item_number');
		$pop->box_number = $request->input('box_number');
		$pop->available = $request->input('available');
		$pop->save();

		return response()->json($pop);
	}
}




?>