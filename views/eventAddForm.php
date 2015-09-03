<!--Add Event form-->

<div class="mdl-grid">

	<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-color--white mdl-shadow--2dp">
			<img src="img/bg0.jpeg" width="100%">
			<form action="#" method="post" enctype="">
			    Select image to upload:
		    	<input type="file" name="fileToUpload" id="fileToUpload">
			    <input class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit" value="Upload Image" name="submit">
			    
			</form>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--6-col">
		<div class="mdl-color--white mdl-shadow--2dp">
			<form id="add-event" action="#" method="get">
				<h3 style="color: #606060">Add Event</h3>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="event_title">
					<label class="mdl-textfield__label" for="event_title">Title</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="genere_field" />
					<label class="mdl-textfield__label" for="genere_field">Genere</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<textarea class="mdl-textfield__input" type="text" rows='5' id="desc_field"></textarea>
					<label class="mdl-textfield__label" for="desc_field">Description</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>
			</form>
		</div>
	</div>

</div>