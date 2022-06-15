<!DOCTYPE html>
<html>
<?php $this->load->view('template/head');?>

<body>


<div id="fb-root"></div>



 <div id="container">
   <div class="fw mpHeader slide">
		<?php $this->load->view('template/main_nav');?>
   </div>
			
   <?php $this->load->view($main); ?>



  <footer class="slide">
  <?php $this->load->view('template/footer');?>
  </footer>


    </div>



    <script src="<?= base_url()?>express.rembon_components/bundles/jquery"></script>

    <script src="<?= base_url()?>express.rembon_components/bundles/bootstrap"></script>

    <script src="<?= base_url()?>express.rembon_components/bundles/modernizr"></script>

    <script src="<?= base_url()?>express.rembon_components/Scripts/CookieManager.js"></script>

    <script src="<?= base_url()?>express.rembon_components/Scripts/MPD/Common/ga-events.js"></script>

<script type="text/javascript" language="javascript">


    $.globals = {
        appRoot: '',
        messageCannotProcessRequest: 'Sorry, an unexpected error occurred while processing your request.',
        messageCannotRetrieveData: 'Sorry, an unexpected error occurred while retrieving the data.',
        messageCorrectValidationErrors: 'Please correct all errors and try again.',
        messageCardDetailsRequired: 'Please select a registered card or enter the details of a new card.',
        messageInsufficientTopUpAmount: 'Please enter an amount greater than or equal to the minimum deposit.',
        messageInvalidFromToDates: 'The To date cannot be earlier than the From date.',
        messageTransactionDeclined: 'Sorry - Transaction declined.',
        messageSearching: 'Searching... Please wait.',
        messageSearchFailed: 'Sorry search failed.',
        messageNoServiceFound: 'Sorry no service found.',
        messagePostcodeRequired: 'Please enter a postcode.',
        messageCountryRequired: 'Please select a country.',
        messageMonthRequired: 'Please select a month.',
        messageYearRequired: 'Please select a year.',
        messagePastDateInvalid: 'You must enter a present or future date.',
        messageFutureDateInvalid: 'You must enter a past or present date.'
    };
</script>

    
    <script src="<?= base_url()?>express.rembon_components/bundles/jqueryval"></script>

    

    <script type='text/javascript'>var scRec = document.createElement('SCRIPT');scRec.type = 'text/javascript';scRec.src = 'http://d2oh4tlt9mrke9.cloudfront.net/Record/js/sessioncam.recorder.js';document.getElementsByTagName('head')[0].appendChild(scRec);</script><script type='text/javascript'>if(!window.sessioncamConfiguration)window.sessioncamConfiguration = new Object();if(!window.sessioncamConfiguration.customDataObjects)window.sessioncamConfiguration.customDataObjects = [];</script>
    <script src="<?= base_url()?>express.rembon_components/Scripts/placeholder-shim.js"></script>

    <script src="<?= base_url()?>express.rembon_components/Scripts/trimFields.js"></script>
	<script src="<?= base_url()?>express.rembon_components/Scripts/trimFields.js"></script>
	<script type="text/javascript" src="<?= base_url()?>express.rembon_components/Scripts/jquery.nivo.slider.pack.js"></script>

	<script type="text/javascript" src="<?= base_url()?>express.rembon_components/hub/script/jquery.nivo.slider.pack.js"></script>	
	<script>
	
/*jshint jquery:true */
jQuery.noConflict();

jQuery(window).load(function() {
	"use strict";
	jQuery('#slider').nivoSlider({ controlNav: false});	
});
jQuery(document).ready(function() {
	"use strict";
	jQuery('input.datepicker').Zebra_DatePicker();
	// Carousel
	jQuery("#carousel-type1").carouFredSel({
		responsive: true,
		width: '100%',
		auto: false,
		circular : false,
		infinite : false, 
			items: {visible: {min: 1,max: 4},
		},
		scroll: {
			items: 1,
			pauseOnHover: true
		},
		prev: {
			button: "#prev2",
			key: "left"
		},
		next: {
			button: "#next2",
			key: "right"
		},
		swipe: true
	});
	
	jQuery(".work_slide ul").carouFredSel({
		circular: false,
		infinite: true,
		auto: false,
		scroll:{items:1},
		items: {visible: {min: 3,max: 3}},
		prev: {	button: "#slide_prev", key: "left"},
		next: { button: "#slide_next",key: "right"}
	});
	jQuery("#testimonial_slide").carouFredSel({
		circular: false,
		infinite: true,
		auto: false,
		scroll:{items:1},
		prev: {	button: "#slide_prev1", key: "left"},
		next: { button: "#slide_next1",key: "right"}
	});
	
	
});  
	
</script>


</body>
</html>