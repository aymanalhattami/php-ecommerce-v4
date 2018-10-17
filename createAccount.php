<?php 
    session_start();
    include "conn.php"; 
?>

<?php 
				
    if(isset($_POST['user_name']) && isset($_POST['last_name']) && isset($_POST['password']) &&  isset($_POST['email']) &&
       isset($_POST['phone']) && isset($_POST['city'])  && isset($_POST['street']))
    {
        $user_name = $_POST['user_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = md5(md5($_POST['password']));
        $phone= $_POST['phone'];
        $city= $_POST['city'];
        $street= $_POST['street'];
        $user_type = 0;

//        if($_POST["submit"] == 'انشاء حساب')
//        {
//        /*------------- FIle Options --------------------*/
//        $user_name_pic = $user_name ;                         // The name of the user 
//        $dir_name = "User_Pic/";    // Make directory for the user name like linux -> in line 36     
//        $name =      $_FILES['pic']['name'];
//        $size =      $_FILES['pic']['size']; // size by bytes
//        $tmp_name =  $_FILES['pic']['tmp_name'];
//        $type =      $_FILES['pic']['type'];
//        $pic_types = array('image/jpeg','image/JPG','image/png');
//        $s = 1000000;
//               
//            if($name == '')
//            {
//                $user_image = "personal/p.png";
//            }else if(!in_array($type ,$pic_types))
//            {
//                echo 'the file is not an image';
//
//            }else if($size > $s)
//            {
//                echo 'file is begger thann '.$s;
//            }
//            else 
//            {
//                mkdir($dir_name.$user_name , '777');
//                move_uploaded_file($tmp_name , $dir_name.$user_name_pic.'/'.$name);  
//                $user_image = $dir_name.$user_name.'/'.$name;
//            }
//
//        }
    /*-----------------------------------------------*/
    
    
    $sql =  "INSERT INTO users (fname ,lname , pass , email , phone , city , street ,  user_type) VALUES 
    ('$user_name', '$last_name' , '$password', '$email', '$phone', '$city', '$street', '$user_type')";
    
    $result = mysqli_query($con , $sql );
    if($result)
    {
        @$_SESSION['sessionname'] = $user_name . "<br />";
        @$_SESSION['sessionpass'] = $password;
        header("Location: index.php");
    }
    else
        echo mysqli_error($con);
            
}
                
                
        
//                  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>انشاء حساب جديد</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body class="signup">

        <div class="container createAcount">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-xs-12">
                    <div class="signup-logo center-block">
                        <a href="index.php"><img src="images/logo/logo.png" title="شعار الموقع" class="center-block" /></a>
                    </div>
                    <div class="signup-form">
                        <h3 class="text-center">انشاء حساب </h3>
                        <hr />
                        <form class="" action="createAccount.php" method="POST" enctype="multipart/form-data">
                            <table class="message-table">
                            <tr>
                                <td><label for="user_name" class="control-label ">الأسم</label></td>
                                <td><input type="text" name="user_name" id="user_name" required class="form-control contact-name short-input" /> </td>
                            </tr>
                            
                            <tr>
                                <td><label for="last_name" class="control-label">اللقب</label></td>
                                <td><input type="text" name="last_name" id="last_name" required class="form-control short-input" /></td>
                            </tr>
                            
                            <tr>
                                <td><label for="email" class="control-label">البريد الاكتروني</label></td>
                                <td><input type="email" name="email" id="email" required class="form-control large-input" /></td>
                            </tr>
                                                        
                            <tr>
                                <td><label for="password" class="control-label">كلمة السر</label></td>
                                <td><input type="password" name="password" id="password" required class="form-control large-input" /></td>
                            </tr>
                                                        
                            <tr>
                                <td><label for="password2" class="control-label ">تأكيد كلمة السر</label></td>
                                <td><input 
                                           data-toggle="passover" title="كلمتا السر غير متاطبقتان ! " data-placement="left"
                                           type="password" 
                                           name="password2" 
                                           id="password2" 
                                           required 
                                           class="form-control large-input" /></td>

                            </tr>

                                                        
                            <tr>
                                
                                <td>
                                    <select name="city" class="form-control city" required >
                                    <option value="" disabled selected class="">المـدينه</option>
                                    <option value="صنعاء" class="">صنعاء</option>
                                    <option value="عدن" class="">عدن</option>
                                    <option value="تعز" class="">تعز</option>
                                    <option value="تعز" class="">الحديدة</option>
                                    <option value="تعز" class="">حضرموت</option>
                                    <option value="تعز" class="">ذمار</option>
                                    <option value="تعز" class="">اب</option>
                                    <option value="تعز" class="">المكلا</option>
                                    <option value="تعز" class="">شبوة</option>
                                    <option value="تعز" class="">حجه</option>
                                    <option value="تعز" class="">مارب</option>
                                    <option value="تعز" class="">عمران</option>
                                    <option value="تعز" class="">الجوف</option>
                                    <option value="تعز" class="">الضالع</option>
                                </select>
                                </td>
                                <td>
                                    <input type="text" name="street" class="form-control street short-input" required placeholder="الشـارع" />
                                </td>
                            </tr>
                                                        
                            <tr>
                                <td><label for="phone" class="control-label">الهـاتف</label></td>
                                <td><input type="tel" name="phone" id="phone" required class="form-control short-input" /></td>
                            </tr>

                            <tr>
                                <td colspan="3"><input class="btn btn-primary btn-block " type="submit" name="submit"  value="انشاء الحساب" /></td>    
                            </tr>
                        </table>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
                        <div class="container">
                            <div class="row text-center">
                            لديد حساب سابقا؟ 
                            <a href="login.php">تسجيل الدخول</a>
                            
                            </div>
                        </div>
        <div class="signup-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        كل الحقوق محفوظة &copy; 2017
                    </div>
                </div>
            </div>
        </div>

        
                <!-- footer section -->
        <div class="footer" style="display:none">
            <div class="container">
                <div class="row">
                    <div class="newsletter-contact">
                        <div class="col-sm-9 col-xs-12">
                            <form class="form-inline" action="" method="" >
                                <input type="email" class="form-control" name="newsletter-field" placeholder ="أدخل بريدك الالكتروني للاشتراك في النشرة البريدية" />
                                <input type="submit" value="اشتراك" class="btn btn-primary"  name="newsletter-submit"/>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <div class="col-sm-3 col-xs-12 footer-for-access">
                            <a href="#"><i class="fa fa-facebook-official pull-left"></i></a>
                            <a href="#"><i class="fa fa-youtube-square pull-left"></i></a>
                            <a href="#"><i class="fa fa-twitter-square pull-left"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="log-menu">
                        <div class="col-lg-4">
                            <ul class="list-unstyled">
                                
                                <li><a class="<?php if(@$pageTitle == 'home') echo 'footer-active'; ?>" href="./">الصفحة الرئيسية</a></li>
                                <li><a class="<?php if(@$pageTitle == 'about') echo 'footer-active'; ?>" href="about.php"> عنا</a></li>
                                <li><a class="<?php if(@$pageTitle == 'contact') echo 'footer-active' ?>" href="contact-us.php" >التواصل </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-unstyled">
                                <li><a class="<?php if(@$subPageTitle == 'stories') echo 'footer-active'; ?>" href="products.php?id_cat=1">قصص </a></li>
                                <li><a class="<?php if(@$subPageTitle == 'watches') echo 'footer-active'; ?>" href="products.php?id_cat=2" >ساعات </a></li>
                                <li><a class="<?php if(@$subPageTitle == 'plants') echo 'footer-active'; ?>" href="products.php?id_cat=3">نباتات </a></li>products.php?id_cat=3
                            </ul>
                        </div>
                        <div class="col-lg-4 text-center">
                            <img src="images/logo/logo.png" alt="الشعار" class="logo" />
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
                    <div class="copy">
                        <div class="col-xs-12 text-center">
                            كل الحقوق محفوظة &copy; 2017
                        </div>
                        <div class="clearfix"></div>
                    </div>
        </div>
        
        
        <script src="js/jquery-3.0.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script src="js/plugin.js"></script>
    </body>
</html>
        