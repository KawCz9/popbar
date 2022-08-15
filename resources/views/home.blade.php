@extends('layouts.layout_user')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2"></div>
            <div class="col-12 col-sm-11 col-md-7 devbanban" style="margin-top: 50px;">
                <br>
                <h4 align="center">แสดงรายชื่อโต๊ะ</h4>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                    <div class="alert alert-warning" role="alert">
                        <center>เวที</center>
                    </div>
                    <hr>
                    <div class="row justify-content-center" style="margin-bottom: 20px;">
                        @foreach ($table_data as $table)
                            @if ($table -> table_status == 0)
                                <div class="col-2 col-md-2 col-sm-2" style="margin: 10px;">
                                    <a href="/booking{{$table -> id}}" class="btn btn-success" style="padding:15px">{{$table -> table_name}}</a>
                                </div>
                            @else
                                <div class="col-2 col-md-2 col-sm-2" style="margin: 10px;">
                                    <a href="#" class="btn btn-secondary disabled" style="padding:15px">{{$table -> table_name}}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <p>*เขียว = ว่าง, เทา = ไม่ว่าง</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
