<?php
  $page_title = 'All Product';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(2);
  $products = join_product_table();
?>  
<?php include_once('layouts/header.php'); ?>

<table class="table table-bordered table-striped">
     
      
     
                
                <tr >
                    <!-- <th scope="col">productId</th> -->
                    <th scope="col">productId</th>
                    <th scope="col">name</th>
                    <th scope="col">quantity</th>                  
                    <th scope="col">Buy_price</th>
                    <th scope="col">sale_price</th>
                    <th scope="col">Categorie_id</th>

                    <th scope="col">Action</th>
                
                    
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
            $sql = "SELECT * FROM `pendingrequest`";
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
          <td>
              <style>
                  .fa-recycle {
                      font-size: 1rem;
                  }
              </style>
           <a href="approvedrequest.php?approvedrequest=<?php echo $row['productId'];?>&name=<?php echo $row['name'];?>&quantity=<?php echo $row['quantity'];?>&buy_price=<?php echo $row['buy_price'];?>&sale_price=<?php echo $row['sale_price'];?>&categorie_id=<?php echo $row['categorie_id'];?>"
                    class="glyphicon glyphicon-check-warning"></a> 
					</td>	
				</tr>
				
        






<?php } ?>
<?php }?>
<?php }?>

    
    </div>

    <?php include_once('layouts/footer.php'); ?>