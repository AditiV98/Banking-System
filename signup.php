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
        <?php
        include 'connect.php';
        ?>
        
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
                    <a href="signup.php">SignUp</a>
                </div>
                <div class="header-link">
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>
         <div class="container">
             <div class="col-xs-6 col-xs-offset-3">
                 <div class="panel panel-primary">
                     <div class="panel-heading"> Sign Up</div>
                     <div class="panel-body">
                         <form method="post" action="formConnect.php">
                             <div class="form-group">
                                 <label for="first_name">First Name</label>
                                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                             </div>
                              <div class="form-group">
                                 <label for="last_name">Last Name</label>
                                 <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                             </div>
                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                             </div>
                             <div class="form-group">
                                 <label for="amount">Amount</label>
                                 <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                             </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                     </div>
                 </div>
             </div>
        <!--    <div class="row lmargin">
                <div class="col-md-12">
                    <h1> SIGN UP</h1>
                    <form name="frmContact" method="post" action="viewCustomer.php" autocomplete="on">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <!--<div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" pattern="[0-9]{10}" placeholder="Contact" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>-->
                    <!--    <div class="form-group">
                            <input type="number" class="form-control" name="account_balance" id="account_balance" placeholder="Account Balance" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button> 
                    </form>
                </div>
            </div>-->
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