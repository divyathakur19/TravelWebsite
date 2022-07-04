<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>


    <style>
    *{color:#8568f9;
        padding:9px;
margin:0;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    box-sizing: border-box;}
    body{
        display:flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #0c0f2696;

    }
    .list{
        padding:30px;
        position:relative;
        background:#3f3d3d;
                border-top:50px solid #041c3847;
    }
    #btn{
        background:#8568f9;
        
    }
    

   
   
    </style>
</head>
<body>
    <div class="list" style="width:462px">


    <h1>Login to view your bookings...</h1>
    <div class = "frm">  
        
        <form name="f1" action = "loginform.php" onsubmit = "return validation()" method = "POST">  
           
            <p>  
                <label> NAME: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> MOBILE: </label>  
                <input type = "number" id ="pass" name  = "pass" />  
            </p>  
        <p>
            <label for="type">CHOOSE YOUR OPTION</label>
            <select id="type" name="type" >
            <option value="select_package">SELECT_PACKAGE</option>
            <option value="create_package">CREATE_PACKAGE</option>
        </select>
       </p>
             
                 
            <button id="btn">    <input type ="submit" value = "Login" />  </button>
           

            <div>strictly enter name and number with which you have registered.</div>  
        </form>  
    </div>  
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
           
    
    
    
    </div>

 
    
  
</body>
</html>