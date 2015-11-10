<?php 
require('../config/config.php');
include("../templates/admin_header.php");
?>

<!--Add Event form-->

<div class="mdl-grid">

	<div id="images_block" class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<div class="mdl-color--white mdl-shadow--2dp">
			<h5 class="event_img_heading">Cover</h5>
			<img src="../img/coverPlaceholder.jpg" width="100%">
			<form action="#" method="post" enctype="">
		    	<input type="file" name="fileToUpload" id="fileToUpload">
			    <input hidden class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit" value="Upload Image" name="submit">
			    
			</form>
			<hr>
			<h5 class="event_img_heading event_img_heading-gallery">Gallery</h5>
			<div class="mdl-grid" id="gallery">
				<?php 
				if(isset($_GET['id']) && isset($_GET['q']))
				{
					$i = 0;
					foreach (glob(__DIR__ . "/../img/1920/*.*") as $path) {
						$image = explode('img', $path);

				?>
					<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
						<img id="gallery_img<?=$i?>" onclick="myfunction(this.id)" src = "../img<?= $image[1]?>">
						
					</div>				
				<?php
						$i++;
					}
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

			<?php 
			if(isset($_GET['id']) && isset($_GET['q']))
			{
				$q = $_GET['q'];
				$id = $_GET['id'];

				$stmt = $dbhelper->prepare(" SELECT * FROM event WHERE e_id = ? ");
				$stmt->bindParam('1', $id);

				$stmt->execute();
				
				if($result = $stmt->fetch(PDO::FETCH_ASSOC))
				{
					//echo "Event exists.";
			?>
			<form id="add-event" action="eventAddForm.php?q=update&id=<?=$id?>" method="POST">
				<h3 style="color: #606060">Event Details</h3>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="event_title" name="title" value="<?= $result['e_title']; ?>" />
					<label class="mdl-textfield__label" for="event_title">Title</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="type_field" name="type" value="<?= $result['e_type']; ?>" />
					<label class="mdl-textfield__label" for="type_field">Type</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<textarea class="mdl-textfield__input" type="text" rows='5' id="desc_field" name="descr"><?= $result['e_desc']; ?></textarea>
					<label class="mdl-textfield__label" for="desc_field">Description</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>

			<?php 
				}
			}
			else
			{
			?>
			<form id="add-event" action="eventAddForm.php" method="POST">
				<h3 style="color: #606060">Event Details</h3>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="event_title" name="title" />
					<label class="mdl-textfield__label" for="event_title">Title</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="type_field" name="type" />
					<label class="mdl-textfield__label" for="type_field">Type</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<textarea class="mdl-textfield__input" type="text" rows='5' id="desc_field" name="descr"></textarea>
					<label class="mdl-textfield__label" for="desc_field">Description</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>

				<?php 
					}
				

				if($_SERVER['REQUEST_METHOD'] === 'POST')
				{
							
					try
					{
						$title = $_POST['title'];
						$type = $_POST['type'];
						$descr = $_POST['descr'];


						//check if duplicate is being inserted
						$stmt = $dbhelper->prepare("SELECT * FROM event WHERE e_title=? AND e_type=? AND e_desc=? ");
						$stmt->bindParam('1', $title);
						$stmt->bindParam('2', $type);
						$stmt->bindParam('3', $descr);

						$stmt->execute();
						
						if($result = $stmt->fetch(PDO::FETCH_ASSOC))
						{
							echo "Error! Duplicate content.";
						}
						
						//Update if ID is passed
						else if($id)
						{	
							$stmt = $dbhelper->prepare("UPDATE event SET e_title = ?, e_type = ?, e_desc = ? WHERE e_id = ?");
							$stmt->bindParam('1', $title);
							$stmt->bindParam('2', $type);
							$stmt->bindParam('3', $descr);
							$stmt->bindParam('4', $id);
							$stmt->execute();
							echo "Successfully Updated!";
						}

						else //insert record into database
						{
							$stmt = $dbhelper->prepare("INSERT INTO event(e_title, e_type, E_desc) VALUES(?, ?, ?)");
							$stmt->bindParam('1', $title);
							$stmt->bindParam('2', $type);
							$stmt->bindParam('3', $descr);
							$stmt->execute();
							echo "Successfully submiitted!";
							//header("Location: eventAddForm.php?u=success");
						}
					}
					catch(PDOException $e)
				    {
				    echo "Error: " . $e->getMessage();
				    }
					
				}

				?>
				<p id="message"></p>
			</form>
		</div>
	</div>

</div>

<?php include("../templates/admin_footer.php"); ?>