<?php
    session_start();
    ob_start();
	include "conn.php";
?>

<div class="cart-page">

<?php
	@$id = $_GET['id'];
    $quantity_calc = 0;
    
    if(isset($_GET['id']))
    {
        @$_SESSION['cart_'.$id] = '1';

    }

	if(isset($_GET['remove']))
	{
		$_SESSION['cart_'.$_GET['remove']]-='1';

    }

	if(isset($_GET['delete']))
	{
        unset($_SESSION['cart_'.$_GET['delete']]);
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
						<div class="col-md-6">
							<p class="product-name"> <?php echo $get_row['pro_name'] ?> </p>
		                   	<p class="product_detail"> <?php echo $get_row['pro_detials'] ?> </p>
						</div>

						<div class="col-md-2">
							<div class="cart-price">
								<p>سعر المنتج : <span> <?php echo '"' . $get_row['pro_price'] . '"' . " ريال" ?> </span> </p> 
							</div>
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
			<table class="table-chek">
                <tr>
                    <td>لاجمالي</td>
                    <td> <?php $_SESSION['total_price'] =  $total_price;  ?>
					<span class="firstTotal"><?php echo $_SESSION['total_price'] =  $total_price; ?></span>&nbsp;&nbsp;<span>ريال</span></td>
                </tr>
                <tr>
                    <td>تكلفة الشحن</td>
                    <td><span class="shippTotal">مجانا</span></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>الاجمـالي الكلي</td>
                    <td>
                        <?php $_SESSION['total_price'] =  $total_price;  ?>
					<span class="allTotal"><?php echo $_SESSION['total_price'] =  $total_price; ?></span>&nbsp;&nbsp;&nbsp;<span>ريال</span>
                    </td>
                </tr>
            </table>
            
		</div>

<?php
}

?>
</div>


<?php
	ob_end_flush();
?>