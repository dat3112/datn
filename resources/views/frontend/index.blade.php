@extends('frontend.layout.main')
@section('content')
<!--------------------- main ---------------------->
	<div class="banner-index">
		<div class="generality">
			<img src="frontend/images/trangchu/banner1.png">
		</div>
	</div>
	<article class="main-index">
		<div class="generality col-md-10 row">
			<div class="title container">
				<div class="left">
					<ul class="nav nav-tabs">
						
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#menu1">Sản phẩm bán chạy</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#menu2">Mới nhất</a>
						</li>
						
						
					</ul>
				</div>
				<div class="right">
					
				</div>
			</div>
			<!------------ show ------------->
			<div class="show">
				<div class="tab-content">
					<div id="home" class="container tab-pane active"><br>
						<div class="container">
							<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4">
								@foreach($product as $item)
								<div class="col">
									<div class="card-product">
										<!-- <div class="p-3 border bg-light">Row column</div> -->
										<div class="image">
											<a href="#"><img src="{{asset($item->image)}}"></a>
											<div class="price"><i>{{$item->price}}</i></div>
										</div>
										<div class="content">
											<h5 class="limit"><a href="#">{{$item->name}}</a></h5>
											<div class="limit"><span>62 Hồ Tùng Mậu, Cầu Giấy, TP. Hà Nội</span></div>
											<div class="post-user">
												<div class="avatar">
													<a href="#"><img src="frontend/images/user/Son-Tung-Mtp-3.jpg"></a>
												</div>
												<h6><a href="#">Phạm Tuấn Nghĩa Max Đẹp Trại Luôn á á</a></h6>
											</div>
										</div>
										<div class="selection">
											<div class="left active">
												<a href="#"><i class="fas fa-heart"></i>&ensp;<span>19</span></a>&ensp;
												<a href="#"><i class="fas fa-comment"></i>&ensp;<span>19</span></a>
											</div>
											<div class="right">
												<a href=""><i class="fas fa-star"></i>&ensp;<span>Đánh giá</span></a>
											</div>
										</div>
									</div>
									
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
					<div id="menu1" class="container tab-pane fade">
						<div class="container">
							<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-4 g-3 g-sm-4 g-lg-5 g-xl-6">
								<div class="card-product col">
									<!-- <div class="p-3 border bg-light">Row column</div> -->
									<div class="image">
										<img src="frontend/images/sanpham/4.jpg">
										<div class="price"><i>500.000đ</i></div>
									</div>
									<div class="content">
										<h5 class="limit"><a href="#">Câm Tấm Yến Vy được nấu trong bảy bảy bốn mươi chín ngày</a></h5>
										<div class="limit"><span>62 Hồ Tùng Mậu, Cầu Giấy, TP. Hà Nội</span></div>
										<div class="post-user">
											<div class="avatar">
												<img src="frontend/images/user/Son-Tung-Mtp-3.jpg">
											</div>
											<h6>Phạm Tuấn Nghĩa Max Đẹp Trại Luôn á</h6>
										</div>
									</div>
									<div class="selection">
										<div class="left">
											<i class="fas fa-comment"></i>&ensp;<span>19</span>
										</div>
										<div class="right">
											<div>
												<i class="fas fa-star"></i>&ensp;<span>Đánh giá</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card-product col">
									<!-- <div class="p-3 border bg-light">Row column</div> -->
									<div class="image">
										<img src="frontend/images/sanpham/2.jpg">
										<div class="price"><i>500.000đ</i></div>
									</div>
								</div>
								<div class="card-product col">
									<!-- <div class="p-3 border bg-light">Row column</div> -->
									<div class="image">
										<img src="frontend/images/sanpham/8.jpg">
										<div class="price"><i>500.000đ</i></div>
									</div>
								</div>
								<div class="card-product col">
									<!-- <div class="p-3 border bg-light">Row column</div> -->
									<div class="image">
										<img src="frontend/images/sanpham/8.jpg">
										<div class="price"><i>500.000đ</i></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="menu2" class="container tab-pane fade"><br>
						<h3>Menu 2</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					</div>
				</div>
			</div>
			<!------------ statistics ------------->
			<div class="statistics">
				<h3><span>THỐNG KÊ</span></h3>
				<div class="container">
					<div class="row row-cols-2 row-cols-sm-2 row-cols-lg-4">
						<div class="col">
							<div class="card-statistics">
								<div class="icon">
									<i class="fas fa-bookmark"></i>
								</div>
								<h5>CHẤT LƯỢNG</h5>
								<span>Hiện tại đã có 4502 người tin tưởng sử dụng lighting</span>
							</div>
						</div>
						<div class="col">
							<div class="card-statistics">
								<div class="icon">
									<i class="fas fa-bookmark"></i>
								</div>
								<h5>CHẤT LƯỢNG</h5>
								<span>Hiện tại đã có 4502 người tin tưởng sử dụng lighting</span>
							</div>
						</div>
						<div class="col">
							<div class="card-statistics">
								<div class="icon">
									<i class="fas fa-bookmark"></i>
								</div>
								<h5>CHẤT LƯỢNG</h5>
								<span>Hiện tại đã có 4502 người tin tưởng sử dụng lighting</span>
							</div>
						</div>
						<div class="col">
							<div class="card-statistics">
								<div class="icon">
									<i class="fas fa-bookmark"></i>
								</div>
								<h5>CHẤT LƯỢNG</h5>
								<span>Hiện tại đã có 4502 người tin tưởng sử dụng lighting</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<!--------------------- /main ---------------------->
@endsection
