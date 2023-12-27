<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Đăng ký người dùng mới</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Tên đăng nhập:</label>
				  <input required="true" type="text" class="form-control" id="usr">
				</div>
				
			
				<div class="form-group">
				  <label for="pwd">Mật khẩu:</label>
				  <input required="true" type="password" class="form-control" id="pwd">
				</div>
				
				<a href="dashboard.php" class="btn btn-success">Đăng nhập</a> <br>
				<!-- <button class="btn btn-success">Đăng nhập</button> <br> -->
                Nếu bạn chưa có tài khoản? <a href="./register.php">Đăng ký ngay</a> 
			</div>
		</div>
	</div>

</body>
</html>