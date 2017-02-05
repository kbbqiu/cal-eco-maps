<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Toxicity of Total Releases</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="wrapper"> 

<?php include('header.php'); ?>
<h1>Toxicity of Total Releases</h1>
<h2>Units: lbs x toxicity</h2> <br><br>
Toxicity of Total Releases is provided by the TRI and measures the relative health-related impacts between different facilities. The facility’s total toxic releases is multiplied by a specific toxicity factor determined by the EPA’s Risk Screening Environmental Indicators (RSEI) for each chemical released. Only toxicity of on-site toxic releases were considered for this local analysis of health-related impacts. 
<br><br>
More information on this variable and how it was used to calculate the <a href="eismethodology.php" target="_blank">Cal EcoMaps Environmental Impact Score</a> can be found in our <a href="Report.php" target="_blank">report</a>. 
<br><br>

Sources:<a href="http://www.epa.gov/opptintr/rsei/tools/glossary.html" target="_blank">RSEI</a>
<div id="footer"> <?php include('footer.php'); ?> </div>
</div>
</body></html>