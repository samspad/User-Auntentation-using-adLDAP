<div class="header navbar">
          <div class="header-container">

              <b class=" d-lg-none"><img src="assets/img/logo.png" alt="" style="
                    height: 55px;
                    margin: 6px 34px;
                  "></b> 
            <div class="nav-logo mt-2">
              <a href="dashboard.php">
              
                <span class="logo ">
                 <img src="assets/img/logo.png" alt="" style="
                    height: 56px;
                    display: block;
                    margin: -3px 34px;
                    margin-left: 80px;
                  ">
                </span>
              </a>
            </div>
            <ul class="nav-right d-md-block d-xl-none ">
              <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                  <i class="lni-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                  <i class="lni-menu"></i>
                </a>
              </li>
            </ul>

            <ul class="nav-right header_right_panelLgout">
                    
              <li class="user-profile dropdown dropdown-animated scale-left pull-right" style="text-align: center;float: none;width: 100%;">
                <!--div class="dropdown-toggle" data-toggle="dropdown"-->
                <div class="">
                  <!--img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt="" -->
                  <span>  
                    <?= date("l - M j, Y");?> | Logged in as: 
                    <?php 
                    
                   echo  $user_name; 
                   
                   ?>  | </span>
                  <span class="ml-3">
                    <!--a href="logout.php" onclick="logout()"-->
                    <a href="logout.php" onclick="return confirm('do you want to logout ?')" >
                      <i class="lni lni-lock"></i>
                      <span> Logout</span>
                    </a>  
                  </span>
                </div>
                <ul class="dropdown-menu dropdown-md">
                 
                  <li>
                    <a href="profile.php">
                      <i class="lni-user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  
                  <li>
                    <a href="logout.php" onclick="return confirm('do you want to logout ?')">
                      <i class="lni-lock"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

         <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script src="assets/js/functions.js"></script>

    <script type="text/javascript">
      
      function logout()
      {
        var t =  confirm('do you want to logout ?')

        if(t)
        {
          window.location.href='logout.php';
        }
      }

      /* Replace search place holder of data table */
      $(document).ready(function ()
      {

        /* For DataTable */
        setTimeout(() => {
          $('input[type=search]').attr('placeholder','Search').parent().contents()[0].remove()
          jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
         
        }, 900);

        setTimeout(() => {
          
          /* For heading breadscrumb */
          $('.breadcrumb').parent().removeClass('col-8');
        }, 200);
        
      });
    </script>

    <style>
      .dataTables_scroll
      {
      overflow:auto;
      }
    .dataTable{
        table-layout: auto !important;
        width: 100% !important;
        border-bottom: 1px;
    }
    .dataTables_wrapper{
        display: block  !important;
        width: 100%  !important;
        overflow-x: auto  !important;

    }
    /* header responsive css */
    .header_right_panelLgout{
      padding-top:20px;
    }
    @media only screen and (max-width: 659px){
      .header_right_panelLgout{
      position: absolute !important;
      top: 63px;
      background: #fff;
      width: 100%;
      padding-top:0 !important;
      padding-bottom: 1px;
      z-index: 50;
      }
    }

    @media only screen and (max-width: 428px){
      .header_right_panelLgout{
        font-size : 11px;
      }
    }

    .sidenav-expand-toggler {
          margin-top: 20px;
      }

    
    </style>