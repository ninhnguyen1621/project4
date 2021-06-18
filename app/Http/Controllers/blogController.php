<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{   public function authlogin()
    {
        $admin_id= session()->get('admin_id');
        if ($admin_id) {
            return redirect('/admin/dashboard');
        }else {
            return redirect('/admin/login')->send();
        }
    }
    public function HomeBlog()
    {
        $get_newfeed =blog::paginate(3);
        return view('blog', compact('get_newfeed'));
    }
    public function all_blog()
    {
        $this->authlogin();
        $get_newfeed =blog::paginate(5);
       return view('admin.all_newfeed', compact('get_newfeed'));
    }
    public function add_feed()
    {
        $this->authlogin();
        $newfeed =blog::all();
        return view('admin.add_newfeed', compact('newfeed'));
    }
    public function NewPost(Request $request)
    {
        //dd($request->all());
        $blog = new blog();
        $blog->title = $request->title;
        $blog->post = $request->post;
        $blog->time = $request->time;
        if ($request->img != '') {
            $image= $request->file('img');
            $nameImageValue= Str::slug($request->title) . '.' . $image->extension();
            $image->move(public_path('site\img\blog\\'),$nameImageValue);
            $blog->img = $nameImageValue;
        } else {
            $blog->img  = 'no-img.jpg';
        }
        $blog->save();
        return redirect('/ad-new');
    }
    public function del_newfeed($id){
        $blog=array();
        DB::table('newfeed')->where('id',$id)->delete();
        return redirect('/all-nf');
    }
    public function edit_newfeed($id)
    {
        $this->authlogin();
        $edit_nf=DB::table('newfeed')->where('id',$id)->get();
        return view('admin.edit_newfeed',compact('edit_nf'));
    }
    public function update_newfeed(Request $request,$id)
    {
        $blog = array();
        $blog['title'] = $request->title;
        $blog['post'] = $request->post;
        $blog['time']  = $request->time;
        if ($request->img != '') {
            $image= $request->file('img');
            $nameImageValue= Str::slug($request->title) . '.' . $image->extension();
            $image->move(public_path('site\img\blog\\'),$nameImageValue);
            $blog['img'] = $nameImageValue;
        }
        DB::table('newfeed')->where('id',$id)->update($blog);
        return redirect('all-nf');
    }
    //home
}
