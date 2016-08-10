<?php include ('header.php');?> 

<!-- styles needed by footable  -->
    <link href="assets/css/footable-0.1.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/footable.sortable-0.1.css" rel="stylesheet" type="text/css"/>

<div class="container main-container headerOffset">
 <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="user_info.php">프로필 수정</a></li>
                <li><a href="myPackage.php">나의 패키지</a></li>
                <li  class="active">대여 내역</li>
                <li><a href="productUpload_form.php">물품 등록하기</a></li>
            </ul>
        </div>
    </div>
 <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i class="fa fa-list-alt"></i> Order List </span></h1>

            <div class="row userInfo">
                <div class="col-lg-12">
                    <h2 class="block-title-2"> Your Order List </h2>
                </div>

                <div style="clear:both"></div>

                <div class="col-xs-12 col-sm-12">
                    <table class="footable">
                        <thead>
                        <tr>
                            <th data-class="expand" data-sort-initial="true"><span
                                    title="table sorted by this column on load">주문번호</span></th>
                            
                            <th data-hide="phone,tablet" data-sort-ignore="true">대여갯수</th>
                            <th data-hide="phone,tablet" data-sort-ignore="true">대여제품</th>
                            <th data-hide="phone,tablet"><strong>주문상태</strong></th>                           
                            <th data-hide="phone,tablet"><strong></strong></th>
                            
                            <th data-hide="default">패키지</th>
                            <th data-hide="default" data-type="numeric">주문날짜</th>
                            <th data-hide="phone" data-type="numeric">총 가격</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#000001</td>
                            <td>3
                                <small>item(s)</small>
                            </td>
                            <td>
                            <a href="product_detail.php">캐논70ds</a>,<a href="product_detail.php">니콘삼각대</a>,<a href="product_detail.php">캐논33렌즈(제품들)</a>  
                            </td>
                            <td>-</td>
                            <td><a href="order-status.html" class="btn btn-primary btn-sm">view status</a></td>
                            
                            <td>결혼식장 세트 </td>
                            <td data-value="78025368997">2021.01.02</td>
                            <td>158,000원
                            </td>
                        </tr>
                        <tr>
                            <td>#000002</td>
                            <td>5
                                <small>item(s)</small>
                            </td>
                            <td><a target="_blank">
                            캐논70ds, 니콘삼각대, 캐논33렌즈(제품들)
                            </a></td>
                            <td>-</td>
                            <td><a href="order-status.html" class="btn btn-primary btn-sm">view status</a></td>
                            
                            <td>영화촬영세트 </td>
                            <td data-value="78025368997">1988.08.22</td>
                            <td>18,000원
                            </td>
                        </tr>
                        <tr>
                            <td>#000003</td>
                            <td>3
                                <small>item(s)</small>
                            </td>
                            <td><a target="_blank">
                            캐논70ds, 니콘삼각대, 캐논33렌즈(제품들)
                            </a></td>
                            <td>-</td>
                            <td><a href="order-status.html" class="btn btn-primary btn-sm">view status</a></td>
                            
                            <td>ucc 세트 </td>
                            <td data-value="78025368997">2017.01.02</td>
                            <td>58,000원
                            </td>
                        </tr>
                         <tr>
                            <td>#000004</td>
                            <td>3
                                <small>item(s)</small>
                            </td>
                            <td><a target="_blank">
                            캐논70ds, 소니삼각대, 캐논33렌즈(제품들)
                            </a></td>
                            <td>-</td>
                            <td><a href="order-status.html" class="btn btn-primary btn-sm">view status</a></td>
                            
                            <td>파티 세트 </td>
                            <td data-value="78025368997">1991.11.02</td>
                            <td>1,028,000원
                            </td>
                        </tr>
                       
                        </tbody>
                    </table>
                </div>

                <div style="clear:both"></div>

      
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-5"></div>
    </div>
    <!--/row-->

    <div style="clear:both"></div>

</div>
<div class="gap"></div>
 <?php include ('footer.php');?> 
 <!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- include footable plugin -->
<script src="assets/js/footable.js" type="text/javascript"></script>
<script src="assets/js/footable.sortable.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.footable').footable();
    });
</script>


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
 
