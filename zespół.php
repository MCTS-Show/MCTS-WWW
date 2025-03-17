<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zespół | Minecraft Tube Show</title>
	<?php include 'includes/head.php'; ?>
</head>
<body class="custom-bg">

	<?php include 'includes/header.php'; ?>

	<!-- Header -->
	<div class="py-5 header-h">
		<div class="container-fluid container-pixo text-center">
			<h1>Zespół</h1>
            <p>To nasz zespół zajmujący się tworzeniem </br>całego projektu MCTS</p>
		</div>
	</div>

	<!-- Content -->
	<div class="container-fluid container-pixo">
		<div class="content pt-5 px-5 my-5">
			<div class="row">
				<?php
					$id = "foldet";
					$name = "Foldet";
					$description = "Główny organizator";
					include 'includes/staff.php';
				?>

				<?php
					$id = "kubasek";
					$name = "Kubasek";
					$description = "Organizator";
					include 'includes/staff.php';
				?>

				<?php
					$id = "blixy";
					$name = "Blixy";
					$description = "Organizator";
					include 'includes/staff.php';
				?>

				<?php
					$id = "maciek";
					$name = "Maciek";
					$description = "Organizator";
					include 'includes/staff.php';
				?>

				<?php
					$id = "biera";
					$name = "Biera";
					$description = "Zarządca testów";
					include 'includes/staff.php';
				?>

				<?php
					$id = "kubaw";
					$name = "Kubaw";
					$description = "Programista";
					include 'includes/staff.php';
				?>

				<?php
					$id = "moris";
					$name = "Moris";
					$description = "Budowniczy";
					include 'includes/staff.php';
				?>

				<?php
					$id = "nafta";
					$name = "Nafta";
					$description = "Montażysta";
					include 'includes/staff.php';
				?>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'includes/footer.php' ?>

</body>
</html>