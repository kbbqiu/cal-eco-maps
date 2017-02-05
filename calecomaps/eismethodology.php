<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Cal EcoMaps Environmental Impact Score</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="wrapper"> 

<?php include('header.php'); ?>
<h1>Cal EcoMaps Environmental Impact Score</h1>

The goal of Cal EcoMaps is to better understand and communicate toxic chemical releases of TRI facilities in Los Angeles County. The Cal EcoMaps Environmental Impact Score (Cal EcoMaps EIS) was calculated for 172 individual facilities within their own industry through our interactive map.
<br><br>
<h2>What does the Cal EcoMaps EIS Measure?</h2> <br><br>


Facilities with a lower Cal EcoMaps EIS have less impact on the environment and public health based on the five environmental impact indicators: <a href="TOTALTOXICRELEASES.php" target="_blank">1)</a> the total amount of toxic releases, <a href="RPKR.php" target="_blank">2)</a> toxic releases per $1000 of revenue, <a href="toxicity.php" target="_blank">3)</a> toxicity of total releases, <a href="CancerMethod.php" target="_blank">4)</a> regional contribution to lifetime cancer risk due to air emissions, and <a href="PPWMA.php" target="_blank">5)</a> waste managed through recycling, energy recovery, and treatment. The Cal EcoMaps EIS is found on facility profiles as well as by industry here.  
<br><br>
<h2>How was the Cal EcoMaps EIS calculated? </h2><br><br>

The Cal EcoMaps EIS was determined by the facility’s percentile rank in each of the five environmental impact indicator categories within its respective industry. This percentile rank methodology was adapted from the methodologies used by OEHHA’s CalEnviroScreen Version 2.0 in determining CalEnviro Score. Facilities with lower environmental impact scores are considered to have less impact on the environment and public health and are better performers than their counterparts with higher environmental impact scores. 
<br><br>
For each environmental impact indicator, facilities received scores between 0 and 100 based on their percentile rank. Because we wanted to minimize input variables (i.e. Total Toxic Releases, Toxic Releases per $1000 of Revenue, Toxicity of Total Releases, and Regional Contribution to Lifetime Cancer Risk due to Air Emissions), facilities with lower percentile rank scores were better performers. Conversely, because we wanted to maximize variable (i.e. Waste Managed Through Recycling, Energy Recovery, and Treatment), facilities with higher percentile rank scores were better performers. In order to aggregate the percentile rank scores of all five environmental impact indicators, all percentile score values had to be in the same direction such that facilities with lower scores are better performers. For that reason, we reversed the percentile scores for output variables by subtracting them from 100.
<br><br>
Facility percentile rank scores for each of the five environmental impact indicators were then aggregated with the highest possible total score being 500 (i.e. maximum score of 100 for each environmental performance indicator). This aggregated score was then divided by 5 so that the Cal EcoMaps Environmental Impact Score is on a scale of 100 as opposed to 500. The table below shows a sample calculation of a facility’s environmental impact score based on its percentile rank in each environmental impact indicator. 
<br><br>
<img src="assets/img/eis.jpg" width= 700px />
<br><br>

Source: <a href="http://oehha.ca.gov/ej/ces2.html" target="_blank">CalEnviroScreen</a>
<div id="footer"> <?php include('footer.php'); ?> </div>
</div>
</body></html>