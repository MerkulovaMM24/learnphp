<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        $title = 'Users';
        view('users/index', compact('title', 'users'));
    }

    public function view()
    {
        $user = User::find($_GET['id'] ?? null);

        if ($user) {
            $title = 'View User';
            view('users/view', compact('title', 'user'));
        } else {
            http_response_code(404);
            echo '404';
        }
    }

    public function edit()
    {
        $user = User::find($_GET['id'] ?? null);

        if ($user) {
            $title = 'Edit User';
            view('users/edit', compact('title', 'user'));
        } else {
            http_response_code(404);
            echo '404';
        }
    }

        public function update()
    {
        $user = User::find($_GET['id'] ?? null);

        if (!$user) {
            http_response_code(404);
            echo '404';
            return;
        }

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($name === '' || $email === '') {
            http_response_code(422);
            echo 'Name and email are required';
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(422);
            echo 'Invalid email address';
            return;
        }

        $user->name = $name;
        $user->email = $email;

        if ($password !== '') {
            $user->password = password_hash($password, PASSWORD_BCRYPT);
        }

        $user->save();

        redirect('/admin/users');
        return;
    }


    public function delete()
    {
        $user = User::find($_GET['id'] ?? null);

        if ($user) {
            $user->delete();
            redirect('/admin/users');
            return;
        }

        http_response_code(404);
        echo '404';
    }

}