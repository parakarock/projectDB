<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Cases;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DB::table('Car')
            ->select('Car_Licence')
            ->get();
        $policestations = DB::table('PoliceStation')
            ->select('Station_ID', 'Station_Name')
            ->get();
        return view('home.case', compact('cars', 'policestations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

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
                'Case_Detail' => 'required|max:100',
                'Case_WhoName' => 'required|max:150',
                'Case_Phone' => 'required|max:10',
                'OwnerCar' => 'required',
                'Station' => 'required'

            ];
       $customMessages = [
                'Case_Detail.required' => 'กรุณากรอกข้อหาที่จะแจ้ง',
                'Case_Detail.max' => 'กรุณากรอกตัวอักษรไม่เกิน 100 ตัว',
                'Case_WhoName.required' => 'กรุณากรอกชื่อคนแจ้งความ',
                'Case_WhoName.max' => 'กรุณากรอกตัวอักษรไม่เกิน 150 ตัว',
                'Case_Phone.required' => 'กรุณากรอกเบอร์โทรศัพท์',
                'Case_Phone.max' => 'กรุณากรอกตัวเลขไม่เกิน 10 ตัว'
            ];


            $this->validate($request, $rules, $customMessages);

        $case = new Cases;
        $case->Case_Detail = $request->get('Case_Detail');
        $case->Case_WhoName = $request->get('Case_WhoName');
        $case->Case_Phone = $request->get('Case_Phone');
        $case->OwnerCar = $request->get('OwnerCar');
        $case->Station = $request->get('Station');
        $case->save();

        return back()->with('success', 'บันทึกการแจ้งความสำเร็จ!');
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
