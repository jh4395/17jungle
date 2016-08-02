
<?php
session_start();
$conn = new mysqli ( "localhost", "17jungle", "playjungle", "jh_17jungle" );

if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

$check_session_id = "";
$check_session_password = "";
$check_session_name = "";

if (isset ( $_SESSION ['id'] )) {
	$check_session_id = $_SESSION ['id'];
	$check_session_password = $_SESSION ['password'];
	$check_session_name = $_SESSION['name'];
	$sql = "SELECT * FROM customer WHERE c_password='" . $check_session_password . " and c_id=" . $check_session_id . "'";
	$result = $conn->query ( $sql );
	$row = $result->fetch_assoc ();
}
?>

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

<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- include pace script for automatic web page progress bar  -->

<script>
        paceOptions = {
            elements: true
        };
    </script>
<script src="assets/js/pace.min.js"></script>
</head>

<body>

	<!-- Modal Login start -->
	<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1"
		role="dialog">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h3 class="modal-title-site text-center">Login to TSHOP</h3>
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
							href="forgot-password.html"> Lost your password? </a>
					</p>
				</div>
			</div>
			<!-- /.modal-content -->

		</div>
		<!-- /.modal-dialog -->

	</div>
	<!-- /.Modal Login -->


	<!-- Fixed navbar start -->
	<div class="navbar navbar-tshop navbar-fixed-top megamenu"
		role="navigation">
		<div class="navbar-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
						<div class="pull-left ">
							<ul class="userMenu ">
								<li><a href="#"> <span class="hidden-xs">HELP ME</span><i
										class="glyphicon glyphicon-info-sign hide visible-xs "></i>
								</a></li>
								<li class="phone-number"><a href="callto:+12025550151"> <span> <i
											class="glyphicon glyphicon-phone-alt "></i></span> <span
										class="hidden-xs" style="margin-left: 5px"> +1-202-555-0151 </span>
								</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
						<div class="pull-right">
							<ul class="userMenu">
							<?php 
							
							if (!isset($_SESSION['id']))//로그인안됨
							{
								echo "<li><a href='#' data-toggle='modal' data-target='#ModalLogin'><span
										class='hidden-xs'>Sign In</span></a></li>
								<li><a href='register_form.php'><span class='hidden-xs'>
											Register</span></a></li>";
							}
							else{
								echo "<li><a href='user_info.php'><span class='hidden-xs'>$check_session_name 님</span></a></li><li><a href='logout.php'><span class='hidden-xs'>
											logout</span></a></li>";
							}
							?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/.navbar-top-->

		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only"> Toggle navigation </span> <span
						class="icon-bar"> </span> <span class="icon-bar"> </span> <span
						class="icon-bar"> </span>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-cart">
					<i class="fa fa-shopping-cart colorWhite"> </i> <span
						class="cartRespons colorWhite"> Cart ($210.00) </span>
				</button>
				<a class="navbar-brand " href="index.php"> <img
					src="images/logo.png" alt="TSHOP">
				</a>

				<!-- this part for mobile -->
				<div class="search-box pull-right hidden-lg hidden-md hidden-sm">
					<div class="input-group">
						<button class="btn btn-nobg getFullSearch" type="button">
							<i class="fa fa-search"> </i>
						</button>
					</div>
					<!-- /input-group -->

				</div>
			</div>

			<!-- this part is duplicate from cartMenu  keep it for mobile -->
			<div class="navbar-cart  collapse">
				<div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
					<div class="w100 miniCartTable scroll-pane">
						<table>
							<tbody>
								<tr class="miniCartProduct">
									<td style="width: 20%" class="miniCartProductThumb">
										<div>
											<a href="product-details.html"> <img
												src="images/product/3.jpg" alt="img">
											</a>
										</div>
									</td>
									<td style="width: 40%">
										<div class="miniCartDescription">
											<h4>
												<a href="product-details.html"> TSHOP T shirt Black </a>
											</h4>
											<span class="size"> 12 x 1.5 L </span>

											<div class="price">
												<span> $8.80 </span>
											</div>
										</div>
									</td>
									<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
									<td style="width: 15%" class="miniCartSubtotal"><span> $8.80 </span></td>
									<td style="width: 5%" class="delete"><a> x </a></td>
								</tr>
								<tr class="miniCartProduct">
									<td style="width: 20%" class="miniCartProductThumb">
										<div>
											<a href="product-details.html"> <img
												src="images/product/2.jpg" alt="img">
											</a>
										</div>
									</td>
									<td style="width: 40%">
										<div class="miniCartDescription">
											<h4>
												<a href="product-details.html"> TSHOP T shirt Black </a>
											</h4>
											<span class="size"> 12 x 1.5 L </span>

											<div class="price">
												<span> $8.80 </span>
											</div>
										</div>
									</td>
									<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
									<td style="width: 15%" class="miniCartSubtotal"><span> $8.80 </span></td>
									<td style="width: 5%" class="delete"><a> x </a></td>
								</tr>
								<tr class="miniCartProduct">
									<td style="width: 20%" class="miniCartProductThumb">
										<div>
											<a href="product-details.html"> <img
												src="images/product/5.jpg" alt="img">
											</a>
										</div>
									</td>
									<td style="width: 40%">
										<div class="miniCartDescription">
											<h4>
												<a href="product-details.html"> TSHOP T shirt Black </a>
											</h4>
											<span class="size"> 12 x 1.5 L </span>

											<div class="price">
												<span> $8.80 </span>
											</div>
										</div>
									</td>
									<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
									<td style="width: 15%" class="miniCartSubtotal"><span> $8.80 </span></td>
									<td style="width: 5%" class="delete"><a> x </a></td>
								</tr>
								<tr class="miniCartProduct">
									<td style="width: 20%" class="miniCartProductThumb">
										<div>
											<a href="product-details.html"> <img
												src="images/product/3.jpg" alt="img">
											</a>
										</div>
									</td>
									<td style="width: 40%">
										<div class="miniCartDescription">
											<h4>
												<a href="product-details.html"> TSHOP T shirt Black </a>
											</h4>
											<span class="size"> 12 x 1.5 L </span>

											<div class="price">
												<span> $8.80 </span>
											</div>
										</div>
									</td>
									<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
									<td style="width: 15%" class="miniCartSubtotal"><span> $8.80 </span></td>
									<td style="width: 5%" class="delete"><a> x </a></td>
								</tr>
								<tr class="miniCartProduct">
									<td style="width: 20%" class="miniCartProductThumb">
										<div>
											<a href="product-details.html"> <img
												src="images/product/3.jpg" alt="img">
											</a>
										</div>
									</td>
									<td style="width: 40%">
										<div class="miniCartDescription">
											<h4>
												<a href="product-details.html"> TSHOP T shirt Black </a>
											</h4>
											<span class="size"> 12 x 1.5 L </span>

											<div class="price">
												<span> $8.80 </span>
											</div>
										</div>
									</td>
									<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
									<td style="width: 15%" class="miniCartSubtotal"><span> $8.80 </span></td>
									<td style="width: 5%" class="delete"><a> x </a></td>
								</tr>
								<tr class="miniCartProduct">
									<td style="width: 20%" class="miniCartProductThumb">
										<div>
											<a href="product-details.html"> <img
												src="images/product/4.jpg" alt="img">
											</a>
										</div>
									</td>
									<td style="width: 40%">
										<div class="miniCartDescription">
											<h4>
												<a href="product-details.html"> TSHOP T shirt Black </a>
											</h4>
											<span class="size"> 12 x 1.5 L </span>

											<div class="price">
												<span> $8.80 </span>
											</div>
										</div>
									</td>
									<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
									<td style="width: 15%" class="miniCartSubtotal"><span> $8.80 </span></td>
									<td style="width: 5%" class="delete"><a> x </a></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--/.miniCartTable-->

					<div class="miniCartFooter  miniCartFooterInMobile text-right">
						<h3 class="text-right subtotal">Subtotal: $210</h3>
						<a class="btn btn-sm btn-danger" href="cart.html"> <i
							class="fa fa-shopping-cart"> </i> VIEW CART
						</a> <a href="checkout-0.html" class="btn btn-sm btn-primary">
							CHECKOUT </a>
					</div>
					<!--/.miniCartFooter-->

				</div>
				<!--/.cartMenu-->
			</div>
			<!--/.navbar-cart-->

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"> Home </a></li>
					<!-- 상품리스트 화면으로 넘어가기 -->
                <li class="dropdown megamenu-fullwidth"><a data-toggle="dropdown" class="dropdown-toggle" href="#"> Rental
                    Products <b class="caret"> </b> </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ">
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li><a href="category.html"> 프로캠코더 </a></li>
                                <li><a href="category.html"> 캠코더용 렌즈 </a></li>
                                <li><a href="category.html"> DSLR </a></li>
                                <li><a href="category.html"> DSLR LENS </a></li>
                                <li><a href="category.html"> 컴팩트 카메라 </a></li>
                                <li><a href="category.html"> 핸디캠 </a></li>
                                <li><a href="category.html"> 녹음장비 </a></li>
                                <li><a href="category.html"> 삼각대 </a></li>                                
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li><a href="category.html"> 모니터 </a></li>
                                <li><a href="category.html"> 조명장비 </a></li>
                                <li><a href="category.html"> 저장장치 </a></li>
                                <li><a href="category.html"> 그립셋 </a></li>
                                <li><a href="category.html"> 필터 </a></li>
                                <li><a href="category.html"> 노트북 </a></li>
                                <li><a href="category.html"> 빔프로젝트 </a></li>
                                <li><a href="category.html"> 기타장비 </a></li>  
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img
                                        class="img-responsive" src="images/site/recommandset.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> Recommand Set </span>
                                </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img
                                        class="img-responsive" src="images/site/userrecommandset.jpg" alt="product"> <span
                                        class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> User Recommand Set </span>
                                </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>  
				</ul>

				<!--- this part will be hidden for mobile version -->
				<div class="nav navbar-nav navbar-right hidden-xs">
					<div class="dropdown  cartMenu ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i
							class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Cart
								($210.00) </span> <b class="caret"> </b>
						</a>

						<div class="dropdown-menu col-lg-4 col-xs-12 col-md-4 ">
							<div class="w100 miniCartTable scroll-pane">
								<table>
									<tbody>
										<tr class="miniCartProduct">
											<td style="width: 20%" class="miniCartProductThumb">
												<div>
													<a href="product-details.html"> <img
														src="images/product/3.jpg" alt="img">
													</a>
												</div>
											</td>
											<td style="width: 40%">
												<div class="miniCartDescription">
													<h4>
														<a href="product-details.html"> TSHOP Tshirt DO9 </a>
													</h4>
													<span class="size"> 12 x 1.5 L </span>

													<div class="price">
														<span> $22 </span>
													</div>
												</div>
											</td>
											<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
											<td style="width: 15%" class="miniCartSubtotal"><span> $33 </span></td>
											<td style="width: 5%" class="delete"><a> x </a></td>
										</tr>
										<tr class="miniCartProduct">
											<td style="width: 20%" class="miniCartProductThumb">
												<div>
													<a href="product-details.html"> <img
														src="images/product/2.jpg" alt="img">
													</a>
												</div>
											</td>
											<td style="width: 40%">
												<div class="miniCartDescription">
													<h4>
														<a href="product-details.html"> TShir TSHOP 09 </a>
													</h4>
													<span class="size"> 12 x 1.5 L </span>

													<div class="price">
														<span> $15 </span>
													</div>
												</div>
											</td>
											<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
											<td style="width: 15%" class="miniCartSubtotal"><span> $120 </span></td>
											<td style="width: 5%" class="delete"><a> x </a></td>
										</tr>
										<tr class="miniCartProduct">
											<td style="width: 20%" class="miniCartProductThumb">
												<div>
													<a href="product-details.html"> <img
														src="images/product/5.jpg" alt="img">
													</a>
												</div>
											</td>
											<td style="width: 40%">
												<div class="miniCartDescription">
													<h4>
														<a href="product-details.html"> Tshir 2014 </a>
													</h4>
													<span class="size"> 12 x 1.5 L </span>

													<div class="price">
														<span> $30 </span>
													</div>
												</div>
											</td>
											<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
											<td style="width: 15%" class="miniCartSubtotal"><span> $80 </span></td>
											<td style="width: 5%" class="delete"><a> x </a></td>
										</tr>
										<tr class="miniCartProduct">
											<td style="width: 20%" class="miniCartProductThumb">
												<div>
													<a href="product-details.html"> <img
														src="images/product/3.jpg" alt="img">
													</a>
												</div>
											</td>
											<td style="width: 40%">
												<div class="miniCartDescription">
													<h4>
														<a href="product-details.html"> TSHOP T shirt DO20 </a>
													</h4>
													<span class="size"> 12 x 1.5 L </span>

													<div class="price">
														<span> $15 </span>
													</div>
												</div>
											</td>
											<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
											<td style="width: 15%" class="miniCartSubtotal"><span> $55 </span></td>
											<td style="width: 5%" class="delete"><a> x </a></td>
										</tr>
										<tr class="miniCartProduct">
											<td style="width: 20%" class="miniCartProductThumb">
												<div>
													<a href="product-details.html"> <img
														src="images/product/4.jpg" alt="img">
													</a>
												</div>
											</td>
											<td style="width: 40%">
												<div class="miniCartDescription">
													<h4>
														<a href="product-details.html"> T shirt Black </a>
													</h4>
													<span class="size"> 12 x 1.5 L </span>

													<div class="price">
														<span> $44 </span>
													</div>
												</div>
											</td>
											<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
											<td style="width: 15%" class="miniCartSubtotal"><span> $40 </span></td>
											<td style="width: 5%" class="delete"><a> x </a></td>
										</tr>
										<tr class="miniCartProduct">
											<td style="width: 20%" class="miniCartProductThumb">
												<div>
													<a href="product-details.html"> <img
														src="images/site/winter.jpg" alt="img">
													</a>
												</div>
											</td>
											<td style="width: 40%">
												<div class="miniCartDescription">
													<h4>
														<a href="product-details.html"> G Star T shirt </a>
													</h4>
													<span class="size"> 12 x 1.5 L </span>

													<div class="price">
														<span> $80 </span>
													</div>
												</div>
											</td>
											<td style="width: 10%" class="miniCartQuantity"><a> X 1 </a></td>
											<td style="width: 15%" class="miniCartSubtotal"><span> $8.80
											</span></td>
											<td style="width: 5%" class="delete"><a> x </a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--/.miniCartTable-->

							<div class="miniCartFooter text-right">
								<h3 class="text-right subtotal">Subtotal: $210</h3>
								<a class="btn btn-sm btn-danger" href="cart.html"> <i
									class="fa fa-shopping-cart"> </i> VIEW CART
								</a><a class="btn btn-sm btn-primary"> CHECKOUT </a>
							</div>
							<!--/.miniCartFooter-->

						</div>
						<!--/.dropdown-menu-->
					</div>
					<!--/.cartMenu-->

					<div class="search-box">
						<div class="input-group">
							<button class="btn btn-nobg getFullSearch" type="button">
								<i class="fa fa-search"> </i>
							</button>
						</div>
						<!-- /input-group -->

					</div>
					<!--/.search-box -->
				</div>
				<!--/.navbar-nav hidden-xs-->
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container -->

		<div class="search-full text-right">
			<a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i>
			</a>

			<div class="searchInputBox pull-right">
				<input type="search" data-searchurl="search?=" name="q"
					placeholder="start typing and hit enter to search"
					class="search-input">
				<button class="btn-nobg search-btn" type="submit">
					<i class="fa fa-search"> </i>
				</button>
			</div>
		</div>
		<!--/.search-full-->

	</div>
	<!-- /.Fixed navbar  -->

	<div class="banner banner-boxes">
		<div class="slider-content">
			<span class="prevControl sliderControl"> <i
				class="fa fa-angle-left fa-3x "></i></span> <span
				class="nextControl sliderControl"> <i
				class="fa fa-angle-right fa-3x "></i></span>

			<div class="swiper-container swiper-container-h">
				<div class="swiper-wrapper">
				<!--  
					<div class="swiper-slide slide-2x">
						<div class="box-slider-content">
							<div class="box-text">
								<h1>SRL 렌탈샵</h1>

								<p>에스엘알 렌트에서는 카드/현금/계산서 발행시 금액이 모두 동일합니다.</p>
								<a class="btn btn-stroke-light" href="http://www.slrrent.com/index_home.php"> SHOP NOW</a>
							</div>
							<div class="box-content-overly">
								
							</div>
							<a href="#" class="box-img"> <img src="images/slider/box/1.png"
								alt="img"></a>
						</div>
					</div>
					-->
					<div class="swiper-slide slide-2x">
						<div class="slider-box-top">
							<div class="box-slider-content">
								<div class="box-text-table">
									<div class="box-text-cell">
										<h1 class="bolder-style light">
											<a href="#">SALE</a>
										</h1>
										<span class="bolder-sub"> <a href="#"> SLR 렌탈 </a>
										</span>
									</div>
								</div>
								<div class="box-content-overly">
									<!-- Delete this div if you dont want overly effect -->
								</div>
								<a href="#" class="box-img"> <img src="images/slider/box/2a.jpg"
									alt="img"></a>
							</div>
						</div>
						<div class="slider-box-bottom">
							<div class="box-slider-content">
								<div class="box-price-tag">
									<span class="price">$200</span>
								</div>
								<a href="#" class="box-img"> <img src="images/slider/box/2b.jpg"
									alt="img">
								</a>

								<div class="box-content-overly">
									<a href="#" class="box-blank-url"> <!-- keep this blank. This link will provide a hyperlink over the box-content-overly div -->
									</a>
								</div>
							</div>
						</div>
					</div>
					<!--  -->
					<div class="swiper-slide slide-2x">
						<div class="box-slider-content">
							<div class="box-text bottom-align">
								<h1>제이포</h1>
								<a class="btn btn-stroke-light" href="http://www.j4.co.kr/"> SHOP NOW</a>
							</div>
							<a href="#" class="box-img"> <img src="images/slider/box/3.png"
								alt="img"></a>

							<div class="box-content-overly">
								<a href="#" class="box-blank-url"> </a>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-4x">
						<div class="box-4in a">
							<div class="box-slider-content">
								<a href="http://www.j4.co.kr/232" class="box-img"> <img src="images/slider/box/4a.jpg"
									alt="img"></a>

								<div class="box-content-overly">
									<div class="box-text-table">
										<div class="box-text-cell">
											<a class="btn btn-default" href="http://www.j4.co.kr/232"> VIEW DEAL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-4in b">
							<div class="box-slider-content">
								<a href="http://www.j4.co.kr/54388" class="box-img"> <img src="images/slider/box/4b.jpg"
									alt="img"></a>
								<div class="box-content-overly">
									<div class="box-text-table">
										<div class="box-text-cell">
											<a class="btn btn-default" href="http://www.j4.co.kr/54388"> VIEW DEAL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-4in c">
							<div class="box-slider-content">
								<a href="#" class="box-img"> <img src="images/slider/box/4c.jpg"
									alt="img"></a>

								<div class="box-content-overly box-content-overly-white">
									<div class="box-text-table">
										<div class="box-text-cell">
											<a class="btn btn-stroke-dark" href="http://www.j4.co.kr/429"> VIEW DEAL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-4in d">
							<div class="box-slider-content">
								<a href="#" class="box-img"> <img src="images/slider/box/4d.jpg"
									alt="img"></a>

								<div class="box-content-overly box-content-overly-white">
									<div class="box-text-table">
										<div class="box-text-cell">
											<a class="btn btn-stroke-dark" href="http://www.j4.co.kr/350"> VIEW DEAL</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-2x">
						<div class="box-slider-content">
							<a href="#" class="box-img"> <img src="images/slider/box/6.jpg"
								alt="img"></a>

							<div class="box-content-overly box-content-overly-white">
								<div class="box-text-table">
									<div class="box-text-cell ">
										<div class="box-text-cell-inner dark">
											<h1>한렌탈</h1>

											<p>전화상담시 최저가 보장!</p>
											<a class="btn btn-stroke-dark" href="http://www.hanent.com/"> SHOP NOW</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-2x">
						<div class="slider-box-top">
							<div class="box-slider-content">
								<div class="box-content-overly box-content-overly-white">
									<div class="box-text-table">
										<div class="box-text-cell">
											<span class="price dealprice"> $ 120 </span> <a
												class="btn btn-stroke-dark"> VIEW DEAL</a>
										</div>
									</div>
								</div>
								<a href="#" class="box-img"> <img src="images/slider/box/7b.jpg"
									alt="img"></a>
							</div>
						</div>
						<div class="slider-box-bottom">
							<div class="box-4in c">
								<div class="box-slider-content">
									<a href="#" class="box-img"> <img
										src="images/slider/box/7b1.jpg" alt="img"></a>

									<div class="box-content-overly box-content-overly-white">
										<div class="box-text-table">
											<div class="box-text-cell">
												<span class="price"> $ 450 </span> <a
													class="btn btn-stroke-dark"> VIEW DEAL</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="box-4in d">
								<div class="box-slider-content">
									<a href="#" class="box-img"> <img
										src="images/slider/box/7b2.jpg" alt="img"></a>

									<div class="box-content-overly box-content-overly-white">
										<div class="box-text-table">
											<div class="box-text-cell">
												<span class="price"> $ 680 </span> <a
													class="btn btn-stroke-dark"> VIEW DEAL</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide slide-2x">
						<div class="box-slider-content">
							<a href="#" class="box-img last-child-slide"> <img
								src="images/slider/box/5.png" alt="img"></a>

							<div class="box-content-overly box-content-overly-white">
								<div class="box-text-table">
									<div class="box-text-cell ">
										<div class="box-text-cell-inner dark">
											<h1>스타렌탈</h1>

											<p>영업시간 안내: 24시간 / 카카오톡 아이디:스타렌탈</p>
											<a class="btn btn-stroke-dark" href="http://starrental.co.kr/"> SHOP NOW</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-pagination swiper-pagination"></div>
			</div>

			<!--/.full-container-->
		</div>
	</div>
	<!--/.banner style1-->

	<div class="container main-container">

		<!-- Main component call to action -->

		<div class="row featuredPostContainer globalPadding style2">
			<h3 class="section-title style2 text-center">
				<span>NEW ARRIVALS</span>
			</h3>

			<div id="productslider" class="owl-carousel owl-theme">
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/34.jpg"
								alt="img" class="img-responsive"></a>

							<div class="promotion">
								<span class="new-product"> NEW</span> <span class="discount">15%
									OFF</span>
							</div>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">consectetuer adipiscing </a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/30.jpg"
								alt="img" class="img-responsive"></a>

							<div class="promotion">
								<span class="discount">15% OFF</span>
							</div>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">luptatum zzril delenit</a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/36.jpg"
								alt="img" class="img-responsive"></a>

							<div class="promotion">
								<span class="new-product"> NEW</span>
							</div>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">eleifend option </a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/9.jpg"
								alt="img" class="img-responsive"></a>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">mutationem consuetudium </a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/12.jpg"
								alt="img" class="img-responsive"></a>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">sequitur mutationem </a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/13.jpg"
								alt="img" class="img-responsive"></a>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">consuetudium lectorum.</a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/21.jpg"
								alt="img" class="img-responsive"></a>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">parum claram</a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/24.jpg"
								alt="img" class="img-responsive"></a>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">duis dolore </a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="product">
						<a class="add-fav tooltipHere" data-toggle="tooltip"
							data-original-title="Add to Wishlist" data-placement="left"> <i
							class="glyphicon glyphicon-heart"></i>
						</a>

						<div class="image">
							<div class="quickview">
								<a data-toggle="modal" class="btn btn-xs btn-quickview"
									href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
									View </a>
							</div>
							<a href="product-details.html"><img src="images/product/15.jpg"
								alt="img" class="img-responsive"></a>
						</div>
						<div class="description">
							<h4>
								<a href="product-details.html">feugait nulla facilisi</a>
							</h4>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<span class="size">XL / XXL / S </span>
						</div>
						<div class="price">
							<span>$25</span>
						</div>
						<div class="action-control">
							<a class="btn btn-primary"> <span class="add2cart"><i
									class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--/.productslider-->

		</div>
		<!--/.featuredPostContainer-->
	</div>
	<!-- /main container -->

	<div class="parallax-section parallax-image-1">
	    <div class="container explain-container">
	        <div class="row ">
	            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                <div class="parallax-content clearfix">
	                    <h1 class="parallaxPrce"> 17JUNGLE RENTAL 이용방법 </h1>
	
	                    <h2 class="uppercase">복잡한 대여 방식은 이제 그만! 17JUNGLE로 쉽게 이용하자.</h2>
						<!-- True Car 사이트 처럼 첫 소개 페이지만들기.
						/회원가입한다. package에 담는다. 신청한다. 빌린다. 방식으로 갈지 아니면
						자신만의 package를 만들어보세요.  -->
	                    <h3> 자신만의 Package를 만들고 빌리고, 나눠요. </h3>
	
	                    <div style="clear:both"></div>
	                    <a class="btn btn-discover "> <i class="fa fa-shopping-cart"></i> PACKAGE 만들기 </a></div>
	            </div>
	        </div>
	        <!--/.row-->
	    </div>
    	<!--/.container-->
	</div>
	<!--/.parallax-image-1-->

	<div class="container main-container">

		<!-- Main component call to action -->

		<div
			class="morePost row featuredPostContainer style2 globalPaddingTop ">
			<h3 class="section-title style2 text-center">
				<span>FEATURES PRODUCT</span>
			</h3>

			<div class="container">
				<div class="row xsResponse">
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/30.jpg"
									alt="img" class="img-responsive"></a>

								<div class="promotion">
									<span class="new-product"> NEW</span> <span class="discount">15%
										OFF</span>
								</div>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">aliquam erat volutpat</a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span> <span class="old-price">$75</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/31.jpg"
									alt="img" class="img-responsive"></a>

								<div class="promotion">
									<span class="discount">15% OFF</span>
								</div>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">ullamcorper suscipit lobortis </a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/34.jpg"
									alt="img" class="img-responsive"></a>

								<div class="promotion">
									<span class="new-product"> NEW</span>
								</div>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">demonstraverunt lectores </a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/12.jpg"
									alt="img" class="img-responsive"></a>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">humanitatis per</a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/33.jpg"
									alt="img" class="img-responsive"></a>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">Eodem modo typi</a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/10.jpg"
									alt="img" class="img-responsive"></a>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">sequitur mutationem </a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/37.jpg"
									alt="img" class="img-responsive"></a>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">consuetudium lectorum.</a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/35.jpg"
									alt="img" class="img-responsive"></a>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">parum claram</a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span> <span class="old-price">$75</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/13.jpg"
									alt="img" class="img-responsive"></a>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">duis dolore </a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/21.jpg"
									alt="img" class="img-responsive"></a>

								<div class="promotion">
									<span class="new-product"> NEW</span> <span class="discount">15%
										OFF</span>
								</div>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">aliquam erat volutpat</a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/14.jpg"
									alt="img" class="img-responsive"></a>

								<div class="promotion">
									<span class="discount">15% OFF</span>
								</div>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">ullamcorper suscipit lobortis </a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
					<div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
						<div class="product">
							<a class="add-fav tooltipHere" data-toggle="tooltip"
								data-original-title="Add to Wishlist" data-placement="left"> <i
								class="glyphicon glyphicon-heart"></i>
							</a>

							<div class="image">
								<div class="quickview">
									<a data-toggle="modal" class="btn btn-xs btn-quickview"
										href="ajax/product.html"
										data-target="#productSetailsModalAjax">Quick View </a>
								</div>
								<a href="product-details.html"><img src="images/product/17.jpg"
									alt="img" class="img-responsive"></a>

								<div class="promotion">
									<span class="new-product"> NEW</span>
								</div>
							</div>
							<div class="description">
								<h4>
									<a href="product-details.html">demonstraverunt lectores </a>
								</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<span class="size">XL / XXL / S </span>
							</div>
							<div class="price">
								<span>$25</span>
							</div>
							<div class="action-control">
								<a class="btn btn-primary"> <span class="add2cart"><i
										class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span>
								</a>
							</div>
						</div>
					</div>
					<!--/.item-->
				</div>
				<!-- /.row -->

				<div class="row">
					<div class="load-more-block text-center">
						<a class="btn btn-thin" href="#"> <i class="fa fa-plus-sign">+</i>
							load more products
						</a>
					</div>
				</div>
			</div>
			<!--/.container-->
		</div>
		<!--/.featuredPostContainer-->

		<hr class="no-margin-top">
		<div class="width100 section-block ">
			<div class="row featureImg">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="category.html"><img src="images/site/new-collection-1.jpg"
						class="img-responsive" alt="img"></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="category.html"><img src="images/site/new-collection-2.jpg"
						class="img-responsive" alt="img"></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="category.html"><img src="images/site/new-collection-3.jpg"
						class="img-responsive" alt="img"></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="category.html"><img src="images/site/new-collection-4.jpg"
						class="img-responsive" alt="img"></a>
				</div>
			</div>
			<!--/.row-->
		</div>
		<!--/.section-block-->

		<div class="width100 section-block">
			<h3 class="section-title">
				<span> BRAND</span> <a id="nextBrand"
					class="link pull-right carousel-nav"> <i class="fa fa-angle-right"></i></a>
				<a id="prevBrand" class="link pull-right carousel-nav"> <i
					class="fa fa-angle-left"></i>
				</a>
			</h3>

			<div class="row">
				<div class="col-lg-12">
					<ul class="no-margin brand-carousel owl-carousel owl-theme">
						<li><a><img src="images/brand/1.gif" alt="img"></a></li>
						<li><img src="images/brand/2.png" alt="img"></li>
						<li><img src="images/brand/3.png" alt="img"></li>
						<li><img src="images/brand/4.png" alt="img"></li>
						<li><img src="images/brand/5.png" alt="img"></li>
						<li><img src="images/brand/6.png" alt="img"></li>
						<li><img src="images/brand/7.png" alt="img"></li>
						<li><img src="images/brand/8.png" alt="img"></li>
						<li><img src="images/brand/1.gif" alt="img"></li>
						<li><img src="images/brand/2.png" alt="img"></li>
						<li><img src="images/brand/3.png" alt="img"></li>
						<li><img src="images/brand/4.png" alt="img"></li>
						<li><img src="images/brand/5.png" alt="img"></li>
						<li><img src="images/brand/6.png" alt="img"></li>
						<li><img src="images/brand/7.png" alt="img"></li>
						<li><img src="images/brand/8.png" alt="img"></li>
					</ul>
				</div>
			</div>
			<!--/.row-->
		</div>
		<!--/.section-block-->

	</div>
	<!--main-container-->

	<div class="parallax-section parallax-image-2">
		<div class="w100 parallax-section-overley">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="parallax-content clearfix">
							<h1 class="xlarge">Trusted Seller 500+</h1>
							<h5 class="parallaxSubtitle">Lorem ipsum dolor sit amet
								consectetuer</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.parallax-section-->

	<!-- Product Details Modal  -->
	<!-- Modal -->
	<div class="modal fade" id="productSetailsModalAjax" tabindex="-1"
		role="dialog" aria-labelledby="productSetailsModalAjaxLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"></div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- End Modal -->

	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
						<h3>Support</h3>
						<ul>
							<li class="supportLi">
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<h4>
									<a class="inline" href="callto:+12025550151"> <strong> <i
											class="fa fa-phone"> </i> +1-202-555-0151
									</strong>
									</a>
								</h4>
								<h4>
									<a class="inline" href="mailto:help@yourweb.com"> <i
										class="fa fa-envelope-o"> </i> help@yourweb.com
									</a>
								</h4>
							</li>
						</ul>
					</div>
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<h3>Shop</h3>
						<ul>
							<li><a href="#"> Men's </a></li>
							<li><a href="#"> Women's</a></li>
							<li><a href="#"> Kids' </a></li>
							<li><a href="#">Shoes </a></li>
							<li><a href="#"> Gift Cards </a></li>

						</ul>

					</div>

					<div style="clear: both" class="hide visible-xs"></div>

					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<h3>Information</h3>
						<ul class="list-unstyled footer-nav">
							<li><a href="#">Questions? </a></li>

							<li><a href="#"> Order Status </a></li>
							<li><a href="#"> Sizing Charts </a></li>
							<li><a href="#"> Return Policy </a></li>
							<li><a href="#"> Contact Us </a></li>

						</ul>
					</div>
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<h3>My Account</h3>
						<ul>
							<li><a href="account.html"> My Account </a></li>
							<li><a href="my-address.html"> My Address </a></li>
							<li><a href="wishlist.html"> Wish List </a></li>
							<li><a href="order-list.html"> Order list </a></li>
							<li><a href="order-status.html"> Order Status </a></li>
						</ul>
					</div>

					<div style="clear: both" class="hide visible-xs"></div>

					<div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
						<h3>Stay in touch</h3>
						<ul>
							<li>
								<div class="input-append newsLatterBox text-center">
									<input type="text" class="full text-center"
										placeholder="Email ">
									<button class="btn  bg-gray" type="button">
										Subscribe <i class="fa fa-long-arrow-right"> </i>
									</button>
								</div>
							</li>
						</ul>
						<ul class="social">
							<li><a href="http://facebook.com"> <i class=" fa fa-facebook">
										&nbsp; </i>
							</a></li>
							<li><a href="http://twitter.com"> <i class="fa fa-twitter">
										&nbsp; </i>
							</a></li>
							<li><a href="https://plus.google.com"> <i
									class="fa fa-google-plus"> &nbsp; </i>
							</a></li>
							<li><a href="http://youtube.com"> <i class="fa fa-pinterest">
										&nbsp; </i>
							</a></li>
							<li><a href="http://youtube.com"> <i class="fa fa-youtube">
										&nbsp; </i>
							</a></li>
						</ul>
					</div>
				</div>
				<!--/.row-->
			</div>
			<!--/.container-->
		</div>
		<!--/.footer-->

		<div class="footer-bottom">
			<div class="container">
				<p class="pull-left">&copy; TSHOP 2014. All right reserved.</p>

				<div class="pull-right paymentMethodImg">
					<img height="30" class="pull-right"
						src="images/site/payment/master_card.png" alt="img"> <img
						height="30" class="pull-right"
						src="images/site/payment/visa_card.png" alt="img"><img height="30"
						class="pull-right" src="images/site/payment/paypal.png" alt="img">
					<img height="30" class="pull-right"
						src="images/site/payment/american_express_card.png" alt="img"> <img
						height="30" class="pull-right"
						src="images/site/payment/discover_network_card.png" alt="img"> <img
						height="30" class="pull-right"
						src="images/site/payment/google_wallet.png" alt="img">

				</div>
			</div>
		</div>
		<!--/.footer-bottom-->
	</footer>

	<!-- Le javascript
