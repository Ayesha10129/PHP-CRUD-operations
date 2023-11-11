
<?php include('dbcon.php');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>home page</title>
    <style>
      body{
        background-image:url('bgimage.jpg');
      }
    </style>
  </head>
  <body>
  
      <h1 id="main_title" style="background-color:black";>CRUD APPLICATION IN PHP</h2>
       <div class="container" style="background-color:honeydew";>
       <div class="box1">
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:darkslateblue";>ADD STUDENTS

   </button>
   <form action="insert_data.php" method="post">
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label for="f_Name">Name</label>
          <input type="text" name="f_Name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control">
        </div>
      
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="ADD_STUDENTS" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>

          <h2 style="color:darkslateblue";>ALL STUDENTS</h2>
          

        </div>
      <table class="table table-hover table-borgered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
               $query="SELECT * FROM `students`";
               $result=mysqli_query($connection,$query);
               if(!$result)
               {
                   die("query failed");
               }
               else{
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                <tr>
                   <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['name'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['pass'];?></td>
                  <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success" style="background-color:darkslateblue";>UPDATE</a></td>
                  <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">DELETE</a></td>
                    </tr>
                <?php
                 }
               }
               ?>
          
           
          </tbody>

       </table>
       <?php
         if(isset($_GET['message']))
         {
            echo "<h6>".$_GET['message']."</h6>";
         }
       ?>
       <?php
         if(isset($_GET['insert_msg']))
         {
            echo "<h6>".$_GET['insert_msg']."</h6>";
         }
       ?>
       <?php
         if(isset($_GET['update_msg']))
         {
            echo "<h6>".$_GET['update_msg']."</h6>";
         }
       ?>
       <?php
         if(isset($_GET['delete_msg']))
         {
            echo "<h6>".$_GET['delete_msg']."</h6>";
         }
       ?>
      
      
       </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <!-- Modal -->

  </body>
</html>
      