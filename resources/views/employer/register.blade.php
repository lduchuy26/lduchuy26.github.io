@extends('employer.layouts.home')

@section('main')
    


<section class="section-5">
    <div class="container my-5">
        <div class="row d-flex justify-content-center shadow-lg bg-white rounded">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/signup.png') }}" alt="Login Image" class="img-fluid" style="height: 100%; object-fit: cover;">
            </div>
            <div class="col-md-5">
                <div class="p-5 posistion-relative" >    
                    <div class="login-logo position-absolute">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px;">DREAM JOB
                    </div>             
                    <form class="form_login" action="" name="registrationForm" id="registrationForm">
                        <h1 class="h3 mb-2 text-center " style="margin-bottom: 20px !important">Đăng ký nhà tuyển dụng</h1> 
                        
                        <div class="mb-3">
                            <label for="" class="mb-2">Email đăng nhập *</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Mật khẩu *</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu">
                        </div> 
                        <div class="mb-3">
                            <label for="" class="mb-2">Nhập lại mật khẩu *</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu">
                        </div> 
                        
                        <div class="justify-content-center d-flex">
                            <button class="btn btn-primary mt-2 " style="margin-top: 1rem !important" >Đăng ký</button>
                            
                        </div>
                        <div class="mt-4 text-center" style="margin-top: 1rem">
                            <p>Bạn đã có tài khoản? <a  href="{{ route('employer.login') }}">Đăng nhập</a></p>
                        </div>
                    </form>                    
                </div>
                
            </div>
            
        </div>
    </div>
</section>

@endsection



