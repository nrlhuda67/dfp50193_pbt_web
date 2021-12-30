<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Makeover Hair Salon</title>
</head>

<body>
    <h1>Booking Details</h1>
    <hr><br>
    <div class="display">
        <?php
        if ($rad == 'KERATIN K-GLOSS TREATMENT RM 50') {
            $price = 50;
        ?>
            <h3>BOOKED SERVICE:</h3><?php echo $rad; ?> <br><br><br><br>
            <h3>ADD ON:</h3><?php echo $op1 ?> <br> <?php echo $op2 ?> <br> <?php echo $op3; ?> <br><br>
            TOTAL PRICE = RM <?php echo calculatetotal($cb1, $cb2, $cb3, $price);
                        } else if ($rad == 'HAIRCUT RM 45') {
                            $price = 45;
                            ?>
            <h3>BOOKED SERVICE:</h3><?php echo $rad; ?> <br><br><br><br>
            <h3>ADD ON:</h3><?php echo $op4 ?> <br> <?php echo $op5 ?> <br> <?php echo $op6; ?> <br><br>
            TOTAL PRICE = RM <?php echo calculatetotal($cb4, $cb5, $cb6, $price);
                        } else if ($rad == 'COLOR RM 150') {
                            $price = 150;
                            ?>
            <h3>BOOKED SERVICE:</h3><?php echo $rad; ?> <br><br><br><br>
            <h3>ADD ON:</h3><?php echo $op7 ?> <br> <?php echo $op8 ?> <br> <?php echo $op9; ?> <br><br>
            TOTAL PRICE = RM <?php echo calculatetotal($cb7, $cb8, $cb9, $price);
                        } else if ($rad == 'REBONDING & RELAXING RM 250') {
                            $price = 250;
                            ?>
            <h3>BOOKED SERVICE:</h3><?php echo $rad; ?> <br><br><br><br>
            <h3>ADD ON:</h3><?php echo $op10 ?> <br> <?php echo $op11 ?> <br> <?php echo $op12; ?> <br><br>
            TOTAL PRICE = RM <?php echo calculatetotal($cb10, $cb11, $cb12, $price);
                        } else {
                            ?>
            <script>
                alert('Please choose at least one services');
                window.location = 'index.php';
            </script>
        <?php
                        }
        ?>
        <br>
    </div>
    <a href="index.php" class="buttonback">BACK</a>
</body>

</html>