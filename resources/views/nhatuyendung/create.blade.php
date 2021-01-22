@include('master_layout.header')
			<!-- Header Title Start -->
			<section class="inner-header-title" src="public/asset/img/banner.jpg">
				<div class="container">
					<h1>Khởi Tạo Thông Tin Công Ty</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			
			<!-- Header Title End -->
			
			<!-- General Detail Start -->
			<div class="detail-desc section">
				<div class="container white-shadow">
					<div class="row">
						<div class="detail-pic js">
							<div class="box">
								<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile"/>
								<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
							</div>
						</div>
					</div>
					
					<div class="row bottom-mrg">
						<form class="add-feild">
						
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Tên Công Ty">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Khẩu Hiệu Công Ty">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="selectpicker form-control" ultiple title="Tất Cả Danh Mục">
										
										<option>Software</option>
										<option>Hardware</option>
										<option>Machanical</option>
										<option>HR/Manager</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Giám Đốc Điều Hành">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Mô Tả Công Ty"></textarea>
							</div>
						</form>
					</div>
					
					
					
				</div>
			</div>
			<!-- General Detail End -->
			
			<!-- Basic Full Detail Form Start -->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Thông Tin Khác</h2>
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
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Địa Chỉ Website">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Vị Trí Công Ty">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" class="form-control" placeholder="Ngày Thành Lập">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users"></i></span>
									<input type="text" class="form-control" placeholder="Số Lượng Nhân Viên">
								</div>	
							</div>
							
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Mạng Xã Hội</h2>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>	
							</div>
							
						</form>
					</div>
					
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">About Company</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control textarea" placeholder="About Company"></textarea>
							</div>	
							<div class="col-md-12 col-sm-12">
								<button class="btn btn-success btn-primary small-btn"><a href="{{route('nhatuyendung.index')}}">Xác Nhận</a></button>	
							</div>	
						</form>
					</div>
				</div>
			</section>
			<!-- Basic Full Detail Form End -->
@include('master_layout.footer')
@include('master_layout.modal_login')
@include('master_layout.script')
			
		</div>
	</body>

<!-- create-company41:40-->
</html>