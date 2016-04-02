<?php
	include_once 'dbconn.php';

	$query = "SELECT * FROM  `recent_updates` ORDER BY `id` DESC LIMIT 10";
	$result = mysqli_query($conn, $query) or die("Query failed");
?>

<!DOCTYPE html>
<html>
    <head>
     <meta   
            name="viewport"
            content="width=device-width,
            initial-scale=1.0">

        <title>Mrityunjai Bharat</title>
        <script src="includes/jquery-2.1.3.min.js"  type="text/javascript" ></script>
        <script type="text/javascript" src="javascript/index.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheets/index.css">
         <meta   
            name="viewport"
            content="width=device-width,
            initial-scale=1.0">

        <style>
        	#recent-links-bg {
        		background-color: rgba(0, 0, 0, 0.4);
        		position: fixed;
        		width: 100vw;
        		height: 100vh;
        		z-index: 999;
        		display: none;
        	}

        	#recent-links-cont {
        		width: 80vw;
        		height: 80vh;
        		position: absolute;
        		top: 10vh;
        		left: 10vw;
        		background-color: #e6e6e6;
        	}

        	.recent-updates-text {
        		font-size: 0.9vw;
        		color: #252525;
        		font-family: segoe UI;
        		margin-left: 5vw;
        		margin-right: 5vw;
        		color: #02315D;
        	}
        </style>
    </head>
    <body>
    <div id="recent-links-bg">

    	<img src="graphics/crossWhite.png" style="position: absolute; height: 2vw; right: 4vw; top: 4vh; cursor: pointer" onclick="
    		$('#recent-links-bg').fadeOut();"/>
    	<div id="recent-links-cont">
    	<br/><br/>
    	<h2 align="center">Latest Updates<h2>
    	<br />
    	<br />
    		<?php
    			while($record = mysqli_fetch_assoc($result)) {
    				echo "<p class='recent-updates-text'>".$record['text']."</p>";
    				echo "<br />";
    			}
    		?>
    	</div>
    </div>
        <div id="body-wrapper">
            <div id="intro" style=" position: absolute; height: 100vh; top: 0vh; width: 100vw;">


                <div class="slides">

                    <div class="slide" id="slide-1">
                        <div class="slide-image zoom" id="slide-image-1" style="background-image: url('graphics/1.jpg');" >

                        </div>
                        <p class="slide-text" id="slide-text-1">
                            <span style="font-weight: 900;">BE THE </span>CHANGE <span style="font-weight: 900;">YOU WANT TO SEE IN THE WORLD</span>
                        </p>
                    </div>

                    <div class="slide" id="slide-2">
                        <div class="slide-image" id="slide-image-2" style="background-image: url('graphics/2.jpg');" >

                        </div>
                        <p class="slide-text" id="slide-text-2">
                            SUPPORTING <span style="font-weight: 900;">YOUNG</span> PEOPLE IN <span style="font-weight: 900;">EDUCATION, SKILLS</span> &<span style="font-weight: 900;"> TRAINING</span>
                        </p>
                    </div>

                    <div class="slide" id="slide-3">
                        <div class="slide-image" id="slide-image-3" style="background-image: url('graphics/3.jpg');" >

                        </div>
                        <p class="slide-text" id="slide-text-3">
                            SUPPORTING <span style="font-weight: 900;">YOUNG</span> PEOPLE IN <span style="font-weight: 900;">EDUCATION, SKILLS</span> &<span style="font-weight: 900;"> TRAINING</span>
                        </p>
                    </div>

                    <div class="slide" id="slide-4">
                        <div class="slide-image" id="slide-image-4" style="background-image: url('graphics/4.jpg');" >

                        </div>
                        <p class="slide-text" id="slide-text-4">
                            SUPPORTING <span style="font-weight: 900;">YOUNG</span> PEOPLE IN <span style="font-weight: 900;">EDUCATION, SKILLS</span> &<span style="font-weight: 900;"> TRAINING</span>
                        </p>
                    </div>


                </div>
                <div id='join-button'><span style="color:white; height:auto; width:auto; font-size: 25px; font-family: segoe UI; position:absolute; left:25%; top:50%; transform:translateY(-50%); ">JOIN US</span></div>

                <div id="quick-links">
                    <div><a href="#" class="link-ref" id="link1" onclick="$('#id-ul-year1-select').click();">About Us</a></div>
                    <div><a href="#" class="link-ref" id="link2" onclick="$('#id-ul-year2-select').click();">Initiatives</a></div>
                    <div><a href="#" class="link-ref" id="link3" onclick="$('#join-us-form').css('display', 'block');">Join Us!</a></div>
                </div>

                <div id="tuk-tuk-cntr">
                    <div id="tuk-tuk-1" class="tuk-tuk"></div>
                    <div id="tuk-tuk-2" class="tuk-tuk"></div>
                    <div id="tuk-tuk-3" class="tuk-tuk"></div>
                    <div id="tuk-tuk-4" class="tuk-tuk"></div>
                </div>
                <div id="tuk-tuk-cntr">
                    <div id="fake-tuk-tuk-1" class="fake-tuk-tuk"></div>
                    <div id="fake-tuk-tuk-2" class="fake-tuk-tuk"></div>
                    <div id="fake-tuk-tuk-3" class="fake-tuk-tuk"></div>
                    <div id="fake-tuk-tuk-4" class="fake-tuk-tuk"></div>
                </div>
            </div>
            
