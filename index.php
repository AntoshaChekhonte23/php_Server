<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	
	<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
<body>
	
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[
					title => "С т а т ь я  1",
					short_text => "Lorem",
					img => "img/1.jpg",
					users => "user12",
					url => "blog1.php"
				],
				[
					title => "Статья 2",
					short_text => "Lorem",
					img => "img/2.jpg",
					users => "user30",
					url => "blog2.php"
				],
				[
					title => "Статья 3",
					short_text => "Lorem",
					img => "img/3.jpg",
					users => "user50",
					url => "blog3.php"
				],
				[
					title => "Статья 4",
					short_text => "Lorem",
					img => "img/4.jpg",
					users => "user90",
					url => "blog4.php"
				],
				[
					title => "Статья 5",
					short_text => "Lorem",
					img => "img/5.jpg",
					users => "user25",
					url => "blog5.php"
				],
				[
					title => $_GET["title"],
					short_text => $_GET["text"],
					img => $_GET["img"],
					users => $_GET["user"],
					url => "blog6.php"
				]

			]
			
			
			
			
		 ?>
	</div> 

	<div class="col-7 mx-auto pt-4" style="margin-top: 50px; background-color: white;">
		<hr style="background:black;">
		<?php
		// подключение к базе данных
			$connect = mysqli_connect("127.0.0.1","root","","Blog");

			
			// запрос таблицы "posts"
			$text_query = 'SELECT * FROM posts3';
			$query = mysqli_query($connect, $text_query);
			
			$result = $query -> fetch_assoc();
			$result2 = $query -> fetch_assoc();
			$result3 = $query -> fetch_assoc();
			$result4 = $query -> fetch_assoc();
			$result5 = $query -> fetch_assoc();
			
		?>	
		<h1 class="text-center text1 ">Б Л О Г</h1>
		<hr style="background:black;">

		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
				<?php
					$input = $_GET["Login"];
					$input_ = $_GET["Password"];
					$log = "R o t a t o s k r ";
					$pass = "wwwWOW101";
				?>
				<?php
					if($input === $log || $input_ === $pass){
						echo "<h1 class='text'>П р и в е т с т в у е м &nbspВ а с, &nbsp". $input .".</h1>";
					} else{
						echo "<h1 style='margin-bottom:20px;' class='text'>В з л о м &nbsp  п о л ь з о в а т е л я</h1>";
					}
				?>			
				
			 <?php 
			 for($i=0;$i<6;$i++){
				echo "<img class='w-100' src=' ".$database[$i]["img"]." '>";
				echo "<a class='effect' href=' ".$database[$i]["url"]." '><h2 style='margin-bottom:-3px;' class='text-center effect'> " . $database[$i]["title"] . "</h2></a>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$database[$i]["users"] ."</p>";
				echo "<p class='text-center p'>" . $database[$i]["short_text"] . "</p>";

				

				
			 }
			 
			 ?>
			 <?php
			 	echo "<img class='w-100' src=' ".$result["Img"]." '>";
				echo "<a class='effect' href=' ".$database[0]["url"]." '><h2 style='margin-bottom:-3px;' class='text-center effect'> " . $result["Title"] . "</h2></a>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$result["User"] ."</p>";
				echo "<p class='text-center p'>" . $result["Text"] . "</p>";
			 ?>
			 <?php
			 	echo "<img class='w-100' src=' ".$result2["Img"]." '>";
				echo "<a class='effect' href=' ".$database[1]["url"]." '><h2 style='margin-bottom:-3px;' class='text-center effect'> " . $result2["Title"] . "</h2></a>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$result2["User"] ."</p>";
				echo "<p class='text-center p'>" . $result2["Text"] . "</p>";
			 ?>
			 <?php
			 	echo "<img class='w-100' src=' ".$result3["Img"]." '>";
				echo "<a class='effect' href=' ".$database[2]["url"]." '><h2 style='margin-bottom:-3px;' class='text-center effect'> " . $result3["Title"] . "</h2></a>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$result3["User"] ."</p>";
				echo "<p class='text-center p'>" . $result3["Text"] . "</p>";
			 ?>
			 <?php
			 	echo "<img class='w-100' src=' ".$result4["Img"]." '>";
				echo "<a class='effect' href=' ".$database[3]["url"]." '><h2 style='margin-bottom:-3px;' class='text-center effect'> " . $result4["Title"] . "</h2></a>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$result4["User"] ."</p>";
				echo "<p class='text-center p'>" . $result4["Text"] . "</p>";
			 ?>
			  <?php
			 	echo "<img class='w-100' src=' ".$result5["Img"]." '>";
				echo "<a class='effect' href=' ".$database[4]["url"]." '><h2 style='margin-bottom:-3px;' class='text-center effect'> " . $result5["Title"] . "</h2></a>";
				echo "<p style='margin-bottom:5px;' class='text-center'>Автор: ".$result5["User"] ."</p>";
				echo "<p class='text-center p'>" . $result5["Text"] . "</p>";
			 ?>
			
		</div>
	</div>
	
</body>
</html>