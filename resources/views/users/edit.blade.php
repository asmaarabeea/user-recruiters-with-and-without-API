<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{('public/fontawesome/css/font-awesome.min.css')}}">
</head>
<body>
	<div class="form-group" >
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{URL('users')}}/{{$user->id}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PUT">
				<div >
					<label for="name">User Name</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
				</div><br>
				<div >
					<label for="email">User Email</label>
					<input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
				</div><br>
				<div >
					<label for="password">User Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div><br>
				<div >
					<button class="btn btn-primary btn-block" type="submit">Edit</button>
				</div>

			</form>
		</div>
	</div>
</body>
</html>