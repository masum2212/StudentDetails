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
        <a href="add_student.php" class = "btn btn-dark mb-4">Add New</a>

        <table class = "table table-hover text-center">
            <thead class = "table-dark">
                <tr>
                    <th scope = "col">ID</th>
                    <th scope = "col">First Name</th>
                    <th scope = "col">Last name</th>
                    <th scope = "col">Email</th>
                    <th scope = "col">Date of Birth</th>
                    <th scope = "col">Mobile</th>
                    <th scope = "col">Religion</th>
                    <th scope = "col">Nationality</th>
                    <th scope = "col">Gender</th>
                    <th scope = "col">Action</th>
                </tr>
            </thead>

            <?php
            include "db_conn.php";
            $sql = "SELECT * FROM `studentdetails`";
            $result = mysqli_query($conn,$sql);
            foreach($result as $row) {
                // echo $row['firstName'];
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['studentId'] ?></td>
                        <td><?php echo $row['firstName'] ?></td>
                        <td><?php echo $row['lastName'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['dateOfBirth'] ?></td>
                        <td><?php echo $row['mobileNo'] ?></td>
                        <td><?php echo $row['religion'] ?></td>
                        <td><?php echo $row['nationality'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href="edit.php?studentId=<?php echo $row['studentId']?>"><i class = "fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?studentId=<?php echo $row['studentId']?>"><i class = "fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                </tbody>
                <?php
            }
            // if(mysqli_num_rows($result)){
            //     foreach($result as $row){
            //         echo $row["firstName"];
            //     }
            // }
            // else{
            //     echo"<h4>No Record Found</h4>";
            // }
            ?>
        </table>
    </div>
    
<!-- Bootstreps -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>