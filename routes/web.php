<?php

use App\Http\Controllers\Controller;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function(){
    return view('test');
});

// Route::get('/user', function(){
//     return view('user', ['name' => 'imran', 'age'=> '30']);
// });

// Route::get('/user', function(){
//     $cost = "pathan";
//     return view('user', ['name' => 'imran', 'age'=> '30', 'cost' => $cost]);
// });

// Route::get('/user', function(){

//     return view('user')->with('city', 'india');
// });
function users(){
    return [1 => ['name' => 'imran', 'age'=> 30, 'city'=> 'Rawalpindi'],
    2=> ['name' => 'khan', 'age'=> 35, 'city'=> 'Karachi']];

}

Route::get('/users', function(){
    $names= users();

    return view('users',  ['names' => $names]);
});

Route::get('/user/{id}', function($id){
    $users= users();
    abort_if(!isset($users[$id]), 404);
    $user=$users[$id];
    return view('/user', ['user'=> $user]);
})->name('view.user');

Route::controller(userController::class)->group(function(){
    Route::get('test', 'showMessage')->name('test');
    Route::get('uzer/{id}',  'showUser')->name('u');
    Route::get('home', 'showHome')->name('h');
});


