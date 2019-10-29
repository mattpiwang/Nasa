<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>

    <?php 
    if (isset($_POST['password'], $_POST['login']) AND $_POST['password'] == "kangourou" AND $_POST['login'])
    {
        
?>
    <h1 id="titre_code">Here are the access codes</h1>
    <p class="paragraphe_code"><strong>CRDS-GTFT-JQPM-V29N-24G1-HH28-LLFV</strong></p>

    <p class="paragraphe_code">Cette page est réservée au personnel de la NASA.<br />N'oubliez pas de la visiter
        régulièrement <br />car les codes d'accès
        sont
        changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
    </p>
    <?php
}
else
{

    echo '<p id="no_valid">Password not valid</p>';
}
?>

</body>

</html>