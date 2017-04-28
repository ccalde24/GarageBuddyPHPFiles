<?php

require "conn.php";
 
 $sql = "SELECT * FROM sale_data";
 
 $r = mysqli_query($con,$sql);
 
 $result = array();
 
 while($res = mysqli_fetch_assoc($r)){
$result[] = $res;
 }
 
 
 $var = json_encode(array("result"=>$result));
 echo "$var";
 //echo json_last_error_msg();

 
 mysqli_close($con);
?>