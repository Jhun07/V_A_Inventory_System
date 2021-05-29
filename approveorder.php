<?php
  $page_title = 'Edit product';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
?>
<?php
if(isset($_GET['approveorder'])){  
    $approvedOrder=$_GET['approveorder'];        
    $name=$_GET['name'];
    $quantity=$_GET['quantity'];
    $sale_price=$_GET['sale_price'];

    
       $query  = "INSERT INTO `transaction` (`productId`,`name`,`quantity`,`sale_price`) VALUES ('$approvedOrder','$name','$quantity','$sale_price')";
       $sqldelete = " DELETE FROM `pendingorder` WHERE productId='$approvedOrder'";
      
       $delete = $db->query($sqldelete);
       $result = $db->query($query);
       
       
       
       if ($result & $delete== TRUE) {
       header('Location: transaction.php');
       
       
       }else{
       echo "Error:'. $query . '<br>". $conn->error;
       }
       
       $conn->close();
       

 }
