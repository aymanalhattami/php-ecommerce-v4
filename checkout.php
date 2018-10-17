<?php
	$pageTitle = "products";
    include 'header-before.php';
    include 'conn.php';
    
?>
	
	<div class="checkout-breadcurmb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">الصفحة الرئيسية</a></li>
						<li>صفحة الدفع</li>
					</ol>
				</div>
			</div>
		</div>	
	</div>


<!-- Modal ------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="thansModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">  تمـت العمــلية  بنجاح </h4>
      </div>
      <div class="modal-body text-center">
          <h4>نشــكركم لإختياركم موقع </h4>
          <div class="img-cen">
            <img src="images/logo/logo.png">
          </div>
          <h5>مع موقع ســـلعة الأنــاقة والعلم بين يديك &nbsp; <i class="fa fa-angellist"></i> </h5>
      </div>
      <div class="modal-footer cart-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">العــودة لشراء منتجات جديده</button>
      </div>
    </div>
  </div>
</div>

<!---------------------------------------------------------------------------------------------------------------->
<?php 
$userName       = '';
$userLast       = '';
$userLocation   = '';



?>

     <!-- carousel (slide show) section -->
        <div class="carousel-container chek">
                        <div class="center-block steps">
                            <button class="btn btn-primary">1</button>
                            <button class="btn btn-primary setps_opaceity">2</button>
                        </div>
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="0" >
                    <!-- Indicators -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action="index.php" id="chekForm" method="post">
                                        <h5 class="bolder-head">معـلومات الشـحن</h5>    
                                        <table class="table-chek">
                                            <tr>
                                                <td><label for="userName">الاسم</label></td>
                                                <td><input type="text" id="userName" class="form-control" required name="userName"> </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><label for="userLName">اللقب</label> </td>
                                                <td><input type="text" class="form-control" id="userLname"  name="userLName"> </td>
                                            </tr>
                                            <tr>
                                                <td><label for="location">العنــوان 1</label> </td>
                                                <td><input type="text" class="form-control" id="location" name="Location1"> </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><label for="location2">العنــوان 2</label> </td>
                                                <td><input type="text" class="form-control" id="location2" name="Location22"> </td>
                                                <td><span>[ إختيـاري ]</span></td>
                                            </tr>
                                        </table>
                                        
                                        <table>
                                            <tr>
                                                <td><h5 class="bolder-head">اترك انــطباعاً</h5></td>
                                            </tr>
                                            <tr>
                                                <td><textarea rows="8" class=" form-control textarea1"></textarea></td>
                                                <td><span class="optional">[ إختيـاري ]</span></td>
                                            </tr>
                                        </table>
                                        
                                        <table>
                                            <tr>
                                                <td><h5 class="bolder-head">طريــقة الشحن</h5></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="list-unstyled">
                                                        <li><input type="radio" value="0" name="ship" checked>  <span>خدمة التوصيل الخاصة بالموقع (3 - ايام ) مجانـاً </span> </li>
                                                        <li><input type="radio" value="300" name="ship">  <span>مكـتب توصيل راحه (1 خدمه) 300ر.ي </span> </li>
                                                        <li><input type="radio" value="250" name="ship">  <span>مكاتب التوصيل الفرعية (1 خدمه ) 250 ر.ي</span> </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <div>
                                            <h5 class="bolder-head">تـــاريخ التوصيل</h5>
                                            <input data-toggle="tooltip"
                                                   title="يجب أن لايكون حقل التاريخ فارغاً ! "
                                                   data-placement="left"
                                                   type="date"
                                                   name="dateDel">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6 here">
                                    <div class="cart-body"></div>
                                </div>

                                <div class="col-sm-4">
                                    <hr>
                                    <table class="table-chek">
                                        <tr>
                                            <td><label for="shipping" style="font-weight:bold">كوبون الخصم</label></td>
                                            <td><input type="text" id="shipping" class="form-control"/></td>
                                        </tr>
                                    </table>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row "> 
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3 class="fullName">عمار النويره</h3>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <span class="firstLocation">العـنوان الاول</span>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <span class="secondLocation">العـنوان الثاني</span>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <span><?php ?> </span>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <span class="dateDelev">تاريخ التوصيل </span>
                                        </div>
                                    </div>
                                    <h5 class="bolder-head">اجمــالي الفــاتوره</h5>
                                    <table class="table-chek">
                                        <tr>
                                            <td>المجمــوع</td>
                                            <td><span class="total"><?php echo $_SESSION['total_price']?></span><span>&nbsp;ر.ي</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>تكــلفة الشحن</td>
                                            <td><span class="ship">300</span><span>&nbsp;&nbsp; ر.ي</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>الاجمـــالي</td>
                                            <td><span class="allTotal">1200</span><span> &nbsp; ر.ي</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-success buing"> شحن إلى هذا العنـوان </button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="" class="btn btn-info second-button" data-target="#carousel-example-generic" data-slide-to="0">تعديل</a></td>
                                            <td><a href="" class="btn btn-danger">الغـاء</a></td>

                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="center-block button-steps">

                            
                            <button
                                    data-toggle="popover2" 
                                    data-placement="top" 
                                    data-content="سيتفعل الزر الذي يقوم بنقلك للخطوه الاخيره من عملية الشراء بعد اكمال تعبئه الجقول المطلوبه"
                                    class="btn btn-primary first-button disabled"
                                    data-target="#carousel-example-generic"
                                    data-slide-to="1">
                                تأكيــد الشراء &nbsp; <i class="fa fa-chevron-left"> </i>
                            </button>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
	include 'footer.php';
?>