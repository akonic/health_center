<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
    <!--link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"-->
    <title>Hello, world!</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0px 5px 15px  rgb(166, 166, 166);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HealthISM</a>
            <!--button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>
              <a class="nav-link disabled">Disabled</a>
            </div>
            <!-->
        </div>

        <div class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-person-circle" style="color: grey; font-size: x-large;"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <!--Old Cards>
        <div class="row" style="margin: 50px">
            <div class="col-sm-12 col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center; font-size:x-large;"> My Treatments</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn buttons card-icons"><i class="fas fa-notes-medical"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size:x-large;"> Tests Available</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn buttons card-icons"><i class="fas fa-flask"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size:x-large;"> Enquiry</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn buttons card-icons"><i class="fas fa-phone-alt"></i></a>
                  </div>
                </div>
              </div>
          </div>
          <!-->


    <!--New Cards-->
    <div class="container-fluid mb-5">
        <div class="text-center mt-5">
            <h1>Our Services</h1>
        </div>
        <div class="row">
            <div class="col-md-4" style="border:1px solid black;">
                <a href="http://localhost/health_center/hc_admin_create.php">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon"> <img src="images/medfile.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Create Record</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="border:1px solid black;">
                <a href="http://localhost/health_center/hc_admin_treatments.php">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon"> <img src="images/medfile.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Treatments</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="border:1px solid black;">
                <a href="http://localhost/health_center/hc_admin_lab.php">
                    <div class="box">
                        <div class="our-services speedup">
                            <div class="icon"> <img src="images/microsope.png" style="width: 70px; height: 70px;">
                            </div>
                            <h4>Lab Records</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="border:1px solid black;">
                <a href="http://localhost/health_center/hc_admin_enquiry.php">
                    <div class="box">
                        <div class="our-services privacy">
                            <div class="icon"> <img src="images/enquiry.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Docotrs</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Create record form-->

    <div class="container">
        <a href="http://localhost/health_center/hc_admin_add_lab.php">
            <div>Add Lab Record</div>
        </a>
    </div>

    <!--My Treatments Table-->
    <div class="container" id="11" style="display: block;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Test Center</th>
                    <th scope="col">Contract Start Date</th>
                    <th scope="col">Contract End Date</th>
                    <th scope="col">Tests Available</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
              include 'connection.php';
              $selectquery = "SELECT * FROM `hc_labs`";
              $query = mysqli_query($con,$selectquery);
              $nums = mysqli_num_rows($query);
              while($res = mysqli_fetch_array($query)){
                
                ?>
                <tr>
                    <td><?php echo $res['lab_name']; ?></td>
                    <td><?php echo $res['cont_start_date']; ?></td>
                    <td><?php echo $res['cont_end_date']; ?></td>
                    <td><?php echo $res['tests']; ?></td>
                    <td><a href="hc_admin_update_lab.php?id=<?php echo $res['lab_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="delete_lab.php?id=<?php echo $res['lab_id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    
                </tr>
                <?php
              }
              ?>


            </tbody>
        </table>
    </div>

    <!--Tests Available Table-->
    <div class="container" id="22" style="display: none;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tests Id</th>
                    <th scope="col">Test Name</th>
                    <th scope="col">Department</th>
                </tr>
            </thead>
            <tbody>
                <?php
              include 'connection.php';
              $selectquery = "SELECT * FROM `hc_enquiry`";
              $query = mysqli_query($con,$selectquery);
              $nums = mysqli_num_rows($query);
              while($res = mysqli_fetch_array($query)){
                
                ?>
                <tr>
                    <td><?php echo $res['query_type']; ?></td>
                    <td><?php echo $res['timings']; ?></td>
                    <td><?php echo $res['contact']; ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
        </table>
    </div>

    <!--Enquiry Table-->
    <div class="container" id="33" style="display: none;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Query Type</th>
                    <th scope="col">Contact Details</th>
                    <th scope="col">Timings</th>
                </tr>
            </thead>
            <tbody>
                <?php
              include 'connection.php';
              $selectquery = "SELECT * FROM `hc_enquiry`";
              $query = mysqli_query($con,$selectquery);
              $nums = mysqli_num_rows($query);
              while($res = mysqli_fetch_array($query)){
                
                ?>
                <tr>
                    <td><?php echo $res['query_type']; ?></td>
                    <td><?php echo $res['timings']; ?></td>
                    <td><?php echo $res['contact']; ?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
        </table>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>