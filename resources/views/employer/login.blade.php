@extends('employer.layouts.home')

@section('main')
    
<section class="section-5">
    <div class="container my-5">
        <div class="row ">
            <div class="col-md-5">
                 
                <div class=" p-5 position-relative">
                    <div class="login-logo position-absolute">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px;">DREAM JOB
                    </div>  

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form class="form_login" action="" method="post">
                        <h1 class="h3 mb-2 text-center ">Đăng nhập</h1> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="example@example.com">
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Mật khẩu:</label>
                            <input type="password" name="name" id="name" class="form-control" placeholder="Nhập mật khẩu">
                        </div> 
                        <a href="forgot-password.html" class="mt-3 justify-content-end d-flex">Quên mật khẩu?</a>
                        <div class="justify-content-center d-flex">
                            <button class="btn btn-primary mt-2 ">Đăng nhập</button>
                            
                        </div>
                        <div class="mt-4 text-center " style="margin-top: 20px" >
                            <p>Bạn chưa có tài khoản? <a  href="{{ route('employer.register') }}">Đăng ký</a></p>
                        </div>

                        
                    </form>                    
                </div>
                
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/login.png') }}" alt="Login Image" class="img-fluid" style="height: 100%; object-fit: cover;">
            </div>
        </div>
       
    </div>
</section>

@endsection