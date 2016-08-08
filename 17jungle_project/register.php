<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost","17jungle", "playjungle","jh_17jungle");		
    
	if( $conn->connect_error) {
    	die("Connection failed: ".$conn->connect_error);
    }
	
    $id = $_POST["newuserId"];
	$password = $_POST["newuserPassword"];
	$name= $_POST["newuserName"];
	$email = $_POST["newuserEmail"];
	$phone = $_POST["newuserPhone"];
	$job = $_POST["newuserJob"];
	$address = $_POST["newuserAddress"];
	
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