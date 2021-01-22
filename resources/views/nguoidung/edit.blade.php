@include('master_layout.header')
<!-- Header Title Start -->
			<section class="inner-header-title" src="public/asset/img/banner.jpg">
				<div class="container">
					<h1>Thông Tin Cá Nhân</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
			<div class="section detail-desc">
				<div class="container white-shadow">
				
					<div class="row">
						<div class="detail-pic js">
							<div class="box">
								<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
								<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
							</div>
						</div>
					</div>
					
					<div class="row bottom-mrg">
						<form class="add-feild">
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Họ Tên">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="email" class="form-control" placeholder="Giới Tính">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="selectpicker form-control" ultiple title="Tất Cả Danh Mục">
										<option>Full Time</option>
										<option>Part Time</option>
										<option>Freelancer</option>
										<option>Internship</option>
									</select>
								</div>
							</div>
							
							
							
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Mô Tả Bản Thân"></textarea>
							</div>
							
						</form>
					</div>
					
					
				</div>
			</div>
			<!-- General Detail End -->
			
			<!-- full detail SetionStart-->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Thông Tin Chung</h2>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Địa Chỉ Email">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Số Điện Thoại">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Địa Chỉ">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" class="form-control" placeholder="Ngày Sinh">
								</div>	
							</div>
						</form>
					</div>
										
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Kinh Nghiệm</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Employer">
										</div>
										
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Position, e.g. Web Designer">
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon">Date From</span>
												<input type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
											</div>
										</div>
										
										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<span class="input-group-addon">Date To</span>
												<input type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
											</div>
										</div>	
									</div>
								</div>									
							</div>
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Kỹ Năng</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
									
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Skills, e.g. Css, Html...">
										</div>
										
										<div class="col-md-12 col-sm-12">
											<div class="input-group">
											<span class="input-group-addon">%</span>
												<input type="text" class="form-control" placeholder="85%">
											</div>
										</div>
									</div>
								</div>									
							</div>
						</form>
					</div>
					<div class="row bottom-mrg extra-mrg">
						<form>
							<div class="col-md-12">
								<button class="btn btn-success btn-primary small-btn"><a href="">Xác Nhận</a></button>
							</div>
						</form>
					</div>					
				</div>
			</section>
			<!-- full detail SetionStart-->			

			
			

@include('master_layout.footer')
@include('master_layout.modal_login')
@include('master_layout.script')
