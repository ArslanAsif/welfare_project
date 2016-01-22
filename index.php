<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'Home']); ?>

<!--3rd party slider-->
<?php include('includes/jssorSlider.php'); ?>

<!--Page content-->
<div class="mdl-grid">
	<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col">
		This is landing page!
        muaz
	</div>
</div>

<!--Fetch Template footer-->
<?php render('footer');?>