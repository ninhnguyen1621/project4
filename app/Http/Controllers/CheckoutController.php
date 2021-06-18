<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\category;
use App\Http\Controllers\Request\SignupRequest;
use App\Http\Requests\SignupResquest;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function checkout_login()
    {
        return view('Frontend.checkout_login');
    }
    public function sign_in()
    {
        return view('Frontend.sign_in_UI');
    }
    public function add_customers(SignupResquest $request)
    {
        if (strlen($request->password)<8) {
            return back()->with('error','Mật Khẩu Phải Trên 8 Ký Tự');
        }
       $data= array();
       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['phone']=$request->phone;
       $data['Password']=$request->password;
     $customer_id=DB::table('customer')->insertGetId($data);
     $request->session()->put('id', $customer_id);
     $request->session()->put('name', $request->name);
       return redirect('/Home')->with('success','Đăng Ký Thành Công');
    }
     public function logout_checkout()
     {
           session()->flush();
           return redirect('/logincheck-out');
     }
     public function login_cus(Request $request)
     {
        $name=$request->name_cus;
        $pw=$request->password_cus;
        $KQ=DB::table('customer')->where('name',$name)->where('Password',$pw)->first();
        if($KQ)
        {
            $request->session()->put('id',$KQ->id);
            return redirect('/check-out')->with('success','Đăng Nhập Thành Công');
        }
        else {
            return redirect('/logincheck-out')->with('error','Tài Khoản Hoặc Mật Khẩu Không Chính Xác');
        }

     }
     public function payment()
     {
         return view('Frontend.Cart.payment');
     }
     public function order_place( Request $request)
     {
        $customer_id=session()->get('id');
        // $buyer_id=session()->get('id_buyer');
        //insert buyer
        $data= array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['note']=$request->note;
      $buyer_id=DB::table('buyer')->insertGetId($data);
         //insert payment
        $payment= array();
        $payment['method']=$request->payment_op;
        $payment['status']='Đang Xử Lý';
        $payment_id=DB::table('payment')->insertGetId($payment);
        //insert order
        $order= array();
        $order['customer_id']=session()->get('id',$customer_id);
        $order['buyer_id']= $buyer_id;
        $order['payment_id']=$payment_id;
        $order['sub_total']=Cart::subtotal();
        $order['status']='đang chờ xử lý';
        $order_id=DB::table('order')->insertGetId($order);
        //insert order detail
        foreach(Cart::content() as $product) {
            $order_detail= array();
            $order_detail['order_id']=$order_id;
            $order_detail['product_id']=$product->id;
            $order_detail['product_name']=$product->name;
            $order_detail['product_price']=$product->price;
            $order_detail['qty']=$product->qty;
            DB::table('order_detail')->insert($order_detail);
        }

        if ( $payment['method']==1) {
            Cart::destroy();
            echo " hiện tại chưa có phương thức thanh toán atm";
        }
        elseif ( $payment['method']==2) {
            Cart::destroy();
            $Cate=DB::table('category')->where('category_status','0')->orderby('id','desc')->get();
         return view('Frontend.Cart.thanksmes')->with('Cate',$Cate);
        }

    }
    public function orders()
    {
        $all_order=DB::table('order')->join('buyer','order.buyer_id','=','buyer.id')->select('order.*','buyer.name','buyer.phone','buyer.address','buyer.note')->orderBy('order.id','desc')->paginate(4);
        return view('admin.orders')->with('all_order',$all_order);
    }
    public function order_detail($order_id)
    {

        // $order_by_id=DB::table('order')
        // ->join('buyer','order.buyer_id','=','buyer.id')
        // ->join('order_detail','order.id','=','order_detail.order_id')->select('order.*','buyer.*','order_detail.*')->first();
        $order_by_id =DB::table('order_detail')->where('order_id', $order_id)->get();
         return view('admin.order_detail')->with('order_by_id',$order_by_id);

    }

}
