<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\View;

class SplashController extends Controller
{
    public function index()
    {
        return View::make('splash');
    }
}