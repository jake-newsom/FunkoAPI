<?php
namespace App\Http\Controllers;

use App\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller{
	public function index(){
		$Collections = Collection::all();
		return response()->json($Collections);
	}

	public function getCollection($id){
		$collection = Collection::find($id);
		return response()->json($collection);
	}

	public function createCollection(Request $request){
		$collection = Collection::create($request->all());
		return resposne()->json($collection);
	}

	public function deleteCollection($id){
		$collection = Collection::find($id);
		$collection->delete();
		return response()->json("deleted");
	}

	public function updateCollection(Request $request,$id){
		$collection = Collection::find($id);
		$collection->name = $request->input('name');
		$collection->parent_collection_id = $request->input("parent_collection_id");
		$collection->save();
		return response()->json($collection);
	}
}
?>