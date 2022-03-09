<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Carbon;


class NewsController extends Controller
{
    public function news(){
        $news = News::latest()->paginate(4);
    return view('admin.additional.news.index', compact('news'));
    }
    public function addNews(){
        return view('admin.additional.news.add');
    }
    public function storeNews(Request $request){
        News::insert([
            'name' => $request->name,
            'details' => $request->details,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('news')->with('success','News Added Successfully');
    }
    public function editNews($id){
        $news = News::find($id);
        return view('admin.additional.news.edit', compact('news'));
    }
    public function updateNews(Request $request, $id){
        News::find($id)->update([
            'name' => $request->name,
            'details' => $request->details,
        ]);
        return redirect()->route('news')->with('success','News Updated Successfully');
    }
    public function delete($id){
        News::find($id)->delete();
        return redirect()->back()->with('success', 'News Deleted Successfully');

    }
}
