<?php
require('common/connection.php');
include('common/top_header_2.php');

$sql = "select * from category_tbl";
$res = mysqli_query($con, $sql);

 $sql = "select * from city_tbl";
$result = mysqli_query($con, $sql);

 $sql2 = "select * from state_tbl";
$state = mysqli_query($con, $sql2);

if(!empty($_GET['category'])){
    $catg = $_GET['category'];
    $sql2 = "select * from worker_tbl w inner join category_tbl c on c.category_id = w.worker_category where worker_category='$catg'";
    $workers = mysqli_query($con, $sql2);
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
                <h3 class="tittle text-center mb-lg-4 mb-3" style="margin-top: -80px;">
                    <span>Some Info</span>Premium Services</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                            <h3 class="j-b mb-3">Search</h3>
                            <div class="widget-content">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label class="mb-2">I'm looking at ...</label>

                                        <select name="state" class="form-control jb_1">
                                             <option>--select state--</option>
                                             <?php 

                                                while($row = mysqli_fetch_assoc($state))
                                                {
                                                  echo " <option>".$row['state_name']."</option>";
                                                }  
                                            ?>
                                            </select>
                                            <br>
                                             <label class="mb-2">I'm looking in ...</label>


                                            <select name="city" class="form-control jb_1">
                                             <option>--select city--</option>
                                             <?php 

                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                  echo " <option>".$row['city_name']."</option>";
                                                }  
                                            ?>
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
                                          

                                          while($worker = mysqli_fetch_assoc($workers))
                                          {
                                            $wid = $worker["worker_id"];
                                         //   print_r($worker);
                                            echo"


                        <div class='emply-resume-list row mb-3'>
                            <div class='col-md-9 emply-info'>
                                <div class='emply-img'>
                                    <img src='images/worker/".$worker['worker_photo']."' >
                                </div>
                                <div class='emply-resume-info'>
                                    <h4>".$worker['worker_name']."</h4>
                                    <h5 class='mt-2'>".$worker['category_name']."</h5>
                                    <p><i class='fas fa-map-marker-alt'></i>".$worker['worker_address']."/".$worker['worker_city']."</p>
                                    <ul class='links_bottom_emp mt-2'>
                                        <li><i class='far fa-envelope'></i> <span class='icon_text'> ".$worker['worker_email']."</span></li>
                                        <li><a href='#''><i class='fas fa-eye'></i> <span class='icon_text'>View full Job Description</span></a></li>
                                    </ul>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                            <div class='col-md-3 emp_btn text-right'>

                                         
                                <a href='worker_single.php?worker_id=".$wid."'>Read more</a>
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