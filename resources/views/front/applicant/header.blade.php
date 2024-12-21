@extends('front.layouts.applicant.applicant')

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
		<div class="container">
			<img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px; height: auto;">
			<a class="navbar-brand" href="#">DREAM JOB</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
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
				<a class="btn btn-primary me-2" href="{{ route('applicant.register') }}" type="submit">Đăng ký</a>
				<a class="btn btn-outline-primary " href="{{ route('applicant.login') }}" type="submit">Đăng nhập</a>
				
				<div class="ntd">
					<a href="{{ route('employer.home') }}" >
						<i class='bx bx-briefcase-alt-2'></i>Trang nhà tuyển dụng
					</a>
				</div>
			</div>
		</div>
	</nav>
</header>