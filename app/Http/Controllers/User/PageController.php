<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function index()
    {
        return view('user.home');
    }
}
