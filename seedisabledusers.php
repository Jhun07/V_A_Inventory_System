<?php
  $page_title = 'All User';
  require_once('includes/load.php');
?>
<?php
// Checkin What level user has permission to view this page
 page_require_level(1);
//pull out all user form database
 $all_users = find_all_user();
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
          <span>Disabled Users</span>
       </strong>
         <a href="add_user.php" class="btn btn-warning pull-right">Add New User</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">

    
                
                <tr >
                    <!-- <th scope="col">productId</th> -->
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">username</th>                  
                    <th scope="col">password</th>
                    <th scope="col">user_level</th>
                    <th scope="col">image</th>
                    <th scope="col">status</th>
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
            
            $sql = "SELECT * FROM `disabledusers`";
            $result = $conn->query($sql);
            $count=1;
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()){
                
            ?>

<tr>

				     
                      
					<td>
						<?php echo  $row['id']; ?>
					</td>
                    <td>
						<?php echo  $row['name']; ?>
					</td>
                    
         

                  
					<td>
						<?php echo  $row['username']; ?>
					</td>

                   
					<td>
						<?php echo $row['password']; ?>
					</td>
					<td>
						<?php echo $row['user_level']; ?>
					</td>
                    <td>
						<?php echo $row['image']; ?>
					</td>
                    <td>
						<?php echo $row['status']; ?>
					</td>
                    
                    
          <td>
              <style>
                  .fa-recycle {
                      font-size: 1rem;
                  }
              </style>
           
           <a href="enabled_user.php?id=<?php echo $row['id'];?>&name=<?php echo $row['name'];?>&username=<?php echo $row['username'];?>&password=<?php echo $row['password'];?>&user_level=<?php echo $row['user_level'];?>&image=<?php echo $row['image'];?>&status=<?php echo $row['status'];?>" class="btn btn-xs btn-danger"  title="Disabled">

               Enabled

        
              
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
