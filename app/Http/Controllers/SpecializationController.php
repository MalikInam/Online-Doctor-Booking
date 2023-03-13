<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Specialization:: all();
        return view('admin.specialization.index', compact('data'));
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        $speciality = new Specialization();
        $speciality->name = $request->name;
        $speciality->image = $imageName;
        // dd($speciality);
        $speciality->save();
        return redirect('specialities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function show(Specialization $specialization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $speciality = Specialization::find($id);
        return view('admin.specialization.edit',compact('speciality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
        $speciality = Specialization:: find($id);
        $speciality->name = $request->name;
        $speciality->image = $imageName;
        $speciality->save();
        return redirect('specialities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $speciality= Specialization::find($id);
        $speciality->delete();
        return redirect('specialities');
    }
}
