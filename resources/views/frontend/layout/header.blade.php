<!--------------------- header ---------------------->
	<header class="d-flex align-items-center">
		<div class="generality col-md-10 row">
			<!----------- left -------------->
			<div class="left col-md-3 row">
				<div class="logo col-md-5"><a href="{{url('/')}}"><img src="frontend/images/logo.png"></a></div>
				<div class="category col-md-5">
					<form>
						<select>
							@foreach($category as $item)
							<option>{{$item->name}}</option>
							@endforeach
						</select>
					</form>
				</div>
			</div>
			<!----------- /left -------------->
			<!----------- center -------------->
			<div class="center col-md-5 row">
				<div class="search">
					<form class="d-flex justify-content-end">
						<input type="text" name="name" class="col-md-11">
						<button name="search"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
			<!----------- /center -------------->
			<!----------- right -------------->
			<div class="right col-md-3 row">
				<div class="login col-md-5">
					@if(session('user'))
						<section><a href="{{route('profile')}}">{{session('user')->email}}</a> [<a href="logout">Sign out</a>]</section>
					
					@else
						<a href="{{route('signin')}}">Đăng Nhập</a>
					@endif
					
				</div>
				<div class="from col-md-5">
					<form>
						<select>
							<option>Hà Nội</option>
						</select>
					</form>
				</div>
			</div>
			<!----------- /right -------------->
		</div>
	</header>
	<!--------------------- /header ---------------------->
	<!--------------------- banner ---------------------->
	
	<!--------------------- /banner ---------------------->