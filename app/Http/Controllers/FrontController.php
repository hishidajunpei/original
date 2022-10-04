<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class FrontController extends Controller
{
    public function index()
    {
        return view('toppage');
    }
    
    public function design()
    {
        return view('design');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function coordinate()
    {
        return view('coordinate');
    }
    
    public function confirm(Request $request)
    {
        $form = $request->all();
        return view('parts.confirm', ['form' => $form]);
    }
    
    public function thanks(Request $request)
    {
        $form = $request->all();
        return view('parts.thanks', ['form => $form']);
        
    }
    
    // public function register(Request $request){
    //     $name = $request['name'];
        
    //     Mail::send(new RegisterMail($name));
        
    //     return view('contact');
    // }
    
    // public function __construct($name)
    // {
    //     $this->name = $name;
    // }
    
    // public function build()
    // {
    //     return $this->to('exampleAddress@mail.jp')  // 送信先アドレス
    //         ->subject('お問合せ内容 ')// 件名
    //         ->view('registers.register_mail')// 本文
    //         ->with(['name' => $this->name]);// 本文に送る値
    // }
        
}
