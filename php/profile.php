<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/animate.css" rel="stylesheet" type="text/css">
    <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="../css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="register" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Profile</h3>
                    <form class="appoinment-form">
                        <div class="form-group col-md-6">
                            <input value="<?php echo $_SESSION["name"]; ?>" id="your_name" class="form-control" placeholder="Name" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input value="<?php echo $_SESSION["email"]; ?>"  id="your_email" class="form-control" placeholder="Email" type="email">
                        </div>
                        <div class="form-group col-md-6">
                            <input value="<?php echo $_SESSION["phone"]; ?>"  id="your_phone" class="form-control" placeholder="Phone" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="select-style">
                                <select class="form-control" name="blood_group">
                                    <option><?php echo $_SESSION["blood_group"]; ?></option>
                                    <option>Los Angles</option>
                                    <option>California</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <input value="<?php echo $_SESSION["location"]; ?>" id="your_name" class="form-control" placeholder="Location" type="text">
                        </div>

                    </form>

                </div> <!-- end .appointment-form-wrapper  -->

            </div> <!--  end .col-lg-6 -->
            <div class="notifications col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h3>Notifications</h3>
                <h5>Contact them and donate blood.</h5>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Anandh</h4>
                        </div>
                        <div class="col-md-2">
                            <h5>phone</h5>
                        </div>
                        <div class="col-md-2">
                            <h5>location</h5>
                        </div>
                        <div class="col-md-2">
                            <h5>message</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Anandh</h4>
                        </div>
                        <div class="col-md-2">
                            <h5>phone</h5>
                        </div>
                        <div class="col-md-2">
                            <h5>location</h5>
                        </div>
                        <div class="col-md-2">
                            <h5>message</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>