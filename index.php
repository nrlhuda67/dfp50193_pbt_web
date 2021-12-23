<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeover Hair Salon</title>
</head>

<body>
    <div>
        <h1>Makeover Hair Salon</h1>
        Hair stylists are beauty service professionals who specialize in the fashioning and treatment of hair. Hair stylist responsibilities include cleaning and cutting hair, offering hair care and hair styling consultations and recommending hair styling products, among other duties.
    </div>
    <form id="orderProduct" method="post" action="result.php"><br>
        <label>Select Service</label>
        <select id="select1" onchange="fun1()">
            <option></option>
            <option value="1">Keratin Rebonding</option>
            <option value="2">Hair and scalp Treatment</option>
            <option value="3">Natural Rebonding</option>
            <option value="4">Organic Hair Colour</option>
        </select><br><br>
        <fieldset id="massage">
            <p>Keratin Rebonding</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Relaxing</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Hair & Wash</label><br>
            <input type="checkbox" name="cb" value="2" id="three">
            <label>Hair Cut</label><br>
            <label>RM250.00</label><br>
        </fieldset>
        <fieldset id="facial">
            <p>Hair and scalp Treatment</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Relaxing</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Eyelash Perm</label><br>
            <input type="checkbox" name="cb" value="2" id="three">
            <label>High Quality Serum</label><br>
            <label>RM200.90</label><br>

        </fieldset>
        <fieldset id="waxing">
            <p>Natural Rebonding</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Relaxing</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Hair Cut</label><br>
            <input type="checkbox" name="cb" value="3" id="three">
            <label>High Quality Serum</label><br>
            <label>RM150.00</label><br>

        </fieldset>
        <fieldset id="makeup">
            <p>Organic Hair Colour</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Lash Tint RM20</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Eyebrow Tint RM20</label><br>
            <label>RM200.90</label><br>

        </fieldset>
        <br><input class="submit" type="submit" value="Order">
        <input class="reset" type="reset" value="Reset">
    </form>
</body>

</html>