@extends('layouts.layout_login')
@section('content-body')
<div class="card">
    <div class="card-body">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="/edituserdata_action_admin">
            @csrf
            <input type="hidden" name="id" value="{{$edituser -> id}}">
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
            <h2 class="my-3">แก้ไขข้อมูลผู้ใช้</h2>
          </div>
          <div class="form-group">
            <label for="inputEmail4">อีเมล</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$edituser -> email}}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="firstname">ชื่อ - นามสกุล</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$edituser -> name}}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputPassword5">สถานะ</label>
                <select name="status" id="status" class="form-control">
                    <option value="0" @if($edituser -> is_admin == 0) {{"selected"}} @endif>พนักงาน</option>
                    <option value="1" @if($edituser -> is_admin == 1) {{"selected"}} @endif>ผู้ดูแลระบบ</option>
                </select>
            </div>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">แก้ไข</button>
          <p class="mt-5 mb-3 text-muted text-center">© 2020</p>
        </form>
    </div>
</div>
@endsection
