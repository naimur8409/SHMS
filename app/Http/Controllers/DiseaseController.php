<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\Doctor;
class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::latest()->get();
        return view('disease.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::latest()->get();
        return view('disease.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disease = New Disease;
        // return $request->doctor_id;
        $disease->name = $request->name;
        $disease->basic_treatment = $request->basic_treatment;
        $status = $disease->save();
        if($status){
            $disease->doctors()->attach($request->doctor_id);
            session()->flash('success',"Disease Created sccessfully");
            return redirect()->route('disease.list');
        }
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
        $disease = Disease::find($id);
        $doctors = Doctor::latest()->get();
        return view('disease.edit', compact('disease','doctors'));
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
        $Disease = Disease::find($id);
        $Disease->name = $request->name;
        $Disease->basic_treatment = $request->basic_treatment;
        $status = $Disease->update();
        if($status){

            $Disease->doctors()->sync($request->doctor_id);
            session()->flash('success',"Disease updated sccessfully");


            return redirect()->route('disease.list');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disease = New Disease;

        $disease->doctors()->detach($id);
        $status = Disease::find($id)->delete();
        if($status){

            session()->flash('success',"Disease deleted sccessfully");


            return redirect()->route('disease.list');
        }
    }
}
