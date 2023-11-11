<?php
include 'dbcon.php';
if(isset($_POST['ADD_STUDENTS']))
{
    $Name=$_POST['f_Name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($Name))
    {
        header('location:index.php?message=you need to fill in the first name!');
    }
    else{
        $query="insert into `students`(`name`,`email`,`pass`) values('$Name','$email','$password')";
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die("QUERY FAILED");
        }
        else{
             header('location:index.php?insert_msg=Your data has been added successfully');
        }

    }

}
?>