<?php
include("../templates/admin_header.php");
require('../config/config.php');
$picture;
?>
    <script  src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <script async src="//jsfiddle.net/KyleMit/d3H9f/embed/js,css,result/"></script>
    <script>
        $(function () {
            $("#fileToUpload").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });

        function imageIsLoaded(e) {
            $('#myImg').attr('src', e.target.result);
        };
        </script>
    <!--Edit profile form-->

    <div class="mdl-grid">
        <?php
        if (isset($_SESSION['username'])) {
            $stmt = $dbhelper->prepare("SELECT * FROM admin where emailid = ?");
            $stmt->bindParam('1', $_SESSION['username']);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $fullname = $result['name'];
                $emailid = $result['emailid'];
                $picture = "../img/" . $result['pic'];
            } else throw new Exception("Error Processing Request", 1);
        } else header("Location: signIn.php");

        ?>

        <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
            <div class="mdl-color--white mdl-shadow--2dp">
                <img src='<?= $picture ?>'id="myImg" width="100%">
                <h6><b>Path: </b><?= $picture ?></h6>
            </div>
        </div>

        <div class="mdl-cell mdl-cell--8-col">
            <div class="mdl-color--white mdl-shadow--2dp">
                <form id="add-event" action="editProfile.php" method="post" enctype="multipart/form-data">

                    <h3 style="color: #606060; margin-top: 0px">Update profile</h3>

                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                        <input class="mdl-textfield__input" type="text" id="up_name" name="fullname"
                               value="<?= $fullname ?>"/>
                        <label class="mdl-textfield__label" for="up_name">Full Name</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                        <input class="mdl-textfield__input" type="email" id="up_email" name="emailid"
                               value=<?= $emailid ?>/>
                        <label class="mdl-textfield__label" for="up_email">Email Address</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                        <input class="mdl-textfield__input" type="pass" id="up_cpass" name="cpass"/>
                        <label class="mdl-textfield__label" for="up_cpass">Current Password</label>
                    </div>

                    <p style="color: #606060"><b>Leave last two fields Empty if you don't want to change password</b>
                    </p>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                        <input class="mdl-textfield__input" type="pass" id="up_npass" name="npass1"/>
                        <label class="mdl-textfield__label" for="up_npass">New Password</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                        <input class="mdl-textfield__input" type="pass" id="up_rnpass" name="npass2"/>
                        <label class="mdl-textfield__label" for="up_rnpass">Retype New Password</label>
                    </div>

                    <button class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect"
                            type="submit">Submit
                    </button>
                </form>
            </div>
        </div>

    </div>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $fullname = $_POST['fullname'];
        $emailid = $_POST['emailid'];
        $cpass = $_POST['cpass'];
        $npass1 = $_POST['npass1'];
        $npass2 = $_POST['npass2'];

        //check if duplicate is being inserted
        $stmt = $dbhelper->prepare("SELECT * FROM admin WHERE name = ? AND emailid = ? AND pass = ? AND pic = ?");
        $stmt->bindParam('1', $fullname);
        $stmt->bindParam('2', $emailid);
        $stmt->bindParam('3', $cpass);
        $stmt->bindParam('4', $picture);

        $stmt->execute();

        if ($result = $stmt->fetch(PDO::FETCH_ASSOC) && ($npass1 == "" && $npass2 == "")) {
            echo "Nothing Changed!";
        } //Update
        else {


            $stmt = $dbhelper->prepare("SELECT pass, pic FROM admin WHERE emailid = ?");
            $stmt->bindParam('1', $emailid);
            $stmt->execute();

            if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

                if ($result['pass'] == $cpass) {
                    if (isset($_FILES['fileToUpload'])) {

                        $pic = uploadImage($picture);
                        if ($pic != "") {
                            $stmt = $dbhelper->prepare("UPDATE admin SET pic = ? WHERE emailid = ?");

                            $stmt->bindParam('1', $pic);

                            $stmt->bindParam('2', $emailid);
                            $stmt->execute();
                        }
                    }
                    if ($npass1 == $npass2 && $npass1 != null && $npass2 != null) {
                        $stmt = $dbhelper->prepare("UPDATE admin SET name = ?, emailid = ?, pass = ? WHERE emailid = ?");

                        $stmt->bindParam('1', $fullname);
                        $stmt->bindParam('2', $emailid);
                        $stmt->bindParam('3', $npass1);
                        $stmt->bindParam('4', $emailid);
                        $stmt->execute();
                        echo "Successfully Updated!";


                    } else if ($npass1 != $npass2 || $npass1 == null || $npass2 == null) {
                        $stmt = $dbhelper->prepare("UPDATE admin SET name = ?, emailid = ? WHERE emailid = ?");

                        $stmt->bindParam('1', $fullname);
                        $stmt->bindParam('2', $emailid);
                        $stmt->bindParam('3', $emailid);
                        $stmt->execute();
                        echo "Successfully Updated!";


                    } else if ($npass1 == $npass2 && $npass1 != null && $npass2 != null) {
                        $stmt = $dbhelper->prepare("UPDATE admin SET name = ?, emailid = ?, pass = ? WHERE emailid = ?");

                        $stmt->bindParam('1', $fullname);
                        $stmt->bindParam('2', $emailid);
                        $stmt->bindParam('3', $npass1);
                        $stmt->bindParam('4', $emailid);
                        $stmt->execute();
                        echo "Successfully Updated!";


                    } else if (($npass1 != $npass2 || $npass1 == null || $npass2 == null)) {
                        $stmt = $dbhelper->prepare("UPDATE admin SET name = ?, emailid = ? WHERE emailid = ?");

                        $stmt->bindParam('1', $fullname);
                        $stmt->bindParam('2', $emailid);
                        $stmt->bindParam('3', $emailid);
                        $stmt->execute();
                        echo "Successfully Updated!";


                    } else echo "New Password mismatch";
                } else echo "Password is invalid.";
            }
        }
        ?>
        <script>
            window.location.replace("views/eventAddForm.php");
        </script><?php
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

//Image upload
function uploadImage($picture)
{
    if ($_FILES["fileToUpload"]["name"] != "") {

        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;


            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $path = $_FILES["fileToUpload"]["name"];
                $_SESSION['pic'] = "../img/" . $path;

                if (file_exists($picture)) {
                    unlink($picture);
                }
                return $path;

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

//End image upload
?>

<?php include("../templates/admin_footer.php"); ?>