<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="Furniture";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $uname=$_POST['uname'];
    $eaddr=$_POST['eaddr'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];

    
    
    $sql_query = "INSERT INTO useraccount(uname,eaddr,pass,conpass)
    VALUES('$uname','$eaddr','$pass','$conpass')";

    if(mysqli_query($conn, $sql_query))
    {
        echo "Account Created Succesfully!";
    }
    else
    {
        echo "Error: " .sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>