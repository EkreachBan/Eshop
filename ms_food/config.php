<?php
$host="localhost";
$user="root";
$pws="";
$db="db_msfood";

$conn=mysqli_connect($host,$user,$pws);
$sql=mysqli_select_db($conn,$db);
if(!$sql){
    echo"can not select db".mysqli_error($conn);
}

?>