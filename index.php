<?php
    $pageTitle = "home";
    include "header-before.php";
?>
        

    <div class="container caro">
        <div class="row caro-index ">
            <div class="container">
                <div class="col-md-3 adv-parent">
                    <div class="adv">
                        <img class="img-responsive adv-img" src="images/adv/ad.png">
                    </div>
                </div>
                <div class="col-md-9 hidden-xs">
                    <!-- carousel (slide show) section -->
                    <div class="carousel-container">
<!--                        <div class="container">-->
                            <div class="stop-carousel" data-toggle="popover" data-content="لايقاف السلايدر (الصور المتحركة) ضع المؤشر فوق الصورة. وعند ابعاد المؤشر فان الصور تتحرك تلقائيا." data-placement="top">
                               <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
                                <!-- Indicators -->
                                <ol class="carousel-indicators" >
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/carousel/carousel01.jpg" alt="...">
                                        <div class="carousel-caption">
                                             قصص جريمية بوليسية ذات طابع درامي رائع
                                            قصص درامية ومغامرات من افضل  قصص المغامرات  
                                            قصص لعشاق الرعب والاثارة باللغة الانجليزية
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/carousel/carousel02.jpg" alt="...">
                                        <div class="carousel-caption">
                                            ساعات ذو جودة عالية وبطارية تدوم لفترة طويلة ومضادة للماءوبسعر جيد ومعقول
                                            صناعة يابانية ولا تزال بحالة جيدة
انيقة وصاحبة فخامة وذات ذوق
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/carousel/carousel03.jpg" alt="...">
                                        
                                    </div>
                                </div>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
<!--                        </div>  -->
                    </div>
                
                </div>
            </div>
        </div>
</div>

<div class="container">
    <hr>
</div>
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center after-categories">
                        <h3>الأصـــناف</h3>
                    </div>
                </div>
            </div>
        </div>


        
        <!-- content(categories) section ------------------------------------------------------------- -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img class="img-responsive carousel-index" src="images/categories/watch.jpg" alt="watch picture" />
                            <div class="over text-center">
                                <div class="over-content">
                                    <p> 
                                           ساعات روليكس أصلية سويسرية ذات جودة عالية ومن افضل الماركات العالمية 
                                            
                                    </p>
                                    <a href="products.php?id_cat=2"> <button class="btn btn-primary btn-sm">عرض الاصناف </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img class="img-responsive carousel-index" src="images/categories/stories.jpg" alt="stores picture" />
                            <div class="over text-center">
                                <div class="over-content">
                                    <p> 
                                            قصص خيال علمي تحكي عن الفضاء وعن المخلوقات الفضائية 
تعتبر من القصص المميزة لعشاق الخيال العلمي
                                    </p>
                                    <a href="products.php?id_cat=1"> <button class="btn btn-primary btn-sm">عرض الاصناف </button></a>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img class="img-responsive carousel-index" src="images/categories/plants.jpg" alt="plants picture" />
                            <div class="over text-center">
                                <div class="over-content">
                                    <p> 
                                            
                                    </p>
                                    <a href="products.php?id_cat=3"> <button class="btn btn-primary btn-sm">عرض الاصناف </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
    include "footer.php";
?>