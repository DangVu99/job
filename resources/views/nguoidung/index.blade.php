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
                    <div class="col-md-12 col-sm-12">
                        <div class="advance-detail detail-desc-caption">
                            <h4>Daniel Declizer</h4><span class="designation">Web Designer</span>
                            <ul>
                                <li><strong class="j-view">85</strong>New Post</li>
                                <li><strong class="j-applied">110</strong>Việc Ứng Cử</li>
                                <li><strong class="j-shared">120</strong>Lời Mời</li>
                            </ul>
                        </div>
                    </div>
                </div>
				
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-md-5 col-sm-5">
                            <ul class="detail-footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="detail-pannel-footer-btn pull-right"><a href="{{route('nguoidung.edit')}}" data-toggle="modal" data-target="#apply-job" class="footer-btn grn-btn" title="">Edit Now</a><a href="#" class="footer-btn blu-btn" title="">Save Draft</a></div>
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
								<li><a href="#matches-job">Công Việc Phù Hợp</a></li>
								
								<li><a href="#messages">Tin Nhắn</a></li>
								<li><a href="#settings">Chỉnh Sửa Thông Tin</a></li>
								
							</ul>
							
							<!-- Start All Sec -->
							<div class="tab-content">
								<div id="about" class="tab-pane fade in active">
									<h3>About Adam Declizer</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum sed diam ac fermentum. Mauris nec pellentesque neque. Cras nec diam euismod, congue sapien eu, fermentum libero. Vestibulum quis sem.</p>
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
								<div id="matches-job" class="tab-pane fade">
									<h3>Matches-job 122 new job</h3>
									<div class="row">
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="public/asset/img/com-2.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Google Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
											<span class="tg-themetag tg-featuretag">Premium</span>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="public/asset/img/com-6.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Project Manager</h4></a><span>Vertue Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="public/asset/img/com-7.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Database Designer</h4></a><span>Twitter Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
											</div>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="public/asset/img/com-2.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Product Designer</h4></a><span>Google Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a></div>
											</div>
											<span class="tg-themetag tg-featuretag">Premium</span>
										</article>
										
										<article class="advance-search-job">
											<div class="row no-mrg">
												<div class="col-md-6 col-sm-6">
													<a href="new-job-detail.html" title="job Detail">
														<div class="advance-search-img-box"><img src="public/asset/img/com-5.jpg" class="img-responsive" alt=""></div>
													</a>
													<div class="advance-search-caption"><a href="new-job-detail.html" title="Job Dtail"><h4>Human Resource</h4></a><span>Skype Ltd</span></div>
												</div>
												<div class="col-md-4 col-sm-4">
													<div class="advance-search-job-locat">
														<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"><a href="#" class="btn applied advance-search" title="applied"><i class="fa fa-check" aria-hidden="true"></i>Applied</a></div>
											</div>
										</article>
									</div>
									
									<div class="row">
										<ul class="pagination">
											<li><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
										
											<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
								</div>
								<!-- End Job List -->
								
								<!-- Start Friend List -->
								
								<!-- End Friend List -->
								
								<!-- Start Message -->
								<div id="messages" class="tab-pane fade">
									<div class="inbox-body inbox-widget">
										
										<div class="mail-card unread">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-2" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="public/asset/img/can-2.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view1" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view1" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-2" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
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