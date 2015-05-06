<?php 

include('header.php');

?>
 <style>
 .box .col{
	 padding:10px;
 }
 .box .col .content{
	 border:1px solid #000;
	 border-radius:0px 0px 15px 15px;
	 background:#fff;
 }
 .box .col .title{
	 padding:6px;
	 width:100%;
	 border:1px solid #000;
	 font-size:25px;
	 font-weight:600;
	 background:#fff;
	 text-transform:capitalize;
	  border-radius:15px 15px 0px 0px;
 }
  .box .col .schedule{
	 
	  padding:0px 20px;
  }
  .box .col .schedule table tr{
	border-bottom:1px solid #fff;
  }
  .box .col .footer-button{
	  margin:15px 6px;
	  
  }
  .box .col .img{
	width:100%;
	height:200px;
	background:url('http://makerclub.org/app/uploads/2015/02/star_wars_r2_d2_in_iron_man_armor_mk_x.jpg');
  }
  .back{
	  background:url('images/back.jpg');
  }
  .wh,p,td{
	  color:#fff;
  }
  .title-txt{
	  font-size:20px;
  }
 </style>
   <div class="section grey darken-4">
	<div class="container">
		<div class="row center"><h2 class="wh">Workshops</h2><p class="title-txt">MakerClub workshops help kids, teens, youth & people of all age groups to build things while learning new skills & exploring creativity. Get making now!</p></div>
		<div class="row box">
			 <div class="col m6 s12 center">
				<div class="title">Get started with maker education</div>
				<div class="content">
					<div class="img">
						<!--<img src="http://makerclub.org/app/uploads/2015/02/star_wars_r2_d2_in_iron_man_armor_mk_x.jpg" class="responsive-img" height="200px" width="50%"/> -->
					</div>
					<div class="schedule teal lighten-1">
						<table>
							<tr><td>Duration</td><td>6 Days</td></tr>
							<tr><td>Start Days</td><td>30th April 2015</td></tr>
							<tr><td>Ages</td><td> 9+</td></tr>
						</table>
						<p>Join Brighton based tinkerers MakerClub, as you learn to build your own robot buddy! We’ll be using the Arduino micro-controller …</p>
					</div>
					<div class="footer-button">
						<a class="btn" href="#">RESERVE YOUR PLACE</a>
					</div>
				</div>
			 </div>
			 
			 </div>
		</div>
	</div>
	<!-- second section -->
	<div class="section white">
		<div class="container">
			<div class="row center">
			<h2>Invite Us!</h2>
			 <h5>Host MakerClub's workshop at your location whether it be your school, college or backyard!</h5>
			 <a class="btn" href="#">Request for workshop</a>
			</div>
		</div>
	</div>
 </div>
  <?php

include("footer.php");

?>