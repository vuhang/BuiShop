
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Free Style A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->script('jquery-1.11.0.min'); ?>
        <!-- Custom Theme files -->
        <!--theme-style-->
<?= $this->Html->css('style.css') ?>
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!--//fonts-->
<?= $this->Html->script('more-top'); ?>
<?= $this->Html->script('easing'); ?>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>   
        <!-- start menu -->
<?= $this->Html->script('simpleCart.min'); ?>
<?= $this->Html->css('memenu.css') ?>
<?= $this->Html->script('memenu'); ?>
        <script>$(document).ready(function () {
                $(".memenu").memenu();
            });</script>             
    </head>

    <body> 
        <!--top-header-->
        <div class="top-header">
            <div class="container">
                <div class="top-header-main">
                    <div class="col-md-4 top-header-middle">
                        <a href="#">  <?= $this->Html->image('/images/logo_3.jpg',
                            ['style' => 'width: 134px;
                            margin-left: -310px;
                            margin-top: 0;
                            margin-bottom: -69px;']); ?></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--top-header-->
        <!--bottom-header-->
        <div class="header-bottom">
            <div class="container">
                <div class="top-nav">

                    <ul class="memenu skyblue" style="margin-left: -180px;"><li class="active"> <?= $this->Html->link('Home', ['action' => '../products/sanphammoi'],['style'=>'color: #8c2830']) ?></li>
                        <li class="grid"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shose<b class="caret"></b></a>
                            <div class="mepanel">
                                <div class="row">
                                    <?= $this->Element('getList');?>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Blind</a>
                            <div class="mepanel">
                                <div class="row">
                                <?= $this->Element('getList2');?>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Balo</a>
                            <div class="mepanel">
                                <div class="row">
                                   <?= $this->Element('getList3');?>
                                </div>
                        </li>
                        <li class="grid"><li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                Account <span class="caret"></span> </a>

                            <ul class="mepanel" style="width:150px;">
                                <li class="nav-header"> <?= $this->Html->link('Đăng Kí', ['action' => '../users/dangky'],['style' => 'font-weight: bold']) ?></li>
                                <li class="divider"></li>
                                <li class="nav-header"> <?= $this->Html->link('Đăng Nhập', ['action' => '../users/login'],['style' => 'font-weight: bold']) ?></li>


                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 top-header-left" style="margin-left: 722px;margin-bottom: 12px;margin-top: -69px;">
                    <div class="search-bar">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Search';
                                }">
                        <input type="submit" value="">
                    </div>
                </div>
                <div class="col-md-4 top-header-right" style="margin-left: 766px; margin-top: -69px;margin-bottom: -3px;">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <div class="total"style="font-size: 16px">
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                            <?= $this->Html->image('/images/cart-1.png'); ?>
                        </a>
                        <p><a href="#" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--bottom-header-->
        <!--banner-starts-->
        <div class="bnr" id="home">
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="banner-1"></div>
                    </li>
                    <li>
                        <div class="banner-2"></div>
                    </li>
                    <li>
                        <div class="banner-3"></div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--banner-ends--> 
        <!--Slider-Starts-Here-->
    <?= $this->Html->script('responsiveslides.min'); ?>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--End-slider-script-->
        <!--start-banner-bottom--> 
        <div class="banner-bottom">
            <div class="container">
                <div class="banner-bottom-top">
                    <div class="col-md-6 banner-bottom-left">
                        <div class="bnr-one">
                            <div class="bnr-left">
                                <h1><a href="#">Duis dictum volutpat</a></h1>
                                <p>Nulla tempus facilisis purus at.</p>
                                <div class="b-btn"> 
                                    <a href="#">SHOP NOW</a>
                                </div>
                            </div>
                            <div class="bnr-right"> 
                                <a href="#"><?= $this->Html->image('/images/b-1.jpg'); ?></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-6 banner-bottom-right">
                        <div class="bnr-two">
                            <div class="bnr-left">
                                <h2><a href="#">Phasellus quis nunc</a></h2>
                                <p>Nulla tempus facilisis purus at.</p>
                                <div class="b-btn"> 
                                    <a href="#">SHOP NOW</a>
                                </div>
                            </div>
                            <div class="bnr-right"> 
                                <a href="#"style><?= $this->Html->image('/images/m1.jpg',['style'=>'width: 51%;float: left;margin-left: 44px;
                                height: 130px;']); ?></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--end-banner-bottom--> 
        <!--start-shoes--> 
        <!--start: Container -->
        <div class="containers">
                <?=$this->fetch('content');?>
        </div>

        <!--end-shoes-->
        <!--start-abt-shoe-->
        <div class="abt-shoe">
            <div class="container"> 
                <div class="abt-shoe-main">
                    <div class="col-md-4 abt-shoe-left">
                        <div class="abt-one">
                            <a href="#"><?= $this->Html->image('/images/abt-1.jpg'); ?></a>
                            <h4><a href="#">Cras dolor ligula</a></h4>
                            <p>Phasellus auctor vulputate egestas. Nulla facilisi. Cras dolor ligula, pharetra vitae efficitur ac, tempus vitae nisl. Aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="col-md-4 abt-shoe-left">
                        <div class="abt-one">
                            <a href="#"><?= $this->Html->image('/images/abt-2.jpg'); ?></a>
                            <h4><a href="#">Cras dolor ligula</a></h4>
                            <p>Phasellus auctor vulputate egestas. Nulla facilisi. Cras dolor ligula, pharetra vitae efficitur ac, tempus vitae nisl. Aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="col-md-4 abt-shoe-left">
                        <div class="abt-one">
                            <a href="#"><?= $this->Html->image('/images/abt-3.jpg'); ?></a>
                            <h4><a href="#">Cras dolor ligula</a></h4>
                            <p>Phasellus auctor vulputate egestas. Nulla facilisi. Cras dolor ligula, pharetra vitae efficitur ac, tempus vitae nisl. Aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--end-abt-shoe-->
        <!--start-footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="col-md-3 footer-left">
                        <h3>ABOUT US</h3>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Our Sites</a></li>
                            <li><a href="#">In The News</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Carrers</a></li>                     
                        </ul>
                    </div>
                    <div class="col-md-3 footer-left">
                        <h3>YOUR ACCOUNT</h3>
                        <ul>
                            <li><a href="#">Your Account</a></li>
                            <li><a href="#">Personal Information</a></li>
                            <li><a href="#">Addresses</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a hr="#">Track your order</a></li>                                        
                        </ul>
                    </div>
                    <div class="col-md-3 footer-left">
                        <h3>CUSTOMER SERVICES</h3>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Cancellation</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Bulk Orders</a></li>
                            <li><a href="#">Buying Guides</a></li>                   
                        </ul>
                    </div>
                    <div class="col-md-3 footer-left">
                        <h3>CATEGORIES</h3>
                        <ul>
                            <li><a href="#">Sports Shoes</a></li>
                            <li><a href="#">Casual Shoes</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Party Shoes</a></li>
                            <li><a href="#">Ethnic</a></li>              
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--end-footer-->
        <!--end-footer-text-->
        <div class="footer-text">
            <div class="container">
                <div class="footer-main">
                    <p class="footer-class">© Bùi store đồng hành trên con đường thành công của bạn !!!  <a href="http://w3layouts.com/" target="_blank"></a> </p>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear' 
                     };
                     */

                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
        <!--end-footer-text-->  
    </body>
</html>