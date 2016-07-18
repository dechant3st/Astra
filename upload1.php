<?php


        //Username to use for SMTP authentication
   

//Password to use for SMTP authentication
$msg = '';
if (array_key_exists('my_file', $_FILES)) {
    
    // First handle the upload
    // Don't trust provided filename - same goes for MIME types
    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
  //  $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['my_file']['name']));
      $uploadfile =  $_FILES['my_file']['name'];
    if (move_uploaded_file($_FILES['my_file']['tmp_name'], $uploadfile)) {
        
       require_once 'PHPMailer-master/PHPMailerAutoload.php';
         $mail = new PHPMailer;
        // Upload handled successfully
        // Now create a message
        // This should be somewhere in your include_path
      $exname = $_FILES["my_file"]['name'];
      $ext = end((explode(".", $exname))); # extra () to prevent notice
      strtolower($ext);
      if ($ext === 'doc' or $ext === 'docx' or $ext === 'xls' or $ext === 'xlsx')
      {
          
          
          
      
      //filter_input(INPUT_REQUEST, $_REQUEST['message']);
       $remarks  =  mysql_escape_string($_REQUEST['message']);
       $fname  = mysql_escape_string($_REQUEST['name']);
   
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";

        // optional
        // used only when SMTP requires authentication  
        $mail->SMTPAuth = true;
        $mail->Username = "keithtaunan0014@gmail.com";
        $mail->Password = "decrypting0014!!";

        $mail->addAddress("keith_taunan@yahoo.com", 'virgel bahian');
        $mail->Subject = 'BIODATA';
        $mail->msgHTML("Sent from our web server from Mr. $fname the file extension is $ext .  Remarks: $remarks " );
        // Attach the uploaded file
        $mail->addAttachment($uploadfile, '');
        if(!$mail->send()) 
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } 
        else 
            {
               
          
          
                  echo <<<HERE
        <script type='text/javascript'>alert('Biodata is successfully sent!' );</script>
        
          
HERE;
       header("Refresh:0; url=download.html");
                 
                 
            }
     
   
    
 
          
      }
          
          
          else
      {
          echo <<<HERE
        <script type='text/javascript'>alert('Please attached an Excel or a Doc file from given format!' );</script>
        
          
HERE;
       header("Refresh:0; url=download.html");
      }
  
}
 else {
        $msg .= 'Failed to move file to ' . $uploadfile;
    }
    
}

//Provide file path and name of the attachments
//wala pa laman






/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

