<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\customer;
use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function HomeProduct()
    {
        $product=DB::table('products')->paginate(12);
     return view('Frontend.index',compact('product'));
    }
    public function detailProduct($id)
    {
        $product=product::find($id);
        //dd($product);
     return view('Frontend.Product.detail',compact('product'));
    }
    public function addCart(Request $request)
    {
        $product = product::find($request->id);
        //dd($product);
        Cart::add(
            [
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->qty,
                'price' => $product->price,
                'weight' => 0,
                'options' => ['img' => $product->img]
            ]
        );
        return redirect()->route('cart');
    }
    public function Cart()
    {
     return view('Frontend.Cart.cart');
    }
    public function UpdateCart($rowId, $qty)
    {
        Cart::update($rowId, $qty);
    }
    public function DelCart($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function Checkout()
    {
        return view('Frontend.Cart.checkout');
    }
    // public function CheckoutPost(Request $request)
    // {
    //     dd($ci=customer::all());
    //     $customer = new customer();
    //     $customer->name = $request->name;
    //     $customer->address = $request->address;
    //     $customer->email = $request->email;
    //     $customer->phone = $request->phone;
    //     $customer->total = Cart::total(0, '', '');
    //     $customer->state = 0;
    //     $customer->save();
    //     foreach (Cart::content() as $product) {
    //         $order = new order();
    //         $order->name = $product->name;
    //         $order->price = $product->price;
    //         $order->quantity = $product->qty;
    //         $order->image = $product->options->img;
    //         $order->customer_id = $customer->id;
    //         $order->save();
    //     }

    //     return redirect()->route('index');
    // }
    //search_product
    public function search(Request $request)
    {
        $keyword=$request->keywords;//tạo ra 1 key để lưu trữ dữ liệu sau khi submit 1 form
        $search_pr=DB::table('products')->where('name','like','%'.$keyword.'%')->paginate(8);

        // dd($search_pr);
        $Cate=DB::table('category')->where('category_status','0')->orderby('id','desc')->get();
        return view('Frontend.Product.search')->with('search_pr',$search_pr)->with('cate',$Cate);
        


    }
    public function searchValue(Request $request)
    {
        $Cate=DB::table('category')->where('category_status','0')->orderby('id','desc')->get();

        $keyword=$request->keywords;//tạo ra 1 key để lưu trữ dữ liệu sau khi submit 1
        $search_Vl=DB::table('products')->where('price','like','%'.$keyword.'%')->paginate(8);
        return view('Frontend.Product.Category.search_value')->with('search_vl',$search_Vl)->with('cate',$Cate);
    }

}
