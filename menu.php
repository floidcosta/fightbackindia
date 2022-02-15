<?php

$val1="";
$val2="";
$val3="";
$val4="";
$val5="";
$val6="";
$val7="";

$part=basename($_SERVER['PHP_SELF'],".php");
if($part=="index")
{
$val1="active";
}
else if($part=="about")
{
$val2="active";
}
else if($part=="selfdefence")
{
$val3="active";
}
else if($part=="mtraining")
{
$val3="active";
}
else if($part=="images")
{
$val4="active";
}
else if($part=="videos")
{
$val4="active";
}
else if($part=="almamaters")
{
$val5="active";
}
else if($part=="blackbelt")
{
$val6="active";
}
else if($part=="contact")
{
$val7="active";
}
else
{
$rep="";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="menu_files/mbcsmbmcp.css" type="text/css" />
</head>
<body>
<ul id="mbmcpebul_table" class="mbmcpebul_menulist css_menu" style="width:99.8%; height: 43px;">
  <li class="topitem spaced_li <?php echo $val1; ?>"><div class="buttonbg gradient_button gradient43" style="width: 110px;"><a href="index.php" target="_self">Home</a></div></li>
  <li class="topitem spaced_li <?php echo $val2; ?>"><div class="buttonbg gradient_button gradient43" style="width: 110px;"><a  href="about.php">About Us</a></div></li>
  <li class="topitem spaced_li <?php echo $val3; ?>"><div class="buttonbg gradient_button gradient43" style="width: 153px;"><div class="arrow"><a class="button_3">Our Portfolio</a></div></div>
  <ul>
  <li class="gradient_menuitem gradient33"><a href="selfdefence.php" target="_self">Self Defence</a></li>
  <li class="gradient_menuitem gradient33 last_item"><a href="mtraining.php" target="_self">Martial Arts Training</a></li>
  </ul></li>
  <li class="topitem spaced_li <?php echo $val4; ?>"><div class="buttonbg gradient_button gradient43" style="width: 116px;"><div class="arrow"><a class="button_4">Gallery</a></div></div>
  <ul>
  <li class="gradient_menuitem gradient33"><a href="images.php" target="_self">Images</a></li>
  <li class="gradient_menuitem gradient33 last_item"><a href="videos.php" target="_self">Videos</a></li>
  </ul></li>
  <li class="topitem spaced_li <?php echo $val5; ?>"><div class="buttonbg gradient_button gradient43" style="width: 166px;"><a href="almamaters.php" target="_self">Our Alma Maters</a></div></li>
  <!--<li class="topitem spaced_li <?php // echo $val6; ?>"><div class="buttonbg gradient_button gradient43" style="width: 188px;"><div class="arrow"><a class="button_6">Bangalore Open</a></div></div>
  <ul>
  <li class="gradient_menuitem gradient33 last_item"><a href="blackbelt.php" target="_self">Black Belt Students</a></li>
  </ul></li>-->
   <li class="topitem spaced_li <?php echo $val6; ?>"><div class="buttonbg gradient_button gradient43" style="width:186px;"><a href="blackbelt.php" target="_self">Bangalore Open-2017</a></div></li>
  <li class="topitem <?php echo $val7; ?>"><div class="buttonbg gradient_button gradient43"><a href="contact.php" target="_self">Contact Us</a></div></li>
</ul>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability and compatibility with very old web browsers. -->
<script type="text/javascript" src="menu_files/mbjsmbmcp.js"></script>
</body>
</html>
