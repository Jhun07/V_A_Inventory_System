<?php
  $page_title = 'Edit product';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
?>
<?php
if (isset($_GET['approvedrequest'])){
    
    $approvedRequest=$_GET['approvedrequest'];
    $name=$_GET['name'];
    $quantity=$_GET['quantity'];
    $buy_price=$_GET['buy_price'];
    $sale_price=$_GET['sale_price'];
    $categorie_id=$_GET['categorie_id'];
    
    
    
    $sql = " UPDATE products SET name = '$name', quantity = '$quantity', buy_price= '$buy_price', sale_price= '$sale_price', categorie_id= '$categorie_id' WHERE id = '$approvedRequest'";
    $sqldelete = " DELETE FROM pendingrequest WHERE productId='$approvedRequest'";
    
    // execute the query
    $delete = $db->query($sqldelete);
    $result = $db->query($sql);
    
    
    
    if ($result & $delete== TRUE) {
    header('Location: product.php');
    
    
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    
    
    
    
    }


?>