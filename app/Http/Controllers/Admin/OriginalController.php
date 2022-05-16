<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OriginalController extends Controller
{
    public function add()
    {
        return view('admin.create');
    }
    
    public function create()
    {
        return view('admin.create');
    }
    
    public function edit()
    {
        return view('admin.edit');
    }
    
    public function index()
    {
        return view('admin.index');
    }
}
