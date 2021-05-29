<?php
  $page_title = 'Edit product';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
?>
<?php
$product = find_by_id('products',(int)$_GET['id']);
$all_categories = find_all('categories');
$all_photo = find_all('media');

?>
<?php 
 if(isset($_POST['product'])){
    $req_fields = array('product-title','product-categorie','product-quantity','buying-price', 'saleing-price' );
    validate_fields($req_fields);

   if(empty($errors)){
    $p_id = remove_junk($db->escape($_POST['id']));



















    
       $p_name  = remove_junk($db->escape($_POST['product-title']));
       $p_cat   = (int)$_POST['product-categorie'];
       $p_qty   = remove_junk($db->escape($_POST['product-quantity']));
       $p_buy   = remove_junk($db->escape($_POST['buying-price']));
       $p_sale  = remove_junk($db->escape($_POST['saleing-price']));

       $query  = "INSERT INTO `pendingorder`(`productId`,`name`, `quantity`, `buy_price`, `sale_price`,`categorie_id` ) VALUES ('$p_id','$p_name ',' $p_qty ','$p_buy ',' $p_sale','$p_cat')";
       $result = $db->query($query);
       redirect('pendingorder.php');

   } else{
       $session->msg("d", $errors);
       redirect('edit_product.php?id='.$product['id'], false);
   }

 }

?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Orders in Processed</span>
       </strong>
         <a href="userproduct.php" class="btn btn-warning pull-right">Add New Order</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">

    
                
                <tr >
                    <!-- <th scope="col">productId</th> -->
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">Quantity</th>                  
                    <th scope="col">buy_price</th>
                    <th scope="col">sale_price</th>
                    <th scope="col">categorie_id</th>
                
                </tr>
            </thead>

            <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "inventory_system";
         
         $conn = new mysqli($servername, $username, $password, $dbname);
          //  echo $_SESSION['UserId'];
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }else{
            
            $sql = "SELECT * FROM `pendingorder`";
            $result = $conn->query($sql);
            $count=1;
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()){
                
            ?>

<tr>

				     
                      
					<td>
						<?php echo  $row['productId']; ?>
					</td>
                    <td>
						<?php echo  $row['name']; ?>
					</td>
                    
         

                  
					<td>
						<?php echo  $row['quantity']; ?>
					</td>

                   
					<td>
						<?php echo $row['buy_price']; ?>
					</td>
					<td>
						<?php echo $row['sale_price']; ?>
					</td>
                    <td>
						<?php echo $row['categorie_id']; ?>
					</td>
     
                    
                    
    
           
        

	

      	


				</tr>
				
        






<?php } ?>
<?php }?>
<?php }?>

    
    </div>
       
     </table>
     </div>
    </div>
  </div>
</div>







<?php include_once('layouts/footer.php'); ?>
