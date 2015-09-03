<!--Events-->

<div class="mdl-grid">

<?php for ($i=0; $i < 3; $i++) { ?>

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
		    <a href="#/eventAddForm?q='update'" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      Update
		    </a>
		  </div>
		</div>
	</div>

<?php } ?>

</div>