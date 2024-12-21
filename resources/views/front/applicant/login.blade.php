@extends('front.layouts.applicant.home_account')

@section('main')
    
<section class="section-5">
    <div class="container my-5">
        <div class="row  ">
            <div class="col-md-5">
                <div class=" p-5 position-relative">
                    <div class="login-logo position-absolute">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px;">DREAM JOB
                    </div>
                    <form action="{{ route('applicant.login.submit') }}" method="POST" class="form_login">
                        @csrf
                        <h1 class="h3 mb-2 text-center ">Đăng nhập</h1> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="example@example.com" required>
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Mật khẩu:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu" required>
                        </div> 
                        <a href="forgot-password.html" class="mt-3 justify-content-end d-flex">Quên mật khẩu?</a>
                        <div class="justify-content-center d-flex">
                            <button class="btn btn-primary mt-2 ">Đăng nhập</button>
                            
                        </div>
                        
                        
                        <div style="text-align: center; padding-top: 15px;;"><p>Hoặc đăng nhập bằng</p></div>
                            
                        <div class=" d-flex justify-content-center">
                            <!-- Logo đăng nhập với Google -->
                            <a href="#!" class="social-icon">
                                <img src="{{ asset('assets/images/google-logo.png') }}" alt="Sign in with Google" style="width: 50px;">
                            </a>
                        
                            <!-- Logo đăng nhập với Facebook -->
                            <a href="#!" class="social-icon ms-2">
                                <img src="{{ asset('assets/images/facebook-logo.png') }}" alt="Sign in with Facebook" style="width: 50px;">
                            </a>
                        </div>
                        <div class="mt-4 text-center">
                            <p>Bạn chưa có tài khoản? <a  href="{{ route('applicant.register') }}">Đăng ký</a></p>
                        </div>

                        
                    </form>  
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                                 
                </div>
                
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/login.png') }}" alt="Login Image" class="img-fluid" style="height: 100%; object-fit: cover;">
            </div>
        </div>
       
    </div>
</section>

@endsection