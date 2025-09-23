<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moment 2</title>
</head>

<body>
    <form action="response.php" method="post">
        <fieldset>
            <legend>Registrera</legend>
            <p>Vänligen ange: <br>
                <input type="text" name="name" placeholder="Förnamn"><br>
                <input type="text" name="surname" placeholder="Efternamn"><br>
                <input type="text" name="username" placeholder="Användarnamn"><br>
                <input type="password" name="password" placeholder="Lösenord"><br>
                <input type="password" name="password2" placeholder="Bekräfta Lösenord"><br>

            </p>
            <p>
                <input type="submit" value="Registrera" onclick=" return validatePasswords(); ">
                <script>
                    function validatePasswords() {
                        const pwd1 = document.querySelector('input[name="password"]').value;
                        const pwd2 = document.querySelector('input[name="password2"]').value;
                        if (pwd1 !== pwd2) {
                            alert('Lösenorden matchar inte!');
                            return false;
                        }
                        return true;
                    }
                </script>
            </p>
        </fieldset>
    </form>
</body>

</html>


<?php


?>