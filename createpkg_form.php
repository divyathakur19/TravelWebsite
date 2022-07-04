
<?php
include_once "connection.php";

$fname = $_REQUEST['fname'];
$mobile_no = $_REQUEST['mobile_no'];
$email = $_REQUEST['email'];
$address = $_REQUEST['addres'];
$city = $_REQUEST['city'];
$tourplace = $_REQUEST['tourplace'];
$daysn = $_REQUEST['daysn'];
$startd = $_REQUEST['startd'];
$endd = $_REQUEST['endd'];  





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





$sql = "INSERT INTO register(fname, phone, email, userAddress , city, tourplace, numdays , startDate, endDate) VALUES('$fname','$mobile_no', '$email', '$address', '$city', '$tourplace', '$daysn', '$startd', '$endd')" ;

 echo "hey";
if($conn->query($sql) == TRUE){
    
  
  echo "<script> alert('Registered Successfully');  window.location.href = 'createpkg.php' ;  </script>";
  
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
