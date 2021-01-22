@include('master_layout.header')
	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

				<div class="container">            
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Start Header Navigation -->
					
					<div class="navbar-header">
						<a class="navbar-brand" href="{{route('home')}}">
							<img src="asset/img/footer-logo1.png" class="logo logo-scrolled" alt="">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-menu">
												<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="login.html"><i class="fa fa-pencil" aria-hidden="true"></i>SignIn</a></li>
							<li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>
							<li class="left-br"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>   
			</nav>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" scr="public/asset/img/banner-10.jpg">
				<div class="container">
					<h1>Candidate Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
		
		<!-- Candidate Profile Start -->
        <section class="detail-desc advance-detail-pr gray-bg">
            <div class="container white-shadow">
			
                <div class="row">
                    <div class="detail-pic"><img src="public/asset/img/can-1.png" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
                    <div class="detail-status"><span>Active Now</span></div>
                </div>
				
                <div class="row bottom-mrg">
					
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4>Microsoft</h4>
								<span class="designation">Software Development Company</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Thông Tin Liên Lạc</h4>
								<ul>
									<li><i class="fa fa-map-marker"></i><span>Menlo Park, CA</span></li>
									<li><i class="fa fa-envelope"></i><span>danieldax704@gmail.com</span></li>
									
									<li><i class="fa fa-phone"></i><span>0 123 456 7859</span></li>
									
								</ul>
							</div>
						</div>
						
					</div>
            </div>
        </section>


        <section class="full-detail-description full-detail gray-bg">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="full-card">
                      <div class="deatil-tab-employ tool-tab">
							<ul class="nav simple nav-tabs" id="simple-design-tab">
								<li class="active"><a href="#about">Giới Thiệu</a></li>
								<li><a href="#address">Địa Chỉ</a></li>
								
							</ul>
							
							<!-- Start All Sec -->
							<div class="tab-content">
								<div id="about" class="tab-pane fade in active">
									<h3>About Adam Declizer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									
								</div>
								<!-- End About Sec -->
								
								<!-- Start Address Sec -->
								<div id="address" class="tab-pane fade">
									<h3>Thông Tin Địa Chỉ</h3>
									<ul class="job-detail-des">
										<li><span>Địc Chỉ:</span></li>
										<li><span>Thành Phố:</span></li>
										<li><span>Quốc Gia:</span></li>
										<li><span>Số Điện Thoại:</span></li>
										<li><span>Fax:</span></li>
										<li><span>Email:</span></li>
									</ul>
								</div>
								<!-- End Address Sec -->
								
								<!-- Start Job List -->
								
								<!-- End Job List -->
								
								<!-- Start Friend List -->
								
								<!-- End Friend List -->
								
								<!-- Start Message -->
								
								<!-- End Message -->
								
								<!-- Start Settings -->
								
								<!-- End Settings -->
							</div>
							<!-- Start All Sec -->
						</div>  
                    </div>
                </div>
            </div>
        </section>
		
     
		<!-- Candidate Profile End -->
		
			@include('master_layout.footer')
@include('master_layout.modal_login')
@include('master_layout.script')			
		</div>
	</body>

<!-- candidate-profile41:39-->
</html>