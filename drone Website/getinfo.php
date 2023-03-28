<html>
  <head>
  <style>
  img {
 width: 420px;
 height: 320px;
 border-radius: 10px;
 margin-left: 50px;
 margin-bottom: 5px;
border-color: black;
border-style: double;
  }
  h1{
    text-align: center;
    color: red;
  }
 </style>
  </head>
  <body bgcolor="lightgreen">
  <?php 
   include_once("Connection.php");
   $booking_id=$_POST["booking_id"];
   $location_id=$_POST["location_id"];
   $drone_shot_id=$_POST["drone_shot_id"];
   $created_time=$_POST["created_time"];
   
   $sql="insert into booking_details values($booking_id,'$location_id','$drone_shot_id','$created_time')";
   if(mysqli_query($link,$sql))
   {
    echo "<h1>Your Booking For Autonomous Aerial Videography Tourist deastination Has Been Booked Successfully!!! </h1>";
      echo'<table width="100%">
      <tr>
        <td><a href="drone.html"><img src="drone.jfif" /></a></td>
        <td><a href="hindu.html"><img src="hindu.jfif" /></a></td>
        <td><a href="ronald.html"><img src="ronald.jfif" /></a></td>
      </tr>
      <tr>
            <td><a href="aerial.html"><img src="aerial.jfif" /></a></td>
            <td><a href="usa.html"><img src="USA.jfif" /></a></td>
            <td><a href="newyork.html"><img src="new york.jfif" /></a></td>
          </tr>
      </table>';
      
    }
   else
   {
     echo'<script>alert("ERROR :could not able to execute $sql".mysqli_error($link)")</script>' ;
     
   }	
   
   
      
   
  
       

?>

  </body>
</html>