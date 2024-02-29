<?php 
    require_once("connection.php");
    $query = " SELECT * FROM `ttrip` ";
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
                        <th colspan="10"><h2>Trip Booking Records</h2></th>
                            <tr>
                                <td> Id </td>
                                <td> Name </td>
                                <td> Age </td>
                                <td> Gender </td>
                                <td> Email </td>
                                <td> Phone no. </td>
                                <td> desc </td>
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
                                        $desc = $row['desc'];
                                        $Date_time = $row['Date_time'];
                            ?>
                                    <tr>
                                        <td><?php echo $Id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $gender ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td><?php echo $desc ?></td>
                                        <td><?php echo $Date_time ?></td>

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