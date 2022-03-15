<?php include('session_check.php'); ?>
<!DOCTYPE html>
<html>
  <head>
  <title>________________</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  

<link rel="icon" href="//_____________">
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"-->
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  </head>

  <body>
    <div class="app header-default side-nav-light">
      <div class="layout">
        <!-- Header START -->
        <?php  include('inc/header.php');?>
        <!-- Header END -->

        <!-- Side Nav START -->
        <?php  include('inc/sidebar.php');?>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
              <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                  <h3 class="page-title">HOME PAGE</h3>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="dashboard.php"></a></li>
                    <li class="active">home-page</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <!-- Title Count Start -->
              <div class="card-group">

                <?php 
                      $menu_array = array(
                        "DASHBOARD 1" => "dashboard.php",
                        "DASHBOARD 2" => 'dashboard.php',
                        "DASHBOARD 3" => 'dashboard.php',
                      
                      );
                      $i= 0 ;	
                      $corlAry = array('primary','success','danger','warning','primary');
                      foreach( $menu_array as  $key => $val ){
                        $i++;
                       if($i==5){
                         $i=0;
                         // echo '</div>  <div class="card-group">';
                       }
                        echo '
                        
                        <div class="card mr-5 shadow">
                        <div class="card-body">
                          <div class="row">
                            <a href="'.$val.'" class="w-100">
                            <div class="col-12">
                              <div class="text-center">
                                <div>
                                  <div class="icon"><i class="lni-display"></i></div>
                                   <p class="text-muted">'.$key.'</p>
                                </div>
                                <div class="ml-auto">
                                   <h2 class="counter text-'.$corlAry[$i].'"></h2>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="progress">
                                 <div class="progress-bar bg-'.$corlAry[$i].'" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </a>
                      </div>
                        
                        ';


                      }
                ?>

              
                
                
               
              </div>
              <!-- Title Count End -->
            
            </div>
          </div>
          <!-- Content Wrapper END -->

          <!-- Footer START -->
         <?php include('inc/footer.php'); ?>
          <!-- Footer END -->

        </div>
        <!-- Page Container END -->
      </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="assets/js/main.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/js/dashborad1.js"></script>

  </body>
</html>