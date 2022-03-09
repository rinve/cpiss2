<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageFromUser;
use App\Models\CounselingQuestion;
use App\Models\applicationForPersonalCounseling;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class WebsiteController extends Controller
{
    //Counseling function
    public function counseling(){
        $counselings = DB::table('counseling_questions')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.counseling.index', compact('counselings','socialMedia'));
    }
    public function storeCounselingQuestion(Request $request){
        CounselingQuestion::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();
    }
    //SSC function
    public function sscScience(){
        $science = DB::table('s_s_c_s')->where('group', 'science')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.ssc.science', compact('science','socialMedia'));
    }
    public function sscCommerce(){
        $commerces = DB::table('s_s_c_s')->where('group', 'commerce')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.ssc.commerce', compact('commerces','socialMedia'));
    }
    public function sscArts(){
        $arts = DB::table('s_s_c_s')->where('group', 'arts')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.ssc.arts', compact('arts', 'socialMedia'));
    }
    //HSC function
    public function hscScience(){
        $science = DB::table('h_s_c_s')->where('group', 'science')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.hsc.science', compact('science','socialMedia'));
    }
    public function hscCommerce(){
        $commerces = DB::table('h_s_c_s')->where('group', 'commerce')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.hsc.commerce', compact('commerces','socialMedia'));
    }
    public function hscArts(){
        $arts = DB::table('h_s_c_s')->where('group', 'arts')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.hsc.arts', compact('arts','socialMedia'));
    }
    //Higher Studies function
    public function HSScience(){
        $science = DB::table('higher_studies')->where('group','science')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.higher_studies.science', compact('science','socialMedia'));
    }
    public function HSCommerce(){
        $commerces = DB::table('higher_studies')->where('group', 'commerce')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.higher_studies.commerce', compact('commerces','socialMedia'));
    }
    public function HSArts(){
        $arts = DB::table('higher_studies')->where('group', 'arts')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.higher_studies.arts', compact('arts','socialMedia'));
    }
    //Blog function
    public function blog(){
        $blogs = DB::table('blogs')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.blog.index', compact('blogs','socialMedia'));
    }
    //Personal Counseling function
    public function personalCounseling(){
        $counseling_time = DB::table('personal_counselings')->get();
        $socialMedia = DB::table('social_media')->first();
        return view('website.personal_counseling.index', compact('counseling_time','socialMedia'));
    }
    public function storePersonalCounselingForm(Request $request){
        applicationForPersonalCounseling::insert([
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);
    }
    //Contact us function
    public function contact(){
        $info = DB::table('addresses')->first();
        $socialMedia = DB::table('social_media')->first();
        return view('website.contact.index', compact('info','socialMedia'));
    }
    public function storeContactForm(Request $request){
        MessageFromUser::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);
    }
}
