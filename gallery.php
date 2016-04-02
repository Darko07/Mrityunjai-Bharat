<!DOCTYPE HTML>
<html>
  <head>
    <title>Gallery - MRITYUNJAY BHARAT TRUST</title>
    <script src="includes/jquery-2.1.3.min.js"  type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/gallery.css" />
    <script src="javascript/gallery.js"  type="text/javascript" ></script>
    <style type="text/css">
    #init-container a {
    	text-decoration: none;
    	font-family: segoe UI;
    	font-size: 1vw;
    	color: black;
    	text-align: center;
    	border-color: #252525;
    }

    #body-wrapper {
    	background-color: #e6e6e6;
    }
    </style>
  </head>
  <body>
    <div id="body-wrapper">
      <img src='graphics/menu_1.png' id="menu-drawer" style="height:25px; z-index: 15; width:25px; position:fixed; top:6%; left:3.5%; cursor:pointer;" />
      <?php include_once 'navigation.php';?>
      
      <div id="panel" style="background-color: #e6e6e6">
	<center><p id="gallery-heading" style="color: #252525; border-bottom: 1px solid #252525">Gallery</p></center>
	<div id="init-container">
	  <a href="gallery_display.php?initiative=crafting-future" class="init" id="init-1">
	    <br/><br/><br/><br/><br/><p>Crafting Future</p>
	  </a>
	  <a href="gallery_display.php?initiative=sanchit" class="init" id="init-2">
	    <br/><br/><br/><br/><br/><p>Sanchit</p>
	  </a>
	  <a href="gallery_display.php?initiative=gram-swaraj" class="init" id="init-3">
	    <br/><br/><br/><br/><br/><p>Gram Swaraj</p>
	  </a>
	  <a href="gallery_display.php?initiative=yed" class="init" id="init-4">
	    <br/><br/><br/><br/><br/><p>YED</p>
	  </a>
	  <a href="gallery_display.php?initiative=youth-icon" class="init" id="init-5">
	    <br/><br/><br/><br/><br/><p>Youth Icon</p>
	  </a>
	  <a href="gallery_display.php?initiative=srijan" class="init" id="init-6">
	    <br/><br/><br/><br/><br/><p>Srijan</p>
	  </a>
	</div>
      </div>
      
      <?php include_once 'footer.php'?>
    </div>
  </body>
</html>
