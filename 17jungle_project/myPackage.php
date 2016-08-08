<?php include ('header.php');?>


<div class="container main-container headerOffset">
	<div class="row">
		<div class="breadcrumbDiv col-lg-12">
			<ul class="breadcrumb">
				<li class="active"><a href="user_info.php">프로필 수정</a></li>
				<li class="active">나의 패키지</li>
				<li><a href="myRentalList.php">대여 내역</a></li>
				<li><a href="productUpload_form.php">물품 등록하기</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-7">
			<h1 class="section-title-inner">
				<span><i class="glyphicon glyphicon-shopping-cart"></i> My Package</span>
			</h1>
		</div>

	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row userInfo">
				<div class="col-xs-12 col-sm-12">

					<div class="w100 clearfix">
						<div class="row userInfo">

							<div style="clear: both"></div>

							<div class="onepage-checkout col-lg-12">

								<div class="panel-group" id="accordion" role="tablist"
									aria-multiselectable="true">

									<div class="panel panel-default">

										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse"
													data-parent="#accordion" href="#BillingInformation"
													aria-expanded="true" aria-controls="BillingInformation">
													패키지1 </a>
											</h4>
										</div>
										<div id="BillingInformation"
											class="panel-collapse collapse in" role="tabpanel"
											aria-labelledby="BillingInformation">
											<div class="panel-body">
												<div class="col-xs-12 col-sm-12">
													<table>
														<tbody>

															<tr class="CartProduct">
																<td style="width:10%">

																	<h3>p_type(모바일일땐 숨겨야겠음)</h3>

																</td>

																<td style="width:10%" class="CartProductThumb"><a
																	href="product-detail.php"><img
																		src="images/17jungle_product/canon70d_1.jpg"></a></td>                      

																<td style="width:20%">
																	<h4>p_name</h4> <span>50,000(1일기준)</span>

																</td>
																<td style="width:40%"><textarea class="form-control" rows="3" cols="50">
																	여기에 제품의 설명/url등을 쓰세요</textarea></td>
																<td>&nbsp;&nbsp;</td>
																
																<td class="delete" style="width:10%"><a title="Delete"> <i
																		class="glyphicon glyphicon-trash fa-2x"></i>
																</a></td>
																<td>&nbsp;&nbsp;&nbsp;</td>

																<td style="width:10%"><a title="Update"> <i
																		class="glyphicon glyphicon-ok fa-2x"></i>
																</a></td>
															</tr>
															
															<tr class="CartProduct">
																<td style="width:10%">

																	<h3>p_type</h3>

																</td>

																<td style="width:10%" class="CartProductThumb"><a
																	href="product-detail.php"><img
																		src="images/17jungle_product/canon70d_2.jpg"></a></td>                      

																<td style="width:20%">
																	<h4>p_name</h4> <span>50,000(1일기준)</span>

																</td>
																<td style="width:40%"><textarea  class="form-control" rows="3" cols="50">
																	싱가폴여행갈때 사진찍었는데 최고</textarea></td>
																<td>&nbsp;&nbsp;</td>
																
																<td class="delete" style="width:10%"><a title="Delete"> <i
																		class="glyphicon glyphicon-trash fa-2x"></i>
																</a></td>
																<td>&nbsp;&nbsp;&nbsp;</td>

																<td style="width:10%"><a title="Update"> <i
																		class="glyphicon glyphicon-ok fa-2x"></i>
																</a></td>
															</tr>
															
															<tr class="CartProduct">
																<td style="width:10%">

																	<h3>p_type</h3>

																</td>

																<td style="width:10%" class="CartProductThumb"><a
																	href="product-detail.php"><img
																		src="images/17jungle_product/canon70d_3.jpg"></a></td>                      

																<td style="width:20%">
																	<h4>p_name</h4> <span>50,000(1일기준)</span>

																</td>
																<td style="width:40%"><textarea class="form-control" rows="3" cols="50">
																	뷍주니 애기 돌잔치때 찍을꺼</textarea></td>
																<td>&nbsp;&nbsp;</td>
																
																<td class="delete" style="width:10%"><a title="Delete"> <i
																		class="glyphicon glyphicon-trash fa-2x"></i>
																</a></td>
																<td>&nbsp;&nbsp;&nbsp;</td>

																<td style="width:10%"><a title="Update"> <i
																		class="glyphicon glyphicon-ok fa-2x"></i>
																</a></td>
															</tr>
															
														</tbody>
													</table>
													<div class="gap"></div>
													<a class="btn btn-primary"> <span class="add2cart"><i
                                    class="glyphicon glyphicon-trash"></i>delete Package </span> </a>
													
												</div>

											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse"
													data-parent="#accordion" href="#Shippinginformation"
													aria-expanded="false" aria-controls="collapseTwo"> 패키지2 </a>
											</h4>
										</div>
										<div id="Shippinginformation" class="panel-collapse collapse"
											role="tabpanel" aria-labelledby="Shippinginformation">
											<div class="panel-body"></div>
										</div>
									</div>


								</div>

							</div>
							<!--onepage-checkout-->


						</div>
						<!--/row end-->

					</div>


				</div>
			</div>
			<!--/row end-->
		</div>


	</div>
	<!--/row-->

	<div style="clear: both"></div>

</div>
<!-- /.main-container-->
<div class="gap"></div>

<?php include ('footer.php');?>

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

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>


<script>


    $(document).ready(function () {

        $('input#newAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newBillingAddressBox').collapse("show");
            $('#exisitingAddressBox').collapse("hide");

        });

        $('input#exisitingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newBillingAddressBox').collapse("hide");
            $('#exisitingAddressBox').collapse("show");
        });


        $('input#newShippingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newShippingAddressBox').collapse("show");

        });

        $('input#existingShippingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newShippingAddressBox').collapse("hide");

        });


        $('input#creditCard').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#creditCardCollapse').collapse("toggle");

        });


        $('input#CashOnDelivery').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#CashOnDeliveryCollapse').collapse("toggle");

        });


    });


</script>

</body>
</html>