<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		}
		.text1{
			font-family: 'Jost', sans-serif;
		}
		.text{
			font-family: 'Jost', sans-serif;
			font-size: 25px;
		}
		.effect{
			font-family: 'Jost', sans-serif;
			font-size:30px;
			padding-top:10px;
			color:black;
		}
		p{
			font-family: 'Jost', sans-serif;
			font-size:20px;
		}
		.p{
			font-family: 'Jost', sans-serif;
			font-size:17px;
		}
		.effect:hover{
			text-decoration: none;
			color:gray;
			opacity: 1s;
			transition:0.5s
		}
	
	</style>
</head>
<body>
	<?php 
			$database = [
				[
					title => "С т а т ь я  1",
					short_text => "Lorem",
					long_text => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit maiores, excepturi nobis harum nesciunt dicta, modi corporis, numquam est aliquid id! Similique enim sint, facere, deleniti explicabo quis quo at.",
					img => "img/1.jpg",
					users => "user12",
					url => "blog1.php"
				],
				[
					title => "Статья 2",
					short_text => "Lorem",
					long_text => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit maiores, excepturi nobis harum nesciunt dicta, modi corporis, numquam est aliquid id! Similique enim sint, facere, deleniti explicabo quis quo at.",
					img => "img/2.jpg",
					users => "user30",
					url => "blog2.php"
				],
				[
					title => "Статья 3",
					short_text => "Lorem",
					long_text => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit maiores, excepturi nobis harum nesciunt dicta, modi corporis, numquam est aliquid id! Similique enim sint, facere, deleniti explicabo quis quo at.",
					img => "img/3.jpg",
					users => "user50",
					url => "blog3.php"
				],
				[
					title => "Статья 4",
					short_text => "Lorem",
					long_text => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit maiores, excepturi nobis harum nesciunt dicta, modi corporis, numquam est aliquid id! Similique enim sint, facere, deleniti explicabo quis quo at.",
					img => "img/4.jpg",
					users => "user90",
					url => "blog4.php"
				],
				[
					title => "Статья 5",
					short_text => "Lorem",
					long_text => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit maiores, excepturi nobis harum nesciunt dicta, modi corporis, numquam est aliquid id! Similique enim sint, facere, deleniti explicabo quis quo at.",
					img => "img/5.jpg",
					users => "user25",
					url => "blog5.php"
				],
				[
					title => $_GET["title"],
					short_text => $_GET["text"],
					long_text => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit maiores, excepturi nobis harum nesciunt dicta, modi corporis, numquam est aliquid id! Similique enim sint, facere, deleniti explicabo quis quo at.",
					img => $_GET["img"],
					users => $_GET["user"],
					url => "blog6.php"
				]

			]
			
		 ?>
		
		<div class="col-7 mx-auto pt-4" style="margin-top: 50px; background-color: white;">
		<hr style="background:black;">

		<h1 class="text-center text1 ">Б Л О Г</h1>
		<hr style="background:black;">

		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->	
		</div>
			<?php
				$connect = mysqli_connect("127.0.0.1","root","","Blog");
				$text_query = 'SELECT * FROM full_posts';
				$query = mysqli_query($connect, $text_query);
				$result1 = $query -> fetch_assoc();
			?>	
			 <?php 
				echo "<img class='w-100' src=' ".$result1["Img"]." '>";
				echo "<h2 style='margin-bottom:-3px;' class='text-center'> " . $result1["Title"] . "</h2>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$result1["User"] ."</p>";
				echo "<p class='text-center p pb-5'>" . $result1["Text"] . "</p>";
			 ?>
		</div>
	</div>
</body>
</html>