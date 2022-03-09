<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class AddressController extends Controller
{
    public function address(){
        $addresses = Address::latest()->paginate(4);
        return view('admin.additional.address.index', compact('addresses'));
    }
    public function addAddress(){
        return view('admin.additional.address.add');
    }
    public function storeAddress(Request $request){
        Address::insert([
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
            'map_link' => $request->map_link,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('address')->with('success','Address Added Successfully');
    }
    public function editAddress($id){
        $addresses = Address::find($id);
        return view('admin.additional.address.edit', compact('addresses'));
    }
    public function updateAddress(Request $request, $id){
        Address::find($id)->update([
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
            'map_link' => $request->map_link,
        ]);
        return redirect()->route('address')->with('success','Address Updated Successfully');
    }
    public function delete($id){
        Address::find($id)->delete();
        return redirect()->back()->with('success', 'Address Deleted Successfully');

    }
}
