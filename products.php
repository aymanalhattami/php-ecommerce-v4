<?php 
    ob_start();
    require("conn.php");
    @$cat_id = $_GET['id_cat'];
    $pageTitle = "products";
    $department = "";

    if($cat_id == "1")
    {
        $department = "القصص";
        $pageTitle = "stories";
    }
    else if($cat_id == "2")
    {
        $department = "ساعات";
        $pageTitle = "watches";
    }
    else
    {
        $department = "نباتات";
        $pageTitle = "plants";
    }
    include "header-before.php";
?>


<!-------------------- modal(lightbox)  -------- -->
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
        <a href="<?php if(isset($_SESSION['sessionname'])){echo 'checkout.php';} else {echo 'login.php?loc='.$_SERVER["REQUEST_URI"];} ?>" class="modal-anchore">
            <button type="button" class="btn btn-primary"> 
                تأكيــد الشراء
            </button>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- ---------------------- breadcrumb --------------------  -->

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">الرئيسية</a></li>
        <li>الاصناف <?php echo "(" . $department . ")" ?></li>
    </ol>
</div>


<?php 
    $sql2 = "select pro_path2,pro_detials from products where id_cat = $cat_id";
    $result2 = mysqli_query($con,$sql2);
    while($row = @mysqli_fetch_assoc($result2))
    {
        $image_pics[] = $row['pro_path2'];
        $image_detials[]   = $row['pro_detials'];
    }

    
?>



<!----------------  products  ------------- -->
<div class="product-page">
    <div class="container">
    	<div class="row">
            <?php
                $image_pics = array();
                $image_detials = array();
                $idForLight = 0;
                $sql = "select * from products where id_cat = $cat_id";
                $result = mysqli_query($con,$sql);
                while($row = @mysqli_fetch_assoc($result))
                {
                     $image_pics[]      = $row['pro_path'];
                     $idForLight++;

                     
             ?>
                <div class="col-md-2 col-sm-4">
                    <div class="thumbnail <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'saled';} ?> ">

                            <a href="" data-target="#product-modal" data-toggle="modal">
                                <img 
                                     data-toggle="popover" 
                                     data-placement="top" 
                                     data-content="<?php echo $row['pro_detials'] ?>"
                                     class="carousel-modal" 
                                     width="200px" 
                                     height="200px" 
                                     src="<?php echo $row['pro_path'] ?>">
                            </a>

                            <div class="caption">
                                <?php echo $row['pro_name'] . "<br />"; ?> 
                                <?php echo $row['pro_price'] ?><br />
                                <span class="idForLight" style="display:none"><?php echo $idForLight ?></span>
                            </div>
                            <div class="add-more">
                                <a class="btn btn-default btn-block btn-xs" href="det.php?id=<?php echo $row['pro_id']; ?>">
                                    تفاصيل اكثر 
                                </a>
                                <a class="btn btn-primary btn-xs btn-block cart-feedback <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'disabled';} ?> "  
                                   href="cart2.php?id=<?php echo $row['pro_id'] ?>"><i class="fa fa-plus"></i>
                                    <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'المنتج في السلة';} else {echo 'إضافة إلى السلة';} ?>
                                </a>
                            </div>

                    <?php 
                                echo "</div>";
                            echo '</div>';
                        }
                    ?>
                    </div>
            </div>
        </div>
    </div>
</div>
    
<!-------------- button to show more products ------------- -->
<div class="container add-more">
    <div class="alert alert-info">
         <span class="addMore_product">عرض منتجات مختلفة</span> &nbsp; <i class="fa fa-plus-square fa-2x"></i>
    </div>
</div>

<!-------------- more products ------------ -->
<div class="product-page more-product">
    <div class="container">
    	<div class="row">
            <?php

                $sql = "select * from products where id_cat != $cat_id";
                $result = mysqli_query($con,$sql);
                while($row = @mysqli_fetch_assoc($result))
                {


             ?>
                <div class="col-md-2 col-sm-4">
                    <div class="thumbnail <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'saled';} ?> ">

                            <a href="">
                                <img 
                                     data-toggle="popover" 
                                     data-placement="top" 
                                     data-content="<?php echo $row['pro_detials'] ?>"
                                     class="carousel-modal" 
                                     width="200px" 
                                     height="200px" 
                                     src="<?php echo $row['pro_path'] ?>">
                            </a>

                            <div class="caption">
                                <?php echo $row['pro_name'] . "<br />"; ?> 
                                <?php echo $row['pro_price'] ?><br />
                            </div>
                            <div class="add-more">
                                <a class="btn btn-default btn-block btn-xs" href="det.php?id=<?php echo $row['pro_id']; ?>">
                                    تفاصيل اكثر 
                                </a>
                                <a class="btn btn-primary btn-xs btn-block cart-feedback <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'disabled';} ?> "  
                                   href="cart2.php?id=<?php echo $row['pro_id'] ?>"><i class="fa fa-plus"></i>
                                    <?php if(isset($_SESSION['cart_'.$row['pro_id']])){ echo 'المنتج في السلة';} else {echo 'إضافة إلى السلة';} ?>
                                </a>
                            </div>

                    <?php 
                                echo "</div>";
                            echo '</div>';
                        }
                    ?>
                    </div>
            </div>
        </div>
    </div>
</div>
    


<?php
	include "footer.php";
    ob_end_flush();
?>