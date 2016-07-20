<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost","joohyung","dkdk1212","jh_17jungle");		
    
	if( $conn->connect_error) {
    	die("Connection failed: ".$conn->connect_error);
    }
	
    $id = $_POST["userId"];
	$password = $_POST["userPassword"];
	$name= $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["userPhone"];
	$job = $_POST["userJob"];
	$address = $_POST["userAddress"];
	
	$sql ="insert into customer (c_id,c_password,c_name,c_phone,c_email,c_job,c_address) values('$id','$password','$name','$phone','$email','$job','$address')";
 	
	if($conn->query($sql)===TRUE){
		echo ("<script>alert('회원가입 완료되었습니다.');location.href='index.php';</script>");
	}
	else{
		echo "<script>alert('회원가입 안되었어요.because:".$conn->error.");</script>";
	}
	$conn->close();
}
else{
	echo ("<script>alert('비정상접근!!');location.href='index.php';</script>");
}
?>

</body>
</html>