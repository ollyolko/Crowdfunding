<?php

//Route::get('/', function () {
//    return view('index',['dobro'=>'225454',
//                            'money'=>'15 808 784',
//                            'project'=>'297',
//                            'new'=>'36',
//                            'hot'=>'17',
//                            ]);
//});
Route::get('/','IndexController@show');



Route::get('/add',['as'=>'add',function(){
    return view('add');
}]);