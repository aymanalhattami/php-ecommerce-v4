/*global $, console */
$(document).ready(function () {
    'use strict';
	if ($(".footer").position().top <= 400) {
		$(".footer").css({
			position: "fixed",
			top: "468px"
		});
	}


    
    /*Global Variable */
    var temp,
        userName,
        userLname,
        location1,
        dateDeleve,
        isEmpty,
        inputArray = new Array();
    

    
	/* set the time the image will appear in the carousel */
	$('.carousel').carousel({
		interval: 0
	});

    
    

	/* stop the slideshow (carousel) when click on the class(carousel-indicator) */
	$('.carousel-indicators li').click(function () {
		$('.item').stop();
	});



	/* initailize all popovers */
	$('[data-toggle="popover"]').hover(function () {
        $(this).popover('show');
    }, function () {
        $(this).popover('hide');
    });

    

	/* initailize all popovers */
    $(function () {
        $('[data-toggle="popover2"]').popover('show');
    });

    

    // Show Cart Modal When Buy A product 
    $('.cart-feedback').on('click', function (e) {
        e.preventDefault();
        $('#cartModal').modal('show').find('.modal-body').load($(this).attr('href'));
        
    });
    
    

    
    //Update the page when the Modal hsd finished hide 
    $('#cartModal').on('hidden.bs.modal', function () {
        location.reload();
    });

    
    //insure login before go to the checkout page 
    $('a[href="checkout.php"]').on('click', function (e) {
        if ($('a.login-flag').text() === "تسجيل الدخول") {
            e.preventDefault();
            if ($(this).hasClass('modal-anchore')) {
                window.location.replace('login.php');
            } else {
                $('#checkOutModal').modal('show');
            }
        } else {
            return true;
        }
    });
    
    
    // Change The Big Pic With the thumbnail in Detail Page
    $('.bigimage').attr('src', $('.smallimage:eq(0)').attr('src'));

    
    $('.smallimage').on('click', function () {
        $('.smallimage').removeClass('smallImageActive');
        $(this).addClass('smallImageActive');

        temp = $(this).attr('src');
        $('.bigimage').fadeOut('2s', function () {
            $(this).attr('src', temp);
        }).fadeIn('2');
        
    });
    
    
    // Add Active Class to the first small image win page load  smallImageActive
    $('.smallimage').first().addClass('smallImageActive');
    

    // Add the Products to checkout page
    $('.cart-body').load('cart2.php');
    
    
    $('.second-button').on('click', function () {
        $('.first-button').fadeIn();
        $('.steps button:first').removeClass('setps_opaceity');
        $('.steps button:last').addClass('setps_opaceity');
    });
    

    // return to the index after buying process compleation 
    $('#thansModal').on('hidden.bs.modal', function () {
        location.replace('destroy.php');
    });

    
    // Change Style of the website
    $('.fa-gear').on('click', function () {
        $(this).siblings().slideToggle();
    });
    
    $('.color-option li').on('click', function () {
        $('[class="style1"]').attr('href', $(this).attr('value'));

    });
    
    
//     Information Windwos
    setTimeout(function () {
        $('.informations').fadeIn('5');
    }, 3000);
    
    
    // Close Information Windwos
    $('.closing-info').on('click', function () {
        $('.informations').fadeOut();
    });
    
    
    
    // Insur that the fileds is not empty 
    function isTrue() {
        $('.first-button').removeClass('disabled').css('pointerEvents', 'auto');
        $('[data-toggle="popover2"]').popover('hide');
        
    }
    
    function isfalse() {
        $('.first-button').addClass('disabled').css('pointerEvents', 'none');
        $('[data-toggle="popover2"]').popover('show');
    }
    
    function emptyInputs() {
        
        inputArray.length = 0;
        
        userName = $('input[name="userName"]').val();
        userLname = $('input[name="userLName"]').val();
        location1 = $('input[name="Location1"]').val();
        dateDeleve = $('input[name="dateDel"]').val();

        inputArray.push(userName);
        inputArray.push(userLname);
        inputArray.push(location1);
        inputArray.push(dateDeleve);

        for (var valueElemtn in inputArray) {
            if(inputArray[valueElemtn] !== ''){
                isEmpty = false;
            } else {
                isEmpty = true;
                break;
            }
        }
        
        if(!isEmpty){
            isTrue();
        } else {
            isfalse();
        }
    }
    
    
    $('#chekForm  input').on('blur', function () {
        emptyInputs();
    });
    
    
    
    
    
    /* ِAdd the information to the summary div */
    
    function addInformation() {
        $('.fullName').text(inputArray[0] + ' ' + inputArray[1]); 
        $('.firstLocation').text(inputArray[2]); 
        $('.secondLocation').text($('input[name="Location22"]').val()); 
        $('.dateDelev').text(inputArray[3]); 
        
    }
    
    $('.first-button').on('click', function () {
        $('.steps button:last').removeClass('setps_opaceity');
        $('.steps button:first').addClass('setps_opaceity');
        $(this).fadeOut();
        addInformation();
    });
    
    
    
    /* Add product Segment */
    
    function hideProduct() {
       $('.fa-plus-square').attr('class', 'fa fa-minus-square fa-2x');
       $('.add-more span').text('إخفــاء عرض المنتجات');
        
    }
    
    function showProduct() {
       $('.fa-minus-square').attr('class', 'fa fa-plus-square fa-2x');
       $('.add-more span').text('عرض منتجات مختلفة');
    }
    
    
    $('.addMore_product').on('click', function () {
        if($('.add-more span').text() == 'عرض منتجات مختلفة') {
            hideProduct();
        } else {
            showProduct();
        }
        
        $('.more-product').slideToggle(1000);
        $('.more-product .container').animate({
            left: '0'
        },1000)
        
    });
    
    
    /* Insuring empty date in buy button */
    /* buy  popovers */
    $(function () {
        $('[data-toggle="tooltip"]').tooltip('hide');
    })
    
    $('.buing').on('click', function () {
        
            $('#thansModal').modal('show');
    });
    
 
    

    
    
    $('.carousel-modal').click(function() {

		var imgSRC = $(this).prop("src");
		var new_imgSRC = imgSRC.slice(31);
		//$('.carousel-1').prop("src", imgSRC);

		var array_src_stories 	= ['products/stories/S1.jpg', 'products/stories/S2.jpg', 'products/stories/S3.jpg', 'products/stories/S4.jpg', 'products/stories/S5.jpg', 'products/stories/S6.jpg'];
		var array_src_watches 	= ['products/watches/W1.jpg', 'products/watches/W2.jpg', 'products/watches/W3.jpg', 'products/watches/W4.jpg', 'products/watches/W5.jpg', 'products/watches/W6.jpg'];
		var array_src_plants  	= ['products/plants/V1.jpg', 'products/plants/V2.jpg', 'products/plants/V3.jpg', 'products/plants/V4.jpg', 'products/plants/V5.jpg', 'products/plants/V6.jpg'];

		var result_stories = jQuery.inArray(new_imgSRC, array_src_stories),
			result_watches = jQuery.inArray(new_imgSRC, array_src_watches),
			result_plant   = jQuery.inArray(new_imgSRC, array_src_plants);
		
		if(result_plant != -1)
		{
			if(new_imgSRC == array_src_plants[0])
			{
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_plants[1]);
				$('.carousel-3').prop("src", array_src_plants[2]);
				$('.carousel-4').prop("src", array_src_plants[3]);
				$('.carousel-5').prop("src", array_src_plants[4]);
				$('.carousel-6').prop("src", array_src_plants[5]);
			}

			if(new_imgSRC == array_src_plants[1])
			{
				$('.carousel-6').prop("src", array_src_plants[0]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_plants[2]);
				$('.carousel-3').prop("src", array_src_plants[3]);
				$('.carousel-4').prop("src", array_src_plants[4]);
				$('.carousel-5').prop("src", array_src_plants[5]);
			}

			if(new_imgSRC == array_src_plants[2])
			{
				$('.carousel-5').prop("src", array_src_plants[0]);
				$('.carousel-6').prop("src", array_src_plants[1]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_plants[3]);
				$('.carousel-3').prop("src", array_src_plants[4]);
				$('.carousel-4').prop("src", array_src_plants[5]);
			}

			if(new_imgSRC == array_src_plants[3])
			{
				$('.carousel-4').prop("src", array_src_plants[0]);
				$('.carousel-5').prop("src", array_src_plants[1]);
				$('.carousel-6').prop("src", array_src_plants[2]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_plants[4]);
				$('.carousel-3').prop("src", array_src_plants[5]);
			}

			if(new_imgSRC == array_src_plants[4])
			{
				$('.carousel-3').prop("src", array_src_plants[0]);
				$('.carousel-4').prop("src", array_src_plants[1]);
				$('.carousel-5').prop("src", array_src_plants[2]);
				$('.carousel-6').prop("src", array_src_plants[3]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_plants[5]);
			}

			if(new_imgSRC == array_src_plants[5])
			{
				$('.carousel-2').prop("src", array_src_plants[0]);
				$('.carousel-3').prop("src", array_src_plants[1]);
				$('.carousel-4').prop("src", array_src_plants[2]);
				$('.carousel-5').prop("src", array_src_plants[3]);
				$('.carousel-6').prop("src", array_src_plants[4]);
				$('.carousel-1').prop("src", imgSRC);
			}
		}

		if(result_watches != -1)
		{
			if(new_imgSRC == array_src_watches[0])
			{
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_watches[1]);
				$('.carousel-3').prop("src", array_src_watches[2]);
				$('.carousel-4').prop("src", array_src_watches[3]);
				$('.carousel-5').prop("src", array_src_watches[4]);
				$('.carousel-6').prop("src", array_src_watches[5]);
			}

			if(new_imgSRC == array_src_watches[1])
			{
				$('.carousel-6').prop("src", array_src_watches[0]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_watches[2]);
				$('.carousel-3').prop("src", array_src_watches[3]);
				$('.carousel-4').prop("src", array_src_watches[4]);
				$('.carousel-5').prop("src", array_src_watches[5]);
			}

			if(new_imgSRC == array_src_watches[2])
			{
				$('.carousel-5').prop("src", array_src_watches[0]);
				$('.carousel-6').prop("src", array_src_watches[1]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_watches[3]);
				$('.carousel-3').prop("src", array_src_watches[4]);
				$('.carousel-4').prop("src", array_src_watches[5]);
			}

			if(new_imgSRC == array_src_watches[3])
			{
				$('.carousel-4').prop("src", array_src_watches[0]);
				$('.carousel-5').prop("src", array_src_watches[1]);
				$('.carousel-6').prop("src", array_src_watches[2]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_watches[4]);
				$('.carousel-3').prop("src", array_src_watches[5]);
			}

			if(new_imgSRC == array_src_watches[4])
			{
				$('.carousel-3').prop("src", array_src_watches[0]);
				$('.carousel-4').prop("src", array_src_watches[1]);
				$('.carousel-5').prop("src", array_src_watches[2]);
				$('.carousel-6').prop("src", array_src_watches[3]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_watches[5]);
			}

			if(new_imgSRC == array_src_plants[5])
			{
				$('.carousel-2').prop("src", array_src_watches[0]);
				$('.carousel-3').prop("src", array_src_watches[1]);
				$('.carousel-4').prop("src", array_src_watches[2]);
				$('.carousel-5').prop("src", array_src_watches[3]);
				$('.carousel-6').prop("src", array_src_watches[4]);
				$('.carousel-1').prop("src", imgSRC);
			}
		}

		if(result_stories != -1)
		{
			if(new_imgSRC == array_src_stories[0])
			{
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_stories[1]);
				$('.carousel-3').prop("src", array_src_stories[2]);
				$('.carousel-4').prop("src", array_src_stories[3]);
				$('.carousel-5').prop("src", array_src_stories[4]);
				$('.carousel-6').prop("src", array_src_stories[5]);
			}

			if(new_imgSRC == array_src_stories[1])
			{
				$('.carousel-6').prop("src", array_src_stories[0]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_stories[2]);
				$('.carousel-3').prop("src", array_src_stories[3]);
				$('.carousel-4').prop("src", array_src_stories[4]);
				$('.carousel-5').prop("src", array_src_stories[5]);
			}

			if(new_imgSRC == array_src_stories[2])
			{
				$('.carousel-5').prop("src", array_src_stories[0]);
				$('.carousel-6').prop("src", array_src_stories[1]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_stories[3]);
				$('.carousel-3').prop("src", array_src_stories[4]);
				$('.carousel-4').prop("src", array_src_stories[5]);
			}

			if(new_imgSRC == array_src_stories[3])
			{
				$('.carousel-4').prop("src", array_src_stories[0]);
				$('.carousel-5').prop("src", array_src_stories[1]);
				$('.carousel-6').prop("src", array_src_stories[2]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_stories[4]);
				$('.carousel-3').prop("src", array_src_stories[5]);
			}

			if(new_imgSRC == array_src_stories[4])
			{
				$('.carousel-3').prop("src", array_src_stories[0]);
				$('.carousel-4').prop("src", array_src_stories[1]);
				$('.carousel-5').prop("src", array_src_stories[2]);
				$('.carousel-6').prop("src", array_src_stories[3]);
				$('.carousel-1').prop("src", imgSRC);
				$('.carousel-2').prop("src", array_src_stories[5]);
			}

			if(new_imgSRC == array_src_stories[5])
			{
				$('.carousel-2').prop("src", array_src_stories[0]);
				$('.carousel-3').prop("src", array_src_stories[1]);
				$('.carousel-4').prop("src", array_src_stories[2]);
				$('.carousel-5').prop("src", array_src_stories[3]);
				$('.carousel-6').prop("src", array_src_stories[4]);
				$('.carousel-1').prop("src", imgSRC);
			}
		}
	});
    
    
    
    
    

            /* light box options */ 
            $('.any .carousel').carousel({
		          interval: 0
                });
    
            $('#carousel-example-06').on('slid.bs.carousel', function () {
                lightBox()
            });

            function lightBox() {
                if($('.light-box :first-child').hasClass('active')){
                    $('a[data-slide="prev"]').fadeOut();
                    $('a[data-slide="next"]').fadeIn();
                } else if($('.light-box :last-child').hasClass('active')) {
                    $('a[data-slide="next"]').fadeOut();
                    $('a[data-slide="prev"]').fadeIn();
                } else {
                    $('a[data-slide="next"]').fadeIn();
                    $('a[data-slide="prev"]').fadeIn();
                }
            }
    
        lightBox();
    
    
    /* Validation of the passwrods */
    
    	/* initailize all popovers */
