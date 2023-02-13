<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Profile</title>
    </head>
    <body>
        <?php
            include 'Header.php';
        ?>
        <?php
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $gander = $_POST["gander"];
            $village = $_POST["village"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $pin = $_POST["pin"];
            $id = $_POST["id"];
            $department = $_POST["department"];
            if(isset($_POST['submit'])){
                $sql = "INSERT INTO `update_user`(`Full Name`, `Email`, `Phone Number`, `Gander`, `Employee ID`, `Employee Department`, `Village`, `Distric`, `State`, `Pin Code`) VALUES ('$name','$email','$phone','$gander','$id','$department','$village','$city','$state','$pin')";
                $r = mysqli_query($conn, $sql);
                if($r){
                    echo "Seccssefully Submit";
                }
                else{
                    echo "Error To Submit";
                }
            }
        ?>
        <div class="container mt-3 mb-3" action="UpdateProfile.php" method="post">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body shadow">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile Photo">
                                    </div>
                                    <center><h5 class="user-name mt-3">Anshu Kumar</h5></center>
                                    <center><h6 class="user-email">anshu.ac.dv@gmail.com</h6></center>
                                    <center><input type="file" name="submit" id="submit"></center>
                                    <center><button type="file" id="submit" name="submit" class="btn btn-primary mt-3">Upload</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100" action="UpdateProfile.php" method="post">
                        <div class="form card-body shadow" action="UpdateProfile.php" method="post">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-2">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="eMail">Email</label>
                                        <input type="email" name="email" class="form-control" id="eMail" placeholder="Enter email ID">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="website">Gander</label>
                                        <input type="text" name="gander" class="form-control" id="website" placeholder="Enter your gander">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-2">
                                    <h6 class="mt-3 mb-2 text-primary">Employee Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="Street">Employee Id</label>
                                        <input type="text" name="id" class="form-control" id="Street" placeholder="Enter Employee Id">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="ciTy">Department</label>
                                        <input type="text" name="department" class="form-control" id="ciTy" placeholder="Enter Employee Department">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-2">
                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="Street">Village</label>
                                        <input type="text" name="village" class="form-control" id="Street" placeholder="Enter Village">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="ciTy">City</label>
                                        <input type="text" name="city" class="form-control" id="ciTy" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="sTate">State</label>
                                        <input type="text" name="state" class="form-control" id="sTate" placeholder="Enter State">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-2">
                                    <div class="form-group">
                                        <label for="zIp">Zip Code</label>
                                        <input type="text" name="pin" class="form-control" id="zIp" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters" action="UpdateProfile.php" method="post">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3" action="UpdateProfile.php" method="post">
                                    <div class="text-right" action="UpdateProfile.php" method="post">
                                        <button type="button" id="cancel" name="ok" class="btn btn-secondary">Cancel</button>
                                        <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>