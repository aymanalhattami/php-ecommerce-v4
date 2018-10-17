
<!-- navbar section -->
        <div class="navbar-container">
            <div class="container">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <!--a class="navbar-brand" href="#">Brand</a-->
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        
                        <li class="<?php if(@$pageTitle == "home") echo "active"; ?>">
                            <a href="./">
                                 الصفحة الرئيسية <i class="fa fa-home <?php if($pageTitle == "home"){ echo 'acitveI';} ?>"></i>
                            </a>
                        </li>
                          
                        <li class="<?php if(@$subPageTitle == 'watches') echo 'active'; ?>">
                            <a tabindex="-1" href="products.php?id_cat=2" class="<?php if($pageTitle == "watches"){ echo 'acitveI';} ?>">
                                ساعــات <i class="fa fa-clock-o <?php if($pageTitle == "watches"){ echo 'acitveI';} ?>"></i>
                            </a>
                          </li>
                          
                        <li class="<?php if(@$subPageTitle == 'stories') echo 'active'; ?>">
                            <a tabindex="-1" href="products.php?id_cat=1" class="<?php if($pageTitle == "stories"){ echo 'acitveI';} ?>">
                                قــصص <i class="fa fa-book <?php if($pageTitle == "stories"){ echo 'acitveI';} ?>"></i>
                            </a>
                        </li>
                          
                        <li class="<?php if(@$subPageTitle == 'plants') echo 'active'; ?>">
                            <a tabindex="-1" href="products.php?id_cat=3" class="<?php if($pageTitle == "plants"){ echo 'acitveI';} ?>">
                                نباتات <i class="fa fa-tree <?php if($pageTitle == "plants"){ echo 'acitveI';} ?>"></i>
                            </a>
                        </li>
                          
                        <li class="<?php if(@$pageTitle == "about") echo "active"; ?>">
                            <a href="about.php">
                                عنا <i class="fa fa-info-circle <?php if($pageTitle == "about"){ echo 'acitveI';} ?>"></i>
                            </a></li>
                          
                        <li class="<?php if(@$pageTitle == "contact") echo "active"; ?>">
                            <a href="contact-us.php">
                                التواصل <i class="fa fa-phone <?php if($pageTitle == "contact"){ echo 'acitveI';} ?>"></i>
                            </a>
                        </li>
                          
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
        </div>