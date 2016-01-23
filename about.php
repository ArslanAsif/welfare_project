<?php //Fetch template header
require('includes/helper.php');
render('header', ['title' => 'About']); ?>

<link rel="stylesheet" type="text/css" href="css/main.css">

<!--Page content-->
<div class="demo-ribbon"></div>

<div class="demo-container mdl-grid text-justify" style="margin-bottom: -50px">
	<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
	<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
	<div class="demo-crumbs mdl-color-text--grey-500">
	  Welfare &gt; About
	</div>

    <h3>Mission Statement</h3>
    <p>
        To provide a helping hand for underprivileged children and women in the vicinity of Lahore.
    </p>

	<h3>About our organization</h3>
    <p>
        Hope Welfare is a non-profit organization which aims to provide a helping hand for the helpless and hopeless children and women of Lahore through quality education, healthcare and social services.
        For the last 6 years, Hope Welfare has helped educate children, provide rations for poor families, healthcare & treatments for disease stricken individuals unable to pay hospital bills and matrimonial services for girls.
    </p>

    <p>
        In 2010, Mrs. Shazia Hussain Butt was inspired by her quality of selflessness to establish this organization and spread the vision of providing hope among the hopeless.
    </p>

	<h3>Services</h3>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <img src="img/services/students.jpg" width="200px" height="200px">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <strong>Providing scholarships for poor students</strong>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <img src="img/services/book.jpg" width="200px" height="200px">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <strong>Providing free books for poor students</strong>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <img src="img/services/health.jpg" width="200px" height="200px">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <strong>Providing free healthcare and treatment for poor people</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <img src="img/services/rations.jpg" width="200px" height="200px">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <strong>Providing Rations for poor families during the Holy Month of Ramadan</strong>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <img src="img/services/gifts.jpg" width="200px" height="200px">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <strong>Distributing clothes and gifts among poor people on Eid-ul-Fitr</strong>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title mdl-card--expand">
                        <img src="img/services/marriage.png" width="200px" height="200px">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <strong>Providing marriage bureau services and dowry for poor girls</strong>
                    </div>
                </div>
            </div>
        </div>

    <h3>Members</h3>
    <ul>
        <li><p>Shazia Hussain Butt (President)</p></li>
        <li><p>Mrs. Ayesha Imran (Vice President)</p></li>
        <li><p>Naeema Rasheed (Vice President)</p></li>
        <li><p>Ayesha Majeed (Joint Secretary)</p></li>
        <li><p>Fatima Butt (Finance Secretary)</p></li>
        <li><p>Kiran (Information Secretary)</p></li>
        <li><p>Zahid Iqbal Butt</p></li>
        <li><p>Khawar Masood</p></li>
        <li><p>Ashraf Khan</p></li>
        <li><p>Ghulam Hussain Butt</p></li>
        <li><p>Rao Muhammad Masoom</p></li>
        <li><p>Fahad Butt</p></li>
        <li><p>Malik Muhammad Awais</p></li>
    </ul>
	</div>
</div>

<!--Fetch Template footer-->
<?php render('footer');?>