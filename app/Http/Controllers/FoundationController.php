<?php

namespace App\Http\Controllers;
use App\Models\Foundation;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FoundationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request){
        dd($request->file('fileToUpload'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('foundation.create_foundation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $user = Auth::user();
        

        if($request->hasFile('image')){
            $profileImageName = $user->id.'_image'.time().'.'.request()->image->getClientOriginalExtension();
            $path_profile_photo = $request->file('image')->storeAs('foundations_profile_photos',$profileImageName,'public');
            $recordDecisionName = $user->id.'_decision'.time().'.'.request()->recordDecision->getClientOriginalExtension();
            $path_decision = $request->file('recordDecision')->storeAs('record_decisions',$recordDecisionName,'public');
            $socialLetterName = $user->id.'_letter'.time().'.'.request()->socialLetter->getClientOriginalExtension();
            $path_social_letter = $request->file('socialLetter')->storeAs('social_letter',$socialLetterName,'public');
            // dd($request->file('image'));
        }
        
        $foundation = Foundation::create([
            'image'=> $path_profile_photo,
            'name' => $request->name,
            'govern' => $request->govern,
            'village' => $request->village,
            'state' => $request->state,
            'local' => $request->local,
            'management' => $request->management,
            'recordNumber' => $request->recordNumber,
            'recordYear' => $request->recordYear,
            'recordDate' => $request->recordDate,
            'description' => $request->description,
            'firstPersonName' => $request->firstPersonName,
            'firstPersonRole' => $request->firstPersonRole,
            'firstPersonPhone' => $request->firstPersonPhone,
            'secondPersonName' => $request->secondPersonName,
            'secondPersonRole' => $request->secondPersonRole,
            'secondPersonPhone' => $request->secondPersonPhone,
            'thirdPersonName' => $request->thirdPersonName,
            'thirdPersonRole' => $request->thirdPersonRole,
            'thirdPersonPhone' => $request->thirdPersonPhone,
            'landPhone' => $request->landPhone,
            'mobilePhone' => $request->mobilePhone,
            'fax' => $request->fax,
            'email' => $request->email,
            'recordDecision' => $path_decision,
            'socialLetter' => $path_social_letter,

            
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
