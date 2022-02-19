<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="http://localhost/StudentData%20Management/img/icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.typekit.net/zdk2sfw.css">

    <link rel="stylesheet" href="http://localhost/StudentData%20Management/Css/StudentSignup.css">

    <title>edu.in</title>
</head>
<body>
    
    <!-- signup page  -->

    <div class="main">
        <form action="signup.php" method="POST"> 
            <input type="submit" name="submit" class="f1" value="signup"/>  
            <div id="box2">
            <div>
            <label>fullname</label>
            <input type="text" name="fullname" required/></div> 
            <div>
            <label>student id</label>
            <input type="text" name="id" pattern="[0-9]{2}" required/></div>
            <div>
            <label>password</label>
            <input type="password" name="password" required/></div>
            <div>
            <label>email id</label>
            <input type="email" name="email" required/></div>
            <div>
            <label>contact</label>
            <input type="text" pattern="[0-9]{10}" name="contact"></div>
            </div>
        </form>
    </div>
    
</body>
</html>