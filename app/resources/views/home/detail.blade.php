@extends('layouts.app') 

@section('css')
<style>
     a#a { 
        font-size: 150%;
        color: #F4D03F;
        }

    a#b {
        font-size: 150%;
        color: #ECF0F1;
        }

    div p { 
        font-size: 150%;
        color: #F4D03F;
        }

    h2 { 
        color:#000080;
        } 

</style>
@endsection


@section('head')

<li class="nav-item active">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> หน้าแรก
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/case"><i class="fa fa-pencil"></i> แจ้งความ </a>
</li>
@endsection
 
@section('content') @csrf
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class='a'>
            <h1 style="background-color:Violet; padding-top:10px; padding-bottom:10px;" class="mt-5">รายละเอียด</h1>
            <p class="lead">====================================================================================================</p>
            @foreach ($data as $value)
            
            <div class="text-left">
            <h2 >-----ข้อมูลรถ-----</h2>
            <a class="text" id='a'>ทะเบียนรถยนต์ : </a>
            <a class="text" id='b'> {{ $value->Car_Licence }} </a>
            <br>
            <a class="text" id='a'>สีรถยนต์ : </a>
            <a class="text" id='b'> {{ $value->Car_Color }} </a>
            <br>
            <a class="text" id='a'>แบรนด์ : </a>
            <a class="text" id='b'> {{ $value->Brand_Name }} </a>
            <br>
            <a class="text" id='a'>รุ่น : </a>
            <a class="text" id='b'> {{ $value->Brand_Genaration }} </a>
            <br>
            <a class="text" id='a'>ปีที่ผลิต : </a>
            <a class="text" id='b'> {{ $value->Brand_Year }} </a>
            <br>
            <a class="text" id='a'>ประเภทรถยนต์ : </a>
            <a class="text" id='b'> {{ $value->Brand_Type }} </a>
            <br>
            <a class="text" id='a'>เครื่องยนต์ : </a>
            <a class="text" id='b'> {{ $value->Brand_Motor }} </a>
            <br>
            <a class="text" id='a'>น้ำมันที่ใช้ : </a>
            <a class="text" id='b'> {{ $value->Brand_Gas }} </a>
            <br>
            <p class="lead">====================================================================================================</p>
            <h2>--ข้อมูลเจ้าของรถ--</h2>
            <a class="text" id='a'>เลขประจำตัวประชาชน :</a>
            <a class="text" id='b'> {{ $value->User_Citizen }} </a>
            <br>
            <a class="text" id='a'>ชื่อ : </a>
            <a class="text" id='b'> {{ $value->User_Name }} </a>
            <br>
            <a class="text" id='a'>นามสกุล : </a>
            <a class="text" id='b'> {{ $value->User_Lname }} </a>
            <br>
            <a class="text" id='a'>วันเกิด : </a>
            <a class="text" id='b'> {{ $value->User_BirthDay }} </a>
            <br>
            <a class="text" id='a'>ประเทศ : </a>
            <a class="text" id='b'> {{ $value->User_Country }} </a>
            <br>
            <a class="text" id='a'>จังหวัด : {{ $value->User_Province }}</a>
            <a class="text" id='b'> {{ $value->User_Province }} </a>
            <br>
            <a class="text" id='a'>รหัสไปรษณีย์ : </a>
            <a class="text" id='b'> {{ $value->User_Post }} </a>
            <br>
            <a class="text" id='a'>ที่อยู่ : </a>
            <a class="text" id='b'> {{ $value->User_Address }} </a>
            @endforeach
            <br>
            <p class="lead">====================================================================================================</p>
            <h2>------คดี------</h2>
            @if (count($case) === 0) <a class="text" style="color: MAROON; font-size: 130%" >ไม่พบข้อมูล</a> @else @foreach ($case as $value)
            <a class="text" id='a'>ข้อหา : </a>
            <a class="text" id='b'> {{ $value->Case_Detail }} </a>
            <br>
            <a class="text" id='a'>วันที่แจ้ง : </a>
            <a class="text" id='b'> {{ $value->Case_Date }} </a>
            <br>

            @endforeach @endif
            </div>

            </div>
        </div>
    </div>
</div>
@endsection