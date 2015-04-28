<?php 

include('header.php');

?>
 <div class="section light-blue accent-4">
	<div class="container">
		<div class="row">
		<div class="col m4 s12">
			<br /><br />
			<div class="row">
				<div class="col s6 m6"><img class="responsive-img" src="images/printer.png" /></div>
				<div class="col s6 m6"><img class="responsive-img" src="images/robot.png" /></div>
			</div>
			<div class="row">
				<div class="col s6 m6"><img class="responsive-img" src="images/electronic.png" /></div>
				<div class="col s6 m6"><img class="responsive-img" src="images/desktop.png" /></div>
				
			</div>
		</div>
		<div class="col m8 s12">
		<div class="right" style="color:#fff;font-family:'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif" ><h2>Make your own Creation and Internet of Things </h2><p style="font-size:21px;">MakerClub will help you build things while learning new skills.</p></div>
		 <button class="btn waves-effect waves-light  yellow" type="submit" name="action" style="color:#000">Register Now
		</button>
		</div>
		</div>
		<br />
	</div>
 </div>

 <div class="section grey lighten-3">
	<div class="container">
		<div class="row center">
			<h4>OUR VALUES</h4>
			<p>MakerClub helps people across India become informed creators of things they love and excel in their creativity</p>
		</div>
		<div class="row">
			<div class="col m8 s12">
				<h5><i class="mdi-action-account-child left"></i>Community</h5>
				<p>MakerClub is a community of makers, who share , learn & make things.</p>
				
				<h5><i class="mdi-action-event left"></i>Events</h5>
				<p>MakerClub is a community of makers, who share , learn & make things.
			</div>
			<div class="col m4 s12">
				<img class="responsive-img" src="earth.png" />
			</div>
		</div>
	</div>
 </div>
 <div class="section white">
	<div class="container">
		<div class="row center">
			<h4>MAKE RIGHT IN</h4>
			<p>Tagline of the title will go here </p>
		</div>
	</div>
 </div>
 
 <footer class="page-footer  indigo darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright  indigo darken-3">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
<!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer" style="overflow-y:scroll;">
    <div class="modal-content">
      <div class="row">
		<div class="col s12 m12">
		 <div class="input-field col s12">
		  <i class="mdi-action-account-circle prefix"></i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name"> Name</label>
		 </div>
		<div class="input-field col s12">
		  <i class="mdi-maps-local-post-office prefix"></i>
          <input id="email" type="text" class="validate">
          <label for="email"> Email</label>
		 </div>
		 <div class="input-field col s12">
		  <i class="mdi-action-lock prefix"></i>
          <input id="password1" type="text" class="validate">
          <label for="password1"> Password</label>
		 </div>
		 <div class="input-field col s12">
		  <i class="mdi-action-lock prefix"></i>
          <input id="password2" type="text" class="validate">
          <label for="password2"> Confirm Password</label>
		 </div>
		 <div class="col s12">
			<input type="checkbox" class="filled-in" id="filled-in-box1" checked="checked" />
			<label class="check" for="filled-in-box1">I agree to MakerClub's Terms and Privacy Policy</label>
		 </div>
		<div class="col s12">
			<input type="checkbox" class="filled-in" id="filled-in-box2" checked="checked" />
			<label class="check" for="filled-in-box2">Send me email updates about MakerClub and other Collab House projects</label>
		</div>
		</div>
	  </div>
    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script> 
  <script>
  var a=0;
$(document).ready(function() {
    $('select').material_select();
	 $('.button-collapse').sideNav();
	   $('.modal-trigger').leanModal();
	 $('.collab1').click(function(){
		if(a==0){
			a=1;
			$('.collab1').addClass('indigo');
			$('.hide').removeClass('hide').addClass('show');
		}else{
			a=0;
			$('.collab1').removeClass('indigo');
			$('.show').removeClass('show').addClass('hide');
		}
	});
	
		
  });
  
  
  
	</script>
	</body>
</html>