================================================== -->

	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript"
		src="assets/js/jquery/jquery-1.10.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/swiper-master/js/swiper.jquery.min.js"></script>
	<script>


    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.nextControl',
        prevButton: '.prevControl',
        keyboardControl: true,
        paginationClickable: true,
        slidesPerView: 'auto',
        autoResize: true,
        resizeReInit: true,
        spaceBetween: 0,
        freeMode: true
    });


</script>

	<!-- include jqueryCycle plugin -->
	<script src="assets/js/jquery.cycle2.min.js"></script>

	<!-- include easing plugin -->
	<script src="assets/js/jquery.easing.1.3.js"></script>

	<!-- include  parallax plugin -->
	<script type="text/javascript" src="assets/js/jquery.parallax-1.1.js"></script>

	<!-- optionally include helper plugins -->
	<script type="text/javascript"
		src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

	<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

	<script type="text/javascript"
		src="assets/js/jquery.mCustomScrollbar.js"></script>

	<!-- include icheck plugin // customized checkboxes and radio buttons   -->
	<script type="text/javascript"
		src="assets/plugins/icheck-1.x/icheck.min.js"></script>

	<!-- include grid.js // for equal Div height  -->
	<script src="assets/js/grids.js"></script>

	<!-- include carousel slider plugin  -->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- jQuery select2 // custom select   -->
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

	<!-- include touchspin.js // touch friendly input spinner component   -->
	<script src="assets/js/bootstrap.touchspin.js"></script>

	<!-- include custom script for only homepage  -->
	<script src="assets/js/home.js"></script>

	<!-- include custom script for site  -->
	<script src="assets/js/script.js"></script>
</body>
</html>
