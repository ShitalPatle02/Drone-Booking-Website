<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .fg{
      color: red;
      background-color: yellowgreen;
      font-size: 40px;
      font-family: Arial, Helvetica, sans-serif;
      }
      table
      {
        background-image: linear-gradient(to right,rgb(236, 25, 208),rgb(24, 210, 24),rgb(60, 31, 225));
        border: solid 5px;
        width: 50%;
        height: 100%;
        border-radius: 20px;
        margin-top: 200px;
      }
      button
      {
        border-radius:20px ;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 20px;
      margin-left: 300px;
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
        margin-bottom: 10px;
      }
    </style>
</head>
<body>
    <form  name="f1" >
        
                <table width="30%" align="center">
                  <tr>
                     <th colspan="2" class="fg" align="center">Delete Your Details</th>
                    
                  </tr>
                   
                <tr>
                <th>Booking Id</th>
                <td><input style="margin-top: 20px;" type="text" name="booking_id"/></td>
                </tr>
                <tr>
                   
                <td align="center">
                  <input type="Submit" name="Submit" value="Submit"/>
                
               </td>
                <td colspan="2"><a href="Customer_Details.html"><button>Re-book Destination</button></a></td>
                </tr>

                </table>
                <br/>
                
            </form>
        <?php
       
     
             
        if(isset($_POST['submit']))
        {
            
         include ("connection.php");
         $customer_id=$_REQUEST['booking_id'];
         $sql="DELETE FROM booking_details ";
         if($res=mysqli_query($link,$sql))
         {
             if(mysqli_affected_rows($link)==0)
             echo "Customer Id $booking_id Not Found!!";
             else
             echo "Your Deatails Has Been Deleted Successfully !!..";
         }
        
         mysqli_close($link);
          
        }

        ?>
        <br/>
        <br/>
        
    </body>
</html>