<img src='graphics/menu_1.png' id="menu-drawer" style="height:25px; z-index: 15; width:25px; position:fixed; top:6%; left:3.5%; cursor:pointer;" />

            <?php include_once 'navigation.php' ?>



            <div id="hidden-bg"></div>





            <p id="logoText">MRITYUNJAI <span style="color:#FEA418">BH</span><span>AR</span><span style="color:#128807">AT</span></p>




            <div id="mbt-intro" style="position: absolute; height:100vh; width: 100vw; top: 100vh; background-color: rgba(255, 255, 255, 1) !important; z-index: 2;">
                <p id="mbt-intro-text">ABOUT <span style="font-weight:600;">MRITYUNJAI BHARAT</span></p>
                <div id="divider"></div>
                <p id="description-line1">We believe in Nation first ideology & action.</p>
                <div id="mbt-logo"></div>
                <p id='mbt-description'>Mrityunjai Bharat Trust is an organization registered under trust act at Indore in the year 2009 . Aiming for overall development of nation through development of individual the organization is runing few projects as of our social responsibility we are committed to encourage & collect people for fulfilling their social & national responsibilities.<br><br>We believe in Nation first ideology & action. We call you to join us and contribute your work & experiences with us. We believe people should be responsible for their own upliftment & which is not possible without upliftment of society. We call you to bring a change in yourself & society.</p>


            </div>     


            <div id="divider-page-init"><div id="divider-icon-init"></div></div>

            <!--div id="image-div-container">
                <div id="anchor"></div>
                <img id="image-div" src="graphics/imageX2.jpg" />
                <div id="image-div-mask"></div>
            </div-->


            <div id='initiatives-container'>
                <div id='initiatives-container-bg'></div>
                <p id='initiatives-heading'>OUR <span style="font-weight: 900;">INITIATIVES</span>  </p>
                <a href="initiatives.php?initiative=crafting-future"><div id='l0'></div></a>
                <a href="initiatives.php?initiative=sanchit"><div id='l1'></div></a>
                <a href="initiatives.php?initiative=gram-swaraj"><div id='l3'></div></a>
                <a href="initiatives.php?initiative=yed"><div id='l2'></div></a>
                <a href="initiatives.php?initiative=youth-icon"><div id='l4'></div></a>
                <a href="initiatives.php?initiative=srijan"><div id='l5'></div></a>


    		<p id="rl" onclick="$('#recent-links-bg').fadeIn();" style="position: absolute; bottom: 5vh; right: 5vw; cursor: pointer; font-size: 1.2vw; color: #D3113A;"><u>Recent Updates</u></p>

            </div>

            <div style="position: absolute; top: 300vh; left: 0vw; width: 100vw;">
            <p id="testi-id" align="center">Testimonials</p>
            <div id="parent-slider-container" style="position:absolute; top:35vh; left:50%; transform: translateX(-50%); height: 40vh; width:65vw;background-color:rgba(0,0,0,0.5);z-index:99; overflow: hidden; ">

                <div class="slidestext" id="slide-1">
                    <p class="text-class">"Mufti Mohammad Sayeed, chief minister of Jammu and Kashmir passes away"</p>
                </div>
                <div class="slidestext" id="slide-2">
                    <p class="text-class">"It appears that even after the terrorist strikes in the country, the Uttar Pradesh police has."</p>
                </div>
                <div class="slidestext" id="slide-3">
                    <p class="text-class">"It appears that even after the terrorist strikes in the country, the Uttar Pradesh police has"</p>
                </div>
                <div class="slidestext" id="slide-4">
                    <p class="text-class">Here is an unplugged version of 'Aankhen Teri' from Mithoon's episode of Royal Stag MTV Unplugged Season 4</p>
                </div>
            </div>
            </div>


            <div id="intent-gap" style=" position: absolute; top: 400vh">
    <p id="intent-gap-coloumn1" style="color:white; height: 150px; width:300px;  font-family:sliderFont; font-size: 30px; font-weight: 900; position:relative;left:5%; top:30%;">How can you<br> <span style="font-size: 40px;  position:relative; left:14%;">HELP</span></p>
    <p id='help-one'><span style="font-size:90px; font-family: sliderFont; color: #303030;" >01/</span><span style="position:absolute; top:25px">Make a<br> Donation</span></p>
    <p id='help-two'><span style="font-size:90px; font-family: sliderFont; color: #303030;">02/</span><span style="position:absolute; top:25px; width:150px;">Become a</span><br><span style="position:absolute; top:56px; left:145px;">Volunteer</span></p>
    <p id='help-three'><span style="font-size:90px; font-family: sliderFont; color: #303030;">03/</span><span style="position:absolute; top:25px; width:250px;">Keep your</span><br><span style="position:absolute;width:250px; top:56px; left:145px;">country clean</span></p>
