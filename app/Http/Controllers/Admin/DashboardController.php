<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // echo 'Khoi dong dashboard';
        // return 'Khoi dong dashboard';
        // sử dụng session để check login
    }
    public function index(){
        return '<h2>Dashboard welcom</h2>';
    }
}
