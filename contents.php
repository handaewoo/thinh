<!DOCTYPE html>
<!-- saved from url=(0047)http://www.kconcept.vn/project-single.php?id=12 -->
<html lang="en" class="" data-ks-initialised="true" data-ks-history-pushed="true" id="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--=============== basic  ===============-->
        
        <title>DTARCHITECTS.VN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!--=============== css  ===============-->	
		<link href="./data/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="./data/reset.css">
        <link type="text/css" rel="stylesheet" href="./data/plugins.css">
        <link type="text/css" rel="stylesheet" href="./data/style.css">
        <link type="text/css" rel="stylesheet" href="./data/yourstyle.css">
		<link type="text/css" rel="stylesheet" href="./data/huy.css">
        <!--=============== favicons ===============-->

		<script type="text/javascript" charset="UTF-8" src="./data/common.js.download"></script>
		<script type="text/javascript" charset="UTF-8" src="./data/util.js.download"></script>
	</head>
    <body class="myBody" id="myBody" style="background: rgb(255, 255, 255);">
	
        <div class="loader" style="display: none;">
            <div class="tm-loader">
                <div id="circle"></div>
            </div>
        </div>
        <!--================= main start ================-->
        <div id="main" style="opacity: 1;">
            <!--=============== header ===============-->
            <header class="" style="top: 0px; bottom: 0px;">
				<div class="logo-holder">
                   <a href="./index.php"><img src="./data/logo_.png" height="50" style="float: left;padding-right: 10px;"> </a>
                </div>
                <!-- Nav button-->
                <div class="nav-button" onclick="return true">
                    <span class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                </div>
                <!-- Nav button end -->
                <!-- Logo--> 
                
                <!-- Logo  end--> 
                <!-- Header  title --> 
			
				<div class="header-title">
				<?php
					$id = $_GET['id'];
					$dir = 'images';
					$folders = scandir($dir, 1);	
					if ($id < sizeof($folders))
					{
						echo '<h2 style="font-family: Calibri;">' . $folders[$id] . '</h2>' ; 
					}					
				?>
                </div>
                <!-- Header  title  end-->
						
            </header>
            <!-- Header   end-->            <!--=============== wrapper ===============-->	
            <div class="" id="wrapper" style="opacity: 1;">
                <!--=============== content-holder ===============-->
                <div class="content-holder elem transition3">
                    <!-- Page title  end--> 
                    <div class="nav-overlay"></div>
					<div class="nav-inner isDown" tabindex="8" style="overflow: hidden; outline: none;">
						<nav>
							<ul>
								<li>
									<a style="font-family: Calibri;" href="./index.php">GIỚI THIỆU</a>
								</li>
								<li>
									<a style="font-family: Calibri;" href="./index.php">DỰ ÁN</a>
								</li>
								<li>
									<a style="font-family: Calibri;" href="./index.php">BÁO GIÁ</a>
								</li>
								<li>
									<a style="font-family: Calibri;" href="./index.php">BẢN TIN</a>
								</li>	
								<li>
									<a style="font-family: Calibri;">HOTLINE : </br>076 433 6532</a>
								</li>								
							</ul>
						</nav>
					</div>                    <!--  Content -->
                    <div class="content full-height no-padding">
                        <!--  resize-carousel-holder  --> 
                        <div class="resize-carousel-holder anim-holder resize-carousel-holder ">
							<?php
							    $id = $_GET['id'];
								$dir = 'images';
								$folders = scandir($dir, 1);
								$dir = 'images/' . $folders[$id] . '/images';
								
								$display = scandir($dir, 1);
								
								$useragent=$_SERVER['HTTP_USER_AGENT'];

								if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
									for ($x = 0; $x < sizeof($display) - 2; $x++) {
										$var = '
										<div class="scroll-box">
											<div class="scroll-box-item">												
												<img id="'.$x.'" src="./images/' . $folders[$id] . '/images/' . $display[$x] . '" onclick="myFunction(\'' .$x. '\')" class="respimg" alt=""> 
											</div>
										</div>
										';											
										echo $var;
									}																		
								}
								else {
									for ($x = 0; $x < sizeof($display) - 2; $x++) {
										$var = '
										<div class="scroll-box">
											<div class="scroll-box-item">
												<div class="zoomimage"><img src="./images/' . $folders[$id] . '/images/' . $display[$x] . '" class="intense" alt=""><i class="fa fa-expand"></i></div>
												<img id="'.$x.'" src="./images/' . $folders[$id] . '/images/' . $display[$x] . '" class="respimg" alt=""> 
											</div>
										</div>
										';											
										echo $var;
									}									
								}

							?>								

                        </div>
                        <!--  resize-carousel-holder  --> 
                    </div>
                    <!--  Content  end --> 
					
                </div>
                <!-- Content holder  end -->
            </div>
									
			<!-- huy start -->
			<div id="myModal" class="modal">
				<span class="close">&times;</span>
				<img class="modal-content" id="newImg">
			</div>
			
			<script>
			function myFunction(x) {																			
				var modal = document.getElementById("myModal");
				var img = document.getElementById(x);
				var modalImg = document.getElementById("newImg");
				
				img.onclick = function(){
					modal.style.display = "block";
					modalImg.src = this.src;
					var ratio = this.width / this.height;
					var newWidth = window.innerHeight * ratio;
					newWidth += "px";
					if (this.height > window.innerHeight) {
						modalImg.style.width = newWidth;
					}
					else {
						var marTop = (window.innerHeight - this.height) / 2;
						marTop += "px";
						newWidth = this.width + "px";
						modalImg.style.width = newWidth;
						modalImg.style.margin = marTop + " 0 0 0";
					}
					//alert(this.width + 'x' + this.height + '     '  + window.innerWidth + 'x' + window.innerHeight + '     ' + tt);				  
				}

				var span = document.getElementsByClassName("close")[0];

				span.onclick = function() { 
					modal.style.display = "none";
				}
			}
			</script>			
			<!-- huy end -->						
						
            <!-- wrapper end -->
