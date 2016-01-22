<?php 
include("../templates/admin_header.php");
require('../config/config.php');
?>

<!--Events-->

<div class="mdl-grid">

<?php

	$stmt = $dbhelper->prepare("SELECT  e.e_id,e.e_title,e.e_type,g.g_img,e.e_desc,g.cover FROM event e INNER JOIN gallery g on e.e_id=g.e_id and g.cover='1'");

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
            <img src='<?="../images/".$result['g_img']?>' height="180px" width="355px">

            <div class="mdl-card__title mdl-card--expand"style="margin-top:10px ">
              <h2 style="margin-Top:10px "class="mdl-card__title-text"><?=$result['e_title']?></h2>
		  </div>
		  <div class="mdl-card__supporting-text">
		  	<?=substr($result['e_desc'], 0, 50)."..."?>

		  </div>
		  <div class="mdl-card__actions mdl-card--border" style="margin-bottom:10px ">
		    <a href="updateEventForm.php?q=update&id=<?=$result['e_id']?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
		      Update
		    </a>

		  </div>
		</div>
	</div>

<?php } ?>

</div>

<?php include("../templates/admin_footer.php"); ?>