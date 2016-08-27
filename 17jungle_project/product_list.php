
 <?php include ('header.php');
 if($_GET['no'] != null){	
 $no = $_GET['no'];
 }
#########################################################################
# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
$page_size=12;    

# 2. 페이지 나누기에 표시될 페이지의 수
$page_list_size = 5;

#########################################################################

if (!$no || $no < 0) {
	$no=0; //$no 값이 안넘어 오거나 잘못된(음수)값이 넘어오는 경우 0으로 처리
}

#########################################################################

// 데이터베이스에서 페이지의 첫번째 글($no)부터 $page_size 만큼의 글을 가져온다.
//	$query = "select p_number,p_type,p_name,p_brand from 'product' order by p_number desc limit ".$no.",".$page_size;
$sql = "SELECT p_number, p_type, p_name, p_brand FROM product order by p_number desc limit ".$no.",".$page_size;
$result = mysqli_query($conn, $sql);



// 총 게시물 수 를 구한다.
// count 를 통해 구할 수 있는데 count(항목) 과 같은 방법으로 사용한다. * 는 모든 항목을 뜻한다.
// 총 해당 항목의 값을 가지는 게시물의 개수가 얼마인가를 묻는것이다.
// 따라서 전체 글수가 된다. count(id) 와 같은 방법도 가능하지만 이례적으로 count(*)가 조금 빠르다.
// 일반적으로는 * 가 느리다.
$sql_count = "SELECT count(*) FROM product";
$result_count=mysqli_query($conn,$sql_count);
$result_row=mysqli_fetch_row($result_count);
$total_row = $result_row[0];
//결과의 첫번째 열이 count(*) 의 결과다.

#########################################################################
# 총 페이지 계산

if ($total_row <= 0) $total_row = 0; // 총게시물의 값이 없거나 할경우 기본값으로 세팅

$total_page = floor(($total_row - 1) / $page_size); // 총게시물을 페이지 사이즈로 나눈뒤 내림을 한다.

# 총페이지는 총 게시물의 수를 $page_size 로 나누면 알수있다.
# 총페이지는 총 게시물의 수를 $page_size 로 나누면 알수있다.
# 총 게시물이 12개(1을 빼서 11이된다)이고 페이지 사이즈가 10이라면 결과는 1.1 이 나올것이다.
# 1.1 라는 페이지수는 한 페이지를 다 표시하고도 글이 더 남아있다는 뜻이다.
# 따라서 실제의 페이지수는 2가된다. 한 페이지는 2개의 글만 표시될것이다.
# 그러나 내림을 해주는 이유는 페이지수가 0부터 시작하기 때문이다. 따라서 1은 두번째 페이지이다.
# 총 게시물에 1을 빼주는 이유는 10페이지가 되면 10/10 = 1 이기 때문이다.
# 앞에서도 말했지만 1은 2번째 페이지를 뜻한다.
# 그러나 총게시물이 10개인 경우 한페이지에 모두 출력이 되어야 한다.
# 그래서 1을 빼서 10개인 경우 (10-1) / 10 = 0.9 로 한페이지에 출력하게 한다.
# 글이 0개가 있는 경우는 결과가 -1 이 되지만 -1은 무시된다.
# ( floor 는 내림을 하는 수학함수이다.)
#########################################################################
# 현재 페이지 계산

$current_page = floor($no/$page_size);

# $no 을 통해서 페이지의 첫번째 글이 몇번째 글인지 전달된다.
# 따라서 페이지 사이즈로 나누면 현재가 몇번째 페이지인지 알수있다.
# $no 이 10이고 페이지사이즈가 10 이라면 결과는 1이다. 앞서 페이지는 0부터 시작이라고 했으니 두번째 페이지임을 나타낸다.
# 그렇다면 $no 이 11이라면 1.1 이 되어버린다. 11번째 글도 두번째 페이지에 존재하므로 0.1은 무의미하니 버린다.
# 그런데 $no 이란 값이 $page_size 만큼씩 증가되는 값이기때문에 (0,10,20,30 과 같은 등차수열) 내림을 하는것 또한 무의미하다.
# 그러나 내림을 하는 이유는 $no 값에 11과 같은 값이 들어와도 제대로 출력되기를 바라는 마음에서 해놓은것이다.
?>


<link href="assets/css/category-2.css" rel="stylesheet">

