<?php 
    require_once("connection.php");
    $query = " SELECT * FROM `hhotel` ";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View All Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered" align="center" border="1px" style="width:1500px; line-height:20px;">
                        <th colspan="13"><h2>Hotel Booking Records</h2></th>
                            <tr>
                                <td> Id </td>
                                <td> Name </td>
                                <td> Age </td>
                                <td> Gender </td>
                                <td> Email </td>
                                <td> Phone no. </td>
                                <td> City </td>
                                <td> Check in time </td>
                                <td> Check out time </td>
                                <td> Rooms </td>
                                <td> Booking Time </td>
                                <td> Edit </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Id = $row['Id'];
                                        $name = $row['name'];
                                        $gender = $row['gender'];
                                        $age = $row['age'];
                                        $email = $row['email'];
                                        $phone = $row['phone'];
                                        $city = $row['city'];
                                        $checkin = $row['checkin'];
                                        $checkout = $row['checkout'];
                                        $rooms = $row['rooms'];
                                        $date_time = $row['date_time'];
                            ?>
                                    <tr>
                                        <td><?php echo $Id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $gender ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td><?php echo $city ?></td>
                                        <td><?php echo $checkin ?></td>
                                        <td><?php echo $checkout ?></td>
                                        <td><?php echo $rooms ?></td>
                                        <td><?php echo $date_time ?></td>

                                        <td><a href="#" class="btn btn-pencil">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>