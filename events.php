<?php //Fetch template header
require('includes/helper.php');
require('/config/config.php');
render('header', ['title' => 'Events']); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--Page content-->
<!--Events-->

<div class="mdl-grid">
	<div class="mld-cell mdl-cell--10-col">
		<div class="mdl-grid">
		<?php

		$stmt = $dbhelper->prepare(" SELECT  e.e_date,e.e_id,e.e_title,e.e_type,g.g_img,e.e_desc,g.cover FROM event e INNER JOIN gallery g on e.e_id=g.e_id and g.cover='1'");

		$stmt->execute();

		while($result = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$id = $result['e_id'];
			$date = $result['e_date'];

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
                    <img src='<?="images/".$result['g_img']?>' height="180px" width="355px">

                    <div class="mdl-card__title mdl-card--expand" style="margin-top:10px ">
				    <h2 class="mdl-card__title-text"><?=$result['e_title']?></h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				    Aenan convallis.
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				    <a href="gallery.php?q=<?=$result['e_id']?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
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
			<ul class="events_list" style="margin-left: -30px; margin-top: -10px">
			<?php 
			$stmt = $dbhelper->prepare(" SELECT * FROM event ORDER BY e_id ASC");

			$stmt->execute();

			while($result = $stmt->fetch(PDO::FETCH_ASSOC))
			{
				$id = $result['e_id'];
				$date = $result['e_date'];
			}
			?>
				<a href="#"><li>January<ul class="events_list" style="margin-left: -20px">
					<a><li>Event 1</li></a>
				</ul></li></a>
			</ul>
		</div>
	</div>
</div>

<!--Fetch Template footer-->
<?php render('footer');?>