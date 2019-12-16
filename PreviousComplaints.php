﻿<!DOCTYPE html>
<html>
<head>
	<title>Previous complaints-BCC</title>
	<link rel="icon" type="image/png" href="logo.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  	
<style>
	table{
	    table-layout:fixed;
		border-collapse:collapse;
	    width:100%;}
	th, td {
	  	padding: 8px;}
	td{
	    text-align: left;
	    width:20%;
		font-family: monospace;}

	th{
		
	    background-color:#103045;
	    text-align:center;
		color:white;
	    font-family: monospace;
	    font-size: 17px;
		border:2px solid gray;}

	.bg-dark {
  		background-color: #103045 !important;}

	body{
		font-family: Verdana;
		background: url("bahria-town-logo1.png") repeat ;
		}

</style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<!--<a class="navbar-brand" href="#"><img id="logo" src="bahria-town-logo.png" style="height:65px;width:57px;"/></a>-->
	<a class="navbar-brand" href="http://www.bahriatown.com/">Bahria Town (Pvt) Ltd.</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  	<ul class="navbar-nav mr-auto">
	    	<li class="nav-item">
	      	<a class="nav-link" href="#">Home</a>
	    	</li>
	    	<li class="nav-item">
	      	<a class="nav-link" href="http://www.bahriatown.com/index.php?option=com_content&task=blogcategory&id=13&Itemid=99">About Us</a>
	    	</li>
	    	<li class="nav-item">
	      	<a class="nav-link" href="#">Contact Us</a>
	    	</li>
	    	<li class="nav-item">
	      	<a class="nav-link" href="#">Our Services</a>
	    	</li>
	  	</ul>

	</div>
	</nav> <!--navigation bar end.//-->

	<hr>
	<div class="row card bg-light card-body mx-auto border-0" style="max-width: 1250px;" align="center">
		<div class="col-sm-12">
			<h2 style="margin-top: 30px; color: #103045;  font-size: 25px;">View Previous Complaints</h2>
			<br>
			<table class="card-table table table-hover table-bordered mb-0">
				<thead>
	                <tr>
	                    <th rowspan=2 >Complaint no.</th> 
	                    <th rowspan=2 >Complaint Type</th> 
	                    <th rowspan=2 >Status</th>
						<!-- <th rowspan=2> Completion Time</th>
						<th rowspan=2> Completion Date</th> -->
						<th rowspan=2> Complaint Time</th>
						<th rowspan=2> Complaint Date</th>
	                </tr>


	                <!-- <tr><th>Pending </th>
	                	<th>Completed</th> 
	                </tr>  -->
            	</thead>
                  
                <tbody>      
                	<?php
					include_once('connection.php');
					include_once('functions.php');

					$un = $_GET['username']; //getting username

					//retrieving previous complaints from db
					$qqq = "SELECT * FROM newcomplaint WHERE user_name = '$un' ORDER BY complaint_num DESC ";
					$complaints = mysqli_query($conDB,$qqq);
					
					while($row = mysqli_fetch_array($complaints,MYSQLI_NUM)){
						$c_num= $row[0];
						$c_type= $row[1];
						$status = $row[3];
						$comp_time = $row[4];
						$comp_date = $row[5];
						echo '<tr>';
						echo '<td>'.$c_num.'</td>';
						echo '<td>'.$c_type.'</td>';
						echo '<td>'.$status.'</td>';
						echo '<td>'.$comp_time.'</td>';
						echo '<td>'.$comp_date.'</td>';
						echo '</tr>';
						
					}

					?>

	                
				</tbody>
            </table>
            <br><br>
		</div>
	</div>
</div> 

<br><br>
<article class="mb-3" style="background-color: #103045">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Bahria Town (Pvt) Ltd.</h3><br><br>
	<p class="h5 text-white"><img src="bahria-town-logo.png"></p>   
	<br>
	<p><a class="btn btn-warning" target="_blank" href="http://www.bahriatown.com/"> Visit our website  
	 <i class="fa fa-location-arrow "></i></a></p>
</div>
<br><br>
</article>
<p style="text-align: right; font-size: 15px;"><b>Crafted at <a href="">MarFat San®</a></b></p>
</body>
</html>
