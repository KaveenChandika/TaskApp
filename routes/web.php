<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task',function (){
    $data=App\Task::all();
    return view('task')->with('tasks',$data);
        // return view('task'); 
});

Route::post('/saveTask','PagesController@store');
Route::get('/markascompleted/{id}','PagesController@updateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','PagesController@updateTaskAsNotCompleted');
Route::get('/deleteTask/{id}','PagesController@deleteTask');
Route::get('/updateTask/{id}','PagesController@updateTaskView');
Route::get('/updateView','PagesController@updateTaskView');
Route::post('/update','PagesController@updateTaskValue');
