<?php
$servername="localhost";
$username="root";
$pss="";
$databasename="nayana";

$conn=new mysqli($servername,$username,$pss,$databasename);
if($conn){
    echo"connection successfull";
}
else{
    echo"something went wrong";
}
mysqli_query($conn,"insert into `user`(name,age,gender,class)values('dhanush','90','male','2nd bca')");
?>

