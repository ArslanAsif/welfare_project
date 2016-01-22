<?php 
require('../config/config.php');
include("../templates/admin_header.php");

?>
<script  src="https://code.jquery.com/jquery-1.10.2.js
"></script>

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
function validateForm() {
    var x = document.forms["myForm"]["event_title"].value;
    if (x == null || x == "") {
        return false;
    }
     var x1 = document.forms["myForm"]["type_field"].value;
    if (x1 == null || x1 == "") {
        return false;
    }
     var x2 = document.forms["myForm"]["desc_field"].value;
    if (x2 == null || x2 == "") {
        return false;
    }
}
</script>
<!--Add Event form-->

<div class="mdl-grid">

	<div id="images_block" class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<div class="mdl-color--white mdl-shadow--2dp">
			<h5 class="event_img_heading">Cover</h5>
			<img src="../img/coverPlaceholder.jpg" width="100%" height="200px" id="myImg">
            <form name="myForm" enctype="multipart/form-data" onsubmit="return validateForm()"  action="../insertevent.php"   method="POST">
		    	<input type="file" name="fileToUpload" id="fileToUpload">


			<hr>
			<h5 class="event_img_heading event_img_heading-gallery">Gallery</h5>
                <input style=" margin-top: 15px "type="file"  name="files[]"   multiple  >


		</div>
	</div>
	<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
		<div class="mdl-color--white mdl-shadow--2dp" style="margin-bottom: 10px ;margin-top: -25px">
				<h3 style="color: #606060;margin-left: 10px;">Event Details</h3>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 95%;margin-left: 10px" >
					<input class="mdl-textfield__input" type="pass" id="event_title" name="title" />
					<label class="mdl-textfield__label" for="event_title">Title</label>
					<p id="titleP"></p>

				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 95%;margin-left: 10px"">
					<input class="mdl-textfield__input" type="text" id="type_field" name="type" />
					<label class="mdl-textfield__label" for="type_field">Type</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 95%;margin-left: 10px"">
					<textarea class="mdl-textfield__input" type="text" rows='5' id="desc_field" name="descr"></textarea>
					<label class="mdl-textfield__label" for="desc_field">Description</label>
				</div>
				<div class="input-append date form_datetime" style="margin-left: 20px;;margin-bottom: 10px;font-size:20">
                    <input size="16" name="dates" type="DATE" required="" >
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>

				<button style="margin-left: 20px;width: 100px" class="mdl-button mdl-js-button mdl-button--colored mdl-button--raised mdl-js-ripple-effect" name="submit" type="submit" onclick="submit()">Submit</button>
				<p id="message"></p>
				<br>

        </div>
    </div>
    </div>
            </form>
				





<?php 

	include("../templates/admin_footer.php"); 
?>