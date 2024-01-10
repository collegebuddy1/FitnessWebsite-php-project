<?php include "includes/header.php"; ?>


<!-- nav -->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="home.html">FITNESS<small>Home</small></a>


        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#classes" class="nav-link">Classes</a></li>
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
            <h2 class="mb-4">Our Clasess</h2>

            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-ms-6 m-md-4">

                    <!-- Preview class -->
                    <div class="row">
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
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="img-responsive" width="300" height="200" src="<?= $image ?>" alt="">
                                        <br> <br>
                                        <h6 class="card-title" style=" color:#01523a;font-weight:bold;"><?= $title ?></h6>
                                        <p class="card-text">
                                            <?php
                                            $sql_2 = "SELECT * FROM `trainers` WHERE  trainer_id = $trainer_id";
                                            $result_2 = mysqli_query($connect, $sql_2);
                                            while ($row = mysqli_fetch_assoc($result_2)) :
                                                $name = $row['name'];
                                            endwhile;
                                            ?>
                                         Cap: <span style="color: #007e66;font-weight:bold;"><?=$name?></span></p>
                                        <p class="card-text"><?= $des ?></p>
                                        <p> <b>IN</b> <span style="color: #007e66;font-weight:bold;"><?= $days ?></span> <b>AT</b> <span style="color:#007e66; font-weight:bold"><?= $time_from ?></span></p>
                                        <p class="card-text">Class Price: <span style="color: #007e66;font-weight:bold;"><?= $price ?></span> $</p>

                                        <a href="content.php?class_id=<?=$class_id?>" class="btn btn-primary">Book an Class</a>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    </div>
                    <a><i class="fa fa-back"></i></a>



                </div>
            </div>
        </div>
    </div>
</section>



<!-- contact us -->

<?php include "includes/footer.php" ?>