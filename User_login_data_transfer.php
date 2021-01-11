<?php
   include 'connection.php';
   if(isset($_POST['submit'])){
      $name = $_POST['Username'];
      $mobile = $_POST['Mob'];

      $insertquery = " insert into jobregistration(name, Mobile) values('$name', '$mobile') ";
      $resp = mysqli_query($con, $insertquery);

      if($resp){
         ?>
         <script>
            window.location.href = 'Home Page.html';
         </script>
         <?php
      }else{
         ?>
         <script>
            alert('data not inserted properly');
         </script>
         <?php
      }
   }
   

   /*$file = 'filename.txt';  //this is the file to which the IP address will be written; name it your way.

   $fp = fopen($file, 'w');

   fwrite($fp, 'Username- ' . $name. '. ');
   fwrite($fp, 'Password- ' .$password);

   fclose($fp);*/

   //sending mail to owner

   /*$to = 'shreerampress014@gmail.com';
   $subject = 'Testing Login User data by aman';
   $message = 'This mail is just to see try for sending our first mail';
   $headers = 'From: shreerampress014@gmail.com';


   if(mail($to, $subject, $message, $headers)){
      echo 'mail sent successfully. You are succeed in your trial.';
   }else{
      echo 'unable to sent successfully. Sorry';
   }*/
   

?>