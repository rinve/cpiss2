<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCounseling;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class HomeCounselingController extends Controller
{
    public function homeCounseling(){
        $homeCounseling = HomeCounseling::latest()->paginate(4);
        return view('admin.home.counseling.index', compact('homeCounseling'));
    }
    public function addHomeCounseling(){
        return view('admin.home.counseling.add');
    }
    public function storeHomeCounseling(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
        $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
        HomeCounseling::insert([
            'image' => $lastImage,
            'details' => $request->details,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('home.counseling')->with('success', 'Information Added Successfully');

    }
    public function editHomeCounseling($id){
        $homeCounseling = HomeCounseling::find($id);
        return view('admin.home.counseling.edit', compact('homeCounseling'));
    }
    public function updateHomeCounseling(Request $request, $id){
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
            $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
            HomeCounseling::find($id)->update([
                'image' => $lastImage,
                'details' => $request->details,
            ]);
            return redirect()->route('home.counseling')->with('success', 'Information Updated Successfully');

        }else{
            HomeCounseling::find($id)->update([
                'details' => $request->details,
            ]);
                return redirect()->route('home.counseling')->with('success', 'Information Updated Successfully');
        }
    }
    public function delete($id){
        $image = HomeCounseling::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        HomeCounseling::find($id)->delete();
        return redirect()->back()->with('success', 'Information deleted successfully');

    }
}
