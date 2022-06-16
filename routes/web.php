<?php

use Andyabih\LaravelToUML\Http\Controllers\LaravelToUMLController;
use Illuminate\Support\Facades\Route;
// This will work and generate everything properly.
use App\Models\Post;

// Using it directly in the code without the use operator won't.
$posts = \App\Models\Post::all();

Route::get(config ('laravel-to-uml.route'), [LaravelToUMLController::class, 'index']);