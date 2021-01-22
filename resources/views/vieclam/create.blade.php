@include('master_layout.header')	
	<!-- Header Title Start -->
			<section class="inner-header-title" src="public/asset/img/banner.jpg">
				<div class="container">
					<h1>Tạo Công Việc</h1>
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
								<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
								<label for="upload-pic"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
							</div>
						</div>
					</div>
					
					<div class="row bottom-mrg">
						<form class="add-feild">
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Tên Công Việc">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Your Email">
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
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Địa Chỉ Làm Việc">
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Mô Tả Công Việc"></textarea>
							</div>
							<div class="col-md-12 col-sm-12">
								<button class="btn btn-success btn-primary small-btn"><a href="{{route('nhatuyendung.index')}}">Xác Nhận</a></button>	
							</div>	
						</form>
					</div>
				</div>
			</div>
			<!-- General Detail End -->
@include('master_layout.footer')
@include('master_layout.modal_login')
@include('master_layout.script')