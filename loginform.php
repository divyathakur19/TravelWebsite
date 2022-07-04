<?php
include_once "connection.php";
$username = $_REQUEST['user'];  
  $password = $_REQUEST['pass'];
  $option = $_REQUEST['type'];
    

  if($option == 'select_package')
{
  $qry = "SELECT * FROM booking where fname='$username' and phone='$password'";
  $data = mysqli_query($conn,$qry);
  $total = mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);


  echo $result['fname'];
  echo $result['phone'];
  
echo "<table>
<tr>
<th>Booking_id</th>
<th>Name</th>
<th>Place</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>Travel_date</th>
</tr>";

  echo "<tr>";
  echo "<td>" . $result['booking_id'] . "</td>";
  echo "<td>" . $result['fname'] . "</td>";
  echo "<td>" . $result['place'] . "</td>";
  echo "<td>" . $result['phone'] . "</td>";
  echo "<td>" . $result['email'] . "</td>";
  echo "<td>" . $result['u_address'] . "</td>";
  echo "<td>" . $result['city'] . "</td>";
  echo "<td>" . $result['date_from'] . "</td>";

  echo "</tr>";

echo "</table>";
}
else {
    $qry = "SELECT * FROM register where fname='$username' and phone='$password' ";
    $data = mysqli_query($conn,$qry);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
  
  
    echo $result['fname'];
    echo $result['phone'];

    echo "<table>
<tr>
<th>User_id</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>Tourplace</th>
<th>Days</th>
<th>Travel_Stratdate</th>
<th>Travel_enddate</th>
</tr>";

  echo "<tr>";
  echo "<td>" . $result['user_id'] . "</td>";
  echo "<td>" . $result['fname'] . "</td>";
  echo "<td>" . $result['phone'] . "</td>";
  echo "<td>" . $result['email'] . "</td>";
  echo "<td>" . $result['userAddress'] . "</td>";
  echo "<td>" . $result['city'] . "</td>";
  echo "<td>" . $result['tourplace'] . "</td>";
  echo "<td>" . $result['numdays'] . "</td>";
  echo "<td>" . $result['startDate'] . "</td>";
  echo "<td>" . $result['endDate'] . "</td>";

  echo "</tr>";

echo "</table>";
  }




  //echo "$total";

  if( $total != 0)
  {
      //echo "'fname' 'tourplace'";
  }
  else{
      echo "no records found";
  }
  ?>
  <style>
  table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}

  </style>
   