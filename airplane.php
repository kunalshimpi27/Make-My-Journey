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
        $from = $_POST['from'];
        $to = $_POST['to'];
        $departure = $_POST['departure'];
        $class = $_POST['class'];
        $sql = "INSERT INTO `trip`.`aairplane` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `From`, `To`, `Departure`, `Class`, `Date_time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$from', '$to', '$departure', '$class', current_timestamp());";
        // echo $sql;
        // INSERT INTO `trip`.`airplane` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `From`, `To`, `Departure`, `Class`, `Date_time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$from', '$to', '$departure', '$class', current_timestamp());
    
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
    <script src="all.js"></script>
</head>
<body>
    <div class="container">
        <h1>Welcome to Airplane form</h3>
        <h4>Enter your details and submit this form to confirm your flight </h4>

        <?php
            if($insert == true){
                echo "<b><p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us</p></b>";
            }
        ?>
        
        <form action="" method="post">
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <input type="text" id="age" name="age" placeholder="Enter your Age">
            <input type="text" id="gender" name="gender" placeholder="Enter your gender">
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <input type="phone" id="phone" name="phone" placeholder="Enter your phone">
            <input type="text" id="from" name="from" placeholder="Enter your City">
            <input type="text" id="to" name="to" placeholder="Enter your Drop point">
            <input type="date" id="departure" name="departure" placeholder="Enter your Departure Date : 27/10/2022">
            <input type="text" id="class" name="class" placeholder="Class : Economic/Premium/Business">
            <button class="b1" name="cbutton">Submit</button> <br><br>
            <button class="b1"><a href="index.html" class="a10">Home</a></button> 
        </form>
        
    </div>
</body>
</html>
<!-- 
<div class="box">
<?php
    // if($insert == true)
    // {
    //     echo $_POST['name'];
    //     echo "<br>";
    //     echo $_POST['gender'];
    //     echo "<br>";
    //     echo $_POST['age'];
    //     echo "<br>";
    //     echo $_POST['email'];
    //     echo "<br>";
    //     echo $_POST['phone'];
    //     echo "<br>";
    //     echo $_POST['from'];
    //     echo "<br>";
    //     echo $_POST['to'];
    //     echo "<br>";
    //     echo $_POST['departure'];
    //     echo "<br>";
    //     echo $_POST['class'];
    // }


    // echo 'Name : ',$_POST['name'];
    //             echo "<br>";
    //             echo 'Gender : ',$_POST['gender'];
    //             echo "<br>";
    //             echo 'Age : ',$_POST['age'];
    //             echo "<br>";
    //             echo 'Email : ',$_POST['email'];
    //             echo "<br>";
    //             echo 'Phone no. : ',$_POST['phone'];
    //             echo "<br>";
    //             echo 'City : ',$_POST['from'];
    //             echo "<br>";
    //             echo 'Drop point : ',$_POST['to'];
    //             echo "<br>";
    //             echo 'Departure : ',$_POST['departure'];
    //             echo "<br>";
    //             echo 'Class : ',$_POST['class'];
?>
</div> -->
