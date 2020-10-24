<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serial;

class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serials = Serial::latest()->get();
        return view('serials.index', compact('serials'));
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
        $status = Serial::query()->create($request->all());
        if($status){
            session()->flash('success','They will contact with you');
            return redirect()->route('welcome');
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
    public function edit($id, $num)
    {
        $serial = Serial::find($id);
        // return $serial;
        if ($num == 0) {
            $serial->status = 1;
            $status= $serial->update();
            if($status){
                // session()->flash('success','Serial Confirmed');
                return redirect()->back();
            }
        }

        if ($num == 1) {
            $serial->status = 0;
            $status = $serial->update();
            if($status){
                // session()->flash('success','Serial Pending');
                return redirect()->back();
            }
        }
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
        $serial = Serial::find($id);
            $status = $serial->delete();
            if($status){
                session()->flash('success','Serial Deleted');
                return redirect()->back();
            }
    }

}
