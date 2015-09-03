<?php $path="/welfare_project/"?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>

	<!--Material design lite hosted files-->
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<!--Title-->
	<title><?= $title ?></title>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout">
		<header class="mdl-layout__header mdl-layout__header--scroll">
			<div class="mdl-layout-icon"></div>
			<div class="mdl-layout__header-row">
				<span href="<?= $path?>signIn.php" class="mdl-layout-title">Welfare Project</span>
				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="<?= $path?>">Home</a>
					<a class="mdl-navigation__link" href="<?= $path?>about.php">About</a>
					<a class="mdl-navigation__link" href="<?= $path?>events.php">Events</a>
					<a class="mdl-navigation__link" href="<?= $path?>contactUs.php">Contact Us</a>
					<a class="mdl-navigation__link" href="<?= $path?>signIn.php">Admin Sign-in</a>
				</nav>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
		            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
		              <i class="material-icons">search</i>
		            </label>
		            <div class="mdl-textfield__expandable-holder">
		              <input class="mdl-textfield__input" type="text" id="search" />
		              <label class="mdl-textfield__label" for="search">Enter your query...</label>
		            </div>
		       	</div>
			</div>
		</header>
		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
			<span class="mdl-layout-title">Welfare Project</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="<?= $path?>/">Home</a>
				<a class="mdl-navigation__link" href="<?= $path?>about.php">About</a>
				<a class="mdl-navigation__link" href="<?= $path?>services.php">Services</a>
				<a class="mdl-navigation__link" href="<?= $path?>contactUs.php">Contact Us</a>
				<a class="mdl-navigation__link" href="<?= $path?>signIn.php">Admin Sign-in</a>
			</nav>
		</div>

		<div class="mdl-layout__content mdl-color--grey-100 ">