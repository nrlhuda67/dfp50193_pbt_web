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
    <h1>Makeover Hair Salon</h1>
    <fieldset id="atas">

        <div>
            <p>Hair stylists are beauty service professionals who specialize
                in the fashioning and treatment of hair. Hair stylist responsibilities
                include cleaning and cutting hair, offering hair care and
                hair styling consultations and recommending hair styling products,
                among other duties.</p>
            <ul>
                <li>
                    <h2>Open: 11 am - 8 pm</h2>
                </li>
                <li>
                    <h2>Closed: Monday</h2>
                </li><br>
                <li>
                    <p>25-1, Jalan Telawi 2, Bangsar,59100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
                </li>
                <li>
                    <p>03-2284 8199</p>
                </li>
            </ul>
        </div>
    </fieldset>
    <br>
    <hr><br>
    <h1>Types of Services</h1>
    <div>
        <form id="bookingservice" method="post" action="result.php">
            <table>
                <tr>
                    <th>SERVICES</th>
                    <th>ADD ON</th>
                </tr>
                <tr>
                    <td>
                        <h4>Service 1</h4>
                        <input type="radio" name="rad" id="rad1" value="KERATIN K-GLOSS TREATMENT RM 50">
                        <label for="rad1">KERATIN K-GLOSS TREATMENT RM 50 ></label><br>
                    </td>
                    <td>
                        <input type="checkbox" name="cb1" value="400" id="cb1">
                        <label for="cb1">S - RM 400</label><br>
                        <input type="checkbox" name="cb2" value="800" id="cb2">
                        <label for="cb2">L - RM 800</label><br>
                        <input type="checkbox" name="cb3" value="1000" id="cb3">
                        <label for="cb3">Extra Long - RM 1000</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Service 2</h4>
                        <input type="radio" name="rad" id="rad2" value="HAIRCUT RM 45">
                        <label for="rad2">HAIRCUT RM 45 ></label><br>
                    </td>
                    <td>
                        <input type="checkbox" name="cb4" value="200" id="cb4">
                        <label for="cb4">Director - RM 200</label><br>
                        <input type="checkbox" name="cb5" value="100" id="cb5">
                        <label for="cb5">Professional - RM 100</label><br>
                        <input type="checkbox" name="cb6" value="70" id="cb6">
                        <label for="cb6">Stylist - RM 70</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4>Service 3</h4>
                        <input type="radio" name="rad" id="rad3" value="COLOR RM 150">
                        <label for="rad3">COLOR RM 150 ></label><br>
                    </td>
                    <td>
                        <input type="checkbox" name="cb7" value="190" id="cb7">
                        <label for="cb7">Director - RM 190</label><br>
                        <input type="checkbox" name="cb8" value="170" id="cb8">
                        <label for="cb8">Professional - RM 170</label><br>
                        <input type="checkbox" name="cb9" value="120" id="cb9">
                        <label for="cb9">Stylist - RM 120</label><br>
                    </td>
                <tr>
                    <td>
                        <h4>Service 4</h4>
                        <input type="radio" name="rad" id="rad4" value="REBONDING & RELAXING RM 250">
                        <label for="rad4">REBONDING & RELAXING RM 250 ></label><br>
                    </td>
                    <td>
                        <input type="checkbox" name="cb10" value="270" id="cb10">
                        <label for="cb10">Director - RM 270</label><br>
                        <input type="checkbox" name="cb11" value="230" id="cb11">
                        <label for="cb11">Professional - RM 230</label><br>
                        <input type="checkbox" name="cb12" value="190" id="cb12">
                        <label for="cb12">Stylist - RM 190</label><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <button type="reset">RESET</button>
                        <button type="submit">BOOK</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>