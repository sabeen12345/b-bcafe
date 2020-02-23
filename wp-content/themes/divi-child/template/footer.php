 <footer>
			    <div id="footer">
				   <div id="foot-one">
		             <h6>CONTACT US</h6>
			         <address><i class="fas fa-map-marker-alt text-warning2"></i> 55 Main St.<br>
			         Karachi,ON<br>
			         Pakistan.</address>
			         <p><i class="fas fa-mobile-alt text-warning2"></i> (416)555-5252</p>
			         <address><i class="fas fa-envelope text-warning2"></i> hello@b&bcafe.com</address>
		        </div>

		        <div id="foot-two">
		          <h6>LATEST POST</h6>
		          <p><i class="fas fa-address-card"></i> Made With Love In Cafe</p>
			      <p><i class="fas fa-align-left"></i> For booking and Reservations</p>
			      <p><i class="fas fa-address-card"></i> Workplace Cafe</p>
			      <p><i class="fas fa-address-card"></i> Latest Book Collection</p>
            	</div>
                
		        <div id="foot-three">
		         <h1 class="follow-1">FOLLOW US</h1>
				  <ul id="cons-1">
				  	<li class="icons"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square text-warning2"></i> Facebook</a></li>
				  	<li class="icons"><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter text-warning2"></i> Twitter</li>
				  	<li class="icons"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram text-warning2"></i> Instagram</li>
				  </ul>
		        </div>
            </footer>
    
            <div id="footer-bottom">
    	       <p>copyrigh©2019 books brew.All rights reserved.Privacy policy.Terms & Conditions Apply.</p>
            </div>
		</div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/template/slick-1.8.1/slick/slick.js" type="text/javascript" charset="utf-8"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

            <!-- form pop up-->


		   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>-->
            <script type="text/javascript">
            	    //slider home page//
					$('.slideshow').slick({
     					autoplay:true,
     					autoplayspeed:500,
     				    fade: true,
     		            cssEase: 'linear'
     				});

					 $('.btn-one').click(function(){
						console.log("hello");
					 });

					 $(document).ready(function(){
					 $(document).ready(function(){
					 $('.pageloader').fadeOut(1000,function(){ 
					 	$('.pageloader').remove();
					 	$('.overlay').css('visibility','visible');});
					 	$('input').val('');
			    		 });
			   		  });

					$('.btn-one').click(function(){
	                 var name = $('#name').val();
	                 console.log(name);

	                 var email = $('#email').val();
	                 console.log(email);

	                if (name == "") {
					$('#id').text("Empty!");
					$('input').val('');
				    }

				    if (email == "") {
					$('#mail').text("Empty!");
					$('input').val('');
				    }

				    if(name != "" && email != ""){
			          $.alert({
					  title: 'Your form has been submitted!',
  					  content: 'Thank You for contacting Us, We will get back to you',
						
					});
					$('input').val('');
					$('#mail').hide();
					$('#id').hide();
			      }
			});
            </script>
            <!-- accordion script-->
             <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script type="text/javascript">
           jquery( function() {
         jquery("#accordion").accordion();
         } );

         $(document).ready(function(){
		$(document).ready(function(){
		$('.pageloader').fadeOut(1000,function(){ 
			$('.pageloader').remove();
			$('.overlay').css('visibility','visible');});
			});
			});

    </body>
</html>