@extends('layouts.layout_user')

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
                        <p> <a class="btn btn-success"></a> = ยังไม่ถูกจอง &nbsp;&nbsp;&nbsp;<a class="btn btn-secondary disabled"></a> = ถูกจองแล้ว</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
    @if ($massage = Session::get('success'))
        <script>
                Swal.fire({
                title:'เข้าสู่ระบบสำเร็จ',
                text:'{{$massage}}',
                icon:'success',
                showConfirmButton:false,
                timer: 2000,
                    })
        </script>
    @endif
@endsection
