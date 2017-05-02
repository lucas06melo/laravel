<?php

Route::group(['prefix' => 'painel'], function(){
//Dashboard Painel
Route::get('/', 'Painel\PainelController@index');

//Post
Route::get('posts', 'Painel\PostController@index');
Route::get('posts/create', 'Painel\PostController@create');
Route::post('posts/salvar', 'Painel\PostController@salvar');

//Permissões
Route::get('permissions', 'Painel\PermissionController@index');
Route::get('permissions/{id}/roles', 'Painel\PermissionController@roles');

//Função
Route::get('roles', 'Painel\RoleController@index');
Route::get('roles/{id}/permissions', 'Painel\RoleController@permissions');

//Usuarios
Route::get('users', 'Painel\UserController@index');
Route::get('users/{id}/roles', 'Painel\UserController@roles');
});

Auth::routes();

Route::get('/', 'Site\SiteController@index');