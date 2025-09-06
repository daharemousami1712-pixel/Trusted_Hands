<?php
require('common/connection.php');
include('common/top_header.php'); 

  $sql = "select * from city_tbl";
  $city = mysqli_query($con, $sql);


  $sql = "select * from category_tbl";
  $category = mysqli_query($con, $sql);

$sql = "select * from worker_tbl";
$workers = mysqli_query($con, $sql);

// showing workers
$sql2 = "select * from worker_tbl w inner join category_tbl c on c.category_id = w.worker_category where worker_category = 1";
$plumbers = mysqli_query($con, $sql2);

$sql2 = "select * from worker_tbl w inner join category_tbl c on c.category_id = w.worker_category where worker_category = 2";
$carpenters = mysqli_query($con, $sql2);

  ?>

<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg","images/3.jpg", "images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <?php include('common/header.php') ?>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Find the Right Service</span> .
                    <span>Right Now.</span>
                </h3>
                <p>Your Problems starts and ends with us.</p>

                <form action="#" method="post" class="ban-form row" >
                    <div class="col-md-4 banf">
                        <select class="form-control" id="country12" name="city">
                            <option>--select city--</option>
                                         <?php 

                                            while($row = mysqli_fetch_assoc($city))
                                            {
                                              echo " <option>".$row['city_name']."</option>";
                                            }  
                                         ?>
                                
                        </select>
                    </div>
                    <div class="col-md-4 banf">
                        <select id="country13" class="form-control" name="category">
                           <option>--select category--</option>
                                         <?php 

                                            while($cat = mysqli_fetch_assoc($category))
                                            {
                                              echo " <option>".$cat['category_name']."</option>";
                                            }  
                                         ?>
                        </select>

                    </div>
                    <div class="col-md-3 banf">
                        <button class="btn1" type="submit">FIND JOB
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>


            </div>


            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our Service</span>Popular Categories</h3>
                <div class="row populor_category_grids mt-5">

                  <?php
                  $sql = "select * from category_tbl where category_status='1' order by category_order ASC";
                  $res = mysqli_query($con, $sql);

                  while($category = mysqli_fetch_assoc($res)){
                    echo"<div class='col-md-3 category_grid'>
                        <div class='view view-tenth'>
                            <div class='category_text_box'>
                                <img src='images/category/".$category['category_img']."' style='width: 80px; height: 80px; margin-top: 40px; margin-left: 90px;'>
                                <h3> ".$category['category_name']."</h3>
                                <p>(Our Best Services)</p>
                            </div>
                            <div class='mask'>
                                <a href='#'>
                                    <img src='images/category/".$category['category_img']."' class='' alt=''>
                                </a>
                            </div>
                        </div>
                    </div>";
                   }
                   ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->

<!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Find the Right Service . Right Now. </span>Your Problems Starts and Ends with Us.</h3>
                    <p></p>
                    <div class="resume">
                        <a href="index.php" data-toggle="modal" data-target="#exampleModalCenter3">
                            <i class="far fa-user"></i> Trusted Hands</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->    

<!-- plans -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
            <!---728x90--->
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Our Workers</span>Skilled Workers</h3>
                    <!---728x90--->
                <div class="card-deck text-center row mt-5">
                     <?php                                          
                     while($worker = mysqli_fetch_assoc($workers))
                        {
                                            echo"


                    <div class='price-info-grid col-lg-3'>
                        <div class='price-inner'>
                            <div class='price-header'>
                                <h4>".$worker['worker_name']."</h4>
                            </div>
                            <div class='price-body'>
                                <h5 class='pricing-title'>
                                    <span class='dolor'>$</span> ".$worker['worker_charge']."

                                </h5>

                                <ul class='list-unstyled mt-3 mb-4'>
                                    <li class='py-2 border-bottom'>".$worker['worker_email']."</li>
                                    <li class='py-2 border-bottom'>".$worker['skills']."</li>
                                    <li class='py-2 border-bottom'>".$worker['experience']."</li>
                                    <li class='py-2 border-bottom'>".$worker['worker_city']."</li>
                                    <li class='py-2'>".$worker['worker_state']."</li>
                                </ul>
                                <a href='#' class='btn btn-block btn-outline-primary py-2' data-toggle='modal' data-target='#exampleModalCenter2'>
                                    <i class='far fa-user'></i>Read More</a>
                            </div>
                        </div>
                    </div>";
                }
                ?>

                    
                    
                    
                </div>
            </div>
        </div>
    </section>
    <!-- //plans -->

    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Find the Right Service . Right Now. </span>Your Problems Starts and Ends with Us.</h3>
                    <p></p>
                    <div class="resume">
                        <a href="index.php" data-toggle="modal" data-target="#exampleModalCenter3">
                            <i class="far fa-user"></i> Trusted Hands</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->    

   

   
    <!--Workers-->
    <section class="clents-slide py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> What Clients Say?</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <!-- showing Plumbers -->

                        <div class="carousel-item active">
                            <div class="row">
                                 <?php                                          
                                    while($plumber = mysqli_fetch_assoc($plumbers))
                                        {
                                            echo"

                                <div class='col-md-6  testi-main'>
                                    <div class='testi-grids row'>
                                        <div class='col-md-9 col-sm-9 col-xs-9 clients-info-text'>
                                            <h6>".$plumber['worker_name']."</h6>
                                            <p>".$plumber['category_name']."</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class='col-md-3 col-sm-3 col-xs-3 img-testi'>
                                            <img class='' src='images/worker/".$plumber['worker_photo']."' alt=''>
                                        </div>

                                    </div>
                                </div>";
                            }
                            ?>                 
                            </div>
                        </div>
                         <!-- //showing Plumbers -->


                         <!-- showing carpenters -->

                        <div class='carousel-item'>
                            <div class='row'>
                                 <?php                                          
                                    while($carpenter = mysqli_fetch_assoc($carpenters))
                                        {
                                            echo"
                                <div class='col-md-6  testi-main'>
                                    <div class='testi-grids row'>
                                        <div class='col-md-9 col-sm-9 col-xs-9 clients-info-text'>
                                            <h6>".$carpenter['worker_name']."</h6>
                                            <p>".$carpenter['category_name']."</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                        <div class='col-md-3 col-sm-3 col-xs-3 img-testi'>
                                            <img class='' src='images/worker/".$carpenter['worker_photo']."' alt=''>
                                        </div>

                                    </div>
                                </div>";
                            }
                            ?>                                        
                            </div>
                        </div>
                        <!-- //showing carpenters -->

                    </div>

                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-long-arrow-alt-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>

                    </a>

                </div>
            </div>
        </div>
    </section>
    <!--//Workers-->


    

    
<?php
include('footer.php');
?>
    