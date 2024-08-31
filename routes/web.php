<?php

use App\Models\Page;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pages = Page::all();
    $posts = Post::whereDate('published_at', '<=', today())
        ->orderBy('published_at', 'desc')
        ->take(4)
        ->get();

    $content['posts'] = $posts;

    foreach ($pages as $page) {
        $content[$page->name] = $page->content;
    }

    return view('home', $content);
});
