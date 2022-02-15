<?php 
$your_email ='keerthikumar1430@gmail.com';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$mobile = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$user_message = $_POST['message'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email)||empty($mobile))
	{
		$errors .= "\n Name,mobile no. and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	 if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	} 
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New  Contact form submission";
		$from = $visitor_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "A user  $name submitted the contact form:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".
		"Mobile no: $mobile \n".
		"Message: \n ".
		"$user_message\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header('Location: thankYou.php');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<!--<link rel="shortcut icon" href="css/images/favicon.ico" /> -->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>
<!-- define some style elements-->
<style>
label,a, body 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
</head>
<body>
<div class="shell">
  <div class="border">
    <div id="header">
     <?php include 'header.php'?>
    </div>
    <div id="navigation">
     <?php include 'menu.php'?>
    </div>
    <div class="slider">
      <?php include 'slider.php'?>
    </div>
    <div id="main">
      <div id="content1">
        <div class="highlight">
          <h3>Contact Us</h3>
          <table width="750">

<td align="left">
<div class="map">
            <iframe src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Velankani+software+gate-2,+Electronic+city+phase+1,Bengaluru+-+560100&amp;aq=&amp;sll=15.317278,75.713888&amp;sspn=11.066487,21.643066&amp;ie=UTF8&amp;hq=Velankani+software+gate-2,+Electronic+city+phase+1,Bengaluru+-+560100&amp;hnear=&amp;radius=15000&amp;ll=12.849887,77.658982&amp;spn=0.071946,0.071946&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Velankani+software+gate-2,+Electronic+city+phase+1,Bengaluru+-+560100&amp;aq=&amp;sll=15.317278,75.713888&amp;sspn=11.066487,21.643066&amp;ie=UTF8&amp;hq=Velankani+software+gate-2,+Electronic+city+phase+1,Bengaluru+-+560100&amp;hnear=&amp;radius=15000&amp;ll=12.849887,77.658982&amp;spn=0.071946,0.071946&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
             </div> <br>
<strong>SENSAI. KEERTHI G K</strong><br>
UniWorld<br>
4th floor, SJR Equinox Complex<br>
Opp Velankani software gate-2<br>
Electronic city phase 1<br>
Bengaluru - 560100<br>
Mobile:+91-8123731900<br>
E-mail:enquiry@fightbackindia.in<br>
Keerthi : keerthigk@fightbackindia.in<br>
</td>
          <td width="350" align="center">
          <strong><font color="#FF0000" size="+1">Enquiry Form</strong></font>
          <?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>
<form method="POST" name="contact_form" 
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
<table>
<tr><td>
<!--<label for='name'>Name: </label> --></td>
<td><input type="text" name="name" value='<?php echo htmlentities($name) ?>'size="43.5" placeholder="Full Name"></td></tr>
<tr><td><!--<label for='email'>Email: </label> --></td>
<td><input type="text" name="email" value='<?php echo htmlentities($visitor_email) ?>'size="43.5" placeholder="Email"></td></tr>
<tr><td><!--<label for='email'>Mobile no.: </label> --></td>
<td><input type="text" name="mobile" value='<?php echo htmlentities($mobile) ?>'size="43.5" placeholder="Mobile no."></td></tr>
<tr><td><!--<label for='message'>Message:</label> --></td>
<td><textarea name="message" rows=10 cols=40  placeholder="Enquiry or Message"><?php echo htmlentities($user_message) ?></textarea></td></tr>
<tr><td></td><td><img src="captcha_code_file.php?rand=<?php  echo rand(); ?>" id='captchaimg' ></td></tr>
<tr><td><label for='message'>Enter code here :</label> </td>
<td><input id="6_letters_code" name="6_letters_code" type="text" size="43.5" placeholder="Code"></td></tr>
<tr><td></td><td><small>Can't read the image? <a href='javascript: refreshCaptcha();'>refresh</a> </small></td></tr>
<tr><td></td><td><input type="submit" value="Submit" name='submit'></td></tr>
</table>
</form>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("mobile","req","Please provide your mobile no."); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</td>
</table>
         <!-- <img src="css/images/highlight.gif" alt="" class="right" /> -->
          <!--<p>Martial Arts are about fighting and conquering one’s innermost fears, and unleashing a powerful, unstoppable force from within</p>
          <p>The well-trained Phoenix martial arts team is well-equipped to train youth and adults with the same vigor, to build an unstoppable force of confidence from within
</p> -->
          

          <!--<a href="#" class="more">Find out more</a> </div> -->
        <!--<div class="projects">
          <h3>Latest projects</h3>
          <div class="item">
            <div class="image left"> <a href="#"><img src="css/images/project01.jpg" alt="" /></a> </div>
            <div class="text left">
              <h4>simply dummy title</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is</p>
              <a href="#" class="more">Find out more</a> </div>
            <div class="cl">&nbsp;</div>
          </div>
          <div class="item">
            <div class="image left"> <a href="#"><img src="css/images/project02.jpg" alt="" /></a> </div>
            <div class="text left">
              <h4>simply dummy title</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is</p>
              <a href="#" class="more">Find out more</a> </div>
            <div class="cl">&nbsp;</div>
          </div>
          <div class="item">
            <div class="image left"> <a href="#"><img src="css/images/project03.jpg" alt="" /></a> </div>
            <div class="text left">
              <h4>simply dummy title</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is</p>
              <a href="#" class="more">Find out more</a> </div>
            <div class="cl">&nbsp;</div>
          </div>
          <div class="item">
            <div class="image left"> <a href="#"><img src="css/images/project04.jpg" alt="" /></a> </div>
            <div class="text left">
              <h4>simply dummy title</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is</p>
              <a href="#" class="more">Find out more</a> </div>
            <div class="cl">&nbsp;</div>
          </div>-->
        </div>
      </div> 
      <!--<div id="sidebar" class="right">
        <h3>Some Links</h3>
        <div class="sidebar-nav">
          <ul>
            <li><a href="#">Lorem Ipsum</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
          </ul>
        </div>
        <a href="#" class="btn-buy"><em>Buy Now</em></a>
        <div class="advertisement">
          <h3>Advertisement</h3>
          <div class="ads">
            <div class="ad left"> <a href="#"><img src="css/images/ad01.gif" alt="" /></a> </div>
            <div class="ad right"> <a href="#"><img src="css/images/ad02.gif" alt="" /></a> </div>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
        <div class="info">
          <h3>Some Title</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>
        </div>
      </div>-->
      <div class="cl">&nbsp;</div>
    </div> 
    <div class="shadow-l"></div>
    <div class="shadow-r"></div>
    <div class="shadow-b"></div>
  </div>
  <div id="footer">
    <?php include 'footer.php' ?>
  </div>
</div>
</body>
</html>