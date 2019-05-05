@extends('layouts.app') 

@section('css')
<style>
    div.a { 
        font-size: 150%;
        color:#ffffff; }

</style>
@endsection


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
 
@section('content') @csrf
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class='a'>
            <h1 class="mt-5">Detail</h1>
            <p class="lead">====================================================================================================</p>
            @foreach ($data as $value)
            <h1>ข้อมูลรถ</h1>
            <p class="text-left">ทะเบียนรถยนต์ : {{ $value->Car_Licence }}</p>
            <p class="text-left">สีรถยนต์ : {{ $value->Car_Color }}</p>
            <p class="text-left">แบรนด์ : {{ $value->Brand_Name }}</p>
            <p class="text-left">รุ่น : {{ $value->Brand_Genaration }}</p>
            <p class="text-left">ปีที่ผลิต : {{ $value->Brand_Year }}</p>
            <p class="text-left">ประเภทรถยนต์ : {{ $value->Brand_Type }}</p>
            <p class="text-left">เครื่องยนต์ : {{ $value->Brand_Motor }}</p>
            <p class="text-left">น้ำมันที่ใช้ : {{ $value->Brand_Gas }}</p>
            <br>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>ข้อมูลเจ้าของรถ</h1>
            <p class="text-left">เลขประจำตัวประชาชน : {{ $value->User_Citizen }}</p>
            <p class="text-left">ชื่อ : {{ $value->User_Name }}</p>
            <p class="text-left">นามสกุล : {{ $value->User_Lname }}</p>
            <p class="text-left">วันเกิด : {{ $value->User_BirthDay }}</p>
            <p class="text-left">ประเทศ : {{ $value->User_Country }}</p>
            <p class="text-left">จังหวัด : {{ $value->User_Province }}</p>
            <p class="text-left">รหัสไปรษณีย์ : {{ $value->User_Post }}</p>
            <p class="text-left">ที่อยู่ : {{ $value->User_Address }}</p>
            @endforeach
            <br>
            <p class="lead">-------------------------------------------------------------</p>
            <h1>คดี</h1>
            @if (count($case) === 0) ไม่พบข้อมูล @else @foreach ($case as $value)
            <p class="text-left">ข้อหา : {{ $value->Case_Detail }}</p>
            <p class="text-left">วันที่แจ้ง : {{ $value->Case_Date }}</p>
            @endforeach @endif
            

            </div>
        </div>
    </div>
</div>
@endsection