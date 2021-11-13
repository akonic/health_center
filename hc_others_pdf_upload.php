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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous" />
 
    <link rel="stylesheet" href="style.css">
    <!--link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"-->
    <title>HealthISM</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 0 3px 12px -2px rgba(20, 27, 202, .17);">
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
            <div class="col-md-4">
                <a href="http://localhost/health_center/hc_others_home.php">
                    <div class="box">
                        <div class="our-services treatments">
                            <div class="icon"> <img src="images/medfile.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Medical folder</h4>
                            <p>All your treatment files and test reports.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/health_center/hc_others_labs.php">
                    <div class="box">
                        <div class="our-services tests">
                            <div class="icon"> <img src="images/lab.png" style="width: 70px; height: 70px;">
                            </div>
                            <h4>Tests Available</h4>
                            <p>Test labs and health centers near you.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="http://localhost/health_center/hc_others_enquiry.php">
                    <div class="box">
                        <div class="our-services enquiry">
                            <div class="icon"> <img src="images/enquiry.png" style="width: 70px; height: 70px;"> </div>
                            <h4>Enquiry</h4>
                            <p>Help-desk and advisory services</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
   <!--Cards end-->
    <?php

 include 'connection.php';
 $ids=$_GET['id'];
 $showquery = "select * from hc_registration where consult_id={$ids}";
 $showdata = mysqli_query($con,$showquery);
 $arrdata = mysqli_fetch_array($showdata);
 if(isset($_POST['submit']))
 {$idu=$_GET['id'];
    $cid=$_POST['cid'];
   $name=$_POST['pname'];
   $doctor=$_POST['dname'];
   $test=$_POST['tests'];
   $status=$_POST['status'];
   $date=$_POST['date'];
 //  $file=$_POST['file'];
   $filename = $_FILES["file"]["name"];
   $tempname = $_FILES["file"]["tmp_name"];    
   $folder = "uploads/".$filename;
   move_uploaded_file($tempname, $folder);
  
   $update = " update hc_registration set consult_id='$cid',patient_name='$name',doctor_name='$doctor',test_prescribed='$test',status='$status',file='$filename' where consult_id='{$idu}'";

    $res = mysqli_query($con,$update);
     if($res)
     {
       ?>
    <script>
    alert("Data Inserted successfully");
    //window.location = 'http://localhost/health_center/hc_admin_treatments.php';
    </script>
    <?php
     }
    
  }
  ?>
    <!-- Create record form-->
    <div class="container" id="44" style="display: block;">
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="lname">ID:</label>
            <label type="text" id="pnaem" name="cid"><?php echo $arrdata['consult_id']; ?></label><br>
            <label for="lname">Patient Name :</label>
            <label type="text" id="pnaem" name="pname"><?php echo $arrdata['patient_name']; ?></label><br>
            <label for="lname">Doctor Name :</label>
            <label type="text" id="dname" name="dname"><?php echo $arrdata['doctor_name']; ?></label><br>
            <label for="lname">Test Prescribed :</label>
            <label type="text" id="tests" name="tests"><?php echo $arrdata['test_prescribed']; ?></label><br>
            <label for="lname">Date :</label>
            <label type="text" id="tests" name="date"><?php echo $arrdata['date']; ?></label><br>
            <label for="lname">Status</label>
            <label type="text" id="status" name="status"><?php echo $arrdata['status']; ?></label><br>
            <label for="lname">Previous File :</label>
            <td><a href="uploads/<?php echo $arrdata['file'] ?>" target="_blank">view file</a></td><br>
            <label for="lname">Upload New :</label>
            <label type="file" name="file" id="pdf_file" accept="application/pdf" ?><br>
                <input type="submit" name="submit" value="Submit">
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<script>

</script>