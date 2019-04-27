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
            <h1 class="mt-5">ค้นหาเจ้าของรถ</h1>

            <p class="lead">-------------------------------------------------------------</p>
            <div class="containe">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-10">
                        <form action="/search" method="POST" role="search" class="card card-sm">
                            {{ csrf_field() }}
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-search h4 text-body"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" name="q" type="search" placeholder="ทะเบียนรถ">
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-success" type="submit">Search</button>
                                </div>
                                <!--end of col-->
                            </div>
                        </form>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="text-right">
                            <br>
                            <input type="button" value="All" class="btn btn-primary" style="width:110px;height:50px" onclick="window.location.href='/all'">
                        </div>
                    </div>
                </div>
            </div>

            @if(isset($details))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car_License</th>
                        <th scope="col">Car_Color</th>
                        <th scope="col">Brand_Name</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <?php $i=1; ?> @foreach($details as $row)
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $i++; ?>
                        </th>
                        <td>{{ $row->Car_Licence }}</td>
                        <td>{{ $row->Car_Color }}</td>
                        <td>{{ $row->Brand_Name }}</td>
                        <td><a href="{{ route('home.edit',$row->Car_Licence) }}" class="btn btn-warning">Detail</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @elseif(isset($message))
            <p> {{ $message }}</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Car_License</th>
                        <th scope="col">Car_Color</th>
                        <th scope="col">Brand_Name</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <?php $i=1; ?> @foreach($data as $row)
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $i++; ?>
                        </th>
                        <td>{{ $row->Car_Licence }}</td>
                        <td>{{ $row->Car_Color }}</td>
                        <td>{{ $row->Brand_Name }}</td>
                        <td><a href="{{ route('home.edit',$row->Car_Licence) }}" class="btn btn-warning">Detail</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @endif
        </div>
    </div>
</div>
@endsection