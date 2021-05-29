<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
 $id=$_GET['id']; 
 $name=$_GET['name']; 
 $username=$_GET['username']; 
 $password=$_GET['password']; 
 $user_level=$_GET['user_level']; 
 $image=$_GET['image']; 
 $status=$_GET['status']; 


$sql = "INSERT INTO users (`disableId`,`name`,`username`,`password`,`user_level`,`image`,`status`) VALUES ('$id ','$name ','$username','$password','$user_level','$image','$status')";
$sqldelete = " DELETE FROM disabledusers WHERE id='$id'";
$result = $db->query($sqldelete);
$result = $db->query($sql);
 redirect("users.php");
  $delete_id = delete_by_id('users',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","User Enabled sucessfully.");
     

  
  
     
          



      
    
  }  


?>
