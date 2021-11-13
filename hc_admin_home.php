<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <!--link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"-->
    <title>Admin HC</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0px 5px 15px  rgb(166, 166, 166);">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/mis/"><img src = "images/iitismlogo.png" style = "width: 50px; height: 50px;">   HealthISM</a>
        </div>

        <div class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-person-circle" style="color: grey; font-size: x-large;"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="http://localhost/mis/">Home</a></li>
                <li><a class="dropdown-item" href="http://localhost/mis/index.php/login/logout">Logout</a></li>
            </ul>
        </div>
        </div>
    </nav>

    
    <!--Cards-->
    <div class="container-fluid mb-5">
        <div class="text-center mt-5">
            <h1>Our Services</h1>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="http://localhost/health_center/hc_admin_create.php">
                    <div class="box">
                        <div class="our-services create-record">
                            <div class="icon"> <img src="images/create-record.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Create Record</h4>
                            <p>Enter a new consultation record</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="http://localhost/health_center/hc_admin_treatments.php">
                    <div class="box">
                        <div class="our-services treatments">
                            <div class="icon"> <img src="images/medfile.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Treatments</h4>
                            <p>View and update all the treatment records</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="http://localhost/health_center/hc_admin_lab.php">
                    <div class="box">
                        <div class="our-services labs">
                            <div class="icon"> <img src="images/lab.png" style="width: 70px; height: 70px;">
                            </div>
                            <h4>Lab Records</h4>
                            <p>Manage pathology labs</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="http://localhost/health_center/hc_admin_doctor.php">
                    <div class="box">
                        <div class="our-services doctors">
                            <div class="icon"> <img src="images/doctor.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Doctors</h4>
                            <p>Manage doctors and staff's database</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>