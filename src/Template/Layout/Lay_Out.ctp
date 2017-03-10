<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>BÙI STORE</title>
    <meta name="description" content="FreeME:Bootstrap Theme" />
    <meta name="keywords" content="Template, Theme, web, html5, css3" />
    <meta name="author" content="Łukasz Holeczek from creativeLabs" />
    <!-- end: Meta -->
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end: Mobile Specific -->
    <!-- start: Facebook Open Graph -->
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- end: Facebook Open Graph -->

    <!-- start: CSS -->

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-responsive.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('Themmoi.css') ?>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <?= $this->Html->css('font.css') ?>
    <!-- end: CSS -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    
</head>
<body>

    <!--start: Wrapper -->
    <div id="wrapper">

        <!--start: Container -->
        <div class="container">


            <!--start: Header -->
            <header>

                <!--start: Row -->
                <div class="row">

                    <!--start: Logo -->
                    <div class="logo span4">
                        <a class="brand" href="#"><?= $this->Html->image('/img/logo.jpg', array('alt' => 'CakePHP', 'style' => 'height: 61px; float:left;')); ?></a>
                    </div>
                    <!--end: Logo -->
                    <!--start: Social Links -->
                    <div class="span8">
                        <div id="social-links">
                            <ul class="social-small-grid">
                                <li>
                                    <div class="social-small-item">
                                        <div class="social-small-info-wrap">
                                            <div class="social-small-info">
                                                <div class="social-small-info-front social-small-twitter">
                                                    <a href="http://twitter.com"></a>
                                                </div>
                                                <div class="social-small-info-back social-small-twitter-hover">
                                                    <a href="http://twitter.com"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="social-small-item">
                                        <div class="social-small-info-wrap">
                                            <div class="social-small-info">
                                                <div class="social-small-info-front social-small-facebook">
                                                    <a href="http://facebook.com"></a>
                                                </div>
                                                <div class="social-small-info-back social-small-facebook-hover">
                                                    <a href="http://facebook.com"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="social-small-item">
                                        <div class="social-small-info-wrap">
                                            <div class="social-small-info">
                                                <div class="social-small-info-front social-small-dribbble">
                                                    <a href="http://dribbble.com"></a>
                                                </div>
                                                <div class="social-small-info-back social-small-dribbble-hover">
                                                    <a href="http://dribbble.com"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="social-small-item">
                                        <div class="social-small-info-wrap">
                                            <div class="social-small-info">
                                                <div class="social-small-info-front social-small-flickr">
                                                    <a href="http://flickr.com"></a>
                                                </div>
                                                <div class="social-small-info-back social-small-flickr-hover">
                                                    <a href="http://flickr.com"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end: Social Links -->

                </div>
                <!--end: Row -->

            </header>
            <!--end: Header-->
            <!--start: Navigation-->
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active"><a href="~/Home/Index"></a></li>
                                <li class="active"><a href="../products/sanphammoi">Trang Chủ</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                                <
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh Mục<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    <li>
                                     <ul>
                                        <li>
                                            <a href="#">
                                            <?= $this->Element('getList');?>;
                                            </a>
                                        </li>
                                    </ul>

                                    <!--
                                       <li class="nav-header"><?=$this->Html->link('ADIDAS', ['controller'=>'Sanphams', 'action' => 'index', 'alias' => 'alias'], ['style' => 'font-weight: bold'])?></li>
                                        <li class="divider"></li>
                                        <li class="nav-header"><a href= "login">NIKE</a></li>
                                        <li class="divider"></li>
                                        <li class="nav-header"><a href= "login">JORRDAN</a></li>
                                        -->

                                     </ul>

                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-header"><a href= "dangky">Đăng Ký</a></li>

                                        <li class="divider"></li>
                                        <li class="nav-header"><a href= "login">Đăng nhập</a></li>

                                    </ul>
                                </li>

                                <li style="color:red">
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Navigation-->

        </div>
        <!--end: Container-->
        <!--start: Container -->


        <div class="container">

            <!-- start: Flexslider -->
            <div class="slider">

                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <?= $this->Html->image('/img/V2 BRED.jpg', array('alt' => 'CakePHP', 'style' => 'height:500px;width: 968px;')); ?>
                            <div class="slide-caption n hidden-phone">
                                <h3>BÙI STORE</h3>
                                <p>
                                Bùi store đồng hành trên con đường thành công của bạn
                                </p>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('/img/NMD.jpg', array('alt' => 'CakePHP', 'style' => 'height:500px;width: 968px;')); ?>
                            <div class="slide-caption hidden-phone">
                                <h3>BÙI STORE</h3>
                                <p>
                                    Bùi store đồng hành trên con đường thành công của bạn
                                </p>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('/img/b1.jpg', array('alt' => 'CakePHP', 'style' => 'height:500px;width: 968px;')); ?>
                            <div class="slide-caption n hidden-phone">
                                <h3>BÙI STORE</h3>
                                <p>
                                    Bùi store đồng hành trên con đường thành công của bạn
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            <hr>
            <!--start: Container -->
            <div class="container" style="margin-bottom: 200px;">
                <?=$this->fetch('content');?>
            </div>
            <!--end: Container-->
            
            


            <!--start: Container -->
            <div class="container">
                <!-- start: Footer Menu -->
                <div id="footer-menu" class="hidden-tablet hidden-phone">
                    <!-- start: Container -->
                    <div class="container">

                        <!-- start: Row -->
                        <div class="row">
                            <!-- start: Footer Menu Logo -->
                            <div class="span1">
                                <div id="footer-menu-logo">
                                    <a href="#"><?= $this->Html->image('/img/logo-footer-menu.png', array('alt' => 'CakePHP')); ?></a>  
                                </div>
                            </div>
                            <!-- end: Footer Menu Logo -->
                            <!-- start: Footer Menu Links-->
                            <div class="span10">

                                <div id="footer-menu-links">
                                    <ul id="footer-nav">
                                        <li><a href="index.html">Start</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>

                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>

                            </div>
                            <!-- end: Footer Menu Links-->
                            <!-- start: Footer Menu Back To Top -->
                            <div class="span1">

                                <div id="footer-menu-back-to-top">
                                    <a href="#"></a>
                                </div>

                            </div>
                            <!-- end: Footer Menu Back To Top -->

                        </div>
                        <!-- end: Row -->

                    </div>
                    <!-- end: Container  -->
                </div>
                <!-- end: Footer Menu -->
                <!-- start: Footer -->
                <div id="footer">

                    <!-- start: Container -->
                    <div class="container">

                        <!-- start: Row -->
                        <div class="row">
                            <!-- start: About -->
                            <div class="span3">

                                <h3>Address</h3>
                                <p>
                                    Liên hệ: 0979 960 046 (Như Quỳnh)
                                    <br>
                                    Địa chỉ: Số 86, đường Nguyên Hồng, P1, Gò Vấp (Chung cư Samland Airport)
                                    <br>
                                    Vì bên mình là nhà riêng nên trước khi tới bạn gọi mình để chắc chắn mình có nhà nha :D
                                </p>

                            </div>
                            <!-- end: About -->
                            <!-- start: Photo Stream -->
                            <div class="span3">

                                <h3>Photo Stream</h3>
                                <div class="flickr-widget">
                                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <!-- end: Photo Stream -->

                            <div class="span6">

                                <!-- start: Follow Us -->
                                <h3>Follow Us!</h3>
                                <ul class="social-grid">
                                    <li>
                                        <div class="social-item">
                                            <div class="social-info-wrap">
                                                <div class="social-info">
                                                    <div class="social-info-front social-twitter">
                                                        <a href="http://twitter.com"></a>
                                                    </div>
                                                    <div class="social-info-back social-twitter-hover">
                                                        <a href="http://twitter.com"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="social-item">
                                            <div class="social-info-wrap">
                                                <div class="social-info">
                                                    <div class="social-info-front social-facebook">
                                                        <a href="http://facebook.com"></a>
                                                    </div>
                                                    <div class="social-info-back social-facebook-hover">
                                                        <a href="http://facebook.com"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="social-item">
                                            <div class="social-info-wrap">
                                                <div class="social-info">
                                                    <div class="social-info-front social-dribbble">
                                                        <a href="http://dribbble.com"></a>
                                                    </div>
                                                    <div class="social-info-back social-dribbble-hover">
                                                        <a href="http://dribbble.com"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="social-item">
                                            <div class="social-info-wrap">
                                                <div class="social-info">
                                                    <div class="social-info-front social-flickr">
                                                        <a href="http://flickr.com"></a>
                                                    </div>
                                                    <div class="social-info-back social-flickr-hover">
                                                        <a href="http://flickr.com"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end: Follow Us -->
                                <!-- start: Newsletter -->
                                <form id="newsletter">
                                    <h3>Newsletter</h3>
                                    <p>Please leave us your email</p>
                                    <label for="newsletter_input"></label>
                                    <input type="text" id="newsletter_input" />
                                    <input type="submit" id="newsletter_submit" value="submit">
                                </form>
                                <!-- end: Newsletter -->

                            </div>

                        </div>
                        <!-- end: Row -->

                    </div>
                    <!-- end: Container  -->
                </div>
                <!-- end: Footer -->

            </div>
            <!-- end: Container  -->
        </div>


        <!-- end: Wrapper  -->
        <!-- start: Copyright -->
        <div id="copyright">

            <!-- start: Container -->
            <div class="container">

                <p>
                    &copy; 2013, creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland 
                    <?= $this->Html->image('/img/poland.png', array('alt' => 'CakePHP', 'style' => 'margin-top:-4px')); ?>
                </p>

            </div>
            <!-- end: Container  -->

        </div>
        <!-- end: Copyright -->
        <!-- start: Java Script -->
        <!-- Placed at the end of the document so the pages load faster -->
         <?= $this->Html->script('jquery-1.8.2') ?>
         <?= $this->Html->script('bootstrap') ?>
         <?= $this->Html->script('flexslider') ?>
         <?= $this->Html->script('carousel') ?>
         <?= $this->Html->script('custom') ?>

         <?= $this->fetch('script') ?>
        <!-- end: Java Script -->

        </div>
</body>
</html>
