<?php

$app->group(['prefix'=>'v1','namespace'=>'App\Http\Controllers'],function($app){
	$app->get('ping','ApiController@ping');

	// Functions for finding, updating, adding, deleting pops
	$app->get('pops','PopController@index');
	$app->get('pop/{id}','PopController@getPop');
	$app->post('pop','PopController@createPop');
	$app->put('pop/{id}','PopController@updatePop');
	$app->delete('pop/{id}','PopController@deletePop');

});



