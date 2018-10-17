        <!-- footer section -->
        <div class="footer">
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
                                <li><a class="<?php if(@$subPageTitle == 'plants') echo 'footer-active'; ?>" href="products.php?id_cat=3">نباتات </a></li>
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