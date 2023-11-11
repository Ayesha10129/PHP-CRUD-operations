<?php include('dbcon.php')?>
<?php
   if(isset($_GET['id']))
   {
     $idnew=$_GET['id'];
   
    $query="delete from `students` where `id`='$idnew'";

    $result=mysqli_query($connection,$query);
               if(!$result)
               {
                   die("query failed");
               }
               else{
                  header('location:index.php?delete_msg:you have deleted the record');
               }

    }
    ?>


 
