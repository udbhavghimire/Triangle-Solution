
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit projects</title>
  </head>
  <body>
  <div class="container">

  <?php
        $conn = mysqli_connect('localhost','root','','trianglesolution');

        if(isset($_GET['edit'])){
          $edit_id = $_GET['edit'];

          $select = "SELECT * FROM project WHERE p_id = $edit_id ";
        $run = mysqli_query($conn,$select);
        $row_project = mysqli_fetch_array($run);
            $p_name = $row_project['p_name'];
            $c_name = $row_project['c_name'];
            $p_status = $row_project['p_status'];
            $p_details = $row_project['p_details'];
        }
    ?>


  <form action="" method="post" enctype= "multipart/form-data">
      <h1 class="text-center py-5"> Edit details of the project</h1>
      
        <div class="mb-3">
            <label class="form-label">Project Name</label>
            <input type="text" name="p_name" class="form-control" value = "<?php echo $p_name; ?>" >
        </div>

        <div class="mb-3">
            <label class="form-label">Client Name</label>
            <input type="text" name="c_name" class="form-control" value = "<?php echo $c_name; ?>" >
        </div>
        
        <div class="mb-3">
            <label class="form-label">Project Status</label>
            <select class="form-select" name="p_status" value = "<?php echo $p_status; ?>" >
             <option>Ongoing</option>
             <option>Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
           <textarea rows="4" cols="50" class="form-control" name="p_details" ><?php echo $p_details; ?></textarea>
        </div>
        <button type="submit" name="insert-btn" class="btn btn-success"> Submit </button>
</form>


<?php

$conn = mysqli_connect('localhost','root','','trianglesolution');

if(isset($_POST['insert-btn'])){

    $ep_name = $_POST['p_name'];
    $ec_name = $_POST['c_name'];
    $ep_status = $_POST['p_status'];
    $ep_details = $_POST['p_details'];

   $update = "UPDATE project SET p_name='$ep_name',c_name='$ec_name',p_status='$ep_status',p_details='$ep_details' WHERE p_id='$edit_id' ";

    $run_update = mysqli_query($conn, $update);

    if($run_update == true){
        echo "data updated";
        header("Location: view_projects.php");

    }else{
        echo "update failed";
    }

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
  </body>
</html>