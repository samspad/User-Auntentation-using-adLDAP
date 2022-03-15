<style>
.third_level_menu {
    padding-left: 15px !important;
}
.second_level_icon {
    font-size: 15px;
}
.second_level_dropdown li a {
    font-size: 12px;
}

ul.dropdown-menu.sub-down.pl-1.second_level_dropdown li a {
   font-size: 12px; 
}
.side-nav-dark .side-nav .side-nav-inner .side-nav-menu li.dropdown.open a .title, .side-nav-dark .side-nav .side-nav-inner .side-nav-menu li.dropdown.open a .arrow, .side-nav-dark .side-nav .side-nav-inner .side-nav-menu li.dropdown.open a .icon-holder{
  color:inherit;
}
/**Inner level dropdowns css */
.side-nav .side-nav-inner .side-nav-menu li.nav-item.third_level_li.dropdown.open > a {
    background: #00b140;
}

.dataTables_wrapper input[type="search"] {
  border: 1px solid #bfbcbc !important;
}
tr.bg-success th {
    color: #fff !important;
}
/* For  all modals bg */
.modal{
  z-index: 5000000009;
}
/*select2 dropdown zindex */
.select2-container.select2-container--default.select2-container--open {
    z-index: 5000000000;
}
.modal-header {
    background: #f3d03e !important;
}
.modal-content {
    background: #00000061 !important;
    border: 1px solid #dee2e6!important;
    padding: 10px;
}

.modal-body{
  background-color: #fff;
}

/*End modal bg style */

</style>
<?php 
 
   ?>


