<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<title>Log in Form</title>

</head>
<body>
	<center>
	<h1>Log in Form <text style="color:red"></text></h1>
	<form method="POST" action="{{route('login')}}">
		
		<label for="username"></label>
		@csrf
		<input type="text" name="username" autofocus required placeholder="Username">
		<br><br>
		<label for="password"></label>
		<input type="password" name="password" autofocus required placeholder="Password">
		<br><br>
		<button type="submit">Login</button>

</form>
@if ($errors->any())
<div style="color:red;">
	{{$errors->first()}}

</div>

@endif
</center>
	<center>
	
	</center>
</body>
</html>