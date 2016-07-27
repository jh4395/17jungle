<!DOCTYPE html>
<html lang="en">
<head>

<!-- jQuery -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
<title>TSHOP - Bootstrap E-Commerce Parallax Theme</title>

<!-- Bootstrap core CSS -->
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

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
								<li><a href="#"> <span class="hidden-xs">HELP</span><i
										class="glyphicon glyphicon-info-sign hide visible-xs "></i>
								</a></li>
								<li class="phone-number"><a href="callto:+12025550151"> <span> <i
											class="glyphicon glyphicon-phone-alt "></i></span> <span
										class="hidden-xs" style="margin-left: 5px"> +1-202-555-0151 </span>
								</a></li>
							</ul>
						</div>
					</div>
					<div
						class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
						<div class="pull-right">
							<ul class="userMenu">

								<li><a href="#" data-toggle="modal" data-target="#ModalLogin"> <span
										class="hidden-xs">Sign In</span> <i
										class="glyphicon glyphicon-log-in hide visible-xs "></i>
								</a></li>

								<li><a href="register_form.php"><span class="hidden-xs">
											Register</span> <i
										class="glyphicon glyphicon-user hide visible-xs "></i></a></li>
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
	

	<script>

$(document).ready(function(){

	// id 중복 체크
	$("#userId").keyup(function(){
		$("#idcheckViews").html("");
		$.ajax({
			type:"post",
			url:"idCheck.php",
			data:"userId="+$("#userId").val().trim(),
			success:function(data){
				//alert(data);					
				if(data==true){
					$("#idcheckViews").html("아이디 사용가능");
					$("#idCheckResults").val($("#userId").val());
				} else{
					$("#idcheckViews").html("이미 사용중인 아이디입니다.");
					$("#idCheckResults").val("");
				}
			}
		});
	});

	
	$("#registerForm").submit(function(){

		if($("#idCheckResults").val()==""){
			alert("사용할 수 없는 아이디입니다!");
			return false;
		} 
		
		else if($("#userPassword").val() != $("#userPasswordCheck").val()){
			alert("비밀번호가 일치하지 않습니다!");
			return false;
			}
	});
	
});



</script>


	<div class="container main-container headerOffset">

		<div class="row">
			<div class="breadcrumbDiv col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Register</li>
				</ul>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-9 col-md-9 col-sm-7">
				<h1 class="section-title-inner">
					<span><i class="glyphicon glyphicon-user"></i>&nbsp Register</span>
				</h1>

				<div class="row userInfo">

					<!-- 회원가입 폼 -->
					<form role="form" class="registerForm" action="register.php"
						method="post" id="registerForm">

						<div class="col-xs-12 col-sm-6">
							<h2 class="block-title-2">Create new account</h2>
							<div class="form-group">
								<label>Name</label> <input id="userName" name="userName"
									type="text" class="form-control" placeholder="Enter name"
									required minlength="3">
							</div>
							<div class="form-group">
								<label>Id</label> <input id="userId" name="userId" type="text"
									class="form-control" placeholder="Enter Id" required>
							</div>
							<!-- ajax 로 처리 -->
							<div class="form-group">
								<input type="hidden" id="idCheckResults" value=""><span
									id="idcheckViews"></span>
							</div>
							<div class="form-group">
								<label>Password</label> <input required minlength="4"
									id="userPassword" name="userPassword" type="password"
									class="form-control" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label>Password Check</label> <input required minlength="4"
									id="userPasswordCheck" name="userPasswordCheck" type="password"
									class="form-control" placeholder="Password" required>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6">
							<h2 class="block-title-2">
								<span>&nbsp</span>
							</h2>
							<div class="form-group">
								<label>Email address</label> <input id="userEmail"
									name="userEmail" type="email" class="form-control"
									placeholder="Enter email" required>
							</div>
							<div class="form-group">
								<label>Phone</label> <input id="userPhone" name="userPhone"
									type="tel" class="form-control" placeholder="Enter phone"
									required>
							</div>
							<div class="form-group">
								<label>Job</label> <input id="userJob" name="userJob"
									type="text" class="form-control" placeholder="Enter job"
									required>
							</div>
							<div class="form-group">
								<label>Address</label> <input id="userAddress"
									name="userAddress" type="text" class="form-control"
									placeholder="Enter address(not necessary)">
							</div>
							<div class="form-group">
								<p>
									<a href="forgot-password.html">Forgot your password? </a>
								</p>
							</div>
							<div class="error"></div>

							<input type="submit" class="btn btn-primary"
								value="Create an account">
						</div>

					</form>
					<!-- 회원가입 폼 -->
				</div>
				<!--/row end-->

			</div>

			<div class="col-lg-3 col-md-3 col-sm-5"></div>
		</div>
		<!--/row-->

		<div style="clear: both"></div>
	</div>
	<!-- /wrapper -->

	<div class="gap"></div>


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
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
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

	<!-- include validate.js // jquery plugin   -->
	<script src="assets/js/jquery.validate.js"></script>

	<script>
    $().ready(function () {
        // validate the comment form when it is submitted
        $("#regForm").validate();

        // validate signup form on keyup and submit
        $(".regForm").validate({
            errorLabelContainer: $(".regForm div.error")
        });
    });
</script>


	<!-- include custom script for site  -->
	<script src="assets/js/script.js"></script>
</body>
</html>

