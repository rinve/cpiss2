<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class BlogController extends Controller
{
    public function blogAdmin(){
        $blogs = Blog::latest()->paginate(4);
        return view('admin.blog.index', compact('blogs'));
    }
    public function addBlog(){
        return view('admin.blog.add');
    }
    public function storeBlog(Request $request){
        Blog::insert([
            'name'=> $request->name,
            'details'=> $request->details,
            'link'=> $request->link,
            'created_at'=> Carbon::now(),
        ]);
        return redirect()->route('blog.admin')->with('success', 'Blog Added Successfully');
    }
    public function editBlog($id){
        $blogs = Blog::find($id);
        return view('admin.blog.edit', compact('blogs'));
    }
    public function updateBlog(Request $request, $id){
        Blog::find($id)->update([
            'name'=> $request->name,
            'details'=> $request->details,
            'link'=> $request->link,
        ]);
        return redirect()->route('blog.admin')->with('success', 'Blog Updated Successfully');
    }
    public function deleteBlog($id){
        Blog::find($id)->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
