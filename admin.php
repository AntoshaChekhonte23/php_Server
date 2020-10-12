<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-8 mx-auto">

		<form action="index.php" action="blog6.php" method="GET">
			<div class="mt-3">
				<span class="font-weight-bold">Заголовок</span>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Текст поста:</span>
				<textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>			
			<div class="mt-3">
				<span class="font-weight-bold">Автор: </span>
				<input type="" name="user" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Картинка: </span>
				<input type="" name="img" class="form-control">
			</div>			
			<button class="btn btn-success mt-5">Создать пост</button>
		</form>

	</div>
</body>
</html>