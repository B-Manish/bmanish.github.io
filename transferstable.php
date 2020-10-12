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
</body>

<?php

$conn =  mysqli_connect('localhost', 'root', '1234567', 'trytwo');

$query = "SELECT * FROM transactions";
$result = mysqli_query($conn, $query);
$numrow = mysqli_num_rows($result);

echo '<table border="2">';

echo '<tr>';
echo '<th>From Account</th>';
echo '<th>Amount</th>';
echo '<th>To Account</th>';
echo '<th>Date</th>';
echo '<th>Time</th>';
echo '</tr>';

echo '<table border="2">';

if ($numrow > 0) {


    while ($row = mysqli_fetch_assoc($result)) {

        //echo "<tr><td>" . $row["fromaccount"]. "</td><td>" . $row["amounttransferred"] . "</td><td>"
        //. $row["toaccount"]. "</td><td>". $row["dateoftrans"]. "</td><td>". $row["timeoftrans"]. "</td></tr>";


        echo '<table border="2">';

        echo '<tr>';
        echo '<td>' . $row['fromaccount'] . '</td>';
        echo '<td>' . $row['amounttransferred'] . '</td>';
        echo '<td>' . $row['toaccount'] . '</td>';
        echo '<td>' . $row['dateoftrans'] . '</td>';
        echo '<td>' . $row['timeoftrans'] . '</td>';
        echo '</tr>';

        echo '</table>';
    }
} else {
    echo " ";
}
mysqli_close($conn);


?>




<footer>
</footer>


</html>