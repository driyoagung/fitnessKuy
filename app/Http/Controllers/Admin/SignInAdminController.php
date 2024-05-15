<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInAdminController extends Controller
{
    public function index()
    {
        return view("pages.sign-in",[
            "slug"=> "admin",
        ]);
    }
}
