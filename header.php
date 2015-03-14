<?php 
/* [INFO 2300 Project 1] header.php 
 * header including site navigation bar
 */ 

?>
<!DOCTYPE HTML>
<html>
<head>
   <meta charset="UTF-8">
   <title><?php echo $CURRENT_PAGE ?>- Noah Grossman</title>
   <link rel="stylesheet" href="CSS/web.css">
</head>
<body>
<h1 class="pageHead"><?php echo $CURRENT_PAGE ?></h1>
<ul class="navbar">	
    <li><a href="index.php">Home</a></li>
    <li><a href="portfolio.php">Portfolio</a></li>
    <li><a href="interests.php">Interests</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>