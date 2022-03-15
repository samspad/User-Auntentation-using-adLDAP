<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>  </title>
    <!-- Bootstrap -->
    
    <link rel="icon" href="_____________________________">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--                -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
  <div id="login" class=" h-100">
        <!-- <h3 class="text-center text-white pt-5"></h3> -->

    <div class="container-fluid  h-100">
            <div id="row" class="row  h-100">

    <div class="container-fluid p-0">
            <div id="row" class="row h-100">

                <div class='col-md-8 banner_bg d-none d-md-block'> 

                </div>
                <div id="login-column" class="col-md-4">

                    <div id="login-box" class=" pt-5 p-0">


                        <img class="img-responsive w-100" id="Logo"  src="_____________________________" alt="MURC-FRS Login ">
                        <form id="login-form" class="form" action="controllers/login_handler.php" method="post">
                        <div class="bold mt-3 mb-3" style="   font-size: 15px;">Sign in with your username &amp; password</div>
                            <div class="form-group">
                                <label for="username" class="text-info"></label><br>
                                <input type="text" name="username" placeholder="munetuser12" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"></label><br>
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                            </div>
                            <input type="hidden"  name="return_url" value="<?=(isset($_GET['return_url']))?$_GET['return_url']:'' ?>"/>

                            <!-- <div class="form-group"> -->

                            <!-- </div> -->
                            <div class="form-group">
                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign in">
                            </div>

                          
                            <div id="introduction" class="groupMargin" >
                              <br><br>
                             
                              <a href="_____________________________" class="pwmlink" >Forgot Password</a>
                              |
                              <a href="_____________________________" class="pwmlink" >Change Password</a><br><br><br> 
                              <p  >By signing onto this portal, you agree to abide by its Terms of Use. Violations could lead to restriction of portal privileges and/or disciplinary action.</p>                   
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
