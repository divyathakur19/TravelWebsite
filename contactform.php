<?php
include_once "connection.php";

$fullname = $_REQUEST['fullname'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];  



// echo $fname.$mobile_no.$email;
// echo $message;
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





$sql = "INSERT INTO contact_us(Fullname, Email, Messagge) VALUES('$fullname', '$email', '$message')" ;

 
if($conn->query($sql) == TRUE){
    
  
  echo "<script> alert('Sent Successfully');  window.location.href = 'home.html' ;  </script>";
  
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