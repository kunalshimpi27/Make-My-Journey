<?php
    $insert = false;
    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
    
        $con = mysqli_connect($server, $username, $password);
    
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        // echo "Success connecting to the db";
      
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $rooms = $_POST['rooms'];
        $sql = "INSERT INTO `trip`.`hhotel` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `city`, `Checkin`, `Checkout`, `rooms`, `Date_time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$city', '$checkin', '$checkout', '$rooms', current_timestamp());";
        // echo $sql;
        // INSERT INTO `trip`.`hotels` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `City`, `Checkin`, `Checkout`, `Rooms`, `Date_time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$city', '$checkin', '$checkout', '$rooms', current_timestamp());
    
        if($con->query($sql) == true){
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
    
        $con->close();
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="container">
        <h1>Welcome to Hotels form</h3>
        <h4>Enter your details and submit this form to confirm your Rooms </h4>

        <?php
            if($insert == true){
                echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us</p>";
                }
        ?>
        
        <form action="hotel.php" method="post">
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <input type="text" id="age" name="age" placeholder="Enter your Age">
            <input type="text" id="gender" name="gender" placeholder="Enter your gender">
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <input type="phone" id="phone" name="phone" placeholder="Enter your phone">
            <input type="text" id="city" name="city" placeholder="Enter your City">
            <input type="time" id="checkin" name="checkin" placeholder="Enter your checkin time 23:34">
            <input type="time" id="checkout" name="checkout" placeholder="Enter your checkout time: 12:12">
            <input type="number" id="rooms" name="rooms" placeholder="How many Rooms">
            <button class="b1">Submit</button> <br><br>
            <button class="b1"><a href="index.html" class="a10">Home</a></button> 
        </form>
    </div>
</body>
</html>