<?php 

include('header.php');

?>
 
   <div class="section white">
	<div class="container">
		<div class="row ">
			 <h2>Join others at events around the country.</h2>
			 <a class="waves-effect waves-light btn-large" style="text-transform:normal"><i class="mdi-action-search left"></i>Find an event</a>
			  <a class="waves-effect waves-light btn-large"><i class="mdi-content-add left"></i>Add an event</a>
		 
		</div>
	</div>
 </div>
 <div class="row"> 
	<div class="container"><p class="right">Comming Soon...</p></div>
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
            
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script> 
  <script>
  var a=0;
$(document).ready(function() {
    $('select').material_select();
	 $('.button-collapse').sideNav();
	 
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