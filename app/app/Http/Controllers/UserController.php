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
        $rules = 
            [
                'User_Citizen' => 'required|max:13',
                'User_Name' => 'required|max:150',
                'User_Lname' => 'required|max:150',
                'User_BirthDay' => 'required',
                'User_Country' => 'required|max:100',
                'User_Province' => 'required|max:100',
                'User_Post' => 'required|max:5',
                'User_Address' => 'required|max:150'
            ];
            $customMessages = [
                'User_Citizen.required' => 'กรุณากรอกบัตรประชาชน',
                'User_Citizen.max' => 'กรุณากรอกเลขไม่เกิน 13 หลัก',
                'User_Name.required' => 'กรุณากรอกชื่อ',
                'User_Name.max' => 'กรุณากรอกตัวอักษรไม่เกิน 150 ตัว',
                'User_Lname.required' => 'กรุณากรอกนามสกุล',
                'User_Lname.max' => 'กรุณากรอกตัวอักษรไม่เกิน 150 ตัว',
                'User_BirthDay.required' => 'กรุณาใส่วันเกิด',
                'User_Country.required' => 'กรุณากรอกชื่อประเทศ',
                'User_Country.max' => 'กรุณากรอกตัวอักษรไม่เกิน 100 ตัว',
                'User_Province.required' => 'กรุณากรอกชื่อจังหวัด',
                'User_Province.max' => 'กรุณากรอกตัวอักษรไม่เกิน 100 ตัว',
                'User_Post.required' => 'กรุณากรอกรหัสไปรษณีย์',
                'User_Post.max' => 'กรุณากรอกตัวอักษรไม่เกิน 5 ตัว',
                'User_Address.required' => 'กรุณากรอกที่อยู่',
                'User_Address.max' => 'กรุณากรอกตัวอักษรไม่เกิน 150 ตัว'
            ];

             $this->validate($request, $rules, $customMessages);


        $co = DB::table('Users')
                     ->select('User_Citizen')
                     ->where('User_Citizen', '=', $request->get('User_Citizen'))
                     ->get();
        
        $countofopps = count($co);
        if ( $countofopps > 0) {
            return back()->with('error', 'รหัสบัตรประชาชนซ้ำ กรุณากรอกใหม่!');
        }
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

        return back()->with('success', 'บันทึกข้อมูลเจ้าของรถสำเร็จ!');
    
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
