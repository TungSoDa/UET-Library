<?php
include_once  "../model/connect.php";
$connect = connectServer();
$dbname = "uet-library";
$connect->select_db($dbname);
if (!isset($_SESSION['student']['id'])) header("Location: login.php");
?>

<head>
    <title>Library System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../assets/js/profile.js"></script>
</head>

<body style="background-color: papayawhip">
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10"><h1 style="font-size: 30px"><?php echo $_SESSION['student']['name'];?></h1></div>
            <div class="col-sm-2">
                <div class="btn-group" style="margin-top: 15px">
                    <button type="button" class="btn-primary" id="edit-btn" onclick="location.href='profileUpdate.php'">Edit</button>
                </div>
                <div class="btn-group" style="margin-top: 15px; margin-left: 15px">
                    <button type="button" class="btn-danger" id="home-btn" onclick="location.href='index.php'">Home</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img src="../image/userLogo/<?php echo $_SESSION['student']['id'];?>.png" class="avatar img-circle img-thumbnail" alt="avatar" style="background-color: papayawhip">
                </div></hr><br>

            </div><!--/col-3-->
            <div class="col-sm-9">

                <div class="tab-content">
                    <div class="tab-pane active" id="userInfo">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">
                                <div class="col-xs-6 infoDetail">
                                    <label for="last_name"><h4>Student Name:</h4></label>
                                    <p class="userInfoValue">
                                        <?php echo $_SESSION['student']['name'];?>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6 infoDetail">
                                    <label for="first_name"><h4>Student ID:</h4></label>
                                    <p class="userInfoValue">
                                        <?php echo $_SESSION['student']['id'];?>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6 infoDetail">
                                    <label for="phone"><h4>Birthday:</h4></label>
                                    <p class="userInfoValue">
                                        <?php echo date("d-m-Y", strtotime($_SESSION["student"]["birthday"]));?>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6 infoDetail">
                                    <label for="email"><h4>Email:</h4></label>
                                    <p class="userInfoValue">
                                        <?php echo $_SESSION['student']['id'];?>@vnu.edu.vn
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6 infoDetail">
                                    <label for="school_year"><h4>School Year: </h4></label>
                                    <p class="userInfoValue">
                                        <?php echo $_SESSION['student']['faculty'];?>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6 infoDetail">
                                    <label for="student_class"><h4>Class:</h4></label>
                                    <p class="userInfoValue">
                                        <?php echo $_SESSION['student']['class'];?>
                                    </p>
                                </div>
                            </div>

                        </form>

                        <hr>

                    </div><!--/tab-pane-->

                    <div class="tab-pane" id="messages">

                        <h2></h2>

                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </form>

                    </div><!--/tab-pane-->

                    <div class="tab-pane" id="settings">


                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name"><h4>First name</h4></label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2"><h4>Verify</h4></label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
</body>
