<?php 
include("../templates/admin_header.php");
require('../config/config.php');
 ?>

<!--Edit profile form-->

<div class="mdl-grid">
<?php
		if(isset($_SESSION['username']))
		{
			$stmt = $dbhelper->prepare("SELECT * FROM admin where emailid = ?");
			$stmt->bindParam('1', $_SESSION['username']);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			if($result)
			{
				$fname = $result['firstname'];
				$lname = $result['lastname'];
				$emailid = $result['emailid'];
			}
			else throw new Exception("Error Processing Request", 1);
		}
		else header("Location: signIn.php");
?>

	<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
		<div class="mdl-color--white mdl-shadow--2dp">
			<img src="../img/user.jpg" width="100%">
			<form action="#" method="post" enctype="">
			    Select image to upload:
		    	<input type="file" name="fileToUpload" id="fileToUpload">
			    <input class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit" value="Upload Image" name="submit">
			    
			</form>
		</div>
	</div>

	<div class="mdl-cell mdl-cell--8-col">
		<div class="mdl-color--white mdl-shadow--2dp">
			<form id="add-event" action="editProfile.php" method="post">
				<h3 style="color: #606060">Update profile</h3>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_name" name="fullname" value=<?=$fname." ".$lname?> />
					<label class="mdl-textfield__label" for="up_name">Full Name</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="email" id="up_email" name="emailid" value=<?=$emailid?> />
					<label class="mdl-textfield__label" for="up_email">Email Address</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_cpass" name="cpass" />
					<label class="mdl-textfield__label" for="up_cpass">Current Password</label>
				</div>

				<p style="color: #606060"><b>Leave last two fields Empty if you don't want to change password</b></p>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_npass" name="npass1" />
					<label class="mdl-textfield__label" for="up_npass">New Password</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="pass" id="up_rnpass" name="npass2" />
					<label class="mdl-textfield__label" for="up_rnpass">Retype New Password</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>
			</form>
		</div>
	</div>

</div>

<?php 
	if($_SERVER["REQUEST_METHOD"] === "POST")
	{
		try
		{

			$fullname = explode(" ", $_POST['fullname']);
			$emailid = $_POST['emailid'];
			$cpass = $_POST['cpass'];
			$npass1 = $_POST['npass1'];
			$npass2 = $_POST['npass2'];

			echo $fullname[0]." yo ".$fullname[1];

			//check if duplicate is being inserted
			$stmt = $dbhelper->prepare("SELECT * FROM admin WHERE firstname = ? AND lastname = ? AND emailid = ? AND pass = ? ");
			$stmt->bindParam('1', $fullname[0]);
			$stmt->bindParam('2', $fullname[1]);
			$stmt->bindParam('3', $emailid);
			$stmt->bindParam('4', $cpass);

			$stmt->execute();
			
			if($result = $stmt->fetch(PDO::FETCH_ASSOC) && ($npass1 == "" && $npass2 == ""))
			{
				echo "Nothing Changed!";
			}
			
			//Update
			else
			{
				$stmt = $dbhelper->prepare("SELECT pass FROM admin WHERE emailid = ?");
				$stmt->bindParam('1', $emailid);

				$stmt->execute();
				
				if($result = $stmt->fetch(PDO::FETCH_ASSOC))
				{
					if($result['pass'] == $cpass)
					{
						if($npass1 == $npass2)
						{
							$stmt = $dbhelper->prepare("UPDATE admin SET firstname = ?, lastname = ?, emailid = ?, pass = ? WHERE emailid = ?");
							$stmt->bindParam('1', $fullname[0]);
							$stmt->bindParam('2', $fullname[1]);
							$stmt->bindParam('3', $emailid);
							$stmt->bindParam('4', $npass1);
							$stmt->execute();
							echo "Successfully Updated!";

							$_SESSION['username'] = $emailid;
						} else echo "New Password mismatch";
					} else echo "Password is invalid.";
				}
			}
		}
		catch(PDOException $e)
	    {
	    	echo "Error: " . $e->getMessage();
	    }

	}
?>

<?php include("../templates/admin_footer.php"); ?>