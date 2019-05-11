<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use DB;

class UserController extends Controller
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
        $request->validate(
            [
                'User_Citizen' => 'required|max:13',
                'User_Name' => 'required|max:150',
                'User_Lname' => 'required|max:100',
                'User_BirthDay' => 'required',
                'User_Country' => 'required|max:100',
                'User_Province' => 'required|max:100',
                'User_Post' => 'required|max:5',
                'User_Address' => 'required|max:150'
            ]
            );
    
        $owner = new Users;
        $owner->User_Citizen = $request->get('User_Citizen');
        $owner->User_Name = $request->get('User_Name');
        $owner->User_Lname = $request->get('User_Lname');
        $owner->User_BirthDay = date($request->get('User_BirthDay'));
        $owner->User_Country = $request->get('User_Country');
        $owner->User_Province = $request->get('User_Province');
        $owner->User_Post = $request->get('User_Post');
        $owner->User_Address = $request->get('User_Address');
        $owner->save(); 
        
        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

        
        return back()->with('success', 'บันทึกข้อมูลเจ้าของรถสำเร็จ!');
        return view('home.all',compact('data'));
        
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
