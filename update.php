<?php include('dbcon.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="style.css">
    
    </head>
<body>
      <h1 id="main_title"`>CRUD APPLICATION IN PHP</h2>
      <div class="container">
     <?php

      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $query="SELECT * FROM `students` where `id`='$id'";
               $result=mysqli_query($connection,$query);
               if(!$result)
               {
                   die("query failed");
               }
               else{
                $row=mysqli_fetch_assoc($result);
               }
                
      }
      ?>

      <?php
        if(isset($_POST['update_students']))
        {
          if(isset($_GET['id_new']))
          {
            $idnew=$_GET['id_new'];
          }
          $name=$_POST['f_Name'];
          $email=$_POST['email'];
          $password=$_POST['password'];

          $query="update `students` set `name`='$name',`email`='$email',`pass`='$password' where `id`='$idnew'";

          $result=mysqli_query($connection,$query);
               if(!$result)
               {
                   die("query failed");
               }
               else{
                  header('location:index.php?update_msg=you have successfully updated');
               }

        }
        ?>

      <form action="update.php?id_new=<?php echo $id;?>" method="post">
       <div class="form-group">
          <label for="f_Name">Name</label>
          <input type="text" name="f_Name" class="form-control" value="<?php echo $row['name']?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control" value="<?php echo $row['pass']?>">
        </div><br>
        <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
      </form>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>