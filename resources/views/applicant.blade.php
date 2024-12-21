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
	<a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>	
	
    @else
	<a href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
    @endif
@else
<a class="btn btn-primary me-2" href="{{ route('register') }}" type="submit">Đăng ký</a>
<a class="btn btn-outline-primary " href="{{ route('login') }}" type="submit">Đăng nhập</a>
@endif


					
	
					
					
					<div class="ntd">
						<a href="{{ route('employer') }}" >
							<i class='bx bx-briefcase-alt-2'></i>Trang nhà tuyển dụng
						</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	
			

	<section class="section-0 lazy d-flex bg-image-style dark align-items-center "   class="" data-bg="{{ asset('assets/images/banner-5.jpg') }}">
		<div class="container">
			<div class="">
				<div class="col-12 col-xl-8">
					<h1>Tìm kiếm công việc mơ ước của bạn</h1>
				</div>
				<form class="form-search">
					<div class="nw-hero-search">
						<div class="nw-hero__search-input">
							<input type="text" id="txtTuKhoa" placeholder="Từ khóa, chức danh hoặc công ty" class="fz-16 letter-spacing-1" autocomplete="off"/>
						</div>
						
						<div class=" nw-hero__search-select">
							<select class="select1 selectpicker" id="txtTinhThanh" data-live-search="true" data-live-search-normalize="true" data-size="7" title="Địa điểm" data-container=".nw-hero__search">
								<option class='op-quocgia' value="0" selected>Tất cả địa điểm</option><option class='op-quocgia' value="2">Hà Nội</option><option class='op-quocgia' value="3">Hồ Chí Minh</option><option class='op-quocgia' value="4">Đà Nẵng</option><option class='op-quocgia' value="5">Cần Thơ</option><option class='op-quocgia' value="6">Hải Phòng</option><option class='op-quocgia' value="7">An Giang</option><option class='op-quocgia' value="8">Bà Rịa - Vũng Tàu</option><option class='op-quocgia' value="9">Bắc Giang</option><option class='op-quocgia' value="10">Bắc Kạn</option><option class='op-quocgia' value="11">Bạc Liêu</option><option class='op-quocgia' value="12">Bắc Ninh</option><option class='op-quocgia' value="13">Bến Tre</option><option class='op-quocgia' value="14">Bình Định</option><option class='op-quocgia' value="15">Bình Dương</option><option class='op-quocgia' value="16">Bình Phước</option><option class='op-quocgia' value="17">Bình Thuận</option><option class='op-quocgia' value="18">Cà Mau</option><option class='op-quocgia' value="19">Cao Bằng</option><option class='op-quocgia' value="20">Đắk Lắk</option><option class='op-quocgia' value="21">Đắk Nông</option><option class='op-quocgia' value="22">Điện Biên</option><option class='op-quocgia' value="23">Đồng Nai</option><option class='op-quocgia' value="24">Đồng Tháp</option><option class='op-quocgia' value="25">Gia Lai</option><option class='op-quocgia' value="26">Hà Giang</option><option class='op-quocgia' value="27">Hà Nam</option><option class='op-quocgia' value="28">Hà Tĩnh</option><option class='op-quocgia' value="29">Hải Dương</option><option class='op-quocgia' value="30">Hậu Giang</option><option class='op-quocgia' value="31">Hòa Bình</option><option class='op-quocgia' value="32">Hưng Yên</option><option class='op-quocgia' value="33">Khánh Hòa</option><option class='op-quocgia' value="34">Kiên Giang</option><option class='op-quocgia' value="35">Kon Tum</option><option class='op-quocgia' value="36">Lai Châu</option><option class='op-quocgia' value="37">Lâm Đồng</option><option class='op-quocgia' value="38">Lạng Sơn</option><option class='op-quocgia' value="39">Lào Cai</option><option class='op-quocgia' value="40">Long An</option><option class='op-quocgia' value="41">Nam Định</option><option class='op-quocgia' value="42">Nghệ An</option><option class='op-quocgia' value="43">Ninh Bình</option><option class='op-quocgia' value="44">Ninh Thuận</option><option class='op-quocgia' value="45">Phú Thọ</option><option class='op-quocgia' value="46">Quảng Bình</option><option class='op-quocgia' value="47">Quảng Nam</option><option class='op-quocgia' value="48">Quảng Ngãi</option><option class='op-quocgia' value="49">Quảng Ninh</option><option class='op-quocgia' value="50">Quảng Trị</option><option class='op-quocgia' value="51">Sóc Trăng</option><option class='op-quocgia' value="52">Sơn La</option><option class='op-quocgia' value="53">Tây Ninh</option><option class='op-quocgia' value="54">Thái Bình</option><option class='op-quocgia' value="55">Thái Nguyên</option><option class='op-quocgia' value="56">Thanh Hóa</option><option class='op-quocgia' value="57">Thừa Thiên Huế</option><option class='op-quocgia' value="58">Tiền Giang</option><option class='op-quocgia' value="59">Trà Vinh</option><option class='op-quocgia' value="60">Tuyên Quang</option><option class='op-quocgia' value="61">Vĩnh Long</option><option class='op-quocgia' value="62">Vĩnh Phúc</option><option class='op-quocgia' value="63">Yên Bái</option><option class='op-quocgia' value="64">Phú Yên</option><option class='op-quocgia' value="65">Nước Ngoài</option><option class='op-quocgia' value="66">Khác</option>
							</select>
						</div>
						<div class=" nw-hero__search-select">
							<select class="select1 selectpicker" id="txtNganh" data-live-search="true" data-live-search-normalize="true" data-size="10" title="Ngành nghề" data-container=".nw-hero__search">
								<option value="0">Tất cả ngành nghề</option><optgroup label="Các nhóm ngành lớn"><option value="117">Kinh doanh / Bán hàng / Chăm sóc khách hàng</option><option value="122">Tài chính / Kế toán</option><option value="118">Hành chính / Nhân sự / Trợ lý / Biên phiên dịch / Pháp lý</option><option value="125">Marketing / Truyền thông / Quảng cáo</option><option value="126">Cơ khí chế tạo / Điện / Điện tử / Tự động hóa</option><option value="124">IT / Phần mềm / IOT / Điện tử viễn thông</option><option value="21">Giáo dục / Đào tạo</option><option value="127">Y tế / Sức khỏe / Làm đẹp</option><option value="128">Logistics / Xuất nhập khẩu / Mua hàng / Kho</option><option value="84">Sản xuất / Vận hành sản xuất</option><option value="119">Kiến trúc / Xây dựng</option><option value="121">Hóa học / Sinh học / Thực phẩm / Môi trường</option><option value="123">Nhà hàng khách sạn / Du lịch</option><option value="52">Nông nghiệp / Lâm nghiệp / Thủy Sản</option><option value="120">Hàng tiêu dùng</option><option value="40">Lao động phổ thông</option><option value="64">Thiết kế đồ họa - Web</option></optgroup><optgroup label="Các ngành chi tiết"><option value="5">Biên dịch/Phiên dịch/ Ngoại ngữ</option><option value="80">Xuất - Nhập khẩu</option><option value="59">Quản trị kinh doanh</option><option value="73">Tư vấn/ Chăm sóc khách hàng</option><option value="30">IT phần mềm</option><option value="101">Truyền thông/Internet/Online Media</option><option value="17">Điện - Điện tử - Điện lạnh</option><option value="31">In ấn - Xuất bản</option><option value="67">Thư ký - Trợ lý</option><option value="24">Hàng hải</option><option value="81">Xuất khẩu lao động</option><option value="74">Vận tải - Lái xe/ Tài xế</option><option value="25">Hàng không</option><option value="82">Y tế - Dược</option><option value="18">Điện tử viễn thông</option><option value="32">Kế toán</option><option value="68">Thực phẩm - Đồ uống</option><option value="33">Khách sạn - Nhà hàng</option><option value="26">Hành chính - Văn phòng</option><option value="19">Freelance</option><option value="76">Vật tư/Thiết bị/Mua hàng</option><option value="34">Kiến trúc - Thiết kế nội thất</option><option value="91">An toàn lao động</option><option value="104">Thống kê</option><option value="27">Hóa học - Sinh học</option><option value="105">Thủy sản / Hải sản</option><option value="42">Marketing - PR</option><option value="92">Bảo trì / Sửa chữa</option><option value="85">Công nghệ thực phẩm / Dinh dưỡng</option><option value="35">Bất động sản</option><option value="50">Nhân sự</option><option value="86">Giao thông/Vận tải/Thủy lợi/Cầu đường</option><option value="29">IT phần cứng/mạng</option><option value="79">Xây dựng</option><option value="43">Môi trường</option><option value="94">Chăm sóc sức khỏe</option><option value="51">Kinh doanh</option><option value="1">Bán hàng</option><option value="44">Mỹ phẩm - Trang sức</option><option value="2">Biên tập/ Báo chí/ Truyền hình</option><option value="89">Chăn nuôi / Thú y</option><option value="53">Ô tô - Xe máy</option><option value="3">Bảo hiểm/ Tư vấn bảo hiểm</option><option value="39">Làm đẹp/ Thể lực/ Spa</option><option value="109">Lễ Tân</option><option value="46">Ngân hàng/ Tài Chính</option><option value="54">Pháp luật/ Pháp lý</option><option value="97">Nội ngoại thất</option><option value="12">Dầu khí - Hóa chất</option><option value="98">Trắc địa/Địa chất/Khoáng sản</option><option value="48">Nghệ thuật - Điện ảnh</option><option value="55">Phát triển thị trường</option><option value="6">Bưu chính</option><option value="13">Dệt may - Da giày</option><option value="63">Thiết kế đồ họa - Mỹ thuật</option><option value="70">Thương mại điện tử</option><option value="49">Người giúp việc/ Phục vụ/ Tạp vụ</option><option value="71">Tiếp thị - Quảng cáo</option><option value="7">Chứng khoán - Vàng</option><option value="57">QA-QC/ Thẩm định/ Giám định</option><option value="65">Thời trang</option><option value="8">Cơ khí - Chế tạo</option><option value="15">Du lịch</option><option value="22">Giao nhận/ Vận chuyển/ Kho bãi</option></optgroup>
							</select>
						</div>
						<button type="button" class="btn btn-nw-success nw-hero__search-submit" id="btnTim">
							<span class="fz-18 ">Tìm việc</span>
						</button> 
					</div>
								   
				</form>
			</div> 
		</div>
	   
	</section>
	
	
	<section class="section-2 bg-2 py-5">
		<div class="container">
			<h2>Các danh mục phổ biến</h2>
			<div class="row pt-5">
				<div class="col-lg-4 col-xl-3 col-md-7">
					<div class="single_catagory">
						<a href="jobs.html"><h4 class="pb-2">Thiết kế & Sáng tạo</h4></a>
						<p class="mb-0"> <span>50</span> vị trí tuyển dụng</p>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3 col-md-7">
					<div class="single_catagory">
						<a href="jobs.html"><h4 class="pb-2">Tài chính</h4></a>
						<p class="mb-0"> <span>50</span> vị trí tuyển dụng</p>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3 col-md-7">
					<div class="single_catagory">
						<a href="jobs.html"><h4 class="pb-2">Ngân hàng</h4></a>
						<p class="mb-0"> <span>50</span> vị trí tuyển dụng</p>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3 col-md-7">
					<div class="single_catagory">
						<a href="jobs.html"><h4 class="pb-2">Công nghệ thông tin</h4></a>
						<p class="mb-0"> <span>50</span> vị trí tuyển dụng</p>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>
	
	<section class="section-3 bg-2 py-5">
		<div class="container">
			<h2 style="text-align: center">Việc làm HOT</h2>
			<div class="row pt-5">
				<div class="job_listing_area">                    
					<div class="job_lists">
						<div class="row" style="justify-content: center">
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm </h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							
							
													 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-3 bg-2 py-5 ">
		<div class="container">
			<h2 >Việc làm nổi bật</h2>
			<div class="row pt-5">
				<div class="job_listing_area">                    
					<div class="job_lists">
						<div class="row" style="justify-content: center">
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm </h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card border-0 p-3 shadow mb-4">
									<div class="card-body">
										<h3 class="border-0 fs-5 pb-2 mb-0">Kỹ sư phần mềm</h3>
										<p>Chúng tôi đang cần tuyển một Nhà phát triển Web cho công ty của chúng tôi.</p>
										<div class="bg-light p-3 border">
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
												<span class="ps-1">Hà Nội</span>
											</p>
											
											<p class="mb-0">
												<span class="fw-bolder"><i class="fa fa-usd"></i></span>
												<span class="ps-1">8-10 triệu/tháng</span>
											</p>
										</div>
	
										<div class="d-grid mt-3">
											<a href="chi-tiet" class="btn btn-primary btn-lg">Details</a>
										</div>
									</div>
								</div>
							</div>
							
							
													 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	



<footer class="bg-dark py-3 bg-2">
    <div class="container">
        <p class="text-center text-dark pt-3 fw-bold fs-6">© 2024 Dream job, all right reserved</p>
    </div>
</footer> 


<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>



</body>