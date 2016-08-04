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

    
  <!-- gall-item Gallery for gallery page -->
    <link href="assets/plugins/magnific/magnific-popup.css" rel="stylesheet">

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
						class="cartRespons colorWhite"> Package </span>
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
					<li class="active"><a href="index.php"> home </a></li>
					<!-- 상품리스트 화면으로 넘어가기 -->
                <li class="dropdown megamenu-fullwidth"><a href="product_list.php"> Rental
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
							class="fa fa-shopping-cart"> </i> <span class="cartRespons"> Package</span> <b class="caret"> </b>
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