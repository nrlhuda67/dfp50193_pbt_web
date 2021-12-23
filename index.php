<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeover Hair Salon</title>
</head>

<body>
    <h1>Welcome To Makeover Hair Salon</h1>
    <!-- <h4>FOUR SEASONS PLACE, 145 JALAN AMPANG, 50450 KUALA LUMPUR, MALAYSIA</h4> -->
    <form action="result.php" method="post">
        <label>Name:</label>
        <input type="text" for="name" name="name" id="name"><br><br>
        <label>Email:</label>
        <input type="text" for="email" name="email" id="email"><br><br>
        <label>Number telephone:</label>
        <input type="text" for="notelefon" name="notelefon" id="notelefon"><br><br>
        <label> Haircut Services:</label>
        <select id="services" name="services">
            <option value=""></option>
            <option value="cleaning">Cleaning</option>
            <option value="hair">Hair Scarl Treatment</option>
            <option value="rebonding">Rebonding</option>
            <option value="fringe">Fringe</option>
        </select><br><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>