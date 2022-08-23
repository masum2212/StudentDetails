<?php
include "db_conn.php";
$id = $_GET['studentId'];
$sql = "DELETE FROM `studentdetails` WHERE `studentId` = '$id'";
$result = mysqli_query($conn,$sql);
if($result){
    header('Location: index.php');
}
else{
    echo "Failed".mysqli_error($conn);
}
?>