
<section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>01093345876</h3>
	    						<p style="color: #007E66;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p style="color: #007E66;">	Elkhalifa St. , kafr El-Shiekh</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p style="color: #007E66;">8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
				</div>
				<div class="book1">
	    			
	    			<form action="" class="appointment-form">
					<h2>Book a Class</h2>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="firstname" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
							<input type="text" name="lastname" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">

		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<input type="text" class="form-control" placeholder="address" name="address">
	            		</div>
							</div>

							<div class="form-group ml-md-4">
		    				<input type="text" class="form-control" placeholder="Phone" name="phone">	
							</div>
							
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
									
							<select class="form-control select_class" name="classname">
							<option>Choose Class</option>
							<?php
							$sql = "SELECT * FROM `classes`";
							$result = mysqli_query($connect, $sql);
	
							while ($row = mysqli_fetch_assoc($result)) :
								$class_id = $row['class_id'];
								$title = $row['name'];
								$image = $row['image'];
								$time_from = $row['time_from'];
								$days = $row['days'];
								$des = $row['description'];
								$price = $row['price'];
								$trainer_id = $row['class_trainer_id'];
	
							?>
								<option name="<?=$class_id?>" style="color: black;"><?=$title;?></option>
								<?php endwhile;?>
							</select>
							
	            		</div>
		    				</div>
		    				
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
	    		
    		</div> 
    	</div>
    </section>

  

<section class="ftco-about d-md-flex">
    	<div id= 'about' class="one img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	  			</div>
  			</div>
    	</div>
    </section>
<!-- Services -->
    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="icon-thumb_up"></span>
				  
              </div>
              <div class="media-body">
                <h3 class="heading">Lorem, ipsum dolor.</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="icon-heart"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Lorem, ipsum dolor.</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="icon-fitness_center"></span></div>
              <div class="media-body">
                <h3 class="heading">Lorem, ipsum dolor.</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section> 
