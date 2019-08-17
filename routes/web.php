<?php
Route::get('/', 'PersonController@index')->name('home');
Route::get('person',['as'=>'person','uses'=>'PersonController@create']);
Route::post('person/store',['as'=>'person.store','uses'=>'PersonController@store']);
Route::get('person/store/{id}',['as'=>'person.edit','uses'=>'PersonController@edit']);
Route::put('person/store/{id}',['as'=>'person.update','uses'=>'PersonController@update']);
Route::get('list',['as'=>'person.list','uses'=>'PersonController@list']);
Route::get('ajax',['as'=>'person.ajax','uses'=>'PersonController@ajax']);
