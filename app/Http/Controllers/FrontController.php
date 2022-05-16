<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('toppage');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function service()
    {
        return view('service.archive');
    }
    
    public function suits()
    {
        $keyword = "生地一覧";
        return view('service.category-archive', ['keyword'=> $keyword]);
    }
    
    public function shirt()
    {
        $keyword = "シャツ・ネクタイ一覧";
        return view('service.category-archive', ['keyword'=> $keyword]);
    }
    
    public function post()
    {
        $keyword = "お客様作品例";
        return view('service.category-archive', ['keyword'=> $keyword]);
    }
}
