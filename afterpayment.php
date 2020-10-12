<?php

session_start();

$conn =  mysqli_connect('localhost', 'root', '1234567', 'trytwo');


if (isset($_POST['t'])) {

    date_default_timezone_set('Asia/Kolkata');
    $presentdate = date("d/m/Y");
    $presenttime = date("H:i:s");

    if ($_SESSION['from'] == "m1" && $_SESSION['to'] == "d2") {

        $fromaccount = "m1";
        $toaccount = "d2";
        $amount = $_POST['amt'];

        $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
        $manish2 = mysqli_query($conn, $query2);

        //to subtract from senders account
        $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
        $manish6 = mysqli_query($conn, $query6);

        while ($row2 = mysqli_fetch_array($manish6)) {
            //echo $row2['Balance'];
            $int2 = (int)$row2['Balance'];
            //echo "$int2";
            if ($int2 > $amount) {
                $int2 = $int2 - $amount;
                //echo $int2;
            } else {
                header("Location: to.php?error=balancebecomeneg");
                exit();
            }
            $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
            $manish7 = mysqli_query($conn, $query7);
        }



        //to add to recievers account
        $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
        $manish4 = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($manish4)) {
            //echo $row['Balance'];
            $int = (int)$row['Balance'];
            //echo "$int";
            $int = $amount + $int;
            //echo $int;
            if ($int < $amount) {
                $int = $int + 0;
            }
            $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
            $manish5 = mysqli_query($conn, $query5);
        }

        //overallbalance
        while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
            if ($amount > $int) {
                $int = $int;
                $int2 = $int2;
                $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
                $manish8 = mysqli_query($conn, $query8);
                $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
                $manish9 = mysqli_query($conn, $query9);
            }
        }


        while ($row2 = mysqli_fetch_array($manish2)) {
            //if entered amount is greater than bank balance        
            if ($amount > $row2['Balance']) {
                echo "egg";
            } else {
                echo " ";
            }
        }
    }



    elseif ($_SESSION['from'] == "m1" && $_SESSION['to'] == "v3") {

        $fromaccount = "m1";
        $toaccount = "v3";
        $amount = $_POST['amt'];

        $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
        $manish2 = mysqli_query($conn, $query2);

        //to subtract from senders account
        $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
        $manish6 = mysqli_query($conn, $query6);

        while ($row2 = mysqli_fetch_array($manish6)) {
            //echo $row2['Balance'];
            $int2 = (int)$row2['Balance'];
            //echo "$int2";
            if ($int2 > $amount) {
                $int2 = $int2 - $amount;
                //echo $int2;
            } else {
                header("Location: to.php?error=balancebecomeneg");
                exit();
            }
            $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
            $manish7 = mysqli_query($conn, $query7);
        }



        //to add to recievers account
        $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
        $manish4 = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($manish4)) {
            //echo $row['Balance'];
            $int = (int)$row['Balance'];
            //echo "$int";
            $int = $amount + $int;
            //echo $int;
            if ($int < $amount) {
                $int = $int + 0;
            }
            $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
            $manish5 = mysqli_query($conn, $query5);
        }

        //overallbalance
        while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
            if ($amount > $int) {
                $int = $int;
                $int2 = $int2;
                $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
                $manish8 = mysqli_query($conn, $query8);
                $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
                $manish9 = mysqli_query($conn, $query9);
            }
        }


        while ($row2 = mysqli_fetch_array($manish2)) {
            //if entered amount is greater than bank balance        
            if ($amount > $row2['Balance']) {
                echo "egg";
            } else {
                echo " ";
            }
        }
    }





    elseif ($_SESSION['from'] == "m1" && $_SESSION['to'] == "w4") {

        $fromaccount = "m1";
        $toaccount = "w4";
        $amount = $_POST['amt'];

        $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
        $manish2 = mysqli_query($conn, $query2);

        //to subtract from senders account
        $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
        $manish6 = mysqli_query($conn, $query6);

        while ($row2 = mysqli_fetch_array($manish6)) {
            //echo $row2['Balance'];
            $int2 = (int)$row2['Balance'];
            //echo "$int2";
            if ($int2 > $amount) {
                $int2 = $int2 - $amount;
                //echo $int2;
            } else {
                header("Location: to.php?error=balancebecomeneg");
                exit();
            }
            $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
            $manish7 = mysqli_query($conn, $query7);
        }



        //to add to recievers account
        $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
        $manish4 = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($manish4)) {
            //echo $row['Balance'];
            $int = (int)$row['Balance'];
            //echo "$int";
            $int = $amount + $int;
            //echo $int;
            if ($int < $amount) {
                $int = $int + 0;
            }
            $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
            $manish5 = mysqli_query($conn, $query5);
        }

        //overallbalance
        while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
            if ($amount > $int) {
                $int = $int;
                $int2 = $int2;
                $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
                $manish8 = mysqli_query($conn, $query8);
                $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
                $manish9 = mysqli_query($conn, $query9);
            }
        }


        while ($row2 = mysqli_fetch_array($manish2)) {
            //if entered amount is greater than bank balance        
            if ($amount > $row2['Balance']) {
                echo "egg";
            } else {
                echo " ";
            }
        }
    }





 /////////////////////////////////////////////////////////////////////////////////





    elseif ($_SESSION['from'] == "d2" && $_SESSION['to'] == "m1") {

        $fromaccount = "d2";
        $toaccount = "m1";
        $amount = $_POST['amt'];

        $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
        $manish2 = mysqli_query($conn, $query2);

        //to subtract from senders account
        $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
        $manish6 = mysqli_query($conn, $query6);

        while ($row2 = mysqli_fetch_array($manish6)) {
            //echo $row2['Balance'];
            $int2 = (int)$row2['Balance'];
            //echo "$int2";
            if ($int2 > $amount) {
                $int2 = $int2 - $amount;
                //echo $int2;
            } else {
                header("Location: to.php?error=balancebecomeneg");
                exit();
            }
            $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
            $manish7 = mysqli_query($conn, $query7);
        }



        //to add to recievers account
        $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
        $manish4 = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($manish4)) {
            //echo $row['Balance'];
            $int = (int)$row['Balance'];
            //echo "$int";
            $int = $amount + $int;
            //echo $int;
            if ($int < $amount) {
                $int = $int + 0;
            }
            $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
            $manish5 = mysqli_query($conn, $query5);
        }

        //overallbalance
        while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
            if ($amount > $int) {
                $int = $int;
                $int2 = $int2;
                $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
                $manish8 = mysqli_query($conn, $query8);
                $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
                $manish9 = mysqli_query($conn, $query9);
            }
        }


        while ($row2 = mysqli_fetch_array($manish2)) {
            //if entered amount is greater than bank balance        
            if ($amount > $row2['Balance']) {
                echo "egg";
            } else {
                echo " ";
            }
        }
    }



    elseif ($_SESSION['from'] == "d2" && $_SESSION['to'] == "v3") {

        $fromaccount = "d2";
        $toaccount = "v3";
        $amount = $_POST['amt'];

        $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
        $manish2 = mysqli_query($conn, $query2);

        //to subtract from senders account
        $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
        $manish6 = mysqli_query($conn, $query6);

        while ($row2 = mysqli_fetch_array($manish6)) {
            //echo $row2['Balance'];
            $int2 = (int)$row2['Balance'];
            //echo "$int2";
            if ($int2 > $amount) {
                $int2 = $int2 - $amount;
                //echo $int2;
            } else {
                header("Location: to.php?error=balancebecomeneg");
                exit();
            }
            $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
            $manish7 = mysqli_query($conn, $query7);
        }



        //to add to recievers account
        $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
        $manish4 = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($manish4)) {
            //echo $row['Balance'];
            $int = (int)$row['Balance'];
            //echo "$int";
            $int = $amount + $int;
            //echo $int;
            if ($int < $amount) {
                $int = $int + 0;
            }
            $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
            $manish5 = mysqli_query($conn, $query5);
        }

        //overallbalance
        while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
            if ($amount > $int) {
                $int = $int;
                $int2 = $int2;
                $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
                $manish8 = mysqli_query($conn, $query8);
                $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
                $manish9 = mysqli_query($conn, $query9);
            }
        }


        while ($row2 = mysqli_fetch_array($manish2)) {
            //if entered amount is greater than bank balance        
            if ($amount > $row2['Balance']) {
                echo "egg";
            } else {
                echo " ";
            }
        }
    }





    elseif ($_SESSION['from'] == "d2" && $_SESSION['to'] == "w4") {

        $fromaccount = "d2";
        $toaccount = "w4";
        $amount = $_POST['amt'];

        $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
        $manish2 = mysqli_query($conn, $query2);

        //to subtract from senders account
        $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
        $manish6 = mysqli_query($conn, $query6);

        while ($row2 = mysqli_fetch_array($manish6)) {
            //echo $row2['Balance'];
            $int2 = (int)$row2['Balance'];
            //echo "$int2";
            if ($int2 > $amount) {
                $int2 = $int2 - $amount;
                //echo $int2;
            } else {
                header("Location: to.php?error=balancebecomeneg");
                exit();
            }
            $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
            $manish7 = mysqli_query($conn, $query7);
        }



        //to add to recievers account
        $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
        $manish4 = mysqli_query($conn, $query4);
        while ($row = mysqli_fetch_array($manish4)) {
            //echo $row['Balance'];
            $int = (int)$row['Balance'];
            //echo "$int";
            $int = $amount + $int;
            //echo $int;
            if ($int < $amount) {
                $int = $int + 0;
            }
            $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
            $manish5 = mysqli_query($conn, $query5);
        }

        //overallbalance
        while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
            if ($amount > $int) {
                $int = $int;
                $int2 = $int2;
                $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
                $manish8 = mysqli_query($conn, $query8);
                $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
                $manish9 = mysqli_query($conn, $query9);
            }
        }


        while ($row2 = mysqli_fetch_array($manish2)) {
            //if entered amount is greater than bank balance        
            if ($amount > $row2['Balance']) {
                echo "egg";
            } else {
                echo " ";
            }
        }
    }

 ////////////////////////////////////////////////////////////////////////////////////




 elseif ($_SESSION['from'] == "v3" && $_SESSION['to'] == "m1") {

    $fromaccount = "v3";
    $toaccount = "m1";
    $amount = $_POST['amt'];

    $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
    $manish2 = mysqli_query($conn, $query2);

    //to subtract from senders account
    $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
    $manish6 = mysqli_query($conn, $query6);

    while ($row2 = mysqli_fetch_array($manish6)) {
        //echo $row2['Balance'];
        $int2 = (int)$row2['Balance'];
        //echo "$int2";
        if ($int2 > $amount) {
            $int2 = $int2 - $amount;
            //echo $int2;
        } else {
            header("Location: to.php?error=balancebecomeneg");
            exit();
        }
        $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
        $manish7 = mysqli_query($conn, $query7);
    }



    //to add to recievers account
    $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
    $manish4 = mysqli_query($conn, $query4);
    while ($row = mysqli_fetch_array($manish4)) {
        //echo $row['Balance'];
        $int = (int)$row['Balance'];
        //echo "$int";
        $int = $amount + $int;
        //echo $int;
        if ($int < $amount) {
            $int = $int + 0;
        }
        $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
        $manish5 = mysqli_query($conn, $query5);
    }

    //overallbalance
    while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
        if ($amount > $int) {
            $int = $int;
            $int2 = $int2;
            $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
            $manish8 = mysqli_query($conn, $query8);
            $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
            $manish9 = mysqli_query($conn, $query9);
        }
    }


    while ($row2 = mysqli_fetch_array($manish2)) {
        //if entered amount is greater than bank balance        
        if ($amount > $row2['Balance']) {
            echo "egg";
        } else {
            echo " ";
        }
    }
}



