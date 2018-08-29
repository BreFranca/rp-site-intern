<?php

Route::get('/', 'HomeController@jaja');
Route::get('/teste', 'TesteController@jaja');

// Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes... 
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('categorias', 'Admin\CategoriasController');
    Route::post('categorias_mass_destroy', ['uses' => 'Admin\CategoriasController@massDestroy', 'as' => 'categorias.mass_destroy']);
    Route::post('categorias_restore/{id}', ['uses' => 'Admin\CategoriasController@restore', 'as' => 'categorias.restore']);
    Route::delete('categorias_perma_del/{id}', ['uses' => 'Admin\CategoriasController@perma_del', 'as' => 'categorias.perma_del']);
    Route::resource('banners', 'Admin\BannersController');
    Route::post('banners_mass_destroy', ['uses' => 'Admin\BannersController@massDestroy', 'as' => 'banners.mass_destroy']);
    Route::post('banners_restore/{id}', ['uses' => 'Admin\BannersController@restore', 'as' => 'banners.restore']);
    Route::delete('banners_perma_del/{id}', ['uses' => 'Admin\BannersController@perma_del', 'as' => 'banners.perma_del']);
    Route::resource('videos', 'Admin\VideosController');
    Route::post('videos_mass_destroy', ['uses' => 'Admin\VideosController@massDestroy', 'as' => 'videos.mass_destroy']);
    Route::post('videos_restore/{id}', ['uses' => 'Admin\VideosController@restore', 'as' => 'videos.restore']);
    Route::delete('videos_perma_del/{id}', ['uses' => 'Admin\VideosController@perma_del', 'as' => 'videos.perma_del']);
    Route::resource('atividades', 'Admin\AtividadesController');
    Route::post('atividades_mass_destroy', ['uses' => 'Admin\AtividadesController@massDestroy', 'as' => 'atividades.mass_destroy']);
    Route::post('atividades_restore/{id}', ['uses' => 'Admin\AtividadesController@restore', 'as' => 'atividades.restore']);
    Route::delete('atividades_perma_del/{id}', ['uses' => 'Admin\AtividadesController@perma_del', 'as' => 'atividades.perma_del']);
    Route::resource('clientes', 'Admin\ClientesController');
    Route::post('clientes_mass_destroy', ['uses' => 'Admin\ClientesController@massDestroy', 'as' => 'clientes.mass_destroy']);
    Route::post('clientes_restore/{id}', ['uses' => 'Admin\ClientesController@restore', 'as' => 'clientes.restore']);
    Route::delete('clientes_perma_del/{id}', ['uses' => 'Admin\ClientesController@perma_del', 'as' => 'clientes.perma_del']);
    Route::resource('depoimentos', 'Admin\DepoimentosController');
    Route::post('depoimentos_mass_destroy', ['uses' => 'Admin\DepoimentosController@massDestroy', 'as' => 'depoimentos.mass_destroy']);
    Route::post('depoimentos_restore/{id}', ['uses' => 'Admin\DepoimentosController@restore', 'as' => 'depoimentos.restore']);
    Route::delete('depoimentos_perma_del/{id}', ['uses' => 'Admin\DepoimentosController@perma_del', 'as' => 'depoimentos.perma_del']);
    Route::resource('infos', 'Admin\InfosController');
    Route::post('infos_mass_destroy', ['uses' => 'Admin\InfosController@massDestroy', 'as' => 'infos.mass_destroy']);
    Route::post('infos_restore/{id}', ['uses' => 'Admin\InfosController@restore', 'as' => 'infos.restore']);
    Route::delete('infos_perma_del/{id}', ['uses' => 'Admin\InfosController@perma_del', 'as' => 'infos.perma_del']);




 
});
