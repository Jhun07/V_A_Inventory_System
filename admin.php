<?php
  $page_title = 'V & A | Dashboard';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>
<div class="container" style="margin-left: 17%">
    <div class="row">
        <div class="col-md-6">
            <?php echo display_msg($msg); ?>
        </div>
    </div>
    <div class="row align-items-start">
        <a href="users.php" style="color:black; ">
            <div class="col-md-3 ">
                <div class="panel panel-box clearfix " style="height: 19%; box-shadow: 5px 10px #888888; background-color: #f5deb3;">
                    <div class="panel-icon pull-left bg-orange">
                        <i class="glyphicon glyphicon-user"  style="color:#ffa500"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
                        <p class="text-muted">Users</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row align-items-center">
        <a href="categorie.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix" style="height: 19%;  box-shadow: 5px 10px #888888;background-color: #f5deb3;">
                    <div class="panel-icon pull-left bg-orange">
                        <i class="glyphicon glyphicon-th-large"  style="color:#ffa500"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_categorie['total']; ?> </h2>
                        <p class="text-muted">Categories</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row align-items-end">
        <a href="product.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix" style="height: 19%; box-shadow: 5px 10px #888888;background-color:  #f5deb3;">
                    <div class="panel-icon pull-left bg-orange">
                        <i class="glyphicon glyphicon-shopping-cart"  style="color:#ffa500"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_product['total']; ?> </h2>
                        <p class="text-muted">Products</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row align-items-center " >
        <a href="sales.php" style="color:black;">
            <div class="col-md-3" >
                <div class="panel panel-box clearfix" style="height: 19%;  box-shadow: 5px 10px #888888;background-color:#f5deb3;">
                    <div class="panel-icon pull-left bg-orange">
                        <i class="glyphicon glyphicon-ruble" style="color:#ffa500"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_sale['total']; ?></h2>
                        <p class="text-muted">Sales</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
</div>

<div class="col-md-4 " style="margin-left: 50%; margin-top: -55%; ">
    <div class="panel panel-default" style="background-color: #f5deb3">
        <div class="panel-heading" style="background-color: #f5deb3">
            <strong >
                <span class="glyphicon glyphicon-th"></span>
                <span>Recently Added Products</span>
            </strong>
        </div>
        <div class="panel-body" >

            <div class="list-group">
                <?php foreach ($recent_products as  $recent_product): ?>
                <a class="list-group-item clearfix"
                    href="edit_product.php?id=<?php echo    (int)$recent_product['id'];?>">
                    <h4 class="list-group-item-heading">
                        <?php if($recent_product['media_id'] === '0'): ?>
                        <img class="img-avatar img-circle" src="uploads/products/no_image.png" alt="">
                        <?php else: ?>
                        <img class="img-avatar img-circle" src="uploads/products/<?php echo $recent_product['image'];?>"
                            alt="" />
                        <?php endif;?>
                        <?php echo remove_junk(first_character($recent_product['name']));?>
                        <span class="label label-warning pull-right">
                            Php&nbsp<?php echo (int)$recent_product['sale_price']; ?>
                        </span>
                    </h4>
                    <span class="list-group-item-text pull-right">
                        <?php echo remove_junk(first_character($recent_product['categorie'])); ?>
                    </span>
                </a>
                <?php endforeach; ?>  </div>
        </div>

    </div>
    <br><br><br><br>

<?php include_once('layouts/footer.php'); ?>