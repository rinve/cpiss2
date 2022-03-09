<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HigherStudies;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class HigherStudiesController extends Controller
{
    public function hsScience(){
        $science = HigherStudies::where('group','science')->latest()->paginate(3);
        return view('admin.higher_studies.science.index', compact('science'));
    }
    public function hsCommerce(){
        $commerce = HigherStudies::where('group','commerce')->latest()->paginate(3);
        return view('admin.higher_studies.commerce.index', compact('commerce'));
    }
    public function hsArts(){
        $arts = HigherStudies::where('group','arts')->latest()->paginate(3);
        return view('admin.higher_studies.arts.index', compact('arts'));
    }
    public function addInfo(){
        return view('admin.higher_studies.add_info');
    }
    public function storeInfo(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
        $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
        HigherStudies::insert([
            'image' => $lastImage,
            'subject' => $request->subject,
            'details' => $request->details,
            'group' => $request->group,
            'future' => $request->future,
            'created_at' => Carbon::now(),
        ]);
        if($request->group == "science"){
            return redirect()->route('hs.science')->with('success', 'Information Added Successfully');
        }
        if ($request->group == "commerce") {
            return redirect()->route('hs.commerce')->with('success', 'Information Added Successfully');
        }
        if ($request->group == "arts") {
            return redirect()->route('hs.arts')->with('success', 'Information Added Successfully');
        }

    }
    public function editInfo($id){
        $info = HigherStudies::find($id);
        return view('admin.higher_studies.edit_info', compact('info'));
    }
    public function updateInfo(Request $request, $id){
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
            $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
            HigherStudies::find($id)->update([
                'image' => $lastImage,
                'subject' => $request->subject,
                'details' => $request->details,
                'group' => $request->group,
                'future' => $request->future,
            ]);
            if($request->group == "science"){
                return redirect()->route('hs.science')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "commerce") {
                return redirect()->route('hs.commerce')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "arts") {
                return redirect()->route('hs.arts')->with('success', 'Information Updated Successfully');
            }

        }else{
            HigherStudies::find($id)->update([
                'subject' => $request->subject,
                'details' => $request->details,
                'group' => $request->group,
                'future' => $request->future,
            ]);
            if($request->group == "science"){
                return redirect()->route('hs.science')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "commerce") {
                return redirect()->route('hs.commerce')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "arts") {
                return redirect()->route('hs.arts')->with('success', 'Information Updated Successfully');
            }
        }
    }
    public function deleteInfo($id){
        $image = HigherStudies::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        HigherStudies::find($id)->delete();
        return redirect()->back()->with('success', 'Information deleted successfully');

    }
}


