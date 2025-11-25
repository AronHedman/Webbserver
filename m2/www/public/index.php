<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Moment 2</title>
</head>

<body>

   <?php

   include('inc/math.php');

   $summa = sum(2, 5);

   echo ($summa);

   echo (strip_tags("<h1>Moment 2 - <strong>PHP</strong> - Strip_tags</h1>", "<h1>"));

   for ($i = 1; $i <= 10; $i++) {
      echo ($i / 10 + 1 . "<br>");
   }

   $i = 1;
   while ($i <= 10) {
      echo ($i / 10 + 1 . "<br>");
      $i++;
   }

   ?>

</body>

</html>