<section class="category-wrapper">

	<section id="category-intro"
		class="section-intro scrollme parallaxOffset">
		<div class="cat-intro animateme" data-when="exit">

			<div class="cat-intro-text">
				<div class="display-table hw100">
					<div class="display-table-cell hw100">
						<div class="box-text-cell-inner white animateme">

							<h1>이젠 패키지로 대여하세요<?php echo $no;?></h1>
							<p>comfortable rental service by 17jungle</p>

							<p>
								<a style="color: #fff" href="#main-container-wrapper"
									class="scrollto"><i class="fa fa-2x fa-angle-down"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!--/.cat-intro-text-->
			<img src="images/parallax/parcel-delivery-package.jpg" alt="img"
				class=" cat-intro-banner">
		</div>
	</section>

	<section class="main-container-wrapper clearfix"
		id="main-container-wrapper">
		<div class="container main-container">

			<!-- Main component call to action -->

			<div class="row">

				<div class="catTopBar clearfix">
					<div class="catTopBarInner clearfix">
						<!-- <div class="col-lg-3 col-md-3 col-sm-12">
							<div class="f-left hidden-xs">
								<h4 class="filterToggle">
									<i class="fa fa-bars"></i> <strong>Fil</strong> <span>
										&nbsp; </span>
								</h4>
							</div>
						</div> -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="f-right">
								<div class="w100  clearfix center-xs-inner">
									<p class="pull-left shrtByP center-xs">
										<span>Sort By :</span> <a class="active">NEW</a> | <a>POPULAR</a>|
										<a>PIRCE</a>
									</p>


									<div class="pull-right hidden-xs">
										<p class="pull-right change-view-flat">
											<span>View By :</span> <a href="#" title="Grid"
												class="grid-view"> <i class="fa fa-th-large"></i>
											</a> | <a href="#" title="List" class="list-view "><i
												class="fa fa-th-list"></i></a>
										</p>


									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

				<!--left column-->

				<div class="catColumnWrapper">
<!-- 
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 filterColumn">

						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<div class="navbar-header">
								
									<button type="button" class="navbar-toggle collapsed"
										data-toggle="collapse"
										data-target="#search-bar">
										 <span
											class="icon-bar"></span> <span class="icon-bar"></span> <span
											class="icon-bar"></span>
									</button>
									
									<a class="navbar-brand" href="#">
									<i class='hide visible-xs'>Search Bar</i></a>
									
								</div>

								
								<div class="collapse navbar-collapse" id="search-bar">
									
									<ul class="nav navbar-nav">
									
									<li class="dropdown"><a href="#" class="dropdown-toggle"
											data-toggle="dropdown" role="button" aria-expanded="false">
											<img src="images/cartegory_icon/camera_icon.png" width="40" height="40">&nbsp;&nbsp;camera
												<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">Dslr</a></li>
												<li><a href="#">디지털카메라</a></li>
												<li><a href="#">폴라로이드</a></li>												
											</ul></li>
									
										<li><a data-toggle="collapse" href="#" class="">
                                        <span class="pull-right hasMinus"> <i class="i-minus"></i></span>
                                         <img src="images/cartegory_icon/lens_icon.png" width="40" height="40">&nbsp;&nbsp; lens</a></li>
										
										<li class="dropdown"><a href="#" class="dropdown-toggle"
											data-toggle="dropdown" role="button" aria-expanded="false">
											<img src="images/cartegory_icon/camcorder_icon.png" width="40" height="40">&nbsp;&nbsp;camcorder
												<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">캠코더</a></li>
												<li><a href="#">액션캠</a></li>
												<li><a href="#">폴라로이드</a></li>												
											</ul></li>
											
											<li><a data-toggle="collapse" href="#" class="">
                                        <span class="pull-right hasMinus"> <i class="i-minus"></i></span>
                                         <img src="images/cartegory_icon/light_icon.png" width="40" height="40">&nbsp;&nbsp; light</a></li>
											
											<li><a data-toggle="collapse" href="#" class="">
                                        <span class="pull-right hasMinus"> <i class="i-minus"></i></span>
                                         <img src="images/cartegory_icon/recorder_icon.png" width="40" height="40">&nbsp;&nbsp; recorder</a></li>
                                         
                                        
											<li class="dropdown"><a href="#" class="dropdown-toggle"
											data-toggle="dropdown" role="button" aria-expanded="false">
											<img src="images/cartegory_icon/ect_icon.png" width="40" height="40">&nbsp;&nbsp;tripod/Ect
												<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">삼각대</a></li>
												<li><a href="#">기타 악세사리</a></li>											
											</ul></li>
											
											<li class="dropdown"><a href="#" class="dropdown-toggle"
											data-toggle="dropdown" role="button" aria-expanded="false">
											<img src="images/cartegory_icon/computer_icon.png" width="40" height="40">&nbsp;&nbsp;electronic
												<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu">
												<li><a href="#">컴퓨터/노트북</a></li>
												<li><a href="#">빔프로젝트</a></li>
												<li><a href="#">기타</a></li>												
											</ul></li>
										
									</ul>
								</div>
								
							</div>
							
						</nav>
 

					</div>
