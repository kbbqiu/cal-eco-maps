<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>About TRI</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//www.google.com/jsapi"></script>

	<link rel="stylesheet" href="assets/css/vendor/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="assets/css/vendor/bootstrap/custom.css">
	<link rel="stylesheet" href="assets/css/style.css">

<style>

body {
    background-image: url("assets/img/smoke1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.transparent {

  background:#7f7f7f;
  background:rgba(255,255,255,0.6);
}

</style>

</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="wrapper"> 

<?php include('header.php'); ?>


<div class="container">

<div class="transparent" style="width:100%; margin:0 auto; padding-top:18px; padding-bottom:15px; padding-right:45px; padding-left:45px; border-radius:15px">

<div><h1>About TRI<h1></div><br>


	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-success">
            	<div class="panel-heading">
              	<h2 class="panel-title">What is TRI?</h2>
            	</div>
            	<div class="panel-body">
            	The EPA's TRI (Toxics Release Inventory) is a public database of annual information on industrial chemical release and waste management, reported by facilities that meet the TRI criteria.
            	<br><br>
            	<a href="http://www2.epa.gov/toxics-release-inventory-tri-program" target="_blank">Read more about TRI at epa.gov</a>
				</div>
			</div>
          	<div class="panel panel-success">
            	<div class="panel-heading">
              	<h2 class="panel-title">Who reports to TRI?</h2>
            	</div>
            	<div class="panel-body">
				If a facility meets all three of the following criteria, it must report its release and management information to the TRI Program
					<ol>
						<li>Is in a <a href="http://www2.epa.gov/toxics-release-inventory-tri-program/my-facilitys-six-digit-naics-code-tri-covered-industry" target="_blank">TRI-Covered Industry</a></li>
						<li>Has 10 or more employees</li>
						<li>Manufactures or works with more than 25,000 lbs. of one of 650 <a href="http://www.google.com/url?q=http%3A%2F%2Fwww2.epa.gov%2Ftoxics-release-inventory-tri-program%2Ftri-listed-chemicals&sa=D&sntz=1&usg=AFQjCNEzBpnaIbF2dE8Ri_K2SBcbtKmExA" target="_blank">TRI-Listed Chemicals</a></li>
					</ol>
				*More than 20,000 U.S. facilities report to the EPA annually 
				<br style="display: block; margin: 10px 0;">	
				</div>		
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-success">
            	<div class="panel-heading">
              	<h2 class="panel-title">What is TRI data used for?</h2>
            	</div>
            <div class="panel-body">
			The main purpose of TRI is to increase public awareness of toxic chemicals and thus encourage facilities to reduce their toxic emissions. Government, NGOs, companies, and communities use TRI data to make important decisions such as developing environmental policies or investing in environmentally responsible firms. TRI data is also used to measure overall pollution trends in the United States, as well as to advocate environmental justice for communities disproportionately affected by environmental hazards. 
			</div>
			</div>	
          	<div class="panel panel-success">
            	<div class="panel-heading">
              	<h2 class="panel-title">TRI History</h2>
            	</div>
            <div class="panel-body">
			In the early 1980s, chemical accidents in India and West Virginia killed thousands of people. In response, Congress passed the Emergency Planning and Community Right-to-Know Act (EPCRA) in 1986, which established the TRI program requiring certain facilities to annually report their releases of toxic chemicals.
			</div>
			</div>
		</div>

	</div>
</div>

</div>

<br><br>

<div id="footer"> <?php include('footer.php'); ?> </div>

 </div>

</body>
</html>