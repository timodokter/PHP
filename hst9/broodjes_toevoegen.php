<html lang="en">
<head>
    <title>Broodjes overzicht</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Bakkerij Vlecht Beheer</h1>
</header>
<div id="wrapper">
    <ul>
        <li>
            <a href="index.php">Broodjes overzicht</a>
        </li>
        <li>
            <a href="broodjes_toevoegen.php">Broodjes toevoegen</a>
        </li>
    </ul>
    <form action="index.php" method="get">
        <label>
            Vul hier het soort meel waarmee het broodje gemaakt is in: <br>
            <input type="text" name="meel-broodje"> <br>
        </label>
        <label>
            Vul hier de vorm van het broodje in: <br>
            <input type="text" name="vorm-broodje"> <br>
        </label>
        <label>
            Vul hier het gewicht van het broodje in: <br>
            <input type="text" name="gewicht-broodje" <br>
        </label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</div>
</body>
</html>