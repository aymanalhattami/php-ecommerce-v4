<?php 
    session_start();
?>

<!DOCTYPE html>
<html dir="rtl">
    <head>
        <title><?php echo $pageTitle ?> </title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="" class="style1">
        
    </head>
    <body>
        <!-- header section -->
        
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 text-center">
                        <div class="logo">
                            <a href="./"><img src="images/logo/logo.png" alt="شعار الموقع" width="200" /></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="row">
                            <div class="account-search">
                                <?php 
                                    if(isset($_SESSION["sessionname"]))
                                    {
                                ?>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <a href="#" title="حسابي"   id="">   
                                        <span class="glyphicon glyphicon-user"></span>
                                        حسابي
                                    </a>

                                    <span>&#124;</span>
                                    
                                    <a href="#"  title="انشاء حساب" >   أخر المنتجات </a>
                                    
                                    <span>&#124;</span>
                                    
                                    <a   href="#" title="تسجيل الدخول" >للأعلان معنـا</a>
                                    
                                    <span>&#124;</span>
                                    
                                    <a href="logout.php" title="تسجيل الخروج" class="login-flag ">تسجيل الخروج </a>
                                </div> 
                                <?php } else { ?>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                    <a href="createAccount.php"  title="انشاء حساب" >   إنشاء حساب </a>
                                    
                                    <span>&#124;</span>
                                    <a  class="login-flag"  href="login.php?loc=<?php echo $_SERVER['REQUEST_URI'] ?>" title="تسجيل الدخول" >تسجيل الدخول</a>
                                    <span>&#124;</span>
                                    <a href="#"  title="انشاء حساب" >   أخر المنتجات </a>
                                    <span>&#124;</span>
                                    <a   href="#" title="تسجيل الدخول" >للأعلان معنـا</a>
                                    
                                </div>
                                <?php } ?>
                                <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                                    <form action="search.php" method="GET">
                                        <div class="form-group-sm search-parent">
                                            <input class="form-control pull-left input-search" type="search" placeholder="بحث باستخدام الـسعر او اسم المنتج ... " name="search"/>
                                            <input class="search" type="image" src="images/Search_48px.png" />
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <a href="cart.php" title="سلة الشراء" class="cart">
                                    <span>
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <?php
                                            if(@$_SESSION['total_products'] == 0)
                                                echo "(لم تقم باختيار اي منتج)";
                                            else if(@$_SESSION['total_products'] == 1)
                                            {
                                                echo "(" ;
                                                echo  $_SESSION['total_products'] . " منتج"  ;
                                                echo  ")";
                                            }
                                            else if(@$_SESSION['total_products'] >= 2 && $_SESSION['total_products'] <= 10)
                                            {
                                                echo "(" ;
                                                echo  $_SESSION['total_products'] . " منتجات"  ;
                                                echo  ")";
                                            }
                                            else if(@$_SESSION['total_products'] >= 11)
                                            {
                                                echo "(" ;
                                                echo  $_SESSION['total_products'] . " منتج" ;
                                                echo  ")";
                                            }
                                        ?>
                                        
                                    </span>
                                    <span><?php echo ": " . '"' . @$_SESSION['total_price']; ?> ريال</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                <?php include "navbar.php"; ?>
                </div>
            </div>
        </div>