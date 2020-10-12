<?php
require "header.php";
?>


<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Batchu Manish</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>


        <a class="nav-link" href="transfer.php">Transfer <span class="sr-only">(current)</span></a>


        <li class="nav-item active">
          <a class="nav-link" href="transferstable.php">View Transactions <span class="sr-only">(current)</span></a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <style>
    .row {

      margin: 150px 50px 75px 400px;
      padding: 50px 30px 50px 80px;
      height: 270px;
      width: 50%;
      /*background-color: powderblue;*/


    }
    .h1{
      margin: 150px 50px 75px 400px;
      padding: 50px 30px 50px 80px;

    }

    .col-sm-8 {
      font-size: 16px;
      width: 270px;
      line-height: 250%;
    }


  </style>


  <h1>Customer Details</h1>


  <div class="row">



    <div class="col-sm-8">
      1.C Manish &nbsp &nbsp T Nagar &nbsp &nbsp manish@gmail.com &nbsp &nbsp<br>

      2.MS Dhoni &nbsp &nbsp Kamalpur &nbsp &nbsp dhoni@gmail.com &nbsp &nbsp<br>

      3.Virat &nbsp &nbsp Jodhpur &nbsp &nbsp virat@gmail.com &nbsp &nbsp<br>
 
      4.Williamson &nbsp &nbsp Auckland &nbsp &nbsp williamson@gmail.com &nbsp &nbsp
    </div>



    <div class="col-sm-4">

      <form action="one.php" method="post">
        <button onclick="location.href = 'one.php';" type="submit" name="1" id="1" class="btn btn-primary" method="post">View Details</button><br>
      </form>

      <form action="two.php" method="post">
        <button onclick="location.href = 'two.php';" type="submit" name="2" id="2" class="btn btn-primary" method="post">View Details</button><br>
      </form>

      <form action="three.php" method="post">
        <button onclick="location.href = 'three.php';" type="submit" name="2" id="2" class="btn btn-primary" method="post">View Details</button><br>
      </form>

      <form action="four.php" method="post">
        <button onclick="location.href = 'four.php';" type="submit" name="2" id="2" class="btn btn-primary" method="post">View Details</button><br>
      </form>
    </div>




  </div>



  





</body>





<footer>
</footer>


</html>