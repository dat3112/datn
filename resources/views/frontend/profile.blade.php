@extends('frontend.layout.main')
@section('content')
<!--------------------- header ---------------------->
	<header class="d-flex align-items-center headerProfileUser">
		<div class="col-md-2">
			<a href="#"><img src="frontend/images/logo.png"></a>
		</div>
	</header>
	<!--------------------- /header ---------------------->

	<!--------------------- main ---------------------->
	<article class="main-ProfileUser" style="background-color: white;">
		<div class="generality col-md-10 row">
			<div class="left col-md-3">
				<div class="card card-primary card-outline">
					<div class="card-body box-profile tab">
						<div class="text-center">
							<img class="profile-user-img img-fluid img-circle" src="{{asset(session('user')->avatar)}}" alt="User profile picture">
						</div>

						<h3 class="profile-username text-center">{{session('user')->name}}</h3>

						<p class="text-muted text-center">Software Engineer</p>

						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<button class="tablinks" onclick="openCity(event, 'post')" id="defaultOpen"><span class="far fa-copy"></span>&ensp;Bài Đăng</button>
							</li>
							<li class="list-group-item">
								<button class="tablinks" onclick="openCity(event, 'info')"><span class="far fa-address-card"></span>&ensp;Giới Thiệu</button>
							</li>
							<li class="list-group-item">
								<button class="tablinks" onclick="openCity(event, 'album')"><span class="far fa-images"></span>&ensp;Ảnh</button>
							</li>
							<li class="list-group-item">
								<button class="tablinks" onclick="openCity(event, 'description')"><span class="far fa-edit"></span>&ensp;Mô Tả</button>
							</li>
							<li class="list-group-item">
								<button class="tablinks" onclick="openCity(event, 'pass')"><span class="fas fa-key"></span>&ensp;Đổi Mật Khẩu</button>
							</li>
						</ul>

						<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
			<div class="right col-md-9">
				<div id="post" class="tabcontent">
					<div class="title">
						<ul class="nav nav-tabs">
							<li class="nav-item col-6" style="border-right: #dee2e6 1px solid;">
								<a class="nav-link active" data-toggle="tab" href="#home"><span class="fas fa-align-justify"></span>&ensp;Danh sách bài đăng</a>
							</li>
							<li class="nav-item col-6">
								<a class="nav-link" data-toggle="tab" href="#menu1"><span class="far fa-plus-square"></span>&ensp;Thêm bài đăng mới</a>
							</li>
						</ul>
					</div>
					<div class="show">
						<div class="tab-content">
							<div class="tab-pane container active" id="home">
								@foreach($product as $item)
								<div class="border-post">
									<div class="post">
										<div class="top">
											<div class="left col-md-11">
												<div class="avatar">
													<img src="{{asset(session('user')->avatar)}}">
												</div>
												<div class="nameUser">
													<div class="name"><a href="#">{{session('user')->name}}</a></div>
													<div class="time">9/3/2020 13:02</div>
												</div>
											</div>
											<div class="right col-md-1">
												<div class="fas fa-ellipsis-h"></div>
											</div>
										</div>
										<div class="vienngancach"></div>
										<div class="content">
											<div class="place-name">
												<a href="#">{{$item->name}}</a>
											</div>
											<div class="place-info">
												<div class="place">
													<span class="fa fa-location-arrow"></span> 62 Hồ Tùng Mậu, Cầu Giấy, TP. Hà Nội
												</div>
												<div class="time-price">
													<div class="price">
														<span class="fa fa-tag minmaxpriceicon"></span> 25.000đ - 500.000đ
													</div>
												</div>
											</div>
											<div class="vienngancach"></div>
											<div class="cap">
												Tập ăn "thanh đạm"<br>Sống chậm lại, yêu thương động vật nhiều hơn😻<br>😘😘<br>Sắp có 1 tỷ phú truyền thống bứt phá thành tỷ phú ngành công nghiệp Blockchain👍
											</div>
										</div>
										<div class="images">
											<div class="image">
												<img src="frontend/images/user/makeup.jpg">
											</div>
										</div>
										<div class="interactive">
											<div class="amount">
												<span>75 luợt thích</span>
												<span>15 bình luận</span>
											</div>
											<div class="selection">
												<div class="left active">
													<a href="#"><i class="fas fa-heart"></i>&ensp;<span>19</span></a>&ensp;
													<a href="#"><i class="fas fa-comment"></i>&ensp;<span>19</span></a>
												</div>
												<div class="right">
													<a href="javascript:void(0)" onclick="document.getElementById('popop-evaluate').style.display='block'"><i class="fas fa-star"></i>&ensp;<span>Đánh giá</span></a>
												</div>
											</div>
										</div>
										<div class="comment">
											<div class="card-comment">
												<div class="left">
													<div class="avatar">
														<img src="frontend/images/user/Son-Tung-Mtp-3.jpg">
													</div>
													<div class="content">
														<div class="name">Mua Điện Thoại Mọi Tình Trạng
														</div>
														<div class="comment-content">có con HTC one8 á đá asad asada ấ asd a dá á đấ ấ ádasdng màn mọi thứ ok
														</div>
													</div>
												</div>
												<div class="right">
													<div class="edit">
														<span class="fas fa-ellipsis-h"></span>
													</div>
												</div>
											</div>
											<div class="card-comment">
												<div class="left">
													<div class="avatar">
														<img src="frontend/images/user/Son-Tung-Mtp-3.jpg">
													</div>
													<textarea placeholder="Viết bình luận..." class="write-comment content" rows="1" onkeydown="autosize(this);">
													</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
							<div class="tab-pane container fade" id="menu1">
								<div class="border-post">
									<div class="post">
										<form id="signupform" action="/tai-khoan" class="form-horizontal ng-pristine ng-valid" method="post" role="form" novalidate="novalidate">        
											<div class="form-group">
												<div class="col-md-12">
													<h3 style="margin:0">Tạo Bài Viết</h3>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Tên sản phẩm</label>
												<div class="col-md-8">
													<input class="form-control" id="name" name="name" placeholder="Tên sản phẩm" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Địa chỉ chi tiết</label>
												<div class="col-md-8">
													<input class="form-control" id="Email" name="Email" placeholder="Email" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Giá Sản Phẩm</label>
												<div class="col-md-8">
													<input class="form-control" id="Email" name="Email" placeholder="Email" type="text">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Danh mục</label>
												<div class="col-md-8">
													<select class="form-control">
														<option selected="">-- Chọn loại --</option>
														<option>Quận Ba Đình</option>
														<option>Quận Bắc Từ Liêm</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Quận/Huyện</label>
												<div class="col-md-4">
													<select class="form-control">
														<option selected="">-- Chọn quận/huyện --</option>
														<option>Quận Ba Đình</option>
														<option>Quận Bắc Từ Liêm</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3" >Hình ảnh</label>
												<div class="col-md-8" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
													<input class="form-control" id="image" name="image" placeholder="Email" type="file" value="">
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<textarea class="form-control" name="description" id="editor1" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<div class="submit-profile"><input type="submit" value="Đánh giá thay đổi" id="bt_submit" class="btn btn-primary" style="width: 200px;"></div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--------------------------------------------------- POPUP -------------------------------------------->
					<div id="popop-evaluate" class="popop-evaluate">
						<div class="popop-evaluate-content animate">
							<div class="up">
								<div class="left">Đánh giá</div>
								<div class="right">
									<span onclick="document.getElementById('popop-evaluate').style.display='none'" class="close">&times;</span>
								</div>
							</div>
							<div class="down">
								<div class="left col-md-4">
									<img src="https://images.foody.vn/res/g107/1064970/prof/s320x200/foody-upload-api-foody-mobile-170-210126155720.jpg">
									<div class="poster">
										<div class="avatar">
											<img src="https://images.foody.vn/res/g107/1064970/prof/s320x200/foody-upload-api-foody-mobile-170-210126155720.jpg">
										</div>

										<div style="float: left; width: 84%; margin-left: 10px;">
											<div class="name">Lão Trư - Bánh Mì Nướng Muối Ớt &amp; Bánh Trứng Gà Non</div>
											<div class="address">12 Ngách 15 Ngõ Gốc Đề, P. Minh Khai, Quận Hai Bà Trưng, Hà Nội</div>
										</div>
									</div>
								</div>
								<div class="right col-md-8">
									<div class="number-comment">5 Bình luận</div>
									<div class="vienngancach"></div>
									<div class="show-commnet"></div>
									<div class="statistical-comment">
										<div class="col-md-2 statistical">Thống kê</div>
										<div class="col-md-2 number"></div>
										<div class="col-md-2 number"></div>
										<div class="col-md-2 number"></div>
										<div class="col-md-2 number"></div>
										<div class="col-md-2 number"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--------------------------------------------------- /POPUP -------------------------------------------->

				<div id="info" class="tabcontent">
					<form id="signupform" action="/tai-khoan" class="form-horizontal ng-pristine ng-valid" method="post" role="form" novalidate="novalidate">        
						<div class="form-group">
							<div class="col-md-12">
								<h3 style="margin:0">Thông tin cá nhân</h3>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Họ và Tên</label>
							<div class="col-md-6">
								<input class="form-control" id="FirstName" name="FirstName" placeholder="Tên" type="text" value="foodee_94feeb45">
								<span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Email</label>
							<div class="col-md-6">
								<input class="form-control" id="Email" name="Email" placeholder="Email" type="text" value="">
								<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Giới tính</label>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<select class="form-control form-control-cbb form-control-cbb-gender" id="Gender" name="Gender"><option value="">- Lựa chọn -</option>
											<option value="M">Nam</option>
											<option value="F">Nữ</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Ngày sinh</label>

							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-4">
										<select class="form-control form-control-cbb form-control-cbb-gender" data-val="true" data-val-number="The field DateOfBirthDay must be a number." id="DateOfBirthDay" name="DateOfBirthDay"><option selected="selected" value="0">Ngày</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<select class="form-control form-control-cbb form-control-cbb-gender" data-val="true" data-val-number="The field DateOfBirthMonth must be a number." id="DateOfBirthMonth" name="DateOfBirthMonth"><option selected="selected" value="0">Tháng</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<select class="form-control form-control-cbb form-control-cbb-gender" data-val="true" data-val-number="The field DateOfBirthYear must be a number." id="DateOfBirthYear" name="DateOfBirthYear"><option selected="selected" value="0">Năm</option>
											<option value="1951">1951</option>
											<option value="1952">1952</option>
											<option value="1953">1953</option>
											<option value="1954">1954</option>
											<option value="1955">1955</option>
											<option value="1956">1956</option>
											<option value="1957">1957</option>
											<option value="1958">1958</option>
											<option value="1959">1959</option>
											<option value="1960">1960</option>
											<option value="1961">1961</option>
											<option value="1962">1962</option>
											<option value="1963">1963</option>
											<option value="1964">1964</option>
											<option value="1965">1965</option>
											<option value="1966">1966</option>
											<option value="1967">1967</option>
											<option value="1968">1968</option>
											<option value="1969">1969</option>
											<option value="1970">1970</option>
											<option value="1971">1971</option>
											<option value="1972">1972</option>
											<option value="1973">1973</option>
											<option value="1974">1974</option>
											<option value="1975">1975</option>
											<option value="1976">1976</option>
											<option value="1977">1977</option>
											<option value="1978">1978</option>
											<option value="1979">1979</option>
											<option value="1980">1980</option>
											<option value="1981">1981</option>
											<option value="1982">1982</option>
											<option value="1983">1983</option>
											<option value="1984">1984</option>
											<option value="1985">1985</option>
											<option value="1986">1986</option>
											<option value="1987">1987</option>
											<option value="1988">1988</option>
											<option value="1989">1989</option>
											<option value="1990">1990</option>
											<option value="1991">1991</option>
											<option value="1992">1992</option>
											<option value="1993">1993</option>
											<option value="1994">1994</option>
											<option value="1995">1995</option>
											<option value="1996">1996</option>
											<option value="1997">1997</option>
											<option value="1998">1998</option>
											<option value="1999">1999</option>
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
											<option value="2011">2011</option>
											<option value="2012">2012</option>
											<option value="2013">2013</option>
											<option value="2014">2014</option>
											<option value="2015">2015</option>
											<option value="2016">2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
										</select>
									</div>
								</div>

							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="submit-profile"><input type="submit" value="Đánh giá thay đổi" id="bt_submit" class="btn btn-primary" style="width: 200px;"></div>
							</div>
						</div>
					</form>
				</div>

				<div id="album" class="tabcontent">
					<h3>Tokyo</h3>
				</div>

				<div id="description" class="tabcontent">
					<h3>Mô Tả</h3>
				</div>
				<div id="pass" class="tabcontent">
					<form id="signupform" action="/tai-khoan" class="form-horizontal ng-pristine ng-valid" method="post" role="form" novalidate="novalidate">        
						<div class="form-group">
							<div class="col-md-12">
								<h3 style="margin:0">Thay đổi mật khẩu</h3>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Mật khẩu hiện tại</label>
							<div class="col-md-6">
								<input class="form-control" id="FirstName" name="FirstName" placeholder="Tên" type="text" value="foodee_94feeb45">
								<span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Mật khẩu mới</label>
							<div class="col-md-6">
								<input class="form-control" id="Email" name="Email" placeholder="Email" type="text" value="">
								<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Xác nhận mật khẩu mới</label>
							<div class="col-md-6">
								<input class="form-control" id="Email" name="Email" placeholder="Email" type="text" value="">
								<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="submit-profile"><input type="submit" value="Đánh giá thay đổi" id="bt_submit" class="btn btn-primary" style="width: 200px;"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</article>
	<script>
		// POPUP-evaluatev
		var modal = document.getElementById('popop-evaluate');

		// When the user clicks anywhere outside of the popop-evaluate, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
		// POPUP-evaluatev

		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
	<!--------------------- /main ---------------------->

@endsection
@section('script')
    <script>CKEDITOR.replace('editor1');</script>
@endsection
