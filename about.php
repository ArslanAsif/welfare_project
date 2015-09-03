<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'About']); ?>

<!--Page content-->
<div class="mdl-grid">
	<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col">
		This is 'About' page!
	</div>
</div>

<!--Fetch Template footer-->
<?php render('footer');?>