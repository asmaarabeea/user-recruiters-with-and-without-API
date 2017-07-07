<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Api</title>
</head>
<body>
<div class="container">
	<div class="content">
		<?php
			$api = file_get_contents(url('api/users'));
			$api = json_decode($api);
		?>
	</div>
</div>

{{$api->message}}

</body>
</html>