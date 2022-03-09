<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CounselingQuestion;


class CounselingController extends Controller
{
    public function counseling(){
        $counselings = CounselingQuestion::latest()->paginate(3);
        return view('admin.counseling.index', compact('counselings'));
    }
    public function giveAnswer($id){
        $counselings = CounselingQuestion::find($id);
        return view('admin.counseling.answer', compact('counselings'));
    }
    public function storeAnswer(Request $request, $id){
        CounselingQuestion::find($id)->update([
            'message' => $request->message,
            'answer' => $request->answer,
            'status' => 1,
        ]);
        return redirect()->route('counselings')->with('success', 'Gave Answer Successfully');
    }
    public function editAnswer($id){
        $counselings = CounselingQuestion::find($id);
        return view('admin.counseling.edit_answer', compact('counselings'));
    }
    public function updateAnswer(Request $request, $id){
        CounselingQuestion::find($id)->update([
            'message' => $request->message,
            'answer' => $request->answer,
        ]);
        return redirect()->route('counselings')->with('success', 'Answer Updated Successfully');
    }
    public function delete($id)
    {
        CounselingQuestion::find($id)->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');

    }

}
