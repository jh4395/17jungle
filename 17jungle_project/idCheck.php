	<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn =  new mysqli("localhost","joohyung","dkdk1212","jh_17jungle");		
    
    $id = $_POST["userId"];
	
    $sql = "SELECT * from customer where c_id='$id'";
	
	$result = $conn->query($sql);
	$num_rows = $result->num_rows;
	
	if($num_rows > 0){
		echo  false;
	}
	
	else{
		echo true;
	}
	$conn->close();
}
else{
	echo ("<script>alert('잘못된 접근방식입니다!!!');location.href='index.php';</script>");
}

//echo $ajaxReturn;

?>