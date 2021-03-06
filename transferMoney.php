<?php
$success = false;
$failure = false;
$Abort = false;
include 'connect.php';

if (isset($_POST['submit'])) {

    $userFrom = $_POST['userFrom'];
    $userTo = $_POST['userTo'];
    $tAmount = $_POST['tAmount'];

    $sql1 = "SELECT * FROM `customers` WHERE `id`=$userFrom";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    $sql2 = "SELECT * FROM `customers` WHERE `id`=$userTo";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    if ($tAmount > $row1['current_balance']) {
        $failure = true;
    } else if ($tAmount <= 0) {
        $Abort = true;
    } else {
        $updatedAmount1 = $row1['current_balance'] - $tAmount;
        $updatedAmount2 = $row2['current_balance'] + $tAmount;
        $sql = "UPDATE `customers` SET `current_balance`=$updatedAmount1 WHERE `id`=$userFrom";
        $result = mysqli_query($conn, $sql);

        $sql = "UPDATE `customers` SET `current_balance`=$updatedAmount2 WHERE `id`=$userTo";
        $result = mysqli_query($conn, $sql);

        $sender = $row1['email_id'];
        $receiver = $row2['email_id'];
        $query = "INSERT INTO transaction_details( `sender_id`, `receiver_id`, `Amount`) VALUES('$sender', '$receiver', '$tAmount')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $success = true;
        }
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Banking System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
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
       
           
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                      
            <h4 class="text-center text-success">
                <?php if ($success) echo 'Transaction Successful'; ?>
                <?php if ($failure) echo "Not enough Balance"; ?>
                <?php if ($Abort) echo "Amount should be greater than zero"; ?>
            </h4><br><br>
                        
                              <div class="panel panel-primary">
                     <div class="panel-heading"> Transfer Money</div>
                     <div class="panel-body">
            <form method="POST">
               
                 
                    <div class="form-group">
                 
                        <label for="userFrom" >Transfer From: </label>
                        <select class="form-select form-control" aria-label="Default select example" name="userFrom">
                            <option></option>
                            <?php
                            $query = 'SELECT * FROM `customers`';
                            $result = mysqli_query($conn, $query);
                            $num_rows = mysqli_num_rows($result);
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?php echo $rows['id'] ?>">
                                <?php echo $rows['first_name'] ?> 
                                <?php echo $rows['last_name'] ?> (Id -
                                <?php echo $rows['email_id'] ?>) (<?php echo $rows['current_balance'] ?>)</option>
                            <?php
                            }
                            ?>
                        </select>
                   
                    </div>
                    <div class="form-group">
                   
                        <label for="userTo">Transfer To   : </label>
                        <select class="form-select form-control" aria-label="Default select example" name="userTo">
                            <option></option>
                            <?php
                            $query = 'SELECT * FROM `customers`';
                            $result = mysqli_query($conn, $query);
                            $num_rows = mysqli_num_rows($result);
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?php echo $rows['id'] ?>"><?php echo $rows['first_name'] ?> 
                                <?php echo $rows['last_name'] ?> (Id -
                                <?php echo $rows['email_id'] ?>) (<?php echo $rows['current_balance'] ?>)</option>
                            <?php
                            }
                            ?>
                        </select>
                
                </div>
                <div class="form-group ">
                    <label for="amount" class="my-2">Amount To Transfer</label>
                    <input type="number" class="form-control" name="tAmount" placeholder="Enter Amount to tranfer">
                </div>
                <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary col-sm-12 mt-4">Transfer</button>
                </div>
                   
            
      
            </form> 
                     </div>
                              </div>
                      
    </div>
           </div>
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