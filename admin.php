<?php

	session_start();

	if($_SESSION['username'] == 'username' && $_SESSION['password'] == 'password') {

?>


<!DOCTYPE html>
<html>
	<head>
	<script src="includes/jquery-2.1.3.min.js"  type="text/javascript" ></script>
		<style>
		* {
			padding: 0px;
			margin: 0px;
		}

		#left-cont {
			position: absolute;
			left: 0px;
			width: 20vw;
			height: 100vh;
			background-color: black;
			overflow: hidden;
		}

		#admin-links {
			position: absolute;
			width: 100%;
			list-style: none;
			color: white;
			top: 30%;
		}

		#admin-links li {
			padding-bottom: 20px;
			padding-top: 20px;
			text-align: center;	
			transition: all 0.4s;
			cursor: pointer;
			font-size: 1vw;
		}

		#admin-links li:hover {
			background-color: red;
		}

		#main-cont {
			position: absolute;
			width: 80vw;
			left: 20vw;
			height: 100vh;
		}

		.updates-cont {
			position: absolute;
			width: 100%;
			height: 100%;
		}

		#gallery-updates-cont {

		}

		#media-updates-cont {
			display: none;
		}

		#recent-updates-cont {
			display: none;
		}

		form {
			position: absolute;
			width: 70vw;
			top: 20vh;
			left: 10vw;
			height: 80vh;
			font-size: 0.92vw;
		}

		select {
			font-size: 0.72vw;
			margin-right: 5vw;
		}

		input {
			font-size: 0.72vw;
		}

		img {
			position: absolute;
			right: 50px;
			top: 0px;

		}

		#submit {
			position: absolute;
			bottom: 30vh;
			background-color: transparent;
			border: 1px solid black;
			border-radius: 5px;
			padding: 10px 50px 10px 50px;
			cursor: pointer;
			transition: all 0.3s;
			font-size: 1.2vw;
			left: 30%;
		}

		#submit:hover {
			background-color: #ed1a46;
			color: white;
		}


		#loader {
			position: fixed;
			width: 100%;
			height: 100%;
			background: rgba(255, 255, 255, 0.7);
			z-index: 99;
			display: none;
		}

		#circle {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 15vw;
			height: 15vw;
			border-radius: 1000px;
			border-top: 4px solid #ed1a46;
			border-right: 4px solid #ed1a46;
			transform: translateX(-50%) translateY(-50%) rotate(0deg);
			animation: c 2s linear infinite;
		}

		#circle1 {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 12vw;
			height: 12vw;
			border-radius: 1000px;
			border-bottom: 4px solid #ed1a46;
			border-left: 4px solid #ed1a46;
			transform: translateX(-50%) translateY(-50%) rotate(0deg);
			animation: c1 2s linear infinite;
		}

		@keyframes c {
			0%{
				transform: translateX(-50%) translateY(-50%) rotate(0deg);
			}

			100%{
				transform: translateX(-50%) translateY(-50%) rotate(360deg);
			}
		}

		@keyframes c1 {
			0%{
				transform: translateX(-50%) translateY(-50%) rotate(0deg);
			}

			100%{
				transform: translateX(-50%) translateY(-50%) rotate(-360deg);
			}
		}

		</style>
	</head>
	<body>
	<div id="loader">
		<div id="circle">
			
		</div>
		<div id="circle1">
			
		</div>
	</div>
	<a href="logout.php" style="position: fixed; top: 50px; right: 50px; z-index: 999;">Logout</a>
		<div id="left-cont">
			<ul id="admin-links">
				<li onclick="show('gallery-updates-cont');">Gallery Updates</li>
				<li onclick="show('media-updates-cont');">Media Release Updates</li>
				<li onclick="show('recent-updates-cont');">Recent Updates</li>
			</ul>
		</div>
		<div id="main-cont">
			<div class="updates-cont" id="gallery-updates-cont">
				<form id="form-gallery" method="POST" enctype='multipart/form-data' action="post-gallery.php">
					<br />
					<br />
					<br />
					<br />
					<br />
					<label>Select Initiative: </label>
					<select name="initiative">
						<option value="crafting-future">Crafting Future</option>
						<option value="sanchit">Sanchit</option>
						<option value="gram-swaraj">Gram Swaraj</option>
						<option value="yed">YED</option>
						<option value="youth-icon">Youth Icon</option>
						<option value="srijan">Srijan</option>
					</select>
					<br />
					<br />
					<br />
					<br />
					<br />
					<label>Select Image: </label>
					<input type="file" name="imageData"  onchange="readURL(this, 'gallery-output');"/>
					<img id="gallery-output"/>
					<input id="submit" type="submit" />
				</form>
			</div>
			<div class="updates-cont"  id="media-updates-cont">
				<form id="form-media" method="POST" enctype='multipart/form-data' action="post-media.php">
					<br />
					<br />
					<br />
					<br />
					<br />
					<label>Select Image: </label>
					<input type="file" name="imageData" onchange="readURL(this, 'media-output');"/>
					<img id="media-output"/>
					<input id="submit" type="submit" />
				</form>
			</div>
			<div class="updates-cont" id="recent-updates-cont">
				<form id="form-recent" method="POST" action="post-recent.php">
					<br />
					<br />
					<br />
					<br />
					<br />
					<label>Enter Text: </label>
					<input type="text" name="recentText" />
					<input id="submit" type="submit" />
				</form>
			</div>
		</div>
		<script>
            function readURL(input, output) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#'+output)
                    	.attr('src', e.target.result)
                        .width('20vw')
                    };
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function show(div) {
            	$(".updates-cont").css("display", "none");
            	$("#"+div).css("display", "block");
            }

            $("#submit").click(function(){
            	$("#loader").css("display", "block");
            });
        </script>
	</body>
</html>

<?php
	}
	else {
		header("Location: loginAdmin.php");
		session_destroy();
	}
?>