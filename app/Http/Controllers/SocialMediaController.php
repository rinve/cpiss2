<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function socialMedia(){
        $socialMedia = SocialMedia::latest()->paginate(4);
    return view('admin.additional.social_media.index', compact('socialMedia'));
    }
    public function addSocialMedia(){
        return view('admin.additional.social_media.add');
    }
    public function storeSocialMedia(Request $request){
        SocialMedia::insert([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedIn' => $request->linkedIn,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('social.media')->with('success','Social Media Added Successfully');
    }
    public function editSocialMedia($id){
        $socialMedia = SocialMedia::find($id);
        return view('admin.additional.social_media.edit', compact('socialMedia'));
    }
    public function updateSocialMedia(Request $request, $id){
        SocialMedia::find($id)->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedIn' => $request->linkedIn,
        ]);
        return redirect()->route('social.media')->with('success','Social Media Updated Successfully');
    }
    public function delete($id){
        SocialMedia::find($id)->delete();
        return redirect()->back()->with('success', 'Social Media Deleted Successfully');

    }
}
