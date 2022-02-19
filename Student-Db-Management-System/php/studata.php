<?php 
include "config.php";
$sql = "SELECT * FROM `studentdata` ";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
<title>edu.in</title>

<!-- icon  -->

<link rel="icon" href="http://localhost/StudentData%20Management/img/icon.ico">

<!-- imported font  -->

<link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/StudentData%20Management/Css/studata.css">
</head>
<body>

        <!-- nav -->

        <div id="nav">
            <div>
                <a href="http://localhost/StudentData%20Management/Html/adminsecondpage.html" style=" text-decoration: none;">
                    <h2  class="f1">edu.in</h2>
                </a>
            </div>
            <div class="back">
                <div class="b">
                    <a href="http://localhost/StudentData%20Management/Html/adminsecondpage.html" style=" text-decoration: none;">
                        <h2  class="f2">Back</h2>
                    </a>
                </div>
                <div>
                    <a href="http://localhost/StudentData%20Management/Html/adminlogin.html" style=" text-decoration: none;">
                        <h2 class="f2">Logout</h2>
                    </a>
                </div>
            </div>
        </div>

		<!-- table  -->

<div class="container">
		<h2 class="f1" align="center">Student Database</h2>
<table class="table">
	<thead>
		<tr>
		<th>Student Name</th>
		<th>Student ID</th>
		<th>Email</th>
		<th>Contact</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['fullname']; ?></td>
					<td><?php echo $row['Student_id']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					</tr>	
					
		<?php		}
			}
		?>
	        		
	</tbody>
</table>
</div>

</body>
</html>
