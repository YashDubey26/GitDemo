<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $stat=$_POST['stat'];
    $zip=$_POST['zip'];
    $cardname=$_POST['cardname'];
    $cardnumber=$_POST['cardnumber'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];

    $sql_query="INSERT INTO entry_details (firstname,email,address,city,stat,zip,cardname,cardnumber,expmonth,expyear,cvv)
    VALUES('$firstname','$email','$address','$city','$stat','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";

    if(mysqli_query($conn, $sql_query))
    {
        $alert="<script>alert('Order Placed Succesfully!!!');</script>";
        echo $alert;
    }
    else
    {
        echo "Error:" .$sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>