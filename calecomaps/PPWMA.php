<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Preferred Waste Management Activities</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="wrapper"> 

<?php include('header.php'); ?>
<h1>Preferred Waste Management Activities</h1>
Also known as: Waste Managed Through Recycling, Energy Recovery, and Treatment 
<br><br>

<h2>Units: lbs </h2> <br><br>
This variable represents the facility’s efforts at preventing toxic releases into the environment by managing their waste through recycling, energy recovery, and treatment. Recycling, energy recovery, and treatment are preferred waste management activities as defined by EPA’s Waste Management Hierarchy. The quantities managed by these methods exclude catastrophic, one-time events so that values associated with facility production processes are only considered. 
<br><br>
More information on this variable and how it was used to calculate the <a href="eismethodology.php" target="_blank">Cal EcoMaps Environmental Impact Score</a> can be found in our <a href="Report.php" target="_blank">report</a>. 
<br><br>
<h3>Percent of Waste Managed through  Recycling, Energy Recovery, and Treatment</h3>
<br><br>
<h2>Units: % = lbs/lbs</h2> <br><br>
This is the facility’s percentage of waste that is managed through recycling, energy recovery, and treatment out of its total production-related waste.


<br>
<br>
Source: <a href="http://www2.epa.gov/toxics-release-inventory-tri-program/trinet" target="_blank">TRI.NET</a>
<br>
<br><br>
<br>
<div id="footer"> <?php include('footer.php'); ?> </div>
</div>
</body></html>