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
    return view('welcome');
});

Route::get('/dictionary', function() {
    return view('search');
});

Route::post('/dictionary', function(Illuminate\Http\Request $request){
    $words = $request->words;
    $source = array( 'music' => 'âm nhạc',
                    'musical instrument' => 'nhạc cụ',
                    'musician' => 'nhạc sĩ',
                    'singer' => 'ca sĩ'
);
    foreach($source as $key => $value) {
        if($words == $key) {
            return view('found', compact(['words','value']));
        }
    }
    return view('not-found');
    
});
