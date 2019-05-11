@extends('layouts.app')
@section('css')
<style>
    div.a {
        font-size: 150%;
        color: #ffffff;
    }
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















@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class='a'>
                <h1 class="mt-5">Insert</h1>
                <p class="lead">
                    ====================================================================================================
                </p>
                <p class="lead">ข้อมูลเจ้าของรถ</p>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <form method="post" action="{{ route('user.store') }}">
                            {{ csrf_field() }}


                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Citizen') ? ' has-error' : '' }}">
                                    <label for="User_Citizen">หมายเลขบัตรประชาชน : </label>
                                    <input type="text" name="User_Citizen" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_Citizen') }}</small>
                                </div>
                            </div>


                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Name') ? ' has-error' : '' }}">
                                    <label for="User_Name">ชื่อ : </label>
                                    <input type="text" name="User_Name" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_Name') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Lname') ? ' has-error' : '' }}">
                                    <label for="User_Lname">นามสกุล : </label>
                                    <input type="text" name="User_Lname" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_Lname') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_BirthDay') ? ' has-error' : '' }}">
                                    <label for="User_BirthDay">วันเกิด : </label>
                                    <input type="date" name="User_BirthDay" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_BirthDay') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Country') ? ' has-error' : '' }}">
                                    <label for="User_Country">ประเทศ : </label>
                                    <input type="text" name="User_Country" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_Country') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Province') ? ' has-error' : '' }}">
                                    <label for="User_Province">จังหวัด : </label>
                                    <input type="text" name="User_Province" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_Province') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Post') ? ' has-error' : '' }}">
                                    <label for="User_Post">รหัสไปรษณีย์ : </label>
                                    <input type="text" name="User_Post" class="form-control">
                                    <small class="text-danger">{{ $errors->first('User_Post') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('User_Address') ? ' has-error' : '' }}">
                                    <label for="User_Address">ที่อยู่ : </label>
                                    <textarea class="form-control" name="User_Address" rows="5"></textarea>
                                    <small class="text-danger">{{ $errors->first('User_Address') }}</small>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-lg btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                        <p class="lead">-----------------------------------------------------------------------------
                        </p>
                        <p class="lead">ข้อมูลแบรนด์</p>
                        <form method="post" action="{{ route('brand.store') }}">
                            {{ csrf_field() }}
                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Brand_Name') ? ' has-error' : '' }}">
                                    <label for="Brand_Name">ชื่อแบรนด์ : </label>
                                    <input type="text" name="Brand_Name" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Brand_Name') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Brand_Genaration') ? ' has-error' : '' }}">
                                    <label for="Brand_Genaration">รุ่น : </label>
                                    <input type="text" name="Brand_Genaration" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Brand_Genaration') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Brand_Year') ? ' has-error' : '' }}">
                                    <label for="Brand_Year">ปีที่ผลิต : </label>
                                    <input type="text" name="Brand_Year" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Brand_Year') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Brand_Type') ? ' has-error' : '' }}">
                                    <label for="Brand_Type">ประเภทรถยนต์ : </label>
                                    <input type="text" name="Brand_Type" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Brand_Type') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Brand_Motor') ? ' has-error' : '' }}">
                                    <label for="Brand_Motor">เครื่องยนต์ : </label>
                                    <input type="text" name="Brand_Motor" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Brand_Motor') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Brand_Gas') ? ' has-error' : '' }}">
                                    <label for="Brand_Gas">น้ำมันที่ใช้ : </label>
                                    <input type="text" name="Brand_Gas" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Brand_Gas') }}</small>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-lg btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                        <p class="lead">-----------------------------------------------------------------------------
                        </p>
                        <p class="lead">ข้อมูลรถยนต์</p>
                        <form method="post" action="{{ route('car.store') }}">
                            {{ csrf_field() }}
                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Car_Licence') ? ' has-error' : '' }}">
                                    <label for="Car_Licence">ทะเบียน : </label>
                                    <input type="text" name="Car_Licence" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Car_Licence') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Car_Color') ? ' has-error' : '' }}">
                                    <label for="Car_Color">สีรถยนต์ : </label>
                                    <input type="text" name="Car_Color" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Car_Color') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5 form-group{{ $errors->has('Car_Outday') ? ' has-error' : '' }}">
                                    <label for="Car_Outday">วันที่ออกรถ : </label>
                                    <input type="date" name="Car_Outday" class="form-control">
                                    <small class="text-danger">{{ $errors->first('Car_Outday') }}</small>
                                </div>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5">
                                    <label for="User">เลขประจำตัวประชาชน : </label>
                                    <select name="User" class="form-control">
                                </div>
                                @foreach($users as $row)
                                <option value="{{ $row->User_Citizen }}">{{ $row->User_Citizen }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="text-left">
                                <div class="col-sm-5">
                                    <label for="Brand">ยี่ห้อรถ : </label>
                                    <select name="Brand" class="form-control">
                                </div>
                                @foreach($brands as $row)
                                <option value="{{ $row->Brand_ID }}">{{ $row->Brand_Name }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div>
                                <button class="btn btn-lg btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection