<?php 
include("../templates/admin_header.php");
require('../config/config.php');
?>

<!--Events-->

<div class="mdl-grid">

<?php

	$stmt = $dbhelper->prepare(" SELECT * FROM event ORDER BY e_id ASC");

	$stmt->execute();
	
	while($result = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$result['e_title'];
		$id = $result['e_id'];

	?>

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
		    <h2 class="mdl-card__title-text"><?=$result['e_title']?></h2>
		  </div>
		  <div class="mdl-card__supporting-text">
		  	<?=substr($result['e_desc'], 0, 50)."..."?>

		  </div>
		  <div class="mdl-card__actions mdl-card--border">
		    <a href="eventAddForm.php?q=update&id=<?=$result['e_id']?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      Update
		    </a>
		  </div>
		</div>
	</div>

<?php } ?>

</div>

<?php include("../templates/admin_footer.php"); ?>