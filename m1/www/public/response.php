<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Valuta</title>
</head>
<body>
<h1>Valutan i kronor</h1>
<?php
    $dollar = $_POST['currency'];
    $sek = $dollar * 9.7;
    
    echo "<p>$dollar $  =  $sek kr</p>";
?>

<h1>År till pension:</h1>
<?php
    $age = $_POST['age'];
    $name = $_POST['name'];
    $yearsLeft = 65 - $age;

    echo "<p>$name är $age år gammal och har $yearsLeft år kvar till pension.</p>";
?>

<h1>Kalkylator</h1>
<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $sum = $n1 + $n2;

    echo "<p>Summan av $n1 och $n2 är $sum.</p>";
?>

<h1>Quizz Answers</h1>
<?php
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];

    $points = 0;

    if(strcasecmp($q1, $name) == 0) {
        $ans1 = "Rätt! Du vet vad du heter, bra...";
        $points++;
    } else {
        $ans1 = "Fel! Du sa ju att du hette $name.";
    }
    echo "<fieldset><p>Vad heter du?<fieldset> $q1</fieldset></p><br><fieldset>$ans1</fieldset></fieldset>";

    $nameReverse = strrev($name);
    if(strcasecmp($q2, $nameReverse) == 0) {
        $ans2 = "Rätt! Ditt namn baklänges är $nameReverse.";
        $points++;
    } else {
        $ans2 = "Fel! Ditt namn baklänges är $nameReverse.";
    }
    echo "<fieldset><p>Vad är ditt namn baklänges?<fieldset> $q2</fieldset></p><br><fieldset>$ans2</fieldset></fieldset>";

    if($q3 == "Nej"){
        $ans3 = "Rätt! Inga klankare välkomna här!";
        $points++;
    } else {
        $ans3 = "01000110 01100101 01101100 00100001"; 
    }
    echo "<fieldset><p>Är du en robot?<fieldset> $q3</fieldset></p><br><fieldset>$ans3</fieldset></fieldset>";

    if($q4 == 4) {
        $ans4 = "Rätt! En bil har 4 hjul.";
        $points++;
    } else {
        $ans4 = "Fel! Tänk efter lite...";
    }
    echo "<fieldset><p>Hur många hjul har en bil?<fieldset> $q4</fieldset></p><br><fieldset>$ans4</fieldset></fieldset>";

    if($q5 == "42" || strcasecmp($q5, "fyrtiotvå") == 0 || strcasecmp($q5, "fyrtiotva") == 0) {
        $ans5 = "Rätt! <br> “In the beginning the Universe was created. This has made a lot of people very angry and been widely regarded as a bad move.” - Arthur probably";
        $points++;
    } else {
        $ans5 = "Fel! <br> 
        \"It's time like this, I wish I'd listened to my mother.\"
        <br>
        \"Why, what did she say?\"
        <br>
        \"Well I don't know, I wasn't listening!\"";
    }
    echo "<fieldset><p>Vad är svaret på livets mening?<fieldset> $q5</fieldset></p><br><fieldset>$ans5</fieldset></fieldset>";

    echo("<h1>Poäng: $points/5</h1>");
?>
</body>
</html>