elseif ($_SESSION['from'] == "v3" && $_SESSION['to'] == "d2") {

    $fromaccount = "d2";
    $toaccount = "v3";
    $amount = $_POST['amt'];

    $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
    $manish2 = mysqli_query($conn, $query2);

    //to subtract from senders account
    $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
    $manish6 = mysqli_query($conn, $query6);

    while ($row2 = mysqli_fetch_array($manish6)) {
        //echo $row2['Balance'];
        $int2 = (int)$row2['Balance'];
        //echo "$int2";
        if ($int2 > $amount) {
            $int2 = $int2 - $amount;
            //echo $int2;
        } else {
            header("Location: to.php?error=balancebecomeneg");
            exit();
        }
        $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
        $manish7 = mysqli_query($conn, $query7);
    }



    //to add to recievers account
    $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
    $manish4 = mysqli_query($conn, $query4);
    while ($row = mysqli_fetch_array($manish4)) {
        //echo $row['Balance'];
        $int = (int)$row['Balance'];
        //echo "$int";
        $int = $amount + $int;
        //echo $int;
        if ($int < $amount) {
            $int = $int + 0;
        }
        $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
        $manish5 = mysqli_query($conn, $query5);
    }

    //overallbalance
    while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
        if ($amount > $int) {
            $int = $int;
            $int2 = $int2;
            $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
            $manish8 = mysqli_query($conn, $query8);
            $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
            $manish9 = mysqli_query($conn, $query9);
        }
    }


    while ($row2 = mysqli_fetch_array($manish2)) {
        //if entered amount is greater than bank balance        
        if ($amount > $row2['Balance']) {
            echo "egg";
        } else {
            echo " ";
        }
    }
}





