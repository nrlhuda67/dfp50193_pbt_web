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
    <form action="function.php" method="post">
        <label>First Name:</label>
        <input type="text" for="fname" name="fname" id="fname"><br><br>
        <label>Last Name:</label>
        <input type="text" for="lname" name="lname" id="lname"><br><br>
        <label>Age:</label>
        <input type="number" for="age" name="age" id="age"><br><br>
        <label>Gender:</label>
        <input type="radio" for="Jantina" name="jantina" value="female" id="female">
        <label>Female</label>
        <input type="radio" for="Jantina" name="jantina" value="male" id="male">
        <label>Male</label><br><br>
        <label>Address:</label>
        <textarea id="address" name="address" rows="4" cols="40"></textarea><br><br>
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