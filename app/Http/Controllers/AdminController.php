<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.app');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctor()
    {
       $doctor = User::where('user_type','doctor')->with('profile', 'profile.speciality')->get();
    //    return ($doctor);
       return view('admin.doctors.create',compact('doctor'));
    }
    public function patient()
    {
       $patient = User::where('user_type','patient')->with('profile')->get();
       return view('admin.patients.index',compact('patient'));
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
    public function delete($id)
    {
        {
            $doctor =User::find($id);
            $doctor->delete();
            return redirect('doctors')->with('deleted','Data Delete Successfully');
        }
    }
    public function destory($id)
    {
        {
            $patient =User::find($id);
            $patient->delete();
            return redirect('patients')->with('deleted','Data Delete Successfully');
        }
    }



    //search paitnet
    public function search(Request $request)
    {
        if($request->ajax())
        {
        $output="";
        $users=DB::table('users')->where('last_name','LIKE','%'.$request->search."%")->first();
        $profile = Profile::where('user_id',$users->id)->first();
        if($profile)
        {
                  $output.='<tr>'.
                '<td>'.$users->id.'</td>'.
                '<td>'.$users->first_name. ' '. $users->last_name.'</td>'.
                '<td>'.$profile->age.'</td>'.
                '<td>'.$profile->address.'</td>'.
                '<td>'.$profile->phone_no.'</td>'.
                '<td>'.
                '<a href="admin/patients/destory/'.$users->id.'">'. 'Delete' .'</a>'.

                '</td>'.
                '<td>'.'Paid'.'</td>'.
                '<td>'.'Checkup Completed'.'</td>'.

           '</tr>';
           
        return Response($output);
        }
        }
    }
}
    

