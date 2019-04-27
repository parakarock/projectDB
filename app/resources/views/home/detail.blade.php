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
 
@section('content') @csrf
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Detail</h1>
            <p class="lead">-------------------------------------------------------------</p>
            @foreach ($data as $value)
            <h1>ข้อมูลรถ</h1>
            <p class="text-left">{{ $value->Car_Licence }}</p>
            <p class="text-left">{{ $value->Car_Color }}</p>
            <p class="text-left">{{ $value->Brand_Name }}</p>
            <p class="text-left">{{ $value->Brand_Genaration }}</p>
            <p class="text-left">{{ $value->Brand_Year }}</p>
            <p class="text-left">{{ $value->Brand_Type }}</p>
            <p class="text-left">{{ $value->Brand_Motor }}</p>
            <p class="text-left">{{ $value->Brand_Gas }}</p>
            <h1>ข้อมูลเจ้าของรถ</h1>
            <p class="text-left">{{ $value->User_Citizen }}</p>
            <p class="text-left">{{ $value->User_Name }}</p>
            <p class="text-left">{{ $value->User_Lname }}</p>
            <p class="text-left">{{ $value->User_BirthDay }}</p>
            <p class="text-left">{{ $value->User_Country }}</p>
            <p class="text-left">{{ $value->User_Province }}</p>
            <p class="text-left">{{ $value->User_Post }}</p>
            <p class="text-left">{{ $value->User_Address }}</p>
            @endforeach
            <h1>คดี</h1>
            @if (count($case) === 0) ไม่พบข้อมูล @else @foreach ($case as $value)
            <p class="text-left">{{ $value->Case_Detail }}</p>
            <p class="text-left">{{ $value->Case_Date }}</p>
            @endforeach @endif

        </div>
    </div>
</div>
@endsection