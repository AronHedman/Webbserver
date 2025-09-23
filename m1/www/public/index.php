<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WSP - Moment 1 - Aron Hedman</title>
</head>

<body>
   <form action="response.php" method="post">
      <fieldset>
         <legend>Formulär</legend>
         <p>Vänligen ange
            <input type="text" name="name" placeholder="Namn"> och
            <input type="text" name="number" placeholder="Nummer">
         </p>
         <input type="number" name="currency" placeholder="Valuta (USD)">
         <br>
         <br>
         <input type="number" name="age" placeholder="Hur gammal är du? (år)">
         <br>
      </fieldset>
      <fieldset>
         <legend>Kalkylator</legend>
         <input type="number" name="n1"> +
         <input type="number" name="n2">
         <br>
      </fieldset>
      <fieldset>
         <legend>Quizz</legend>
         <p>Vad heter du?</p>
         <input type="text" name="q1" placeholder="Svar">
         <br>
         <p>Vad är ditt namn baklänges?</p>
         <input type="text" name="q2" placeholder="Svar">
         <br>
         <p>Är du en robot?</p>
         <input type="checkbox" name="q3" value="Ja"> Ja
         <input type="checkbox" name="q3" value="Nej"> Nej
         <br>
         <p>Hur många hjul har en bil?</p>
         <input type="number" name="q4" placeholder="Svar">
         <br>
         <p>Vad är svaret på livets mening?</p>
         <input type="text" name="q5" placeholder="Svar">
      </fieldset>

      <fieldset>
         <input type="submit" value="Beräkna">
      </fieldset>
      </fieldset>
</body>

</html>