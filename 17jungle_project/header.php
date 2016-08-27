<?php
$conn = new mysqli ( "localhost", "17jungle", "playjungle", "jh_17jungle" );
session_start();
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

$check_session_id = "";
$check_session_password = "";
$check_session_name = "";
$check_session_email = "";
$check_session_phone = "";
$check_session_job = "";
$check_session_address = "";

if (isset ( $_SESSION ['id'] )) {
	$check_session_id = $_SESSION ['id'];
	$check_session_password = $_SESSION ['password'];
	$check_session_name = $_SESSION['name'];
	$check_session_email = $_SESSION['email'];
	$check_session_phone = $_SESSION['phone'];
	$check_session_job = $_SESSION['job'];
	$check_session_address = $_SESSION['address'];
	
	$sql = "SELECT * FROM customer WHERE c_password='" . $check_session_password . " and c_id=" . $check_session_id . "'";
	$result = $conn->query ( $sql );
	$row = $result->fetch_assoc ();
}
?>
<!-- 인덱스 상단바
 /.Fixed navbar 
 		까지
  -->

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<title>Camera Rental Shop</title>

<!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


<!-- styles needed by swiper slider -->
<link href="assets/plugins/swiper-master/css/swiper.min.css"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/home-v7.css" rel="stylesheet">
    <link href="assets/css/cart-nav.css" rel="stylesheet">

    
  <!-- gall-item Gallery for gallery page -->
  <link href="assets/plugins/magnific/magnific-popup.css" rel="stylesheet">

<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- include pace script for automatic web page progress bar  -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>

<!-- 헤더 사이드바 -->
<script src="assets/js/sidebar-nav.js"></script>


</head>


<body>

<div id="search-overly" class="search-overly-mask">
    <a class=" search-close search-overly-close-trigger "> <i class=" fa fa-times-circle"> </i> </a>
    <div class="container">

        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->

                <!-- Appended Input-->
                <div class="control-group">
                    <label class="control-label">Search into the shop..</label>

                    <div class="controls">
                        <div class="search " role="search" id="mySearch">
                            <input class="form-control" placeholder="Start typing " type="search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                    <span class="sr-only">Search</span>
                                </button>
                            </span>
                        </div>
                        <!-- for error or message -->
                        <p class="help-block hide">help</p>
                    </div>
                </div>

            </fieldset>
        </form>


    </div>
</div>
<!-- /#search-overly -->
<div class="overly-mask"></div>
<div class="menu-overly-mask"></div>
<!-- /.overly-mask -->

<aside class="menu-sidebar">
    <div class="menu-sidebar-content">

        <div class="inner">

            <div class="menu-sidebar-header">
                <h3>Menu</h3>
 
            </div>

            <div class="menu-sidebar-nav">

                <ul class="nav-category nav-sidebar nav-tree-light   nav-tree">
                    <li class="">
                        <a> 렌탈</a>
                        <ul>
                        	<li><a href="product_list.php">전체보기</a></li>
                            <li><a href="#">카메라</a></li>
                            <li><a href="#">렌즈</a></li>
                            <li><a href="#">캠코더</a></li>
                            <li><a href="#">조명</a></li>
                            <li><a href="#">녹음</a></li>
                            <li><a href="#">삼각대/악세사리</a></li>
                            <li><a href="#">전자기기</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a>커뮤니티</a>
                    </li>
                    <li><a href="#"> Baby &amp; Kids </a></li>
                    <li><a href="#"> Home &amp; Kitchen </a></li>
                    <li><a href="#"> Baby &amp; Kids </a></li>
                </ul>

            </div>


        </div>
    </div>
