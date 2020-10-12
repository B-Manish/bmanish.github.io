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

  MS Dhoni dhoni@gmail.com 9874552856 Kamlpur d21 <br>
  Transfer from MS Dhoni to


  <form action="to.php" method="post">

  <input type="textbox" id="totextbox" name="totextbox" ><br>
   

  <button class="btn btn-primary" type="submit" id="toaf2" name="toaf2">Transfer To Account</button>
  </form>



</body>










<footer>
</footer>


</html>