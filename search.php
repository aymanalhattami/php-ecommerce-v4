<?php 
    $pageTitle = "search results";
    require_once("header-before.php");
    require("conn.php");
    ?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">الرئيسية</a></li>
        <li>صفحة البحث</li>
    </ol>
</div>

<?php
    $search = @$_GET ['search']; 
    if($search =='')
        echo "<div class='text-center no-search'>" . "لم تقم بادخال اي كلمة بحث" . "</div>";
    else
    {
        echo '<div class="search-page">';
            echo '<div class="container">';
                echo '<div class="row">';

        $sql = mysqli_query($con,"SELECT * from products WHERE pro_name like '%".$search."%' or pro_price like '%".$search."%'");
        $row_num = mysqli_num_rows($sql);
        
        if($row_num == 0)
        {
?>
    
    <div class="col-xs-12 text-center no-search">
        لاتوجد منتاجات تطابق البحث <?php echo '" ' . $search . ' "'; ?>
    </div>

<?php
        }
        else
        {
?>
            <div class="col-xs-12 text-center search-result">
                    <h3>نتائج البحث <?php echo '" ' . $search . ' "' ?></h3>
            </div>

<?php 
            while($row = mysqli_fetch_assoc($sql))
            {
        ?>
                <div class="col-md-2 col-sm-4">
                    <div class="thumbnail">
                        <a href=""><img data-toggle="popover" data-placement="top" data-content="<?php echo $row['pro_detials']?>" width="200px" height="200px" src="<?php echo $row['pro_path'] ?>"></a>
                        <div class="caption">
                            <?php echo $row['pro_name'] . "<br />"; ?> 
                            <?php echo $row['pro_price'] ?><br />
                        </div>
                        <div class="add-more">
                            <a class="btn btn-default btn-block btn-xs" href="det.php?id=<?php echo $row['pro_id']; ?>">
                                عرض التفاصيل
                            </a>
                            <a class="btn btn-primary btn-xs btn-block" href="cart.php?id=<?php echo $row['pro_id'] ?>">
                                <i class="fa fa-plus"></i>
                                اضافة الى سلة الشراء
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
?>

<?php require_once("footer.php"); ?>

