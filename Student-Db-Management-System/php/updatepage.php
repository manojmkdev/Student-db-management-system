<?php 
include "config.php";
include "login.php";



	if (isset($_POST['update'])) {
		
		$fullname = $_POST['fullname'];
		$Student_id = $_POST['id'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];

		$sql = "UPDATE `studentdata` SET `fullname`='$fullname',`Student_id`='$Student_id',`password`='$password',`email`='$email',`contact`='$contact' WHERE `Student_id`='$Student_id' ";
		
		$result = $conn->query($sql);
		
		if ($result == TRUE) {
			header('location: http://localhost/StudentData%20Management/Html/Greeting2.html');
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}

?>

