<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function all_product()
    {
        $product = product::paginate(4);
        // $Category = category::all();
        return view('admin.all_product')->with('product',$product);
    }
    public function category()
    {
        $Category = category::all();

        return view('admin.all_product', compact('product'));
    }
    public function Product()
    {
        $category = category::all();
        return view('admin.add_Product', compact('category'));
    }
    public function ProductPost(Request $request)
    {
        //dd($request->all());
        $product = new product();
        $product->name = $request->name;
        $product->price = $request->price;
        // $product->img;
        $product->origin = $request->origin;
        $product->describe = $request->describe;
        $product->cat_id = $request->cat_id;
        if ($request->img != '') {
            $image= $request->file('img');
            $nameImageValue= Str::slug($request->name) . '.' . $image->extension();
            $destinationPath = public_path('site\img\products\\');
            $image->move($destinationPath, $nameImageValue);
            $product->img = $nameImageValue;
        } else {
            $product->img  = 'no-img.jpg';
        }
        $product->save();
        return redirect()->route('save')->with('thong-bao','Them thanh cong san pham'.$request->name);
    }
    public function del_product($id){
        $product =array();
        DB::table('products')->where('id',$id)->delete();
        return redirect::to('all-Product');
    }
    public function edit_product($id)
    {
    $cate_edit = DB::table('category')->get();
    $edit_product = DB::table('products')->where('id',$id)->get();
    return view('admin.edit_product')->with('cate_edit' ,$cate_edit)->with('edit_product',$edit_product);
    }
    public function update_product(Request $request,$id)
    {
       // dd($request->all());
       /**
        * enctype="multipart/form-data" DK de upload anh
        * thieu ham de upload anh
        */
            $data =array();
            $data['name']=$request->name;
            $data['price']=$request->price;
            $data['origin']=$request->origin;
            $data['describe']=$request->describe;
            $data['cat_id']=$request->cat_id;
            if ($request->img != '') {
                $image= $request->file('img');
                $nameImageValue= Str::slug($request->name) . '.' . $image->extension();
                $destinationPath = public_path('site\img\products\\');
                $image->move($destinationPath, $nameImageValue);
                 $data['img'] = $nameImageValue;
            } else {
                 $data['img']  = $data['img'];
            }
            //hàm upload ảnh 100Đ hahaha th nha,dạ vàng
            DB::table('products')->where('id',$id)->update($data);
            return redirect()->route('list');
    }
}
