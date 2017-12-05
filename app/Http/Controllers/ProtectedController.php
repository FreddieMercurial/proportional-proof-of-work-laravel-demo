<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ProtectedController extends Controller
{
    public function index()
    {
        return View::make('ppow');
    }
}