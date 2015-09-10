<!--Add Event form-->

<div class="mdl-grid">

	<div id="images_block" class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<div class="mdl-color--white mdl-shadow--2dp">
			<h5 class="event_img_heading">Cover</h5>
			<img src="img/bg0.jpeg" width="100%">
			<form action="#" method="post" enctype="">
		    	<input type="file" name="fileToUpload" id="fileToUpload">
			    <input hidden class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit" value="Upload Image" name="submit">
			    
			</form>
			<hr>
			<h5 class="event_img_heading event_img_heading-gallery">Gallery</h5>
			<div class="mdl-grid" id="gallery">
				<?php 
					$i = 0;
					foreach (glob(__DIR__ . "/../img/1920/*.*") as $path) {
						$image = explode('img', $path);

				?>
					<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
						<img id="gallery_img<?=$i?>" onclick="myfunction(this.id)" src = "img<?= $image[1]?>">
						
					</div>				
				<?php
						$i++;
					}
				?>
				<div id='img_counter' hidden><?=$i?></div>
				<!-- Add image button -->
				<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
				  <i class="material-icons">add</i>
				</button>
			</div>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<div class="mdl-color--white mdl-shadow--2dp">
			<form id="add-event" action="#" method="get">
				<h3 style="color: #606060">Event Details</h3>
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