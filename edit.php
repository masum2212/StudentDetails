<?php
include "db_conn.php";
$id = $_GET['studentId'];
if(isset($_POST['submit'])){
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['Email'];
    $birth = $_POST['Dob'];
    $number = $_POST['Number'];
    $religion = $_POST['Religion'];
    $nationality = $_POST['Nationality'];
    $gender = $_POST['Gender'];

    $sql = "UPDATE `studentdetails` SET  `firstName`='$first_name', `lastName` = '$last_name', `Email` = '$email', `dateOfBirth`= '$birth', `mobileNo`='$number', `religion`='$religion', `nationality`= '$nationality', `gender`= '$gender' WHERE `studentId` = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location: index.php');
    }
    else{
        echo'Failed' .mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstreps -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Student Information</title>
</head>
<body>
    <nav class = "navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Student Details Information
    </nav>

    <div class="container">
        <div class="text-center">
            <h3>Edit Student Information</h3>
            <p class="text-muted">
                Click Update After Changing Student Information
            </p>
        </div>

        <?php
           $sql = "SELECT * FROM `studentdetails` WHERE `studentId` = '$id' LIMIT 1";
           $result = mysqli_query($conn,$sql);
           foreach($result as $row);
        ?>

        <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" name= "firstName" value = "<?php echo $row['firstName'] ?>">
                        </div>

                        <div class="col">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name= "lastName" value = "<?php echo $row['lastName'] ?>">
                        </div>
                    </div>

                    <div class="col">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name= "Email" value = "<?php echo $row['Email'] ?>">
                    </div>

                    <div class="col">
                            <label class="form-label">Date of Birth</label>
                            <input type="text" class="form-control" name= "Dob" value = "<?php echo $row['dateOfBirth'] ?>">
                    </div>

                    <div class="col">
                            <label class="form-label">Mobile No</label>
                            <input type="text" class="form-control" name= "Number" value = "<?php echo $row['mobileNo'] ?>">
                    </div>

                    <div class="col">
                            <label class="form-label">Religion</label>
                            <input type="text" class="form-control" name= "Religion" value = "<?php echo $row['religion'] ?>">
                    </div>

                    <div class="col mb-3" >
                            <label class="form-label">Nationality</label>
                            <input type="text" class="form-control" name= "Nationality" value = "<?php echo $row['nationality'] ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label>Gender:</label>
                        <input type="radio" class="form-check-input" name="Gender" id=" male" value="Male" <?php echo $row['gender']=='Male'?"checked":"";?>>
                        <label for="male" class="form-input-label">Male</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="Gender" id=" female" value="Female" <?php echo $row['gender']=='Female'?"checked":"";?>>
                        <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
        </div>
    </div>
    
<!-- Bootstreps -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>