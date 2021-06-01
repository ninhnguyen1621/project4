<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CateHomeController extends Controller
{
    public function Categories()
    {
        $Cate=DB::table('category')->where('category_status','0')->orderby('id','desc')->get();
        $all_product=DB::table('products')->orderBy('id','desc')->paginate(8);
        return view('Frontend.Product.shop')->with('Cate',$Cate)->with('all_pr', $all_product);
    }
    // public function Product_category($id)
    // {
    //     $Cate_product=DB::table('category')->where('category_status','0')->orderby('id','desc')->get();
    //     // $cate_by_id=DB::table('products')->join('category','products.id','=','category');
    //     $all_product=DB::table('products')->orderBy('id','desc')->limit(4)->get();
    //     return view('Frontend.Product.shop',compact('all_product'))->with('category',$Cate_product)->with('all_product',$all_product);
    // }
    public function Showlistbyid($id)
    {    $category=category::find($id);
        $Cate=DB::table('category')->where('category_status','0')->orderby('id','desc')->get();
         $cate_pro=category::find($id)->all_product()->paginate(8);
         return view('Frontend.Product.Category.Product_category',['cate_pro'=>$cate_pro,'Cate'=>$Cate])->with('category',$category);
    }

}
