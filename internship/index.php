<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Banking System 🏦</title>
    <style type="text/css">
        body{
            background: #512E5F ;
            border:1px solid;
        }
        button{
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 2px;
            border-radius: 8px;
            background-image: linear-gradient(315deg, pink 0%, #EB984E);
        }
        h1 {
        font-family: sans-serif;
        background:salmon;
         }
    </style>
</head>
<body>
    <?php
  include 'navbar.php';
  ?>
  <br>
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro ">
            <div >
                <div >
                   <center><b><h1 style="background: #EB984E;">NATIONAL BANK</h1></b></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <br>
        <br>
        <br>
        <div class="row activity text-center">
            <div class="col-md act">
                <br><br>
                <a href="users.php"><button style="width: 75% ; height: 70%"><img src="img/user2.jpg" class="img-fluid" style="width: 60%; height: 70%"><br><b>Users</b></button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <a href="transfermoney.php"><button><img src="img/trans.png" class="img-fluid" style="width: 75%; height: 70%"><br><b>Transfer Money</b></button></a>
            </div>
            <div class="col-md act">        
                <br><br>
                <a href="transactionhistory.php"><button ><img src="img/hist1.png" class="img-fluid" style="width:75%; height: 70%;"><br><b>Transfer History</b></button></a>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <br>
    <br>     
    <footer class="text-center mt-5 py-2">
        <p>Created by <b>AMOGH B S</b> &copy 2021.</p>
        <p><b>SPARK FOUNDATION</b></p>
        <br>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>