elseif ($_SESSION['from'] == "v3" && $_SESSION['to'] == "w4") {

    $fromaccount = "d2";
    $toaccount = "w4";
    $amount = $_POST['amt'];

    $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
    $manish2 = mysqli_query($conn, $query2);

    //to subtract from senders account
    $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
    $manish6 = mysqli_query($conn, $query6);

    while ($row2 = mysqli_fetch_array($manish6)) {
        //echo $row2['Balance'];
        $int2 = (int)$row2['Balance'];
        //echo "$int2";
        if ($int2 > $amount) {
            $int2 = $int2 - $amount;
            //echo $int2;
        } else {
            header("Location: to.php?error=balancebecomeneg");
            exit();
        }
        $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
        $manish7 = mysqli_query($conn, $query7);
    }



    //to add to recievers account
    $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
    $manish4 = mysqli_query($conn, $query4);
    while ($row = mysqli_fetch_array($manish4)) {
        //echo $row['Balance'];
        $int = (int)$row['Balance'];
        //echo "$int";
        $int = $amount + $int;
        //echo $int;
        if ($int < $amount) {
            $int = $int + 0;
        }
        $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
        $manish5 = mysqli_query($conn, $query5);
    }

    //overallbalance
    while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
        if ($amount > $int) {
            $int = $int;
            $int2 = $int2;
            $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
            $manish8 = mysqli_query($conn, $query8);
            $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
            $manish9 = mysqli_query($conn, $query9);
        }
    }


    while ($row2 = mysqli_fetch_array($manish2)) {
        //if entered amount is greater than bank balance        
        if ($amount > $row2['Balance']) {
            echo "egg";
        } else {
            echo " ";
        }
    }
}

