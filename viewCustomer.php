<?php
include 'connect.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Banking System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="stylesheet.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="#">YONO</a>
                </div>
                <div class="header-link">
                    <a href="transaction_history.php">History</a>
                </div>
                <div class="header-link">
                    <a href="transferMoney.php">Transfer Money</a>
                </div>
                <div class="header-link">
                    <a href="viewCustomer.php">View all Customers</a>
                </div>
                <div class="header-link">
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>
        <div class="container text-center mt-5">
            <h1>All Customers</h1>
            <table id="myTable" class="table">
                <thead class="bg-light text-dark text-left hsize">
                    <th>S. No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                     <th>Email ID</th>
                    <th>Account Balance</th>
                </thead>
                <tbody class="text-left tsize">
                    <?php
                    $query = 'SELECT * FROM `customers`';
                    $result = mysqli_query($conn, $query);
                    $num_rows = mysqli_num_rows($result);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo '
            <tr><td>' . $rows['id'] . '</td>
            <td>' . $rows['first_name'] . '</td>
            <td>' . $rows['last_name'] . '</td>
            <td>' . $rows['email_id'] . '</td>
                <td>Rs. ' . $rows['current_balance'] . '</td>
            </tr>
            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <footer>
    <div class="container">
                <center>
                    <p>Copyright &copy YONO.All Rights Reserved &#8739 Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
    </body>
</html>
