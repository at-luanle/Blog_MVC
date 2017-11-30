<?php

    namespace App\Controllers;

    use App\Models\User;

    class UsersController extends Controller
    {
        public function show($id)
        {
            $data['id'] = $id;
            view('users.show', $data);
        }

        public function login(){
            view('users.login');
        }
    }