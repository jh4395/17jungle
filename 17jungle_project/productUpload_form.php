<?php include ('header.php');?> 

<div class="container main-container headerOffset">
 <div class="row">
		<div class="breadcrumbDiv col-lg-12">
			<ul class="breadcrumb">
				<li><a href="user_info.php">프로필 수정</a></li>
				<li><a href="myPackage.php">나의 패키지</a></li>
				<li><a href="myRentalList.php">대여 내역</a></li>
				<li class="active">물품 등록하기</li>
			</ul>
		</div>
	</div>
<div class="row">

		<div class="col-lg-9 col-md-12 col-sm-12">
			<h1 class="section-title-inner">
				<span><i class="glyphicon glyphicon-camera"></i>&nbsp Product Upload</span>
			</h1>

			<div class="row userInfo">

				<!-- 회원가입 폼 -->
				<form role="form" class="productUploadForm" action="productUpload.php"
					method="post" id="productUploadForm">

					<div class="col-xs-12 col-sm-6">
						<h2 class="block-title-2">Create new account</h2>
						<div class="form-group">
							<label>제품 이름</label> 
							<div class="row">
							<div class="col-lg-9">
							<input id="productName" name="productName"
								type="text" class="form-control"  placeholder="Search Product"
								required minlength="3">
							</div>	
							<div class="col-lg-1">
								<span class="btn btn-info"><i class="glyphicon glyphicon-search"></i></span>
							</div>
								</div>
						</div>
						<div class="form-group">
						<label>시리얼 넘버</label> <input id="serialNum" name="serialNum" type="text"
								class="form-control" placeholder="Enter SerialNumber" required>
						</div>
						
						<div class="form-group">
							<label>12시간 가격</label> <input required minlength="1"
								id="12Price" name="12Price" type="text"
								class="form-control" placeholder="12시간" required>
						</div>
						<div class="form-group">
							<label>24시간 가격</label> <input required minlength="1"
								id="24Price" name="24Price" type="text"
								class="form-control" placeholder="24시간" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<h2 class="block-title-2">
							<span>&nbsp</span>
						</h2>
						<div class="form-group">
							<label>제품상세정보</label> 
								<textarea class="form-control" rows="4" id="productInfo"
								name="productInfo" placeholder="information about your product"></textarea>
								
						</div>
						
						
						<div class="error"></div>

						<input type="submit" class="btn btn-primary"
							value="제품 등록">
					</div>

				</form>
				<!-- 회원가입 폼 -->
			</div>
			<!--/row end-->

		</div>

		<div class="col-lg-3"></div>
	</div>
	<!--/row-->
</div>

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
 