 
 <footer class="page-footer  indigo darken-4" style="margin-top:0px;">
          <div class="container">
            <div class="row" style="margin-bottom:0px;">
              <div class="col m3 s12 footer-nav">
                  <a class="grey-text text-lighten-3" href="https://webmaker.org/search?type=all&q=makerclub">Explore </a>
                  <a class="grey-text text-lighten-3" href="event.php">Events </a>
                  <a class="grey-text text-lighten-3" href="maker-skills.php">Learn </a>
                  <a class="grey-text text-lighten-3" href="space.php">Collab House</a>
              </div>
              <div class="col m3 s12  footer-nav">
                  <a class="grey-text text-lighten-3" href="https://www.facebook.com/MakerClubIndia">Facebook</a>
                  <a class="grey-text text-lighten-3" href="https://twitter.com/makerclubIN">Twitter</a>
                  <a class="grey-text text-lighten-3" href="https://www.blog.makerclub.in">Blog</a>
				   <a class="white-text" onclick="Materialize.toast('<span>hello@makerclub.in</span><a class=&quot;btn-flat yellow-text&quot;>+919985258603<a>', 5000)">Contact</a>
				  <!--<a class="tooltipped white-text" data-position="top" data-delay="50" data-tooltip="hello@mackerclub.in ">Contact</a>-->
                  <!--<a class="grey-text text-lighten-3" href="https://mail.google.com/mail/?view=cm&fs=1&to=hello@makerclub.in" target="_blank">Contact</a>-->
              </div>
			  <div class="col m3 s12  footer-nav">
					<a class="grey-text text-lighten-3" href="index.php#values">About</a>
                  <a class="grey-text text-lighten-3" href="#!">Donate</a>
                  <a class="grey-text text-lighten-3" href="#!">Careers</a>
                  <a class="grey-text text-lighten-3" href="#!">Legal </a>
              </div>
			   <div class="col s12 m3">
				<a href="index.php" class="page-title"><h1 style="font-family:oswald;color:#fff;">MakerClub<span class="beta">BETA</span></h1></a>
				</div>
            </div>
          </div>
          
        </footer>
<!-- Registration Modal Structure -->
  <div id="modal1" class="modal" style="height:auto;">
    <div class="modal-content">
      <div class="row">
	  <form method="post" action="handler/registration.php" id="regForm" >
		<div class="col s12 m12">
		 <div class="input-field col s12">
		  <i class="mdi-action-account-circle prefix"></i>
          <input id="name" name="name" type="text" class="validate">
          <label for="name"> Name</label>
		 </div>
		<div class="input-field col s12">
		  <i class="mdi-maps-local-post-office prefix"></i>
          <input id="email" name="email" type="text" class="validate">
          <label for="email"> Email</label>
		 </div>
		 <div class="input-field col s12">
		  <i class="mdi-action-lock prefix"></i>
          <input id="password1" name="password1" type="password" class="validate">
          <label for="password1"> Password</label>
		 </div>
		 <div class="input-field col s12">
		  <i class="mdi-action-lock prefix"></i>
          <input id="password2" name="password2" type="password" class="validate">
          <label for="password2"> Confirm Password</label>
		 </div>
		 <div class="col s12">
			<input type="checkbox" name="terms" class="filled-in" id="filled-in-box1" />
			<label class="check" for="filled-in-box1">I agree to MakerClub's Terms and Privacy Policy</label>
		 </div>
		<div class="col s12">
			<input type="checkbox" name="newsletter" value="1" id="filled-in-box2" class="filled-in" />
			<label class="check" for="filled-in-box2">Send me email updates about MakerClub and other Collab House projects</label>
		</div>
		<div class="col s12">
			<br />
			<input type="submit" name="singup" class="btn" value="Join" />
		</div>
		</div>
		</form>
	  </div>
    </div>
  </div>
  
  <!-- LOGIN FORM MODAL STRUCTURE -->
  
  <div id="modal2" class="modal" style="height:auto;">
    <div class="modal-content">
      <div class="row">
	  <form method="post" action="handler/login.php" id="loginForm" >
		<div class="col s12 m12">
		<div class="input-field col s12">
		  <i class="mdi-maps-local-post-office prefix"></i>
          <input id="email" name="email" type="text" class="validate">
          <label for="email"> Email</label>
		 </div>
		 <div class="input-field col s12">
		  <i class="mdi-action-lock prefix"></i>
          <input id="password" name="password" type="password" class="validate">
          <label for="password"> Password</label>
		 </div>
		<div class="col s12">
			<br />
			<input type="submit" name="singup" class="btn" value="Login" />
		</div>
		</div>
		</form>
	  </div>
    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
<script src="js/materialize.min.js"></script> 
<script src="js/validate.js"></script> 
 <script>
  var a=0;b=0;
$(document).ready(function() {
    $('select').material_select();
	 $('.button-collapse').sideNav();
	   $('.modal-trigger').leanModal();
	 
	 $('.collab1').click(function(){
		if(a==0){
			a=1;
			$('.learn1').removeClass('indigo');
			$('.hide2').removeClass('show').addClass('hide');
			$('.collab1').addClass('indigo');
			$('.hide1').removeClass('hide').addClass('show');
			b=0;
		}else{
			a=0;
			$('.collab1').removeClass('indigo');
			$('.hide1').removeClass('show').addClass('hide');
		}
	});
	
	$('.learn1').click(function(){
		if(b==0){
			b=1;
			$('.collab1').removeClass('indigo');
			$('.hide1').removeClass('show').addClass('hide');
			$('.learn1').addClass('indigo');
			$('.hide2').removeClass('hide').addClass('show');
			a=0;
		}else{
			b=0;
			$('.learn1').removeClass('indigo');
			$('.hide2').removeClass('show').addClass('hide');
		}
	});
	  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
	
	//FORM VALIDATION SCRIPT
	$('#regForm').validate({
		rules : {
				name : {
					required : true
				},
				email:{
					required:true,
					email:true
				},
				password1:{
					required:true,
					minlength:6,
				},
				password2:{
					required:true,
					minlength:6,
					equalTo : password1
				}
									
		}
	});
  });
	</script>
	</body>
</html>