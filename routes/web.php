<?php

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

<<<<<<< HEAD
use App\Task;
use Illuminate\Http\Request;


//display all tasks
Route::get('/', function () {
    
    //display existing tasks
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
});

//add new task
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');
});

//delete an existing task
Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();
    return redirect('/');
});
=======
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//sets URL parameter and calls controller that determines it
Route::get('/profile/{username}', 'ProfileController@profile');


//route for articles or "posts"
Route::resource('posts', 'PostsController');
>>>>>>> 5a0f013d30806c41d9024a4f9c6713f6aea3eff6
