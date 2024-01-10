
<?php
if(isset($_POST['send']))
{
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $massage=$_POST['massage'];

    $query="INSERT INTO `contact` (`first_name`, `last_name`, `phone`, `email`, `massage`)";
    $query .= "VALUES ('$first_name', '$last_name', $phone, '$email', '$massage' )";
    $result=mysqli_query($connect,$query);
}



?>
<section class="ftco-appointment" id="contact">
		<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contact US</h3>
	    			<form action=""  method="POST" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="FirstName" name="firstname">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name" name="lastname">
		    				</div>
						</div>
						<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Phone" name="phone">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="email" class="form-control" placeholder="Email" name="email">
		    				</div>
	    				</div>
	    			
	    				<div class="d-md-flex">
	    					<div class="form-group">
                            <input type="massage" class="form-control" placeholder="Massage" name="massage">
							</div>
							<div class="form-group ml-md-4">
								<input type="submit"  name='send'value="Send" class="btn btn-primary py-3 px-4">
							</div>
	    				</div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>