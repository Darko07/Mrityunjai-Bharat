<?php
//Database queries. Later to be included as a seperate script file.
include_once 'dbconn.php';

$initiative = $_GET["initiative"];
$logo;
$description;
$name;
switch($initiative) {
    case "crafting-future":
        $logo = "graphics\init\l0.png";
        $name = "Crafting Future";
        break;
    case "sanchit":
        $logo = "graphics\init\l1.png";
        $name = "Sanchit";
        break;
    case "gram-swaraj":
        $logo = "graphics\init\l2.png";
        $name = "Gram Swaraj";
        break;
    case "yed":
        $logo = "graphics\init\l3.png";
        $name = "YED";
        break;
    case "youth-icon":
        $logo = "graphics\init\l4.png";
        $name = "Youth Icon";
        break;
    case "srijan":
        $logo = "graphics\init\l5.png";
        $name = "Srijan";
        break;
    default :
        Header("Location: index.php");
}

$query = "SELECT * FROM `gallery` WHERE `initiative` LIKE '$initiative' ORDER BY id DESC";

$result = mysqli_query($conn, $query) or die("Query Failed");

$i = 1;

$record = array();
while($row = mysqli_fetch_assoc($result))
{
    $record[] = $row;
}

?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Gallery - MRITYUNJAY BHARAT TRUST</title>
    <script src="includes/jquery-2.1.3.min.js"  type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/gallery_display.css" />
    <script src="javascript/gallery_display.js"  type="text/javascript" ></script>
  </head>
  <body>
    <div id="body-wrapper" >
      <img src='graphics/menu_1.png' id="menu-drawer" style="height:25px; z-index: 15; width:25px; position:fixed; top:6%; left:3.5%; cursor:pointer;" />
      <?php include_once 'navigation.php';?>
      
      <div id="panel"  style="background-color:#e6e6e6;">
	<div id="init-container">
	  <img src="<?php echo "$logo"; ?>" id="init-logo"/>
	  <p id="init-name"  style="color:#252525;"><?php echo "$name"; ?>'s Gallery</p>
	</div>
	
	<div id="image-container">
	  <?php
	    $date = substr($record[0]['date'], 0, 10);
	    $i = 0;
	    $change = 0;
	    echo "<p class='date'  style='color:#252525;'>$date</p>";
	    echo "<br />";
	    echo "<div class='image-container'>";
	    while($i < count($record)) {
	      if(substr($record[$i]['date'], 0, 10) == $date && $change < 4 && $change != -1) {
		$change++;
	      }
	      if($change > 3) {
		$change = -1;
		$id = $record[$i]['id'];
		echo "<div class='show-more' onclick=\"showImage($id);\"><img src='https://cdn2.iconfinder.com/data/icons/windows-8-metro-style/256/stack_of_photos.png' /></div>";
	      }
	      if(substr($record[$i]['date'], 0, 10) != $date) {
		/*-------Transition-------*/
		
		$date = substr($record[$i]['date'], 0, 10);
		echo "</div>";
		echo "<p class='date'  style='color:#252525;'>$date</p>";
		echo "<br />";
		echo "<div class='image-container'>";
		
		$change = 1;
	      }
	      
	      if($change != -1 && $change < 4) {
	      
		$src = $record[$i]['src'];
		$id = $record[$i]['id'];
		echo "<div class='image' data-date='$date' data-src='$src' data-id=$id style=\"background-image:url('$src');\" onclick='showImage($id);'/></div>";
	      } else {
		$src = $record[$i]['src'];
		$id = $record[$i]['id'];
		echo "<div class='image hidden-image' data-date='$date' data-src='$src' data-id=$id style=\"background-image:url('$src');\" onclick='showImage($id);'/></div>";
	      }
	      
	      
	      $i++;
	    }
	    echo "</div>";
	  ?>
	</div>
	
      </div>
      
      <?php include_once 'footer.php'?>
    </div>
    <div id="image-view-container">
      <div id="mask-close" onclick="closeImage();"></div>
      <div id="prev" style="background-image: url('graphics/left.png');" onclick="prev();"></div>
      <img id="image-view" src='' />
      <div id="next" style="background-image: url('graphics/right.png');" onclick="next();"></div>
    </div>
    <script>
    
      var max = <?php echo count($record); ?>;
      var curId;
      function showImage(id) {
	curId = id;
	if(curId > max)
	  curId = 1;
	else if (id < 1)
	  curId = max;
	var src = $(".image[data-id="+curId+"]").attr("data-src");
	$("#image-view").attr("src", src);
	$("#image-view-container").fadeIn();
      }
      
      function closeImage() {
	$("#image-view-container").fadeOut();
      }
      
      function next() {
	showImage(++curId);
      }
      
      function prev() {
	showImage(--curId);
      }
    </script>
  </body>
</html>
