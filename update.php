<?php
include 'conn.php';
if(isset($_POST['updatedone'])){
  $id=$_GET['id'];
  $task=$_POST['Taskname'];
  $q="update submit_task set task='$task' WHERE id=$id"; 
  $query=mysqli_query($conn,$q); 
  header('location:display.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
  <title>Update List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
  <body>
    <div class=" col-lg-6 m-auto">
    <form method="post">
    <div class="card">
    <div class="card-header bg-dark">
    <h1 class="text-white text-center">Update Task</h1>
    </div>
    <label>Task:</label>
     <input type="text" name="Taskname" class="form-control"><br>
     <button class="btn btn-success" name="updatedone" type="submit">Update</button>
    </div>
    </form>
    </div>

   
  </body>
</html>