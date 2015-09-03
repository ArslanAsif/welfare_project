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

	<!--Style sheet-->
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	
	<!--Title-->
	<title>Welfare Project</title>
</head>
<body ng-app="WelfareApp">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<!--Header-->
		<header class="mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<div class="mdl-layout-title">Home</div>
				<div class="mdl-layout-title" style="margin-top: 5px"> <i class="material-icons">keyboard_arrow_right</i></div>
				<div class="mdl-layout-title" style="font-size: 15px; margin-top: 3px; opacity: 0.6" id='demo'>
					<?php 
						if($_POST['q'] == update) {
							echo 'Update';
						}
						else echo 'Events';
					?> 
				</div>

				<div class="mdl-layout-spacer"></div>

				<div class="my-search mdl-textfield mdl-js-textfield mdl-textfield--expandable">
		            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
		              <i class="material-icons">search</i>
		            </label>
		            <div class="mdl-textfield__expandable-holder">
		              <input class="mdl-textfield__input" type="text" id="search" />
		              <label class="mdl-textfield__label" for="search">Enter your query...</label>
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
	          <img src="img/user.jpg" class="my-avatar">
	          <div class="my-avatar-dropdown">
	            <span>Muhammad Arslan Asif</span>
	            <div class="mdl-layout-spacer"></div>
	            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
	              <i class="material-icons" role="presentation">arrow_drop_down</i>
	              <span class="visuallyhidden">Accounts</span>
	            </button>
	            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
	              <li class="mdl-menu__item">Change Password</li>
	              <a href="signIn.php" style="text-decoration: none"><li class="mdl-menu__item">Log Out</li></a>
	            </ul>
	          </div>
	        </header>
			

			<header class=""></header>
			<nav class="my-navigation mdl-navigation">
				<a class="mdl-navigation__link" href="#/" onclick="getElementById('demo').innerHTML='Events'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Events</a>
				<a class="mdl-navigation__link" href="#/eventAddForm" onclick="getElementById('demo').innerHTML='Add Event'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_circle</i>Add Event</a>
				<a class="mdl-navigation__link" href="#/eventTable" onclick="getElementById('demo').innerHTML='Tables'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">view_module</i>Tables</a>
			</nav>
		</div>
		
		<!--Content excluding header and drawer-->
		<main class="mdl-layout__content mdl-color--grey-100">
			
			<!--Inject view devending on user click using angularJS routes-->
			<div ng-view></div>

		</main>
	</div>

	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js"></script>		

</body>
</html>