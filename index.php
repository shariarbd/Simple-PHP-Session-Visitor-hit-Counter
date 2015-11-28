<?php include('visitor_counter.php'); // Called to count visitors hits ?>
<!DOCTYPE html>
<html lang="en">
<style>
	body {
		text-align: center;
		font-family: sans-serif;
	}
	.title {
		padding-top: 50px;
		padding-bottom: 50px;
	}
	.visitor-container {
		padding-bottom: 40px;
		font-size: 18px;

	}
</style>
<head>
	<meta charset="UTF-8">
	<title>Simple PHP Session Visitor hit Counter Demo Page</title>
</head>
<body>
	<h3 class="title"> Simple PHP Session Visitor hit Counter Demo Page </h3>
	<p class="visitor-container"> Page has been Visited <?php include('visitor_counter.txt'); ?> Times </p> 

	<p>If you visit this page after 5 minuet (adjustable) or from different web browser,<br> you will be counted  as new visitor</p>
	
	<p>Download this simple php visitor hit counter from gitHun <br>@ 
	<a href="https://github.com/shariarbd/Simple-PHP-Session-Visitor-hit-Counter">Simple PHP Session Visitor hit Counter</a></p>
</body>
</html>