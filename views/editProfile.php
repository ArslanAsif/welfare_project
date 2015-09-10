<!--Edit profile form-->

<div class="mdl-grid">

	<div class="mdl-cell mdl-cell--4-col">
		<div class="mdl-color--white mdl-shadow--2dp">
			<img src="img/bg0.jpeg" width="100%">
			<form action="#" method="post" enctype="">
			    Select image to upload:
		    	<input type="file" name="fileToUpload" id="fileToUpload">
			    <input class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit" value="Upload Image" name="submit">
			    
			</form>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--8-col">
		<div class="mdl-color--white mdl-shadow--2dp">
			<form id="add-event" action="#" method="get">
				<h3 style="color: #606060">Update profile</h3>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_name">
					<label class="mdl-textfield__label" for="up_name">Full Name</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="email" id="up_email" />
					<label class="mdl-textfield__label" for="up_email">Email Address</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_cpass" />
					<label class="mdl-textfield__label" for="up_cpass">Current Password</label>
				</div>

				<p style="color: #606060"><b>Leave last two fields Empty if you don't want to change password</b></p>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_npass" />
					<label class="mdl-textfield__label" for="up_npass">New Password</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_rnpass" />
					<label class="mdl-textfield__label" for="up_rnpass">Retype New Password</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>
			</form>
		</div>
	</div>

</div>