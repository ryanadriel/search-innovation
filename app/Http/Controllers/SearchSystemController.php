<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SearchSystemController extends Controller
{
    protected $view = "System";

    public function index()
    {
        return view ("{$this->view}.search-system");
    }
}
