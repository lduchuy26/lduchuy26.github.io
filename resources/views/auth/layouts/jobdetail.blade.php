<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Dream Job</title>
	<link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
	


</head>
<body >
    <header>
		<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
			<div class="container">
				<img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 50px; height: auto;">
				<a class="navbar-brand" href="{{ route('applicant') }}">DREAM JOB</a>
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
								<a class="dropdown-item" href="/tao-cv">Tạo CV</a>
								<a class="dropdown-item" href="/tao-thu-xin-viec">Tạo Thư xin việc</a>
								<a class="dropdown-item" href="/quan-ly-cv">Quản lý CV</a>
								<a class="dropdown-item" href="/quan-ly-thu-xin-viec">Quản lý Thư xin việc</a>
								
						</div>
						</li>										
															
					</ul>
					@if(Auth::check())
    @if(Auth::user()->usertype === 'user')
    <a href="{{ route('dashboard') }}" style="font-size: 15px; margin-right: 10px;"> <img src="../assets/img/avatars/6.jfif" alt class="w-px-40 h-auto rounded-circle" /> {{ Auth::user()->name }}</a>	

	
    @else
	<a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
    @endif
@else
<a class="btn btn-primary me-2" href="{{ route('register') }}" type="submit">Đăng ký</a>
<a class="btn btn-outline-primary " href="{{ route('login') }}" type="submit">Đăng nhập</a>
@endif


					
	
					
					
					
				</div>
			</div>
		</nav>
	</header>
	
<section class="section-4 bg-2">    
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('applicant') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Back to Jobs</a></li>
                    </ol>
                </nav>
            </div>
        </div> 
    </div>
    <div class="container job_details_area">
        <div class="row pb-5">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg ">
                            <div class="jobs_left ">
                                
                                <div class="jobs_conetent">
                                    <a href="#">
                                        <h4>
                                            Kỹ sư phần mềm</h4>
                                    </a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Hà Nội</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Mô tả công việc</h4>
                            <p>- Tham gia nghiên cứu/phát triển/nâng cấp các sản phẩm/giải pháp chuyển đổi số của công ty, ...<br>
                                - Nghiên cứu và áp dụng các công nghệ mới vào dự án<br>
                                - Các công việc khác theo sự phân công của Quản lý dự án.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Yêu cầu</h4>
                            <p>- Tốt nghiệp cao đẳng, đại học chuyên ngành công nghệ thông tin<br>
                                - Tối thiểu 2 năm kinh nghiệm phát triển trên nền tảng .NET Framework/.NET Core;<br>
                                - Thành thạo ASP.NET, MVC, Web API, Entity Framework;<br>
                                - Sử dụng thành thạo HTML, Javascript.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Quyền lợi</h4>
                            <p>- Mức lương: Thỏa thuận theo năng lực, lên tới 25.000.000 VNĐ/ tháng;<br>
                                - Hưởng đầy đủ các chế độ bảo hiểm theo luật của nhà nước;<br>
                                - Chế độ nghỉ phép, nghỉ khác và nghỉ Lễ, Tết theo quy định của Nhà nước;<br>
                                - Thưởng Dự án, thưởng các ngày lễ theo quy định của công ty;<br>
                                - Được đào tạo trực tiếp trong quá trình thực hiện Dự án, theo lộ trình phát triển riêng cho từng cá nhân, phù hợp với năng lực;<br>
                                - Quyền lợi khác: Ăn trưa, khám sức khoẻ định kỳ.....</p>
                        </div>
                       
                        <div class="border-bottom"></div>
                        <div class="pt-3 text-end">
                            <a href="#" class="btn btn-secondary">Save</a>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card shadow border-0">
                    <div class="job_sumary">
                        <div class="summery_header pb-1 pt-4">
                            <h3>Tóm tắt công việc</h3>
                        </div>
                        <div class="job_content pt-3">
                            <ul>
                                <li>Vị trí tuyển dụng:<span> 2 vị trí</span></li>
                                <li>Chức vụ:<span> Nhân viên</span></li>
                                <li>Thu nhập:<span> Tới 25 triệu</span></li>
                                <li>Vị trí:<span> Hà Nội</span></li>
                                <li>Loại hình:<span> Full-time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-0 my-4">
                    <div class="job_sumary">
                        <div class="summery_header pb-1 pt-4">
                            <h3>Giới thiệu công ty</h3>
                        </div>
                        <div class="job_content pt-3">
                            <ul>
                                <li>Tên: <span>Công ty TNHH VKX</span></li>
                                <li>Vị trí: <span>Hà Nội</span></li>
                                <li>Webite: <span>www.example.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image"  name="image">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>


<footer class="bg-dark py-3 bg-2">
    <div class="container">
        <p class="text-center text-dark pt-3 fw-bold fs-6">© 2024 Dream job, all right reserved</p>
    </div>
</footer> 


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.5.1.3.min.js"></script>
<script src="assets/js/instantpages.5.1.0.min.js"></script>
<script src="assets/js/lazyload.17.6.0.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/custom.js"></script>




</body>