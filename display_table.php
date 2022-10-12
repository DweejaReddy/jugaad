<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Welcome </title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </head>
   
   <body>

   <?php
        $servername = "localhost";
        $username = "ias2020";
        $password = "ecell123";
        $dbname = "jugaad2022";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT sno, team_name, leader_name, phone, email, size, mem1, mem2, mem3, mem4 FROM jugaad_data";
        $result = mysqli_query($conn, $sql);
        
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">sno</th>
                <th scope="col">Team Name</th>
                <th scope="col">Leader Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Size</th>
                <th scope="col">Member 1</th>
                <th scope="col">Member 2</th>
                <th scope="col">Member 3</th>
                <th scope="col">Member 4</th>
            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["sno"]; ?></td>
                <td><?php echo $row["team_name"]; ?></td>
                <td><?php echo $row["leader_name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["size"]; ?></td>
                <td><?php echo $row["mem1"]; ?></td>
                <td><?php echo $row["mem2"]; ?></td>
                <td><?php echo $row["mem3"]; ?></td>
                <td><?php echo $row["mem4"]; ?></td>

            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Sign Out</a></button>
   </body>
   
</html>