<?php
include "config.php";
include "login.php";

    $Student_id=$_SESSION["Student_id"];

    $sql = "SELECT * FROM `studentdata` WHERE `Student_id`='$Student_id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
            $fullname= $row['fullname'];
			$contact = $row['contact'];
			$email = $row['email'];
			$password  = $row['password'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/StudentData%20Management/img/icon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">
    <link rel="stylesheet" href="http://localhost/StudentData%20Management/Css/Update.css">
    <title>edu.in</title>
</head>
<body>
        <!-- nav -->

        <div id="nav">
            <div>
                <a href="http://localhost/StudentData%20Management/Html/SecondPage.html" >
                    <h2 class="f1t">edu.in</h2>
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
                        <h2  class="f2">Logout</h2>
                    </a>
                </div>
            </div>
        </div>

        <!-- Update form  -->

        
    <div class="main">
        <form action="http://localhost/StudentData%20Management/php/updatepage.php" method="POST"> 
            <input type="submit" class="f1" name="update" value="Update" required/>  
            <div id="box2">
            <div>
            <label>fullname</label>
            <input type="text" name="fullname" value="<?php echo $fullname; ?>" required/></div> 
            <div>
            <label>student id</label>
            <input type="" name="id" pattern="[0-9]{2}"  value="<?php echo $Student_id; ?>" /></div>
            <div>
            <label>password</label>
            <input type="password" name="password"  value="<?php echo $password; ?>" required/></div>
            <div>
            <label>email id</label>
            <input type="email" name="email"  value="<?php echo $email; ?>" required/></div>
            <div>
            <label>contact</label>
            <input type="text" pattern="[0-9]{10}" name="contact" value="<?php echo $contact; ?>" required/></div>
            </div>
        </form>
    </div>

</body>
</html>