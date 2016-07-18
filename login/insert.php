<?php

 require '../DB.php';



$username= mysql_escape_string($_POST['username']);
$password = mysql_escape_string($_POST['password']);

/*
<!-- $strsql= "INSERT INTO mydb.myuser (username, password, lname, fname )
            VALUES ('$username', '$password', '$lastname' ,'$firstname')";

-->
*/
$strsql = "SELECT * from mydb.myuser Where (username = '$username' AND  password = '$password')";

					
					
                    
					
            
             $match  =   mysql_query($strsql,$link );
          
            if($match != NULL )
            {
                ob_start();
                header("Location:admin/admin.html" );
            }
            else
            {
              echo <<<EOT
                
                 <script type='text/javascript'>alert('Invalid username and password!');</script>
          
        
EOT;
                header("Refresh:0; url=index.html");
            }

mysql_close($link);
?>
