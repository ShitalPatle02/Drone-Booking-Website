<html>
 <head>
  <style>
 .fgh{
  font-size: 25px;
        border-radius: 15px;
        width: auto;
        margin-bottom: 10px;
 }
 table
      {
        background-image: linear-gradient(to right,rgb(236, 25, 208),rgb(24, 210, 24),rgb(60, 31, 225));
        border: solid 5px;
        width: 50%;
        height: 70%;
        border-radius: 20px;
        margin-top: 30px;
      }
      th{
        
        color: aliceblue;
        font-size: 30px;
        background-size: cover;
        background-attachment: fixed;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 10px;
      }
      body{
        background: url(Drony.png);
     margin: 0;
     padding: 0;
     background-position: center;
     background-size: cover;
      }
     input{
        font-size: 25px;
        border-radius: 15px;
        width: auto;
    
      }
      .fg{
      color: red;
      background-color: yellowgreen;
      font-size: 40px;
      font-family: Arial, Helvetica, sans-serif;
      }
    </style>
 </head>   
<body bgcolor="pink">
<?php 
        include_once("Connection.php");
$customer_id=$_POST["customer_id"];
$customer_name=$_POST["customer_name"];
$email=$_POST["email"];
$phone_number=$_POST["phone_number"];

$sql="insert into customer_details values($customer_id,'$customer_name','$email',$phone_number)";
if(mysqli_query($link,$sql))
{
	echo'<script>alert("You has been logged Successfully!! ")</script>' ;
}
else
{
  echo'<script>alert("ERROR :could not able to execute $sql".mysqli_error($link)")</script>' ;
	
}	

mysqli_close($link);
?>
<form method="post" action='getinfo.php' name="f1">
   
                <table width="30%" align="center">
                <tr>
                     <th colspan="2" class="fg" align="center">BOOK YOUR PLACE WITH DROAME</th>
                    
                  </tr>
                <tr>
                <th>Booking Id</th>
                <td><input type="text" name="booking_id"/></td>
                </tr>
                <tr>
                <th>Location Id</th>
                <td><select name="location_id[]" class="fgh">
                <option >Scary Drone</option> 
                  <option >Hindu Business Line</option>
                  <option >Cargo Drone</option>
                  <option >Aerial Drone</option>
                  <option >UAS Drone</option>
                  <option > New York Drone</option>
                
                </select></td>
                </tr>
                <tr>
                <th>Drone Shot Id</th>
                <td><input type="text" name="drone_shot_id"/></td>
                </tr>
                <tr>
                <th>Created Time</th>
                <td><input type="date" name="created_time"/></td>
                </tr>
                <tr>
                <td colspan="2" align="center">
                  <input type="Submit" name="Submit" value="Submit"/>
                 
                </td>
                </tr>
                </table>
                </form>
    

               
</html>
   
       