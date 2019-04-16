<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo ListUsers</title>
</head>
<body>
	<h1>Danh sách thành viên</h1>
	<table>
		<tr>
			<th>Họ và tên</th>
			<th>Email</th>
		</tr>
		@foreach($users as $user)
			<tr>
				<td> {{$user->name}} </td>
				<td> {{$user->name}} </td>
			</tr>
		@endforeach
	</table>
</body>
</html>
