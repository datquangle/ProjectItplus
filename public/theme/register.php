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
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				  <label for="birthday">Ngày sinh:</label>
				  <input type="date" class="form-control" id="birthday">
				</div>
				<div class="form-group">
				  <label for="pwd">Mật khẩu:</label>
				  <input required="true" type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Nhập lại mật khẩu:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd">
				</div>
				<div class="form-group">
				  <label for="address">Địa chỉ:</label>
				  <input type="text" class="form-control" id="address">
				</div>
				<button class="btn btn-success">Đăng ký</button> <br>
                Nếu bạn đã có tài khoản? <a href="./login.php">Đăng nhập ngay</a> 
			</div>
		</div>
	</div>

</body>
</html>