<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New</title>
	<link rel="stylesheet" href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{('fontawesome/css/font-awesome.min.css')}}">
</head>
<body>
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{URL('users')}}" method="post">
			{{csrf_field()}}
				<div>
					<label for="name">User Name</label>
					<input type="text" name="name" class="form-control" id="name">
				</div><br>
				<div>
					<label for="email">User Email</label>
					<input type="text" name="email" class="form-control" id="email">
				</div><br>
				<div>
					<label for="password">User Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div><br>
				<div>
					<button class="btn btn-primary btn-block" type="submit">Add</button>
				</div>

			</form>
		</div>
	</div>
</body>
</html>