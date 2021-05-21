<html>
<head>
    <meta charset="utf-8">
    <title>FORMULARI ALTA CLIENT</title>
</head>
<body>

<center><h1>ENQUESTA TREBALL</h1></center>
<center>
    <form action="" method="get">

        <p>
            Nom:
            <input pattern="[A-Za-z]{1-20}"type="text" name="nom" required>
        </p>
        <p>
            E-mail:
            <input type="text" name="email">
        </p>
        <p>
            DNI:
            <input pattern="[0-9]{8}[A-Za-z]{1}" type="text" name="dni" required>
        </p>
        <p>
            TLF:
            <input pattern="[0-9]{9}" type="tel" id="tlf" name="telefon" required>
        </p>
        <p>Tens experiència laboral?</p>
        <p>
            <input type="radio" name="experiencia"
                <?php if (isset($exp) && exp == "SI") echo "checked"; ?>
                   value="afirmatiu" required>SI
            <input type="radio" name="experiencia"
                <?php if (isset($exp) && exp == "NO") echo "checked"; ?>
                   value="negatiu" required>NO
        </p>
        <p>En cas afirmatiu, explica quina experiència tens:</p>
        <p><textarea name="message" placeholder="Message" required</textarea></p>
        <p>
            <input type="submit" name="submit"></input>
        </p>
    </form>

</center>
</body>
</html>

<?php

echo "Nom: " .$_GET['nom'] . "<br />\n";
echo "E-Mail: " .$_GET['email'] . "<br />\n";
echo "DNI: " .$_GET['dni'] . "<br />\n";
echo "TLF: " .$_GET['telefon'] . "<br />\n";
echo "Experiència? " .$_GET['experiencia'] . "<br />\n";
echo "Explicació: " .$_GET['message'] . "<br />\n";


pre_r($_POST);
pre_r($_GET);
pre_r($_REQUEST);


$nom = test_input($_POST["nom"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
    $nomErr = "Solament lletres i espais en blanc";
}

?>
