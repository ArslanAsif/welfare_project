<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'Events']); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--Page content-->
<!--Events-->

<div class="mdl-grid">
	<div class="mld-cell mdl-cell--10-col">
		<div class="mdl-grid">
		<?php for ($i=0; $i < 6; $i++) { ?>
			
			<div class="mdl-cell mdl-cell--4-col">
				<!-- Square card -->
				<style>
				.demo-card-square.mdl-card {
				  width: 100%;
				  height: 320px;
				}
				.demo-card-square > .mdl-card__title {
				  color: #fff;
				  background:
				    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
				}
				</style>

				<div class="demo-card-square mdl-card mdl-shadow--2dp">
				  <div class="mdl-card__title mdl-card--expand">
				    <h2 class="mdl-card__title-text">Update</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				    Aenan convallis.
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				    <a href="gallery.php?q=<?=$i?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				      View
				    </a>
				  </div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>

	<div class="mdl-cell mdl-cell--2-col mdl-cell mdl-cell--4-col-tablet mdl-cell mdl-cell--4-col-phone">
		<div id="archive" class="demo-card-square mdl-card mdl-shadow--2dp" style="margin-top: 8px; padding-left: 15px; padding-right: 15px">
			<h4>Archive</h4>
			<ul class="events_list" style="margin-left: -30px">
				<a href="#"><li>Event 1</li></a>
				<a href="#"><li>Event 2</li></a>
				<a href="#"><li>Event 3</li></a>
			</ul>
		</div>
	</div>
</div>

<!--Fetch Template footer-->
<?php render('footer');?>