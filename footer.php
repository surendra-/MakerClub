 
 <footer class="page-footer  indigo darken-4" style="margin-top:0px;">
          <div class="container">
            <div class="row" style="margin-bottom:0px;">
              <div class="col m3 s12 footer-nav">
                  <a class="grey-text text-lighten-3" href="#!">Explore </a>
                  <a class="grey-text text-lighten-3" href="#!">Events </a>
                  <a class="grey-text text-lighten-3" href="#!">Learn </a>
                  <a class="grey-text text-lighten-3" href="#!">Collab House</a>
              </div>
              <div class="col m3 s12  footer-nav">
                  <a class="grey-text text-lighten-3" href="#!">Facebook</a>
                  <a class="grey-text text-lighten-3" href="#!">Twitter</a>
                  <a class="grey-text text-lighten-3" href="#!">Blog</a>
                  <a class="grey-text text-lighten-3" href="#!">Contact</a>
              </div>
			  <div class="col m3 s12  footer-nav">
                  <a class="grey-text text-lighten-3" href="#!">Donate</a>
                  <a class="grey-text text-lighten-3" href="#!">Careers</a>
                  <a class="grey-text text-lighten-3" href="#!">Privacy</a>
                  <a class="grey-text text-lighten-3" href="#!">Legal</a>
              </div>
			   <div class="col s12 m3">
				<a href="index.php" class="page-title"><h1 style="font-family:oswald;color:#fff;">MakerClub<span class="beta">BETA</span></h1></a>
				</div>
            </div>
          </div>
          
        </footer>
<!-- Modal Structure -->
  <div id="modal1" class="modal" style="height:auto;">
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
  var a=0;b=0;
$(document).ready(function() {
    $('select').material_select();
	 $('.button-collapse').sideNav();
	   $('.modal-trigger').leanModal();
	 
	 $('.collab1').click(function(){
		if(a==0){
			a=1;
			$('.collab1').addClass('indigo');
			$('.hide1').removeClass('hide').addClass('show');
		}else{
			a=0;
			$('.collab1').removeClass('indigo');
			$('.hide1').removeClass('show').addClass('hide');
		}
	});
	
	$('.learn1').click(function(){
		if(b==0){
			b=1;
			$('.learn1').addClass('indigo');
			$('.hide2').removeClass('hide').addClass('show');
		}else{
			b=0;
			$('.learn1').removeClass('indigo');
			$('.hide2').removeClass('show').addClass('hide');
		}
	});
	
		
  });
	</script>
	</body>
</html>