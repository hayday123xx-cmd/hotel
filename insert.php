<?php

$conn = new mysqli(
"localhost",
"root",
"",
"hotel"
);

if($conn->connect_error){
die("Connection Failed");
}

$guestname = $_POST['guestname'];
$room_type = $_POST['room_type'];
$checkindate = $_POST['checkindate'];
$checkoutdate = $_POST['checkoutdate'];

$sql = "INSERT INTO booking
(guest_name, room_type, check_in, check_out)
VALUES
('$guestname','$room_type','$checkindate','$checkoutdate')";

if($conn->query($sql) === TRUE){
echo "Booking Saved Successfully";
}else{
echo "Error";
}

$conn->close();

?>