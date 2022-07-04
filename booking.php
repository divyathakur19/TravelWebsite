<?php
include_once "connection.php";

$Fname = $_REQUEST['fname'];
$Place = $_REQUEST['place'];
$Mobile = $_REQUEST['mobile'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$startd = $_REQUEST['startdate'];
//$place = $_GET['subject'];



// echo $fname.$mobile_no.$email;
// echo $address;
// echo $city;
// echo $tourplace;
// echo $daysn;
// echo $startd;
// echo $endd;
 





if (!empty('$_POST')) {

// echo $fname.$mobile_no.$email;
// echo $addres;
// echo $city;
// echo $tourplace;
// echo $daysn;
// echo $startd;
// echo $endd;





$sql = "INSERT INTO booking(fname, place, phone, email, u_address , city, date_from) VALUES('$Fname', '$Place', '$Mobile', '$email', '$address', '$city', '$startd')" ;

 //echo "hey";
if($conn->query($sql) == TRUE){
    
  
  echo "<script> alert('Registered Successfully');  window.location.href = 'selectpkg.php' ;  </script>";
  
}else{
 echo "error: ". $sql. $conn->error;
  echo json_encode("Failed");
}


    



// if(!mysqli_query($conn,$query))
//   {echo "Error: ". "" . mysqli_error($conn);
//   }
// else {
// echo "inserted";
// }

// mysqli_close($conn);
 

}


?>