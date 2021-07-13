<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Login.index');
});

Route::get('/dashboard', function () {
    
    $data = array(
        'title' => 'Dashboard',
        'menu' => 'dashboard',
        'subMenu' => '',
        'special_css' => 'dashboard.css',
        'special_js' => 'dashboard.js'
    );

    return view('Actor-Apps.stakeholder.Dashboard.index', $data);
});

Route::get('/assesment', function () {
    
    $data = array(
        'title' => 'Assesment',
        'menu' => 'assesment',
        'subMenu' => '',
        'special_css' => 'assesment.css',
        'special_js' => 'assesment.js'
    );

    return view('Actor-Apps.stakeholder.Assesment.index', $data);
});