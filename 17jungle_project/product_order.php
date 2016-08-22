<?php include ('header.php');?>

<script>
   
$(function() {
    $("#datepicker1, #datepicker2").datepicker({
        
    	  dateFormat: 'yy-mm-dd'
    	});
});


//전체 체크//
$(document).ready(function(){
$("#check_all").click(function() {
		$("input[name=packageCheck]:checkbox").attr("checked", true);
	});
//전체 체크 해제
$("#uncheck_all").click(function() {
		$("input[name=packageCheck]:checkbox").attr("checked", false);
	});
});
	//끝 


</script>


<div class="container main-container headerOffset">

	<div class="row">
		<div
			class="col-lg-9 col-md-9 col-sm-7 col-xs-6 col-xxs-12 text-center-xs">
			<h1 class="section-title-inner">
				<span><i class="fa fa-list-alt"></i> Order </span>
			</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-7">
			<div class="row userInfo">
				<div class="col-xs-12 col-sm-12">
					<div class="cartContent w100">
						<table class="cartTable table-responsive" style="width: 100%">
							<tbody>

								<tr class="CartProduct cartTableHeader">
									<td style="width: 25%;">제품</td>
									<td style="width: 15%; text-align: center ">날짜</td>
									<td style="width: 20%">업체선택</td>
									<td style="width: 20%">가격</td>
									<td style="width: 20%" class="delete">삭제</td>
								</tr>


								<tr class="CartProduct">

									<td class="CartProductThumb"><label><input type="checkbox" name="packageCheck" value=""></label> <a href="product-details.html"><img
											src="images/17jungle_product/canon70d_2.jpg" alt="img"></a>
										<h4>캐논eos50</h4> <small>50,000 원(1일기준)</small> <input
										class="quanitySniper" type="text" value="2"
										name="quanitySniper"></td>


									<td class="CartProductThumb" style="text-align: center"><p id="startDate1">16.01.23</p> - <p id="endDate1">16.01.25</p></td>
									<!-- 예약 날짜  '-'를 기준으로 앞은 대여시작날짜 뒤는 대여끝날짜      -->

									<td class="CartProductThumb"><select name="conpany">
											<option value="">업체</option>
											<!-- 여기 해당 대여날짜 가능한 업체리스트만 보여주게 -->
											<option value="학생">j4</option>
											<option value="회사원">slr렌탈</option>
											<option value="기타">한렌탈</option>
									</select></td>
									<!-- 제품을 대여할 업체를 선택할 수있도록 -->

									<td class="price">$300</td>
									<!-- 업체 생각 되면 id를 이용하여 자동으로 가격이 나오도록ㅎㅎ -->

									<td class="delete"><a title="Delete"> <i
											class="glyphicon glyphicon-trash fa-2x"></i></a></td>
									<!-- 필요없을때 제품을 삭제할 수 있도록 -->

								</tr>
								
								<tr class="CartProduct">

									<td class="CartProductThumb"><label><input type="checkbox" name="packageCheck" value=""></label> <a href="product-details.html"><img
											src="images/17jungle_product/canon70d_2.jpg" alt="img"></a>
										<h4>캐논eos50</h4> <small>50,000 원(1일기준)</small> <input
										class="quanitySniper" type="text" value="2"
										name="quanitySniper"></td>


									<td class="CartProductThumb" style="text-align: center"><p id="startDate2">16.01.23</p> - <p id="endDate2">16.01.25</p></td>
									<!-- 예약 날짜  '-'를 기준으로 앞은 대여시작날짜 뒤는 대여끝날짜      -->

									<td class="CartProductThumb"><select name="conpany">
											<option value="">업체</option>
											<!-- 여기 해당 대여날짜 가능한 업체리스트만 보여주게 -->
											<option value="학생">j4</option>
											<option value="회사원">slr렌탈</option>
											<option value="기타">한렌탈</option>
									</select></td>
									<!-- 제품을 대여할 업체를 선택할 수있도록 -->

									<td class="price">$300</td>
									<!-- 업체 생각 되면 id를 이용하여 자동으로 가격이 나오도록ㅎㅎ -->

									<td class="delete"><a title="Delete"> <i
											class="glyphicon glyphicon-trash fa-2x"></i></a></td>
									<!-- 필요없을때 제품을 삭제할 수 있도록 -->

								</tr>
								
								<tr class="CartProduct">

									<td class="CartProductThumb"><label><input type="checkbox" name="packageCheck" value=""></label> <a href="product-details.html"><img
											src="images/17jungle_product/canon70d_2.jpg" alt="img"></a>
										<h4>캐논eos50</h4> <small>50,000 원(1일기준)</small> <input
										class="quanitySniper" type="text" value="2"
										name="quanitySniper"></td>


									<td class="CartProductThumb" style="text-align: center"><p id="startDate3">16.01.23</p> - <p id="endDate3">16.01.25</p></td>
									<!-- 예약 날짜  '-'를 기준으로 앞은 대여시작날짜 뒤는 대여끝날짜      -->

									<td class="CartProductThumb"><select name="conpany">
											<option value="">업체</option>
											<!-- 여기 해당 대여날짜 가능한 업체리스트만 보여주게 -->
											<option value="학생">j4</option>
											<option value="회사원">slr렌탈</option>
											<option value="기타">한렌탈</option>
									</select></td>
									<!-- 제품을 대여할 업체를 선택할 수있도록 -->

									<td class="price">$300</td>
									<!-- 업체 생각 되면 id를 이용하여 자동으로 가격이 나오도록ㅎㅎ -->

									<td class="delete"><a title="Delete"> <i
											class="glyphicon glyphicon-trash fa-2x"></i></a></td>
									<!-- 필요없을때 제품을 삭제할 수 있도록 -->

								</tr>
								

								
							</tbody>
						</table>
					</div>
					<!--cartContent-->

					<div class="cartFooter w100">
						<div class="box-footer">
							<div class="pull-left">
								<!-- <a href="#" data-toggle='modal' data-target='#ModalDatePicker'
									class="btn btn-default"> <i
									class="glyphicon glyphicon-calendar"></i> &nbsp;모달날짜선택
								</a>
								
							<input type="text" id="testDatepicker" class="btn btn-default" value="데이터피커날짜선택"><i
									class="glyphicon glyphicon-calendar"></i> -->

							
									대여날짜:&nbsp;<input type="text" id="datepicker1"> ~ <input type="text"
										id="datepicker2">
										<span class="btn btn-default"><i class="glyphicon glyphicon-calendar"></i>
								확인</span>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								<input class="btn btn-success" type="button" id="check_all" value='모두 선택' />
								<input class="btn btn-success" type="button" id="uncheck_all" value='모두 해제' />

							</div>

						</div>
					</div>
					<!--/ cartFooter -->

				</div>
			</div>
			<!--/row end-->
		</div>

		

		<div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
			<div class="contentBox">
				<div class="w100 costDetails">
					<div class="table-block" id="order-detail-content">
						<a class="btn btn-primary btn-lg btn-block " title="checkout"
							href="checkout-0.html" style="margin-bottom: 20px"> Proceed to
							checkout &nbsp; <i class="fa fa-arrow-right"></i>
						</a>

						<div class="w100 cartMiniTable">
							<table id="cart-summary" class="std table">
								<tbody>
									<tr>
										<td>Total products</td>
										<td class="price">$216.51</td>
									</tr>
									<tr style="">
										<td>Shipping</td>
										<td class="price"><span class="success">Free shipping!</span></td>
									</tr>
									<tr class="cart-total-price ">
										<td>Total (tax excl.)</td>
										<td class="price">$216.51</td>
									</tr>
									<tr>
										<td>Total tax</td>
										<td class="price" id="total-tax">$0.00</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class=" site-color" id="total-price">$216.51</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="input-append couponForm">
												<input class="col-lg-8" id="appendedInputButton" type="text"
													placeholder="Coupon code">
												<button class="col-lg-4 btn btn-success" type="button">Apply!</button>
											</div>
										</td>
									</tr>
								</tbody>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- End popular -->

		</div>
		<!--/rightSidebar-->

	</div>
	<!--/row-->



</div>

<!-- 모달부분 -->
<div class="modal signUpContent fade" id="ModalDatePicker"
			tabindex="-1" role="dialog">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">&times;</button>
						<h3 class="modal-title-site text-center">대여날짜 선택</h3>
					</div>
					<form action="login.php" method="post">

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

				</div>
				<!-- /.modal-content -->

			</div>
			<!-- /.modal-dialog -->

		</div>
		<!-- 모달끝 -->

<?php include ('footer.php');?>



<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>


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
</body>
</html>
