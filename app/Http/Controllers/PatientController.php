<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('patient.app');
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
        $userID = Auth::user()->id;
        
        $patients = User::find($userID);
        $patients->email = $request->email;
        $patients->first_name = $request->first_name;
        $patients->last_name = $request->last_name;
        $patients->save();
        $profiles = Profile::where('user_id',$userID)->first();
        if(isset($profiles)){
            $profiles = Profile::find($profiles->id);
            $profiles->user_id = $userID;
            $profiles->phone_no = $request->phone_no;
            $profiles->whattsapp_no = $request->whattsapp_no;
            $profiles->address = $request->address;
            $profiles->age = $request->age;
            $profiles->payment = $request->payment;

        
            $profiles->save();
        }
        else{
            $profiles = new Profile;
            $profiles->user_id = $userID;
            $profiles->phone_no = $request->phone_no;
            $profiles->whattsapp_no = $request->whattsapp_no;
            $profiles->address = $request->address;
            $profiles->age = $request->age;
            $profiles->payment = $request->payment;
            // $profiles->image = $imageName;   
            $profiles->save();
        }
        if($request->has('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);   
            $imageName = time() . '.' . $request['image']->extension();
            $request['image']->move(public_path('images'), $imageName);
            $profile_update=Profile::where('user_id',$userID)->update([
                'image'=>$imageName,
            ]);
        }
        $profiles = Profile::where('user_id',$userID)->first();
        $user = User::where('id',$userID)->first();
        // dd($user);
        $profiles = Profile::Where('user_id',$userID)->first();
        
      
        return view('patient.app',compact('user','profiles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request)
    {
     
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
    public function patientprofilesetting()

    {
        $userID = Auth::user()->id;
        $user = User::where('id', $userID)->first();

        // dd($user);
        $profiles = Profile::Where('user_id', $userID)->first();
        return view('patient.profile_setting.index', compact('user', 'profiles'));
    }
    public function password()
    {
        return view('patient.change_password.index');
    }
    public function searchdoctor()
    {
        $doctors = User::where('user_type', 'doctor')->with('education')->get();

        return view('patient.search_doctor.index', compact('doctors'));
    }
    public function appointment($id)
    {
        $AppointmentDoctor = User::where('id',$id)->first();
        $patient = Auth::user();
        // dd($patient);
        return view('patient.booking.index',compact('AppointmentDoctor','patient'));
    }
    public function viewprofile($id)
    {
        $doctors = User::where('user_type', 'doctor')->where('id', $id)->with('education', 'experience', 'award')->get();
        return view('patient.viewprofile.index', compact('doctors'));
    }

    public function appointment_store(Request $request)
    {
        $Appointments = new Booking;
        $Appointments->doctor_id  = $request->doctor_id;
        $Appointments->email    = $request->email;
        $Appointments->name  = $request->name;
        $Appointments->phone_number = $request->phone_number;
        $Appointments->whatsapp   = $request->whatsapp;
        $Appointments->address  = $request->address;
        $Appointments->age     = $request->age;
        $Appointments->payment     = $request->payment;
        $Appointments->save();
        return redirect('search_doctor');
    }
}
