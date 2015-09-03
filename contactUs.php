<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'Contact Us']); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--Page content-->
<div class="mdl-grid">

	<div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--8-col-tablet mdl-cell mdl-cell--4-col-phone">
		<div class="mdl-color--white mdl-shadow--2dp">
			<form id="add_event" action="#" method="get">
				<h4>Contact Form</h4>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="name_cf">
					<label class="mdl-textfield__label" for="name_cf">Name</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="email_cf" />
					<label class="mdl-textfield__label" for="email_cf">Email</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="sub_cf" />
					<label class="mdl-textfield__label" for="sub_cf">Subject</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<textarea class="mdl-textfield__input" type="text" rows='4' id="msg_field"></textarea>
					<label class="mdl-textfield__label" for="msg_field">Message</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>
			</form>
		</div>
	</div>

	<div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--8-col-tablet mdl-cell mdl-cell--4-col-phone">
		<div class="mdl-color--white mdl-shadow--2dp">
			<div class="text_padding">
				<h4 >Our Address</h4>
				<p>Meow meow meow meow meow meow meow meow meow meow meow</p>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108827.1356231038!2d74.36838626669923!3d31.528334762902553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1441226802670" width="100%" height="340em" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

</div>

<!--Fetch Template footer-->
<?php render('footer');?>