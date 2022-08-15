@extends('layouts.layout_login')
@section('content-body')
            <div class="card" style="margin-top:5rem">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                <center>
                    <a class="navbar-brand mx-auto mt-2" href="./index.html">

                        <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                        </svg>

                    </a>

                    <h1 class="h6 mb-3">เข้าสู่ระบบ</h1>
                </center>
                    <div class="form-group">
                        <label for="email" <!--class="sr-only"-->ที่อยู่อีเมลล์</label>
                        <input id="email" type="email" class="form-control form-control-lg" name="email" placeholder="Email address" required="" autofocus="">

                    </div>
                    <div class="form-group">
                        <label for="password" <!--class="sr-only"-->รหัสผ่าน</label>
                        <input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Password" required="">
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>
                    <p class="mt-5 mb-3 text-muted">© Kotchanat Boonkunchai</p>
                    </form>
                </div>
            </div>
@endsection
@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
@if ($massage = Session::get('error'))
<script>
    Swal.fire({
  title:'เข้าสู่ระบบไม่สำเร็จ',
  text:'{{$massage}}',
  icon:'error',
  showConfirmButton:false,
  timer: 2000,
    })
</script>
@endif
@endsection