<div class="side-nav expand-lg">
          <div class="side-nav-inner">

            <ul class="side-nav-menu">
              <!-- <li class="side-nav-header">
                <span>Navigation Menu</span> -->
                <br>

              <!--/li -->

              <li class="nav-item ">
                <a href="dashboard.php">
                  <span class="icon-holder">
                    <i class="lni-dashboard"></i>
                  </span>
                  <span class="title">DASHBOARD</span>                 
                </a>               
              </li>

              <?php 

                  /* hide dashboard oprion if not available access level */
                    $dashboard_OprionShowFlag = 0;
                    foreach ($mentu_dashboard_list_ary as $key => $value) {
                      if(!empty($mentu_dashboard_list_ary[$key])){
                        $dashboard_OprionShowFlag = 1;
                        break;
                      }
                    }

                    /* for read only // normal user */
                    if($role_id == 8 || $role_id == 12){  
                        $menu_array = array(      
                              "AVAILABLE REPORTS" => array("dashboard.php",'lni-files', $sub_menu_arrayF),
                             // "CONTROL PANEL" => array("control-panel.php", 'lni-grid', $control_sub_ary)                       
                        
                        );  

                    }
                    else
                    {
                       
                          $menu_array = array(      
                            " DASHBOARD" => array("dashboard.php",'lni-dashboard', $sub_menu_dashboard_arrayF),
                            " REPORTS" => array("dashboard.php",'lni-files', $sub_menu_arrayF),
                            " TOOLS / SETTINGS" => array("dashboard.php", 'lni lni-control-panel', $control_sub_aryF)                       
                      
                          );                    

                    }

                    /* show only available dashboard */
                    if($dashboard_OprionShowFlag ==1){ 

                      $menu_array = array(      
                        " DASHBOARD" => array("dashboard.php",'lni-dashboard', $sub_menu_dashboard_arrayF),
                        " REPORTS" => array("dashboard.php",'lni-files', $sub_menu_arrayF),
                        " TOOLS / SETTINGS" => array("dashboard.php", 'lni lni-control-panel', $control_sub_aryF)                       
                  
                      ); 
                    }else{

                      $menu_array = array(      
                        //" DASHBOARD" => array("dashboard.php",'lni-dashboard', $sub_menu_dashboard_arrayF),
                        " REPORTS" => array("dashboard.php",'lni-files', $sub_menu_arrayF),
                        " TOOLS / SETTINGS" => array("dashboard.php", 'lni lni-control-panel', $control_sub_aryF)                       
                  
                      ); 
                    }
                   
                    // print_r($sub_menu_dashboard_arrayF);
                        foreach( $menu_array as  $key => $val )
                        { 

                          if(is_array($val[2]))
                          {
                            echo '

                              <li class="nav-item dropdown">
                                  <a class="dropdown-toggle" href="#">
                                      <span class="icon-holder">
                                        <i class="'.$val[1].'"></i>
                                      </span>
                                      <span class="title mr-1">'.$key.'</span>
                                      <span class="arrow ml-2">
                                        <i class="lni-chevron-right-circle"></i>
                                      </span>
                                    </a>
                                  <ul class="dropdown-menu sub-down pl-1 second_level_dropdown">

                            ';
                           
                            foreach( $val[2] as  $keysub => $valsub )
                            {
                              // print_r($valsub);

                              /* third level menu bar */
                              if(is_array($valsub))
                              {
                                echo '
    
                                  <li class="nav-item third_level_li dropdown">
                                      <a class="dropdown-toggle" href="#">
                                          <span class="icon-holder">
                                            <i class="'.$val[1].' second_level_icon"></i>
                                          </span>
                                          <span class="title mr-1">'.$keysub.'</span>
                                          <span class="arrow ml-2">
                                            <i class="lni-chevron-right-circle"></i>
                                          </span>
                                        </a>
                                      <ul class="dropdown-menu sub-down pl-1 third_level_menu" style="display: none;">
    
                                  ';

                                  /* third level array looping */
                                  foreach($valsub as $third_key =>$third_val){
                                    extract($third_val);

                                  /* Checking for Fourth Level */
                                    if(is_array($link)){
                                      
                                      echo '    
                                        <li class="nav-item third_level_li dropdown">
                                            <a class="dropdown-toggle" href="#">
                                                <!--span class="icon-holder">
                                                  <i class=" second_level_icon"></i>
                                                </span-->
                                                <span class="title mr-0">'.$name.'</span>
                                                <span class="arrow ml-0" style="right: 15px;top:4px;">
                                                  <i class="lni-chevron-right-circle" ></i>
                                                </span>
                                              </a>
                                            <ul class="dropdown-menu sub-down pl-1 third_level_menu fourth_level" style="display: none;">
          
                                      ';
                                      $linkA = $link;
                                      foreach ($linkA as $key_4 => $value_4) {
                                        extract($value_4);
                                        echo '
                                          <li>
                                            <a href="'.$link.'">'.$name.'</a>
                                          </li>
                                            
                                        ';
                                      }
                                      echo "</ul> </li>";

                                    }else{   /* end if for fourth level */
                                      echo '
                                      <li>
                                        <a href="'.$link.'">'.$name.'</a>
                                      </li>
                                        
                                      ';
                                    }
                                  }
                                
                                echo "</ul> </li>";  
    
                              }  /* third level if end */
                              else
                               {
                                  /* get icon name from val */
                                  $seconL_val = explode('_',$keysub);
                                  $sec_menu_name = array_shift($seconL_val);
                                  $icon_sec_l_name = implode($seconL_val);
                                  echo '
                                <li>
                                
                               <a href="'.$valsub.'">
                               <span class="icon-holder">
                               <i class="'.$icon_sec_l_name.' second_level_icon"></i>
                             </span>
                               '.$sec_menu_name.'</a>
                                </li>
                                  
                                  ';

                               } /* third level else end */

                            }
                            echo "</ul> </li>";  

                          }
                            else
                           {

                          
                              echo  " <li class='nav-item' ><a href='$val[0]' id='".implode(explode(" ",$key))."'> 
                              <span class='icon-holder'>
                              <i class='$val[1]'></i>
                              </span>
                              <span class='title'> $key   </span>
                              
                              </a></li>";
                            }
                          }
            ?>

            </ul>
          </div>
        </div>