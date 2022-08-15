@extends('layouts.layout_admin')
@section('content-header')
เพิ่มข้อมูลสมาชิก
@endsection
@section('content-body')
        <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="/adduserdata_action">
            @csrf
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
            <h2 class="my-3">เพิ่มข้อมูลสมาชิก</h2>
          </div>
          <div class="form-group">
            <label for="inputEmail4">ที่อยู่อีเมลล์</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email-address" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="firstname">ชื่อ - นามสกุล</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="FullName" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputPassword5">รหัสผ่าน</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              <div class="form-group">
                <label for="inputPassword6">ยืนยันรหัสผ่าน</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
              </div>
            </div>
            <div class="col-md-6">
                <p class="mb-2">คำแนะนำสำหรับการสร้างรหัสผ่าน</p>
                <p class="small text-muted mb-2">ในการสร้างรหัสผ่านใหม่ โปรดปฏิบัติตามข้อกำหนดต่อไปนี้ทั้งหมด: </p>
                <ul class="small text-muted pl-4 mb-0">
                  <li>ใส่ตัวอักษรอยากน้อย 8 ตัว</li>
                  <li>ใส่ตัวอักษรพิเศษอย่างน้อย 1 ตัว</li>
                  <li>ใส่เลขอย่างน้อย 1 ตัว</li>
                  <li>ต้องไม่เหมือนกับรหัสผ่านที่เคยใช้</li>
                </ul>
              </div>
            <input type="hidden" name="is_admin" value="0">
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputPassword5">สถานะ</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0">พนักงาน</option>
                        <option value="1">ผู้ดูแลระบบ</option>
                    </select>
                </div>
            </div>
          </div>
          <hr class="my-4">
          <div></div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">ยืนยัน</button>
          <p class="mt-5 mb-3 text-muted text-center">© Kotchanat Boonkunchai</p>
        </form>
@endsection
