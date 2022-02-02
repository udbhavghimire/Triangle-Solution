<?php
    session_start();
    include_once 'loginsystem/includes/dbh.inc.php';
    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
     }
     
     $sql = 'SELECT p_id, p_name, c_name,p_status,p_details FROM project';
     $result = $conn->query($sql);
     
     if(! $result ) {
        die('Could not get data: ' . mysql_error());
     }
    
     

    if(isset($_SESSION['u_id'])){
        ?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link href="../assest/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assest/css/dashboard.css" rel="stylesheet">
  <script src="../ckeditor/ckeditor.js"></script>
</head>

<body>




  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../">Traingle solutions</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <form action="loginsystem/includes/logout.inc.php" method="POST">
          <input class="btn btn-dark" value="Log out" type="submit" name="submit"/>
        </form>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                <?php
                echo $_SESSION['u_uid'];
                ?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-success text-light" href="#">
                <span data-feather="file"></span>
                Projects
              </a>
            </li>
          </ul>
        </div>
      </nav>
     
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
        <div class="row py-4">
          <div class="text-center">
          <a class="btn btn-primary" href="./addpage.php">
              Add Project
            </a>
          </div>
        </div>

        <!-- Modal -->
        <form method="POST" action="./adddata.php">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Projects</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Project Name</label>
                  <input type="text" name="p_name" class="form-control">
              </div>
              <div class="mb-3">
                  <label class="form-label">Client Name </label>
                  <input type="text" name="c_name" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Project Status</label>
              <select class="form-select" name="p_status">
              <option>Ongoing</option>
              <option>Completed</option>
              </select>
            </div>
           <div class="mb-3">
               <label class="form-label">Project Details</label>
              <textarea rows="4" cols="50" class="form-control" name="p_details"> </textarea>
           </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Submit" name="submit"/>
              </div>
            </div>
          </div>
        </div>
      </form>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
              <th>Name of the project</th>
              <th>Client Name</th>
              <th>Project Status</th>
              <th>Project Details</th>
              <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              if (mysqli_num_rows($result) >= 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td class="py-4"><?php echo $row["p_name"]; ?></td>
                    <td class="py-4"><?php echo $row["c_name"]; ?></td>
                    <td class="py-4"><?php echo $row["p_status"]; ?></td>
                    <td class="py-4"><?php echo $row["p_details"]; ?></td>
                    <td class="py-4">
                      <a href="editpage.php?edit=<?php echo $row['p_id']; ?>" class="btn btn-success" >Edit</a>
                      <a href="deletedata.php?delete=<?php echo $row['p_id']; ?>" class="btn btn-danger" >Delete</a>
                    </td>
                  </tr>
                  <?php
                }
              }else{
                echo "gaha"; 
              }
            ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
      <script src="../assest/js/bootstrap.min.js"></script>
      <script>CKEDITOR.replace('p_details');</script>
</body>

</html>
<?php 

        
    }else{
        header("Location: loginsystem/index.php");
    }
?>
<?php 
$conn->close();
?>