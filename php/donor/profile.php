<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/fbfe3d3910.js" crossorigin="anonymous"></script>
    <link href="../../css/animate.css" rel="stylesheet" type="text/css">
    <link href="../../css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../../css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="register" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Profile</h3>
                    <form action="update-donor.php" method="post" class="appoinment-form">
                        <div class="form-group col-md-6">
                            <input name="name" value="<?php echo $_SESSION["donor-name"]; ?>" id="your_name" class="form-control" placeholder="Name" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="email" value="<?php echo $_SESSION["donor-email"]; ?>"  id="your_email" class="form-control" placeholder="Email" type="email">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="phone" value="<?php echo $_SESSION["donor-phone"]; ?>"  id="your_phone" class="form-control" placeholder="Phone" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="location" value="<?php echo $_SESSION["donor-location"]; ?>" id="your_name" class="form-control" placeholder="Location" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="select-style">
                                <select class="form-control" name="blood_group">
                                    <option><?php echo $_SESSION["donor-blood_group"]; ?></option>
                                    <option>Los Angles</option>
                                    <option>California</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="age" value="<?php echo $_SESSION["donor-age"]; ?>" id="your_name" class="form-control" placeholder="Age" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="password" id="your_name" class="form-control" placeholder="New Password" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="cpassword" id="your_name" class="form-control" placeholder="Confirm Password" type="text">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button id="btn_submit" class="btn-submit" type="submit">Update Account</button>
                        </div>
                    </form>

                </div> <!-- end .appointment-form-wrapper  -->

            </div> <!--  end .col-lg-6 -->
            <div class="notifications col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3>Notifications</h3>
                <h5>Contact them and donate blood.</h5>

                <?php

                require_once '../db.php';

                $donor_id = $_SESSION["donor-id"];
                $query = "SELECT * FROM requests WHERE donor_id = '$donor_id'";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                    $user_id = $row["user_id"];
                    $query2 = "SELECT * FROM user WHERE id = '$user_id'";
                    $result2 = mysqli_query($connect, $query2);
                    while($row2 = mysqli_fetch_array($result2)){
                        echo '<div class="card">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Name</label>
                                        <h4>'.$row2["name"].'</h5>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Email</label>
                                        <h5>'.$row2["email"].'</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <h5>'.$row2["phone"].'</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Location</label>
                                        <h5>'.$row2["location"].'</h5>
                                    </div>
                                </div>
                              </div>';
                }
                }

                ?>

            </div>
        </div>
    </div>
</body>

</html>