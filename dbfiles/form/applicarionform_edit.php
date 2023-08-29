<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../User dashboard/css/bootstrap.css">
    <style>
        body {
            background-image: url(assets/airforce.png);
            background-size: 45%;
            background-position: center;
            background-repeat: no-repeat;
        }

        .marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            background: rgba(95, 110, 8, 0.74);
            ;
            color: #333;
            border: 2px solid;
        }

        .marquee p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 1s linear infinite;
            -webkit-animation: scroll-left 1s linear infinite;
            animation: scroll-left 10s linear infinite;
        }

        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }

            100% {
                -moz-transform: translateX(-100%);
            }
        }

        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }

            100% {
                -webkit-transform: translateX(-100%);
            }
        }

        @keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }

            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        #s1 {
            background-color: blue;
            font-size: 25px;

        }
    </style>
</head>

<body>
    <div class="container-fluid bg-warning">
        <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
        <b>Fill the form to apply for AFCAT</b>
        <img src="assets/airf.jpeg" alt="" height="50px" width="50px">
        <input type="search" name="search" placeholder="search" class="ankit"><i class="fas fa-search" id="s1"></i>
    </div>

    <div class="marquee">
        <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Welcome to Afcat:Air
            Force Common Admission Test</p>

    </div>

    <div class="container t-5" id="a1" style="background-color: rgba(0, 0, 0, 0.6); color:white;">
        <center>
            <h1 class="display-6">Application Form</h1>
        </center><br>


        <?php
           $q = $_REQUEST['q'];
           $con = mysqli_connect("localhost","root","","afcat");
           
           // form candi
           $sql1 = "select * from candi where s_no='$q'";
           $r1 = mysqli_query($con,$sql1);
           $v1 = mysqli_fetch_assoc($r1);

           //for appli
           $sql2 = "select * from appli where s_no='$q'";
           $r2 = mysqli_query($con,$sql2);
           $v2 = mysqli_fetch_assoc($r2);

      ?>

        <form class="row g-3" action="../form_edit.php?q=<?php echo $v2['s_no']; ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder=" Enter your name" aria-label="First name"
                        value="<?php echo $v2['cname']; ?>">
                </div>
                <div class="col" style="margin-top: 8px;">
                    <label>Gender</label>
                    <select class="form-select">
                        <option>Choose gender</option>
                        <option <?php if($v1['gender']=="Male" ){ ?> selected
                            <?php } ?>>Male
                        </option>
                        <option <?php if($v1['gender']=="Female" ){ ?> selected
                            <?php } ?> >Female
                        </option>
                        <option <?php if($v1['gender']=="Other" ){ ?> selected
                            <?php } ?>>Others
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email"
                    value="<?php echo $v1['email']; ?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Contact no.</label>
                <input type="number" class="form-control" placeholder="Enter Your Mobile no."
                    value="<?php echo $v1['mobile']; ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Enter Address" name="address"
                    value="<?php echo $v2['address']; ?>">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" placeholder="Enter Your City" name="city"
                    value="<?php echo $v2['city']; ?>">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <input type="text" class="form-control" name="state" value="<?php echo $v2['state']; ?>">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip" value="<?php echo $v2['zip']; ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">DOB</label>
                <input type="date" class="form-control" value="<?php echo $v1['dob']; ?>">
            </div>
            <div class="col-md-6">
                <label>Qualification</label>
                <select class="form-select" name="qualification">
                    <option>Choose...</option>
                    <option <?php if($v2['qualification']=="10th" ){ ?> selected
                        <?php } ?> >10th
                    </option>
                    <option <?php if($v2['qualification']=="12th" ){ ?> selected
                        <?php } ?> >12th
                    </option>
                    <option <?php if($v2['qualification']=="Under Graduate" ){ ?> selected
                        <?php } ?> >Under Graduate
                    </option>
                    <option <?php if($v2['qualification']=="Post Graduate" ){ ?> selected
                        <?php } ?> >Post Graduate
                    </option>
                </select>


            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Mother's Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your mother's full name"
                    value="<?php echo $v1['mname']; ?>">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Father's Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your father full name"
                    value="<?php echo $v2['fname'] ?>">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Accept T&C to proceed the application
                </label>
            </div>
            <div class="col-6 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">cancel</button>
            </div>
        </form>

        <div class="container-fluid bg-warning" style="color:black"><b>@Afcat</b></div>
</body>

</html>