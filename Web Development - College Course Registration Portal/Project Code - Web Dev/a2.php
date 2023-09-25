<?php
    $host="localhost"; 
    $username="root"; 
    $pass="";
    $db_name="COURSE_REGISTRATION"; 
    $conn = mysqli_connect("$host", "$username")or die("cannot connect"); 
    mysqli_select_db($conn,"$db_name")or die("cannot select DB");
        if($_POST['sb']=='SUBMIT')
        {
            $sql="INSERT INTO COURSE_REGISTRATION.FINAL_LIST(USN,SEM) SELECT USN,SEM FROM COURSE_REGISTRATION.STUDENT WHERE STUDENT_ID=(SELECT MAX(STUDENT_ID) FROM COURSE_REGISTRATION.STUDENT)"; 
            $result=mysqli_query($conn,$sql); 
        } 
        mysqli_close($conn);
        header("location:welcome1.php");
?>