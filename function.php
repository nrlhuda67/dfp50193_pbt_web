<?php
$rad = $_POST['rad'];
if (isset($_POST['cb1'])) {
    $cb1 = $_POST['cb1'];
    $op1 = 'S - RM 400';
} else {
    $cb1 = 0;
    $op1 = '';
}

if (isset($_POST['cb2'])) {
    $cb2 = $_POST['cb2'];
    $op2 = 'L - RM 800';
} else {
    $cb2 = 0;
    $op2 = '';
}

if (isset($_POST['cb3'])) {
    $cb3 = $_POST['cb3'];
    $op3 = 'Extra Long - RM 1000';
} else {
    $cb3 = 0;
    $op3 = '';
}
if (isset($_POST['cb4'])) {
    $cb4 = $_POST['cb4'];
    $op4 = 'Director - RM 200';
} else {
    $cb4 = 0;
    $op4 = '';
}
if (isset($_POST['cb5'])) {
    $cb5 = $_POST['cb5'];
    $op5 = 'Professional - RM 100';
} else {
    $cb5 = 0;
    $op5 = '';
}
if (isset($_POST['cb6'])) {
    $cb6 = $_POST['cb6'];
    $op6 = 'Stylist - RM 70';
} else {
    $cb6 = 0;
    $op6 = '';
}
if (isset($_POST['cb7'])) {
    $cb7 = $_POST['cb7'];
    $op7 = 'Director - RM 190';
} else {
    $cb7 = 0;
    $op7 = '';
}
if (isset($_POST['cb8'])) {
    $cb8 = $_POST['cb8'];
    $op8 = 'Professional - RM 170';
} else {
    $cb8 = 0;
    $op8 = '';
}
if (isset($_POST['cb9'])) {
    $cb9 = $_POST['cb9'];
    $op9 = 'Stylist - RM 120';
} else {
    $cb9 = 0;
    $op9 = '';
}
if (isset($_POST['cb10'])) {
    $cb10 = $_POST['cb10'];
    $op10 = 'Director - RM 270';
} else {
    $cb10 = 0;
    $op10 = '';
}
if (isset($_POST['cb11'])) {
    $cb11 = $_POST['cb11'];
    $op11 = 'Professional - RM 230';
} else {
    $cb11 = 0;
    $op11 = '';
}
if (isset($_POST['cb12'])) {
    $cb12 = $_POST['cb12'];
    $op12 = 'Stylist - RM 190';
} else {
    $cb12 = 0;
    $op12 = '';
}

function calculatetotal($cb1, $cb2, $cb3, $price)
{
    $total = $price + $cb1 + $cb2 + $cb3;
    return $total;
}