

<!doctype html>
<html lang="en">
  <head>
  <title>Display List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
  <body>
   <div class ="container">
   <div class="col-lg-12">
   <br>
   <h1 class="text-warning text-center">Display Task</h1>
  <br>
   <table class="table table-striped table-hover table-borderd ">
   <tr class="bg-dark text-white text-center">
   <th>ID</th>
   <th>Task</th>
   <th>Delete</th>
   <th>Update</th>
   </tr>
   <?php
        include 'conn.php';
        $q="select * from submit_task";
         $query=mysqli_query($conn,$q);
         while($res = mysqli_fetch_assoc($query)) {
?>
   <tr class="text-center">
   <td><?php echo $res['id'];?></td>
   <td><?php echo $res['task'];?></td>
   <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
   <td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id'];?>" class="text-white">Update</a></button></td>
   </tr>
   <?php
         }
   ?>
   </table>
   </div> 
   </div>

  </body>
  </html>
