<html>
<head>
<link rel="stylesheet" href="CSS/responsive.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="stat" name="stat" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder=" E.g 352" required>
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Place Order" class="btn" name="save">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <p>Total <span class="price" style="color:black"><b>$800</b></span></p>
    </div>
  </div>
</div>
</body>
</html>