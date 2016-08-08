
<?php include ('header.php');?>


	<script>

$(document).ready(function(){

	// id 중복 체크
	$("#newuserId").keyup(function(){
		
		$("#idcheckViews").html("");
		$.ajax({
			type:"post",
			url:"idCheck.php",
			data:"userId="+$("#newuserId").val().trim(),
			success:function(data){
				//alert(data);					
				if(data==true){
					$("#idcheckViews").html("아이디 사용가능");
					$("#idCheckResults").val($("#newuserId").val());
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
		
		else if($("#newuserPassword").val() != $("#newuserPasswordCheck").val()){
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
				<li><a href='#' data-toggle='modal' data-target='#ModalLogin'>login</a></li>
				<li class="active">Register</li>
			</ul>
		</div>
	</div>

	<div class="row">

		<div class="col-lg-9 col-md-12 col-sm-12">
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
							<label>Name</label> <input id="newuserName" name="newuserName"
								type="text" class="form-control" placeholder="Enter name"
								required minlength="3">
						</div>
						<div class="form-group">
							<label>Id</label> <input id="newuserId" name="newuserId" type="text"
								class="form-control" placeholder="Enter Id" required>
						</div>
						<!-- ajax 로 처리 -->
						<div class="form-group">
							<input type="hidden" id="idCheckResults" value=""><span
								id="idcheckViews"></span>
						</div>
						<div class="form-group">
							<label>Password</label> <input required minlength="4"
								id="newuserPassword" name="newuserPassword" type="password"
								class="form-control" placeholder="Password" required>
						</div>
						<div class="form-group">
							<label>Password Check</label> <input required minlength="4"
								id="newuserPasswordCheck" name="newuserPasswordCheck" type="password"
								class="form-control" placeholder="Password" required>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<h2 class="block-title-2">
							<span>&nbsp</span>
						</h2>
						<div class="form-group">
							<label>Email address</label> <input id="newuserEmail"
								name="newuserEmail" type="email" class="form-control"
								placeholder="Enter email" required>
						</div>
						<div class="form-group">
							<label>Phone</label> <input id="newuserPhone" name="newuserPhone"
								type="tel" class="form-control" placeholder="Enter phone"
								required>
						</div>
						<div class="form-group">
							<label>Job</label> <input id="newuserJob" name="newuserJob" type="text"
								class="form-control" placeholder="Enter job" required>
						</div>
						<div class="form-group">
							<label>Address</label> <input id="newuserAddress" name="newuserAddress"
								type="text" class="form-control"
								placeholder="Enter address(not necessary)">
						</div>
						<div class="form-group">
							<p>
								<a href="#">Forgot your password? </a>
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

		<div class="col-lg-3"></div>
	</div>
	<!--/row-->

	<div style="clear: both"></div>
</div>
<!-- /wrapper -->

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

