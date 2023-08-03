<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data= [];
    public function index(){
        $this->data['welcom']= 'học lập trình laravel tại btec';
        $this->data['content']= '<h3> Chương 1: Nhập môn laravel</h3>
        <p>Kiến thức</p>';

        return view('home',$this->data);

    }
}

