<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Responsive - fullPage.js</title>
 	<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">


	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="examples.css" />
	<link rel="stylesheet" type="text/css" href="css/clingify.css"/>
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
	}
	.intro p{
		color: #fff;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}

	/* Backgrounds will cover all the section
	* --------------------------------------- */
	#section0,
	#section1,
	#section2,
	#section3{
		background-size: cover;
	}

	/* Defining each section background and styles
	* --------------------------------------- */
	#section0{
		background-image: url(css/salad_big.jpg);
		padding: 30% 0 0 0;
	}
	#section1{
		background-image: url(css/turkey-panini_big.jpg);
		padding: 6% 0 0 0;
	}
	#section2{
		background-image: url(css/vegetables_big.jpg);
		padding: 6% 0 0 0;
	}
	#section3 h1{
		color: #000;
	}

	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}
	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="vendors/jquery.slimscroll.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script>
	<script type="text/javascript" src="jquery.clingify.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home.css" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['firstPage', 'secondPage', '3rdPage'],
				sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['First page', 'Second page', 'Third page'],
				responsive: 900
			});
			$('.navbar').clingify({
			    breakpoint: 0,  // in pixels
			    extraClass:'',
			    throttle: 100,  // in milliseconds
			    
			    // Callback functions:
			    detached: $.noop,
			    locked: $.noop,
			    resized: $.noop
			});
		});


		$(function() {
		    var $clingifyTarget = $('.navbar'),
		        $parent = $('.container-navbar'),
		        matchWidths = function($elem) {
		            $elem.width($parent.width());
		        };

		    $clingifyTarget.clingify({
		        locked : function() {
		            matchWidths($clingifyTarget);
		        },
		        resized : function() {
		            matchWidths($clingifyTarget);
		        }
		    });
		});
	</script>

</head>
<body>

<div id="fullpage">
	<div class="section" id="section0">
		<div class="intro main">
			<h1>Refuel.Replenish.Revive.</h1>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="intro reviveText">
			<h1>coffee + sandwiches + salads</h1>
			<h1> pastries + soft drinks + snacks </h1>
		</div>
	</div>
	<div class="section" id="section2">
		<div class="intro replenishText">
			<h1>beer + wine + beverages</h1>
			<h1> essential groceries </h1>
		</div>
	</div>
</div>

</body>
</html>

<?php
$fileName = basename(__FILE__);
include("php/header.php");
 ?>

<!-- <div id="fullpage">
	<div class="section " id="section0"><h1 class="main">Refuel.Replenish.Refresh.</h1></div>
	<div class="section" id="section1"><h1 class="reviveText"> coffee + sandwiches + salads <br/> pastries + soft drinks + snacks</div>
	<div class="section" id="section2"><h1 class="replenishText"> beer + wine + beverages <br/> essential groceries </h1></div>
	<div class="section" id="section3"></div>
</div> -->

