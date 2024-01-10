<section class="ftco-gallery" >
    	<div class="container" id="trainer">
			<div class="heading-section text-center ftco-animate">
			  <h2 class="mb-4">Our Trainers</h2>
			  
			</div>

			
    		<div class="row">
			<?php 
			$query="SELECT * FROM `trainers`";
			$result=mysqli_query($connect,$query);
			while($row=mysqli_fetch_assoc($result)):
				$trainer_id=$row['trainer_id'];
				$name=$row['name'];
				$info=substr($row['info'],0,40);
				$image=$row['image'];

			
			?>
				<div class="col-sm-4 col-md-4">
					<img src="<?=$image?>" width='300'>
					<p class="m-md-4 text-xl-left"><?=$name?></p>
					<p class="m-md-4 text-info"><?=$info?></p>
					<a class="btn btn-primary" href="trainer.php?t_id=<?=$trainer_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
					<?php endwhile;?>
			</div>
			
    	</div>
    </section>