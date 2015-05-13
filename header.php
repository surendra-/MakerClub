<?php
session_start();
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="shortcut icon" href="images/fav.png" type="image/x-icon" />
		<title>MakerClub</title>
		  <!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="css/materialize.min.css">
		<style type="text/css">
		.topheader{
			padding : 0px 0px;
			height:90px;
		}
		.btn
		{
			color:#fff;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
		}
		.secondnav .col:hover
		{
			background: #2B398F;
		}
		.check{
			margin-left:4px;
		}
		.beta{
			font-size:20px;
			color:#f00;
		}
		.footer-nav a{
			display : block;
			padding:5px;
			margin-left:10px;
			
		}
		label.error{
			margin-top: 35px;
			font-size: 10px !important;
			color:#900 !important;
		}
		</style>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	</head>
<body>

<div class="top-nav white">
        <div class="container">
		  <div class="row" style="margin-bottom:0px;">
		  <div class="col s12 m4">
			<a href="index.php" class="page-title"><h1 style="font-family:oswald; color:#000;">MakerClub<span class="beta">BETA</span></h1></a>
		  </div>
		  <div class="col s12 m4 right" style="padding-top:30px;">
			<div class="white" role="navigation">
				<div class="nav-wrapper">
					<ul>
					<?php if(empty($_SESSION['id'])){?>
						<li class="green left" style=" padding:5px; margin:3px;"><a style="color:#fff;" class="modal-trigger" href="#modal1">Join MakerClub </a></li>
						<li class="left"  style="padding:5px; margin:3px;"><a href="#" >Sign in</a></li>
					<?php }else{ ?>
						<li class=" left" style=" padding:5px; margin:3px;">Hi <?php echo $_SESSION['name']; ?> !</li>
						<li class="left"  style="padding:5px; margin:3px;"><a href="handler/logout.php" >Logout</a></li>
					<?php }?>
					</ul>
				</div>
			</div>
		  </div>

		  </div>
        </div>
      </div>
<nav class="indigo darken-4" role="navigation">
    <div class="nav-wrapper">
	<div class="container">
      <ul class="hide-on-med-and-down">
        <li><a href="https://webmaker.org/search?type=all&q=makerclub" target="_blank"><i class="mdi-action-explore left"></i>Explore</a></li>
		<li><a href="event.php"><i class=" tiny mdi-action-event left"></i>Events</a></li>
		<li class="learn1" ><a href='#'><i class="mdi-hardware-keyboard left"></i>Learn</a></li>
		<li><a href="workshop.php"><i class="mdi-action-settings left"></i>Workshops</a></li>
		<li class="collab1"><a href='#'><i class="mdi-action-home left"></i>Collab House</a></li>
      </ul>
	</div>
      <ul id="nav-mobile" class="side-nav" >
       <li><a href="#"><i class="mdi-action-explore left"></i>Explore</a></li>
		<li><a href="event.php"><i class="mdi-action-event left"></i>Events</a></li>
		<li class="learn1"><a><i class="mdi-hardware-keyboard left"></i>Learn</a></li>
		<li class="collab1" ><a><i class="mdi-action-home left"></i>Collab House</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse "><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>
  <nav class="indigo hide1 hide" role="navigation">
    <div class="nav-wrapper">
	<div class="container">
	<div class="row">
      <ul class="hide-on-med-and-down secondnav">
        <li class="col m2"><a href="space.php">Space</a></li>
		<li class="col m2"><a href='tools.php'>Tools</a></li>
		<li class="col m2"><a href="#">Collab Lab</a></li>
		<li class="col m2"><a href="workshop.php">Workshops</a></li>
		<li class="col m2"><a href="#">Membership</a></li>
		<li class="col m2"><a href="#">Guidelines</a></li>
      </ul>
	</div>
	</div>
    </div>
  </nav>
  <nav class="indigo hide2 hide" role="navigation">
    <div class="nav-wrapper">
	<div class="container">
	<div class="row">
      <ul class="hide-on-med-and-down secondnav">
        <li class="col m2"><a href="maker-skills.php">Maker Skills</a></li>
		<li class="col m2"><a href='badges.php'>Badges</a></li>
      </ul>
	</div>
	</div>
    </div>
  </nav>
