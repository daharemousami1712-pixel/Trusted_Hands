<?php
require('common/connection.php');
include('common/top_header_2.php');

if(!empty($_GET['worker_id'])){
    $wid = $_GET['worker_id'];
    $sql2 = "select * from worker_tbl w inner join category_tbl c on c.category_id = w.worker_category where worker_id='$wid'";
    $workers = mysqli_query($con, $sql2);
    $data = mysqli_fetch_assoc($workers);
  }else{
    header('location:index.php');
  }

 
?>
<body>
    <!-- banner-inner -->
    <div id="demo-1" class="page-content">
        <div class="dotts">
            <?php include('common/header_2.php'); ?>
                                   
        </div>
    </div>
    <ol class="breadcrumb justify-content-left">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <div class="single-user-candidate" style="margin-top: -80px;">
                    <div class="user-detail-info text-center">
                        <div class="user-pic">
                            
                            <?php echo"
                            <img src='images/worker/".$data['worker_photo']." 'class='rounded-circle'  >"; 
                             ?>
                        </div>
                        <div class="user-content-info emply-resume-info text-center mt-4">
                            <h4>
                                <a href="#"><?php echo $data['worker_name'] ?></a>
                            </h4>
                            
                            <p>
                                <i class="fas fa-map-marker-alt"></i> <?php echo $data['worker_address'] ?>/ <?php echo $data['worker_city'] ?></p>
                            <ul class="links_bottom_emp mt-2">
                                <li>
                                    <a href="candidate_single.html">
                                        <i class="far fa-envelope"></i>
                                        <span class="icon_text"> <?php echo $data['worker_email'] ?></span>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="skills-info my-4">
                                <span class="mx-3"><?php echo $data['category_name'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row qualification-details mt-5">
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Charges</h4>
                            <p> <?php echo $data['worker_charge'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-transgender"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Gender</h4>
                            <p> <?php echo $data['worker_gender'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Contact Number</h4>
                            <p> <?php echo $data['worker_phonenumber'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-map-pin"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Pincode</h4>
                            <p> <?php echo $data['worker_pincode'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--row -->
            
                <!--/education -->
                <div class="candidate-history-info mt-5">
                    <h5 class="j-b mb-5">Education</h5>
                    
                    <div class="candidate-story-grid pl-3 mt-5">
                        <div class="candidate-story-det-icon text-center">
                            <i class="fas fa-graduation-cap "></i>
                        </div>
                        <div class="candidate-story-det-info">
                            <!-- <h4>College</h4>
                            <h6 class="my-2">2008 - 2012</h6> -->
                            <p> <?php echo $data['education'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--//skills -->
                    <div class="candidate-history-info mt-5">
                    <h5 class="j-b mb-5">Skills</h5>
                    
                    <div class="candidate-story-grid pl-3 mt-5">
                        <div class="candidate-story-det-icon text-center">
                            <i class="fa fa-cog fa-4x"></i>
                        </div>
                        <div class="candidate-story-det-info">
                            
                            <p> <?php echo $data['skills'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <!--//skills-->
                <!---experience-->
                <div class="candidate-history-info mt-5">
                    <h5 class="j-b mb-5">Experience</h5>

                    <div class="candidate-story-grid pl-3">
                        <div class="candidate-story-det-icon text-center">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="candidate-story-det-info">
                            <!-- <h4>Junior Interface Designer</h4>
                            <h6 class="my-2">2012 - 2015</h6> -->
                            <p> <?php echo $data['experience'] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                <!--//experience-->
               
                <div class="candidate-btn-in d-flex text-right mt-5">
                    <div class="can-btn">
                        <a href="#">
                            <i class="fas fa-long-arrow-alt-down"></i> Book Now</a>
                    </div>
                    <!-- <div class="can-btn">
                        <a href="contact.html">
                            <i class="far fa-user"></i> Contact</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
	<!---728x90--->

<?php
include('footer.php');
?>
    