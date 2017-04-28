<?php
require "conn.php";

$start_time = $_POST["startTime"];
$end_time = $_POST["endTime"];
$start_date = $_POST["startDate"];
$categories = $_POST["categories"];
$description = $_POST["description"];
$location = $_POST["location"];

$sql_query = "insert into sale_data(start_time,end_time,start_date,description) values('$start_time','$end_time','$start_date','$description');";
$sql_query2 = "insert into category_data(categories) values('$categories');";
$sql_query3 = "insert into location_data(location) values ('$location');";


if ($con->query($sql_query)) {
  echo "success";
}


else{
echo "Multi query failed: (" . $con->errno . ") " . $con->error;
}

if ($con->query($sql_query2)) {
  echo "success";
}


else{
echo "Multi query failed: (" . $con->errno . ") " . $con->error;
}
if ($con->query($sql_query3)) {
  echo "success";
}


else{
echo "Multi query failed: (" . $con->errno . ") " . $con->error;
}





?>