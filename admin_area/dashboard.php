<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<!-- <h1 class="page-header">Dashboard</h1> -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Bảng quản lý

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_products; ?> </div>

<div>Sản phẩm</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_products">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Xem chi tiết </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_customers; ?> </div>

<div>Khách hàng</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_customers">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Xem chi tiết </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-shopping-cart fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_p_categories; ?> </div>

<div>Danh mục sản phẩm</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_p_cats">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> Xem chi tiết </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_total_orders; ?> </div>

<div>Đơn hàng</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<!-- <a href="index.php?view_orders">

<div class="panel-footer">

<span class="pull-left"> Xem chi tiết </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><

</a> -->

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row">
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-success"><!-- panel panel-red Starts -->
        
        <div class="panel-heading"><!-- panel-heading Starts -->
        
        <div class="row"><!-- panel-heading row Starts -->
        
        <div class="col-xs-3"><!-- col-xs-3 Starts -->
        
        <i class="fa fa-dollar fa-5x"> </i>
        
        </div><!-- col-xs-3 Ends -->
        
        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
        
        <div class="huge"> <?php echo $count_total_earnings ?> </div>
        
        <div>Thu nhập</div>
        
        </div><!-- col-xs-9 text-right Ends -->
        
        </div><!-- panel-heading row Ends -->
        
        </div><!-- panel-heading Ends -->
        
        <!-- <a href="index.php?view_orders">
        
        <div class="panel-footer">
        
        <span class="pull-left"> Xem chi tiết </span>
        
        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
        
        <div class="clearfix"></div>
        
        </div>
        
        </a> -->
        
        </div><!-- panel panel-red Ends -->
        
        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-warning"><!-- panel panel-red Starts -->
            
            <div class="panel-heading"><!-- panel-heading Starts -->
            
            <div class="row"><!-- panel-heading row Starts -->
            
            <div class="col-xs-3"><!-- col-xs-3 Starts -->
            
            <i class="fa fa-spinner fa-5x"> </i>
            
            </div><!-- col-xs-3 Ends -->
            
            <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
            
            <div class="huge"> <?php echo $count_pending_orders ?> </div>
            
            <div>Đơn hàng đang chờ</div>
            
            </div><!-- col-xs-9 text-right Ends -->
            
            </div><!-- panel-heading row Ends -->
            
            </div><!-- panel-heading Ends -->
            
            <!-- <a href="index.php?view_orders">
            
            <div class="panel-footer">
            
            <span class="pull-left"> Xem chi tiết </span>
            
            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
            
            <div class="clearfix"></div>
            
            </div>
            </a> -->
            
            </div><!-- panel panel-red Ends -->
            
            </div><!-- col-lg-3 col-md-6 Ends -->



            <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

                <div class="panel panel-info"><!-- panel panel-red Starts -->
                
                <div class="panel-heading"><!-- panel-heading Starts -->
                
                <div class="row"><!-- panel-heading row Starts -->
                
                <div class="col-xs-3"><!-- col-xs-3 Starts -->
                
                <i class="fa fa-check fa-5x"> </i>
                
                </div><!-- col-xs-3 Ends -->
                
                <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                
                <div class="huge"> <?php echo $count_completed_orders ?> </div>
                
                <div>Đơn hàng đã hoàn thành</div>
                
                </div><!-- col-xs-9 text-right Ends -->
                
                </div><!-- panel-heading row Ends -->
                
                </div><!-- panel-heading Ends -->
                
                <!-- <a href="index.php?view_orders">
                
                <div class="panel-footer"><
                
                <span class="pull-left"> Xem chi tiết </span>
                
                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                
                <div class="clearfix"></div>
                
                </div>
                
                </a> -->
                
                </div><!-- panel panel-red Ends -->
                
                </div><!-- col-lg-3 col-md-6 Ends -->



                <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

                    <div class="panel panel-danger"><!-- panel panel-red Starts -->
                    
                    <div class="panel-heading"><!-- panel-heading Starts -->
                    
                    <div class="row"><!-- panel-heading row Starts -->
                    
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                    <i class="fa fa-percent fa-5x"> </i>
                    
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                    <div class="huge"> <?php echo $count_coupons; ?> </div>
                    
                    <div>Tổng số phiếu giảm giá</div>
                    
                    </div><!-- col-xs-9 text-right Ends -->
                    
                    </div><!-- panel-heading row Ends -->
                    
                    </div><!-- panel-heading Ends -->
                    
                    <!-- <a href="index.php?view_orders">
                    
                    <div class="panel-footer">
                    
                    <span class="pull-left"> Xem chi tiết </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                    </div>
                    
                    </a> -->
                    
                    </div><!-- panel panel-red Ends -->
                    
                    </div><!-- col-lg-3 col-md-6 Ends -->
</div>

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Đơn hàng mới

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<!-- <thead>

<tr>
<th>Đơn hàng</th>
<th>Khách hàng</th>
<th>Số hóa đơn</th>
<th>Mã sản phẩm</th>
<th>Số lượng</th>
<th>Size</th>
<th>Trạng thái</th>


</tr>

</thead> -->

<!-- <tbody>

<?php

$i = 0;

$get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$order_id = $row_order['order_id'];

$c_id = $row_order['customer_id'];

$invoice_no = $row_order['invoice_no'];

$product_id = $row_order['product_id'];

$qty = $row_order['qty'];

$size = $row_order['size'];

$order_status = $row_order['order_status'];


$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php

$get_customer = "select * from customers where customer_id='$c_id'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['customer_email'];
echo $customer_email;
?>
</td>

<td><?php echo $invoice_no; ?></td>
<td><?php echo $product_id; ?></td>
<td><?php echo $qty; ?></td>
<td><?php echo $size; ?></td>
<td>
<?php
if($order_status=='pending'){

echo $order_status='Đang chờ';

}
else {

echo $order_status='Đã hoàn thành';

}

?>
</td>

</tr>

<?php } ?>

</tbody>


</table>

</div> -->

<div class="text-right" ><!-- text-right Starts -->

<!-- <a href="index.php?view_orders" >

Xem tất cả đơn hàng <i class="fa fa-arrow-circle-right" ></i>

</a> -->

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->



</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->

<?php } ?>