</aside>
<!-- /.menu-sidebar -->
<aside class="cart-sidebar">
    <div class="cart-sidebar-content">

        <div class="cartMenu   col-xs-12 no-margin-no-padding  ">

            <div class="cart-sidebar-header">
                <h3>Your Bag </h3>

                <div class="cart-close-trigger">
                    <button class="close" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>

            <div class="w100  scroll-pane">
                <table>
                    <tbody>
                    <tr class="miniCartProduct">
                        <td class="miniCartProductThumb" style="20%">
                            <div><a href="product-details.html"> <img alt="img" src="images/product/16.jpg"> </a>
                            </div>
                        </td>
                        <td style="40%">
                            <div class="miniCartDescription">
                                <h4><a href="product-details.html"> Denim T shirt Black </a></h4>
                                <span class="size"> 12 x 1.5 L </span>

                                <div class="price"><span> $8.80 </span></div>
                            </div>
                        </td>

                        <td class="delete" style="20%">
                            <button type="button" class="close"><span aria-hidden="true">×</span></button>
                        </td>
                    </tr>

                    <tr class="miniCartProduct">
                        <td class="miniCartProductThumb" style="20%">
                            <div><a href="product-details.html"> <img alt="img" src="images/product/5.jpg"> </a>
                            </div>
                        </td>
                        <td style="40%">
                            <div class="miniCartDescription">
                                <h4><a href="product-details.html"> Denim T shirt Black </a></h4>
                                <span class="size"> 12 x 1.5 L </span>

                                <div class="price"><span> $8.80 </span></div>
                            </div>
                        </td>

                        <td class="delete" style="20%">
                            <button type="button" class="close"><span aria-hidden="true">×</span></button>
                        </td>
                    </tr>
                    <tr class="miniCartProduct">
                        <td class="miniCartProductThumb" style="20%">
                            <div><a href="product-details.html"> <img alt="img" src="images/product/7.jpg"> </a>
                            </div>
                        </td>
                        <td style="40%">
                            <div class="miniCartDescription">
                                <h4><a href="product-details.html"> Denim T shirt Black </a></h4>
                                <span class="size"> 12 x 1.5 L </span>

                                <div class="price"><span> $8.80 </span></div>
                            </div>
                        </td>

                        <td class="delete" style="20%">
                            <button type="button" class="close"><span aria-hidden="true">×</span></button>
                        </td>
                    </tr>
                    <tr class="miniCartProduct">
                        <td class="miniCartProductThumb" style="20%">
                            <div><a href="product-details.html"> <img alt="img" src="images/product/13.jpg"> </a>
                            </div>
                        </td>
                        <td style="40%">
                            <div class="miniCartDescription">
                                <h4><a href="product-details.html"> Denim T shirt Black </a></h4>
                                <span class="size"> 12 x 1.5 L </span>

                                <div class="price"><span> $8.80 </span></div>
                            </div>
                        </td>

                        <td class="delete" style="20%">
                            <button type="button" class="close"><span aria-hidden="true">×</span></button>
                        </td>
                    </tr>
                    <tr class="miniCartProduct">
                        <td class="miniCartProductThumb" style="20%">
                            <div><a href="product-details.html"> <img alt="img" src="images/product/4.jpg"> </a>
                            </div>
                        </td>
                        <td style="40%">
                            <div class="miniCartDescription">
                                <h4><a href="product-details.html"> Denim T shirt Black </a></h4>
                                <span class="size"> 12 x 1.5 L </span>

                                <div class="price"><span> $8.80 </span></div>
                            </div>
                        </td>
                        <td class="delete" style="20%">

                            <button type="button" class="close"><span aria-hidden="true">×</span></button>

                        </td>
                    </tr>


                    <tr class="miniCartProduct">
                        <td class="miniCartProductThumb" style="20%">
                            <div><a href="product-details.html"> <img alt="img" src="images/product/9.jpg"> </a>
                            </div>
                        </td>
                        <td style="40%">
                            <div class="miniCartDescription">
                                <h4><a href="product-details.html"> Product Item </a></h4>
                                <span class="size"> 12 x 1.5 L </span>

                                <div class="price"><span> $90 </span></div>
                            </div>
                        </td>
                        <td class="delete" style="20%">

                            <button type="button" class="close"><span aria-hidden="true">×</span></button>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--/.scroll-pane-->

            <div class="miniCartFooter cart-panel-footer clearfix">

                <h3 class="text-right subtotal"> Subtotal: $210 </h3>

                <div class="col-sm-6 ">
                    <a class="btn btn-danger  btn-block">
                        <i class="fa fa-shopping-cart"> </i> VIEW CART </a>
                </div>

                <div class="col-sm-6 ">

                    <a class="btn  btn-primary btn-block ">
                        CHECKOUT </a>

                </div>
            </div>

            <!--/.miniCartFooter-->

        </div>
        <!--/.cartMenu-->

    </div>
    <!--.cart-sidebar-content-->
