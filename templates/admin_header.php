<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!--Meta data for rendering-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>

	<!--AngularJS-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular-route.min.js"></script>

	<script src="js/angular/app.js"></script>

	<!--Material design lite hosted files-->
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

	<!--Style sheet-->
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	
	<!--Title-->
	<title>Welfare Project</title>
</head>
<body>


	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<!--Header-->
		<header class="mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<div class="mdl-layout-title">Home</div>
				<div class="mdl-layout-title" style="margin-top: 5px"> <i class="material-icons">keyboard_arrow_right</i></div>
				<div class="mdl-layout-title" style="font-size: 15px; margin-top: 3px; opacity: 0.6" id='demo'>Events</div>

				<div class="mdl-layout-spacer"></div>

				<div class="my-search mdl-textfield mdl-js-textfield mdl-textfield--expandable">
		            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
		              <i class="material-icons">search</i>
		            </label>
		            <div class="mdl-textfield__expandable-holder">
		              <input class="mdl-textfield__input" type="text" id="search" />
		              <label class="mdl-textfield__label" for="search"></label>
		            </div>
		       	</div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<li class="mdl-menu__item">Link 1</li>
					<li class="mdl-menu__item">Link 2</li>
					<li class="mdl-menu__item">Link 3</li>
				</ul>

			</div>
		</header>

		<!--Side drawer-->
		<div class="my-layout mdl-layout__drawer mdl-color--blue-grey-800 mdl-color-text--blue-grey-50">
		
			<header class="my-drawer-header mdl-color--blue-grey-900 ">
	          <img src='<?php if(isset($_SESSION['pic'])){echo $_SESSION['pic'];}else{header("Location: signIn.php");} ?>' class="my-avatar">
	          <div class="my-avatar-dropdown">
	            <span><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{header("Location: signIn.php");} ?></span>
	            <div class="mdl-layout-spacer"></div>
	            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
	              <i class="material-icons" role="presentation">arrow_drop_down</i>
	              <span class="visuallyhidden">Accounts</span>
	            </button>
	            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
	              <a href="../views/editProfile.php" onclick="getElementById('demo').innerHTML = 'Profile'" style="text-decoration: none"><li class="mdl-menu__item">Edit Profile</li></a>
	              <a href="../logOut.php" style="text-decoration: none"><li class="mdl-menu__item">Log Out</li></a>
	            </ul>
	          </div>
	        </header>
			

			<header class=""></header>
			<nav class="my-navigation mdl-navigation">
				<a class="mdl-navigation__link" href="../views/eventGallery.php" onclick="getElementById('demo').innerHTML='Events'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Update Events</a>
				<a class="mdl-navigation__link" href="../views/eventAddForm.php" onclick="getElementById('demo').innerHTML='Add Event'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_circle</i>Add Event</a>
			</nav>
		</div>
				
		<!--Content excluding header and drawer-->
		<main class="mdl-layout__content mdl-color--grey-100">