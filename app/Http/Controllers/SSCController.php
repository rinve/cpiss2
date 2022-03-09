<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SSC;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class SSCController extends Controller
{
    public function sscScience(){
        $science = SSC::where('group','science')->latest()->paginate(3);
        return view('admin.ssc.science.index', compact('science'));
    }
    public function sscCommerce(){
        $commerce = SSC::where('group','commerce')->latest()->paginate(3);
        return view('admin.ssc.commerce.index', compact('commerce'));
    }
    public function sscArts(){
        $arts = SSC::where('group','arts')->latest()->paginate(3);
        return view('admin.ssc.arts.index', compact('arts'));
    }
    public function addInfo(){
        return view('admin.ssc.add_info');
    }
    public function storeInfo(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
        $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
        SSC::insert([
            'image' => $lastImage,
            'subject' => $request->subject,
            'details' => $request->details,
            'group' => $request->group,
            'future' => $request->future,
            'created_at' => Carbon::now(),
        ]);
        if($request->group == "science"){
            return redirect()->route('ssc.science')->with('success', 'Information Added Successfully');
        }
        if ($request->group == "commerce") {
            return redirect()->route('ssc.commerce')->with('success', 'Information Added Successfully');
        }
        if ($request->group == "arts") {
            return redirect()->route('ssc.arts')->with('success', 'Information Added Successfully');
        }

    }
    public function editInfo($id){
        $info = SSC::find($id);
        return view('admin.ssc.edit_info', compact('info'));
    }
    public function updateInfo(Request $request, $id){
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('admin/dashboard/images/' . $imageNameGenerator);
            $lastImage = 'admin/dashboard/images/' . $imageNameGenerator;
            SSC::find($id)->update([
                'image' => $lastImage,
                'subject' => $request->subject,
                'details' => $request->details,
                'group' => $request->group,
                'future' => $request->future,
            ]);
            if($request->group == "science"){
                return redirect()->route('ssc.science')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "commerce") {
                return redirect()->route('ssc.commerce')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "arts") {
                return redirect()->route('ssc.arts')->with('success', 'Information Updated Successfully');
            }

        }else{
            SSC::find($id)->update([
                'subject' => $request->subject,
                'details' => $request->details,
                'group' => $request->group,
                'future' => $request->future,
            ]);
            if($request->group == "science"){
                return redirect()->route('ssc.science')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "commerce") {
                return redirect()->route('ssc.commerce')->with('success', 'Information Updated Successfully');
            }
            if ($request->group == "arts") {
                return redirect()->route('ssc.arts')->with('success', 'Information Updated Successfully');
            }
        }
    }
    public function deleteInfo($id){
        $image = SSC::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        SSC::find($id)->delete();
        return redirect()->back()->with('success', 'Information deleted successfully');

    }
}
