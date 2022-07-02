<!DOCTYPE html>

<html>
    <head>
        <title>Banking System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        
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
      
    <div class="content">
            
    <div class="banner-image">
       
    <div class="left">
        <div>
        <button class="show-modal_1">About Us</button>
        </div>
        <div>
            <button class="show-modal_2">
                <a href="signup.php">Sign Up</a>
            </button>
        </div>
    <!--   <div class="modal hidden">
        <button class="close-modal">&times;</button>
        <h1>I'm a modal window 😍</h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
        </p>
        </div>
        <div class="overlay hidden"></div>

    <script src="script.js"></script>-->
     </div>
                
                
             <div class="right">
             <div class="inner-banner-image">
                    <center>
                    <div class="banner-content">
                        <!--<h1> You Only Need One</h1>
                        <p> Send and receive money right from your phone</p> -->
                      <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                 <li data-target="#demo" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/yono1.jpg" alt="home loan" width="1100" height="500">
                    <div class="carousel-caption">
                        
                     <h1> You Only Need One</h1>
                        <p> Send and receive money right from your phone</p> 
                        
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/home2.jpg" alt="home loan" width="1100" height="500">
                    <div class="carousel-caption ">
                        
                        <h3>Apply for Home Loan</h3>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/gold2.jpg" alt="education loan" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Apply for Gold Loan</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/credit_card2.jpg" alt="credit card" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Apply for Credit Card</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/edu3.jpg" alt="gold loan" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Apply for Education Loan</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
             </div>
                         </div>
                      </center>
                   </div>
                </div>
          
    </div>
        </div>
  <div class="moda hidden">
      <button class="close-modal">&times;</button>
      <h1>We're here for you</h1>
      <p>
       We're in this together,and here to help 
       our customers and communities.As we all navigate through this unprecedented
       time, we remain committed to doing what's right for you and your family.Our
       advisors are here to help you with any financial questions you have around COVID-19.
       <br>
       <br> <b>Together, we'll get through this.</b>
      </p>
    </div>
    <div class="overlay hidden"></div>

    <script src="script.js"></script>
            <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy YONO.All Rights Reserved &#8739 Contact Us: +91 90000 00000</p>
                </center>
            </div>
        </footer>
        
    </body>
</html>
