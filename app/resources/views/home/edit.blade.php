@extends('layouts.app') 
@section('head')
<li class="nav-item active">
<a class="nav-link" href="#">หน้าแรก
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">แจ้งความ</a>
</li>
@endsection
 
@section('content') @csrf
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Edit</h1>
            <p class="lead">-------------------------------------------------------------</p>
            @foreach ($data as $value)
            <h1>ข้อมูลรถ</h1>
            <p class="text-left">ทะเบียนรถยนต์ : {{ $value->Car_Licence }} </p>
            <p class="text-left">สีรถยนต์ :{{ $value->Car_Color }} </p>
            <p class="text-left">แบรนด์ :{{ $value->Brand_Name }} </p>
            <p class="text-left">รุ่น : {{ $value->Brand_Genaration }} </p>
            <p class="text-left">ปีที่ผลิต : {{ $value->Brand_Year }} </p>
            <p class="text-left">ประเภทรถยนต์ : $value->Brand_Type </p>
            <p class="text-left">เครื่องยนต์ : {{ $value->Brand_Motor }} </p>
            <p class="text-left">น้ำมันที่ใช้ : {{ $value->Brand_Gas }} </p>
            <br>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>ข้อมูลเจ้าของรถ</h1>
            <p class="text-left">เลขประจำตัวประชาชน : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_Citizen }}' >
            <p class="text-left">ชื่อ : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_Name }}' >
            <p class="text-left">นามสกุล : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_Lname }}' >
            <p class="text-left">วันเกิด : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_BirthDay }}' >
            <p class="text-left">ประเทศ : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_Country }}' >
            <p class="text-left">จังหวัด : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_Province }}' >
            <p class="text-left">รหัสไปรษณีย์ : </p>
            <input type="text" class="form-control" id="usr" value='{{ $value->User_Post }}' >
            
            <div class="text-left">
                <label for="User_Address">ที่อยู่ : </label>
                <textarea class="form-control" name="User_Address" rows="3"></textarea>
            </div>
            @endforeach
            <br>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>คดี</h1>
            @if (count($case) === 0) ไม่พบข้อมูล @else @foreach ($case as $value)
            <p class="text-left">ข้อหา : {{ $value->Case_Detail }} </p>
            <p class="text-left">วันที่ออกรถ : {{ $value->Case_Date }} </p>
            @endforeach @endif
            <div class="text-right">
                <button class="btn btn-lg btn-success" type="submit">Save</button>
            </div>

        </div>
    </div>
</div>
@endsection