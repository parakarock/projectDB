@extends('layouts.app')









@section('head')
<li class="nav-item active">
    <a class="nav-link" href="/">หน้าแรก
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/case">แจ้งความ</a>
</li>
@endsection




@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Edit</h1>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>ข้อมูลรถ</h1>
            <p class="text-left">ทะเบียนรถยนต์ : {{ $item->Car_Licence }} </p>
            <p class="text-left">สีรถยนต์ :{{ $item->Car_Color }} </p>
            <p class="text-left">แบรนด์ :{{ $item->Brand_Name }} </p>
            <p class="text-left">รุ่น : {{ $item->Brand_Genaration }} </p>
            <p class="text-left">ปีที่ผลิต : {{ $item->Brand_Year }} </p>
            <p class="text-left">ประเภทรถยนต์ : {{ $item->Brand_Type }} </p>
            <p class="text-left">เครื่องยนต์ : {{ $item->Brand_Motor }} </p>
            <p class="text-left">น้ำมันที่ใช้ : {{ $item->Brand_Gas }} </p>
            <br>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>ข้อมูลเจ้าของรถ</h1>
            <form method="post" action="{{ route('car.update',$item->User_Citizen) }}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <p class="text-left" for="User_Citizen">เลขประจำตัวประชาชน : </p>
                    <input type="text" class="form-control"  value='{{ $item->User_Citizen }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_Name">ชื่อ : </p>
                    <input type="text" name="User_Name" class="form-control"  value='{{ $item->User_Name }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_Lname">นามสกุล : </p>
                    <input type="text" name="User_Lname" class="form-control"  value='{{ $item->User_Lname }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_BirthDay">วันเกิด : </p>
                    <input type="date" name="User_BirthDay" class="form-control"  value='{{ $item->User_BirthDay }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_Country">ประเทศ : </p>
                    <input type="text" name="User_Country" class="form-control"  value='{{ $item->User_Country }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_Province">จังหวัด : </p>
                    <input type="text" name="User_Province" class="form-control"  value='{{ $item->User_Province }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_Post">รหัสไปรษณีย์ : </p>
                    <input type="text" name="User_Post" class="form-control"  value='{{ $item->User_Post }}'>
                </div>
                <div class="form-group">
                    <p class="text-left" for="User_Address">ที่อยู่ : </p>
                    <input type="text" name="User_Address" class="form-control"  value='{{ $item->User_Address }}'>
                </div>
                <br>
                <div class="text-right">
                    <button class="btn btn-lg btn-success" type="submit">Save</button>
                </div>
            </form>
            <br>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>คดี</h1>
            @if (count($case) === 0) ไม่พบข้อมูล @else @foreach ($case as $value)
            <p class="text-left">ข้อหา : {{ $value->Case_Detail }} </p>
            <p class="text-left">วันที่แจ้ง : {{ $value->Case_Date }} </p>
            @endforeach @endif


        </div>
    </div>
</div>
@endsection