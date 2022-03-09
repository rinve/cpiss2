<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motivation;
use Illuminate\Support\Carbon;

class MotivationController extends Controller
{
    public function motivation(){
        $motivation = Motivation::latest()->paginate(4);
        return view('admin.home.motivation.index', compact('motivation'));
    }
    public function addMotivation(){
        return view('admin.home.motivation.add');
    }
    public function storeMotivation(Request $request){
        Motivation::insert([
            'details' => $request->details,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('motivation')->with('success', 'Motivation Added Successfully');

    }
    public function editMotivation($id){
        $motivation = Motivation::find($id);
        return view('admin.home.motivation.edit', compact('motivation'));
    }
    public function updateMotivation(Request $request, $id){
        Motivation::find($id)->update([
            'details' => $request->details,
        ]);
        return redirect()->route('motivation')->with('success', 'Motivation Updated Successfully');

    }
    public function delete($id){
        Motivation::find($id)->delete();
        return redirect()->back()->with('success', 'Motivation deleted successfully');

    }
}
