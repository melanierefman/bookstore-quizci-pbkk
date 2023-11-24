<?php

namespace App\Controllers;

class User extends BaseController
{
    public function books_users(): string
    {
        return view('books_users');
    }

    public function chart_users(): string
    {
        return view('chart_users');
    }
}
