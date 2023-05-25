<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<title>Log in Form</title>

</head>
<body>
	<center>
	<h1>Log in Form <text style="color:red"></text></h1>
	<form method="POST" action="/dashboard" style="width: 500px; border: 3px solid rgb(177, 142, 142); padding: 20px;
	 border-radius: 20px;">
		
		<label for="username"></label>
		@csrf
		<input type="text" name="name" autofocus required placeholder="Username">
		<br><br>
		<label for="password"></label>
		<input type="password" name="name" autofocus required placeholder="Password">
		<br><br>
		<button type="submit">Login</button>

</form>
</center>
	<center>
	
	</center>
</body>
</html>