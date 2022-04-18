<!-- database -->
<!-- CREATE TABLE `sgp`.`expert` ( `FName` VARCHAR(20) NOT NULL , `LName` VARCHAR(20) NOT NULL , `MobileNumber` INT(10) NOT NULL , `EmailID` VARCHAR(30) NOT NULL , `Education` VARCHAR(20) NOT NULL , `City` VARCHAR(20) NOT NULL , `Country` VARCHAR(15) NOT NULL , `State` VARCHAR(20) NOT NULL , `Experience` VARCHAR(20) NOT NULL , `Expertise` TEXT NOT NULL , `Charge1` TEXT NOT NULL , `Charge3` INT(5) NOT NULL , `Charge6` INT(5) NOT NULL , `Charge12` INT(5) NOT NULL , `AddTime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`EmailID`)) ENGINE = InnoDB; -->
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'particle/_dbconn.php';

   
    $Fname = $_POST["Fname"];
    $Lname = $_POST["Lname"];
    $number = $_POST["number"];
    $Email = $_POST["email"];
    $Education = $_POST["Education"];
    $city = $_POST["city"];
    $Country = $_POST["Country"];
    $State = $_POST["State"];
    $Experience = $_POST["Experience"];
    $Expertise = $_POST["Expertise"];
    $Charge1 = $_POST["Charge1"];
    $Charge3 = $_POST["Charge3"];
    $Charge6 = $_POST["Charge6"];
    $Charge12= $_POST["Charge12"];
    
    $sql = "INSERT INTO `expert` VALUES ('$Fname', '$Lname', '$number', '$Email', '$Education', '$city', '$Country', '$State', '$Experience', '$Expertise', '$Charge1', '$Charge3', '$Charge6', '$Charge12', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:expert_validation_form.php');
    }
}

?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Fill detials</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            background: #31BB9E;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #31BB9E;
        }


        .profile-button {
            background: #31BB9E;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 13px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $_SESSION["EName"] ?></span><span class="text-black-50"><?php echo $_SESSION["EEmail"] ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
        <form action="ExForm.php" method="POST">
                        <div class="col-md-6"><label class="labels">First Name</label>
                            <input type="text" class="form-control" name="Fname">
                        </div>
                        <div class="col-md-6"><label class="labels">Last Name</label>
                            <input type="text" class="form-control" name="Lname">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="number"></div>
                        <!-- <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <!-- <div class="col-md-12"><label class="labels">Country</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" name="email"></div>
                        <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" name="Education"></div>

                        <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" name="city"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" name="Country"></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" name="State"></div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Experience
                            details</span><span class="border px-3 p-1 add-experience"></span></div><br>
                    <div class="col-md-12"><label class="labels">Years of Experience in Stockmarket</label><input type="text" class="form-control" name="Experience"></div> <br>
                    <div class="col-md-12"><label class="labels">Expertise</label><textarea class="form-control" placeholder="Explain your expertise" name="Expertise"></textarea> </div><br><br>
                    <div class="d-flex justify-content-between align-items-center experience"><span>Subscription
                            charges</span><span class="border px-3 p-1 add-experience"></span></div><br>
                    <div class="col-md-12"><label class="labels">Charge per Month</label><input type="text" class="form-control" placeholder="INR" name="Charge1"></div>
                    <div class="col-md-12"><label class="labels">Charge per 3 Month</label><input type="text" class="form-control" placeholder="INR" name="Charge3"></div>
                    <div class="col-md-12"><label class="labels">Charge per 6 Month</label><input type="text" class="form-control" placeholder="INR" name="Charge6"></div>
                    <div class="col-md-12"><label class="labels">Charge per Year</label><input type="text" class="form-control" placeholder="INR" name="Charge12"></div>

                </div>
            
            
            
            
            
            
            </div>
            <div class="m-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>
                
        </form>                            

        </div>
    </div>
    </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'></script>
</body>

</html>