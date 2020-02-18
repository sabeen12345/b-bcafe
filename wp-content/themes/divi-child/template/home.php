<?php
/* 
Template Name: Home */
include("header.php");
?>

		<section class="slideshow">
		  <div>
			<img src="images/slide-3.jpg">
		  </div>

		  <div>
			<img src="images/slide-2.jpg">
		  </div>

		  <div>
			<img src="images/slide-1.jpg">
		  </div>

		  <div>
			<img src="images/slide-5.jpg">
		  </div>

		  <div>
			<img src="images/slide-4.jpg">
		  </div>
       </section>

		<section>
			<div id="menu">
                <h4 style="color: #973C13; margin-top: 3%; margin-bottom: 3%; font-size: 45px;">Our Bookaholic Menu </h4>
				<div id="menu-content">
					<div class="book-menu">
						<h5 style="margin-top: 5%;  margin-bottom:25px;">Genres</h5>
						<button class="btn"><a href="books.html"target="_blank" class="btn">Choose Books</a></button>
					</div>

                    <div class="coffee-menu">
						<h5 style="margin-top: 5%; margin-bottom:25px">Coffee</h5>
						<button class="btn"><a href="menu.html" target="_blank" class="btn">Meals</a></button>
					</div>
				</div>
			</div>


			<div id="content-two">
				<p class="pargraph">Need to finish some<br> paperworks?<br></p>
				<p id="paragraph-one">visit our branches near you!</p>
			</div>

			<div class="location">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14478.894012340434!2d67.05614467517583!3d24.873291378983794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33eed775959a5%3A0x653a6ae6b3f6a391!2sGenetech+Solutions!5e0!3m2!1sen!2s!4v1563251790502!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="loc-image">
					<img src="images/location.jpg" alt="building-view" height="100%" width="100%">
				</div>
				</div>

				<div id="form">
                    <div id="form-text">
						<h3 id ="contact-heading"> CONTACT US </h3>
					    <div id="first-input-text">
						   <input type="text"  placeholder="  Name" id="name">
						   <span id="id"></span>
					    </div>

                        <div id="second-input-text">
						    <input type="email" placeholder="   Email" id="email">
						    <span id="mail"></span>
					    </div>

					    <div id="third-input-text">
						   <input type="text"  placeholder="     message" id="message">
						   <span id="message"></span>
						</div>

					    <button class="btn-one" type="submit"> Submit </button>
                    </div>
				</div>

			<!-- discount pop up -->
			<div id="discount">
				<h5>20% Discount<br>
				for students!<br>
				Book your cubicles NOW!</h5>
			</div>
            </section>
            
            <!--footer-->
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
