<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'Sign In']); ?>

<!--Styling in sign in page-->
<link rel="stylesheet" href="css/signin.css"></link>

<!--Sign in form-->
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--7-col mdl-cell--1-col-tablet"></div>
	<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet" id="mat_card">
		<form action="adminPanel.php" method="get">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="user_field" />
				<label class="mdl-textfield__label" for="user_field">Username</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="pass" id="pass_field" />
				<label class="mdl-textfield__label" for="pass_field">Password</label>
			</div>
			<br/><br/>

			<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Sign In</button>
		</form>
	</div>
</div>

<!--Not using Template footer instead closing header tags-->
		</div>
	</div>
</body>
</html>