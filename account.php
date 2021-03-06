<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="CSS/main1.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--FavICon-->
    <link rel="shortcut icon" type="image/png" href="images/account.png">
    <script defer src="script.js"></script>
</head>
<body>
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
            $alert="<script>alert('Account Created Sucessfully!!!');</script>";
            echo $alert;
        }
        else
        {
            echo "Error: " .sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>
    <div id="error"></div>
    <form id="form" onsubmit="return validate()" action="" method="post">
    <section class="account" id="top-banner">
        <div class="reviews">
            <div class="revw_card">
                <img src="images/profile.png" class="image" alt="">
                <h1>Create Account</h1>
                <label id="l1">Username</label>
                <input type="text" id="ph" placeholder="Enter Username" name="uname" required>
                <br><br>
                <label id="l2">Email</label>
                <input type="email" id="ph1" placeholder="Enter Email Address" name="eaddr" required>
                <br><br>
                <label id="l3">Password</label>
                <input type="password" id="ph2" placeholder="Enter Password" name="pass" required>
                <br><br>
                <label id="l4">Confirm Password</label>
                <input type="password"  id="ph3" placeholder="Enter Confirm Password" name="conpass" required>
                <br><br>
                <button type="submit" class="btn1" name="save">Sign up</button> 
                <h2>OR</h2>    
                <br>
                <div class="icon">
    
                <div id="fb"><i class="fa fa-facebook"></i></div>
                <div id="insta"><i class="fa fa-instagram"></i></div>
                <div id="twit"><i class="fa fa-twitter"></i></div>
            </div>
            </div>
    </section>
    </form> 
</body>
</html>