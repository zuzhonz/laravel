<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function () {
        return view('layout.master');
    });

    Route::get('/add', function () {
        return view('admin.users.add-user');
    });

    Route::post('/add-user', function (Request $request) {

        $class = 'WE16307';
        $users = [
            [
                'name' => 'tuannda3',
                'age' => '28',
                'address' => 'HN',
                'phone' => '0392871868',
                'email' => 'tuannda3@fe.edu.vn',
                'status' => 0
            ],
            [
                'name' => 'tuannda4',
                'age' => '29',
                'address' => 'HN',
                'phone' => '0392871869',
                'email' => 'tuannda4@fe.edu.vn',
                'status' => 1
            ],
            [
                'name' => 'NGUYEN VAN A',
                'age' => '20',
                'address' => 'HN',
                'phone' => '0123xxxxxxx',
                'email' => 'nva@fe.edu.vn',
                'status' => 0
            ],
        ];
        $get_arr = $request->all();

        array_push($users, $get_arr);






        // Truyền giá trị sang view bằng tham số thứ 2
        // key là tên biến bên view nhận, và value là giá trị ở bên này
        return view('admin.users.user-list', [
            'class_name' => $class,
            'user_list' => $users
        ]);
    })->name('add');

    Route::get('/update/{name}', function ($name) {
        // $class = 'WE16307';
        $users = [
            [
                'name' => 'tuannda3',
                'age' => '28',
                'address' => 'HN',
                'phone' => '0392871868',
                'email' => 'tuannda3@fe.edu.vn',
                'status' => 0
            ],
            [
                'name' => 'tuannda4',
                'age' => '29',
                'address' => 'HN',
                'phone' => '0392871869',
                'email' => 'tuannda4@fe.edu.vn',
                'status' => 1
            ],
            [
                'name' => 'NGUYEN VAN A',
                'age' => '20',
                'address' => 'HN',
                'phone' => '0123xxxxxxx',
                'email' => 'nva@fe.edu.vn',
                'status' => 0
            ],
        ];





        // dd($name);


        return view('admin.users.update-user', [
            'old_name' => $name,
            'list' => $users,
        ]);
    })->name('update');



    Route::get('/users', function () {
        // trả về giao diện resources/views/user-list.blade.php
        $class = 'WE16307';
        $users = [
            [
                'name' => 'tuannda3',
                'age' => '28',
                'address' => 'HN',
                'phone' => '0392871868',
                'email' => 'tuannda3@fe.edu.vn',
                'status' => 0
            ],
            [
                'name' => 'tuannda4',
                'age' => '29',
                'address' => 'HN',
                'phone' => '0392871869',
                'email' => 'tuannda4@fe.edu.vn',
                'status' => 1
            ],
            [
                'name' => 'NGUYEN VAN A',
                'age' => '20',
                'address' => 'HN',
                'phone' => '0123xxxxxxx',
                'email' => 'nva@fe.edu.vn',
                'status' => 0
            ],
        ];
        // Truyền giá trị sang view bằng tham số thứ 2
        // key là tên biến bên view nhận, và value là giá trị ở bên này
        return view('admin.users.user-list', [
            'class_name' => $class,
            'user_list' => $users
        ]);
    });
});