//////////////////////////////////////////////////////




elseif ($_SESSION['from'] == "w4" && $_SESSION['to'] == "m1") {

    $fromaccount = "w4";
    $toaccount = "m1";
    $amount = $_POST['amt'];

    $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
    $manish2 = mysqli_query($conn, $query2);

    //to subtract from senders account
    $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
    $manish6 = mysqli_query($conn, $query6);

    while ($row2 = mysqli_fetch_array($manish6)) {
        //echo $row2['Balance'];
        $int2 = (int)$row2['Balance'];
        //echo "$int2";
        if ($int2 > $amount) {
            $int2 = $int2 - $amount;
            //echo $int2;
        } else {
            header("Location: to.php?error=balancebecomeneg");
            exit();
        }
        $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
        $manish7 = mysqli_query($conn, $query7);
    }



    //to add to recievers account
    $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
    $manish4 = mysqli_query($conn, $query4);
    while ($row = mysqli_fetch_array($manish4)) {
        //echo $row['Balance'];
        $int = (int)$row['Balance'];
        //echo "$int";
        $int = $amount + $int;
        //echo $int;
        if ($int < $amount) {
            $int = $int + 0;
        }
        $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
        $manish5 = mysqli_query($conn, $query5);
    }

    //overallbalance
    while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
        if ($amount > $int) {
            $int = $int;
            $int2 = $int2;
            $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
            $manish8 = mysqli_query($conn, $query8);
            $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
            $manish9 = mysqli_query($conn, $query9);
        }
    }


    while ($row2 = mysqli_fetch_array($manish2)) {
        //if entered amount is greater than bank balance        
        if ($amount > $row2['Balance']) {
            echo "egg";
        } else {
            echo " ";
        }
    }
}



