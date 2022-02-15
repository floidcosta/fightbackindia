<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Images</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<!--<link rel="shortcut icon" href="css/images/favicon.ico" /> -->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript">
		$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});
	</script>
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
          <h3>Images</h3>
          <a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6633.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6633_thumb.jpg" alt="" /></a>

		<a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6634.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6634_thumb.jpg" alt=""/></a>

		<a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6636.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6636_thumb.jpg" alt="" /></a>

		<a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6637.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6637_thumb.jpg" alt="" /></a>
        <a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6638.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6638_thumb.jpg" alt="" /></a>

		<a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6640.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6640_thumb.jpg" alt="" /></a>

		<a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6641.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6641_thumb.jpg" alt="" /></a>

		<a class="fancybox-thumb" rel="fancybox-thumb" href="image/gallery/1/full/DSCN6643.jpg" target="_blank"><img src="image/gallery/1/thumbnails/DSCN6643_thumb.jpg" alt="" /></a>
          

          
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