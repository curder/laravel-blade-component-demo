<?php

use App\Models\Comment;
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
})->name('home');

Route::get('/comments/{comment}/edit', function(Comment $comment) {
    return view('comments.edit', compact('comment'));
})->name('comments.edit');

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(request()->validate(['body' => 'required|string']));

    return redirect(route('comments.edit', compact('comment')));
});

Route::delete('/comments/{comment}', function (Comment $comment) {
    // authorize the delete

    $comment->delete();

    return redirect(route('home'));
});
