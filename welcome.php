<?php 
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['area'];
   
   
   $mailTo='baronshellwebsites@gmail.com';
   $headers='From:'.$name.",".$email;
   $txt='You have received an e-mail from '.$name.': '.$message;
   
   
   

   mail($mailTo,$email,$txt,$headers);
   header('Location:appointment.html?mailsent');
    
}
?>