<?php


require '../../DB.php';

$position = mysql_escape_string( $_POST['position']);
$vessel =   mysql_escape_string($_POST['vessel']);
$remark =  mysql_escape_string($_POST['remark']);
$principal = mysql_escape_string($_POST['principal']);



if($link === false){
    die("Connection failed:" . mysql_error());
    
}

$strsql= "INSERT INTO mydb.post (position, vessel, postdate, remarks, status, principal )
            VALUES ('$position', '$vessel', CURDATE() ,'$remark', '1', '$principal')";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=admin.html"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
         
                     

mysql_close($link);		






/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

