<!DOCTYPE html>
<html lang="en-us">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="<?=$robots?>" />
<meta name="keywords" content=""/>
<meta name="description" content="Looking for a new website for your Non Profit or small business? 
Look no further than NJ based 2 Dogs Media. 10+ years of experience doing what we love!"/>
<meta charset="utf-8">
<script src="https://use.fontawesome.com/bb1adc1940.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/table.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Chelsea Jansen's WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>   
      <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Chelsea</a></li>
      -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
<!-- end header file here -->