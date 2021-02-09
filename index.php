<?php
include 'conn.php';
if(isset($_POST['done'])){
  $task=$_POST['Taskname'];
  echo $task;
  $q="INSERT INTO submit_task (task) VALUES ('$task')";
 
  $query=mysqli_query($conn,$q); 
  header('location:display.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
  <title>Insert into List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
  <body>
    <div class=" col-lg-6 m-auto">
    <form method="post">
    <div class=card">
    <div class="card-header bg-dark">
    <h1 class="text-white text-center">Insert Task</h1>
    </div>
    <label>Task:</label>
     <input type="text" name="Taskname" class="form-control"><br>
     <button class="btn btn-success" name="done" type="submit">Submit</button>
    </div>
    </form>
    </div>

   
  </body>
</html>