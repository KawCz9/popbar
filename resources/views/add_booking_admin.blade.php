@extends('layouts.layout_admin')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2"></div>
            <div class="col-12 col-sm-11 col-md-7 devbanban" style="">
                <br>
                <h4 align="center">แสดงรายชื่อโต๊ะ</h4>
                <br>
                <div clausers="row">
                    <div class="col-sm-12 col-md-12">
                    <div class="alert alert-warning" role="alert">
                        <center>เวที</center>
                    </div>
                    <hr>
                    <div class="row justify-content-center" style="">
                        @foreach ($addbookings as $addbooking)
                            @if ($addbooking -> table_status == 0)
                                <div class="col-2 col-md-2 col-sm-2" style="margin: 10px;">
                                    <a href="/addBookingAdminForm{{$addbooking -> id}}" class="btn btn-success" style="padding:15px">{{$addbooking -> table_name}}</a>
                                </div>
                            @else
                                <div class="col-2 col-md-2 col-sm-2" style="margin: 10px;">
                                    <a href="#" class="btn btn-secondary disabled" style="padding:15px">{{$addbooking -> table_name}}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <p> <a class="btn btn-success"></a> = ยังไม่ถูกจอง &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary disabled"></a> = ถูกจองแล้ว</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