elseif ($_SESSION['from'] == "w4" && $_SESSION['to'] == "d2") {

    $fromaccount = "w4";
    $toaccount = "v3";
    $amount = $_POST['amt'];

    $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
    $manish2 = mysqli_query($conn, $query2);

    //to subtract from senders account
    $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
    $manish6 = mysqli_query($conn, $query6);

    while ($row2 = mysqli_fetch_array($manish6)) {
        //echo $row2['Balance'];
        $int2 = (int)$row2['Balance'];
        //echo "$int2";
        if ($int2 > $amount) {
            $int2 = $int2 - $amount;
            //echo $int2;
        } else {
            header("Location: to.php?error=balancebecomeneg");
            exit();
        }
        $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
        $manish7 = mysqli_query($conn, $query7);
    }



    //to add to recievers account
    $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
    $manish4 = mysqli_query($conn, $query4);
    while ($row = mysqli_fetch_array($manish4)) {
        //echo $row['Balance'];
        $int = (int)$row['Balance'];
        //echo "$int";
        $int = $amount + $int;
        //echo $int;
        if ($int < $amount) {
            $int = $int + 0;
        }
        $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
        $manish5 = mysqli_query($conn, $query5);
    }

    //overallbalance
    while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
        if ($amount > $int) {
            $int = $int;
            $int2 = $int2;
            $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
            $manish8 = mysqli_query($conn, $query8);
            $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
            $manish9 = mysqli_query($conn, $query9);
        }
    }


    while ($row2 = mysqli_fetch_array($manish2)) {
        //if entered amount is greater than bank balance        
        if ($amount > $row2['Balance']) {
            echo "egg";
        } else {
            echo " ";
        }
    }
}





elseif ($_SESSION['from'] == "w4" && $_SESSION['to'] == "v3") {

    $fromaccount = "w4";
    $toaccount = "v3";
    $amount = $_POST['amt'];

    $query2 = "SELECT Balance FROM accounttable where AccountNumber='$fromaccount'";
    $manish2 = mysqli_query($conn, $query2);

    //to subtract from senders account
    $query6 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$fromaccount'";
    $manish6 = mysqli_query($conn, $query6);

    while ($row2 = mysqli_fetch_array($manish6)) {
        //echo $row2['Balance'];
        $int2 = (int)$row2['Balance'];
        //echo "$int2";
        if ($int2 > $amount) {
            $int2 = $int2 - $amount;
            //echo $int2;
        } else {
            header("Location: to.php?error=balancebecomeneg");
            exit();
        }
        $query7 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$fromaccount'";
        $manish7 = mysqli_query($conn, $query7);
    }



    //to add to recievers account
    $query4 = "SELECT Balance  FROM accounttable WHERE AccountNumber='$toaccount'";
    $manish4 = mysqli_query($conn, $query4);
    while ($row = mysqli_fetch_array($manish4)) {
        //echo $row['Balance'];
        $int = (int)$row['Balance'];
        //echo "$int";
        $int = $amount + $int;
        //echo $int;
        if ($int < $amount) {
            $int = $int + 0;
        }
        $query5 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$toaccount'";
        $manish5 = mysqli_query($conn, $query5);
    }

    //overallbalance
    while ($row2 = mysqli_fetch_array($manish6) || $row = mysqli_fetch_array($manish4)) {
        if ($amount > $int) {
            $int = $int;
            $int2 = $int2;
            $query8 = "UPDATE accounttable SET Balance=$int WHERE AccountNumber='$accnumber'";
            $manish8 = mysqli_query($conn, $query8);
            $query9 = "UPDATE accounttable SET Balance=$int2 WHERE AccountNumber='$accnumber2'";
            $manish9 = mysqli_query($conn, $query9);
        }
    }


    while ($row2 = mysqli_fetch_array($manish2)) {
        //if entered amount is greater than bank balance        
        if ($amount > $row2['Balance']) {
            echo "egg";
        } else {
            echo " ";
        }
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
while(1==1){
    $query55 = "INSERT INTO transactions (fromaccount,amounttransferred,toaccount,dateoftrans,timeoftrans) VALUES ('$fromaccount','$amount','$toaccount','$presentdate','$presenttime')";
    $manish55 = mysqli_query($conn, $query55);
    //echo "$manish55";
    //header("Location: transfer.php?error=noerror");
    exit();
    }


 //endendendendendendendendendendendend
}
