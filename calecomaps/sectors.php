<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Industries</title>
<link rel="stylesheet" href="assets/css/style.css" />
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<head>
<title>Sectors</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">

body {
    background-image: url("assets/img/smoke1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.table{background-color: white;
      width:75%;}

#sector{width:10%;}
#description{width:25%;}
#number{width:10%}
#releases{width:10%;}
#percentage{width:10%}

.transparent {

  background:#7f7f7f;
  background:rgba(255,255,255,0.6);
}

</style>
</head>
</head>
<body>
<?php include_once("analyticstracking.php") ?> 

<div class="wrapper"> 

<?php include('header.php'); ?>

<div class="container">

<div class="transparent" style="width:90%; margin:0 auto; padding-top:18px; padding-bottom:15px; padding-right:45px; padding-left:45px; border-radius:15px">

<h1 style="text-align: center">Industries</h1>
<br>
<div style="margin: 0 auto; width:60%; text-align: center;">We selected the top 5 Industries in Los Angeles County with the highest total toxic air releases (toxicity x pounds) based on the 2012 TRI data since the 2013 data was unavailable at the start of this project.
<br></div><br>
<!--<div class="container">-->

<div style="margin: 0 auto; width: 75%"> <img src="assets/img/industries.jpg" style="width: 100%; margin: 0 auto"></div><br>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th id="sector">Industrial Sector</th>
        <th id="description">Industry Description</th>
        <th id="number">Number of Facilities with Air Releases</th>
        <th id="releases">Total Air Releases (lbs)</th>
        <th id="percentage">Percentage of All Los Angeles County Releases</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td>Petroleum</td>
        <td>Transform crude petroleum and coal into usable products; refine petroleum products</td>
        <td>16</td>
        <td>1,838,203</td>
        <td>67%</td>
      </tr>
      <tr>
        <td>Chemical</td>
        <td>Formulate products from organic and inorganic raw materials</td>
        <td>55</td>
        <td>362,686</td>
        <td>14%</td>
      </tr>
      <tr class="success">
        <td>Fabricated Metals</td>
        <td>Transform metal into intermediate or end products</td>
        <td>35</td>
        <td>150,263</td>
        <td>0.05%</td>
      </tr>
      <tr>
        <td>Primary Metals</td>
        <td>Smelt and refine ferrous and nonferrous metals, manufacture metal products</td>
        <td>27</td>
        <td>8,151</td>
        <td>0.003%</td>
      </tr>
      <tr class="success">
        <td>Petroleum Bulk Terminals</td>
        <td>Store petroleum products</td>
        <td>13</td>
        <td>254</td>
        <td>0.00009%</td>
      </tr>
    </tbody>
  </table>
</div>

</div>

</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<div id="footer"> <?php include('footer.php'); ?> </div>

</body>
</html>