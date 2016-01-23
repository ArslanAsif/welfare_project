<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'Home']); ?>

<!--3rd party slider-->
<?php include('includes/jssorSlider.php'); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--Page content-->
<div class="mdl-grid text-justify">
	<div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col main-body-text">
		<h3>Hope Welfare Society</h3>
        <p>
            We at Hope Welfare Society believe that through helping the poor people of Pakistan, we can make our country a better place.
        </p>
        <p>
            About half of the population of Pakistan has limited or no access to fundamental amenities of life due to high rates of poverty. Among these amenities are food and education.
            The Hope Welfare Society strives to help these children get quality education for free, provide rations and healthcare to poor families and help poor girls in their time of marriage.
        </p>
	</div>

    <div class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col">
        <h4><strong>Visit Us</strong></h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6798.841930016136!2d74.32883079717628!3d31.56750203268986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191b4964530445%3A0x5222bda913ca2b72!2sQila+Gujjar+Singh%2C+Lahore%2C+Pakistan!5e0!3m2!1sen!2s!4v1453531072730"
                width="100%" height="340vh" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<!--Fetch Template footer-->
<?php render('footer');?>