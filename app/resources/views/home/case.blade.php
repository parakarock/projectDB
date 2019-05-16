@extends('layouts.app')
@section('css')
<style>
    div label { 
        font-size: 150%;
        color: #F4D03F;
        }
    div p { 
        font-size: 150%;
        color: #F4D03F;
        }


</style>
@endsection


@section('head')
<li class="nav-item">
    <a class="nav-link" href="/"><i class="fa fa-home"></i> หน้าแรก</a>
    <!-- <a class="nav-link" href="/">หน้าแรก -->
</li>
<li class="nav-item active">
    <a class="nav-link" href="/case"><i class="fa fa-pencil"></i> แจ้งความ
        <span class="sr-only">(current)</span>
    </a>
</li>
@endsection

@section('flash-message')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <div class='a'>
            <h1 style="background-color:Violet; padding-top:10px; padding-bottom:10px;" class="mt-5">แจ้งความ</h1>
            <p class="lead">====================================================================================================</p>
            <div class="panel-heading">
                <form method="post" action="">

                    <div class="text-left">
                        <form method="post" action="{{ route('case.store') }}">
                            {{ csrf_field() }}
                            <div class="col-sm-5">
                                <label for="OwnerCar">ทะเบียนรถยนต์ :</label>
                                <select name="OwnerCar" class="form-control">
                            </div>
                                @foreach($cars as $row)
                                <option value="{{ $row->Car_Licence }}">{{ $row->Car_Licence }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="text-left">
                        <div class="col-sm-5 form-group{{ $errors->has('Case_Detail') ? ' has-error' : '' }}">
                            <label for="Case_Detail">ข้อหา : </label>
                            <input type="text" name="Case_Detail" class="form-control">
                            <small class="text-danger">{{ $errors->first('Case_Detail') }}</small>
                        </div>
                    </div>
                    <div class="text-left">
                        <div class="col-sm-5 form-group{{ $errors->has('Case_WhoName') ? ' has-error' : '' }}">
                            <label for="Case_WhoName">ชื่อผู้แจ้ง : </label>
                            <input type="text" name="Case_WhoName" class="form-control">
                            <small class="text-danger">{{ $errors->first('Case_WhoName') }}</small>
                        </div>
                    </div>
                    <div class="text-left">
                        <div class="col-sm-5 form-group{{ $errors->has('Case_Phone') ? ' has-error' : '' }}">
                            <label for="Case_Phone">เบอร์โทรผู้แจ้ง : </label>
                            <input type="text" name="Case_Phone" class="form-control">
                            <small class="text-danger">{{ $errors->first('Case_Phone') }}</small>
                        </div>
                    </div>
                    <div class="text-left">
                        <div class="col-sm-5">
                            <label for="Station">สถานี :</label>
                            <select name="Station" class="form-control">
                        </div>
                            @foreach($policestations as $row)
                            <option value="{{ $row->Station_ID }}">{{ $row->Station_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-save"></i> บันทึก</button>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </div>
</div>
@endsection