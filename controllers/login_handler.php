<?php 
include('../inc/config-reporting.php');


include('../adLDAP/src/adLDAP.php');

//$adLDAP->setAdminUsername('MyCampusBind');
//$adLDAP->setAdminPassword('!g4jHjF7WC');
//$adLDAP->connect();


if(isset($_POST['username'])){
		extract($_POST);


/* ######################## */
 function lastInsertId($queryID) {

        sqlsrv_next_result($queryID);

        sqlsrv_fetch($queryID);

        return sqlsrv_get_field($queryID, 0);

    } 
	
	 function strand($length){
      if($length > 0)
        return chr(rand(33, 126)) . strand($length - 1);
	}
	include('../inc/own_db_functions.php');
/* ############# fund iotn EnD  */

/*adLDAP start*/

	$adLDAP = new adLDAP(['ad_port' => 636, 'use_tls' => true, 'use_ssl' => true]);

	$authUser = $adLDAP->user()->authenticate($username, $password);

	// var_dump($authUser);

if($authUser){

	
		//checking password
			$chek_pass ="SELECT  * FROM [dbo].[users] WHERE email = '$username' OR account = '$username'";

			$query = sqlsrv_query($conn1, $chek_pass, array(), array( "Scrollable" => 'static' ));

			$row_count_pass = sqlsrv_num_rows($query);
			
			if( $query === false) {
				die( print_r( sqlsrv_errors(), true) );
			}
			
			if($row_count_pass>0){
				//login successful
				$patprd = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC) ;
            
				extract($patprd);
				
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['is_pi'] = $is_pi;
				$_SESSION['account'] = $account;
				$_SESSION['user_id'] = $user_id;
				$_SESSION['pass_reset'] = $pass_reset;
				$_SESSION['user_name'] = $first_name." " .$last_name;
				$msg ="Successful Login";
				
				$redirect= "dashboard.php";
				if($return_url!=""){
					$redirect = $return_url;
				}
				
				//############### store Login date time into login_logs table ###########
				/*
                    $date = date('Y-m-d H:i:s');
                    $user_name = $_SESSION['user_name'];
                    $sect_ql_adt ="
                    INSERT INTO [dbo].[login_logs]
                ([user_id],[user_name],[login_time],[logout_time])
                    VALUES('$user_id','$user_name','$date','Active')	";
                    $sect_ql_adt.="; SELECT SCOPE_IDENTITY() AS IDENTITY_COLUMN_NAME";
                    $stmt = sqlsrv_query( $conn1, $sect_ql_adt );
                    if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }

                    $login_log_id = lastInsertId($stmt);

                    $_SESSION['login_log_id'] = $login_log_id;
			    */

				/* ######################### END #######################*/

				echo "

				<script>				
					window.location.href='../$redirect'
				</script>

				";
			}

}


/**********/

		$chek_qr ="SELECT  [email] FROM [dbo].[users] WHERE email = '$username' OR account = '$username'";

		$query = sqlsrv_query($conn1, $chek_qr, array(), array( "Scrollable" => 'static' ));

		$row_count = sqlsrv_num_rows($query);		
		$password_encrypt  = base64_encode($password); 
		
		if($row_count>0){
			//checking password
			$chek_pass ="SELECT  * FROM [dbo].[users] WHERE password = '$password_encrypt' AND  (email = '$username' OR account = '$username')";

			$query = sqlsrv_query($conn1, $chek_pass, array(), array( "Scrollable" => 'static' ));

			$row_count_pass = sqlsrv_num_rows($query);
			
			if( $query === false) {
				die( print_r( sqlsrv_errors(), true) );
			}
			
			if($row_count_pass>0){
				//login successful
				$patprd = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC) ;
            
				extract($patprd);
				
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['account'] = $account;
				$_SESSION['user_id'] = $user_id;
				$_SESSION['pass_reset'] = $pass_reset;
				$_SESSION['user_name'] = $first_name." " .$last_name;
				$msg ="Successful Login";
				$redirect= "dashboard.php";
				// get user role 
				$role_ql = "SELECT * FROM  [dbo].[user_access] WHERE user_id = $user_id ";
				$queryres = sqlsrv_query($conn1, $role_ql, array(), array( "Scrollable" => 'static' ));
				
				$patprdROL= sqlsrv_fetch_array( $queryres, SQLSRV_FETCH_ASSOC) ;
				
				$_SESSION['role_id'] = $patprdROL['role_id'];

				

			}else{
				$msg = 'Password Incorrect';
				$redirect= "login.php";
			}
			
		}
		else{
			$msg = "Username/Password is correct or you do not have access to this application!";
			$redirect= "login.php";


		}
		echo "

				<script>
				alert('$msg') ;
				window.location.href='../$redirect'
				</script>

		";
}


?>

