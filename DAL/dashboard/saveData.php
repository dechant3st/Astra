<?php

require '../config.php';

$link = mysql_connect($host, $username, $password, $linkname);

    if ($link === false)
        {
            die("ERROR: Could not connect." . mysql_error());
        }

$category = mysql_escape_string((isset($_POST['category']) ? $_POST['category'] : ''));
$type = mysql_escape_string((isset($_POST['type']) ? $_POST['type'] : ''));
$dep_id = mysql_escape_string((isset($_POST['dep_id']) ? $_POST['dep_id'] : ''));
$dep_name =   mysql_escape_string((isset($_POST['dep_name']) ? $_POST['dep_name'] : ''));

$prin_id = mysql_escape_string((isset($_POST['prin_id']) ? $_POST['prin_id'] : ''));
$prin_name =  mysql_escape_string((isset($_POST['prin_name']) ? $_POST['prin_name'] : ''));
$prin_desc =  mysql_escape_string((isset($_POST['prin_desc']) ? $_POST['prin_desc'] : ''));
$prin_status =  mysql_escape_string((isset($_POST['prin_status']) ? $_POST['prin_status'] : ''));

$ves_type_id =  mysql_escape_string((isset($_POST['ves_type_id']) ? $_POST['ves_type_id'] : ''));
$ves_type_name =  mysql_escape_string((isset($_POST['ves_type_name']) ? $_POST['ves_type_name'] : ''));

$ves_id =  mysql_escape_string((isset($_POST['ves_id']) ? $_POST['$ves_id'] : ''));
$ves_name =  mysql_escape_string((isset($_POST['ves_name']) ? $_POST['ves_name'] : ''));
$ves_desc =  mysql_escape_string((isset($_POST['ves_desc']) ? $_POST['ves_desc'] : ''));
$ves_status =  mysql_escape_string((isset($_POST['ves_status']) ? $_POST['ves_status'] : ''));

$rank_id =  mysql_escape_string((isset($_POST['rank_id']) ? $_POST['rank_id'] : ''));
$rank_name =  mysql_escape_string((isset($_POST['rank_name']) ? $_POST['rank_name'] : ''));
$rank_desc =  mysql_escape_string((isset($_POST['rank_desc']) ? $_POST['rank_desc'] : ''));

if($link === false){
    die("Connection failed:" . mysql_error());
    
}

if($category === "0") {
    if($type === "0") {
    $strsql= "INSERT INTO astradb.principal (prin_name, prin_desc, prin_status)
                VALUES ('$prin_name', '$prin_desc', $prin_status)";
    } else {
    $strsql= "UPDATE astradb.principal SET prin_name = '$prin_name', prin_desc = '$prin_desc', prin_status=$prin_status "
             ."where prin_id = '$prin_id'";
    
    }
    //echo $strsql;
      if(  mysql_query( $strsql, $link))
      {
                      /*echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
                    HERE;*/
            header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
            echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
elseif($category === "1"){
$strsql= "INSERT INTO astradb.vessel_type (ves_type_name)
            VALUES ('$ves_type_name')";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
elseif($category === "2"){
$strsql= "INSERT INTO astradb.vessel (ves_name, ves_desc, ves_status, prin_id, ves_type_id)
            VALUES ('$ves_name', '$ves_desc', '$ves_status', '$prin_id', '$ves_type_id')";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
elseif($category === "3"){
$strsql= "INSERT INTO astradb.vessel_type (ves_type_name)
            VALUES ('$ves_type_name')";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
elseif($category === "4"){
$strsql= "INSERT INTO astradb.department (dep_name)
            VALUES ('$dep_name')";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
elseif($category === "5"){
$strsql= "INSERT INTO astradb.rank (rank_name, rank_desc, dep_id)
            VALUES ('$rank_name', '$rank_desc', '$dep_id')";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
elseif($category === "6"){
    $strsql= "INSERT INTO astradb.posting (dep_id, rank_id, prin_id, ves_type_id, ves_id, remarks, post_status, post_date)
            VALUES ('$dep_id', '$rank_id', '$prin_id', '$ves_type_id', '$ves_id', '$remarks', 1, date())";
      if(  mysql_query( $strsql, $link))
      {
                      echo <<<HERE
                 <script type='text/javascript'>alert('Posting data is successfully saved.');</script>
				
HERE;
			    header("Refresh:0; url=../../dashboard/"); 
                
      }

           else
        {
              echo <<<HERE
                 <script type='text/javascript'>alert('Error: ' . $strsql . "<br>" . mysql_error());</script>

HERE;
        }
}
    

mysql_close($link);		


?>
