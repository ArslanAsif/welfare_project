<?php 
	require('includes/helper.php');
	render('header', ['title' => 'Gallery']);
   require('config/dbconnection.php');

?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-color--white mdl-shadow--2dp">

		<div id="gallery_showcase">
			<a href="#" onclick="sliderFunction('left')"><i class="material-icons">arrow_back</i></a>
			<img id="gallery_main_img" style=" height:500px">
			<a href="#" onclick="sliderFunction('right')"><i class="material-icons">arrow_forward</i></a>
		</div>

		<div class="mdl-grid" id="gallery">
            <?php if ( isset($_GET['q'])) {
                $i = 0;
                $q =$_GET['q'];
                $query = "SELECT * from gallery WHERE  e_id='$q' ";
                $result = mysqli_query($CONNECTION, $query);
                if ($result) {
                    if ($result->num_rows > 0) {
                        while ($notify = mysqli_fetch_assoc($result)) {

                            $cover = "images/" . $notify["g_img"];
                        ?>
				<div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
					<img  height="200px" id="gallery_img<?=$i?>" onclick="myfunction(this.id)" src = '<?= $cover?>'>
				</div>
			<?php
					$i++;
                        }
                    }
                }
            }

			?>
			<div id='img_counter' hidden><?=$i?></div>

		</div>
	</div>
</div>

<!--display image on click-->
<script type="text/javascript" src="js/gallery.js"></script>

<?php render('footer');?>