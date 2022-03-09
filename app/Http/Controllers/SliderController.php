<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class SliderController extends Controller
{
    public function slider(){
        $slider = Slider::latest()->paginate(4);
        return view('admin.home.slider.index', compact('slider'));
    }
    public function addSlider(){
        return view('admin.home.slider.add');
    }
    public function storeSlider(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(500, 500)->save('admin/dashboard/slider/' . $imageNameGenerator);
        $lastImage = 'admin/dashboard/slider/' . $imageNameGenerator;
        Slider::insert([
            'image' => $lastImage,
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('slider')->with('success', 'Slider Added Successfully');

    }
    public function delete($id){
        $image = Slider::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        Slider::find($id)->delete();
        return redirect()->back()->with('success', 'Slider deleted successfully');

    }
    
}
