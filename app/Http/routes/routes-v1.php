<?php

$app->group(['prefix'=>'v1','namespace'=>'App\Http\Controllers'],function($app){
	$app->get('ping','ApiController@ping');

	// Functions for finding, updating, adding, deleting pops
	$app->get('pops','PopController@index');
	$app->get('pop/{id}','PopController@getPop');
	$app->post('pop','PopController@createPop');
	$app->put('pop/{id}','PopController@updatePop');
	$app->delete('pop/{id}','PopController@deletePop');

	// functions for finding, updating, adding, deleting collections
	$app->get("collections","CollectionController@index");
	$app->get("collection/{id}","CollectionController@getCollection");
	$app->post("collection","CollectionController@createCollection");
	$app->put("collection/{id}","CollectionController@updateCollection");
	$app->delete("collection/{id}","CollectionController@deleteCollection");

});



