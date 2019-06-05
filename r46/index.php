<!DOCTYPE html>
<html>
<head>
	<title>Админ панель</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body class="bg-light">

	<div class="col-12 mt-2">
		<div class="row">
			<div class="col-2">
				<a href="main.php"> Перейти на главную</a>
			</div>
		</div>
	</div>

	<div class="ml-3 mt-2">
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<input class="p-1 rounded" type="" name="name" placeholder="Название">
			<input class="p-1 rounded" type="" name="price" placeholder="Цена">
			<input type="file" name="pic">
 			<input type="submit" value="Загрузить">
		</form>
	</div>
	
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'dyach_consutaltion');
		$catalog = mysqli_query($connect, "SELECT * FROM onlineshop");
		$count = $catalog->num_rows;
		for ($i=0; $i < $count ; $i++) { 
			$game = $catalog->fetch_assoc();
	?>

			<div class="col-11 mx-auto border mt-2 bg-white">
				<div class="row">
					<div class="col-2 m-0 p-0">
						<?php 
							echo '<img class = "w-75" src = "1/' . $game['img'] . '" >' ;
						?>
					</div>
					<div class="col-10 pt-1">
						<?php 
							
							echo '<p>' . $game['name'] . '</p>';
							echo '<p> Цена: ' . $game['price'] . ' рублей </p>';  
						?>
						<div class="row pl-3 text-right">
							<form action="update.php" method="POST" class="pr-2">
								<?php 
									echo '<input type="hidden" name="name" value="' . $game['name'] . '">' ;
									echo '<input type="hidden" name="price" value="' . $game['price'] . '">' ;
									echo '<input type="hidden" name="img" value="' . $game['img'] . '">' ;
									echo '<input type="hidden" name="id" value="' . $game['id'] . '">' ;
								?>
								<button class="btn btn-warning">Изменить</button>
							</form>
							<form action="delete.php" method="POST">
								<?php 
									echo '<input type="hidden" name="id" value="' . $game['id'] . '">' ;
								?>
								<button class="btn btn-danger">Удалить</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	<?php }; ?>
	
</body>
</html>