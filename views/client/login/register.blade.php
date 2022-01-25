<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../login_html/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login_html/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login_html/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_html/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login_html/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../login_html/images/1bf1dc6a8760790fb55d5c1c48b448cb.png);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" action="{{route('register')}}" method="POST" enctype="multipart/form-data" >
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="users[name]" placeholder="Enter name">
						<span class="focus-input100"></span>
					</div>

          			<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="users[email]" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="users[phone]" placeholder="Enter phone">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Province</span>
						<select class="form-control province_id" name="users[province_id]">
							<option></option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">District</span>
						<select class="form-control district_id" name="users[district_id]">
							<option></option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100 ">Commune</span>
						<select class="form-control commune_id" name="users[commune_id]">
							<option></option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="users[password]" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>


					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="../login_html/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_html/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_html/vendor/bootstrap/js/popper.js"></script>
	<script src="../login_html/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_html/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_html/vendor/daterangepicker/moment.min.js"></script>
	<script src="../login_html/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../login_html/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../login_html/js/main.js"></script>

	<script>
		$(document).ready(function() {
			let arr = [];
				$.ajax('/api/v1/locations?filter_groups[0][filters][1][key]=parent_code&filter_groups[0][filters][1][operator]=eq&filter_groups[0][filters][1][value]=', {
					type: 'GET',  // http method
					dataType: 'json', 
					data: { myData: 'This is my data.' },  // data to submit
					success: function (data, status, xhr) {
						let html = ""
						arr = data.data.locations;
						arr.forEach(obj => {
							   html += `<option value="${obj.code}">${obj.name}</option>`
    					});
						$('.province_id').append(html);

					},
					error: function (jqXhr, textStatus, errorMessage) {
							$('p').append('Error: ' + errorMessage);
						}
						// console.log("html", html)

				});
			$('.province_id').on('change',function(){
				id = $(this).val();
				console.log(id);
				let arr1 = [];
				$('.district_id').html("<option></option>")
				$('.commune_id').html("<option></option>")
				$.ajax(`/api/v1/locations?filter_groups[0][filters][1][key]=parent_code&filter_groups[0][filters][1][operator]=eq&filter_groups[0][filters][1][value]=${id}`, {
					type: 'GET',  // http method
					dataType: 'json', 
					data: { myData: 'This is my data.' },  // data to submit
					success: function (data, status, xhr) {
						let html = ""
						arr1 = data.data.locations;
						arr1.forEach(obj => {
							   html += `<option value="${obj.code}">${obj.name}</option>`
    					});
						console.log(html)
						$('.district_id').append(html);

					},
					error: function (jqXhr, textStatus, errorMessage) {
							$('p').append('Error: ' + errorMessage);
						}

				});
			});

			$('.district_id').on('change',function(){
				id = $(this).val();
				console.log(id);
				let arr2 = [];
				$('.commune_id').html("<option></option>")
				$.ajax(`/api/v1/locations?filter_groups[0][filters][1][key]=parent_code&filter_groups[0][filters][1][operator]=eq&filter_groups[0][filters][1][value]=${id}`, {
					type: 'GET',  // http method
					dataType: 'json', 
					data: { myData: 'This is my data.' },  // data to submit
					success: function (data, status, xhr) {
						let html = ""
						arr2 = data.data.locations;
						arr2.forEach(obj => {
							   html += `<option value="${obj.code}">${obj.name}</option>`
    					});
						$('.commune_id').append(html);

					},
					error: function (jqXhr, textStatus, errorMessage) {
							$('p').append('Error: ' + errorMessage);
						}

				});
			});
		});
	</script>

</body>
</html>