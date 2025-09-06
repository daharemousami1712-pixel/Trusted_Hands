<?php
require('common/connection.php');
include('common/top_header_2.php');

$sql = "select * from category_tbl";
$res = mysqli_query($con, $sql);
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
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Some Info</span>Premium Services</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                            <h3 class="j-b mb-3">Search</h3>
                            <div class="widget-content">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label class="mb-2">I'm looking in ...</label>

                                        <select class="form-control jb_1">
                                            <option value="0">Location</option>
                                            <option value="">Category1</option>
                                            <option value="">Category2</option>
                                            <option value="">Category3</option>
                                            <option value="">Category4</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                        </div>
                        
                    

                    </div>
                    <div class="col-lg-8 job_info_left">
                        <!--/ Emply List -->
                         
                                        <?php
                                          $sql = "select * from worker_tbl where worker_category = '1' ";
                                          $res = mysqli_query($con, $sql);

                                          while($category = mysqli_fetch_assoc($res))
                                          {
                                            $cat = $row['worker_id'];
                                            echo"


                        <div class='emply-resume-list row mb-3'>
                            <div class='col-md-9 emply-info'>
                                <div class='emply-img'>
                                    <img src='images/worker/".$category['worker_photo']."' >
                                </div>
                                <div class='emply-resume-info'>
                                    <h4>".$category['worker_name']."</h4>
                                    <h5 class='mt-2'>".$category['worker_category_name']."</h5>
                                    <p><i class='fas fa-map-marker-alt'></i>".$category['worker_address']."/".$category['worker_city']."</p>
                                    <ul class='links_bottom_emp mt-2'>
                                        <li><i class='far fa-envelope'></i> <span class='icon_text'> ".$category['worker_email']."</span></li>
                                        <li><a href='#''><i class='fas fa-eye'></i> <span class='icon_text'>View full Job Description</span></a></li>
                                    </ul>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                            <div class='col-md-3 emp_btn text-right'>

                                        
                                <a href='worker_single.php?worker_id=$cat'>Read more</a>
                            </div>
                        </div>";
                        
                        }
                                      ?> 





                       
                        
                        
                        
                       
                    
                        <!--// Emply List3 -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//preocess-->
<!---728x90--->

<?php
include('footer.php');
?>