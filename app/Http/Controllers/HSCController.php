<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use App\Models\HSC;


class HSCController extends Controller
{
    public function hscScience(){
        $science = HSC::where('group','science')->latest()->paginate(3);
        return view('admin.hsc.science.index', compact('science'));
    }
    public function hscCommerce(){
        $commerce = HSC::where('group','commerce')->latest()->paginate(3);
        return view('admin.hsc.commerce.index', compact('commerce'));
    }
    public function hscArts(){
        $arts = HSC::where('group','arts')->latest()->paginate(3);
        return view('admin.hsc.arts.index', compact('arts'));
    }
    public function addInfo(){
        return view('admin.hsc.add_info');
    }
    public function storeInfo(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
        $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
        HSC::insert([
            'image' => $lastImage,
            'subject' => $request->subject,
            'details' => $request->details,
            'group' => $request->group,
            'future' => $request->future,
            'created_at' => Carbon::now(),
        ]);
        if($request->group == "science"){
            return redirect()->route('hsc.science')->with('success', 'Information Added Successfully');
        }
        if ($request->group == "commerce") {
            return redirect()->route('hsc.commerce')->with('success', 'Information Added Successfully');
        }
        if ($request->group == "arts") {
            return redirect()->route('hsc.arts')->with('success', 'Information Added Successfully');
        }

    }
    public function editInfo($id){
        $info = HSC::find($id);
        return view('admin.hsc.edit_info', compact('info'));
    }
    public function updateInfo(Request $request, $id){
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
            $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
            HSC::find($id)->update([
                'image' => $lastImage,
                'subject' => $request->subject,
                'details' => $request->details,
                'group' => $request->group,
                'future' => $request->future,
            ]);
            if($request->group == "science"){
                return redirect()->route('hsc.science')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "commerce") {
                return redirect()->route('hsc.commerce')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "arts") {
                return redirect()->route('hsc.arts')->with('success', 'Information Updated Successfully');
            }

        }else{
            HSC::find($id)->update([
                'subject' => $request->subject,
                'details' => $request->details,
                'group' => $request->group,
                'future' => $request->future,
            ]);
            if($request->group == "science"){
                return redirect()->route('hsc.science')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "commerce") {
                return redirect()->route('hsc.commerce')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "arts") {
                return redirect()->route('hsc.arts')->with('success', 'Information Updated Successfully');
            }
        }
    }
    public function deleteInfo($id){
        $image = HSC::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        HSC::find($id)->delete();
        return redirect()->back()->with('success', 'Information deleted successfully');

    }
}
