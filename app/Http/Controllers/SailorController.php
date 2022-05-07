<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sailorinfo = User::where('id',Auth::user()->id)->first();
        return view('dashboard',['sailorinfo'=>$sailorinfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if ($id = auth()->user()->id)
        {

            $sailorinfo = User::find($id);
            return view("editprofile", ['sailorinfo'=>$sailorinfo]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sailorinfo = User::findOrFail($request->id);
        $sailorinfo->update([
            $sailorinfo->name = $request->name,
            $sailorinfo->name_ar = $request->name_ar,
            $sailorinfo->nationality = $request->nationality,
            $sailorinfo->date_of_birth = $request->date_of_birth,
            $sailorinfo->place_of_birth = $request->place_of_birth,
            $sailorinfo->passport_number = $request->passport_number,
            $sailorinfo->passport_number = $request->passport_number,
            $sailorinfo->date_of_passpot_end = $request->date_of_passpot_end,
            $sailorinfo->naval_passport_number = $request->naval_passport_number,
            $sailorinfo->date_of_passport_naval_end = $request->date_of_passport_naval_end,
            $sailorinfo->nearest_airport = $request->nearest_airport,
            $sailorinfo->bank_name = $request->bank_name,
            $sailorinfo->bank_branch = $request->bank_branch,
            $sailorinfo->bank_address = $request->bank_address,
            $sailorinfo->account_number = $request->account_number,
            $sailorinfo->ibn_number = $request->ibn_number,
            $sailorinfo->swift_code = $request->swift_code,
            $sailorinfo->phone = $request->phone,
            $sailorinfo->email = $request->email,
            $sailorinfo->password = Hash::make($request->password)
        ]);

        if (request()->hasFile('image')) {

            request()->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /image
            // $request->file->store('image','public');
            $image = request()->file('image');
            $file = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath,$file);
            
            $sailorinfo->update(['image'=>$file]);
        }

        toastr()->success('Information has been Updated');
        return redirect()->route('dashboard'); 
        

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
