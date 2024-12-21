@extends('auth.layouts.home')

@section('main')
   
<section class="section-5">
    <div class="container my-5">
        <div class="row d-flex justify-content-center shadow-lg bg-white rounded">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/signup.png') }}" alt="Login Image" class="img-fluid" style="height: 100%; object-fit: cover;">
            </div>
            <div class="col-md-5"> 
                <div class="p-5 posistion-relative">    
                    <div class="login-logo position-absolute">
                        <a href="{{ route('applicant') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px;">DREAM JOB</a>
                    </div>   

                    
                    <form class="form_login" action="{{ route('register') }}" method="POST">
                        @csrf
                        <h1 class="h3 mb-2 text-center">Đăng ký</h1> 
                        
                        <div class="mb-3">
                            <label for="name" class="mb-2">Tên *</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 

                        <div class="mb-3">
                            <label for="email" class="mb-2">Email *</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 

                        <div class="mb-3">
                            <label for="password" class="mb-2">Mật khẩu *</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu" required>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 

                        <div class="mb-3">
                            <label for="confirm_password" class="mb-2">Nhập lại mật khẩu *</label>
                            <input type="password" name="password_confirmation" id="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div> 
 
                        <div class="justify-content-center d-flex">
                            <button class="btn btn-primary mt-2" style="margin-top: 1rem !important">Đăng ký</button>
                        </div>
                        <div class="mt-4 text-center" style="margin-top: 1rem">
                            <p>Bạn đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>
                        </div>
                        
                    </form>                    
                </div>
                
            </div>
            
        </div>
    </div>
</section>

@endsection
