<?php

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        // generate 10 blogs with id, title, and body
        'blogs' => [
            [
                'id' => 1,
                'title' => 'lorem ipsum 1',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 2,
                'title' => 'lorem ipsum 2',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 3,
                'title' => 'lorem ipsum 3',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 4,
                'title' => 'lorem ipsum 4',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 5,
                'title' => 'lorem ipsum 5',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 6,
                'title' => 'lorem ipsum 6',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 7,
                'title' => 'lorem ipsum 7',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 8,
                'title' => 'lorem ipsum 8',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 9,
                'title' => 'lorem ipsum 9',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
            [
                'id' => 10,
                'title' => 'lorem ipsum 10',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
            ],
        ]
    ]);

});
