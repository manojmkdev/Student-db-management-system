<?php
include "config.php";

session_start();


if(isset($_POST["id"], $_POST["password"])) 
    {     
        $Student_id = $_POST["id"]; 
        $password = $_POST["password"];
        $_SESSION["Student_id"]=$Student_id;


        $select1 = "SELECT password FROM studentdata WHERE Student_id = '".$Student_id."'";

        $result1=$conn->query($select1);
        $row1=$result1->fetch_assoc();

        $select2 = "SELECT Student_id FROM studentdata WHERE password = '".$password."'";

        $result2=$conn->query($select2);    
        $row2=$result2->fetch_assoc();


        if($Student_id == $row2["Student_id"] && $password == $row1["password"]) 
        { 
          
            header('location: http://localhost/StudentData%20Management/Html/SecondPage.html');


        }
        else
        {
            header('location: http://localhost/StudentData%20Management/Html/401.html');

        }
}
?>

