<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost","joohyung","dkdk1212","jh_17jungle");		
    
	if( $conn->connect_error) {
    	die("Connection failed: ".$conn->connect_error);
    }
    
    if (isset ( $_SESSION ['id'] )) {
    	$check_session_id = $_SESSION ['id'];
    	$check_session_password = $_SESSION ['password'];
    }
	
    $oldpassword = $_POST["oldPassword"];
	$password = $_POST["userPassword"];
	$name= $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["userPhone"];
	$job = $_POST["userJob"];
	$address = $_POST["userAddress"];
	
	if($oldpassword != $check_session_password){
		echo ("<script>alert('기존 비밀번호가 일치하지 않습니다!');location.href='user_info.php';</script>");
	}
	
	if($password!=null){
		$sql = "update customer set c_password='$password',c_name='$name', c_phone='$phone', c_email='$email', c_job='$job',c_address='$address' where c_id='$check_session_id' and c_password='$oldpassword'";
	}
 	else if($password==null){
 		$sql = "update customer set c_password='$oldpassword',c_name='$name', c_phone='$phone', c_email='$email', c_job='$job',c_address='$address' where c_id='$check_session_id' and c_password='$oldpassword'";
	}
	
	if($conn->query($sql)===TRUE){
		echo ("<script>alert('수정이 완료되었습니다.');location.href='index.php';</script>");
	}
	else{
		echo "<script>alert('수정이 안되었어요.because:".$conn->error.");</script>";
	}
	$conn->close();
}
else{
	echo ("<script>alert('비정상접근!!');location.href='index.php';</script>");
	}
	
?>

</body>
</html>