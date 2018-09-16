<<<<<<< HEAD
<?php
    session_start();
    include 'Connection/connect.php';
?>
=======
>>>>>>> 1018418ca7724e1c60681ea468dba9ed5f2d94e1

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Style/style.css">
	</head>
	<body>
		<?php include 'menu.php' ?>


		<div class="container mt-5">

            <h1 class="ml-5 mb-5">Hello, <?= isset($_SESSION['logged_user_name']) ? $_SESSION['logged_user_name'] : 'stranger'?> !</h1>

			<?php include('products.php'); ?>

		</div>
	</body>
</html>
