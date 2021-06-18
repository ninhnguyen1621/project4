<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function authlogin()
    {
        $admin_id= session()->get('admin_id');
        if ($admin_id) {
            return redirect('/admin/dashboard');
        }else {
            return redirect('/admin/login')->send();
        }
    }
    public function login()
    {

        return view('admin.login_admin');
    }
    public function index()
    {
        $this->authlogin();
        return view('admin.admin_Layout');
    }
    public function dashboard(Request $request)
    {
      $email=$request->email;
      $password=$request->password;
      $kq=Users::all()->where('email',$email)->where('password',$password)->first();
      if ($kq) {
          session()->put('name',$kq->name);
          session()->put('admin_id',$kq->admin_id);
        return  redirect('/admin/dashboard')->with('success','Đăng nhập thành công');
      }
      else {
    session()->put('message','Tài khoản hoặc mật khẩu không chính xác');
        return  redirect('/admin/login');
      }

    }
    public function logout_admin()
    {
        $this->authlogin();
          session()->put('name',null);
          session()->put('admin_id',null);
          return  redirect('/admin/login');
    }
}
