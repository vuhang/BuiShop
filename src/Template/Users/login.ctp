<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>   
<!-- start menu -->
<?= $this->Html->script('simpleCart.min'); ?>
<?= $this->Html->css('memenu.css') ?>
<?= $this->Html->script('memenu'); ?>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>             
</head>
<body> 
    <!--top-header-->
     <div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-4 top-header-middle">
                <a href="index.html">  <?= $this->Html->image('/images/logo_3.jpg',
                            ['style' => 'width: 134px;
                            margin-left: -359px;
                            margin-top: -31px;
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
                                <div class="col1 me-one">
                                    
                            </div>
                        </div>
                    </li>
                     <li class="grid"><a href="#">Balo</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1 me-one">
                                   
                            </div>
                        </div>
                    </li>
                    <li class="grid"><li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                                    <ul class="mepanel" style="width:150px;">
                                        <li class="nav-header"> <?= $this->Html->link('Đăng Kí', ['action' => '../users/dangky'],['style'=>'color: #8c2830']) ?></li>
                                         <li class="divider"></li>
                                        <li class="nav-header"> <?= $this->Html->link('Đăng Nhập', ['action' => '../users/login'],['style'=>'color: #8c2830']) ?></li>
                                       

                                    </ul>
                                </li>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 top-header-left" style="margin-left: 722px;margin-bottom: 12px;margin-top: -47px;">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
             <div class="col-md-4 top-header-right" style="margin-left: 766px; margin-top: -55px;margin-bottom: -3px;">
                <div class="cart box_1">
                        <a href="checkout.html">
                        <h3> <div class="total">
                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                            <?= $this->Html->image('/images/cart-1.png'); ?>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--bottom-header-->
    <!--banner-starts-->
    </div>

    <div class="account">
    <div class="container"> 
      <div class="account-bottom">
        <div class="col-md-offset-3 col-md-6 account-left" style="font-family: sans-serif;font-size: 18px;">
          <?= $this->Flash->render() ?>
          <?= $this->Form->create() ?>
          <div class="account-top heading">
            <h3 style="color: darkred;margin-left: 28%;
                font-size: 32px;">REGISTERED</h3>
          </div>
          <div class="address">
            <?= $this->Form->input('username') ?>
          </div>
          <div class="passwords">
            <?= $this->Form->input('password') ?>
          </div>
          <div class="address new">
             <?= $this->Form->button(__('Login'), ['style' => 'margin-right: 44px;
                margin-top: 20px;
                background: cadetblue;
                margin-left: 40%;
                width: 136px;
                height: 52px;
                font-size: 23px;']); ?>
             <?= $this->Form->end() ?>
          </div>
          </div>
        
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
    </div>
    <!--end-banner-bottom--> 
    <!--start-shoes--> 
    <!--start: Container -->
            <div class="container" style="margin-bottom: 200px;">
                <?=$this->fetch('content');?>
            </div>
         
    <!--start-abt-shoe-->
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
                        <li><a href="account.html">Your Account</a></li>
                        <li><a href="#">Personal Information</a></li>
                        <li><a href="contact.html">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Track your order</a></li>                                        
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
                <p class="footer-class">© 2015 Free Style All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
        </div>
        <script type="text/javascript">
                                    $(document).ready(function() {
                                        /*
                                        var defaults = {
                                            containerID: 'toTop', // fading element id
                                            containerHoverID: 'toTopHover', // fading element hover id
                                            scrollSpeed: 1200,
                                            easingType: 'linear' 
                                        };
                                        */
                                        
                                        $().UItoTop({ easingType: 'easeOutQuart' });
                                        
                                    });
                                </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
    <!--end-footer-text-->  
</body>
</html>