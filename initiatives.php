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
        $description = "There is a pool of talented students residing in remote tribal and rural areas.<br />Your contribution can give them an oppurtunity to excel in life.<br />Let us all gift a promising future to the children who are deprived of education.";
        $name = "Crafting Future";
        break;
    case "sanchit":
        $logo = "graphics\init\l1.png";
        $description = '"Sanchit", is a platform to discuss about various issues related to our societies prevalent issues related to our country and around the world.';
        $name = "Sanchit";
        break;
    case "gram-swaraj":
        $logo = "graphics\init\l2.png";
        $description = "Awareness programmes for Gram Swaraj and encouraging ruralilties to participate in developement of the village.";
        $name = "Gram Swaraj";
        break;
    case "yed":
        $logo = "graphics\init\l3.png";
        $description = "Youth Empowerment and Developement - Organising various programs for youth empowerment and developement,<br />also working for implementation of youth policy.";
        $name = "YED";
        break;
    case "youth-icon":
        $logo = "graphics\init\l4.png";
        $description = '"Youth Icon Awards" in the memory of "Late Shri Badrilal Dave Ji".<br/>These awards are given to encourage and felicitate the young achievers of society<br />in various fields along with a "Lifetime Achievement Award" in the memory of<br />renowned social worker "Late Shri Badrilal Dave".';
        $name = "Youth Icon";
        break;
    case "srijan":
        $logo = "graphics\init\l5.png";
        $description = '"Srijan" is providing a platform to gather fortnightly and discuss various art forms for budding artists.';
        $name = "Srijan";
        break;
    default :
        Header("Location: index.php");
}

$query = "SELECT * FROM `gallery` WHERE `initiative` LIKE '$initiative' ORDER BY id DESC";

$result = mysqli_query($conn, $query) or die("Query Failed");

$i = 1;

//$record = array();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Crafting Future  </title>

        <script src="includes/jquery-2.1.3.min.js"  type="text/javascript" ></script>
        <script type="text/javascript" src="javascript/index.js"></script>

        <link rel="stylesheet" type="text/css" href="stylesheets/crafting-future.css">

    </head>
    <body>
        <div id="body-wrapper">
            <div id="page-one">
                <div id="left-section">
                    <div id="left-section-head">
                        <div id="menu-drawer">
                            <img src="graphics/menu_dark.png" id="menu-drawer-button" />
                        </div>
                        <div id="left-section-head-content">
                            <img src="<?php echo $logo ?>" id="crafting-future-logo" />
                        </div>
                    </div>
                    <div id="left-section-body">
                        <div id="left-section-body-content">
                            <center><p id="left-section-body-content-heading"><?php echo $name ?></p></center>
                        </div>
                    </div>
                    <div id="left-section-footer">
                        <div id="left-section-footer-content">
                            <img src="graphics/logo-name.png" id="logo-name-image">
                        </div>
                    </div>
                </div>
                <div id="right-section">
                    <div id="right-section-slider">
                        <div id="slide-mask"></div>
                        <div class="slides">
                            
                            <?php
                                while(($record = mysqli_fetch_assoc($result)) && $i <= 4) {
                                    echo '<div class="slide" id="slide-'.$i.'" style="background-image:url(\''.$record['src'].'\');">';
                                    echo '</div>';
                                    $i++;
                                }
                                $i = 1;
                            ?>


                        </div>
                    </div>
                    <div id="right-section-bullshit">

                    </div>
                </div>
                
                <?php include_once 'navigation.php'; ?>
                
                
            </div>
            <div id="page-two">
                <p id="init-head">About <span style="font-weight: 600;"><?php echo $name ?></span></p>
                
                <p id="init-description" align="center"><?php echo $description ?></p>
                
                <div id="init-strip-cont">
                    <?php
                                                mysqli_free_result($result);
                                                $result = mysqli_query($conn, $query);
                        while(($record = mysqli_fetch_assoc($result)) && $i <= 5) {
                            echo '<div class="image" id="image-'.$i.'" style="background: url(\''.$record['src'].'\')"></div>';
                            $i++;
                        }
                        $i = 1;
                    ?>
                </div>
            </div>
            <div id="page-three">
                <center style="margin-top: 50px;">
                <a href="initiatives.php?initiative=crafting-future" id="crafting-future-link" class="links"><img  id="crafting-future-link-image" src="graphics/init/l0.png" /></a>
                <a href="initiatives.php?initiative=sanchit" id="sanchit-link" class="links" ><img id="sanchit-link-image" src="graphics/init/l1.png" /></a>
                <a href="initiatives.php?initiative=gram-swaraj" id="gram-swaraj-link" class="links" ><img  id="gram-swaraj-link-image" src="graphics/init/l2.png" /></a>
                <a href="initiatives.php?initiative=yed" id="yed-link" class="links" ><img id="yed-link-image" src="graphics/init/l3.png" /></a>
                <a href="initiatives.php?initiative=youth-icon" id="youth-icon-link" class="links" ><img  id="youth-icon-link-image" src="graphics/init/l4.png" /></a>
                <a href="initiatives.php?initiative=srijan" id="srijan-link" class="links" ><img id="srijan-link-image" src="graphics/init/l5.png" /></a>
                </center>
            </div>
            <script>
                $("#<?php echo $initiative ?>-link").css("display", "none");
            </script>
            <div id="footer">

            </div>
            
            <?php  include_once 'footer.php'; ?>
            
        </div>

    </body>
</html>

<?php

mysqli_free_result($result);
mysqli_close($conn);
?>