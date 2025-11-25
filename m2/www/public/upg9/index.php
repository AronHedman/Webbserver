<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry</title>
</head>

<body>

    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" name="register" value="Register">
        <input type="submit" name="login" value="Log in">
    </form>
    <?php
    include("inc/Account.php");
    include("inc/cleaner.php");
    include("inc/readWrite.php");

    if (isset($_POST['register'])) {
        $username = cleanData($_POST['username']);
        $password = cleanData($_POST['password']);

        $accounts = read();

        foreach ($accounts as $account) {
            if ($account->getUsername() === $username) {
                echo "Username already exists. Please choose a different username.";
                exit;
            }
        }

        $newAccount = new Account($username, $password);
        $accounts[] = $newAccount;
        write($accounts);

        echo "Registration successful! You can now log in.";

    } elseif (isset($_POST['login'])) {
        $username = cleanData($_POST['username']);
        $password = cleanData($_POST['password']);

        $accounts = read();

        foreach ($accounts as $account) {
            if ($account->getUsername() === $username && $account->getPassword() === $password) {
                header("Location: site.php");
                exit;
            }
        }
        echo "Invalid username or password. Please try again.";
    }
    ?>
</body>

</html>