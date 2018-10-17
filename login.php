<?php 
    ob_start();
    session_start();
    require("conn.php");

    @$username = addslashes(strip_tags($_POST["username"]));
    @$password = md5(md5(stripslashes($_POST["password"])));

    $notFount   = "";
    $incorrect  = "";
    $location   = "";
    $page       = "";
    $temploc    = "";
    if(isset($_GET['loc'])){
        $location = $_GET['loc'];
        $location_array = explode('/',$location);
        $page = end($location_array);
    }

    if(isset($_POST['sub2']))
    {
        if(isset($username) && isset($password))
        {
            $temploc = $_GET['tempLocation'];

            $sql = "select email from users where email='".$username."' and pass ='".$password."'";
            $result = mysqli_query($con,$sql);

            if(@mysqli_num_rows($result) > 0)
            {

                while($row = mysqli_fetch_assoc($result))
                {
                    $uname = stripslashes($row['email']);
                    $pass =  $row['pass'];
                    
                    $_SESSION['sessionname'] = $uname;
                    $_SESSION['sessionpass'] = $pass;
                    header('location:'.$temploc.'');
//                                echo ;

                }
            
            }else
                $notFount =  "المستخدم غير موجود ";
        }
    }
        
?>


<!DOCTYPE html>
<html>
    <head>
        <title>تسجيل الدخول</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body class="login-body">
        <div style="color:#fff" >hi</div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="login-image">
                        <?php
                            if(!empty($notFount) || (!empty($incorrect)))
                            {
                        ?>
                                <div class="alert alert-danger alert-dimissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <?php if(!empty($notFount)) echo $notFount . "<br />" ; ?>
                                    <?php echo $incorrect; ?>
                                </div>
                        <?php
                            }
                        ?>
                        <a href="./"><img src="images/logo/logo.png" title="شعار الموقع" class="center-block" /></a>
                    </div>
                    <div class="login-form col-xs-12">
                        <h3>تسجيل الدخول</h3>
                        <hr />
                        <form class="" action="login.php?tempLocation=<?php echo $page ?>" method="POST" enctype="multipart/form-data" name="form-signin">
                            <div class="form-group has-feedback">
                                <label class=" control-label">الإيميل</label>
                                <input class="form-control" type="email" name="username" required />
                                <span class="glyphicon glyphicon-star form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">كلمة السر</label>
                                <input class="form-control" type="password" name="password" required />
                                <span class="glyphicon glyphicon-star form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary pull-left btn-block" type="submit" name="sub2" value="تسجيل الدخول">
                            </div>
                        </form>
                        <div class="newAccount text-center">
                            <p class="lead">ــــــــــــــــــــــــ حساب جديد؟ ــــــــــــــــــــــــ</p>
                            <a href="createAccount.php" title="انشاء حساب" class="btn btn-primary btn-block">انشاء حساب جديد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="login-footer">
            <div class="container">
                <div class="col-xs-12 text-center">
                     كل الحقوق محفوظة &copy; 2017
                </div>
            </div>
        </div>

        <script src="js/jquery-3.0.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugin.js"></script>
    </body>
</html>

<?php 
    ob_end_flush(); 
?>