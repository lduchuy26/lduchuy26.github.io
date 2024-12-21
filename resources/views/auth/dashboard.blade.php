<!-- resources/views/dashboard.blade.php -->
@extends('auth.layouts.app')

@section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
        <!-- Primary Navigation Menu -->
        <div class="container">
            <!-- Logo -->
            <div>
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px; height: auto;">
			<a class="navbar-brand" href="{{ route('homeauth') }}">DREAM JOB</a>
        </div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
            
                    
                   
    
                    <!-- Navigation Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Việc làm</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/tim-viec-lam">Tìm việc làm</a>
                                        <a class="dropdown-item" href="/viec-lam-phu-hop">Việc làm của tôi</a>
                                        <a class="dropdown-item" href="/viec-lam-theo-nganh-nghe">Việc làm theo ngành nghề</a>
                                        <a class="dropdown-item" href="/viec-lam-part-time-thuc-tap">Việc làm bán thời gian</a>
                                </div>
                            </li>	
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CV & Thư xin việc</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/tim-viec-lam">Tìm việc làm</a>
                                    <a class="dropdown-item" href="/viec-lam-phu-hop">Việc làm của tôi</a>
                                    <a class="dropdown-item" href="/viec-lam-theo-nganh-nghe">Việc làm theo ngành nghề</a>
                                    <a class="dropdown-item" href="/viec-lam-part-time-thuc-tap">Việc làm bán thời gian</a>
                            </div>
                            </li>	
                           
                           
                           								
                                                                
                        </ul>
                        
                        <div class="ntd nav-item navbar-dropdown dropdown-user dropdown">
                             
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                  <div class="avatar">
                                    
                                    <img src="../assets/img/avatars/6.jfif" alt class="w-px-40 h-auto rounded-circle" />
                                    <span>{{ Auth::user()->name }}</span>
                                  </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                          <div class="avatar avatar-online">
                                            <img src="../assets/img/avatars/6.jfif" alt class="w-px-40 h-auto rounded-circle" />
                                          </div>
                                        </div>
                                        <div >
                                          <span>{{ Auth::user()->name }}</span>
                                          
                                        </div>
                                      </div>
                                    </a>
                                  </li>
                                  <li>
                                    <div class="dropdown-divider"></div>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="bx bx-user me-2"></i>
                                      <span class="align-middle">My Profile</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="bx bx-cog me-2"></i>
                                      <span class="align-middle">Settings</span>
                                    </a>
                                  </li>
                                  
                                  <li>
                                    <div class="dropdown-divider"></div>
                                  </li>
                                  <li>
                                      <form method="POST" action="{{ route('logout') }}">
                                          @csrf
                                          <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();">
                                              <i class="bx bx-power-off me-2"></i>
                                              <span class="align-middle">Log Out</span>
                                            </a>
                                          
                                      </form>
                                   
                                  </li>
                                </ul>
                        
                        </div>
                       
                       
                    </div>    
                        
            
</nav>
    
@endsection

@section('content')
   
@endsection


@section('footer')
<footer  class="bg-dark py-3 bg-2">
    <div class="container">
        <p class="text-center text-white pt-3 fw-bold fs-6">© 2024 Dream job, all right reserved</p>
    </div>
    </footer> 
@endsection