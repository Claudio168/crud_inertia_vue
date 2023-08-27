<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class exampleController extends Controller
{
    public function index(){

        return Inertia::render('Example');
    }
}
