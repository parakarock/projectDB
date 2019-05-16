<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\users;
use DB;

class CarController extends Controller
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
        $users = DB::table('Users')
                ->select('User_Citizen')
                ->get();
        $brands = DB::table('Brand')
                ->select('Brand_ID','Brand_Genaration')
                ->get();

       return view('home.insert',compact('users','brands'));
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
                'Car_Licence' => 'required|max:10',
                'Car_Color' => 'required|max:150',
                'Car_Outday' => 'required'
                
                
            ];
        $customMessages = [
                'Car_Licence.required' => 'กรุณากรอกเลขทะเบียน',
                'Car_Licence.max' => 'กรุณากรอกตัวอักษรไม่เกิน 10 ตัว',
                'Car_Color.required' => 'กรุณากรอกสีของรถ',
                'Car_Color.max' => 'กรุณากรอกตัวอักษรไม่เกิน 150 ตัว',
                'Car_Outday.required' => 'กรุณากรอกเลือกวันที่ออกรถ'
            ];
         $this->validate($request, $rules, $customMessages);

        
        $car = new Car;
        $car->Car_Licence = $request->get('Car_Licence');
        $car->Car_Color = $request->get('Car_Color');
        $car->Car_Outday = date($request->get('Car_Outday'));
        $car->Brand = $request->get('Brand');
        $car->User = $request->get('User');
        $car->save();
        return redirect('all')->with('success', 'บันทึกข้อมูลรถยนต์สำเร็จ!');
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
        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->join('Users','Users.User_Citizen','=','Car.User')
                ->select('Car.Car_Licence',
                        'Car.Car_Color',
                        'Brand.Brand_Name',
                        'Brand.Brand_Genaration',
                        'Brand.Brand_Year',
                        'Brand.Brand_Type',
                        'Brand.Brand_Motor',
                        'Brand.Brand_Gas',
                        'Users.User_Citizen',
                        'Users.User_Name',
                        'Users.User_Lname',
                        'Users.User_BirthDay',
                        'Users.User_Country',
                        'Users.User_Province',
                        'Users.User_Post',
                        'Users.User_Address')
                ->where('Car.Car_Licence',$id)
                ->get();
        $case = DB::table('Case')
                ->join('Car','Car.Car_Licence','=','Case.OwnerCar')
                ->select('Case.Case_Detail',
                        'Case.Case_Date')
                ->where('Case.OwnerCar',$id)
                ->get();
        foreach ($data as $item){

        }
        
        return view('home.edit',compact('item','case'));
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
        $rules = 
            [
                'User_Name' => 'required|max:150',
                'User_Lname' => 'required|max:100',
                'User_BirthDay' => 'required',
                'User_Country' => 'required|max:100',
                'User_Province' => 'required|max:100',
                'User_Post' => 'required|max:5',
                'User_Address' => 'required|max:150'
            ];

        $customMessages = [
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
            
       
        
        users::where('User_Citizen', $id)->update( array('User_Name'=>$request->get('User_Name'),
                                                        'User_Lname'=>$request->get('User_Lname'),
                                                        'User_BirthDay'=>date($request->get('User_BirthDay')),
                                                        'User_Country'=>$request->get('User_Country'),
                                                        'User_Province'=>$request->get('User_Province'),
                                                        'User_Post'=>$request->get('User_Post'),
                                                        'User_Address'=>$request->get('User_Address') ));
        
        return redirect('all')->with('success', 'แก้ไขข้อมูลสำเร็จ!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::delete('delete from Car where Car_Licence = ?',[$id]);

        $data = DB::table('Car')
                ->join('Brand','Brand.Brand_ID','=','Car.Brand')
                ->select('Car.Car_Licence','Car.Car_Color','Brand.Brand_Name')
                ->get();

       return view('home.all',compact('data')); 
       
    }
}
