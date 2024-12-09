<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $courses = [
        [
            'id' => 1,
            'title' => 'Vue Composition API From Scratch',
            'description' => 'Project development on Vue Composition API from scratch.',
            'lessons_count' => 137,
            'length' => '16h 20min',
        ],
        [
            'id' => 1,
            'title' => 'Vue Composition API From Scratch',
            'description' => 'Project development on Vue Composition API from scratch.',
            'lessons_count' => 137,
            'length' => '16h 20min',
        ]
    ];
    return view('welcome',   compact('courses'));
})->name('index');
