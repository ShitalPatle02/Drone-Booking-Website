
                <?php

  include("Connection.php");

  if(isset($_POST['Submit']))
  {
    $customer_id=$_POST['customer_id'];
    $customer_name=$_POST["customer_name"];
    $email=$_POST["email"];
    $phone_number=$_POST["phone_number"];
  
  }
$sql="update customer_details set customer_name='$customer_name', email='$email', phone_number='$phone_number' where  customer_id= $customer_id";
if(mysqli_query($link,$sql))
{
    if(mysqli_affected_rows($link)!=0)
     {
      echo"<br/>Your Details has been Updated Suceessfully!!!!";
      echo"<br/>Now , you are ready to book your Autonomous Aerial Videography Tourist Destination!!!";
     } 
      else
     {
          echo "<br/>Record not found!";   
     }
}
 
?>

