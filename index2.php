<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Document</title>
	<style>
		.box{
			width:200px;
			height:200px;
			background-color:purple;
			margin-right:auto;
			margin-left:auto;
		}
	</style>
</head>
<body>

	<form class="col-3 mx-auto" action="index.php" method="GET">

		<div class="form-group">
			<label for="exampleInputEmaill1">Login</label>
			<input type="text" class="form-control" name="Login">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="Password" id="exampleInputPassword1">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
</body>
</html>