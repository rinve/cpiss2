<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalCounseling;
use App\Models\applicationForPersonalCounseling;
use Illuminate\Support\Carbon;


class PersonalCounselingController extends Controller
{

    //Time function
    public function time(){
        $time = PersonalCounseling::latest()->paginate(5);
        return view('admin.personal_counseling.time.index', compact('time'));
    }
    public function addTime(){
        return view('admin.personal_counseling.time.time_add');

    }
    public function storeTime(Request $request){
        PersonalCounseling::insert([
            'day' => $request->day,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('time')->with('success', 'Time Added Successfully');
    }
    public function editTime($id){
        $editTime = PersonalCounseling::find($id);
        return view('admin.personal_counseling.time.time_edit', compact('editTime'));
    }
    public function updateTime(Request $request, $id){
        PersonalCounseling::find($id)->update([
            'day' => $request->day,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
        ]);
        return redirect()->route('time')->with('success', 'Time Updated Successfully');
    }
    public function delete($id)
    {
        PersonalCounseling::find($id)->delete();
        return redirect()->back()->with('success', 'Time deleted successfully');

    }

    //Client Application
    public function clientApplication(){
        $clientApplication = applicationForPersonalCounseling::latest()->paginate(4);
        return view('admin.personal_counseling.client_message.index', compact('clientApplication'));
    }
    public function giveAnswer($id){
        $clientApplication = applicationForPersonalCounseling::find($id);
        return view('admin.personal_counseling.client_message.answer', compact('clientApplication'));
    }
    public function storeAnswer(Request $request, $id){
        applicationForPersonalCounseling::find($id)->update([
            'email' => $request->email,
            'answer' => $request->answer,
            'status' => 1,
        ]);
        return redirect()->route('client.application')->with('success', 'Gave Answer Successfully');
    }
    public function editAnswer($id){
        $clientApplication = applicationForPersonalCounseling::find($id);
        return view('admin.personal_counseling.client_message.edit_answer', compact('clientApplication'));
    }
    public function updateAnswer(Request $request, $id){
        applicationForPersonalCounseling::find($id)->update([
            'email' => $request->email,
            'answer' => $request->answer,
        ]);
        return redirect()->route('client.application')->with('success', 'Answer Updated Successfully');
    }
    public function deleteApplication($id)
    {
        applicationForPersonalCounseling::find($id)->delete();
        return redirect()->back()->with('success', 'Application deleted successfully');

    }
}