-->
					<!--right column-->
					<!-- package modal -->
					
					
						<!-- ModalPackage start -->
	<div class="modal fade" id="ModalPackage" tabindex="-1"
		role="dialog">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h3 class="modal-title-site text-center">패키지 선택</h3>
				</div>		
					
				<div class="modal-body">
						<div class="form-group login-username">
							<div>
								<input name="package1" id="package1" class="form-control input"
									size="20" value="영상패키지" type="button">
							</div>
						</div>
						<div class="form-group login-password">
							<div>
								<input name="package2" id="package2"
									class="form-control input" size="20" value="사진패키지"
									type="button">
							</div>
						</div>
						
				</div>
			
			</div>
			<!-- /.modal-content -->

		</div>
		<!-- /.modal-dialog -->

	</div>
	<!-- /. ModalPackage -->
					
					
					<!-- modal finished -->
					
					
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 categoryColumn">

					<!--/.productFilter-->
						<div class="row  categoryProduct clearfix">
						<!-- row  categoryProduct xsResponse clearfix 이렇게하면 모바일에서 상품이 하나씩밖에 안보임 -->
							<?
if (mysqli_num_rows($result) <= 0) {
	echo "0 results";
}
if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {

?>
	
							<div class="item col-sm-4 col-lg-3 col-md-3 col-xs-6">
								<div class="product">
								
								<a class="add-fav tooltipHere" href='#' data-toggle='modal' data-target='#ModalPackage'
								data-original-title="Add to Wishlist">
								<i class="glyphicon glyphicon-heart"></i>
										</a>

									<div class="image">
										<div class="quickview">
											<a data-toggle="modal" class="btn btn-xs btn-quickview"
												href="ajax/product.html"
												data-target="#productSetailsModalAjax">Quick View </a>
										</div>
										<a href="product_detail.php"><img src="images/17jungle_product/canon70d_1.jpg"
											width="300" height="300" alt="img" class="img-responsive"></a>

										<!-- <div class="promotion">
											<span class="discount">15% OFF</span>
										</div> -->
									</div>
									<div>
										<h4>
										<!-- 나중에 p_number 넣을것	-->
										
											<a href="product_detail.php"><?=$row["p_name"]?></a>
										</h4>
									</div>
									<!-- 가격데이터 넣기 -->
									<div class="price">
										<span>$25</span>
									</div>
									<div class="action-control">
										<a class="btn btn-primary"> <span class="add2cart"><i
												class="glyphicon glyphicon-shopping-cart"> </i> Add to Package
										</span>
										</a>
									</div>
								</div>
							</div>
							<!--/.item-->
							<!-- 행 끝 -->
<?
	}} // end While

//데이터베이스와의 연결을 끝는다.
$conn->close();
?>
							
						</div>
						<!--/.categoryProduct || product content end-->
						<div class="w100 categoryFooter">
							<div class="pagination pull-left no-margin-top">
								<ul class="pagination no-margin-top">
<?
#########################################################################
# 페이지 리스트
# 페이지 리스트의 첫번째로 표시될 페이지가 몇번째 페이지인지 구하는 부분이다.

$start_page = (int)($current_page / $page_list_size) * $page_list_size;

#현재 페이지를 페이지 리스트 수로 나누면 현재 페이지가 몇번째 페이지리스트에 있는지 알게된다.
# 이또한 0을 기준으로 하기에 형변환(타입 캐스팅)을 해주었다.
# 형변환은 앞 강좌에서 배웠지만 위의 나누어지는 수가 1.2와 같이 유리수로 표시되기때문에
# int(정수) 형으로 형변환을 하게되면 소수점자리가 사라지게 된다.
# 즉, 위에서 사용한 floor 랑 같은 효과를 하게 되는 것이다. 
# 여기에 floor 함수를 취하거나 위의 floor 를 형변환을 해도 상관없다.

# 페이지 리스트의 마지막 페이지가 몇번째 페이지인지 구하는 부분이다.
$end_page = $start_page + $page_list_size - 1;
if ($total_page < $end_page) $end_page = $total_page;

# 보여주는 페이지 리스트중에서 마지막 페이지가 되는 경우는 두가지이다.
# 1. 페이지가 페이지리스트 크기보다 더 많이 남아있을때 
# 10개씩 뿌려주는데 총 11페이지가 존재한다면 11페이지는 두번째 목록페이지에 뿌려진다.
# 그렇다면 마지막 페이지 리스트는 10페이지 즉, 첫번째 페이지 + 9 번째 페이지이다.
# 2. 10개씩 뿌려주는데 5페이지 밖에 없다면?
# 마지막 리스트 페이지는 5 페이지가 된다.

#########################################################################
# 이전 페이지 리스트 보여주기
# 페이지 리스트가 10인데 13번째 페이지에 있다면 두번째 목록페이지를 보고 있는것이다.
# 이전 목록페이지로 가고 싶을 때 사용한다.