<!--=============== footer ===============-->
            <footer style="bottom: 0px;">
                <div class="policy-box">
                    <span><a href="https://www.facebook.com/studiokientrucDT" style="font-size: 15px; color: white;">FOLLOW FACEBOOK</a></span>
                </div>				
            </footer>
            <!-- footer end -->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script async="" src="./data/analytics.js.download"></script><script type="text/javascript" src="./data/js"></script>  
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="./data/jquery.min.js.download"></script>
        <script type="text/javascript" src="./data/plugins.js.download"></script>
        <script type="text/javascript" src="./data/core.js.download"></script>
        <script type="text/javascript" src="./data/scripts.js.download"></script><div class="l-line" style="display: none;"><span style="width: 0px;"></span></div>
		<script type="text/javascript" src="./data/velocity.min.js.download"></script>
        <script type="text/javascript" src="./data/velocity.ui.min.js.download"></script>
		<script type="text/javascript" src="./data/jquery.unveil.min.js.download"></script>
		<script type="text/javascript" src="./data/jquery.lazyload-any.min.js.download"></script>
		<script src="./data/bootstrap.min.js.download" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(".modal-fullscreen").on('show.bs.modal', function () {
			  setTimeout( function() {
				$(".modal-backdrop").addClass("modal-backdrop-fullscreen");
			  }, 0);
			});
			$(".modal-fullscreen").on('hidden.bs.modal', function () {
			  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
			});
			$('#videoz img').click(function(){
				video = '<iframe src="'+ $(this).attr('data-video') +'"></iframe>';
				$("#play").remove();
				$("#videoz").replaceWith(video);
				var bgmusic = document.getElementById("bgmusic");
				$("#icon-volume-on").hide();
				$("#icon-volume-off").show();
				bgmusic.pause();
			});
			$('#play').click(function(){
				video = '<iframe src="'+ $("#videoz img").attr('data-video') +'"></iframe>';
				console.log(video)
				$("#play").remove();
				$("#videoz").replaceWith(video);
				var bgmusic = document.getElementById("bgmusic");
				bgmusic.pause();
				$("#icon-volume-on").hide();
				$("#icon-volume-off").show();
			});
			$(document).bind('contextmenu', function (e) {
				e.preventDefault();
				return false;
			  });
			$('#lazyload').lazyload({
			  // Sets the pixels to load earlier. Setting threshold to 200 causes image to load 200 pixels
			  // before it appears on viewport. It should be greater or equal zero.
			  threshold: 200,

			  // Sets the callback function when the load event is firing.
			  // element: The content in lazyload tag will be returned as a jQuery object.
			  load: function(element) {},

			  // Sets events to trigger lazyload. Default is customized event `appear`, it will trigger when
			  // element appear in screen. You could set other events including each one separated by a space.
			  trigger: "appear"
			});
            $.fn.animateSection = function() {
                var $elem = $(this);
                var $window = $(window);
                var thresholdFactor = 0.15;
                var winthreshold = $window.height() * thresholdFactor;
                var winTopThreshold = $window.scrollTop() + winthreshold;
                var winBottomThreshold = $window.scrollTop() + $window.height() - winthreshold;
                var elemTop = $elem.offset().top;
                var elemBottom = elemTop + $elem.height();
                if(elemTop < winBottomThreshold){
                //if((elemBottom > winTopThreshold && elemTop < winTopThreshold) || (elemTop < winBottomThreshold && elemBottom > winBottomThreshold)){
                    if(!$(this).hasClass('animated')){
                        var delay = 0;
                        $(this).children('.section-wrapper').each(function () {
                            $(this).velocity({opacity:1},{"duration":1500,"delay":delay});
                            delay+=250;
                        });
                        $(this).addClass('animated');
                    }
                }
            };

            function playMusic(){
                var bgmusic = document.getElementById("bgmusic");
                if(bgmusic===null){
                    //no audio
                }else{
                    bgmusic.play();
                    //volume on/off handlers
                    $("#icon-volume-on").click(function(){
                        $("#icon-volume-on").hide();
                        $("#icon-volume-off").show();
                        bgmusic.volume = 0;
                    });

                    $("#icon-volume-off").click(function(){
                        $("#icon-volume-off").hide();
                        $("#icon-volume-on").show();
                        bgmusic.volume = 1;
                    });
                }
            }
            $(window).load(function(){
                playMusic();
                $(window).on('scroll',function() {
                    //set transparent/opaque for header during scroll
                    if ($(this).scrollTop() > 50 && $('header:hover').length === 0 && $('.nav-inner:hover').length === 0 && $('.share-inner:hover').length === 0){  
                        $('header').addClass("transparent");
                    }
                    else{
                        $('header').removeClass("transparent");
                    }

                    $('.section-animate').each(function(i, obj) {
                        $(this).animateSection();
                    });

                    if ($(this).scrollTop() > 50 ) {
                        $('.scrolltop:hidden').stop(true, true).fadeIn();
                    } else {
                        $('.scrolltop').stop(true, true).fadeOut();
                    }
                });

                $(".scroll").click(function(){
                    $("html,body").animate({scrollTop:$("body").offset().top},"1000");
                    return false;
                });

                $(window).on('resize',function(){
                    $('.section-animate').each(function(i, obj) {
                        $(this).animateSection();
                    });
                    setBackgroundImageHeight();
                    resizeWorkInfoNiceScroll();
                });

                //set transparent/opaque for header on/off hover
                $('body').on('mouseenter', 'header', function() {
                    if ($(window).scrollTop() > 50){
                        $('header').removeClass("transparent");
                    }
                });
                 $('body').on('mouseleave', 'header', function() {
                    if ($(window).scrollTop() > 50){
                        $('header').addClass("transparent");
                    }
                });

                //set transparent/opaque for nav-inner on/off hover
                $('body').on('mouseenter', '.nav-inner', function() {
                    $(this).addClass('opaque');
                    if ($(window).scrollTop() > 50){
                        $('header').removeClass("transparent");
                    }
                });
                 $('body').on('mouseleave', '.nav-inner', function() {
                    $(this).removeClass('opaque');
                    if ($(window).scrollTop() > 50){
                        $('header').addClass("transparent");
                    }
                });

                //set transparent/opaque for share-inner on/off hover
                $('body').on('mouseenter', '.share-inner', function() {
                    $(this).addClass('opaque');
                    if ($(window).scrollTop() > 50){
                        $('header').removeClass("transparent");
                    }
                });
                 $('body').on('mouseleave', '.share-inner', function() {
                    $(this).removeClass('opaque');
                    if ($(window).scrollTop() > 50){
                        $('header').addClass("transparent");
                    }
                });

                //set transparent/opaque for information-inner on/off hover
                $('body').on('mouseenter', '.information-inner', function() {
                    $(this).addClass('opaque');
                    if ($(window).scrollTop() > 50){
                        $('header').removeClass("transparent");
                    }
                });
                 $('body').on('mouseleave', '.information-inner', function() {
                    $(this).removeClass('opaque');
                    if ($(window).scrollTop() > 50){
                        $('header').addClass("transparent");
                    }
                });
            });

          
            function validateContactForm(){
                if($('#formContact').length){
                    $('#formContact').validate({
                        rules: {
                            title:"required",
                            name:"required",
                            contact:"required",
                            email:{
                                required:true,
                                email:true
                            },
                            enquiry:"required",
                            attachplan: {
                                extension: "jpeg|jpg|pdf",
                                filesize: "10048576"
                            },
                            qns:{
                                antibot: "0932"
                            }
                        },
                        messages: {
                            attachplan: {
                                extension: "Only jpeg,jpg or pdf file is accepted.",
                                filesize: "Attach Plan cannot be more than 10MB."
                            },
                            qns:{ 
                                antibot: "PLease key in '0932'."
                            }
                        },
                        submitHandler: function(form) {
                            $('#btnSend').prop('disabled',true);
                            $('#btnSend span').html('Sending...');
                            $("#formContact div.submit_message").hide();
                            $.ajax({
                                url: form.action,
                                type: form.method,
                                data: new FormData(form),
                                contentType: false,
                                cache: false,
                                processData:false,
                                success : function(result) {
                                    if(result=='success'){
                                        $("#contact_result").text('Thank You for your enquiry. Your message has been sent successfully. Our team will get in touch with you shortly.');
                                    }else{
                                        $("#contact_result").text('An error has occurred. Please try again later.');
                                    }
                                    $('#btnSend span').html('Send  <i class="fa fa-angle-right"></i>');
                                    $("#formContact div.submit_message").show();
                                    $('#btnSend').prop('disabled',false);
                                    form.reset();
                                }
                            });
                        },
                        errorPlacement: function(error, element) {
                            if(element.attr("name") == "attachplan") {
                                error.insertAfter($('#uploaded-file'));
                            } else {
                                error.insertAfter(element);
                            }
                        }
                    });
                }
            }

            var keys = {37: 1, 38: 1, 39: 1, 40: 1};

            function preventDefault(e) {
              e = e || window.event;
              if (e.preventDefault)
                  e.preventDefault();
              e.returnValue = false;  
            }

            function preventDefaultForScrollKeys(e) {
                if (keys[e.keyCode]) {
                    preventDefault(e);
                    return false;
                }
            }

            function disableScroll() {
              if (window.addEventListener) // older FF
                  window.addEventListener('DOMMouseScroll', preventDefault, false);
              window.onwheel = preventDefault; // modern standard
              window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
              window.ontouchmove  = preventDefault; // mobile
              document.onkeydown  = preventDefaultForScrollKeys;
            }

            function enableScroll() {
                if (window.removeEventListener)
                    window.removeEventListener('DOMMouseScroll', preventDefault, false);
                window.onmousewheel = document.onmousewheel = null; 
                window.onwheel = null; 
                window.ontouchmove = null;  
                document.onkeydown = null;  
            }
            function getUrlParameter(sParam) {
                var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : sParameterName[1];
                    }
                }
            }
            function refineUrl(){
                var url = window.location.href;
                var value = url.substring(url.lastIndexOf('/') + 1);
                value  = value.split("?")[0];
                return value;
            }
            function setBackgroundImageHeight(){
                $( ".get-sibling-height" ).each(function() {
                    var siblingheight = $(this).closest('section').find('.sibling-height').height();
                    $(this).css('height',siblingheight);
                });
            }

            function initYoutubeVideo(){
                if($('#ytvideo').length){
                    var video_link = $('#ytvideo').data('video-link');
                    if(video_link!=''){
                        $('#ytvideo').YTPlayer({
                            fitToBackground: true,
                            videoId: video_link
                        });
                    }
                }
            }

            function initVideo(){
                if($('#video').length){
                    var video_id = $('#video').data('video-id');
                    if(video_id!=''){
                        $('#video').videobackground({
                            videoSource: ['../video/'+video_id], 
                            poster: '../video/black-bg.jpg',
                            loop:true,
                            loadedCallback: function() {
                                $(this).videobackground('mute');
                            }
                        });
                    }
                }

            }

            function handleContactFormUpload(){
                if($('#upload-file').length){                
                    $('#upload-file').on('change',function(){
                        var uploadedFile = $(this).val().replace(/C:\\fakepath\\/i, '');
                        console.log();
                        $('#uploaded-file').text(uploadedFile);
                    });
                }
            }

            function initAccoladesSlider(){
                if($('.accolades-slider').length){
                    $('.accolades-slider').slick({
                    infinite: true,
                    slidesToScroll: 1,
                    slidesToShow:3,
                    dots: true,
                    arrows:false,
                    responsive: [
                        {
                          breakpoint: 2400,
                          settings: {
                            slidesToShow: 3
                          }
                        },
                        {
                          breakpoint: 2000,
                          settings: {
                            slidesToShow: 2
                          }
                        },
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 991,
                          settings: {
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 767,
                          settings: {
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 500,
                          settings: {
                            slidesToShow: 1
                          }
                        }
                    ]
                  });
                }
            }

            function initCreditsSlider(){
                if($('.credits-slider').length){
                    $('.credits-slider').slick({
                    infinite: true,
                    slidesToScroll: 1,
                    slidesToShow:3,
                    dots: true,
                    arrows:false,
                    responsive: [
                        {
                          breakpoint: 2400,
                          settings: {
                            slidesToShow: 3
                          }
                        },
                        {
                          breakpoint: 2000,
                          settings: {
                            slidesToShow: 2
                          }
                        },
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 991,
                          settings: {
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 767,
                          settings: {
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 500,
                          settings: {
                            slidesToShow: 1
                          }
                        }
                    ]
                  });
                }
            }

            function resizeWorkInfoNiceScroll(){
                if($('.information-inner').length){
                    setTimeout(function(){
                        $('.information-inner').getNiceScroll().resize();
                    },1000);
                }
            }
            function resizeSubLinkNiceScroll(){
                if($('.nav-inner').length){
                    setTimeout(function(){
                        $('.nav-inner').getNiceScroll().resize();
                    },500);
                }
            }

            function initFunctionsAtContanimshow(){
                enableScroll();
                validateContactForm();
                setBackgroundImageHeight();
                initAccoladesSlider();
                initCreditsSlider();
                initVideo();
                handleContactFormUpload();
            }
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-50801226-14', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>