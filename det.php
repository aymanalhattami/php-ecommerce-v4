<?php
    $pageTitle = "More Details";
	include "header-before.php";
	include "conn.php";
?>

<?php
	$id = $_GET['id'];
	$sql = mysqli_query($con,"SELECT * FROM products WHERE pro_id= '" . $id . "'");
	while($row = mysqli_fetch_assoc($sql))
    {
       $proName = $row["pro_name"];
    };
?>


<!---------------------------------------------------------------------------------------------------->
<!-- Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">تمت إضــافة المنتج للسلة</h4>
      </div>
      <div class="modal-body cartBody">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">متــابقة التسوق</button>
        <a href="checkout.php"><button type="button" class="btn btn-primary modal-anchore">تأكيــد الشراء</button></a>
      </div>
    </div>
  </div>
</div>

<!---------------------------------------------------------------------------------------------------->




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

<!---------------------------------------------------------------------------------------------------->
<?php
        $id_cat = '';
        $sql = mysqli_query($con,"SELECT id_cat FROM products WHERE pro_id= '" . $id . "'");
        while($row = mysqli_fetch_assoc($sql)){
               $id_cat =  $row['id_cat'];         
        }

?>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="index.php">الرئيسية</a></li>
		<li><a href="products.php?id_cat=<?php echo $id_cat ?>">المنتجات</a></li>
		<li>التفاصيل للمنتج (<?php echo $proName; ?>)</li>
	</ol>
</div>

<div class="detail-page">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
                <?php
	                $sql = mysqli_query($con,"SELECT pro_path FROM products WHERE pro_id= '" . $id . "'");
	                while($row = mysqli_fetch_assoc($sql))
	                {?>

				    <div class="row TopClass">
                        <div class="col-md-12 bigimage-f">
                            <img class="img-responsive center-block bigimage" src="">
                        </div>
                     <?php
                    }
	               ?>
                        
                        <div class="row" style="margin-right:100px">
                    <?php
                        $sql2 = mysqli_query($con,"SELECT img_path FROM products_img WHERE id_pro= '" . $id . "'");
                        while($row = mysqli_fetch_assoc($sql2)){?>
                            <div class="col-md-3 smallImageclass">
                                <img class="img-responsive center-block smallimage" src="<?php echo $row['img_path']; ?>">
                            </div>
                    <?php
                        };
                    ?>
                        </div>

                    </div> 
              
			</div>
			<div class="col-md-3 col-md-offset-1 detail-info">	
				<?php
					$id = $_GET['id'];  
					$sql2 = mysqli_query($con,"SELECT * FROM products WHERE pro_id= '".$id."'");
					 while($row = mysqli_fetch_assoc($sql2))
					 {
					?>
					<h1><?php echo $row['pro_name']; ?></h1>
                
					<h3><?php echo $row['pro_price'] . " ريال"; ?></h3>
                
					<p class=""><?php echo $row['pro_detials']; ?></p>
                
					<a 
                       class="btn btn-primary btn-xs cart-feedback <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'disabled';} ?>"
                       href="cart2.php?id=<?php echo $row['pro_id'] ?>">
                            <i class="fa fa-plus"></i>
                    <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'المنتج في السلة';} else {echo 'إضافة إلى السلة';} ?>
                        
                    </a>
                    
                    <a class="btn btn-success  btn-xs <?php if(@$_SESSION['total_products']==0){ echo 'disabled';} ?>" href="<?php if(isset($_SESSION['sessionname'])){echo 'checkout.php';} else {echo 'login.php?loc='.$_SERVER["REQUEST_URI"];} ?>">
                        <i class="fa fa-shopping-cart"></i>
                        <?php if(@$_SESSION['total_products']==0){ echo 'أضف منتجاً';} else {echo 'تـأكيد الشراء';} ?>
                    </a>
					<?php
					 }
					 ?>

					
                    <div class="clearfix"></div>
				 
			</div>
		</div>
	</div>
</div>



<br>
<?php
	include "footer.php";
?>