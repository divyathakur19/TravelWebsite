<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="reg">
  <div class="regform">
  <h1>Registration Form</h1></div>
  
  <div class="main">
    <form class="form" action="createpkg_form.php" method="POST">
            <div> <span  class="block">NAME: </span>
            <input type="text" placeholder="Enter here" name="fname" id="fname">
          </div>
          <div>
            <span  class="block">MOBILE No.: </span>
            <input type="number" placeholder="Enter here" name="mobile_no" id="mobile_no">
          </div>
          <div>
            <span  class="block">EMAIL: </span>
          <input type="email" placeholder="Enter here" name="email" id="email">
          </div>
          <div>
            <span  class="block">ADDRESS: </span>
            <input type="text" placeholder="Enter here" name="addres" id="addres">
          </div>
          <div>
          <span  class="block">CITY: </span>
          <input type="text" placeholder="Enter here" name="city" id="city">
          </div>
          <div>
            <span  class="block">TOUR PLACE: </span>
          <input type="text" placeholder="Enter here" name="tourplace"  list="tourplace">
            <datalist id="tourplace">
              <option value="mumbai">
              <option value="agra">
              <option value="kerela">
              <option value="sikkim">
              <option value="goa">
                <option value="jaipur">
            </datalist>
          </div>
          <div>
            <span  class="block">DAYS: </span>
          <input type="number" placeholder="Enter here" name="daysn" id="daysn">
          </div>
          <div>
            <span class="block">DATE: 
          <div>FROM: <input type="date" id="startd" name="startd">

          <div>TO: <input type="date" id="endd" name="endd">
            
            </span>
          </div>


          <div><input type="submit"  value="PROCEED TO REGISTER" name="submit"></div>

  </form>
</div>
</body>
</html>