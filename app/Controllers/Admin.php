<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function admin_books(): string
    {
        return view('admin_books');
    }

    public function add_books(): string
    {
        return view('add_books');
    }

    public function edit_books(): string
    {
        return view('edit_books');
    }
}
