<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {

    }
        //Phương thức Get
    public function index(){
        // kết nỗi csdl, đọc dữ liệu trên obj, trả về cho view
        return 'hien thi danh muc';
    }
        //Phương thức Get
    public function getCategory($id){

    }
        //Phương thức Post
    public function updateCategory($id){

    }
        //Phương thức Get
    public function addCategory(){
        return view('clients/categories/add');
    }
        //Phương thức POST
    public function handleaddCategory(Request $request){
        //lấy ra tất cả dữ liệu
        $alldata = $request -> all();
        //xuất ra dữ liệu đã lấy
        // dd($alldata);
        echo $alldata['CategoryName'];
   }
        //Phương thức Get
    public function deleteCategory($id){

        
    }
}
