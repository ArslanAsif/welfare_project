<?php 
	require('includes/helper.php');
	render('header', ['title' => 'Gallery']);
?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-color--white mdl-shadow--2dp">

		<div id="gallery_showcase">
			<a href="#" onclick="sliderFunction('left')"><i class="material-icons">arrow_back</i></a>
			<img id="gallery_main_img">
			<a href="#" onclick="sliderFunction('right')"><i class="material-icons">arrow_forward</i></a>
		</div>

		<div class="mdl-grid" id="gallery">
			<?php 
				$i = 0;
				foreach (glob(__DIR__ . "/img/1920/*.*") as $path) {
					$image = explode('img', $path);

			?>
				<div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
					<img id="gallery_img<?=$i?>" onclick="myfunction(this.id)" src = "img<?= $image[1]?>">
					<p><?= $image[1]?></p>
				</div>				
			<?php
					$i++;
				}
			?>
			<div id='img_counter' hidden><?=$i?></div>

		</div>
	</div>
</div>

<!--display image on click-->
<script type="text/javascript" src="js/gallery.js"></script>

<?php render('footer');?>