<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MessageFromUser;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $contacts = MessageFromUser::latest()->paginate(3);
        return view('admin.contact.index', compact('contacts'));
    }
    public function giveAnswer($id){
        $contacts = MessageFromUser::find($id);
        return view('admin.contact.answer', compact('contacts'));
    }
    public function storeAnswer(Request $request, $id){
        MessageFromUser::find($id)->update([
            'message' => $request->message,
            'answer' => $request->answer,
            'status' => 1,
        ]);
        return redirect()->route('contact')->with('success', 'Gave Answer Successfully');
    }
    public function editAnswer($id){
        $contacts = MessageFromUser::find($id);
        return view('admin.contact.edit_answer', compact('contacts'));
    }
    public function updateAnswer(Request $request, $id){
        MessageFromUser::find($id)->update([
            'message' => $request->message,
            'answer' => $request->answer,
        ]);
        return redirect()->route('contact')->with('success', 'Answer Updated Successfully');
    }
    public function delete($id)
    {
        MessageFromUser::find($id)->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');

    }
}
