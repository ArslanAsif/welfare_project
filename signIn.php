<?php //Fetch template header
session_start(); //start session.

if(isset($_SESSION['username'])!= "")
                {
?>
                                  <script>
                                       window.location.replace("views/eventGallery.php");
                                  </script><?php                 }
            
require('config/config.php');
require('includes/helper.php');
render('header', ['title' => 'Sign In']); 
?>

<!--Styling in sign in page-->
<link rel="stylesheet" href="css/signin.css"></link>

<!--Sign in form-->
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--7-col mdl-cell--1-col-tablet"></div>
	<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet" id="mat_card">
		<form action="" method="POST">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="user_field" name="username" />
				<label class="mdl-textfield__label" for="user_field">Username</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="pass_field" name="pass" />
				<label class="mdl-textfield__label" for="pass_field">Password</label>
			</div>
			<br/><br/>

			<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Sign In</button>
		</form>

		<?php
		
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$emailid = $_POST['username'];
			$pass = $_POST['pass'];

			$stmt = $dbhelper->prepare("SELECT * FROM admin WHERE (emailid = ? AND pass = ?)");
			$stmt->bindParam('1', $emailid);
			$stmt->bindParam('2', $pass);

            $stmt->execute();
			$results = $stmt->fetch(PDO::FETCH_ASSOC);

			if($results)
			{
				session_start();
				$_SESSION['username'] = $emailid;
                $_SESSION['pic'] = "../img/".$results['pic'];
                                    ?>
                                  <script>
                               //        window.location.replace("views/eventGallery.php");
                                  </script><?php

			}
			else echo "Invalid Username or Password";
		}

		?>
	</div>
</div>

<!--Not using Template footer instead closing header tags-->
		</div>
	</div>
</body>
</html>