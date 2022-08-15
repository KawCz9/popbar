@extends('layouts.layout_user')
@section('content-body')
<div class="container">
    <form action="/updateprofile" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-2" style="margin-top:0.5em;">
                ชื่อ  &nbsp;
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="name" value="{{$profile -> name}}">
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top:1em;">
            <div class="col-md-2" style="margin-top:0.5em;">
                อีเมลล์  &nbsp;
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" value="{{$profile -> email}}">
            </div>
        </div>
        {{-- <div class="row justify-content-center" style="margin-top:1em;">
            <div class="col-md-2" style="margin-top:0.5em;">
                รหัสผ่าน  &nbsp;
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" placeholder="รหัสผ่านที่ต้องการใหม่">
            </div>
        </div> --}}
        <div class="row justify-content-center" style="margin-top:1em;">
            <div class="col-md-2" style="margin-top:0.5em;">
                สถานะ  &nbsp;
            </div>
            <div class="col-md-8">
                @if ($profile -> status == 1)
                <input type="text" class="form-control" value="ผู้ดูแลระบบ" readonly>
                @else
                <input type="text" class="form-control" value="พนักงาน" readonly>
                @endif
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top:1em;">
            <div class="col-md-2" style="margin-top:0.5em;">

            </div>
            <div class="col-md-8">
                <button class="btn btn-success" type="submit">แก้ไขข้อมูล</button>
            </div>

        </div>
    </form>
</div>
@endsection
