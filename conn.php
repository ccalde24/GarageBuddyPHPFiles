<?php

$username = "chriscal_chris";
$password = "theboy555!";
$host = "162.253.224.12";
$dbname = "chriscal_garagesaledb";

$con = mysqli_connect($host,$username,$password,$dbname);
if(!$con){
	echo "failure";
}

?>