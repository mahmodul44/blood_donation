<?php

namespace App\Http\Controllers;

use App\Bedonar;
use Illuminate\Http\Request;

class BedonarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
 public function front_bedonarinsert(Request $request){
            $blood =new Bedonar;
            $blood->fullname=$request->fullname;
            $blood->mobileno=$request->mobileno;
            $blood->emailno=$request->emailno;
            $blood->age=$request->age;
            $blood->gender=$request->gender;
            $blood->bloodgroup=$request->bloodgroup;
            $blood->dod=$request->dod;
            $blood->address=$request->address;
            $blood->message=$request->message;
            $blood->save();
             //Set Message
        \Session::flash('message','Donar Added sucessfuly');
            return redirect()->route('bedonar');
    }

    public function Bpositive(){
        $bedonars=Bedonar::where('bloodgroup','B+')->get();
        return view('layouts.pages.Bpositive')->with('bedonars',$bedonars);
    }
    
    public function bedonar(Request $request){
        $donar =new Bedonar;
        $donar->fullname=$request->fullname;
        $donar->mobileno=$request->mobileno;
        $donar->emailno=$request->emailno;
        $donar->age=$request->age;
        $donar->gender=$request->gender;
        $donar->bloodgroup=$request->bloodgroup;
        $donar->dod=$request->dod;
        $donar->address=$request->address;
        $donar->message=$request->message;
        $donar->save();
        return redirect()->route('bedonar');
    }
    public function editblood_info($id){
        $bedonar=Bedonar::find($id);
        return view('layouts.pages.editblood_info')->with('bedonar',$bedonar);
    }
    public function updateblood_info(Request $request,$id){
        $donar=Bedonar::find($id);
      
        $donar->fullname=$request->fullname;
        $donar->mobileno=$request->mobileno;
        $donar->emailno=$request->emailno;
        $donar->age=$request->age;
        $donar->gender=$request->gender;
        $donar->bloodgroup=$request->bloodgroup;
        $donar->dod=$request->dod;
        $donar->address=$request->address;
        $donar->message=$request->message;
        $donar->update();
        // //Set Message
        // \Session::flash('message','Delete sucessfuly');
        return redirect()->route('home');
    }
    public function deleteblood_info($id){
        $bedonars=Bedonar::find($id);
        $bedonars->delete();
        return redirect()->route('Bpositive');
    }

    public function Apositive(){
        $Adonars = Bedonar::where('bloodgroup', 'A+')->get();
        return view('layouts.pages.Apositive')->with('Adonars',$Adonars);
    }
    public function ABpositive(){
        $ABdonars = Bedonar::where('bloodgroup', 'AB+')->get();
        return view('layouts.pages.ABpositive')->with('ABdonars',$ABdonars);
    }
    public function Opositive(){
        $Odonars = Bedonar::where('bloodgroup', 'O+')->get();
        return view('layouts.pages.Opositive')->with('Odonars',$Odonars);
    }
    public function Anegative(){
        $Anegative_donars = Bedonar::where('bloodgroup','A-')->get();
        return view('layouts.pages.Anegative')->with('Anegative_donars',$Anegative_donars);
    }
    public function Bnegative(){
        $Bnegative_donars = Bedonar::where('bloodgroup','B-')->get();
        return view('layouts.pages.Bnegative')->with('Bnegative_donars',$Bnegative_donars);
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
     * @param  \App\Bedonar  $bedonar
     * @return \Illuminate\Http\Response
     */
    public function show(Bedonar $bedonar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bedonar  $bedonar
     * @return \Illuminate\Http\Response
     */
    public function edit(Bedonar $bedonar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bedonar  $bedonar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bedonar $bedonar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bedonar  $bedonar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bedonar $bedonar)
    {
        //
    }
}
