<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $specializations = Specialization::all();
        return View('frontend.dashboard', compact('specializations'));
    }
    public function admin()
    {
        return view('admin.app');
    }
    public function doctor()
    {
        $doctorID = Auth::user()->id;
        $appointments = Booking::where('doctor_id',$doctorID)->get();
        return view('doctor-admin.app',compact('appointments'));
    }

    public function delete_appointment($id)
    {
        $appointmentDelete = Booking::where('id',$id)->first();
        $appointmentDelete->delete();
        return redirect('doctor');
    }
    public function patient()
    {
        return view('patient.app');
    }
}
