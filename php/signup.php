<?php
$connect= mysqli_connect("localhost","root","","photodb");

$Fname = mysqli_real_escape_string($connect, $_REQUEST['Fname']);
$Lname = mysqli_real_escape_string($connect, $_REQUEST['Lname']);
$Phone = mysqli_real_escape_string($connect, $_REQUEST['Phone']);
$Address = mysqli_real_escape_string($connect, $_REQUEST['Address']);
$Atoll = mysqli_real_escape_string($connect, $_REQUEST['Atoll']);
$Island = mysqli_real_escape_string($connect, $_REQUEST['Island']);
$Email = mysqli_real_escape_string($connect, $_REQUEST['Email']);
$psw = mysqli_real_escape_string($connect, $_REQUEST['psw']);


$sql="INSERT INTO `user`(`UserName`, `Password`) VALUES ('$Email','$psw')";
if(mysqli_query($connect, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($connect);
}


// close connection
mysqli_close($connect);



  // INSERT INTO `customer`(`FirstName`, `LastName`, `Contact_number`, `Customer_email`, `Address_AddressId`, `User_UserId`) VALUES ([$FName],[$LName],[value-4],[value-5],[value-6],[value-7])
  // $result=mysqli_query($connect,$sql);















?>
