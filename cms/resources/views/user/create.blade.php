<html>
<head>
	
</head>
<body>
<table>
	<form method="post" action="/user/store">
	{!! csrf_field() !!}
	<tr>
		<td>username:</td>
		<td><input type="text" name="name" id="name" value="{{$user->name}}"/></td>
	</tr>
	<tr>
		<td>email:</td>
		<td><input type="text" name="email" id="email" value="{{$user->email}}"/></td>
	</tr>
	<tr>
		<td>password:</td>
		<td><input type="text" name="password" id="password" value="{{$user->password}}"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="hidden" id="id" name="id" value="{{$user->id}}"/>
			<input type="submit" value="submit"/>
		</td>
	</tr>
	</form>
</table>
</body>
</html>