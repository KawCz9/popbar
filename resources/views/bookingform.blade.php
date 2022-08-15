@extends('layouts.layout_user')
@section('content-body')
<div class="row justify-content-center">
<div class="col-12 col-sm-11 col-md-7 devbanban" style="margin-top: 50px;">
    <br>
    <h4 align="center"">แบบฟอร์มจองโต๊ะ</h4>
    <br>
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <hr>
          <div style="margin-left: 20px;">
            <form action="/booking_active" method="post" enctype="multipart/form-data">
                @csrf

              <div class="form-group row">
                <label class="col-sm-2 " style="margin-top:0.5em;">เลขโต๊ะ</label>
                <div class="col-sm-10">
                  <input type="text" name="table_name" class="form-control" value="{{$table_data -> table_name}}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 " style="margin-top:0.5em;">ผู้จอง</label>
                <div class="col-sm-10">
                  <input type="text" name="booking_name" class="form-control" required placeholder="ชื่อผู้จอง" minlength="5">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2" style="margin-top:0.5em;">วันที่</label>
                <div class="col-sm-5">
                  <input type="date" name="booking_date" class="form-control" required value="" max="">
                </div>
                <label class="col-sm-1 " style="margin-top:0.5em;">เวลา</label>
                <div class="col-sm-4">
                  <input type="time" name="booking_time" class="form-control" required placeholder="เวลา">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 " style="margin-top:0.5em;">เบอร์โทร</label>
                <div class="col-sm-10">
                  <input type="text" name="booking_phone" class="form-control" required placeholder="เบอร์โทร" minlength="10" maxlength="10">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 " style="margin-top:0.5em;">ผู้บันทึก</label>
                <div class="col-sm-10">
                  <input type="text" name="booking_staff" class="form-control" readonly value="{{Auth::user()->name}}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 "></label>
                <div class="col-sm-10">
                <input type="hidden" name="table_id" value="{{$table_data -> id}}">
                 <button type="submit" class="btn btn-success">บันทึกการจอง</button>
                 <br>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
</div>
</div>
@endsection