</aside>
<!-- /.cart-sidebar -->

	<!-- Modal Login start -->
	<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1"
		role="dialog">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h3 class="modal-title-site text-center">Login to 17Jungle</h3>
				</div>
				<form action="login.php"  method="post" >
					<div class="modal-body">
						<div class="form-group login-username">
							<div>
								<input name="userId" id="userId" class="form-control input"
									size="20" placeholder="Enter UserId" type="text">
							</div>
						</div>
						<div class="form-group login-password">
							<div>
								<input name="userPassword" id="userPassword"
									class="form-control input" size="20" placeholder="Password"
									type="password">
							</div>
						</div>
						<div class="form-group">
							<div>
								<div class="checkbox login-remember">
									<label> <input name="rememberme" value="forever"
										checked="checked" type="checkbox"> Remember Me
									</label>
								</div>
							</div>
						</div>
						<div>
							<div>
								<input name="submit" class="btn  btn-block btn-lg btn-primary"
									value="LOGIN" type="submit">
							</div>
						</div>
					</div>
					<!--userForm-->
				</form>
				<div class="modal-footer">
					<p class="text-center">
						Not here before? <a href="register_form.php"> Register </a> <br> <a
							href="#"> Lost your password? </a>
					</p>
				</div>
			</div>
			<!-- /.modal-content -->

		</div>
		<!-- /.modal-dialog -->

	</div>
	<!-- /.Modal Login -->


	<!-- Fixed navbar start -->
<div class="navbar navbar-default navbar-hero navbar-hero-center  navbar-fixed-top megamenu" role="navigation">

    <div class="container-fluid ">
        <div class="navbar-header">
        
            <button style="float: left;" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span
                    class="icon-bar"> </span> <span class="icon-bar"> </span></button>
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"><i
                    class="fa fa-shopping-cart colorWhite"> </i> <span
                    class="cartRespons colorWhite">Package</span></button>
         

            <!-- this part for mobile -->
            <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
                <div class="input-group">
                    <button class="btn btn-nobg search-trigger" type="button"><i class="fa fa-search"> </i></button>
                </div>
                <!-- /input-group -->

            </div>
                
         <a style="float: right;" class="navbar-brand hidden-lg hidden-md hidden-sm " href="index.php"> <img src="images/logo-dark.png"
                                                                                           alt="TSHOP"> </a>
        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class="navbar-cart  collapse">
            <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
                <div class="w100 miniCartTable scroll-pane">
                    <table>
                        <tbody>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/2.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/5.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/4.jpg" alt="img"> </a>
                                </div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>

                                    <div class="price"><span> $8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> $8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--/.miniCartTable-->

                <div class="miniCartFooter  miniCartFooterInMobile text-right">
                    <h3 class="text-right subtotal"> Subtotal: $210 </h3>
                    <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="checkout-0.html"
                            class="btn btn-sm btn-primary"> CHECKOUT </a></div>
                <!--/.miniCartFooter-->

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class="navbar-collapse collapse">


            <!-- In nav-center you can't use mega menu. But You can only use simple dropdown.
            Better use childless menu in center menu  -->

            <ul class="nav navbar-nav ">
                <li><a class="menu-sidebar-toggle"> <i class="fa fa-bars"></i> MENU </a></li>


            </ul>

            <ul class="nav navbar-nav nav-center hidden-xs">
                <li>
                    <a class="navbar-brand" href="index.php"> <img src="images/logo-dark.png" alt="TSHOP"> </a>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="hide-xs"><a class="btn btn-nobg  search-trigger"><i class="fa fa-search"> </i></a></li>
                
                
                <!-- <li><a data-target="#ModalLogin" data-toggle="modal"> Login <i class="fa fa-user"></i> </a></li> -->
                
                <?php 
							
							if (!isset($_SESSION['id']))//로그인안됨
							{
								echo "<li><a href='#' data-toggle='modal' data-target='#ModalLogin'>
										 Login <i class='fa fa-user'></i></a></li>";
							}
							else{
								echo "<li><a href='user_info.php'>$check_session_name 님</a></li>
								<li><a href='logout.php'>logout</a></li>";
							}
				?>
                
                
                <li class="hide-xs cart-sidebar-toggle"><a> Package <i
                        class="glyphicon-shopping-cart glyphicon"></i> </a></li>
            </ul>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <div class="search-full text-right"><a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>

        <div class="searchInputBox pull-right">
            <input type="search" data-searchurl="search?=" name="q" placeholder="start typing and hit enter to search"
                   class="search-input">
            <button class="btn-nobg search-btn" type="submit"><i class="fa fa-search"> </i></button>
        </div>
    </div>
    <!--/.search-full-->

</div>
<!-- /.Fixed navbar  -->