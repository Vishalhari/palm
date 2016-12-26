<?php include_once('header.php'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
		<div class="slide">
		<!-- <img src="images/sd13.jpg"> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.456473331214!2d76.27515095061156!3d9.979100376096195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d56d1d2abb3%3A0xd3ebda0798040e26!2sBroadway%2C+Marine+Drive%2C+Ernakulam%2C+Kerala+682031!5e0!3m2!1sen!2sin!4v1482732798048" width="1580" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
				
		</div>
	</div>

	<div class="row">
		 <div class="col-md-6">
          <!-- <div class="well">2</div> -->
          <form>
          <h2>Contact form</h2>
          	<div class="form-group"> <!-- Name field !-->
				<label for="name" class="control-label">Name</label>
				<input type="text" class="form-control" id="name" name="email_name" placeholder="your name">
			</div>
			<div class="form-group"> <!-- Email field !-->
				<label for="email_id" class="control-label">Email</label>
				<input type="email" class="form-control" id="email_id" name="email_name" placeholder="name@domain.com">
			</div>

			<div class="form-group"> <!-- Message input !-->
		<label class="control-label " for="message_id">Message</label>
		<textarea class="form-control" id="message_id" name="message" rows="5"></textarea>
	    </div>

			
			<div class="form-group"> <!-- Submit button !-->
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>	
		  </form>
            </div>
            <div class="col-md-6">
             <!-- <div class="well">3</div> -->
             <ul class="contact-details list-unstyle">
             	<li>

             	<i class="fa fa-location-arrow" aria-hidden="true"></i>
             	<h5>Palm Tree Dry fruits</h5>
             	<p>PO Box 117281, Dubai, UAE</p>
             		<!-- <span class="icon-location-arrow _icon"></span> -->
             	</li>

             	<li>
             		<i class="fa fa-map-marker" aria-hidden="true"></i>
             		<h5>Office Location</h5>
             		<p>Office 901B, Business Central Towers,Media City</p>
             	</li>

             	<li>
             		<i class="fa fa-phone" aria-hidden="true"></i>
             		<h5>Contact No</h5>
             		<p>+971 4 453 1012</p>
             	</li>

             	<li>
             		<i class="fa fa-envelope" aria-hidden="true"></i>
             		<p>palmtree@gmail.com</p>
             	</li>

             	<li>
             		<i class="fa fa-globe" aria-hidden="true"></i>
             		<p>www.palmtree.com</p>
             	</li>
             </ul>
            </div>
	</div>

</div>


<?php include_once('footer.php'); ?>