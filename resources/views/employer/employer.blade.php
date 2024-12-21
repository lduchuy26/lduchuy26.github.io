<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Dream Job</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/employer.css')}}" />

</head>
<body >
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px; height: auto;">
			<a class="navbar-brand" href="">DREAM JOB</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{ route('applicant') }}">Cho người tìm việc</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="jobs.html">Liên hệ</a>
					</li>										
														
				</ul>
				<a class="btn btn-primary me-2" href="{{ route('employer.register') }}" type="submit">Đăng ký</a>
				<a class="btn btn-outline-primary " href="{{ route('employer.login') }}" type="submit">Đăng nhập</a>
				
				
			</div>
		</div>
	</nav>
</header>


<div class="content">
	<div class="header">
	 SỐ LIỆU TĂNG TRƯỞNG
	 <span>
	  —
	 </span>
	</div>
	<div class="stats">
	 <div class="stat">
	  <img alt="Icon of a document representing CVs" height="50" src="https://storage.googleapis.com/a1aa/image/NfVWq3VP5cSFMaqeOK0bNyatlXplmMxGVA7K8mXEQM8FYgsTA.jpg" width="50"/>
	  <div class="number">
	   +2.123.324
	  </div>
	  <div class="description">
	   CV ỨNG VIÊN
	  </div>
	 </div>
	 <div class="stat">
	  <img alt="Icon of people representing recruiters" height="50" src="https://storage.googleapis.com/a1aa/image/eWkwWSncjYXwHCJIbnHRq40Rhe8mF6K5OIunOVEBMA2CYgsTA.jpg" width="50"/>
	  <div class="number">
	   +16.000
	  </div>
	  <div class="description">
	   NHÀ TUYỂN DỤNG TRUY CẬP/THÁNG
	  </div>
	 </div>
	 <div class="stat">
	  <img alt="Icon of a document with a key representing applications" height="50" src="https://storage.googleapis.com/a1aa/image/selRH3jX8fhDbkAVWfdst0K5KmJWeJFiLHknTekMSEc4ADkdC.jpg" width="50"/>
	  <div class="number">
	   +2.500
	  </div>
	  <div class="description">
	   lượt/ngày SỐ ỨNG VIÊN ỨNG TUYỂN
	  </div>
	 </div>
	 <div class="stat">
	  <img alt="Icon of a computer screen representing users" height="50" src="https://storage.googleapis.com/a1aa/image/93m5qCbUBQIkCNMYdolUQ3vaBlMMzMMN7vwhXq6foyrBMQ2JA.jpg" width="50"/>
	  <div class="number">
	   +1.410.000
	  </div>
	  <div class="description">
	   USERS TRUY CẬP/THÁNG
	  </div>
	 </div>
	</div>


<footer  class="bg-dark py-3 bg-2">
<div class="container">
    <p class="text-center text-dark pt-3 fw-bold fs-6">© 2024 Dream job, all right reserved</p>
</div>
</footer> 


<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>




</body>