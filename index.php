<!DOCTYPE html>
<html> 

<head>

<meta charset="UTF-8">
<title>GET</title>

</head>

<body>
	
	
	<?php $name=$_GET['name'];?>
	<h1> Hello <?php echo $name;?></h1>
	
	<br>
	<a href="index.php?name=Jhon">Go to Jhon </a>
	<br>
	<a href="index.php?name=Maria">Go to Maria </a>
	<br>
	<a href="index.php?name=Hanna">Go to Hanna </a>
	
</body>

</html>

