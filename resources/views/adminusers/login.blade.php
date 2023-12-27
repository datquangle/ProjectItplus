<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
{{--    @include('layouts.css')--}}
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Đăng nhập</h2>
			</div>
			<div class="panel-body">
                <form action="{{ route('post.login') }} " method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="usr">Tên đăng nhập:</label>
                        <input required="true" type="text" class="form-control" id="username" name="username">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input required="true" type="password" class="form-control" id="password" name="password">
                    </div>

                    <button class="btn btn-success" type="submit">Đăng nhập</button> <br>
                    Nếu bạn chưa có tài khoản? <a href="{{ route('get.register') }}">Đăng ký ngay</a>
                </form>

			</div>
		</div>
	</div>

    {{-- @include('admin.layouts.js') --}}


</body>
</html>
