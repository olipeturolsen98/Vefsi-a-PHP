<?php
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['pwd']);
    $retyped = trim($_POST['conf_pwd']);
    $userfile = 'C:/private/encrypted.csv';
    require_once '../includes/register_user_csv.php';
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Register User</title>
</head>

<body>
<h1>Register User</h1>
<?php
if (isset($result) || isset($errors)) {
    echo '<ul>';
    if (!empty($errors)) {
        foreach ($errors as $item) {
            echo "<li>$item</li>";
        }
    } else {
        echo "<li>$result</li>";
    }
    echo '</ul>';
}
?>
<form action="" method="post">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" id="pwd">
    </p>
    <p>
        <label for="conf_pwd">Retype Password:</label>
        <input type="password" name="conf_pwd" id="conf_pwd">
    </p>
    <p>
        <input type="submit" name="register" value="Register">
    </p>
</form>
</body>
</html>