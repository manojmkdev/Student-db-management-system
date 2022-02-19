<?php 
include "config.php";
include "login.php";


$Student_id=$_SESSION["Student_id"];


$query = " SELECT* FROM `studentdata` where Student_id='$Student_id' ";

$result = mysqli_query($conn,$query);

$row = mysqli_num_rows($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/StudentData%20Management/img/icon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">
    <link rel="stylesheet" href="http://localhost/StudentData%20Management/Css/View.css">
    <title>edu.in</title>
</head>
<body>
        <!-- nav -->

        <div id="nav">
            <div>
                <a href="http://localhost/StudentData%20Management/Html/SecondPage.html">
                    <h2  class="f1t">edu.in</h2>
                </a>
            </div>
            <div class="back">
                <div class="b">
                    <a href="http://localhost/StudentData%20Management/Html/SecondPage.html">
                        <h2  class="f2">Back</h2>
                    </a>
                </div>
                <div>
                    <a href="http://localhost/StudentData%20Management/Html/StudentLogin.html">
                        <h2 class="f2">Logout</h2>
                    </a>
                </div>
            </div>
        </div>
       <!-- view page  -->
       
    <div class="main">
        <div><h2 id="tp" class="f1" style="cursor:default;">Profile</h2></div>
        <div id="box2">
        <?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

            <div> fullname : <?php echo $row['fullname']; ?> </div> 
            <div> student id : <?php echo $row['Student_id']; ?> </div>
            <div> password : <?php echo $row['password']; ?> </div>
            <div> email id : <?php echo $row['email']; ?> </div>
            <div> contact number : <?php echo $row['contact']; ?> </div>
            </div>

            <?php	}
			}
		?>
    </div>
</body>
</html>