<?php
include "config.php";

if(isset($_POST["email"], $_POST["password"])) 
    {     
        $Student_id = $_POST["email"]; 
        $password = $_POST["password"];


        if($Student_id == "admin" && $password == "admin@123") 
        { 
          
            header('location: http://localhost/StudentData%20Management/Html/adminsecondPage.html');


        }
        else
        {
            header('location: http://localhost/StudentData%20Management/Html/401.html');

        }
}
?>