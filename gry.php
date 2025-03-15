<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gry | Minecraft Tube Show</title>
	<?php include 'includes/head.php'; ?>
</head>
<body class="custom-bg">
	
	<?php include 'includes/header.php'; ?>

	<!-- Header -->
	<div class="py-5 header-h">
		<div class="container-fluid container-pixo text-center">
			<h1>Nasze gry</h1>
			<p>Tutaj możesz przeczytać na czym <br /> polegają dane gry w turnieju!</p>
		</div>
	</div>

	<!-- Content -->
	<div class="container-fluid container-pixo">
		<div class="content py-5 px-5 my-5">
			<?php
				$game_id = "skyfight";
				$game_title = "Sky Fight";
				$game_description = "Sky Fight to gra rozgrywająca się na wyspach nad voidem, gdzie wszystkie drużyny rywalizują ze sobą, aby przeżyć jak najdłużej. Każdy na start dostaje podstawowe itemy, a resztę może zdobyć ze skrzynek z losowymi itemami. Na sam koniec zacznie się eliminacja, w której tnt będzie spadać z nieba, aż nie zabije wszystkich graczy.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce drużyny:<br />
				Zabójstwo:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "parkour";
				$game_title = "Parkour";
				$game_description = "Parkour to klasyczna gra, w której wyczucie skoku odgrywa kluczową role. Mapa jest podzielona na rundy oraz etapy: łatwy, średni, trudny, bardzo trudny. Na każdą runde przypada tylko jedna próba, więc jeśli gracz spadnie traci życie. Po stracie wszystkich żyć odpada.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Przejście etapu:<br />";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "infection";
				$game_title = "Infection";
				$game_description = "W trybie Infection kluczowa jest celność i zwinność. Łuk to ważna broń, ale są też inne opcje, jak potki do ataku i obrony. Gracze posiadają butle, które leczą drużynę i służą do otwierania sejfu z punktami. Więcej butli przyspiesza usuwanie zainfekowanej warstwy blokującej sejf, ale butle można niszczyć, co przywraca warstwę. Gracze zamiast umierać, zostają zainfekowani i muszą być uleczoni, by przeżyć. Mapa zawiera system wentylacji do szybkiego, ukrytego przemieszczania się, a z czasem bramy otwierają nowe pokoje. Na końcu w ostatnim pokoju poziom lawy rośnie.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce drużyny:<br />
				Zabójstwo:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "circlerush";
				$game_title = "Circle Rush";
				$game_description = "Circle Rush to gra rozgrywająca się na okrągłej mapie w dwuosobowych składach. Gracze na tym trybie muszą zająć jak najwięcej stref i przy tym nie dać się zabić, ponieważ odradzanie jest wyłączone.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce drużyny:<br />
				Zabójstwo:<br />
				Przejęcie strefy:<br />
				- Biała:<br />
				- Niebieska:<br />
				- Żółta:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "deadlyrun";
				$game_title = "Deadly Run";
				$game_description = "Deadly Run to zabójczy wyścig, w którym gracze muszą przejść specjalnie przygotowane tory. Dodatkowo mają możliwość walki między sobą, co może mocno utrudnić grę.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce gracza:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "survivalgames";
				$game_title = "Survival Games";
				$game_description = "Survival Games to gra, która stawia przed graczami wyzwanie przetrwania na ogromnej mapie ze skrzynkami wypełnionymi losowym lootem, a drużyna, która przeżyje jako ostatnia, wygrywa. PVP włącza się po kilkunastu sekundach od startu.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce drużyny:<br />
				Zabójstwo:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "explosiontag";
				$game_title = "Explosion Tag";
				$game_description = "Explosion Tag to wybuchowy tryb, w którym gracz posiadający tnt musi sie go czym predzej pozbyc, jesli nie zrobi tego odpowiednio szybko, wybuchnie i zostanie wyeliminowany. Gracze przekazuja miedzy soba tnt uderzajac się, a osoba ktora przetrwa jako ostatnia wygrywa.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce gracza:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "capturetheflag";
				$game_title = "Capture The Flag";
				$game_description = "Capture The Flag to gra, w której gracze muszą zdobyć flagę przeciwników i przenieść ją do swojej bazy. Przed grą gracze mogą rozstawić pułapki, w które mogą wpaść przeciwnicy. Po śmierci gracze odradzają się.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Wygrana:<br />
				Remis:<br />
				Zaniesione flagi:";
				include 'includes/minigame.php';
			?>

			<?php
				$game_id = "holeinthewall";
				$game_title = "Hole In The Wall";
				$game_description = "Na Hole In The Wall trzeba mieć oczy dookoła głowy. Zabójcze ściany tylko czekają na to, aby zepchnąć z platformy nieświadomych graczy! Ściany mogą pojawiać się z każdej strony, a ich prędkość i trudność zwiększa się z czasem! Dodatkowo trzeba uważać na znikające bloki na platformie oznaczone kolorem czerwonym.";
				$game_collapse = "Punktacja";
				$game_collapse_body = "Miejsce gracza:";
				include 'includes/minigame.php';
			?>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'includes/footer.php' ?>

</body>
</html>