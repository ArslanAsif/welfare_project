<?php

require('includes/helper.php');
require('config/config.php');
render('header', ['title' => 'Contact Us']); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--Page content-->
<div class="mdl-grid">

	<div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--8-col-tablet mdl-cell mdl-cell--4-col-phone">
		<div class="mdl-color--white mdl-shadow--2dp">
			<form id="add_event" action="contactUs.php" method="POST">
				<h4>Contact Form</h4>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="name_cf" name="name"required>
					<label class="mdl-textfield__label" for="name_cf"style="color: #0000ff">Name</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="email" id="email_cf" name="email" required/>
					<label class="mdl-textfield__label" for="email_cf"style="color: #0000ff">Email</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<input class="mdl-textfield__input" type="text" id="sub_cf" name="subject" required/>
					<label class="mdl-textfield__label" for="sub_cf"style="color: #0000ff">Subject</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
					<textarea class="mdl-textfield__input" type="text" rows='4' id="msg_field" name="message"required></textarea>
					<label class="mdl-textfield__label" for="msg_field"style="color: #0000ff">Message</label>
				</div>

				<button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" type="submit">Submit</button>
			</form>
		</div>
	</div>

	<div class="mdl-cell mdl-cell--6-col mdl-cell mdl-cell--8-col-tablet mdl-cell mdl-cell--4-col-phone">
		<div class="mdl-color--white mdl-shadow--2dp">
			<div class="text_padding">
				<h4 >Our Address</h4>
				<p>Meow meow meow meow meow meow meow meow meow meow meow</p>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d108827.1356231038!2d74.36838626669923!3d31.528334762902553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1441226802670" 
					width="100%" height="340vh" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

</div>

<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{

			$sender_name = $_POST['name'];
			$sender_email = $_POST['email'];
			$sender_subj = $_POST['subject'];
			$sender_msg = $_POST['message'];


        require 'PHPMailer-master/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $Name=$sender_name;                               // Enable verbose debug output
        $Email=$sender_email;
        $Subject=$sender_subj;
        $Message=$sender_msg;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'techagentx@gmail.com';                 // SMTP username
        $mail->Password = 'muazahmad';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                   // TCP port to connect to
        $mail->setFrom('', 'Mailer');
        $mail->addAddress('techagentx@gmail.com'); // Add a recipient
        $mail->addReplyTo($Email, 'Information');
        $mail->isHTML(true);                                 // Set email format to HTML
        $mail->Subject = $Subject;
        $mail->Body    = 'From: '.$Email."<br>".'Name: '.$Name."<br>".'Message: '. $Message."<br><br>".'Powered by TechAgentx';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        ?>
        <script>
          //  notie.alert(3, 'Wish Added!', 1);
        </script>
        <?php
        if(!$mail->send()) {
            ?><script>alert("mail not been sent")</script>
        <?php

        }else{
            ?><script>alert("mail has been sent")</script><?php
        }


	}
	
?>

<!--Fetch Template footer-->
<?php render('footer');?>