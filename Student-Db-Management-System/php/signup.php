<?php 

include "config.php";



	if (isset($_POST['submit'])) {

		$fullname = $_POST['fullname'];
		$Student_id = $_POST['id'];
		$password = $_POST['password'];
        $email = $_POST['email'];
		$contact = $_POST['contact'];
		

		$sql = "INSERT INTO `studentdata` (`fullname`, `Student_id`, `password`, `email`, `contact`) VALUES ('$fullname','$Student_id','$password','$email','$contact')";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header('location: http://localhost/StudentData%20Management/Html/StudentLogin.html');
		}else{
			echo '<script>alert("Already Registered !")</script>';
		}
		
		$conn->close();
	}

?>
