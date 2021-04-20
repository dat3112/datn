<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<section style="text-align: center;">
	<h1>LOGIN ADMIN</h1>
	@if(isset($alert))
		<section class="alert alert-danger">{{$alert}}</section>
	@endif
	<form method="post">
		@csrf
		<section >
			<label>Tên đăng nhập:</label>
			<input type="text" name="username" class="form-control col-md-4" style="margin-left:500px">
		</section>
		<section >
			<label>Mật khẩu:</label>
			<input type="password" name="password" class="form-control col-md-4" style="margin-left:500px"> 
		</section>
		<section>
    		<br>
    		<input type="submit" value="Đăng nhập"/>  
    		<input type="reset" value="Làm lại"/>
    		</section>
	</form>
</section>
</body>
</html>