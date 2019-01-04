<html>
<body>
<table>
	<tr>
		<td>name</td>
		<td>email</td>
		<td>password</td>
		<td>operator</td>
	</tr>
	@foreach($users as $user)
	<tr>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->password}}</td>
		<td>
			<a href="delete/{{$user->id}}">delete</a>
			&nbsp;
			<a href="show/{{$user->id}}">update</a>
			&nbsp;
			<a href="detail/{{$user->id}}">detail</a>
		</td>
	</tr>
	@endforeach
	<tr>
		<td colspan="4">
			<a href="create">create</a>
		</td>
	</tr>
</table>
</body>
</html>