# 이전 페이지 리스트가 필요할때는 페이지 리스트의 첫 페이지가 페이지 리스트 수보다 클때다.
# 페이지가 적어도 페이지 리스트 수보다는 커야 이전 페이지 리스트가 존재할테니까 말이다.
# 페이지 리스트의 수가 10인데 총 5페이지밖에 없다면 이전 페이지 리스트는 존재하지 않는다.
if ($start_page >= $page_list_size) {

    # 이전 페이지 리스트값은 첫 번째 페이지에서 한 페이지 감소하면 된다.
    # $page_size 를 곱해주는 이유는 글번호로 표시하기 위해서이다. 
    $prev_list = ($start_page - 1)*$page_size;
    echo  "<li><a href=\"$_SERVER[PHP_SELF]?no=$prev_list\">«</a></li>";
}

# 페이지 리스트를 출력
for ($i=$start_page;$i <= $end_page;$i++) {

$page=$page_size*$i; // 페이지값을 no 값으로 변환.
$page_num = $i+1; // 실제 페이지 값이 0부터 시작하므로 표시할때는 1을 더해준다. 페이지 0 -> 1
    if($no==$page ){
    	echo "<li class='active'><li><a href=\"$_SERVER[PHP_SELF]?no=$page\"> $page_num ";
    }
    if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
        echo "<li><a href=\"$_SERVER[PHP_SELF]?no=$page\"> $page_num ";
     }
    
    if ($no!=$page){
        echo "</a></li>";
    }
    if ($no==$page){
    	echo "</a></li>";
    }
}

# 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
# 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.

if($total_page > $end_page)
{
    # 다음 페이지 리스트는 마지막 리스트 페이지보다 한 페이지 증가하면 된다.
    $next_list = ($end_page + 1)* $page_size;
    echo "<li><a href=$_SERVER[PHP_SELF]?no=$next_list>»</a></li>";
}
?>


									
								</ul>
							</div>
							<div
								class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
								<p>Showing 1–450 of 12 results</p>
							</div>
						</div>
						<!--/.categoryFooter-->
					</div>
					<!--/right column end-->
				</div>
				<!--/.catColumnWrapper-->


			</div>
			<!-- /.row  -->
		</div>
		<!-- /main container -->
	</section>

</section>
<!-- /category-wrapper -->


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

<script src="assets/js/hideMaxListItem-min.js"></script>
<script>
    $(document).ready(function () {
        $('ul.long-list').hideMaxListItems({
            'max': 6,
            'speed': 500,
            'moreText': 'VIEW MORE ([COUNT])',
            'lessText': 'VIEW LESS',
            'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
        });
    });


</script>


<!-- scrollme || onscroll parallax effect for category page  -->
<script src="assets/js/jquery.scrollme.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var isMobile = function () {
            //console.log("Navigator: " + navigator.userAgent);
            return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
        };

        if (isMobile()) {
            // For  mobile , ipad, tab
            $('.animateme').removeClass('animateme');
            $('.category-wrapper').addClass('ismobile');
            $('.main-container-wrapper').addClass('ismobile');
            $('#category-intro').addClass('ismobile');

        } else {
        }
        $('.shrtByP a').click(function () {
            $('.shrtByP a').removeClass('active');
            $(this).addClass('active');
        });


        $('.filterToggle').click(function () {
            $(this).toggleClass('filter-is-off');
            $('.filterToggle span').toggleClass('is-off');
            $('.catColumnWrapper').toggleClass('filter-is-off');
            $('.catColumnWrapper .col-sm-4').toggleClass('col-sm-3 col-lg-3 col-md-3');

            // equal height reload function

            var $elements = $('.categoryProduct > .item');
            var columns = $elements.detectGridColumns();
            $elements.equalHeightGrid(columns);


            setTimeout(function () {
                        //  reload function after 0.5 second
                        $('.categoryProduct > .item').responsiveEqualHeightGrid();
                    }
                    , 500);


        });


        $('[data-toggle="collapse"]').click(function (e) {

            $('#accordion').on('show.bs.collapse', function (e) {
                $(e.target).prev().addClass('active').find('span').removeClass('hasPlus').addClass('hasMinus');
            })

            $('#accordion').on('hide.bs.collapse', function (e) {
                $(e.target).prev().addClass('active').find('span').addClass('hasPlus').removeClass('hasMinus');

            })
        });

    }); // end


    $(window).bind('resize load', function () {
        if ($(this).width() < 767) {
            $('#accordion .panel-collapse').collapse('hide');

            $('#accordion .panel-heading ').find('span').removeClass('hasMinus').addClass('hasPlus');

        } else {
            $('#accordion .panel-collapse').removeClass('out').addClass('in').css('height', 'auto');
            $('#accordion .panel-heading ').find('span').removeClass('hasPlus').addClass('hasMinus');


        }
    });

</script>


</body>
</html>
