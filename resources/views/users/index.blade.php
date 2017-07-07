<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{('p/fontawesome/css/font-awesome.min.css')}}">
</head>
<body>
	<table border="2">
		<tbody>
			<tr>
				<th>User Name</th>
				<th>User Email</th>
				<th>User View</th>
				<th>Edit User</th>
				<th>Delete User</th>
			</tr>
			@if(isset($users))
				@foreach($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td><a href="{{URL('users')}}/{{$user->id}}">Show</a></td>
						<td><a href="{{URL('users')}}/{{$user->id}}/edit">Edit</a></td>
						<form action="{{URL('users')}}/{{$user->id}}" method="post">
							{{csrf_field()}}
							<input type="hidden" name="_method" value="DELETE">
							<td><button type="submit" class="btn btn-danger">Delete</button> </td>
						</form>
							
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
	<h3><a href="users/create">Add New</a></h3>
</body>
</html>