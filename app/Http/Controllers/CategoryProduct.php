<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function add_category_product()
    {
      return view('admin.add_category_product');
    }

    public function all_category_product()
    {
        $all_category_product = category::paginate(3);
       return view('admin.all_category_product',compact('all_category_product'));
    }
    public function save_category_product(Request $request)
    {
        $data =array();
        $data['name']=$request->category_product_name;
        $data['category_des']=$request->category_product_des;
        $data['category_status']=$request->category_product_stt;
        DB::table('category')->insert($data);
        return redirect::to('add-category-product');
         //return redirect()->route('list')->with('thong-bao','Them thanh cong san pham
    }
    public function edit_category_product($id)
    {
    $edit_category_product = DB::table('category')->where('id',$id)->get();
    $manager_category_pr=view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
    return view('admin.admin_Layout')->with('admin.edit_category_product',$manager_category_pr);
    }
    public function update_category_product(Request $request,$id){
        
        $data =array();
        $data['name']=$request->category_product_name;
        $data['category_des']=$request->category_product_des;
        DB::table('category')->where('id',$id)->update($data);
        return redirect::to('all-category-product');
    }
    public function del_category_product($id){
        $data =array();
        DB::table('category')->where('id',$id)->delete();
        return redirect::to('all-category-product');
    }
    public function active_cate()
    {
        return view('admin.add_category_product');
    }
}
