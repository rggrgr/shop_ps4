<!DOCTYPE html>
<html>
<head>
	<title>Корзина</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="col-12 mt-2">
		<div class="row">
			<div class="col-4">
				<a href="main.php"> Главная </a>
			</div>
		</div>
	</div>
<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'dyach_consutaltion');
		$catalog = mysqli_query($connect, "SELECT * FROM order_onlineshop");
		$count = $catalog->num_rows;
		$summ = 0;
		for ($i=0; $i < $count ; $i++) { 
			$game = $catalog->fetch_assoc();
			$summ = $summ + $game['price'];
	?>
			<div class="col-11 mx-auto border mt-2 bg-white">
				<div class="row">
					<div class="col-2 m-0 p-0">
						<?php 
							echo '<img class = "w-100" src = "' . $game['img'] . '" >' ;
						?>
					</div>
					<div class="col-10 pt-1">
						<?php 
							echo '<p>' . $game['name'] . '</p>';
							echo '<p> Цена: ' . $game['price'] . ' рублей </p>';  
						?>
						<div class="row pl-3 text-right">
							<form action="delete_trash.php" method="POST" class="pr-2">
								<?php 
									echo '<input type="hidden" name="id" value="' . $game['id'] . '">' ;
								?>
								<button class="btn  btn-danger">Удалить</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	<?php
	 	};
	 	echo 
	 	'<div class = "ml-4 mt-2">' .
	 	'<p> Итого к оплате: ' . $summ . '</p>' .
	 	'<button class="btn btn-success">Оплатить</button>' .
	 	'</div>'
	?>
</body>
</html>