</div>

<div id='footer-home' style=" position: absolute; top: 430vh">
    <img src="graphics/logoMain.png" style="background-size: 20% 20%; height: 13vh; width: 17vh; position: absolute; top:16%; left:7%;"/> 
    <p style="font-family: footerText; font-size:68px; color:#686868; position:absolute; top:15%; left:16%;">|</p>
    <p style="font-family: footerText; font-size:21px; color:#686868; position:absolute; top:19%; left:18%;">Mrityunjai Bharat<br> Trust</p>
    <img src="graphics/loc.png" style="height:40px; width: 40px; position:absolute; top:45%; left: 7%;" />
    <p style="font-family: footerText; font-size:16px; color:#686868; position:absolute; top:46%; left:11%;">Regd. Office: 30, Shanti Nagar<br>Manoramaganj, Indore (452001)<br>Madhya Pradesh</p>
    <img src="graphics/email.png" style="height:30px; width: 29px; position:absolute; top:68%; left: 7.5%;" />
    <p style="font-family: footerText; font-size:16px; color:#686868; position:absolute; top:69%; left:11%;">info@mrityunjaibharat.in</p>
    <img src="graphics/phone.png" style="height:30px; width: 29px; position:absolute; top:81%; left: 7.5%;" />
    <p style="font-family: footerText; font-size:16px; color:#686868; position:absolute; top:80%; left:11%;">+91-94247-01702<br>+91-99938-48854</p>


    <p id="footer-quick-links-head" style="font-family: footerText; font-size:22px; color:#fff; position:absolute; top:17%; left:41%;">Links</p>
    <ul id="link-list" style="list-style-type: none; color:#686868; font-family: footerText; position:absolute; top:30%; left:41%;">
        <li id="footer-about" style="text-decoration: none; margin-bottom: 10px;">About Us</li>
        <a href="initiatives.php?initiative=crafting-future"><li style="text-decoration: none; margin-bottom: 10px;">Crafting Future</li></a>
            <a href="initiatives.php?initiative=sanchit"><li style="text-decoration: none; margin-bottom: 10px;">Sanchit</li></a>
            <a href="initiatives.php?initiative=gram-swaraj"><li style="text-decoration: none; margin-bottom: 10px;">Gram Swaraj</li></a>
            <a href="initiatives.php?initiative=yed"><li style="text-decoration: none; margin-bottom: 10px;">YED</li></a>
            <a href="initiatives.php?initiative=youth-icon"><li style="text-decoration: none; margin-bottom: 10px;">Youth Icon</li></a>
            <a href="initiatives.php?initiative=srijan"><li style="text-decoration: none; margin-bottom: 10px;">Srijan</li></a>
    </ul>

    <p style="font-family: footerText; font-size:22px; color:#fff; position:absolute; top:17%; left:66%;">Find us online</p>
    <ul id="social-links" style="list-style-type: none;display:table; color:#686868; font-family: footerText; position:absolute; top:30%; left:66%;">
        <a href="www.facebook.com"><li style="display: inline; margin-right: 25px;"><img src="graphics/fb.png" style="height:30px; width:30px;"></li></a>
        <a href="www.google.com"><li style="display: inline; margin-right: 25px;"><img src="graphics/g+.png" style="height:30px; width:30px;"></li></a>
        <a href="www.youtube.com"><li style="display: inline; margin-right: 25px;"><img src="graphics/yt.png" style="height:30px; width:30px;"></li></a>
        <a href="www.tweeter.com"><li style="display: inline; margin-right: 25px;"><img src="graphics/tweet.png" style="height:30px; width:30px;"></li></a>
        <a href="www.instagram.com"><li style="display: inline; margin-right: 25px;"><img src="graphics/insta.png" style="height:30px; width:30px;"></li></a>
    </ul>


</div>
        </div>

    </body>
</html>