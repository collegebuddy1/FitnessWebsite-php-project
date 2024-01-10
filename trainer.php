<?php include "includes/header.php"; ?>


<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.html">FITNESS<small>Home</small></a>
	      
	         
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          
	          <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="All_clasess.php" class="nav-link">Classes</a></li>
             <li class="nav-item"><a href="index.php?logout='1'" class="nav-link">Log out</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>

<!-- END nav -->

<!-- Home- slider  -->
<?php include "includes/home-slider.php"; ?>

<section class="ftco-gallery">
    <div class="container" id="trainer">
        <div class="heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Trainers</h2>

            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-ms-6 m-md-4">

                    <?php

                    $t_id = $_GET['t_id'];
                    $sql = "SELECT * FROM `trainers` WHERE `trainer_id`= '$t_id'";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_assoc($result)) :
                        $trainer_id = $row['trainer_id'];
                        $name = $row['name'];
                        $info = $row['info'];
                        $image = $row['image'];


                    ?>


                        <!-- Preview Image -->
                        <p class="lead font-weight-bold"><?= $name ?></p>
                        <img class="img-responsive" width="50%" src="<?= $image ?>" alt="">
                        <hr>

                        
                        <p class="lead"><?= $info ?></p>
                        <a class="btn btn-primary btn btn-group" href="home.php">Back<span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                    <?php endwhile; ?>
               
            </div>
        </div>
    </div>
</section>



<!-- contact us -->

<?php include "includes/footer.php" ?>