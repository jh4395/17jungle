
<?php include ('header.php');?> 
	
<script>

$(document).ready(function(){

	//alert("아 멍청아");

	$("#updateForm").submit(function(){
		
		 if($("#newPassword").val() != $("#newPasswordCheck").val()){
			alert("새로운 비밀번호가 일치하지 않습니다!");
			return false;
			}
	});
	
	
});

</script>

<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li class="active">프로필 수정</li>
                <li><a href="myPackage.php">나의 패키지</a></li>
                 <li><a href="myRentalList.php">대여 내역</a></li>
                <li><a href="productUpload_form.php">물품 등록하기</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12">
            <h1 class="section-title-inner"><span><i
                    class="glyphicon glyphicon-user"></i> My personal information </span></h1>

            <div class="row userInfo">
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Please be sure to update your personal information if it has
                        changed. </h2>

                    <p class="required"><sup>*</sup> Required field</p>
                </div>
                
                <form role="form" class="updateForm" action="user_update.php"
						method="post" id="updateForm">
						
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label > Name <sup>*</sup> </label>
                            <input type="text" class="form-control" name="userName"  id="user_name" value="<?php echo $check_session_name ?>" >
                        </div>
                        <div class="form-group">
                            <label for="Inputphone">Phone <sup>*</sup> </label>
                            <input  type="tel" class="form-control" name="userPhone" id="user_phone" value="<?php echo $check_session_phone ?>">
                        </div>
                        <div class="form-group required">
                            <label for="InputEmail"> Email </label>
                            <input  type="email" class="form-control" name="userEmail" id="user_email" value="<?php echo $check_session_email ?>">
                        </div>
                        <div class="form-group required">
                            <label for="Inputjob"> Job </label>
                            <input type="text" class="form-control" name="userJob" id="user_job" value="<?php echo $check_session_job ?>">
                        </div>
                       
                    </div>
                    <div class="col-xs-12 col-sm-6">
                    	<div class="form-group">
                            <label for="InputAddress"> Address </label>
                            <input type="text" value=<?php echo $check_session_address ?> name="userAddress" class="form-control"
                                   id="user_address">
                        </div>
                        <div class="form-group required">
                            <label for="InputPasswordCurrent"> Password <sup> * </sup> </label>
                            <input type="password" name="oldPassword" class="form-control"
                                   id="user_oldPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="InputPasswordnew"> New Password </label>
                            <input type="password" name="userPassword" class="form-control" id="newPassword" placeholder="바꿀경우만 입력하세요.">
                        </div>
                        <div class="form-group">
                            <label for="InputPasswordnewConfirm"> Check Password </label>
                            <input type="password" name="userPasswordCheck" class="form-control"
                                   id="newPasswordCheck">
                        </div>
                    </div>
                  
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                    
                </form>
                
                <div class="col-lg-12 clearfix">
                    <ul class="pager">
                        <li class="previous pull-right"><a href="index.php"> <i class="fa fa-home"></i> Go to Shop </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3">
      
        
        </div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /main-container -->

<div class="gap"></div>

 <?php include ('footer.php');?> 

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- include  parallax plugin -->
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.js"></script>

<!-- optionally include helper plugins -->
<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>

<!-- include mCustomScrollbar plugin //Custom Scrollbar  -->

<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.js"></script>

<!-- include icheck plugin // customized checkboxes and radio buttons   -->
<script type="text/javascript" src="assets/plugins/icheck-1.x/icheck.min.js"></script>

<!-- include grid.js // for equal Div height  -->
<script src="assets/js/grids.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- jQuery select2 // custom select   -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<!-- include touchspin.js // touch friendly input spinner component   -->
<script src="assets/js/bootstrap.touchspin.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>
</html>
