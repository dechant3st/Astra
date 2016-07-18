<?php
			
	require 'DB.php';
                     
			$strsql = "SELECT * FROM mydb.post where status = '1'";
			$result =   mysql_query($strsql,$link );
		
                        echo <<<EOT
                
               <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.caom/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
  
  
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="upload/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="upload/js/fileinput.js" type="text/javascript"></script>
        <script src="upload/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="upload/js/fileinput_locale_es.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
          
        
EOT;
             
                        
                        
                        
            echo '<div class="container">';
          
            echo '<table class="table well table-hover">';

                 echo  '<thead>';
                 echo '<tr>';
                 echo '<th>Vessel</th>'; 
                    echo '<th>Position</th>'; 
                     echo '<th>Remarks</th>'; 
                      echo '<th>Date</th>'; 
                         echo '<th>Principal</th>'; 
                  echo '</tr>';
              echo  '</thead>';
                        while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
                              {
                            
                      $vessel1    = $row['vessel'];
                      $position1   = $row['position'];
                      $remarks1     = $row['remarks'];
                      $date = $row['postdate'];
                      $principal = $row['principal'];
                    
                      
                      
                  /*  echo  '<tbody>';
                    echo '<tr class="success">';
      
                    echo '<td>'.$vessel1.'</td>';
                          echo '<td>'.$position1.'</td>';
                             echo '<td>'.$remarks1.'</td>';
                     echo '<td>'.$date.'</td>';
                     echo ' </tr>';
                    echo '  </tbody>';
                      */
                      echo "<tr class='info'><td>".$vessel1."</td><td>".$position1."</td><td  >".$remarks1."</td><td>".$date."</td><td>".$principal."</td></tr>";

                  
    //  echo 
     //    "EMP ID :{$row['vessel']}  <br> ".
    //     "EMP NAME : {$row['position']} <br> ".
     //   "EMP SALARY : {$row['remarks']} <br> ".
     //    "--------------------------------<br>";
    
   
 
                                }
                           
                      echo '</table>';
                      echo '</div>';
                        
                        
			mysql_close($link);
          
          
          
          ?>