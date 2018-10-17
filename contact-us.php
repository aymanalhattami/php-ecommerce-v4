<?php
    if(isset($_POST['sub']))
    {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $thank_msg = "";
        $error_msg = "";
        
        if(empty($name) || empty($subject) || empty($email) || empty($message))  
        {
            $empty_msg = "يجب ادخال قيم لكل الحقول";
        }
        else
        {
            require("conn.php");
            $sql="INSERT INTO contact            (cont_name,cont_email,cont_subject,cont_message)values('".$name."','".$email."','".$subject."','".$message."')";
            $result = mysqli_query($con,$sql);
                if($result)
                    $thank_msg =  "شكرا";
                else
                    $error_msg = "We didn't receive your request tray agin later ";
        }
    }

?>

<?php 
    $pageTitle = "contact";
    include "header-before.php";
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">الرئيسية</a></li>
        <li>التواصل</li>
    </ol>
</div>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="contact-form">

                    <form method="post" action="contact-us.php">
                        <table class="message-table">
                            <tr>
                                <td><label for="name" class="control-label">الاسم</label></td>
                                <td><input type="text" name="name" id="name" required class="form-control contact-name " /> </td>
                            </tr>
                            
                            <tr>
                                <td><label for="subject" class="control-label">الموضوع</label></td>
                                <td><input type="text" name="subject" id="subject" required class="form-control" /></td>
                            </tr>
                            
                            <tr>
                                <td><label for="email" class="control-label">البريد الاكتروني</label></td>
                                <td><input type="email" name="email" id="email" required class="form-control" /></td>
                            </tr>
                            
                        </table>

                            <table class="message-form">
                                <h5>الـــرسالة</h5>
                                
                                <tr>
                                    <td class="message"><textarea  name="message" id="message" cols="44" rows="8" required class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="sub" value="ارسال" class="btn btn-primary btn-block" /></td>
                                </tr>
                            </table>
                    </form>
                </div>
                
            </div>    
        </div>
    </div>
</div>


<?php
    include 'footer.php';
?>