<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use DB;

class BrandController extends Controller
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
                'Brand_Name' => 'required|max:100',
                'Brand_Genaration' => 'required|max:150',
                'Brand_Year' => 'required|max:4',
                'Brand_Type' => 'required|max:100',
                'Brand_Motor' => 'required|max:150',
                'Brand_Gas' => 'required|max:150'
                
            ]
            );

        $brand = new Brand;
        $brand->Brand_Name = $request->get('Brand_Name');
        $brand->Brand_Genaration = $request->get('Brand_Genaration');
        $brand->Brand_Year = $request->get('Brand_Year');
        $brand->Brand_Type = $request->get('Brand_Type');
        $brand->Brand_Motor = $request->get('Brand_Motor');
        $brand->Brand_Gas = $request->get('Brand_Gas');
        $brand->save();

       $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();
       return back()->with('success', 'บันทึกข้อมูลแบรนด์สำเร็จ!');
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
