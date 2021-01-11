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
            Vul hier het soort broodje in: <br>
            <input type="text" name="soort-broodje"> <br>
        </label>
        <label>
            Vul hier de uitvoering in: <br>
            <input type="text" name="uitvoeing-broodje"> <br>
        </label>
        <label>
            Vul hier de categorie in: <br>
            <input type="text" name="categorie-broodje" <br>
        </label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</div>
</body>
</html>