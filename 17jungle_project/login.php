<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn =  new mysqli("localhost","17jungle","playjungle","jh_17jungle");		
    
    $id = $_POST["userId"];
	$password = $_POST["userPassword"];
	$name ="";
	$phone ="";
	$email ="";
	$job ="";
	$address ="";
	
    $sql = "SELECT * from customer where c_id='$id' and c_password='$password'";
	
	$result = $conn->query($sql);
	$num_rows = $result->num_rows;
	
	if ($num_rows > 0) {
		$i =0;
		while($row = $result->fetch_assoc()) {
	 		$name = $row["c_name"];	
	 		$phone = $row["c_phone"];
	 		$email = $row["c_email"];
	 		$address = $row["c_address"];
	 		$job = $row["c_job"];	 	
			$i++; 
			if( $i<$num_rows ){
				echo ",";
			}
		
		}		
		//session_start();
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $password;
		$_SESSION['name'] = $name;		
		$_SESSION['phone'] = $phone;
		$_SESSION['email'] = $email;
		$_SESSION['address'] = $address;
		$_SESSION['job'] = $job;
		
		echo ("<script>alert('$name'+'님 환영합니다.');location.href='index.php';</script>");
	}
	else {
		echo ("<script>alert('일치하는 아이디와 비밀번호가 없습니다!');location.href='index.php';</script>");
	}
}
else{
	echo ("<script>alert('잘못된 접근방식입니다!!!');location.href='index.php';</script>");
}
$conn->close();

?>

</body>
</html>