$(function () {
  $('[data-toggle="passover"]').tooltip('hide');
});    
    


    var firstpass,
        lastpass;
    
    function showpass() {


        firstpass = $('input[name="password"]').val();
        lastpass = $('input[name="password2"]').val();

            if(firstpass == lastpass){
                $('[data-toggle="passover"]').tooltip('hide');
            } else 
                {
                    $('[data-toggle="passover"]').tooltip('show');
                }

    }
    
    

$('input[name="password2"]').on('blur', function () {
    
    showpass();
});

    
    
    $('input[name="password2"]').hover(showpass(),showpass());

    
    
    
/* Light Box */    
    var caroTemp;
    $('.carousel-modal').on('click', function () {
        caroTemp = $(this).parent().parent().find('.idForLight').text();
        caroTemp = caroTemp - 1;
        $('.light-box .item:eq('+ caroTemp +')').addClass('active').siblings().removeClass('active');
        $('.carousel-indicators li:eq('+ caroTemp +')').addClass('active').siblings().removeClass('active');
        lightBox();
    });
    
               
    
   $('.carousel-caption-close').on('click', function () {
       $(this).remove();
   });
    
    
    
    
    
    // Delevery Date
      
    $('input[name="dateDel"]').on('blur', function () {
        if($('input[name="dateDel"]').val() !==''){
            return true;
        } else {
            $('[data-toggle="tooltip"]').tooltip('show');
        }
    });
    
    
    // Radio Shipping functionalty 
    var firstTotal,
        allTotal,
        shipTotal;
    $('input[type="radio"]').on('click', function  () {

        

        firstTotal = parseInt($('.firstTotal').text());
        shipTotal  = parseInt($(this).val());
        allTotal = firstTotal + shipTotal;
        $('.allTotal').text(allTotal);
        
        if($(this).val() == 0){
            $('.shippTotal').text('مجاناً');
        } else {
            $('.shippTotal').text($(this).val()+ ' ريال');
        }
        
    });
    
});