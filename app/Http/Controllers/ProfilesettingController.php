<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\User;
use App\Models\Profile;
use Auth;
use Hash;
use App\Models\Clinic;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Http\Request;


class ProfilesettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    }
    public function setting()
    {
        $userID = Auth::user()->id;
        $user = User::where('id',$userID)->first();
        $data = Specialization:: all();
        $educations = Education::where('user_id',$userID)->first();
        $awards = Award::where('user_id',$userID)->first();
        $experiences = Experience::where('user_id',$userID)->first();
        $service = Service:: all();
        // dd($user);
        $profiles = Profile::Where('user_id',$userID)->first();
        
        $clinics = Clinic::Where('user_id',$userID)->first();
        return view('doctor-admin.profile_setting.index',compact('user','profiles','data','clinics','service','educations','awards','experiences'));
    }
    public function appointment()
    {
        return view('doctor-admin.appointment_details.index');
    }
    public function patient()
    {
        $patients = User::where('user_type', 'patient')->get();
        return view('doctor-admin.patient_detail.index',compact('patients'));
    }
    public function schedule()
    {
        return view('doctor-admin.schedule_timing.index');
    }
    public function reviewdetail()
    {
        return view('doctor-admin.review_detail.index');
    }
    public function changepassword()
    {
        return view('doctor-admin.change_password.index');
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
        
        $doctors = User::find($userID);
        $doctors->email = $request->email;
        $doctors->first_name = $request->first_name;
        $doctors->last_name = $request->last_name;
        $doctors->password =  Hash::make($request->password);
        $doctors->save();
        ////clinic save/////
        
        $clinicsData = Clinic::where('user_id',$userID)->first();
        if(empty($clinicsData))
        {
            $clinics = new Clinic;
            $clinics->user_id = $userID;
            $clinics->name = $request->name;
            $clinics->address = $request->address;
            // $clinics->image = $clinicImage;
            $clinics->save();
        }
        else{
            $clinics = Clinic::find($clinicsData->id);
            $clinics->user_id = $userID;
            $clinics->name = $request->name;
            $clinics->address = $request->address;
            // $clinics->image = $clinicImage;
            $clinics->save();
        }
        if($request->has('icon')){
            $clinicImage = time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('images'), $clinicImage);
            $clinic_update=Clinic::where('user_id',$userID)->update([
                'image'=>$clinicImage
            ]);
        }
        $clinicsData = Clinic::where('user_id',$userID)->first();
        
        /////profile//// 
        $profiles = Profile::where('user_id',$userID)->first();
        if(isset($profiles)){
            $profiles = Profile::find($profiles->id);
            $profiles->user_id = $userID;
            $profiles->phone_no = $request->phone_no;
            $profiles->whattsapp_no = $request->whattsapp_no;
            $profiles->address = $request->address;
            $profiles->age = $request->age;
            $profiles->about = $request->about;
            $profiles->fee = $request->fee;
         

            // $profiles->image = $imageName;
            $profiles->service_id = $request->service_id;
            $profiles->specialization_id = $request->specilization_id;
            $profiles->save();
        }
        else{
            $profiles = new Profile;
            $profiles->user_id = $userID;
            $profiles->phone_no = $request->phone_no;
            $profiles->whattsapp_no = $request->whattsapp_no;
            $profiles->address = $request->address;
            $profiles->age = $request->age;
            $profiles->about = $request->about;
            $profiles->fee = $request->fee;
            // $profiles->image = $imageName;
            $profiles->service_id = $request->service_id;
            $profiles->specialization_id = $request->specilization_id;    
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
        // return $profiles;

       
       
       
        ////////specialization/////

        ////////Education/////
        $educations = Education::where('user_id',$userID)->first();
        if(isset($educations))
        {
            $educations = Education::find($educations->id);
            $educations->user_id = $userID;
            $educations->college = $request->college;
            $educations->Degree = $request->Degree;
            $educations->start_year = $request->start_year;
            $educations->end_year = $request->end_year;
            $educations->save();
        }
        else{
            $educations = new Education();
            $educations->user_id = $userID;
            $educations->college = $request->college;
            $educations->Degree = $request->Degree;
            $educations->start_year = $request->start_year;
            $educations->end_year = $request->end_year;
            $educations->save();
        }
       
        // ////////Experience/////
        $experiences = Experience::where('user_id',$userID)->first();
        if(isset($experiences)){
            $experiences = Experience::find($experiences->id);
            $experiences->user_id = $userID;
            $experiences->hospital_name = $request->hospital_name;
            $experiences->start_year = $request->start_year;
            $experiences->end_year = $request->end_year;
            $experiences->save();
        }
        else{
            $experiences = new Experience();
            $experiences->user_id = $userID;
            $experiences->hospital_name = $request->hospital_name;
            $experiences->start_year = $request->start_year;
            $experiences->end_year = $request->end_year;
            $experiences->save();
        }
       
        // ////////Awards/////
        $awards = Award::where('user_id',$userID)->first();
        if(isset($awards)){
            $awards = Award::find($awards->id);
            $awards->user_id = $userID;
            $awards->award_title = $request->award_title;
            $awards->award_description = $request->award_description;
            $awards->award_date = $request->award_date;
            $awards->save();
        }
        else
        {
            $awards = new Award;
            $awards->user_id = $userID;
            $awards->award_title = $request->award_title;
            $awards->award_description = $request->award_description;
            $awards->award_date = $request->award_date;
            $awards->save();
        }
        $user = User::where('id',$userID)->first();
        $data = Specialization:: all();
        $educations = Education::where('user_id',$userID)->first();
        $awards = Award::where('user_id',$userID)->first();
        $experiences = Experience::where('user_id',$userID)->first();
        $service = Service:: all();
        // dd($user);
        $profiles = Profile::Where('user_id',$userID)->first();
        
        $clinics = Clinic::Where('user_id',$userID)->first();
        return view('doctor-admin.app',compact('user','profiles','data','clinics','service','educations','awards','experiences'));
      
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
