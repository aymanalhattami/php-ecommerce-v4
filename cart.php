<?php
    $pageTitle = "سلة الشراء";
	ob_start();
	include "header-before.php";
	include "conn.php";
?>
<!---------------------------------------------------------------------------------------------------->
<!-- Checkout Modal -->
<div class="modal fade" id="checkOutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تأكيد تسجيل الدخــول</h4>
      </div>
      <div class="modal-body">
        <h3>تنبيه !! </h3>
        <p> يجــب عليك اولاً القــيام بتسجيل الدخول قبل عملية تأكيد الشراء 
        و يمكنك إيــضاً إنشاء حساب جديد إذا لم تكن تملك حساباً   
        </p>
      </div>
      <div class="modal-footer">
        <a href="login.php"><button type="button" class="btn btn-default">تسجيل الدخــول</button></a>
        <a href="createAccount.php"><button type="button" class="btn btn-primary">إنشاء حســــاب </button></a>
      </div>
    </div>
  </div>
</div>

<!-------------------- breadcrumb -------------------->

<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php">الصفحة الرئيسية</a></li>
			<li>سلة التسوق</li>
		</ol>
	</div>
</div>

<!------------------ the cart information -------------------->

<div class="cart-page">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h3>سلة التسوق</h3>
			</div>
			<div class="col-md-2 cart-head">
				السعر
			</div>
			<div class="col-md-1 cart-head">
				الكمية
			</div>
			<div class="col-md-2 cart-head">
				حذف المنتج
			</div>
		</div>
		<hr />

<?php
	@$id = $_GET['id'];
    $sql  = "select * from products where pro_id = '".$id."'";
    $result = mysqli_query($con,$sql);
    $quantity_calc = 0;
    while($quantity = mysqli_fetch_assoc($result))
    {
        @$quantity_calc = $quantity['pro_quantity'];
    }

    if($quantity_calc != @$_SESSION['cart_'.$id])
    {
        @$_SESSION['cart_'.$id] += '1';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

	if(isset($_GET['remove']))
	{
		$_SESSION['cart_'.$_GET['remove']]-='1';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

	if(isset($_GET['delete']))
	{
		unset($_SESSION['cart_'.$_GET['delete']]);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
        
        


    $total_price = 0;
    $total_products = 0;
    foreach($_SESSION as $name => $value)
    {
        if($value>0)
        {
            if(substr($name, 0 , 5)=='cart_')
            {
                $id = substr($name , 5 ,(strlen($name)-5));
                
				$get = mysqli_query($con,'SELECT * FROM products WHERE pro_id='.$id);		
                while($get_row = mysqli_fetch_assoc($get))
				{
?>
					<div class="row">
						<div class="col-md-2 text-center">
							<img class="" src="<?php echo  $get_row['pro_path'] ?> " width="100px" height="100px" />
						</div>
						<div class="col-md-5">
							<p class="product-name"> <?php echo $get_row['pro_name'] ?> </p>
		                   	<p class=""> <?php echo $get_row['pro_detials'] ?> </p>
						</div>

						<div class="col-md-2">
							<div class="cart-price">
								<p>سعر المنتج : <span> <?php echo '"' . $get_row['pro_price'] . '"' . " ريال" ?> </span> </p> 
							</div>
						</div>
						<div class="col-md-1">
							<input type="text" readonly disabled value="<?php echo $value ?>" />
						</div>
						<div class="col-md-2">
							<a class="btn btn-danger btn-sm" href="cart.php?delete=<?php echo $id ?>"><i class="fa fa-close"></i> حذف</a>
						</div>
					</div>
					<hr />
                   
                   
                	<?php
                        $total_price += $get_row['pro_price'] * $value;
                        $total_products += $value;     
                 }   
            }
        }
    }


if($total_price == 0)
{
    echo "<span class='center-block text-center no-product'>لم تقم باختيار اي منتج</span>";
    $_SESSION['total_price'] = '0';      // في حال مافيش اي منتج نعيد السيشن الخاص بالسعر إلى 0 
    $_SESSION['total_products'] = '0';
}
else
{
	?>
		<div class='row'>
			<div class='col-md-9'></div>
			<div class='col-md-3'>
				<div class="cart-buy">
					<span>
						<?php
							$_SESSION['total_products'] = $total_products;
                            if($_SESSION['total_products'] == 0)
                                echo "(لم تقم باختيار اي منتج)";
                            
                        ?>
						
					</span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="subtotal"> <!--  the width for this element is 350px -->
				<div class="col-md-6 col-xs-6"> <!-- col-md-6 from 350px -->
					<p>الاجمالي</p>
					<p>الضرائب</p>
					<p>تكلفة الشحن</p>
				</div>
				<div class="col-md-6 col-xs-6">
					<p><?php echo ": " . '"' . $_SESSION['total_price'] =  $total_price . '"'; ?> ريال</p>
					<p>-- -- ريال</p>
					<p>مجانا</p>
				</div>
			</div>
			<div class="grand-total">
				<div class="col-md-5 col-xs-6"> <!-- col-md-6 from 350px -->
					<p>الاجمالي الكلي</p>
				</div>
				<div class="col-md-4 col-xs-6">
					<p><?php echo ": " . '"' . $_SESSION['total_price'] =  $total_price . '"'; ?> ريال</p>
				</div>
				<div class="col-xs-3">
					<a href='checkout.php' class="btn btn-primary btn-sm pull-left" >صندوق الدفع</a>
				</div>
			</div>
		</div>

<?php
}

?>
	</div>
</div>


<?php
	include "footer.php";
	ob_end_flush();
?>